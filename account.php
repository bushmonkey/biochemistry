<?php
  //require_once __DIR__ . '/../vendor/autoload.php';

  $siteKey = '6Lft-wYUAAAAAOomhMGEut26I6pTCVMF1hPiuZN0';
  $secret = '6Lft-wYUAAAAABVu6CvZibaXTinpLzXOJM4LIlwB';
  $lang = 'en';

  function filter($data) { //Filters data against security risks.
      if (is_array($data)) {
          foreach ($data as $key => $element) {
              $data[$key] = filter($element);
          }
      } else {
          $data = trim(htmlentities(strip_tags($data)));
          if(get_magic_quotes_gpc()) $data = stripslashes($data);
          $data = mysql_real_escape_string($data);
      }
      return $data;
  }
?>


<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="en-GB">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.2.1.352"/>
  
  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "museconfig.js", "jquery.musepolyfill.bgsize.js", "webpro.js", "musewpslideshow.js", "jquery.museoverlay.js", "touchswipe.js", "jquery.musemenu.js", "jquery.watch.js", "require.js", "account.css"], "outOfDate":[]};
</script>
  
  <link rel="shortcut icon" href="images/favicon.ico?crc=3784057462"/>
  <title>Account</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=3967445324"/>
  <link rel="stylesheet" type="text/css" href="css/master_main-master.css?crc=312210999"/>
  <link rel="stylesheet" type="text/css" href="css/account.css?crc=368725749" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_account.css?crc=4072031728"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/jura:n5,n6,n3:default.js" type="text/javascript">\x3C/script>');
</script>
  <!--[if lt IE 9]>
  <script src="scripts/html5shiv.js?crc=4241844378" type="text/javascript"></script>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   var RecaptchaOptions = {"custom_theme_widget":"widgetu31659","theme":"custom","custom_translations":{"cant_hear_this":"Download sound as MP3","play_again":"Play sound again"}};
</script>
    <!--HTML Widget code-->
  
<style>
.AddtoCart_off, .AddtoCart_on  {
       transition:all .5s ease;
	-webkit-transition: all .5s ease;
}
}
</style>

<style>
.Buynow_off, .Buynow_on  {
       transition:all .5s ease;
	-webkit-transition: all .5s ease;
}
}
</style>

<style>
.Recent_AddtoCart_off, .Recent_AddtoCart_on  {
       transition:all .5s ease;
	-webkit-transition: all .5s ease;
}
}
</style>

<style>
.loginoff, .loginon  {
       transition:all .5s ease;
	-webkit-transition: all .5s ease;
}
}
</style>

       <style>
        body {
    overflow: hidden;
}


#preloader {
    position:fixed;
    top:0;
    left:0;
    right:0;
    bottom:0;
    background-color:#111111; /* change if the mask should have another color then white */
    opacity:0.8;
    //z-index:99; /* makes sure it stays on top */
}

#status {
    width:200px;
    height:50px;
    position:absolute;
    left:50%; /* centers the loading animation horizontally one the screen */
    top:50%; /* centers the loading animation vertically one the screen */
    margin-left:-100px;
    margin-top:55px;
    font-size:12px;
    color:#F25E29;
    text-align:center;
    font-family:Verdana;
}
       </style>
       <style>
#floatingBarsG{
position:absolute;
    left:50%; /* centers the loading animation horizontally one the screen */
    top:50%; /* centers the loading animation vertically one the screen */
width:50px;
margin-left:-25px;
height:62px}

.blockG{
position:absolute;
background-color:#111111;
width:8px;
height:19px;
-moz-border-radius:7px 7px 0 0;
-moz-transform:scale(0.4);
-moz-animation-name:fadeG;
-moz-animation-duration:1.28s;
-moz-animation-iteration-count:infinite;
-moz-animation-direction:linear;
-webkit-border-radius:7px 7px 0 0;
-webkit-transform:scale(0.4);
-webkit-animation-name:fadeG;
-webkit-animation-duration:1.28s;
-webkit-animation-iteration-count:infinite;
-webkit-animation-direction:linear;
-ms-border-radius:7px 7px 0 0;
-ms-transform:scale(0.4);
-ms-animation-name:fadeG;
-ms-animation-duration:1.28s;
-ms-animation-iteration-count:infinite;
-ms-animation-direction:linear;
-o-border-radius:7px 7px 0 0;
-o-transform:scale(0.4);
-o-animation-name:fadeG;
-o-animation-duration:1.28s;
-o-animation-iteration-count:infinite;
-o-animation-direction:linear;
border-radius:7px 7px 0 0;
transform:scale(0.4);
animation-name:fadeG;
animation-duration:1.28s;
animation-iteration-count:infinite;
animation-direction:linear;
}

