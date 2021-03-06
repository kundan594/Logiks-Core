// Text Field Validation Functions
// Author : Bismay Kumar Mohapatra

var emailfilter=/^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i
var numb = '0123456789';
var lwr = 'abcdefghijklmnopqrstuvwxyz';
var upr = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

function checkmail(e){
	e.value=e.value.trim();
	var returnval=emailfilter.test(e.value);
	return returnval;
}
function checkurl(e) {
	e.value=e.value.trim();
	return (e.value.indexOf("://")>2);
}
function checkphone(e){
	e.value=e.value.trim();
	v=e.value.replace(" ","");
	if(v.charAt(0)=="+") {
		v=v.replace("+","");
	}
	if(v.length<10) return false;
	else if(!isValid(v, numb)) return false;
	else return true;
}

function checkNumber(parm) {
    return isValid(parm, numb);
}

function checkLower(parm) {
    return isValid(parm, lwr);
}

function checkUpper(parm) {
    return isValid(parm, upr);
}

function checkAlpha(parm) {
    return isValid(parm, lwr + upr);
}

function checkAlphanum(parm) {
    return isValid(parm, lwr + upr + numb);
}

function checkDecimal(parm) {
    return isValid(parm, numb + '.');
}

//Other Functions

function stripBlanks(fld) {
    var result = "";
    var c = 0;
    for (i = 0; i < fld.length; i++) {
        if (fld.charAt(i) != " " || c > 0) {
            result += fld.charAt(i);
            if (fld.charAt(i) != " ") c = result.length;
        }
    }
    return result.substr(0, c);
}

function isValid(parm, val) {
    if (parm == "") return true;
    for (i = 0; i < parm.length; i++) {
        if (val.indexOf(parm.charAt(i), 0) == -1) return false;
    }
    return true;
}

//Other Form Functions

function oneOnly(parm, chr, must) {
    var atPos = parm.indexOf(chr, 0);
    if (atPos == -1) {
        return !must;
    }
    if (parm.indexOf(chr, atPos + 1) > -1) {
        return false;
    }
    return true;
}

function adjacent(parm, chrs) {
    return (parm.indexOf(chrs, 0) != -1);
}

function onlyAdjacent(parm, comb, chrs) {
    var a = parm.split(comb);
    var b = a.join('');
    for (i = 0; i < parm.length; i++) {
        if (val.indexOf(parm.charAt(i), 0) != -1) return false;
    }
    return true;
}

function setOrder(parm, first, second) {
    var pos1 = parmField.indexOf(first, 0);
    if (pos1 == -1) return false; // first char not found
    var pos2 = parmField.indexOf(second, pos1 + 1);
    if (pos2 == -1) return false; // second char doesn't follow first
    return true;
}

function setDistance(parm, first, last, min, max) {
    var pos1 = first == '' ? 0 : parmField.indexOf(first, 0);
    var pos2 = last == '' ? parmField.length - pos1 - 1 : parmField.indexOf(second, pos1 + 1);
    if (pos1 == -1) return false;
    if (pos2 < min || pos2 > max) return false;
    return true;
}

function endOption(fld, val) {
    return fld.substring(fld.lastIndexOf(val)) == val;
}

//==========================================
// Check All boxes
//==========================================
function CheckAll(fmobj) {
  for (var i=0;i<fmobj.elements.length;i++) {
    var e = fmobj.elements[i];
    if ( (e.name != 'allbox') && (e.type=='checkbox') && (!e.disabled) ) {
      e.checked = fmobj.allbox.checked;
    }
  }
}

//==========================================
// Check all or uncheck all?
//==========================================
function CheckCheckAll(fmobj) {
  var TotalBoxes = 0;
  var TotalOn = 0;
  for (var i=0;i<fmobj.elements.length;i++) {
    var e = fmobj.elements[i];
    if ((e.name != 'allbox') && (e.type=='checkbox')) {
      TotalBoxes++;
      if (e.checked) {
       TotalOn++;
      }
    }
  }
  if (TotalBoxes==TotalOn) {
    fmobj.allbox.checked=true;
  }
  else {
   fmobj.allbox.checked=false;
  }
}

