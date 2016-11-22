<?php
@session_start();
echo ("testing query");
include_once('SQL/db_connect.php');
//$db = new mysqli("localhost","root","","biochemistry");


$stmt = $connection->prepare(" SELECT products_name, products_description from products INNER JOIN products_description ON products.products_id=products_description.products_id WHERE products.products_id=4");
    //$stmt->bind_param('ii', intval($_GET['productid']));
if(!$stmt)
{

 echo ("Unable to prepare query");

}

    $stmt->execute();

    $stmt->store_result();
    $stmt->bind_result($products_name, $products_description);

    while($stmt->fetch())
    {
     echo "col1=$products_name, col2=$products_description\n";
    }

    $stmt->close();

?>

<!DOCTYPE html>
<!-- saved from url=(0050)http://www.kitsco.co.uk/sitebuilder/sample-11.html -->
<html class="js html css_verticalspacer wf-jura-n3-active wf-jura-n4-active wf-jura-n5-active wf-jura-n6-active wf-active" lang="en-GB"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  
  <meta name="generator" content="2015.2.1.352">
  
  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "museconfig.js", "jquery.musepolyfill.bgsize.js", "webpro.js", "musewpslideshow.js", "jquery.museoverlay.js", "touchswipe.js", "jquery.musemenu.js", "jquery.watch.js", "require.js", "sample-11.css"], "outOfDate":[]};
