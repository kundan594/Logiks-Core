<?php
/*
 * This contains all the security related functions.
 *
 * Author: Bismay Kumar Mohapatra bismay4u@gmail.com
 * Version: 1.0
 */
if(!defined('ROOT')) exit('No direct script access allowed');
//Functions ::  session_check,isAdminSite,user_admin_check,checkUserSiteAccess,isLinkAccessable
// 				checkDevMode, checkBlacklist,checkSiteMode
if(!function_exists("session_check")) {
	//User Is Logged In
	//Site Being Accessed Is Correct
	function session_check($redirect=false,$showErrorMsg=false) {
		$valid=false;

		if(defined("SITENAME")) {
			if(isset($_SESSION['SESS_USER_ID']) && isset($_SESSION['SESS_PRIVILEGE_ID']) && isset($_SESSION['SESS_ACCESS_ID']) &&
				isset($_SESSION['SESS_TOKEN']) && isset($_SESSION['SESS_SITEID']) &&
				isset($_SESSION['SESS_LOGIN_SITE']) && isset($_SESSION['SESS_ACCESS_SITES'])) {
				if($_SESSION['SESS_TOKEN'] == md5(SiteID.session_id())) {
					if(is_numeric($_SESSION['SESS_PRIVILEGE_ID']) && $_SESSION['SESS_PRIVILEGE_ID']>0) {
						if($_SESSION['SESS_LOGIN_SITE']==$_REQUEST['site'])
							$valid=true;
						elseif(is_array($_SESSION['SESS_ACCESS_SITES']) && in_array(SITENAME,$_SESSION['SESS_ACCESS_SITES']))
							$valid=true;
					}
				}
			}
		}

		if($valid) {
			return true;
		} else {
			if($redirect) {
				$relink=SiteLocation . "login.php?site=".SITENAME;
				redirectTo($relink,"SESSION Expired. Going To Login Page");
				sessionExpired();
				exit();
			} else {
				if($showErrorMsg) {
					trigger_ForbiddenError("Accessing Forbidden Page");
				}
				return false;
			}
		}
	}
	function isAdminSite($autoExit=true) {
		if(!defined("ADMIN_APPSITES")) {
			$f=ROOT.CFG_FOLDER."lists/adminsites.lst";
			$f=file_get_contents($f);
			$f=explode("\n",$f);
			if(strlen($f[count($f)-1])==0) unset($f[count($f)-1]);
			define("ADMIN_APPSITES",implode(",",$f));
		}
		$site=SITENAME;
		$acp=explode(",",ADMIN_APPSITES);
		if(in_array($site, $acp)) return true;
		else {
			if($autoExit) {
				if(function_exists("printErr"))	{
					printErr("AccessDenial","Requested Site Is Forbidden To Current User.");
				} else {
					dispErrMessage("Requested Site Is Forbidden To Current User.");
				}
				exit();
			}
			return false;
		}
	}
	function user_admin_check($redirect=false,$msg="This Is System Administrator Only Page.") {
		$a=session_check(false);
		if($a) {
			isAdminSite();
			$acp=$_SESSION['SESS_ACCESS_SITES'];
			if(!in_array(SITENAME,$acp)) {
				if($redirect) trigger_ForbiddenError($msg);
				return false;
			}
			return true;
		} else {
			if($redirect) trigger_ForbiddenError($msg);
			return false;
		}
	}
	function checkUserSiteAccess($site=null,$autoExit=true) {
		if($site==null) $site=SITENAME;
		//$site=="*" &&
		if($_SESSION["SESS_ACCESS_ID"]=="1") {
			return true;
		}
		if($_SESSION["SESS_PRIVILEGE_ID"]=="1") {
			return true;
		}
		if(in_array($site, $_SESSION["SESS_ACCESS_SITES"])) return true;
		else {
			if($autoExit) {
				if(function_exists("printErr"))	{
					printErr("AccessDenial","Requested Site Is Forbidden To Current User.");
				} else {
					dispErrMessage("Requested Site Is Forbidden To Current User.");
				}
				exit();
			}
			return false;
		}
		return false;
	}
	function checkDevMode($site=null) {
		if($site==null) $site=SITENAME;

		if(defined("DEV_MODE_IP") && strlen(DEV_MODE_IP)>0) {
			$ips=explode(",",DEV_MODE_IP);
			if(count($ips)>0) {
				loadHelpers("devmode");
				__initDevMode($ips);
			}
		}
	}
	function checkSiteMode($site=null) {
		if(!defined("PUBLISH_MODE")) return false;
		if($site==null) $site=SITENAME;

		if(checkBlacklist($site)) {
			trigger_ForbiddenError("Your IP Is Banned By Admin",
						"<div style='margin-top:20px;font:14px Georgia;'>Sorry, your IP has been banned/restricted/blocked by Server Administrator.<br/><br/>
						Please contact <b>".getConfig("APPS_COMPANY")."</b> or email <a href='mailto:".WEBMASTER_EMAIL."'>".WEBMASTER_EMAIL."</a>
						for further details<br/><br/>"
						. "<h4>". getConfig("APPS_COMPANY") . " Team</h4>"
						. "<h4>".  date("d/m/y H:m:s")."</h4></div>"
						);
			exit();
		}

		if(strtolower(PUBLISH_MODE)=="blocked") {
			trigger_ForbiddenError("Site <b>'{$_SERVER['HTTP_HOST']}'</b> Is Currently Blocked.",
						"This site is currently blocked by <i>Server Administrator</i> If you are the 
						webmaster for this site or you own this site, please contact <b>Server Administrator</b> 
						or email <a href='mailto:".WebMasterMail."'>".WebMasterMail."</a> for activating this site.<br/>"
						);
			exit();
		} elseif(strtolower(PUBLISH_MODE)=="restricted" || strtolower(PUBLISH_MODE)=="whitelist") {
			$client=$_SERVER["REMOTE_ADDR"];

			$f=ROOT.CACHE_IPLIST_FOLDER."{$site}/whitelist.dat";
			if(!file_exists($f)) {
				Security::generateIPListCache("whitelist");
			} elseif((time()-filectime($f))>PERMISSION_CACHE_PERIOD) {
				Security::generateIPListCache("whitelist");
			}
			if(!file_exists($f)) {
				dispErrMessage("Security Inconsistancy Found. Please Contact Admin.");
				exit();
			}
			$data=file_get_contents($f);
			$ipArr=explode("\n",$data);
			if(strlen($ipArr[count($ipArr)-1])==0) unset($ipArr[count($ipArr)-1]);
			if(!in_array($client,$ipArr)) {
				trigger_ForbiddenError("Site <b>'{$_SERVER['HTTP_HOST']}'</b> Is Currently In Restrictive/Whitelist Only Mode.",
							"Sorry, currently this Site is running in Whitelist/Restrictive mode as per Server Administrator.
							In this mode you will be allowed to access the domain/site only if your ip belongs to the WhiteList IP Address for the site.<br/><br/>
							Please contact <b>".getConfig("APPS_COMPANY")."</b> or email <a href='mailto:".WEBMASTER_EMAIL."'>".WEBMASTER_EMAIL."</a>
							for further details<br/><br/>"
							);
				exit();
			}
		} elseif(strtolower(PUBLISH_MODE)=="maintainance") {
			trigger_ForbiddenError("Site <b>'{$_SERVER['HTTP_HOST']}'</b> Is Down For Maintenance.",
						"<h2>OOPs........., Wrong Time :-(</h2>
						<h3>Currently we are upgrading new features sets.</h3>
						Please Visit After Some Time.<br/><br/><i>Thank You</i><br/>"
						. "<i>". getConfig("APPS_COMPANY") . " Team</i>"
						);
			exit();
		} elseif(strtolower(PUBLISH_MODE)=="underconstruction") {
			trigger_ForbiddenError("Site <b>'{$_SERVER['HTTP_HOST']}'</b> Is Under-Construction.",
						"<h2>OOPs........., Wrong Time :-(</h2>
						<h3>Thank you for visiting us. We are still in the process of creating this appliation.</h3>
						Please Visit After Some Time.<br/><br/><i>Thank You</i><br/>"
						. "<i>". getConfig("APPS_COMPANY") . " Team</i>"
						);
			exit();
		}
	}
	function isLinkAccessible($link=null) {
		if($link==null) {
			$link=getPrettyLink();
		}
		Security::isLinkRedirected($link);
		
		$pridid="guest";
		if(isset($_SESSION["SESS_PRIVILEGE_ID"])) $pridid=$_SESSION["SESS_PRIVILEGE_ID"];
		if($pridid>0 && $pridid<3) return true;

		$site=SITENAME;
		$privilege=md5($pridid);
		$f=ROOT.CACHE_PERMISSIONS_FOLDER."{$site}/{$privilege}.dat";
		
		if(!file_exists($f)) {
			Security::generateUserLinksCache($pridid);
		} elseif((time()-filectime($f))>PERMISSION_CACHE_PERIOD) {
			Security::generateUserLinksCache($pridid);
		}
		
		if(!file_exists($f)) {
			dispErrMessage("Security Inconsistancy Found. Please Contact Admin.");
			exit();
		}
		$data=file_get_contents($f);
		$menuArr=explode("\n",$data);
		//if(count($data)>1) if(strlen($data[count($data)-1])==0) unset($data[count($data)-1]);
		$menuArr[]=SiteLocation.SITENAME."/".getConfig("LANDING_PAGE");
		//printArray($menuArr);exit($link);
		
		if(in_array($link,$menuArr)) {
			return true;
		} else {
			if(defined("ACCESS")) {
				if(ACCESS=="public") {
					$menuArr[]=SiteLocation.SITENAME."/%";
				}
			}
			foreach($menuArr as $a) {
				$strz=substr($a, 0,strlen($a)-1);
				if(strlen($a)>0 && substr($a, strlen($a)-1)=='%' && 
					(strpos($link,$strz)===0)) {
						return true;
				}
			}
			if(MASTER_DEBUG_MODE=="true") {
				echo "<div align=center>Link Not Accessible :: <b style='color:maroon;'>$link</b></div>";
				echo "<div id=errorMsgPopup style='display:none'>";
				printArray($menuArr);
				echo "</div>";
			}
			return false;
		}
	}
	function checkBlacklist($site=null) {
		if($site==null) $site=SITENAME;
		$client=$_SERVER["REMOTE_ADDR"];
		$f=ROOT.CACHE_IPLIST_FOLDER."{$site}/blacklist.dat";

		if(!file_exists($f)) {
			Security::generateIPListCache("blacklist");
		} elseif((time()-filectime($f))>getConfig("PERMISSION_CACHE_PERIOD")) {
			Security::generateIPListCache("blacklist");
		}
		if(!file_exists($f)) {
			dispErrMessage("Security Inconsistancy Found. Please Contact Admin.");
			exit();
		}
		$data=file_get_contents($f);
		$ipArr=explode("\n",$data);
		if(strlen($ipArr[count($ipArr)-1])==0) unset($ipArr[count($ipArr)-1]);
		if(in_array($client,$ipArr)) {
			return true;
		}
		return false;
	}
}
?>
