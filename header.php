<?php
/**
 * The Header
 *
 * Displays all of the <head> section and everything up till <main>
 *
 * @package Fluida
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<meta name="yandex-verification" content="0f4e49fd8a325104" />
<meta name="google-site-verification" content="z5-7HDq_zoSOunAf_McDu5CxxqzkOjXH-cs_UdHQPw4" />
<link rel="stylesheet" href="/wp-content/themes/fluida/well.css">
<?php if ( is_single() && 'post' == get_post_type() )  {echo '<link href="https://vjs.zencdn.net/5.16.0/video-js.css" rel="stylesheet">';} ?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Racing+Sans+One" rel="stylesheet">
<style href="/wp-content/themes/fluida/style.css"></style>
<?php cryout_meta_hook(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js" async></script>
<script src="/wp-content/themes/fluida/tempo.js" async></script>
<link rel="stylesheet" href="https://hentaifreak.org/erogames/im-style.css">
<?php
	cryout_header_hook();
	wp_head();
?>
</head>
<body <?php body_class(); cryout_schema_microdata( 'body' );?>>
	<?php cryout_body_hook(); ?>

	
	<header id="masthead" class="site-header" <?php cryout_schema_microdata( 'header' ) ?> role="banner">	
	 
   <div class="text-center" style="background:grey;margin-top:10px;" class="sub-menu">
  <?php if(is_mobile()){
  echo'<!--<div class="col-xs-12" style="margin-bottom:10px;">
         <div class="row" id="rem">
           <div class="col-xs-2" style=""><span class="close2"><img src="https://hentaipapa.com/wp-content/uploads/close-button-1.png" style="height:16px;" /></span></div>
           <div class="col-xs-2"><img src="https://res-r.lfjack.com/image/index_icon/1620382681641.png" style="height:40px;width:45px;" alt="ad-icon"></div>
           <div class="col-xs-5"><p style="font-size:12px;text-align:left;"><strong>Horny Arcana</strong><br>Cum Play Here!</p></div>
           <div class="col-xs-2"><a href="https://l.epvkjs.com/ouuFE5ph"><button style="border-radius:10px;background-color:red;color:white;font-size:12px;margin-right:5px;">Play</button></a></div>
        </div></div>-->'; } ?>
  
    </div> 
    
    
		<div id="site-header-main">
         <div class="text-center" style="background:red;margin-bottom:10px;" class="sub-menu">
  <a href="https://www.sexgames.cc/hentai" target="_blank" style="color:#fff;font-family: 'Racing Sans One',cursive;font-size: 15px;">Hentai Games</a>
    </div>
			<div id="site-header-main-inside">
		
				<nav id="mobile-menu"> 
					<span id="nav-cancel"><i class="icon-cancel"></i></span>
					<?php cryout_mobilemenu_hook(); ?>
				</nav> <!-- #mobile-menu -->
				
				<div id="branding">
					<?php cryout_branding_hook();?>
				</div><!-- #branding -->

				<?php cryout_header_socials_hook();?>
				
				<a id="nav-toggle" style="line-height:140px;"><span>&nbsp;</span></a>
				<nav id="access" role="navigation"  aria-label="Primary Menu" <?php cryout_schema_microdata( 'menu' ); ?>>
					<?php cryout_access_hook();?>
				</nav><!-- #access -->
						
			</div><!-- #site-header-main-inside -->
		</div><!-- #site-header-main -->
		
		<div id="header-image-main">
			<div id="header-image-main-inside">
				<?php cryout_headerimage_hook(); ?>
			</div><!-- #header-image-main-inside -->
		</div><!-- #header-image-main -->
	</header><!-- #masthead -->
	<?php cryout_breadcrumbs_hook();?>
  
    <?php 
    $url = $_SERVER['REQUEST_URI'];
    if ( $temp = strstr($url, '?', true) ) {
    $url = $temp;
     }
  	?>
    <?php { if ( is_single() && 'post' == get_post_type() ) {}
     else {      
    if(is_mobile()){
    echo '<div style="margin:50px 20px;padding-bottom:190px;"><div class="col-md-2 col-xs-4 text-center" style="padding:15px;"><a href="'.$url.'?orderby=title&order=asc"><i class="fa fa-sort-alpha-asc" aria-hidden="true" style="font-size:25px;color:red;"></i><p class="destroy" style="font-size:15px;">Name</p></a></div>
    <div class="col-md-2 col-xs-4 text-center" style="padding:15px;"><a href="'.$url.'?orderby=date"><i class="fa fa-hourglass-o" aria-hidden="true" style="font-size:25px;color:red;"></i><p class="destroy" style="font-size:15px;">Date</p></div>
    <div class="col-md-2 col-xs-4 text-center" style="padding:15px;"><a href="/tags/2020/"><i class="fa fa-calendar-check-o" aria-hidden="true" style="font-size:25px;color:red;"></i><p class="destroy" style="font-size:15px;">Year</p></div>
    <div class="col-md-2 col-xs-4 text-center" style="padding:15px;"><a href="/tags/exclusive/"><i class="fa fa-fire" aria-hidden="true" style="font-size:25px;color:red;"></i><p class="destroy" style="font-size:15px;">Exclusive Releases</p></div>
    <div class="col-md-2 col-xs-4 text-center" style="padding:15px;"><a href="'.$url.'?orderby=comment_count"><i class="fa fa-commenting-o" aria-hidden="true" style="font-size:25px;color:red;"></i><p class="destroy" style="font-size:15px;">Most Comments</p></div>
    <div class="col-md-2 col-xs-4 text-center" style="padding:15px;"><a href="'.$url.'?orderby=post_views"><i class="fa fa-sort-amount-desc" aria-hidden="true" style="font-size:25px;color:red;"></i><p class="destroy" style="font-size:15px;">Most Viewed</p></div></div>';
    }
    else {
    echo'<div style="margin:50px 20px 20px 20px;padding-bottom:120px;"><div class="col-md-2 col-xs-4 text-center" style="padding:15px;"><a href="'.$url.'?orderby=title&order=asc"><i class="fa fa-sort-alpha-asc" aria-hidden="true" style="font-size:50px;color:red;"></i><p class="destroy" style="font-size:20px;">Name</p></a></div>
    <div class="col-md-2 col-xs-4 text-center" style="padding:15px;"><a href="'.$url.'?orderby=date"><i class="fa fa-hourglass-o" aria-hidden="true" style="font-size:50px;color:red;"></i><p class="destroy" style="font-size:20px;">Date</p></a></div>
    <div class="col-md-2 col-xs-4 text-center" style="padding:15px;"><a href="/tags/2020/"><i class="fa fa-calendar-check-o" aria-hidden="true" style="font-size:50px;color:red;"></i><p class="destroy" style="font-size:20px;">Year</p></a></div>
    <div class="col-md-2 col-xs-4 text-center" style="padding:15px;"><a href="/tags/exclusive/"><i class="fa fa-fire" aria-hidden="true" style="font-size:50px;color:red;"></i><p class="destroy" style="font-size:20px;">Exclusive Releases</p></a></div>
    <div class="col-md-2 col-xs-4 text-center" style="padding:15px;"><a href="'.$url.'?orderby=comment_count"><i class="fa fa-commenting-o" aria-hidden="true" style="font-size:50px;color:red;"></i><p class="destroy" style="font-size:20px;">Most Comments</p></a></div>
    <div class="col-md-2 col-xs-4 text-center" style="padding:15px;"><a href="'.$url.'?orderby=post_views"><i class="fa fa-sort-amount-desc" aria-hidden="true" style="font-size:50px;color:red;"></i><p class="destroy" style="font-size:20px;">Most Viewed</p></a></div></div>';
    } } }
    ?>
  <?php if( $_SERVER['REQUEST_URI'] == '/' ) { ?>
	<nav class="navbar navbar-inverse text-center" style="margin-top:20px;">
  <ul class="nav navbar-nav text-center demo" style="margin:10px;">
    <li><a href="https://bongacams.com" target="_blank" style="color:#fff;;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;color:red;"><i style="color:red;font-size:10px;" class="fa fa-circle" aria-hidden="true"></i>&nbsp;&nbsp; Free Live Sex</a>
      <a href="https://porngames.games/" target="_blank" style="color:#fff;;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;">Porn Games</a> 
      <a href="https://xxxgames.games/" target="_blank" style="color:#fff;;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;"> Sex Games</a> 
      <a href="https://adultgames.games/" target="_blank" style="color:#fff;;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;">Free Adult Games</a> 
      <a href="https://freesexgames.games/" target="_blank" style="color:#fff;;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;">Free Sex Games</a>
       <a href="https://hentaiporn.com/" target="_blank" style="color:#fff;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;">Hentai Games</a> 
      <a href="https://hentaivideos.com/" target="_blank" style="color:#fff;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;"> Hentai Videos</a>
      <a href="https://www.masturbate2gether.com/" target="_blank" style="color:#fff;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;"><i style="color:red;font-size:10px;" class="fa fa-circle" aria-hidden="true"></i>&nbsp;&nbsp;Masturbate2Gether</a>  
      <a href="https://jerkdolls.com/" target="_blank" style="color:#fff;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;">JerkDolls</a>
      <a href="https://adult-sex-games.com/search/hentai" target="_blank" style="color:#fff;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;">Hentai Sex Games</a>
    <a href="https://thebestfetishsites.com/" target="_blank" style="color:#fff;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;">Fetish Sites</a>
    <a href="https://wetpussygames.com/reviews.html" target="_blank" style="color:#fff;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;">Hentai Reviews</a>
    <a href="https://hd.freehentaistream.com/tag/uncensored-hentai" target="_blank" style="color:#fff;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;">Uncensored Hentai</a> 
    <a href="https://filtercams.com/categories/cosplay/" target="_blank" style="color:#fff;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;">Webcam Porn</a></li>
    <a href="https://www.sexyfuckgames.com/tags/hentai" target="_blank" style="color:#fff;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;">Hentai Porn Games</a></li>
   </ul>
</nav> 
<?php } else {?>
    <nav class="navbar navbar-inverse" style="margin-top:40px;">
 <ul class="nav navbar-nav text-center demo" style="margin:10px;">
   <li><a href="https://bongacams.com" target="_blank" style="color:#fff;;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;color:red;"><i style="color:red;font-size:10px;" class="fa fa-circle" aria-hidden="true"></i>&nbsp;&nbsp; Free Live Sex</a>
      <a href="https://porngames.games/" target="_blank" style="color:#fff;;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;">Porn Games</a> 
      <a href="https://xxxgames.games/" target="_blank" style="color:#fff;;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;"> Sex Games</a> 
      <a href="https://adultgames.games/" target="_blank" style="color:#fff;;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;">Free Adult Games</a> 
      <a href="https://freesexgames.games/" target="_blank" style="color:#fff;;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;">Free Sex Games</a>
       <a href="https://hentaiporn.com/" target="_blank" style="color:#fff;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;">Hentai Games</a> 
      <a href="https://hentaivideos.com/" target="_blank" style="color:#fff;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;"> Hentai Videos</a>   
      <a href="https://www.masturbate2gether.com/" target="_blank" style="color:#fff;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;"><i style="color:red;font-size:10px;" class="fa fa-circle" aria-hidden="true"></i>&nbsp;&nbsp;Masturbate2Gether</a> 
      <a href="https://jerkdolls.com/" target="_blank" style="color:#fff;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;">JerkDolls</a>
      <a href="https://adult-sex-games.com/search/hentai" target="_blank" style="color:#fff;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;">Hentai Sex Games</a>
    <a href="https://thebestfetishsites.com/" target="_blank" style="color:#fff;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;">Fetish Sites</a>
    <a href="https://wetpussygames.com/reviews.html" target="_blank" style="color:#fff;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;">Hentai Reviews</a>
    <a href="https://hd.freehentaistream.com/tag/uncensored-hentai" target="_blank" style="color:#fff;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;">Uncensored Hentai</a> 
    <a href="https://filtercams.com/categories/cosplay/" target="_blank" style="color:#fff;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;">Webcam Porn</a></li>
   <a href="https://www.sexyfuckgames.com/tags/hentai" target="_blank" style="color:#fff;font-family: 'Racing Sans One',cursive;font-size: 12.5px;padding:5px;display:inline-block;">Hentai Porn Games</a></li>
   </ul>
</nav> 
<?php } ?> 
  <style>
  
    /** Fonts **/
