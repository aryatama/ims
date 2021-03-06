<?php 
    $site = $this->mConfig->list_config();
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url('assets/upload/image/'.$site['icon']) ?>" rel="shortcut icon">
    <title><?php echo $title;?></title>

    <meta property="og:title" content="<?php echo $title;?>">
    <meta property="og:url" content="">
    <meta property="og:image" content="<?php echo base_url('assets/upload/image/'.$site['icon']) ?>">
    <meta property="og:site_name" content="<?php echo $site['nameweb'] ?>">
    <meta property="og:keywords" content="<?php echo $site['keywords'];?>">
    <meta property="og:metatext" content="<?php echo $site['metatext'];?>">
    <meta property="fb:app_id" content="">

    <!-- Styles -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,800" rel="stylesheet" type="text/css"><!-- Google web fonts -->
    <link href="<?php echo base_url();?>assets/front/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"><!-- font-awesome -->
    <link href="<?php echo base_url();?>assets/front/js/dropdown-menu/dropdown-menu.css" rel="stylesheet" type="text/css"><!-- dropdown-menu -->
    <link href="<?php echo base_url();?>assets/front/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/front/js/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"><!-- Fancybox -->
    <link href="<?php echo base_url();?>assets/front/js/audioplayer/audioplayer.css" rel="stylesheet" type="text/css"><!-- Audioplayer -->
    <link href="<?php echo base_url();?>assets/front/style.css" rel="stylesheet" type="text/css"><!-- theme styles -->
  </head>