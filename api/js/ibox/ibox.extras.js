var iBoxPlugin_Vimeo=function(){var B={url:/(?:http:\/\/)?(?:www\.)?vimeo\.com\/(\d+).*/};var A={match:function(C){return C.match(B.url)},render:function(C,E){id=C.match(B.url)[1];E.width=506;E.height=337;E.constrain=true;var D='<object width="100%" height="100%"><param name="allowfullscreen" value="true" /> <param name="allowscriptaccess" value="always" /> <param name="movie" value="http://www.vimeo.com/moogaloop.swf?clip_id='+id+'&amp;server=www.vimeo.com&amp;show_title=0&amp;show_byline=0&amp;show_portrait=0&amp;color=00adef&amp;fullscreen=1" /> <embed src="http://www.vimeo.com/moogaloop.swf?clip_id='+id+'&amp;server=www.vimeo.com&amp;show_title=0&amp;show_byline=0&amp;show_portrait=0&amp;color=00adef&amp;fullscreen=1" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="100%" height="100%"></embed></object>';iBox.html(D,E)}};return A}();iBox.plugins.register(iBoxPlugin_Vimeo);var iBoxPlugin_MySpace=function(){var B={url:/(?:http:\/\/)?vids\.myspace\.com\/index\.cfm\?fuseaction=vids.individual&VideoID=(\d+).*/};var A={match:function(C){return C.match(B.url)},render:function(C,E){id=C.match(B.url)[1];E.width=425;E.height=360;E.constrain=true;var D='<object width="100%" height="100%" ><param name="allowFullScreen" value="true"/><param name="movie" value="http://mediaservices.myspace.com/services/media/embed.aspx/m='+id+',t=1,mt=video"/><embed src="http://mediaservices.myspace.com/services/media/embed.aspx/m='+id+',t=1,mt=video" width="100%" height="100%" allowFullScreen="true" type="application/x-shockwave-flash"></embed></object>';iBox.html(D,E)}};return A}();iBox.plugins.register(iBoxPlugin_MySpace);