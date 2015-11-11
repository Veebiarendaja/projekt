<head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>
<body>
<div class="header-wrap">
    <div class="navigation-wrap">
        <div class="menu-block1">
            <?php wp_nav_menu(array('menu' => 'menublock1')); ?>
            <!--a href="" style="padding-right: 40px">
                <li>Gallery</li>
            </a>
            <a href="">
                <li>Elandilim</li>
            </a-->
        </div><div class="menu-block-logo">
            <div class="pea_logo">
                <img src="<?php echo get_template_directory_uri() ?>/img/logo.jpg" alt="">
            </div>
        </div>
        <div class="menu-block2">
            <?php wp_nav_menu(array('menu' => 'menublock2')); ?>
            <!--a href="" style="padding-right: 40px">
                <li>Life</li>
            </a>
            <a-- href="">
                <li>Home</li>
            </a-->
        </div>
    </div>
</div>