</script>
  
  <link rel="shortcut icon" href="http://www.kitsco.co.uk/sitebuilder/images/favicon.ico?crc=3784057462">
  <title>Sample 11</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="./productdetails_files/site_global.css">
  <link rel="stylesheet" type="text/css" href="./productdetails_files/master_products-master.css">
  <link rel="stylesheet" type="text/css" href="./productdetails_files/sample-11.css" id="pagesheet">
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_sample-11.css?crc=232897019"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/jura:n6,n4,n5,n3:default.js" type="text/javascript">\x3C/script>');
</script><link rel="stylesheet" href="./productdetails_files/l" media="all"><script src="./productdetails_files/jura-n6,n4,n5,n3-default.js" type="text/javascript"></script>
  <!--[if lt IE 9]>
  <script src="scripts/html5shiv.js?crc=4241844378" type="text/javascript"></script>
  <![endif]-->
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
 <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="scripts/museconfig.js?crc=169177150" src="./productdetails_files/museconfig.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery" src="./productdetails_files/jquery-1.8.3.min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="museutils" src="./productdetails_files/museutils.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="whatinput" src="./productdetails_files/whatinput.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery.musepolyfill.bgsize" src="./productdetails_files/jquery.musepolyfill.bgsize.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery.musemenu" src="./productdetails_files/jquery.musemenu.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="webpro" src="./productdetails_files/webpro.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="musewpslideshow" src="./productdetails_files/musewpslideshow.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery.museoverlay" src="./productdetails_files/jquery.museoverlay.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="touchswipe" src="./productdetails_files/touchswipe.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery.watch" src="./productdetails_files/jquery.watch.js"></script></head>
 <body class="always_vert_scroll initialized" data-pinterest-extension-installed="cr1.39.2" data-whatinput="mouse" style="overflow: visible;">

  <div class="clearfix" id="page"><!-- group -->
   <div class="clearfix grpelem" id="pu7417"><!-- column -->
    <div class="size_fixed colelem" id="u7417"><!-- custom html -->
    </div>
    <div class="size_fixed colelem" id="u7549"><!-- custom html -->
    </div>
    <div class="size_fixed colelem" id="u7791"><!-- custom html -->
    </div>
   </div>
   <a class="nonblock nontext" id="u6846" href="http://www.kitsco.co.uk/sitebuilder/index.html" title="Home"><!-- simple frame --></a>
   <div class="browser_width" id="u6854-3-bw">
    <div class="menu_bg_with_shadow clearfix" id="u6854-3"><!-- content -->
     <p>&nbsp;</p>
    </div>
   </div>
   <div class="browser_width" id="u8085-bw">
    <div id="u8085"><!-- simple frame --></div>
   </div>
   <div class="clearfix grpelem" id="pu7506"><!-- column -->
    <div class="museBGSize colelem" id="u7506"><!-- simple frame --></div>
    <div class="clearfix colelem" id="u7501-6"><!-- content -->
     <p class="Product-copy-bold" id="u7501-2">Description:</p>
     <p class="Product-copy-normal" id="u7501-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse hendrerit mollis consequat. Maecenas nec accumsan turpis. Morbi a turpis eget nunc convallis fermentum ut nec lectus.</p>
    </div>
    <div class="clearfix colelem" id="u8836"><!-- column -->
     <div class="Product-copy-bold clearfix colelem" id="u7975-4"><!-- content -->
      <p>Recent items:</p>
     </div>
     <div class="clearfix colelem" id="u7976"><!-- group -->
      <div class="clearfix grpelem" id="u7978"><!-- group -->
       <div class="Recent-qty clearfix grpelem" id="u7981-4"><!-- content -->
        <p>Qty:</p>
       </div>
       <div class="Recent-qty clearfix grpelem" id="u7983-4"><!-- content -->
        <p>00001</p>
       </div>
      </div>
      <div class="museBGSize grpelem" id="u7980"><!-- simple frame --></div>
      <div class="clearfix grpelem" id="pu7977-4"><!-- column -->
       <div class="Recent-items-name clearfix colelem" id="u7977-4"><!-- content -->
        <p>Product name on two lines of text</p>
       </div>
       <div class="Recent-item-price clearfix colelem" id="u7982-4"><!-- content -->
        <p>£XXX.XX</p>
       </div>
       <div class="rounded-corners Recent_AddtoCart_off btn_recent_addtocart clearfix colelem" id="u7979-6"><!-- content -->
        <p>add to</p>
        <p>cart</p>
       </div>
      </div>
     </div>
     <div class="clearfix colelem" id="u8893"><!-- group -->
      <div class="clearfix grpelem" id="u8898"><!-- group -->
       <div class="Recent-qty clearfix grpelem" id="u8896-4"><!-- content -->
        <p>Qty:</p>
       </div>
       <div class="Recent-qty clearfix grpelem" id="u8900-4"><!-- content -->
        <p>00001</p>
       </div>
      </div>
      <div class="museBGSize grpelem" id="u8895"><!-- simple frame --></div>
      <div class="clearfix grpelem" id="pu8899-4"><!-- column -->
       <div class="Recent-items-name clearfix colelem" id="u8899-4"><!-- content -->
        <p>Product name on two lines of text</p>
       </div>
       <div class="Recent-item-price clearfix colelem" id="u8897-4"><!-- content -->
        <p>£XXX.XX</p>
       </div>
       <div class="Recent_AddtoCart_off btn_recent_addtocart clearfix colelem" id="u8894-6"><!-- content -->
        <p>add to</p>
        <p>cart</p>
       </div>
      </div>
     </div>
     <div class="clearfix colelem" id="u8909"><!-- group -->
      <div class="clearfix grpelem" id="u8916"><!-- group -->
       <div class="Recent-qty clearfix grpelem" id="u8911-4"><!-- content -->
        <p>Qty:</p>
       </div>
       <div class="Recent-qty clearfix grpelem" id="u8913-4"><!-- content -->
        <p>00001</p>
       </div>
      </div>
      <div class="museBGSize grpelem" id="u8915"><!-- simple frame --></div>
      <div class="clearfix grpelem" id="pu8910-4"><!-- column -->
       <div class="Recent-items-name clearfix colelem" id="u8910-4"><!-- content -->
        <p>Product name on two lines of text</p>
       </div>
       <div class="Recent-item-price clearfix colelem" id="u8912-4"><!-- content -->
        <p>£XXX.XX</p>
       </div>
       <div class="Recent_AddtoCart_off btn_recent_addtocart clearfix colelem" id="u8914-6"><!-- content -->
        <p>add to</p>
        <p>cart</p>
       </div>
      </div>
     </div>
    </div>
   </div>
   <div class="clearfix grpelem" id="pmenuu14797"><!-- group -->
    <nav class="MenuBar main_menu_tabs1 clearfix" id="menuu14797"><!-- horizontal box -->
     <div class="MenuItemContainer clearfix grpelem" id="u14805"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu main_submenu clearfix colelem MuseMenuActive" id="u15144" href="http://www.kitsco.co.uk/sitebuilder/index.html" aria-haspopup="true"><!-- vertical box --><div class="MenuItemLabel NoWrap main_menu_tabs clearfix colelem" id="u15145-4"><!-- content --><p>Products</p></div></a>
      <div class="SubMenu MenuLevel1 clearfix" id="u14806" style="display: none;"><!-- vertical box -->
       <ul class="SubMenuView clearfix colelem" id="u14807"><!-- vertical box -->
        <li class="MenuItemContainer clearfix colelem" id="u14976"><!-- horizontal box --><div class="MenuItem MenuItemWithSubMenu submenu clearfix grpelem MuseMenuActive" id="u14977" aria-haspopup="true"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_menu clearfix colelem" id="u14980-4"><!-- content --><p>Apoptosis</p></div></div><div class="SubMenu MenuLevel2 clearfix" id="u14981" style="display: none;"><!-- vertical box --><ul class="SubMenuView clearfix colelem" id="u14982"><!-- vertical box --><li class="MenuItemContainer clearfix colelem" id="u15011"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix grpelem" id="u15014" href="http://www.kitsco.co.uk/sitebuilder/sample-11.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u15016-4"><!-- content --><p>Sample 11</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u15004"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u15005" href="http://www.kitsco.co.uk/sitebuilder/sample-12.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u15008-4"><!-- content --><p>Sample 12</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14983"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14986" href="http://www.kitsco.co.uk/sitebuilder/sample-13.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14987-4"><!-- content --><p>Sample 13</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14990"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14993" href="http://www.kitsco.co.uk/sitebuilder/sample-14.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14995-4"><!-- content --><p>Sample 14</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14997"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14998" href="http://www.kitsco.co.uk/sitebuilder/sample-15.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u15001-4"><!-- content --><p>Sample 15</p></div></a></li></ul></div></li>
        <li class="MenuItemContainer clearfix colelem" id="u15060"><!-- horizontal box --><div class="MenuItem MenuItemWithSubMenu submenu clearfix grpelem" id="u15061" aria-haspopup="true"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_menu clearfix colelem" id="u15063-4"><!-- content --><p>Epigenetics</p></div></div><div class="SubMenu MenuLevel2 clearfix" id="u15065" style="display: none;"><!-- vertical box --><ul class="SubMenuView clearfix colelem" id="u15066"><!-- vertical box --><li class="MenuItemContainer clearfix colelem" id="u15074"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u15077" href="http://www.kitsco.co.uk/sitebuilder/sample-21.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u15078-4"><!-- content --><p>Sample 21</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u15095"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u15096" href="http://www.kitsco.co.uk/sitebuilder/sample-22.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u15098-4"><!-- content --><p>Sample 22</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u15067"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u15068" href="http://www.kitsco.co.uk/sitebuilder/sample-23.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u15070-4"><!-- content --><p>Sample 23</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u15088"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u15091" href="http://www.kitsco.co.uk/sitebuilder/sample-24.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u15092-4"><!-- content --><p>Sample 24</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u15081"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u15084" href="http://www.kitsco.co.uk/sitebuilder/sample-25.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u15086-4"><!-- content --><p>Sample 25</p></div></a></li></ul></div></li>
        <li class="MenuItemContainer clearfix colelem" id="u14892"><!-- horizontal box --><div class="MenuItem MenuItemWithSubMenu submenu clearfix grpelem" id="u14893" aria-haspopup="true"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_menu clearfix colelem" id="u14896-4"><!-- content --><p>Competent Cells</p></div></div><div class="SubMenu MenuLevel2 clearfix" id="u14897" style="display: none;"><!-- vertical box --><ul class="SubMenuView clearfix colelem" id="u14898"><!-- vertical box --><li class="MenuItemContainer clearfix colelem" id="u14906"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14907" href="http://www.kitsco.co.uk/sitebuilder/sample-31.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14908-4"><!-- content --><p>Sample 31</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14920"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14921" href="http://www.kitsco.co.uk/sitebuilder/sample-32.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14923-4"><!-- content --><p>Sample 32</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14927"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14930" href="http://www.kitsco.co.uk/sitebuilder/sample-33.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14932-4"><!-- content --><p>Sample 33</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14913"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14916" href="http://www.kitsco.co.uk/sitebuilder/sample-34.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14917-4"><!-- content --><p>Sample 34</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14899"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14902" href="http://www.kitsco.co.uk/sitebuilder/sample-35.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14904-4"><!-- content --><p>Sample 35</p></div></a></li></ul></div></li>
        <li class="MenuItemContainer clearfix colelem" id="u14808"><!-- horizontal box --><div class="MenuItem MenuItemWithSubMenu submenu clearfix grpelem" id="u14809" aria-haspopup="true"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_menu clearfix colelem" id="u14810-4"><!-- content --><p>Cloning</p></div></div><div class="SubMenu MenuLevel2 clearfix" id="u14813" style="display: none;"><!-- vertical box --><ul class="SubMenuView clearfix colelem" id="u14814"><!-- vertical box --><li class="MenuItemContainer clearfix colelem" id="u14843"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14846" href="http://www.kitsco.co.uk/sitebuilder/sample-41.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14847-4"><!-- content --><p>Sample 41</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14822"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14823" href="http://www.kitsco.co.uk/sitebuilder/sample-42.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14826-4"><!-- content --><p>Sample 42</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14829"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14832" href="http://www.kitsco.co.uk/sitebuilder/sample-43.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14835-4"><!-- content --><p>Sample 43</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14836"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14839" href="http://www.kitsco.co.uk/sitebuilder/sample-44.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14842-4"><!-- content --><p>Sample 44</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14815"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14816" href="http://www.kitsco.co.uk/sitebuilder/sample-45.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14817-4"><!-- content --><p>Sample 45</p></div></a></li></ul></div></li>
        <li class="MenuItemContainer clearfix colelem" id="u15018"><!-- horizontal box --><div class="MenuItem MenuItemWithSubMenu submenu clearfix grpelem" id="u15019" aria-haspopup="true"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_menu clearfix colelem" id="u15020-4"><!-- content --><p>DNA / RNA Extractions</p></div></div><div class="SubMenu MenuLevel2 clearfix" id="u15023" style="display: none;"><!-- vertical box --><ul class="SubMenuView clearfix colelem" id="u15024"><!-- vertical box --><li class="MenuItemContainer clearfix colelem" id="u15046"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u15047" href="http://www.kitsco.co.uk/sitebuilder/sample-51.html"><!-- vertical box --><div class="MenuItemLabel NoWrap Slider-Sub-Text clearfix colelem" id="u15050-4"><!-- content --><h2>Sample 51</h2></div></a></li><li class="MenuItemContainer clearfix colelem" id="u15053"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u15056" href="http://www.kitsco.co.uk/sitebuilder/sample-52.html"><!-- vertical box --><div class="MenuItemLabel NoWrap Slider-Sub-Text clearfix colelem" id="u15058-4"><!-- content --><h2>Sample 52</h2></div></a></li><li class="MenuItemContainer clearfix colelem" id="u15039"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u15040" href="http://www.kitsco.co.uk/sitebuilder/sample-53.html"><!-- vertical box --><div class="MenuItemLabel NoWrap Slider-Sub-Text clearfix colelem" id="u15041-4"><!-- content --><h2>Sample 53</h2></div></a></li><li class="MenuItemContainer clearfix colelem" id="u15025"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u15028" href="http://www.kitsco.co.uk/sitebuilder/sample-54.html"><!-- vertical box --><div class="MenuItemLabel NoWrap Slider-Sub-Text clearfix colelem" id="u15029-4"><!-- content --><h2>Sample 54</h2></div></a></li><li class="MenuItemContainer clearfix colelem" id="u15032"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u15035" href="http://www.kitsco.co.uk/sitebuilder/sample-55.html"><!-- vertical box --><div class="MenuItemLabel NoWrap Slider-Sub-Text clearfix colelem" id="u15037-4"><!-- content --><h2>Sample 55</h2></div></a></li></ul></div></li>
        <li class="MenuItemContainer clearfix colelem" id="u14934"><!-- horizontal box --><div class="MenuItem MenuItemWithSubMenu submenu clearfix grpelem" id="u14935" aria-haspopup="true"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_menu clearfix colelem" id="u14938-4"><!-- content --><p>Enzymes</p></div></div><div class="SubMenu MenuLevel2 clearfix" id="u14939" style="display: none;"><!-- vertical box --><ul class="SubMenuView clearfix colelem" id="u14940"><!-- vertical box --><li class="MenuItemContainer clearfix colelem" id="u14969"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14972" href="http://www.kitsco.co.uk/sitebuilder/sample-61.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14974-4"><!-- content --><p>Sample 61</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14941"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14944" href="http://www.kitsco.co.uk/sitebuilder/sample-62.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14945-4"><!-- content --><p>Sample 62</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14962"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14963" href="http://www.kitsco.co.uk/sitebuilder/sample-63.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14964-4"><!-- content --><p>Sample 63</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14955"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14958" href="http://www.kitsco.co.uk/sitebuilder/sample-64.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14961-4"><!-- content --><p>Sample 64</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14948"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14951" href="http://www.kitsco.co.uk/sitebuilder/sample-65.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14953-4"><!-- content --><p>Sample 65</p></div></a></li></ul></div></li>
        <li class="MenuItemContainer clearfix colelem" id="u14850"><!-- horizontal box --><div class="MenuItem MenuItemWithSubMenu submenu clearfix grpelem" id="u14888" aria-haspopup="true"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_menu clearfix colelem" id="u14890-4"><!-- content --><p>Endonuclease</p></div></div><div class="SubMenu MenuLevel2 clearfix" id="u14851" style="display: none;"><!-- vertical box --><ul class="SubMenuView clearfix colelem" id="u14852"><!-- vertical box --><li class="MenuItemContainer clearfix colelem" id="u14860"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14861" href="http://www.kitsco.co.uk/sitebuilder/sample-71.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14862-4"><!-- content --><p>Sample 71</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14881"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14882" href="http://www.kitsco.co.uk/sitebuilder/sample-72.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14885-4"><!-- content --><p>Sample 72</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14853"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14856" href="http://www.kitsco.co.uk/sitebuilder/sample-73.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14857-4"><!-- content --><p>Sample 73</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14867"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14868" href="http://www.kitsco.co.uk/sitebuilder/sample-74.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14869-4"><!-- content --><p>Sample 74</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u14874"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14875" href="http://www.kitsco.co.uk/sitebuilder/sample-75.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u14876-4"><!-- content --><p>Sample 75</p></div></a></li></ul></div></li>
        <li class="MenuItemContainer clearfix colelem" id="u15102"><!-- horizontal box --><div class="MenuItem MenuItemWithSubMenu submenu clearfix grpelem" id="u15140" aria-haspopup="true"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_menu clearfix colelem" id="u15143-4"><!-- content --><p>Consumables</p></div></div><div class="SubMenu MenuLevel2 clearfix" id="u15103" style="display: none;"><!-- vertical box --><ul class="SubMenuView clearfix colelem" id="u15104"><!-- vertical box --><li class="MenuItemContainer clearfix colelem" id="u15119"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u15122" href="http://www.kitsco.co.uk/sitebuilder/sample-81.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u15124-4"><!-- content --><p>Sample 81</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u15105"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u15106" href="http://www.kitsco.co.uk/sitebuilder/sample-82.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u15108-4"><!-- content --><p>Sample 82</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u15112"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u15113" href="http://www.kitsco.co.uk/sitebuilder/sample-83.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u15115-4"><!-- content --><p>Sample 83</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u15133"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u15134" href="http://www.kitsco.co.uk/sitebuilder/sample-84.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u15135-4"><!-- content --><p>Sample 84</p></div></a></li><li class="MenuItemContainer clearfix colelem" id="u15126"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u15127" href="http://www.kitsco.co.uk/sitebuilder/sample-85.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_sub_menu clearfix colelem" id="u15130-4"><!-- content --><p>Sample 85</p></div></a></li></ul></div></li>
       </ul>
      </div>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u15148"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu main_submenu clearfix colelem" id="u15151" href="http://www.kitsco.co.uk/sitebuilder/feature.html"><!-- vertical box --><div class="MenuItemLabel NoWrap main_menu_tabs clearfix colelem" id="u15154-4"><!-- content --><p>Feature</p></div></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u15162"><!-- vertical box -->
      <div class="MenuItem MenuItemWithSubMenu main_submenu clearfix colelem" id="u15163" aria-haspopup="true"><!-- vertical box -->
       <div class="MenuItemLabel NoWrap main_menu_tabs clearfix colelem" id="u15165-4"><!-- content -->
        <p>Support</p>
       </div>
      </div>
      <div class="SubMenu MenuLevel1 clearfix" id="u15167" style="display: none;"><!-- vertical box -->
       <ul class="SubMenuView clearfix colelem" id="u15168"><!-- vertical box -->
        <li class="MenuItemContainer clearfix colelem" id="u15169"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u15170" href="http://www.kitsco.co.uk/sitebuilder/customer-service.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_menu clearfix colelem" id="u15173-4"><!-- content --><p>Customer Service</p></div></a></li>
        <li class="MenuItemContainer clearfix colelem" id="u15176"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u15177" href="http://www.kitsco.co.uk/sitebuilder/sds.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_menu clearfix colelem" id="u15179-4"><!-- content --><p>SDS</p></div></a></li>
        <li class="MenuItemContainer clearfix colelem" id="u24537"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u24538" href="http://www.kitsco.co.uk/sitebuilder/coa.html"><!-- vertical box --><div class="MenuItemLabel NoWrap sub_menu clearfix colelem" id="u24539-4"><!-- content --><p>COA</p></div></a></li>
       </ul>
      </div>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u15155"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu main_submenu clearfix colelem" id="u15156" href="http://www.kitsco.co.uk/sitebuilder/contact-us.html"><!-- vertical box --><div class="MenuItemLabel NoWrap main_menu_tabs clearfix colelem" id="u15158-4"><!-- content --><p>Contact Us</p></div></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u14798"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu main_submenu clearfix colelem" id="u14801" href="http://www.kitsco.co.uk/sitebuilder/terms-and-conditions.html"><!-- vertical box --><div class="MenuItemLabel NoWrap main_menu_tabs clearfix colelem" id="u14804-4"><!-- content --><p>Terms and Conditions</p></div></a>
     </div>
    </nav>
    <div class="clearfix" id="u24362"><!-- group -->
     <div id="u24365"><!-- simple frame --></div>
     <div class="clearfix" id="u24363"><!-- group -->
      <div class="transition clearfix" id="u24364-4"><!-- content -->
       <p>Type in Product Names or Product Numbers to see suggestions</p>
      </div>
     </div>
    </div>
   </div>
   <div class="clearfix grpelem" id="pu7502-6"><!-- column -->
    <div class="clearfix colelem" id="u7502-6"><!-- content -->
     <p class="Product-copy-bold" id="u7502-2">Product name:</p>
     <p class="Product-copy-normal" id="u7502-4"><?= $products_name ?></p>
    </div>
    <div class="clearfix colelem" id="u7507-6"><!-- content -->
     <p class="Product-copy-bold" id="u7507-2">Product Number:</p>
     <p class="Product-copy-normal" id="u7507-4">0000000001</p>
    </div>
    <div class="clearfix colelem" id="u7509-6"><!-- content -->
     <p class="Product-copy-bold" id="u7509-2">Manufacturer:</p>
     <p class="Product-copy-normal" id="u7509-4">XYZ</p>
    </div>
    <div class="clearfix colelem" id="pu7504-4"><!-- group -->
     <div class="rounded-corners Product-copy-bold clearfix grpelem" id="u7504-4"><!-- content -->
      <p>Product Size:</p>
     </div>
     <div class="rounded-corners Product-copy-bold clearfix grpelem" id="u7505-4"><!-- content -->
      <p>SKU:</p>
     </div>
    </div>
   </div>
   <div class="clearfix grpelem" id="pu7720-4"><!-- column -->
    <div class="page_names clearfix colelem" id="u7720-4"><!-- content -->
     <h2>VIDEO PLACEHOLDER</h2>
    </div>
    <div class="clearfix colelem" id="pu7508-4"><!-- group -->
     <div class="rounded-corners Product-copy-bold clearfix grpelem" id="u7508-4"><!-- content -->
      <p>Price:</p>
     </div>
     <div class="rounded-corners Product-copy-bold clearfix grpelem" id="u7503-4"><!-- content -->
      <p>Availability:</p>
     </div>
    </div>
   </div>
   <div class="clearfix grpelem" id="pu7715"><!-- column -->
    <div class="clearfix colelem" id="u7715"><!-- column -->
     <div class="clearfix colelem" id="pu7719-4"><!-- group -->
      <div class="Quantity-name clearfix grpelem" id="u7719-4"><!-- content -->
       <p>Qty:</p>
      </div>
      <div class="rounded-corners Quantity-price clearfix grpelem" id="u7716-4"><!-- content -->
       <p>XXXXXX</p>
      </div>
     </div>
     <div class="rounded-corners Buynow_off btn_buyitnow_addtocart clearfix colelem" id="u7718-4"><!-- content -->
      <p>buy it now</p>
     </div>
     <div class="rounded-corners AddtoCart_off btn_buyitnow_addtocart clearfix colelem" id="u7717-4"><!-- content -->
      <p>add to cart</p>
     </div>
    </div>
    <div class="rounded-corners Product-copy-bold clearfix colelem" id="u7963-6"><!-- content -->
     <p>Anything extra</p>
     <p>can go here</p>
    </div>
   </div>
   <div class="PamphletWidget clearfix" id="pamphletu18523"><!-- none box -->
    <div class="popup_anchor" id="u18526popup">
     <div class="ContainerGroup clearfix" id="u18526" style="width: 0px; height: 0px;"><!-- stack box -->
      <div class="Container clearfix grpelem wp-panel" id="u18531" role="tabpanel" aria-labelledby="u18543" style="display: none;"><!-- column -->
       <div class="clearfix colelem" id="pu18534-4"><!-- group -->
        <a class="nonblock nontext clearfix grpelem" id="u18534-4" href="http://www.kitsco.co.uk/sitebuilder/my-account.html" title="Sign in"><!-- content --><p class="submenu_01" id="u18534-2">Sign in</p></a>
        <div class="clearfix grpelem" id="u18532-4"><!-- content -->
         <p>Username</p>
        </div>
       </div>
       <div class="clearfix colelem" id="pu18533-4"><!-- group -->
        <a class="nonblock nontext clearfix grpelem" id="u18533-4" href="http://www.kitsco.co.uk/sitebuilder/my-account.html" title="Register"><!-- content --><p class="submenu_01" id="u18533-2">Register</p></a>
        <div class="clearfix grpelem" id="u18535-4"><!-- content -->
         <p>Password</p>
        </div>
       </div>
       <a class="nonblock nontext transition clearfix colelem" id="u25202-4" href="http://www.kitsco.co.uk/sitebuilder/account--signed-out.html" title="Saved shopping cart"><!-- content --><p class="basket_copy" id="u25202-2">Sign out&nbsp; &gt;&gt;</p></a>
      </div>
      <div class="Container clearfix grpelem wp-panel" id="u18527" role="tabpanel" aria-labelledby="u18541" style="display: none;"><!-- column -->
       <div class="clearfix colelem" id="pu18529-11"><!-- group -->
        <a class="nonblock nontext clearfix grpelem" id="u18529-11" href="http://www.kitsco.co.uk/sitebuilder/cart.html" title="Cart"><!-- content --><p class="basket_copy">Your basket:</p><ol class="list0 nls-None" id="u18529-9"><li class="basket_copy" id="u18529-4">xxxxzzzzuuuuhhhh item</li><li class="basket_copy" id="u18529-6">xxxxnnnnffffsss item</li><li class="basket_copy" id="u18529-8">xxxxeeeettttkkkk item</li></ol></a>
        <a class="nonblock nontext grpelem" id="u18530" href="http://www.kitsco.co.uk/sitebuilder/cart.html" title="Go to Cart"><!-- simple frame --></a>
       </div>
       <a class="nonblock nontext transition clearfix colelem" id="u18528-4" href="http://www.kitsco.co.uk/sitebuilder/saved-shopping-cart.html" title="Saved shopping cart"><!-- content --><p class="basket_copy" id="u18528-2">Saved shopping cart&nbsp; &gt;&gt;</p></a>
      </div>
     </div>
    </div>
    <div class="ThumbGroup clearfix grpelem" id="u18540" role="tablist"><!-- none box -->
     <div class="popup_anchor">
      <a class="nonblock nontext Thumb popup_element clearfix" id="u18543" href="http://www.kitsco.co.uk/sitebuilder/account.html" title="Go to Account" role="tab" tabindex="0" aria-controls="u18531"><!-- group --><div class="submenu_01 clearfix grpelem" id="u18544-4"><!-- content --><p>Account</p></div></a>
     </div>
     <div class="popup_anchor">
      <a class="nonblock nontext Thumb popup_element clearfix" id="u18541" href="http://www.kitsco.co.uk/sitebuilder/cart.html" title="Go to Cart" role="tab" tabindex="-1" aria-selected="false" aria-controls="u18527"><!-- group --><div class="submenu_01 clearfix grpelem" id="u18542-4"><!-- content --><p>Cart</p></div></a>
     </div>
    </div>
   </div>
   <div class="clearfix grpelem" id="pu6861"><!-- column -->
    <div class="size_fixed colelem" id="u6861"><!-- custom html -->
    </div>
    <div class="size_fixed colelem" id="u6848"><!-- custom html -->
     
      
