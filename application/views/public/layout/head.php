<?php 
    $site = $this->mConfig->list_config();
?>
<!DOCTYPE html>
<html lang="id">
<!--
	HTML tag with Open Graph attributes should looks like this
	<html class="no-js" lang="en-US" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">
-->
<head> 
	<meta charset="UTF-8" />
	<title><?php echo $title;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Open Graph meta tags for social websites -->
	<meta property="og:title" content="<?php echo $title;?>">
    <meta property="og:url" content="">
    <meta property="og:image" content="<?php echo base_url('assets/upload/image/'.$site['icon']) ?>">
    <meta property="og:site_name" content="<?php echo $site['nameweb'] ?>">
    <meta property="og:keywords" content="<?php echo $site['keywords'];?>">
    <meta property="og:metatext" content="<?php echo $site['metatext'];?>">
    <meta property="fb:app_id" content="">
	
	<!-- CSS Animation libs styles -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/public/css/libs/animate.min.css" type="text/css" media="all">
	<!-- Font Awesome icon library -->
	<link href="<?php echo base_url() ?>assets/public/css/libs/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<!-- Load primary stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/public/css/skin.css" type="text/css" media="all">
</head>