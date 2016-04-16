<head>
    <meta charset="utf-8">
    <title>Elandilim | <?php the_title(); ?></title>
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
    <header class="header-wrap global-container">
        <div class="navigation-wrap">
            <div class="menu-block1"> <!-- Menu block 1 -->
                <?php wp_nav_menu(array('menu' => 'menublock1', 'walker' => new description_walker())); ?>
                <div class="menu-line"></div>
            </div><div class="menu-block-logo"> <!-- Logo -->
                <object type="image/svg+xml" data="<?php bloginfo('template_directory'); ?>/img/logo.svg">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="SVG backup image">
                </object>
            </div><div class="menu-block2"> <!-- Menu block 2 -->
                <?php wp_nav_menu(array('menu' => 'menublock2', 'walker' => new description_walker())); ?>
                <div class="menu-line"></div>
            </div>
            <div class="mobile-nav"> <!-- Mobile Menu -->
                <?php wp_nav_menu(array('menu' => 'mobile')); ?>
            </div>
        </div>
    </header>