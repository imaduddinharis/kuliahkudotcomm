<?php
include('../controller/login.php');
if(isset($_SESSION['tipe_user'])){	
 header("location: forward.php");
}
?>
<!DOCTYPE html>
<html class="html" lang="en-US">
 <head>
  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.watch.js", "webpro.js", "musewpslideshow.js", "jquery.museoverlay.js", "touchswipe.js", "index.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.0.0.309"/>
  <title>Home</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4052507572"/>
  <link rel="stylesheet" type="text/css" href="css/master_a-master.css?216378482"/>
  <link rel="stylesheet" type="text/css" href="css/index.css?3909497566" id="pagesheet"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
</script>
   </head>
 <body>

  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="browser_width colelem" id="u377-bw">
     <div class="shadow" id="u377"><!-- group -->
      <div class="clearfix" id="u377_align_to_page">
       <div class="clip_frame grpelem" id="u378"><!-- image -->
        <img class="block" id="u378_img" src="images/1.png" alt="" width="82" height="69"/>
       </div>
       <img class="grpelem" id="u387-4" alt="KULIAHKU.com" width="447" height="64" src="images/u387-4.png"/><!-- rasterized frame -->
      </div>
     </div>
    </div>
    <div class="clearfix colelem" id="pu403"><!-- group -->
     <div class="clip_frame grpelem" id="u403"><!-- image -->
      <img class="block" id="u403_img" src="images/login%20background.jpg" alt="" width="350" height="453"/>
     </div>
     <img class="grpelem" id="u409-4" alt="SIGN IN" width="176" height="36" src="images/u409-4.png"/><!-- rasterized frame -->
     <div class="grpelem" id="u410"><!-- simple frame --></div>
     <div class="clip_frame grpelem" id="u437"><!-- image -->
     <form method="post" action="/kuliahkudotcom/controller/login.php"><!--form login-->
        	<input type="text" name="judul" placeholder="username">
      	<img class="block" id="u437_img" src="images/form.png" alt="" width="206" height="10"/>

     </div>
     <div class="clip_frame grpelem" id="u1318"><!-- image -->
     
     <input type="password" name="password" placeholder="pasword">
      <img class="block" id="u1318_img" src="images/form.png" alt="" width="206" height="10"/>
      
     </div>
     <a class="nonblock nontext clearfix grpelem" id="u450-4" href="registration.php"><!-- content --><p><span id="u450">Register</span></p></a>
     <div class="clearfix grpelem" id="u451-4"><!-- content -->
      <p><span id="u451">Lost your password?</span></p>
     </div>
     <div class="clearfix grpelem" id="u457"><!-- group -->
      <div class="shadow rounded-corners clearfix grpelem" id="u454"><!-- group -->
       <button class="nonblock nontext grpelem" id="u456-4" type="submit" style="background-color:#F7931E" name="submit"><!-- rasterized frame -->
	   <img id="u456-4_img" alt="SUBMIT" width="127" height="30" src="images/u456-4.png"/></button>
      </div>
     </div>
	 </form><!-- end form login-->
     <div class="SlideShowWidget clearfix grpelem" id="slideshowu634"><!-- none box -->
      <div class="popup_anchor" id="u652popup">
       <div class="SlideShowContentPanel clearfix" id="u652"><!-- stack box -->
        <div class="SSSlide clip_frame grpelem" id="u657"><!-- image -->
         <img class="block ImageInclude" id="u657_img" data-src="images/overview.jpg" src="images/blank.gif" alt="" data-width="977" data-height="460"/>
        </div>
        <div class="SSSlide invi clip_frame grpelem" id="u690"><!-- image -->
         <img class="block ImageInclude" id="u690_img" data-src="images/overview%202.jpg" src="images/blank.gif" alt="" data-width="977" data-height="460"/>
        </div>
        <div class="SSSlide invi clip_frame grpelem" id="u1643"><!-- image -->
         <img class="block ImageInclude" id="u1643_img" data-src="images/overview%203.jpg" src="images/blank.gif" alt="" data-width="977" data-height="460"/>
        </div>
       </div>
      </div>
     </div>
     <div class="clip_frame grpelem" id="u1321"><!-- image -->
      <img class="block" id="u1321_img" src="images/users-user-icon.png" alt="" width="24" height="24"/>
     </div>
     <div class="clip_frame grpelem" id="u1327"><!-- image -->
      <img class="block" id="u1327_img" src="images/pass%20icon.png" alt="" width="24" height="24"/>
     </div>
    </div>
    <div class="verticalspacer"></div>
    <div class="browser_width colelem" id="u1630-bw">
     <div id="u1630"><!-- group -->
      <div class="clearfix" id="u1630_align_to_page">
       <img class="grpelem" id="u1631-4" alt="Copyright @2016" width="208" height="35" src="images/u1631-4.png"/><!-- rasterized frame -->
      </div>
     </div>
    </div>
   </div>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script src="scripts/museutils.js?183364071" type="text/javascript"></script>
  <script src="scripts/jquery.watch.js?71412426" type="text/javascript"></script>
  <script src="scripts/webpro.js?3803554875" type="text/javascript"></script>
  <script src="scripts/musewpslideshow.js?242596657" type="text/javascript"></script>
  <script src="scripts/jquery.museoverlay.js?493285861" type="text/javascript"></script>
  <script src="scripts/touchswipe.js?4038331989" type="text/javascript"></script>
  <!-- Other scripts -->
  <script type="text/javascript">
   $(document).ready(function() { try {
(function(){var a={},b=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),16);return 0};(function(){$('link[type="text/css"]').each(function(){var b=($(this).attr("href")||"").match(/\/?css\/([\w\-]+\.css)\?(\d+)/);b&&b[1]&&b[2]&&(a[b[1]]=b[2])})})();(function(){$("body").append('<div class="version" style="display:none; width:1px; height:1px;"></div>');
for(var c=$(".version"),d=0;d<Muse.assets.required.length;){var f=Muse.assets.required[d],g=f.match(/([\w\-\.]+)\.(\w+)$/),k=g&&g[1]?g[1]:null,g=g&&g[2]?g[2]:null;switch(g.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");c.addClass(k);var g=b(c.css("color")),h=b(c.css("background-color"));g!=0||h!=0?(Muse.assets.required.splice(d,1),"undefined"!=typeof a[f]&&(g!=a[f]>>>24||h!=(a[f]&16777215))&&Muse.assets.outOfDate.push(f)):d++;c.removeClass(k);break;case "js":k.match(/^jquery-[\d\.]+/gi)&&
typeof $!="undefined"?Muse.assets.required.splice(d,1):d++;break;default:throw Error("Unsupported file type: "+g);}}c.remove();if(Muse.assets.outOfDate.length||Muse.assets.required.length)c="Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.",(d=location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi))&&Muse.assets.outOfDate.length&&(c+="\nOut of date: "+Muse.assets.outOfDate.join(",")),d&&Muse.assets.required.length&&(c+="\nMissing: "+Muse.assets.required.join(",")),alert(c)})()})();
/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.resizeHeight()/* resize height */
Muse.Utils.initWidget('#slideshowu634', function(elem) { $(elem).data('widget', new WebPro.Widget.ContentSlideShow(elem, {autoPlay:true,displayInterval:3500,slideLinkStopsSlideShow:false,transitionStyle:'fading',lightboxEnabled_runtime:false,shuffle:false,transitionDuration:500,enableSwipe:true,elastic:'off',resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false})); });/* #slideshowu634 */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