#rotateG_01{
left:0;
top:23px;
-moz-animation-delay:0.4800000000000001s;
-moz-transform:rotate(-90deg);
-webkit-animation-delay:0.4800000000000001s;
-webkit-transform:rotate(-90deg);
-ms-animation-delay:0.4800000000000001s;
-ms-transform:rotate(-90deg);
-o-animation-delay:0.4800000000000001s;
-o-transform:rotate(-90deg);
animation-delay:0.4800000000000001s;
transform:rotate(-90deg);
}

#rotateG_02{
left:6px;
top:8px;
-moz-animation-delay:0.64s;
-moz-transform:rotate(-45deg);
-webkit-animation-delay:0.64s;
-webkit-transform:rotate(-45deg);
-ms-animation-delay:0.64s;
-ms-transform:rotate(-45deg);
-o-animation-delay:0.64s;
-o-transform:rotate(-45deg);
animation-delay:0.64s;
transform:rotate(-45deg);
}

#rotateG_03{
left:21px;
top:2px;
-moz-animation-delay:0.8s;
-moz-transform:rotate(0deg);
-webkit-animation-delay:0.8s;
-webkit-transform:rotate(0deg);
-ms-animation-delay:0.8s;
-ms-transform:rotate(0deg);
-o-animation-delay:0.8s;
-o-transform:rotate(0deg);
animation-delay:0.8s;
transform:rotate(0deg);
}

#rotateG_04{
right:6px;
top:8px;
-moz-animation-delay:0.9600000000000002s;
-moz-transform:rotate(45deg);
-webkit-animation-delay:0.9600000000000002s;
-webkit-transform:rotate(45deg);
-ms-animation-delay:0.9600000000000002s;
-ms-transform:rotate(45deg);
-o-animation-delay:0.9600000000000002s;
-o-transform:rotate(45deg);
animation-delay:0.9600000000000002s;
transform:rotate(45deg);
}

#rotateG_05{
right:0;
top:23px;
-moz-animation-delay:1.12s;
-moz-transform:rotate(90deg);
-webkit-animation-delay:1.12s;
-webkit-transform:rotate(90deg);
-ms-animation-delay:1.12s;
-ms-transform:rotate(90deg);
-o-animation-delay:1.12s;
-o-transform:rotate(90deg);
animation-delay:1.12s;
transform:rotate(90deg);
}

#rotateG_06{
right:6px;
bottom:6px;
-moz-animation-delay:1.28s;
-moz-transform:rotate(135deg);
-webkit-animation-delay:1.28s;
-webkit-transform:rotate(135deg);
-ms-animation-delay:1.28s;
-ms-transform:rotate(135deg);
-o-animation-delay:1.28s;
-o-transform:rotate(135deg);
animation-delay:1.28s;
transform:rotate(135deg);
}

#rotateG_07{
bottom:0;
left:21px;
-moz-animation-delay:1.44s;
-moz-transform:rotate(180deg);
-webkit-animation-delay:1.44s;
-webkit-transform:rotate(180deg);
-ms-animation-delay:1.44s;
-ms-transform:rotate(180deg);
-o-animation-delay:1.44s;
-o-transform:rotate(180deg);
animation-delay:1.44s;
transform:rotate(180deg);
}

#rotateG_08{
left:6px;
bottom:6px;
-moz-animation-delay:1.6s;
-moz-transform:rotate(-135deg);
-webkit-animation-delay:1.6s;
-webkit-transform:rotate(-135deg);
-ms-animation-delay:1.6s;
-ms-transform:rotate(-135deg);
-o-animation-delay:1.6s;
-o-transform:rotate(-135deg);
animation-delay:1.6s;
transform:rotate(-135deg);
}