@import url("https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|PT+Sans");
/** Variables **/
/** Mixins **/
.announcements-container {
  width: 100%;
  background: #23282D;
  overflow: hidden;
  position: relative;
  display: inline-block;
  font-family: "PT Sans", sans-serif;
  height: 40px;
  line-height: 40px;
  -webkit-border-top-left-radius: 4px;
  -webkit-border-bottom-left-radius: 4px;
  -moz-border-radius-topleft: 4px;
  -moz-border-radius-bottomleft: 4px;
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
.announcements-container:hover {
  box-shadow: 0 4px 16px 0 rgba(0, 0, 0, 0.2);
}
.announcements-container .container-title {
  width: 13%;
  height: 100%;
  overflow: hidden;
  padding: 0 15px 0 15px;
  float: left;
  background: #ff0000;
  text-align: center;
  font-size: 13px;
  text-transform: uppercase;
  color: white;
  letter-spacing: 1px;
  -webkit-border-top-left-radius: 2px;
  -webkit-border-bottom-left-radius: 2px;
  -moz-border-radius-topleft: 2px;
  -moz-border-radius-bottomleft: 2px;
  border-top-left-radius: 2px;
  border-bottom-left-radius: 2px;
}
.announcements-container .container-title img {
  width: 16px;
  height: 16px;
  vertical-align: middle;
  margin: -5px 3px 0 0;
}
.announcements-container ul.announcements {
  width: 67%;
  float: left;
  height: 40px;
  overflow: hidden;
  list-style-type: none;
  vertical-align: middle;
}
.announcements-container ul.announcements li {
  width: 100%;
  overflow: hidden;
  font-size: 14px;
  margin: 0px 0 0 10px;
  vertical-align: middle;
  padding: 0;
  line-height: 40px;
  text-align: left;
  white-space: nowrap;
  text-overflow: ellipsis;
}
.announcements-container ul.announcements li a {
  width: 100%;
  text-decoration: none;
  color: #fff;
  -webkit-transition: color 0.5s ease-out;
  -moz-transition: color 0.5s ease-out;
  -o-transition: color 0.5s ease-out;
  transition: color 0.5s ease-out;
}
.announcements-container ul.announcements li a:hover {
  color: #03a9f4;
}
.announcements-container ul.announcements li a:visited {
  color: #616161;
}
    
  </style>
  <script>
  var hoveredAnnouncement = null;
function announcementTicker() {
  $(".announcements")
    .filter(function(item) {
      return !$(this).is(hoveredAnnouncement);
    })
    .each(function() {
      $(this)
        .find("li:first")
        .slideUp(function() {
          var announcement = $(this).closest(".announcements");
          $(this)
            .appendTo(announcement)
            .slideDown();
        });
    });
}
setInterval(announcementTicker, 5000);

$(function() {  
  $(".announcements").hover(
    function() {
      hoveredAnnouncement = $(this);
    },
    function() {
      hoveredAnnouncement = null;
    }
  );
});
  </script>
  <div class="announcements-container">
  <div class="container-title">Latest Articles</div>
  <ul class="announcements">
    <li><a href="https://hentaifreak.org/how-to-have-a-dirty-chat-with-a-girl/">How to have a dirty chat with a girl</a></li>
    <li><a href="https://hentaifreak.org/where-to-find-the-best-uncensored-hentai-visit-hentai-videos-now/">Where To Find The Best Uncensored Hentai? Visit Hentai Videos Now!</a></li>
    <li><a href="https://hentaifreak.org/best-adult-site-broker-where-you-can-buy-or-sell-adult-websites/">Best Adult Site Broker Where You Can Buy or Sell Adult Websites</a></li>
    <li><a href="https://hentaifreak.org/what-is-the-best-site-to-buy-or-sell-adult-domains-in-2021/" >What is the best site to buy or sell adult domains in 2021?</a></li>
    <li><a href="https://hentaifreak.org/know-the-value-of-your-porn-site-and-where-to-sell-the-adult-domain/" >Know The Value of Your Porn Site and Where to Sell That Adult Domain!</a></li>
    <li><a href="https://hentaifreak.org/looking-to-buy-adult-domains-or-adult-websites/" >Looking to Buy Adult Domains or Adult Websites?</a></li>
    <li><a href="https://hentaifreak.org/where-to-buy-established-adult-sites-domains/">Where to Buy Established Adult Sites or Domains?</a></li>
    <li><a href="https://hentaifreak.org/need-good-quality-adult-websites-domains-broker-xxx-is-all-you-need/">Need Good Quality Adult Websites or Domains? Broker.xxx Is All You Need!</a></li>
  </ul>
</div>
	<?php { if(!is_mobile()){ echo '<div style="color:white; font-size:16px;margin:0;" class="text-center"><em> Bookmark us for future updates. Drop a comment to stay in touch for ads, placements or enquires.</em><hr></div> 
  <div class="text-center col-lg-6 col-xs-12 col-md-12"><iframe width="728" height="90" scrolling="no" frameborder="0" src=https://a.adtng.com/get/10013430?time=1651519800734 allowtransparency="true" marginheight="0" marginwidth="0" name="spot_id_10013430"></iframe>
</div><div class="text-center col-lg-6 col-xs-12 col-md-12"><iframe width="728" height="90" scrolling="no" frameborder="0" src=https://a.adtng.com/get/10013430?time=1651519800734 allowtransparency="true" marginheight="0" marginwidth="0" name="spot_id_10013430"></iframe>
</div><br><br><br> <!--<div class="text-center col-lg-6 col-xs-12 col-md-6"><iframe src="text/javascript" src="https://syndication.traffichaus.com/adserve/index.php?z=206257"</iframe></a></div>-->'; }}?>
<?php { if(is_mobile()){ echo '<div class="text-center"><br><br><iframe width="300" height="150" scrolling="no" frameborder="0" src=https://a.adtng.com/get/10013428?time=1651519797837 allowtransparency="true" marginheight="0" marginwidth="0" name="spot_id_10013428"></iframe></div>'; 
                       } }?>	
<div id="content">
  
   <?php if(!is_mobile()){ ?>
  <!--<nav class="navbar navbar-inverse" style="margin-top:20px;">
  <ul class="nav navbar-nav demo" style="margin:10px;">
    <li><a href="https://hentaifreak.org/how-to-have-a-dirty-chat-with-a-girl/" style="font-size:12px;">How to have a dirty chat with a girl</a></li>
    <li><a href="https://hentaifreak.org/where-to-find-the-best-uncensored-hentai-visit-hentai-videos-now/" style="font-size:12px;">Where To Find The Best Uncensored Hentai? Visit Hentai Videos Now!</a></li>
    <li><a href="https://hentaifreak.org/best-adult-site-broker-where-you-can-buy-or-sell-adult-websites/" style="font-size:12px;">Best Adult Site Broker Where You Can Buy or Sell Adult Websites</a></li>
    <li><a href="https://hentaifreak.org/what-is-the-best-site-to-buy-or-sell-adult-domains-in-2021/" style="font-size:12px;">What is the best site to buy or sell adult domains in 2021?</a></li>
    <li><a href="https://hentaifreak.org/know-the-value-of-your-porn-site-and-where-to-sell-the-adult-domain/" style="font-size:12px;">Know The Value of Your Porn Site and Where to Sell That Adult Domain!</a></li>
    <li><a href="https://hentaifreak.org/looking-to-buy-adult-domains-or-adult-websites/" style="font-size:12px;">Looking to Buy Adult Domains or Adult Websites?</a></li>
    <!--<li><a href="https://hentaifreak.org/where-to-buy-established-adult-sites-domains/" style="font-size:12px;">Where to Buy Established Adult Sites or Domains?</a></li>
    <li><a href="https://hentaifreak.org/need-good-quality-adult-websites-domains-broker-xxx-is-all-you-need/" style="font-size:12px;">Need Good Quality Adult Websites or Domains? Broker.xxx Is All You Need!</a></li>
    </ul>
  </nav>-->
<?php } else {?>
  <!--<nav class="navbar navbar-inverse text-center" style="margin-top:20px;">
  <ul class="nav navbar-nav text-center demo" style="margin:10px;">
    <style>
@-webkit-keyframes scroll {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(calc(-50px * 7));
  }
}

@keyframes scroll {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(calc(-50px * 7));
  }
}
.slider {
  box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.125);
  height: 40px;
  margin: auto;
  overflow: hidden;
  position: relative;
  width: 960px;
}
.slider::before, .slider::after {
  content: "";
  height: 40px;
  position: absolute;
  width: 200px;
  z-index: 2;
}
.slider::after {
  right: 0;
  top: 0;
  transform: rotateZ(180deg);
}
.slider::before {
  left: 0;
  top: 0;
}
.slider .slide-track {
  -webkit-animation: scroll 20s linear infinite;
          animation: scroll 20s linear infinite;
  display: flex;
  width: calc(75px * 14);
}
.slider .slide {
  height: 40px;
  width: 250px;
}
    </style>
        <div class="slider">
	<div class="slide-track">
		<div class="slide">
			<li><a href="https://hentaifreak.org/how-to-have-a-dirty-chat-with-a-girl/" style="font-size:14px;">How to have a dirty chat with a girl</a></li>
		</div>
		<div class="slide">
			 <li><a href="https://hentaifreak.org/where-to-find-the-best-uncensored-hentai-visit-hentai-videos-now/" style="font-size:14px;">Where To Find The Best Uncensored Hentai? Visit Hentai Videos Now!</a></li>
		</div>
    <div class="slide">
			 <li><a href="https://hentaifreak.org/best-adult-site-broker-where-you-can-buy-or-sell-adult-websites/" style="font-size:14px;">Best Adult Site Broker Where You Can Buy or Sell Adult Websites</a></li>
		</div>
    <div class="slide">
			 <li><a href="https://hentaifreak.org/what-is-the-best-site-to-buy-or-sell-adult-domains-in-2021/" style="font-size:14px;">What is the best site to buy or sell adult domains in 2021?</a></li>
		</div>
    <div class="slide">
			 <li><a href="https://hentaifreak.org/know-the-value-of-your-porn-site-and-where-to-sell-the-adult-domain/" style="font-size:14px;">Know The Value of Your Porn Site and Where to Sell That Adult Domain!</a></li>
		</div>
    <div class="slide">
			 <li><a href="https://hentaifreak.org/looking-to-buy-adult-domains-or-adult-websites/" style="font-size:14px;">Looking to Buy Adult Domains or Adult Websites?</a></li>
		</div>
    <div class="slide">
			 <li><a href="https://hentaifreak.org/where-to-buy-established-adult-sites-domains/" style="font-size:14px;">Where to Buy Established Adult Sites or Domains?</a></li>
		</div>
    <div class="slide">
			 <li><a href="https://hentaifreak.org/need-good-quality-adult-websites-domains-broker-xxx-is-all-you-need/" style="font-size:14px;">Need Good Quality Adult Websites or Domains? Broker.xxx Is All You Need!</a></li>
		</div>
	</div>
</div>
    </ul>
  </nav>-->
   
<?php } ?> 
    
		<?php cryout_main_hook(); ?>
		