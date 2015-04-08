<?php
 include_once("config.php");
  session_start();
  
if(!isset($_SESSION['CurrentUser']) || $_SESSION['CurrentUserType']!="admin")
	 header("location:/intern123/login/logout.php");
 ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<!-- Mirrored from cms.template-help.com/wordpress_30731/ by HTTrack Website Copier/3.x [XR&CO'2010], Sat, 24 Aug 2013 18:40:25 GMT -->
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8"><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=7"/>
<title>Prodigy Spot</title>

<style>
#flip1,#flip2,#flip3,#flip4
{
padding-left:60px;
}
</style>
<script type="text/javascript">
//<![CDATA[
window.__CF=window.__CF||{};window.__CF.AJS={"abetterbrowser":{"ie":"7"},"ga_key":{"ua":"UA-7078796-5","ga_bs":"2"}};
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) { var CloudFlare=[{verbose:0,p:1377008706,byc:0,owlid:"cf",mirage:{responsive:0,lazy:0},mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/abv=2332175737/"},atok:"579a3c38f9c853ac7ea5ed3eca9beb58",zone:"template-help.com",rocket:"0",apps:{"abetterbrowser":{"ie":"7"},"ga_key":{"ua":"UA-7078796-5","ga_bs":"2"}}}];var a=document.createElement("script"),b=document.getElementsByTagName("script")[0];a.async=!0;a.src="../../ajax.cloudflare.com/cdn-cgi/nexp/abv%3d2310247235/cloudflare.min.js";b.parentNode.insertBefore(a,b);}}catch(e){};
//]]>
</script>

<link rel="shortcut icon" type="image/x-icon" href="/intern123/images/favicon.ico">
<link rel="profile" href="http://gmpg.org/xfn/11"/>
<link rel="stylesheet" type="text/css" media="all" href="/intern123/wp-content/themes/theme1095/style.css"/>
<link rel="stylesheet" href="/intern123/wp-content/themes/theme1095/css/print.css" type="text/css" media="print"/>
<link rel="pingback" href="xmlrpc.php"/>
<link rel="alternate" type="application/rss+xml" title="Education Center &raquo; Feed" href="indexd784.html?feed=rss2"/>
<link rel="alternate" type="application/rss+xml" title="Education Center &raquo; Comments Feed" href="indexa6da.html?feed=comments-rss2"/>
<script type='text/javascript' src='/intern123/wp-includes/js/tw-sack51a2.js?ver=1.6.1'></script>
<script type='text/javascript' src='/intern123/wp-content/plugins/social-links/javascript41fe.js?ver=3.0.1'></script>
<script type='text/javascript' src='/intern123/wp-includes/js/prototype51a2.js?ver=1.6.1'></script>
<script type='text/javascript' src='/intern123/wp-includes/js/scriptaculous/wp-scriptaculous4511.js?ver=1.8.3'></script>
<script type='text/javascript' src='/intern123/wp-includes/js/scriptaculous/builder4511.js?ver=1.8.3'></script>
<script type='text/javascript' src='/intern123/wp-includes/js/scriptaculous/effects4511.js?ver=1.8.3'></script>
<script type='text/javascript' src='/intern123/wp-includes/js/scriptaculous/dragdrop4511.js?ver=1.8.3'></script>
<script type='text/javascript' src='/intern123/wp-includes/js/scriptaculous/slider4511.js?ver=1.8.3'></script>
<script type='text/javascript' src='/intern123/wp-includes/js/scriptaculous/controls4511.js?ver=1.8.3'></script>
<script type='text/javascript' src='/intern123/wp-includes/js/jquery/jquery1159.js?ver=1.4.2'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd"/>
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="/intern123/wp-includes/wlwmanifest.xml"/>
<link rel='index' title='Education Center' href='http://cms.template-help.com/wordpress_30731'/>
<meta name="generator" content="WordPress 3.0.1"/>
 
<script type="text/javascript" src="/intern123/wp-content/plugins/wp-cufon/js/cufon-yui.js"></script>
 
<script src="/intern123/wp-content/plugins/fonts/LHFStanfordScript_500.font.js" type="text/javascript"></script>
 
<script src="/intern123/wp-content/plugins/fonts/Time_Roman_700.font.js" type="text/javascript"></script>
 
<script src="/intern123/wp-content/plugins/fonts/karabinE_400.font.js" type="text/javascript"></script>
 
<script type="text/javascript">
        Cufon.replace('h3.widget-title, #primary .entry-title, .more-link, .navigation a', { fontFamily: 'Time Roman', hover: true });
Cufon.replace('.container div p', { fontFamily: 'LHFStanfordScript', hover: true });
Cufon.replace('.menu>li>a', { fontFamily: 'karabinE', hover: true }); 
    </script>
 
<link type="text/css" rel="stylesheet" href="/intern123/wp-content/plugins/social-links/stylesheet.css"/>
<script src="/intern123/wp-content/themes/theme1095/js/jquery-1.3.2.js" type="text/javascript"></script>
 
<!--[if lt IE 7]><script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script.js"></script><![endif]-->
<script type="text/javascript" src="/intern123/wp-content/themes/theme1095/js/superfish.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
			$('.sf-menu ul').superfish({ 
				delay:       10,
				animation:   {opacity:'show',height:'show'},
				speed:       'fast',
				autoArrows:  false,
				dropShadows: false
			}); 
		});
	</script>
<script type="text/javascript" src="/intern123/wp-content/themes/theme1095/js/loopedslider.0.5.4.js"></script>
<script type="text/javascript" charset="utf-8">
		
$(function(){
		$('#loopedSlider').loopedSlider({
			autoStart: 4500,
			restart: 5000
		});
	});
		</script>
<script type="text/javascript">
/* <![CDATA[ */
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-7078796-5']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

(function(b){(function(a){"__CF"in b&&"DJS"in b.__CF?b.__CF.DJS.push(a):"addEventListener"in b?b.addEventListener("load",a,!1):b.attachEvent("onload",a)})(function(){"FB"in b&&"Event"in FB&&"subscribe"in FB.Event&&(FB.Event.subscribe("edge.create",function(a){_gaq.push(["_trackSocial","facebook","like",a])}),FB.Event.subscribe("edge.remove",function(a){_gaq.push(["_trackSocial","facebook","unlike",a])}),FB.Event.subscribe("message.send",function(a){_gaq.push(["_trackSocial","facebook","send",a])}));"twttr"in b&&"events"in twttr&&"bind"in twttr.events&&twttr.events.bind("tweet",function(a){if(a){var b;if(a.target&&a.target.nodeName=="IFRAME")a:{if(a=a.target.src){a=a.split("#")[0].match(/[^?=&]+=([^&]*)?/g);b=0;for(var c;c=a[b];++b)if(c.indexOf("url")===0){b=unescape(c.split("=")[1]);break a}}b=void 0}_gaq.push(["_trackSocial","twitter","tweet",b])}})})})(window);
/* ]]> */
</script>
</head>
<body class="blog">
<div id="container">
<div class="container-wrapper"><div class="bg-footer clearfix">
<div id="header">

<div id="header-inner" class="clearfix">
<div id="logo">
<a href="/intern123/index.php" title="Education Center" rel="home"><img src="/intern123/wp-content/themes/theme1095/images/logo2.png" title="" alt=""/></a>
</div> 
<div id="search">
<form action="http://cms.template-help.com/wordpress_30731" id="searchform" method="get" role="search">
<div></div>
</form>
</div>
</div> 
</div> 
<div id="primary-nav" class="sf-menu" role="navigation" >
  <div id="dropmenu" class="menu-main-container">
  <ul id="menu-main" class="menu">
    <li ><a href="adminaccount.php">home</a></li>
	 <li ><a href="add_faq.php">FAQ</a></li>
   <li ><a href="edit-admin.php">edit Profile </a></li>
   <li ><a href="cpage.php">Create Page </a></li>
<li ><a href="/intern123/login/logout.php">logout</a></li>
    </ul>
</div>
  <h3 class="widget-title">&nbsp;</h3>

</div>
<div>
<div style="margin: 15px 0px 0px; display:table; text-align: left; width:100%; float:left;">
  <noscript>
  </noscript>
  <noscript>
  <div style="display:table; padding: 2px 4px; margin: 0px 0px 5px; border: 1px solid rgb(204, 204, 204); text-align:left; background-color: rgb(255, 255, 255);"></div>
  </noscript>
  
  <div id="content" class="clearfix"> 
<div id="sidebar" class="widget-area" role="complementary">

<div id="categories-8" class="widget widget_categories"><h3 class="widget-title">&nbsp;</h3>
<div  style="margin: 15px 0px 0px; display: inline-block; text-align: center; width: 100%;">

 <?php if(isset($_SESSION['CurrentUser']))
				 {
					 if($_SESSION['CurrentUserType']=="admin")
					 {
							echo "</div><div  style='font-size:20px; color: #A80000;text-align:justify;'>".$_SESSION['CurrentUserName']."<br><br></div>";
							
					 }
					 else
						 header("location:/intern123/login/logout.php");
				 }
				 ?>
</div>

  <div id="categories-8" class="widget widget_categories"><h3 class="widget-title">&nbsp;</h3>
<div  style="margin: 15px 0px 0px; display: inline-block; text-align: center; width: 200px;"><noscript><div style="display: inline-block; padding: 2px 4px; margin: 0px 0px 5px; border: 1px solid rgb(204, 204, 204); text-align: center; background-color: rgb(255, 255, 255);"><a href="http://localtimes.info/Asia/India/New_Delhi/" style="text-decoration: none; font-size: 13px; color: rgb(0, 0, 0);"><img src="http://localtimes.info/images/countries/in.png"="" border=0="" style="border:0;margin:0;padding:0"=""> New+Delhi</a></div></noscript><script type="text/javascript" src="http://localtimes.info/clock.php?continent=Asia&country=India&city=New Delhi&cp1_Hex=000000&cp2_Hex=FFFFFF&cp3_Hex=000000&fwdt=200&ham=0&hbg=0&hfg=0&sid=0&mon=0&wek=0&wkf=0&sep=0&widget_number=1000"></script></div></div>

  
  

  <h3 id="flip1" class="widget-title">Categories</h3>
  <!-- <ul style="font-size:12px; width:auto;">-->
  <div id="flip1" ><a href="cUser.php"title="" >Create User</a></div>
  <div id="flip2"><a href="search.php"title="" >Search User</a></div>
  <div id="flip3"><a href="faculty_details.php"title="" >Faculty Details</a></div>
   <div id="flip4"><a href="conQuery.php"title="" >Queries</a></div>
   <div id="flip4"><a href="abc.php"title="" >Admin Paged</a></div>
  
  <li class="widget widget_categories">
   </li>
      <h3 class="widget-title">Search</h3>
    <form action="#" method="POST" >
      type keywords..
      <input type="text" name="name">
        <br>
        <br>
        <input name="submit" type="submit" value="Search">
      </form>
	 
  
 
  </div>
  <!-- </ul>-->
</div>