<div id="preloader" style="display: none;">
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
    <div id="status" style="display: none;">Loading...</div>
</div>

    </div>
   </div>
   <div class="verticalspacer" data-offset-top="1074" data-content-above-spacer="1074" data-content-below-spacer="811" style="height: calc((100vh - 1885px) - 0px);"></div>
   <div class="clearfix grpelem" id="pu24871"><!-- column -->
    <div class="clearfix colelem" id="u24871"><!-- column -->
     <div class="clearfix colelem" id="u7685"><!-- group -->
      <div class="Product_listed_details_coloured Product-copy-bold clearfix grpelem" id="u7496-4"><!-- content -->
       <p>Additional Information:</p>
      </div>
      <div class="Product_listed_details_coloured Product-copy-normal clearfix grpelem" id="u7475-4"><!-- content -->
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
      </div>
     </div>
     <div class="clearfix colelem" id="u7686"><!-- group -->
      <div class="Product-copy-bold clearfix grpelem" id="u7480-4"><!-- content -->
       <p>Code Classifications:</p>
      </div>
      <div class="Product-copy-normal clearfix grpelem" id="u7493-4"><!-- content -->
       <p>ABCD01234567</p>
      </div>
     </div>
     <div class="clearfix colelem" id="pu7687"><!-- group -->
      <div class="clearfix grpelem" id="u7687"><!-- group -->
       <div class="Product_listed_details_coloured Product-copy-bold clearfix grpelem" id="u7472-4"><!-- content -->
        <p>Appearance:</p>
       </div>
      </div>
      <div class="grpelem" id="u7712"><!-- simple frame --></div>
     </div>
     <div class="clearfix colelem" id="u7688"><!-- group -->
      <div class="Product-copy-bold clearfix grpelem" id="u7467-4"><!-- content -->
       <p>Protocols:</p>
      </div>
      <div class="Product-copy-normal clearfix grpelem" id="u7483-4"><!-- content -->
       <p>LiNK</p>
      </div>
     </div>
     <div class="clearfix colelem" id="u7689"><!-- group -->
      <div class="Product-copy-bold clearfix grpelem" id="u7499-4"><!-- content -->
       <p>MSDS:</p>
      </div>
      <div class="Product-copy-normal clearfix grpelem" id="u7488-4"><!-- content -->
       <p>LiNK</p>
      </div>
     </div>
     <div class="clearfix colelem" id="u7690"><!-- group -->
      <div class="Product-copy-bold clearfix grpelem" id="u7468-4"><!-- content -->
       <p>COA:</p>
      </div>
      <div class="Product-copy-normal clearfix grpelem" id="u7495-4"><!-- content -->
       <p>LiNK</p>
      </div>
     </div>
     <div class="clearfix colelem" id="u7691"><!-- group -->
      <div class="Product-copy-bold clearfix grpelem" id="u7473-4"><!-- content -->
       <p>Stability:</p>
      </div>
      <div class="Product-copy-normal clearfix grpelem" id="u7482-4"><!-- content -->
       <p>Duration of time ie 3 years</p>
      </div>
     </div>
     <div class="clearfix colelem" id="u7692"><!-- group -->
      <div class="Product-copy-bold clearfix grpelem" id="u7486-4"><!-- content -->
       <p>Purity or Quality Grade:</p>
      </div>
      <div class="Product-copy-normal clearfix grpelem" id="u7489-4"><!-- content -->
       <p>Molecular grade or Laboratory grade</p>
      </div>
     </div>
     <div class="clearfix colelem" id="u7693"><!-- group -->
      <div class="Product-copy-bold clearfix grpelem" id="u7492-4"><!-- content -->
       <p>Storage:</p>
      </div>
      <div class="Product-copy-normal clearfix grpelem" id="u7498-4"><!-- content -->
       <p>Room temperature -80°C</p>
      </div>
     </div>
     <div class="clearfix colelem" id="u7694"><!-- group -->
      <div class="Product-copy-bold clearfix grpelem" id="u7478-4"><!-- content -->
       <p>Shipping Condition:</p>
      </div>
      <div class="Product-copy-normal clearfix grpelem" id="u7494-4"><!-- content -->
       <p>Ambient -20°C</p>
      </div>
     </div>
     <div class="clearfix colelem" id="u7696"><!-- group -->
      <div class="Product-copy-bold clearfix grpelem" id="u7491-4"><!-- content -->
       <p>CAS Number:</p>
      </div>
      <div class="Product-copy-normal clearfix grpelem" id="u7497-4"><!-- content -->
       <p>ABCD01234567</p>
      </div>
     </div>
     <div class="clearfix colelem" id="u7697"><!-- group -->
      <div class="Product-copy-bold clearfix grpelem" id="u7476-4"><!-- content -->
       <p>Detection Method:</p>
      </div>
      <div class="Product-copy-normal clearfix grpelem" id="u7490-4"><!-- content -->
       <p>Electrophoresis</p>
      </div>
     </div>
     <div class="clearfix colelem" id="u7698"><!-- group -->
      <div class="Product-copy-bold clearfix grpelem" id="u7471-4"><!-- content -->
       <p>Biological Source:</p>
      </div>
      <div class="Product-copy-normal clearfix grpelem" id="u7500-4"><!-- content -->
       <p>E coli</p>
      </div>
     </div>
     <div class="clearfix colelem" id="u7699"><!-- group -->
      <div class="Product-copy-bold clearfix grpelem" id="u7474-4"><!-- content -->
       <p>Animal Source:</p>
      </div>
      <div class="Product-copy-normal clearfix grpelem" id="u7484-4"><!-- content -->
       <p>Rodent</p>
      </div>
     </div>
     <div class="clearfix colelem" id="u7700"><!-- group -->
      <div class="Product-copy-bold clearfix grpelem" id="u7485-4"><!-- content -->
       <p>Tissue Source:</p>
      </div>
      <div class="Product-copy-normal clearfix grpelem" id="u7470-4"><!-- content -->
       <p>Rabbit</p>
      </div>
     </div>
     <div class="clearfix colelem" id="u7701"><!-- group -->
      <div class="Product-copy-bold clearfix grpelem" id="u7487-4"><!-- content -->
       <p>Citations &amp; references:</p>
      </div>
      <div class="Product-copy-normal clearfix grpelem" id="u7481-4"><!-- content -->
       <p>LiNK</p>
      </div>
     </div>
     <div class="colelem" id="u24868"><!-- simple frame --></div>
    </div>
    <div class="browser_width colelem" id="u7573-bw" style="height: 410px;">
     <div id="u7573"><!-- group -->
      <div class="clearfix" id="u7573_align_to_page">
       <div class="clearfix grpelem" id="pu7552-4"><!-- column -->
        <div class="Related-products clearfix colelem" id="u7552-4"><!-- content -->
         <h2>You May Also Like</h2>
        </div>
        <div class="clearfix colelem" id="pu8921"><!-- group -->
         <div class="clearfix grpelem" id="u8921"><!-- column -->
          <div class="transition colelem" id="u7551"><!-- simple frame --></div>
          <div class="Related-product-Name clearfix colelem" id="u7566-4"><!-- content -->
           <p>Product name on two lines of text</p>
          </div>
          <div class="Related-product-Cost clearfix colelem" id="u7557-4"><!-- content -->
           <p>£XXX.XX</p>
          </div>
         </div>
         <div class="clearfix grpelem" id="u7640"><!-- column -->
          <div class="transition colelem" id="u7643"><!-- simple frame --></div>
          <div class="Related-product-Name clearfix colelem" id="u7642-4"><!-- content -->
           <p>Product name on two lines of text</p>
          </div>
          <div class="Related-product-Cost clearfix colelem" id="u7641-4"><!-- content -->
           <p>£XXX.XX</p>
          </div>
         </div>
        </div>
       </div>
       <div class="clearfix grpelem" id="u7648"><!-- column -->
        <div class="transition colelem" id="u7650"><!-- simple frame --></div>
        <div class="Related-product-Name clearfix colelem" id="u7651-4"><!-- content -->
         <p>Product name on two lines of text</p>
        </div>
        <div class="Related-product-Cost clearfix colelem" id="u7649-4"><!-- content -->
         <p>£XXX.XX</p>
        </div>
       </div>
       <div class="clearfix grpelem" id="u7656"><!-- column -->
        <div class="transition colelem" id="u7657"><!-- simple frame --></div>
        <div class="Related-product-Name clearfix colelem" id="u7658-4"><!-- content -->
         <p>Product name on two lines of text</p>
        </div>
        <div class="Related-product-Cost clearfix colelem" id="u7659-4"><!-- content -->
         <p>£XXX.XX</p>
        </div>
       </div>
       <div class="clearfix grpelem" id="u7664"><!-- column -->
        <div class="transition colelem" id="u7666"><!-- simple frame --></div>
        <div class="Related-product-Name clearfix colelem" id="u7665-4"><!-- content -->
         <p>Product name on two lines of text</p>
        </div>
        <div class="Related-product-Cost clearfix colelem" id="u7667-4"><!-- content -->
         <p>£XXX.XX</p>
        </div>
       </div>
       <div class="clearfix grpelem" id="u7672"><!-- column -->
        <div class="transition colelem" id="u7673"><!-- simple frame --></div>
        <div class="Related-product-Name clearfix colelem" id="u7675-4"><!-- content -->
         <p>Product name on two lines of text</p>
        </div>
        <div class="Related-product-Cost clearfix colelem" id="u7674-4"><!-- content -->
         <p>£XXX.XX</p>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="browser_width colelem" id="u15899-bw" style="height: 50px;">
     <div id="u15899"><!-- group -->
      <div class="clearfix" id="u15899_align_to_page">
       <div class="clearfix grpelem" id="u15939"><!-- group -->
        <div class="transition social_icons clearfix grpelem" id="u15914-4"><!-- content -->
         <p></p>
        </div>
        <div class="transition social_icons clearfix grpelem" id="u15918-4"><!-- content -->
         <p></p>
        </div>
        <div class="transition social_icons clearfix grpelem" id="u15915-4"><!-- content -->
         <p></p>
        </div>
        <div class="transition social_icons clearfix grpelem" id="u15919-4"><!-- content -->
         <p></p>
        </div>
        <div class="transition social_icons clearfix grpelem" id="u15916-4"><!-- content -->
         <p></p>
        </div>
        <div class="transition social_icons clearfix grpelem" id="u15920-4"><!-- content -->
         <p></p>
        </div>
        <div class="transition social_icons clearfix grpelem" id="u15917-4"><!-- content -->
         <p></p>
        </div>
        <div class="transition social_icons clearfix grpelem" id="u15921-4"><!-- content -->
         <p></p>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="clearfix colelem" id="pu15900-3"><!-- group -->
     <div class="browser_width grpelem" id="u15900-3-bw" style="height: 327px;">
      <div class="clearfix" id="u15900-3"><!-- content -->
       <p>&nbsp;</p>
      </div>
     </div>
     <div class="browser_width grpelem" id="u15901-3-bw" style="height: 327px;">
      <div class="clearfix" id="u15901-3"><!-- content -->
       <p>&nbsp;</p>
      </div>
     </div>
     <div class="clearfix grpelem" id="u15902-27"><!-- content -->
      <p class="footer_heading">Service &amp; Support</p>
      <p class="footer_links">Customer Support</p>
      <p class="footer_links">Technical Service</p>
      <p class="footer_links">Web Help Desk</p>
      <p class="footer_links">SDS</p>
      <p class="footer_links">C of A</p>
      <p class="body_copy" id="u15902-13">&nbsp;</p>
      <p class="footer_heading">Ordering</p>
      <p class="footer_links">Custom Products</p>
      <p class="footer_links">eCommerce Solutions</p>
      <p class="footer_links">Order Center</p>
      <p class="footer_links">Products</p>
      <p class="footer_links">Terms &amp; Conditions of Sale</p>
     </div>
     <div class="clearfix grpelem" id="u15903-26"><!-- content -->
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
     <div class="Legal-copy-at-bottom clearfix grpelem" id="u15904-4"><!-- content -->
      <p>©2016 KITSCO. All Rights Reserved.</p>
     </div>
    </div>
   </div>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn2.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script><script src="./productdetails_files/jquery-1.8.3.min.js" type="text/javascript"></script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <!-- Other scripts -->
  <script type="text/javascript">
   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),i=0;i<f.length;i++)if("text/css"==f[i].type){var h=(f[i].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!h||!h[1]||!h[2])break;b[h[1]]=h[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(i=0;i<Muse.assets.required.length;){var h=Muse.assets.required[i],l=h.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(i,1),"undefined"!=typeof b[h]&&(k!=b[h]>>>24||l!=(b[h]&16777215))&&Muse.assets.outOfDate.push(h)):i++;f.className="version";break;case "js":k.match(/^jquery-[\d\.]+/gi)&&d&&d().jquery=="1.8.3"?Muse.assets.required.splice(i,1):i++;break;default:throw Error("Unsupported file type: "+
l);}}f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?setTimeout(function(){g(!0)},5E3):g()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.musepolyfill.bgsize","jquery.musemenu","webpro","musewpslideshow","jquery.museoverlay","touchswipe","jquery.watch"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.resizeHeight('.browser_width');/* resize height */
Muse.Utils.requestAnimationFrame(function() { $('body').addClass('initialized'); });/* mark body as initialized */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.initWidget('.MenuBar', ['#bp_infinity'], function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.initWidget('#pamphletu18523', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'mouseover',deactivationEvent:'mouseout_both',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:300,hideAllContentsFirst:true,shuffle:false,enableSwipe:false,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu18523 */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="./productdetails_files/require.js" type="text/javascript" async="" data-main="scripts/museconfig.js?crc=169177150" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType &amp;&amp; requireType.toString &amp;&amp; requireType.toString().indexOf &amp;&amp; 0 &lt;= requireType.toString().indexOf(&#39;#scripterror&#39;)) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
  
  <!--HTML Widget code-->
  
<script type="text/javascript">!function(){function e(e){for(var o in t){var n=t[o];("lightbox"!=n.options.contentLayout_runtime||n._$sslbpOverlay.parent().is(":visible"))&&(e?n.next():n.previous())}}var t=[],o=WebPro.Widget.SlideShowBase.prototype._setUp;WebPro.Widget.SlideShowBase.prototype._setUp=function(){return t.push(this),o.apply(this,arguments)},$(document.documentElement).keydown(function(t){37==t.keyCode?e():39==t.keyCode&&e(!0)})}();</script>

       <script type="text/javascript">
    
        $(window).load(function() { // makes sure the whole site is loaded
            $('#status').fadeOut(); // will first fade out the loading animation
            $('#preloader').delay(200).fadeOut('slow'); // will fade out the white DIV that covers the website.
            $('body').delay(200).css({'overflow':'visible'});
        })
    
    </script>
    
   

<div style="position: fixed; display: none;" class="MenuBar popup_element"></div><div style="position: fixed; display: none;" class="MenuBar popup_element"></div></body></html>