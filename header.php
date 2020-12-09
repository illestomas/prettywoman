<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PWBT</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <?php wp_head(); ?>
</head>
<body>
  <div class="responsive-menu"><div style="padding: 30px 0;"><button class="button responsive-menu-close"><i class="las la-times"></i></button><?php wp_nav_menu('menu-primary') ?></div></div>
  <div class="main">
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="logo col-6">
          <img src="<?php echo get_template_directory_uri() . '/src/pwbt_white.svg' ?>" />
        </div>
        <div class="col-6 float-right responsive-menu-button">
          <button class="button">
            <i class="las la-bars"></i>
          </button>
        </div>
      </div>
    </div>
  </div>