@-moz-keyframes fadeG{
0%{
background-color:#F25B29}

100%{
background-color:#FFFFFF}

}

@-webkit-keyframes fadeG{
0%{
background-color:#F25B29}

100%{
background-color:#111111}

}

@-ms-keyframes fadeG{
0%{
background-color:#F25B29}

100%{
background-color:#111111}

}

@-o-keyframes fadeG{
0%{
background-color:#F25B29}

100%{
background-color:#111111}

}

@keyframes fadeG{
0%{
background-color:#F25B29}

100%{
background-color:#111111}

}

</style>

  <!--/*

*/
-->
 </head>
 <body class="always_vert_scroll">

  <div class="clearfix" id="page"><!-- group -->
   <div class="clearfix grpelem" id="pu18704"><!-- column -->
    <div class="size_fixed colelem" id="u18704"><!-- custom html -->
    </div>
    <div class="size_fixed colelem" id="u18706"><!-- custom html -->
    </div>
    <div class="size_fixed colelem" id="u18708"><!-- custom html -->
    </div>
   </div>
   <div class="size_fixed grpelem" id="u4240"><!-- custom html -->
   </div>
   <a class="nonblock nontext" id="u651" href="index.html" title="Home"><!-- simple frame --></a>
   <div class="browser_width" id="u652-3-bw">
    <div class="menu_bg_with_shadow clearfix" id="u652-3"><!-- content -->
     <p>&nbsp;</p>
    </div>
   </div>
   <div class="browser_width" id="u8083-bw">
    <div id="u8083"><!-- simple frame --></div>
   </div>
   <div class="clearfix grpelem" id="pu904-4"><!-- column -->
    <div class="page_names clearfix colelem" id="u904-4"><!-- content -->
     <h2>Account</h2>
    </div>
    <div class="clearfix colelem" id="u3430"><!-- group -->
    <form role="form" method="post" action="login-check.php">
     <div class="rounded-corners clearfix grpelem" id="u3260"><!-- column -->
      <div class="position_content" id="u3260_position_content">
       <div class="page_names clearfix colelem" id="u3365-4"><!-- content -->
        <h2>Login</h2>
       </div>
       <div class="rounded-corners clearfix colelem" id="u3351-4"><!-- content -->
        <p>Email Address</p>
       </div>
       <div class="rounded-corners clearfix colelem" id="u3352-4"><!-- content -->
        <p>Password</p>
       </div>
       <div class="clearfix colelem" id="pu3412-4"><!-- group -->
        <div class="page_names clearfix grpelem" id="u3412-4"><!-- content -->
         <h2>Remember me on this computer</h2>
        </div>
        <div class="museBGSize grpelem" id="u3421"><!-- simple frame --></div>
       </div>
       <a class="nonblock nontext rounded-corners loginoff clearfix colelem" id="u3349-4" href="my-account.html" title="Login"><!-- content --><p class="submenu_01">LOGIN</p></a>
       <div class="page_names clearfix colelem" id="u3414-4"><!-- content -->
        <h2>Forgot Your Username or Password?</h2>
       </div>
      </div>
     </div>
    </form> 
    </div>
    <form class="form-grp clearfix colelem" id="widgetu31654" method="post" enctype="multipart/form-data" action="scripts/form-u31654.php"><!-- none box -->
     <div class="clearfix grpelem" id="u31670-4"><!-- content -->
      <p>Submitting Form...</p>
     </div>
     <div class="clearfix grpelem" id="u31669-4"><!-- content -->
      <p>The server encountered an error.</p>
     </div>
     <div class="clearfix grpelem" id="u31667-4"><!-- content -->
      <p>Form received.</p>
     </div>
         <?php if ($siteKey === '' || $secret === ''): ?>
                <h2>Add your keys</h2>
                <p>If you do not have keys already then visit <tt>
                <a href = "https://www.google.com/recaptcha/admin">
                    https://www.google.com/recaptcha/admin</a></tt> to generate them.
            Edit this file and set the respective keys in <tt>$siteKey</tt> and
            <tt>$secret</tt>. Reload the page after this.</p>
        <?php
    elseif (isset($_POST['g-recaptcha-response'])):
        // [TODO] sanitise and validate the  input using the function at the top of the page
        ?>
       <h2><tt>POST</tt> data</h2>
    <tt><pre><?php var_export($_POST); ?></pre></tt>
    <?php
// If the form submission includes the "g-captcha-response" field
// Create an instance of the service using your secret
    $recaptcha = new \ReCaptcha\ReCaptcha($secret);
// Make the call to verify the response and also pass the user's IP address
    $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
    if ($resp->isSuccess()):
// If the response is a success, that's it!
        ?>
        <h2>DEBUG: Success!</h2>
        <p>DEBUG: That's it. Everything is working.</p>
        <?php
    else:
// If it's not successful, then one or more error codes will be returned.
// Error code <tt>missing-input-response</tt> may mean the user just didn't complete the reCAPTCHA
        ?>
    <?php
    endif;
else:
// Add the g-recaptcha tag to the form you want to include the reCAPTCHA element
    ?>
<?php endif; ?>
     <input class="submit-btn NoWrap transition grpelem" id="u31668-17" type="submit" value="" tabindex="2"/><!-- state-based BG images -->
     <div class="fld-grp clearfix recaptcha_isnot_showing_audio grpelem" id="widgetu31659" data-required="true" data-type="recaptcha"><!-- none box -->
      <span class="fld-input NoWrap actAsDiv rounded-corners clearfix grpelem" id="u31661-4"><!-- content --><input class="wrapped-input" autocomplete="off" type="text" spellcheck="false" id="recaptcha_response_field" name="recaptcha_response_field" tabindex="1"/></span>
      <div class="grpelem" id="recaptcha_image"><div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div><script type="text/javascript"
                    src="https://www.google.com/recaptcha/api.js?hl=<?php echo $lang; ?>">
            </script></div>
      <div class="fld-recaptcha-mode museBGSize grpelem mode-audio mode-image" id="u31664" onclick="Recaptcha.switch_type(('image' == Recaptcha.type) ? 'audio' : 'image')" title="Switch between video and audio challenge "><!-- simple frame --></div>
     <div class="fld-recaptcha-refresh museBGSize grpelem" id="u31663" onclick="Recaptcha.reload()" title="Get a new challenge "><!-- simple frame --></div>
      <div class="fld-recaptcha-help museBGSize grpelem" id="u31666" onclick="Recaptcha.showhelp()" title="Help"><!-- simple frame --></div>
     </div>
    </form>
   </div>
   <div class="clearfix grpelem" id="pmenuu14411"><!-- group -->
    <nav class="MenuBar main_menu_tabs1 clearfix" id="menuu14411"><!-- horizontal box -->
     <div class="MenuItemContainer clearfix grpelem" id="u14419"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu main_submenu clearfix colelem" id="u14758" href="index.html"><!-- vertical box --><div class="MenuItemLabel NoWrap main_menu_tabs clearfix colelem" id="u14759-4"><!-- content --><p>Products</p></div></a>
      <div class="SubMenu MenuLevel1 clearfix" id="u14420"><!-- vertical box -->
       <ul class="SubMenuView clearfix colelem" id="u14421"><!-- vertical box -->
        <li class="MenuItemContainer clearfix colelem" id="u14590"><!-- horizontal box --><div class="MenuItem MenuItemWithSubMenu submenu clearfix grpelem" id="u14591"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_menu clearfix colelem" id="u14594-4"><!-- content --><p>Apoptosis</p></div></div><div class="SubMenu MenuLevel2 clearfix" id="u14595"><!-- vertical box --><ul class="SubMenuView clearfix colelem" id="u14596"><!-- vertical box --><li class="MenuItemContainer clearfix colelem" id="u14625"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14628" href="sample-11.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14630-4"><!-- content --><p>Sample 11</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14618"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14619" href="sample-12.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14622-4"><!-- content --><p>Sample 12</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14597"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14600" href="sample-13.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14601-4"><!-- content --><p>Sample 13</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14604"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14607" href="sample-14.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14609-4"><!-- content --><p>Sample 14</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14611"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14612" href="sample-15.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14615-4"><!-- content --><p>Sample 15</p></div></a></li></ul></div></li>
        <li class="MenuItemContainer clearfix colelem" id="u14674"><!-- horizontal box --><div class="MenuItem MenuItemWithSubMenu submenu clearfix grpelem" id="u14675"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_menu clearfix colelem" id="u14677-4"><!-- content --><p>Epigenetics</p></div></div><div class="SubMenu MenuLevel2 clearfix" id="u14679"><!-- vertical box --><ul class="SubMenuView clearfix colelem" id="u14680"><!-- vertical box --><li class="MenuItemContainer clearfix colelem" id="u14688"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14691" href="sample-21.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14692-4"><!-- content --><p>Sample 21</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14709"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14710" href="sample-22.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14712-4"><!-- content --><p>Sample 22</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14681"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14682" href="sample-23.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14684-4"><!-- content --><p>Sample 23</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14702"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14705" href="sample-24.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14706-4"><!-- content --><p>Sample 24</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14695"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14698" href="sample-25.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14700-4"><!-- content --><p>Sample 25</p></div></a></li></ul></div></li>
        <li class="MenuItemContainer clearfix colelem" id="u14506"><!-- horizontal box --><div class="MenuItem MenuItemWithSubMenu submenu clearfix grpelem" id="u14507"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_menu clearfix colelem" id="u14510-4"><!-- content --><p>Competent Cells</p></div></div><div class="SubMenu MenuLevel2 clearfix" id="u14511"><!-- vertical box --><ul class="SubMenuView clearfix colelem" id="u14512"><!-- vertical box --><li class="MenuItemContainer clearfix colelem" id="u14520"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14521" href="sample-31.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14522-4"><!-- content --><p>Sample 31</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14534"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14535" href="sample-32.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14537-4"><!-- content --><p>Sample 32</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14541"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14544" href="sample-33.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14546-4"><!-- content --><p>Sample 33</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14527"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14530" href="sample-34.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14531-4"><!-- content --><p>Sample 34</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14513"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14516" href="sample-35.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14518-4"><!-- content --><p>Sample 35</p></div></a></li></ul></div></li>
        <li class="MenuItemContainer clearfix colelem" id="u14422"><!-- horizontal box --><div class="MenuItem MenuItemWithSubMenu submenu clearfix grpelem" id="u14423"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_menu clearfix colelem" id="u14424-4"><!-- content --><p>Cloning</p></div></div><div class="SubMenu MenuLevel2 clearfix" id="u14427"><!-- vertical box --><ul class="SubMenuView clearfix colelem" id="u14428"><!-- vertical box --><li class="MenuItemContainer clearfix colelem" id="u14457"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14460" href="sample-41.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14461-4"><!-- content --><p>Sample 41</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14436"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14437" href="sample-42.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14440-4"><!-- content --><p>Sample 42</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14443"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14446" href="sample-43.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14449-4"><!-- content --><p>Sample 43</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14450"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14453" href="sample-44.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14456-4"><!-- content --><p>Sample 44</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14429"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14430" href="sample-45.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14431-4"><!-- content --><p>Sample 45</p></div></a></li></ul></div></li>
        <li class="MenuItemContainer clearfix colelem" id="u14632"><!-- horizontal box --><div class="MenuItem MenuItemWithSubMenu submenu clearfix grpelem" id="u14633"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_menu clearfix colelem" id="u14634-4"><!-- content --><p>DNA / RNA Extractions</p></div></div><div class="SubMenu MenuLevel2 clearfix" id="u14637"><!-- vertical box --><ul class="SubMenuView clearfix colelem" id="u14638"><!-- vertical box --><li class="MenuItemContainer clearfix colelem" id="u14660"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14661" href="sample-51.html"><!-- vertical box --><div class="MenuItemLabel NoWrap Slider-Sub-Text clearfix colelem" id="u14664-4"><!-- content --><h2>Sample 51</h2></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14667"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14670" href="sample-52.html"><!-- vertical box --><div class="MenuItemLabel NoWrap Slider-Sub-Text clearfix colelem" id="u14672-4"><!-- content --><h2>Sample 52</h2></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14653"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14654" href="sample-53.html"><!-- vertical box --><div class="MenuItemLabel NoWrap Slider-Sub-Text clearfix colelem" id="u14655-4"><!-- content --><h2>Sample 53</h2></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14639"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14642" href="sample-54.html"><!-- vertical box --><div class="MenuItemLabel NoWrap Slider-Sub-Text clearfix colelem" id="u14643-4"><!-- content --><h2>Sample 54</h2></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14646"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14649" href="sample-55.html"><!-- vertical box --><div class="MenuItemLabel NoWrap Slider-Sub-Text clearfix colelem" id="u14651-4"><!-- content --><h2>Sample 55</h2></div></a></li></ul></div></li>
        <li class="MenuItemContainer clearfix colelem" id="u14548"><!-- horizontal box --><div class="MenuItem MenuItemWithSubMenu submenu clearfix grpelem" id="u14549"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_menu clearfix colelem" id="u14552-4"><!-- content --><p>Enzymes</p></div></div><div class="SubMenu MenuLevel2 clearfix" id="u14553"><!-- vertical box --><ul class="SubMenuView clearfix colelem" id="u14554"><!-- vertical box --><li class="MenuItemContainer clearfix colelem" id="u14583"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14586" href="sample-61.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14588-4"><!-- content --><p>Sample 61</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14555"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14558" href="sample-62.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14559-4"><!-- content --><p>Sample 62</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14576"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14577" href="sample-63.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14578-4"><!-- content --><p>Sample 63</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14569"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14572" href="sample-64.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14575-4"><!-- content --><p>Sample 64</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14562"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14565" href="sample-65.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14567-4"><!-- content --><p>Sample 65</p></div></a></li></ul></div></li>
        <li class="MenuItemContainer clearfix colelem" id="u14464"><!-- horizontal box --><div class="MenuItem MenuItemWithSubMenu submenu clearfix grpelem" id="u14502"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_menu clearfix colelem" id="u14504-4"><!-- content --><p>Endonuclease</p></div></div><div class="SubMenu MenuLevel2 clearfix" id="u14465"><!-- vertical box --><ul class="SubMenuView clearfix colelem" id="u14466"><!-- vertical box --><li class="MenuItemContainer clearfix colelem" id="u14474"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14475" href="sample-71.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14476-4"><!-- content --><p>Sample 71</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14495"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14496" href="sample-72.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14499-4"><!-- content --><p>Sample 72</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14467"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14470" href="sample-73.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14471-4"><!-- content --><p>Sample 73</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14481"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14482" href="sample-74.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14483-4"><!-- content --><p>Sample 74</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14488"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14489" href="sample-75.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14490-4"><!-- content --><p>Sample 75</p></div></a></li></ul></div></li>
        <li class="MenuItemContainer clearfix colelem" id="u14716"><!-- horizontal box --><div class="MenuItem MenuItemWithSubMenu submenu clearfix grpelem" id="u14754"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_menu clearfix colelem" id="u14757-4"><!-- content --><p>Consumables</p></div></div><div class="SubMenu MenuLevel2 clearfix" id="u14717"><!-- vertical box --><ul class="SubMenuView clearfix colelem" id="u14718"><!-- vertical box --><li class="MenuItemContainer clearfix colelem" id="u14733"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14736" href="sample-81.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14738-4"><!-- content --><p>Sample 81</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14719"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14720" href="sample-82.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14722-4"><!-- content --><p>Sample 82</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14726"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14727" href="sample-83.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14729-4"><!-- content --><p>Sample 83</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14747"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14748" href="sample-84.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14749-4"><!-- content --><p>Sample 84</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14740"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14741" href="sample-85.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14744-4"><!-- content --><p>Sample 85</p></div></a></li></ul></div></li>
       </ul>
      </div>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u14762"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu main_submenu clearfix colelem" id="u14765" href="feature.html"><!-- vertical box --><div class="MenuItemLabel NoWrap main_menu_tabs clearfix colelem" id="u14768-4"><!-- content --><p>Feature</p></div></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u14776"><!-- vertical box -->
      <div class="MenuItem MenuItemWithSubMenu main_submenu clearfix colelem" id="u14777"><!-- vertical box -->
       <div class="MenuItemLabel NoWrap main_menu_tabs clearfix colelem" id="u14779-4"><!-- content -->
        <p>Support</p>
       </div>
      </div>
      <div class="SubMenu MenuLevel1 clearfix" id="u14781"><!-- vertical box -->
       <ul class="SubMenuView clearfix colelem" id="u14782"><!-- vertical box -->
        <li class="MenuItemContainer clearfix colelem" id="u14783"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14784" href="customer-service.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_menu clearfix colelem" id="u14787-4"><!-- content --><p>Customer Service</p></div></a></li>
        <li class="MenuItemContainer clearfix colelem" id="u14790"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14791" href="sds.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_menu clearfix colelem" id="u14793-4"><!-- content --><p>SDS</p></div></a></li>
        <li class="MenuItemContainer clearfix colelem" id="u24558"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u24559" href="coa.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_menu clearfix colelem" id="u24560-4"><!-- content --><p>COA</p></div></a></li>
       </ul>
      </div>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u14769"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu main_submenu clearfix colelem" id="u14770" href="contact-us.html"><!-- vertical box --><div class="MenuItemLabel NoWrap main_menu_tabs clearfix colelem" id="u14772-4"><!-- content --><p>Contact Us</p></div></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u14412"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu main_submenu clearfix colelem" id="u14415" href="terms-and-conditions.html"><!-- vertical box --><div class="MenuItemLabel NoWrap main_menu_tabs clearfix colelem" id="u14418-4"><!-- content --><p>Terms and Conditions</p></div></a>
     </div>
    </nav>
    <div class="clearfix" id="u879"><!-- group -->
     <div id="u524"><!-- simple frame --></div>
     <div class="clearfix" id="u526"><!-- group -->
      <div class="transition clearfix" id="u525-4"><!-- content -->
       <p>Type in Product Names or Product Numbers to see suggestions</p>
      </div>
     </div>
    </div>
   </div>
   <div class="clearfix grpelem" id="u3464"><!-- group -->
    <div class="rounded-corners clearfix grpelem" id="u3472"><!-- column -->
     <div class="position_content" id="u3472_position_content">
      <div class="page_names clearfix colelem" id="u3470-4"><!-- content -->
       <h2>Register</h2>
      </div>
      <div class="rounded-corners clearfix colelem" id="u3466-4"><!-- content -->
       <p>Email Address</p>
      </div>
      <div class="rounded-corners clearfix colelem" id="u3476-4"><!-- content -->
       <p>Email Address again</p>
      </div>
      <div class="rounded-corners clearfix colelem" id="u3467-4"><!-- content -->
       <p>Password</p>
      </div>
      <div class="rounded-corners clearfix colelem" id="u3478-4"><!-- content -->
       <p>Password again</p>
      </div>
      <a class="nonblock nontext loginoff clearfix colelem" id="u3465-4" href="my-account.html" title="Register"><!-- content --><h2 class="page_names" id="u3465-2">Register</h2></a>
     </div>
    </div>
   </div>
   <div class="PamphletWidget clearfix" id="pamphletu527"><!-- none box -->
    <div class="popup_anchor" id="u528popup">
     <div class="ContainerGroup clearfix" id="u528"><!-- stack box -->
      <div class="Container invi clearfix grpelem" id="u541"><!-- column -->
       <div class="clearfix colelem" id="pu783-4"><!-- group -->
        <a class="nonblock nontext clearfix grpelem" id="u783-4" href="my-account.html" title="Sign in"><!-- content --><p class="submenu_01" id="u783-2">Sign in</p></a>
        <div class="clearfix grpelem" id="u862-4"><!-- content -->
         <p>Username</p>
        </div>
       </div>
       <div class="clearfix colelem" id="pu781-4"><!-- group -->
        <a class="nonblock nontext clearfix grpelem" id="u781-4" href="my-account.html" title="Register"><!-- content --><p class="submenu_01" id="u781-2">Register</p></a>
        <div class="clearfix grpelem" id="u870-4"><!-- content -->
         <p>Password</p>
        </div>
       </div>
       <a class="nonblock nontext transition clearfix colelem" id="u24877-4" href="account--signed-out.html" title="Saved shopping cart"><!-- content --><p class="basket_copy" id="u24877-2">Sign out&nbsp; &gt;&gt;</p></a>
      </div>
      <div class="Container invi clearfix grpelem" id="u842"><!-- column -->
       <div class="clearfix colelem" id="pu899-11"><!-- group -->
        <a class="nonblock nontext clearfix grpelem" id="u899-11" href="cart.html" title="Cart"><!-- content --><p class="basket_copy">Your basket:</p><ol class="list0 nls-None" id="u899-9"><li class="basket_copy" id="u899-4">xxxxzzzzuuuuhhhh item</li><li class="basket_copy" id="u899-6">xxxxnnnnffffsss item</li><li class="basket_copy" id="u899-8">xxxxeeeettttkkkk item</li></ol></a>
        <a class="nonblock nontext grpelem" id="u848" href="cart.html" title="Go to Cart"><!-- simple frame --></a>
       </div>
       <a class="nonblock nontext transition clearfix colelem" id="u18515-4" href="saved-shopping-cart.html" title="Saved shopping cart"><!-- content --><p class="basket_copy" id="u18515-2">Saved shopping cart&nbsp; &gt;&gt;</p></a>
      </div>
     </div>
    </div>
    <div class="ThumbGroup clearfix grpelem" id="u542"><!-- none box -->
     <div class="popup_anchor">
      <a class="nonblock nontext Thumb PamphletThumbSelected popup_element clearfix" id="u545" href="account.html" title="Go to Account"><!-- group --><div class="submenu_01 clearfix grpelem" id="u546-4"><!-- content --><p>Account</p></div></a>
     </div>
     <div class="popup_anchor">
      <a class="nonblock nontext Thumb popup_element clearfix" id="u845" href="cart.html" title="Go to Cart"><!-- group --><div class="submenu_01 clearfix grpelem" id="u847-4"><!-- content --><p>Cart</p></div></a>
     </div>
    </div>
   </div>
   <div class="clearfix grpelem" id="pu665"><!-- column -->
    <div class="size_fixed colelem" id="u665"><!-- custom html -->
    </div>
    <div class="size_fixed colelem" id="u3890"><!-- custom html -->
     
      
<div id="preloader">
    <div id="floatingBarsG">
    <div class="blockG" id="rotateG_01">
    </div>
    <div class="blockG" id="rotateG_02">
    </div>
    <div class="blockG" id="rotateG_03">
    </div>
    <div class="blockG" id="rotateG_04">
    </div>
    <div class="blockG" id="rotateG_05">
    </div>
    <div class="blockG" id="rotateG_06">
    </div>
    <div class="blockG" id="rotateG_07">
    </div>
    <div class="blockG" id="rotateG_08">
    </div>
    </div>
    <div id="status">Loading...</div>
</div>

    </div>
   </div>
   <div class="verticalspacer" data-offset-top="684" data-content-above-spacer="684" data-content-below-spacer="400"></div>
   <div class="clearfix grpelem" id="pu15865"><!-- column -->
    <div class="browser_width colelem" id="u15865-bw">
     <div id="u15865"><!-- group -->
      <div class="clearfix" id="u15865_align_to_page">
       <div class="clearfix grpelem" id="u15938"><!-- group -->
        <div class="transition social_icons clearfix grpelem" id="u2473-4"><!-- content -->
         <p></p>
        </div>
        <div class="transition social_icons clearfix grpelem" id="u2477-4"><!-- content -->
         <p></p>
        </div>
        <div class="transition social_icons clearfix grpelem" id="u2474-4"><!-- content -->
         <p></p>
        </div>
        <div class="transition social_icons clearfix grpelem" id="u2478-4"><!-- content -->
         <p></p>
        </div>
        <div class="transition social_icons clearfix grpelem" id="u2475-4"><!-- content -->
         <p></p>
        </div>
        <div class="transition social_icons clearfix grpelem" id="u2479-4"><!-- content -->
         <p></p>
        </div>
        <div class="transition social_icons clearfix grpelem" id="u2476-4"><!-- content -->
         <p></p>
        </div>
        <div class="transition social_icons clearfix grpelem" id="u2480-4"><!-- content -->
         <p></p>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="clearfix colelem" id="pu992-3"><!-- group -->
     <div class="browser_width grpelem" id="u992-3-bw">
      <div class="clearfix" id="u992-3"><!-- content -->
       <p>&nbsp;</p>
      </div>
     </div>
     <div class="browser_width grpelem" id="u8084-3-bw">
      <div class="clearfix" id="u8084-3"><!-- content -->
       <p>&nbsp;</p>
      </div>
     </div>
     <div class="clearfix grpelem" id="u15866-27"><!-- content -->
      <p class="footer_heading" id="u15866-2">Service &amp; Support</p>
      <p class="footer_links">Customer Support</p>
      <p class="footer_links">Technical Service</p>
      <p class="footer_links">Web Help Desk</p>
      <p class="footer_links">SDS</p>
      <p class="footer_links">C of A</p>
      <p class="body_copy" id="u15866-13">&nbsp;</p>
      <p class="footer_heading" id="u15866-15">Ordering</p>
      <p class="footer_links">Custom Products</p>
      <p class="footer_links">eCommerce Solutions</p>
      <p class="footer_links">Order Center</p>
      <p class="footer_links">Products</p>
      <p class="footer_links">Terms &amp; Conditions of Sale</p>
     </div>
     <div class="clearfix grpelem" id="u15868-26"><!-- content -->
      <p class="footer_heading">Corporate</p>
      <p class="footer_links">Business Development</p>
      <p class="footer_links">Worldwide Offices</p>
      <p class="footer_links">About Us</p>
      <p class="footer_links">Site Map</p>
      <p class="footer_links">Careers</p>
      <p class="footer_links">Events</p>
      <p class="footer_links">Programs</p>
      <p class="footer_links">Reach Regulations</p>
      <p class="footer_links">Contact Us</p>
      <p class="footer_links">Email Subscription Center</p>
      <p class="footer_links">Tool Box</p>
     </div>
     <div class="Legal-copy-at-bottom clearfix grpelem" id="u9227-4"><!-- content -->
      <p>©2016 KITSCO. All Rights Reserved.</p>
     </div>
    </div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/u31668-17-r.png?crc=528915071" alt=""/>
   <img class="preload" src="images/u31668-17-m.png?crc=528915071" alt=""/>
   <img class="preload" src="images/u31668-17-fs.png?crc=528915071" alt=""/>
   <img class="preload" src="images/recaptchamodeaudio.png?crc=321387380" alt=""/>
   <img class="preload" src="images/recaptchamodeaudiorollover.jpg?crc=518349802" alt=""/>
   <img class="preload" src="images/recaptchamodeaudiomousedown.jpg?crc=4104960468" alt=""/>
   <img class="preload" src="images/recaptchamodeimage.png?crc=484269603" alt=""/>
   <img class="preload" src="images/recaptchamodeimagerollover.jpg?crc=4085552177" alt=""/>
   <img class="preload" src="images/recaptchamodeimagemousedown.jpg?crc=113419217" alt=""/>
   <img class="preload" src="images/recaptcharefreshrollover.jpg?crc=148459208" alt=""/>
   <img class="preload" src="images/recaptcharefreshmousedown.jpg?crc=4076377908" alt=""/>
   <img class="preload" src="images/recaptchahelprollover.jpg?crc=392188070" alt=""/>
   <img class="preload" src="images/recaptchahelpmousedown.jpg?crc=3938251376" alt=""/>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (('https:' == document.location.protocol) ? 'https:' : 'http:') + '//www.google.com/recaptcha/api/challenge?k=null" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn2.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <!-- Other scripts -->
  <script type="text/javascript">
   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),i=0;i<f.length;i++)if("text/css"==f[i].type){var h=(f[i].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!h||!h[1]||!h[2])break;b[h[1]]=h[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(i=0;i<Muse.assets.required.length;){var h=Muse.assets.required[i],l=h.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(i,1),"undefined"!=typeof b[h]&&(k!=b[h]>>>24||l!=(b[h]&16777215))&&Muse.assets.outOfDate.push(h)):i++;f.className="version";break;case "js":k.match(/^jquery-[\d\.]+/gi)&&d&&d().jquery=="1.8.3"?Muse.assets.required.splice(i,1):i++;break;default:throw Error("Unsupported file type: "+
l);}}f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?setTimeout(function(){g(!0)},5E3):g()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.musepolyfill.bgsize","webpro","jquery.musemenu","musewpslideshow","jquery.museoverlay","touchswipe","jquery.watch"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.resizeHeight('.browser_width');/* resize height */
Muse.Utils.requestAnimationFrame(function() { $('body').addClass('initialized'); });/* mark body as initialized */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.initWidget('#widgetu31654', ['#bp_infinity'], function(elem) { return new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu31654 */
Muse.Utils.initWidget('.MenuBar', ['#bp_infinity'], function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.initWidget('#pamphletu527', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'mouseover',deactivationEvent:'mouseout_both',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:300,hideAllContentsFirst:true,shuffle:false,enableSwipe:false,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu527 */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
//if (confirm('The reCAPTCHA public and private keys are invalid or missing. Please provide valid public and private keys otherwise reCAPTCHA validation will not work. Click OK to learn more.')) window.location = 'http://www.adobe.com/go/muse_recaptcha_keys_learn_more';/* warning message */
}
catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=4108833657" type="text/javascript" async data-main="scripts/museconfig.js?crc=169177150" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
  
  <!--HTML Widget code-->
  
<script type="text/javascript">!function(){function e(e){for(var o in t){var n=t[o];("lightbox"!=n.options.contentLayout_runtime||n._$sslbpOverlay.parent().is(":visible"))&&(e?n.next():n.previous())}}var t=[],o=WebPro.Widget.SlideShowBase.prototype._setUp;WebPro.Widget.SlideShowBase.prototype._setUp=function(){return t.push(this),o.apply(this,arguments)},$(document.documentElement).keydown(function(t){37==t.keyCode?e():39==t.keyCode&&e(!0)})}();</script>

       <script type="text/javascript">
    
        $(window).load(function() { // makes sure the whole site is loaded
            $('#status').fadeOut(); // will first fade out the loading animation
            $('#preloader').delay(200).fadeOut('slow'); // will fade out the white DIV that covers the website.
            $('body').delay(200).css({'overflow':'visible'});
        })
    
    </script>
    
   </body>
</html>