//==========================================
// REVISED CHECKALL FUNCTION
//==========================================
function CheckAllRef(ref) {
  var chkAll = document.getElementById('checkAll');
  var checks = document.getElementsByName('del[]');
  var removeButton = document.getElementById('removeChecked');
  var boxLength = checks.length;
  var allChecked = false;
  var totalChecked = 0;
  if ( ref == 1 ) {
    if ( chkAll.checked == true ) {
      for ( i=0; i < boxLength; i++ ) {
        checks[i].checked = true;
      }
    }
    else {
      for ( i=0; i < boxLength; i++ ) {
        checks[i].checked = false;
      }
    }
  }
  else {
    for ( i=0; i < boxLength; i++ ) {
      if ( checks[i].checked == true ) {
        allChecked = true;
        continue;
      }
      else {
        allChecked = false;
        break;
      }
    }
    if ( allChecked == true ) {
      chkAll.checked = true;
    }
    else {
      chkAll.checked = false;
    }
  }
  for ( j=0; j < boxLength; j++ ) {
    if ( checks[j].checked == true ) {
      totalChecked++;
	}
  }
  removeButton.value = "Remove ["+totalChecked+"] Selected";
}
function analyseAndCloneForm(formid) {
	var formID=document.getElementById(formid);
	var myTs=new Array();
	var ins=formID.getElementsByTagName("input");
	for(var i=0;i<ins.length;i++) {
		var e=document.createElement("input");
		e.setAttribute('name',ins[i].name);
		e.setAttribute('type',ins[i].type);
		e.setAttribute('value',cleanText(ins[i].value));
		if(ins[i].style.display=='none') e.setAttribute('style','display:none');
		if(ins[i].style.visibility=='hidden') e.setAttribute('style','visibility:hidden');
		if(ins[i].checked) e.setAttribute('checked',ins[i].checked);
		myTs.push(e);
	}
	var ins=formID.getElementsByTagName("textarea");
	for(var i=0;i<ins.length;i++) {
		var e=document.createElement("textarea");
		e.setAttribute('name',ins[i].name);
		e.value=cleanText(ins[i].value);
		if(ins[i].style.display=='none') e.setAttribute('style','display:none');
		if(ins[i].style.visibility=='hidden') e.setAttribute('style','visibility:hidden');
		myTs.push(e);
	}
	var ins=formID.getElementsByTagName("select");
	for(var i=0;i<ins.length;i++) {
		var e=document.createElement("input");
		e.setAttribute('name',ins[i].name);
		e.setAttribute('type','text');
		e.setAttribute('value',cleanText(ins[i].value));
		if(ins[i].style.display=='none') e.setAttribute('style','display:none');
		if(ins[i].style.visibility=='hidden') e.setAttribute('style','visibility:hidden');
		myTs.push(e);
	}

	return myTs;
}
function processField(ele) {
	//Basic Processing
	if($(ele).hasClass("concatSpace")) {
		src=$(ele).attr("src");
		$(ele).val($(ele).val()+" "+$(src).val());
	} else if($(ele).hasClass("concat")) {
		src=$(ele).attr("src");
		$(ele).val($(ele).val()+$(src).val());
	} else if($(ele).hasClass("explodeSpace")) {
		src=$(ele).attr("src");
		v=$(ele).val().split(" ");
		$(ele).val(v[0]);
		$(src).val(v[1])
	}
	if($(ele).hasClass("nospace")) {
		$(ele).val($(ele).val().replace(/\s+/g, '').trim());
	} else if($(ele).hasClass("spacetounderscore")) {
		$(ele).val($(ele).val().replace(/\s+/g, '_').trim());
	} else if($(ele).hasClass("spacetoplus")) {
		$(ele).val($(ele).val().replace(/\s+/g, '+').trim());
	} 
  
	if($(ele).hasClass("uppercase")) {
		$(ele).val($(ele).val().toUpperCase().trim());
	} else if($(ele).hasClass("lowercase")) {
		$(ele).val($(ele).val().toLowerCase().trim());
	} else if($(ele).hasClass("capitalize")) {
		vx=$(ele).val().trim();
		$(ele).val(vx.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();}));
	}
	//if($(ele).hasClass("multiple") && $(ele).prop("tagName")=="SELECT") {
	//	$(ele).attr("value",$(ele).val());
	//}
}
//**********************
//Form Validator       *
//**********************
function validateForm(formid,msg) {
	if((msg==null)) msg="Please fill the mandatory fields.";
	cnt=0;
	$(".pwdfield",formid).each(function() {
			a=$(this).attr("for");
			if(a!=null && a.length>0 && $("input[name="+a+"]",formid).length>0) {
				if($("input[name="+a+"]",formid).val()!=$(this).val()) {
					cnt++;
					$(this).val("");
					showErrorMsg("Passwords Must Match.",this);
				}
			}
		});
	if(cnt>0) return false;
	$(formid).find("input,textarea,select").each(function(i) {
		$(this).removeClass("field_warns");
		$(this).removeClass("field_error");
		$(this).removeClass("field_check");

		processField(this);

		if($(this).hasClass("required")) {
			if($(this).attr('minlength')!=null && $(this).val().length<$(this).attr('minlength')) {
				cnt++;
				showWarnMsg("This field is must be filled with "+$(this).attr('minlength')+" characters",this);
				return false;
			}else if($(this).attr('maxlength')!=null && $(this).val().length>$(this).attr('maxlength')) {
				cnt++;
				showWarnMsg("This field is can be filled with "+$(this).attr('maxlength')+" characters only.",this);
				return false;
			}else if($(this).val().length<=0) {
				cnt++;
				showErrorMsg("This field is must",this);
				return false;
			}
		}
		if(($(this).hasClass("emailfield") || $(this).attr("type")=="email") && $(this).val().length>0) {
			if(!checkmail(this)) {
				cnt++;
				showErrorMsg("Please give a proper Email.",this);
				return false;
			}
		}
		if(($(this).hasClass("urlfield") || $(this).attr("type")=="url") && $(this).val().length>0) {
			if(!checkurl(this)) {
				cnt++;
				showErrorMsg("Please give a proper URL (http:// or https:// or ftp://).",this);
				return false;
			}
		}
		if(($(this).hasClass("phonefield") || $(this).hasClass("telephonefield")) && $(this).val().length>0) {
			if(!checkphone(this)) {
				cnt++;
				showErrorMsg("Please give a proper Phone No.",this);
				return false;
			}
		}
		if($(this).hasClass("mobilefield") && $(this).val().length>0) {
			if(!checkphone(this)) {
				cnt++;
				showErrorMsg("Please give a proper Mobile No.",this);
				return false;
			}
		}
		if($(this).attr("max")!=null) {
			if(parseFloat($(this).val())>$(this).attr("max")) {
				cnt++;
				showErrorMsg("Data Must Be Less Than "+$(this).attr("max"),this);
				return false;
			}
		}
		if($(this).attr("min")!=null) {
			if(parseFloat($(this).val())<$(this).attr("min")) {
				cnt++;
				showErrorMsg("Data Must Be Greater Than "+$(this).attr("min"),this);
				return false;
			}
		}
	});
	if(cnt>0) return false;
	else return true;
}

