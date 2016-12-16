<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="BLDG" />

    <link rel="icon" type="image/png" href="<? echo base_url();?>assets/images/splash/android-chrome-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" sizes="196x196" href="<? echo base_url();?>assets/images/splash/apple-touch-icon-196x196.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<? echo base_url();?>assets/images/splash/apple-touch-icon-180x180.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<? echo base_url();?>assets/images/splash/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<? echo base_url();?>assets/images/splash/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<? echo base_url();?>assets/images/splash/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<? echo base_url();?>assets/images/splash/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<? echo base_url();?>assets/images/splash/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<? echo base_url();?>assets/images/splash/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<? echo base_url();?>assets/images/splash/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="57x57" href="<? echo base_url();?>assets/images/splash/apple-touch-icon-57x57.png">
    <link rel="icon" type="image/png" href="<? echo base_url();?>assets/images/splash/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<? echo base_url();?>assets/images/splash/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<? echo base_url();?>assets/images/splash/favicon-16x16.png" sizes="16x16">

    <!-- <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'> -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

    <!-- <link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'> -->

    <title><?=$title?></title>

    <!-- <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet" type='text/css'> -->
    <!-- <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/styles/style.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/styles/menu.css"> -->
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/styles/framework.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/styles/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/styles/glyphicons.css">

  </head>

<body>

  <!-- <div id="page-transitions"> -->

    <!-- <div class="page-preloader page-preloader-light">
        <img class="page-preload" src="<? echo base_url();?>assets/images/preload.gif">
    </div> -->

    <?php if ($header) $this->load->view($header); ?>

    <!-- <div id="page-content" class="page-content">
      <div id="page-content-scroll"> -->

          <?php if ($default) $this->load->view($default); ?>

      <!-- </div>
    </div> -->

    <?php //if ($sidebarLeft) $this->load->view($sidebarLeft); ?>

    <?php //if ($sidebarRight) $this->load->view($sidebarRight); ?>

    <?php if ($footer) $this->load->view($footer); ?>

    <?php //if (isset($dropdown)) $this->load->view($dropdown); ?>

  <!-- </div> -->

    <!-- <div class="background"></div> -->

  </body>
  <script type="text/javascript" src="<?=base_url();?>assets/analytics/analytics_tracking.js"></script>
  <script type="text/javascript" src="<? echo base_url();?>assets/scripts/jquery.js"></script>
  <script type="text/javascript" src="<? echo base_url();?>assets/scripts/jquery.unveil.js"></script>
  <script type="text/javascript" src="<? echo base_url();?>assets/scripts/plugins.js"></script>
  <script type="text/javascript" src="<? echo base_url();?>assets/scripts/custom.js"></script>
  <script type="text/javascript" src="<? echo base_url();?>assets/scripts/desktop.js"></script>
</html>
