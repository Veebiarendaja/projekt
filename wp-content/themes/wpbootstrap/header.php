<head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Mate+SC' rel='stylesheet' type='text/css'>


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>
<body>
<div class="wrapper">
    <header class="header-wrap">
        <div class="navigation-wrap global-container">
            <div class="menu-block1">
                <?php wp_nav_menu(array('menu' => 'menublock1', 'walker' => new description_walker())); ?>
                <div class="menu-line"></div>
            </div><div class="menu-block-logo">
                <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="">
            </div><div class="menu-block2">
                <?php wp_nav_menu(array('menu' => 'menublock2', 'walker' => new description_walker())); ?>
                <div class="menu-line"></div>
            </div>
        </div>
    </header>