function showErrorMsg(msg, ele) {
	ele.focus();
	//$(ele).css("background-color","#FFD1D8");
	$(ele).addClass("field_error");
	if($(ele).parent("td").length>0) {
		html="<tr class='errorMsgRow'><td class='columnMsg' colspan=20 align=right>"+msg+"</td></tr>";
		a=$(html).insertAfter($(ele).parents("tr"));
		setTimeout(function() {
				$(ele).parents("tr").next("tr.errorMsgRow").slideUp("slow").detach();
			},2000);
	} else if($(ele).parent("li").length>0) {
		html="<li class='errorMsgRow' align=right><div class='columnMsg'>"+msg+"</div></li>";
		a=$(html).insertAfter($(ele).parent("li"));
		setTimeout(function() {
				$(ele).parent("li").next("li.errorMsgRow").slideUp("slow").detach();
			},2000);
	} else if($(ele).parent().find(".errorMsg").length>0) {
		$(ele).parent().find(".errorMsg").html(msg);
		$(ele).parent().find(".errorMsg").show();
		setTimeout(function() {
				$(ele).parent().find(".errorMsg").slideUp("slow");
			},2000);
	}
}
function showWarnMsg(msg, ele) {
	ele.focus();
	//$(ele).css("background-color","#C9E3FF");
	$(ele).addClass("field_warns");
	if($(ele).parents("tr").length>0) {
		html="<tr class='warnMsgRow'><td class='columnMsg' colspan=20 align=right>"+msg+"</td></tr>";
		a=$(html).insertAfter($(ele).parents("tr"));
		setTimeout(function() {
				$(ele).parents("tr").next("tr.warnMsgRow").slideUp("slow").detach();
			},2000);
	} else if($(ele).parent("li").length>0) {
		html="<li class='warnMsgRow' align=right><div class='columnMsg'>"+msg+"</div></li>";
		a=$(html).insertAfter($(ele).parent("li"));
		setTimeout(function() {
				$(ele).parent("li").next("li.warnMsgRow").slideUp("slow").detach();
			},2000);
	} else if($(ele).parent().find(".warnMsg").length>0) {
		$(ele).parent().find(".warnMsg").html(msg);
		$(ele).parent().find(".warnMsg").show();
		setTimeout(function() {
				$(ele).parent().find(".warnMsg").slideUp("slow");
			},2000);
	}
}
function formReset(formID1) {
	var formID=document.getElementById(formID1);
	var eles=formID.getElementsByTagName("input");
	for(var i=0;i<eles.length;i++) {
		if(eles[i].type=='button') continue;
		eles[i].value='';
	}
}
