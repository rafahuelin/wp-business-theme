
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php bloginfo('name'); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="header clearfix">
    <div class="container">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'depth' => 2,
                    'container' => false,
                    'menu_class' => 'nav nav-pills pull-right',
                    'fallback' => 'wp_bootstrap_navwalker::fallback',
                    'walker' => new wp_bootstrap_navwalker()
                ));
            ?>
        <?php if(has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
        <?php else : ?>
                <h1><?php bloginfo('name'); ?></h1>
        <?php endif; ?>
    </div>
</div>

<div class="jumbotron">
    <div class="container">
        <h1>Jumbotron heading</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
    </div>
</div>

<section class="row marketing">
    <div class="container">
        <div class="col-lg-4">
            <div class="block">
                <i class="fa fa-bar-chart fa-3x"></i>
                <h3>Subheading</h3>
                <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="block">
                <i class="fa fa-code fa-3x"></i>
                <h3>Subheading</h3>
                <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="block">
                <i class="fa fa-desktop fa-3x"></i>
                <h3>Subheading</h3>
                <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
            </div>
        </div>
    </div>
</section>

<section class="row content-region-1 pt50 pb40">
    <div class="container">
        <div class="col-md-12">
            <h1>Clean Bootstrap Wordpress Theme</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam finibus ullamcorper diam, vel laoreet sapien placerat at. Nam lacinia tellus nunc.</p>
        </div>
    </div>
</section>

<section class="row content-region-2 pt40 pb40">
    <div class="container">
        <div class="col-md-5">
            <img src="img/pic1.jpg">
        </div>
        <div class="col-md-7">
            <h3>Theme Features</h3>
            <ul class="list-group">
                <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Clean Code</li>
                <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Custom Showcase Area</li>
                <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Bootstrap 3 Framework</li>
                <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Multiple Color Choices</li>
            </ul>
        </div>
    </div>
</section>

<footer class="footer content-region-3 pt30 pb40">
    <div class="container">
        <div class="col-lg-4">
            <h4>Heading</h4>
            <p>Curabitur condimentum malesuada sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas condimentum, risus ac euismod efficitur.</p>
        </div>

        <div class="col-lg-4">
            <h4>Heading</h4>
            <ul>
                <li><a href="#">Condimentum aliquam</a></li>
                <li><a href="#">Hendrerit magna</a></li>
                <li><a href="#">Suspendisse potenti</a></li>
                <li><a href="#">Praesent fringilla</a></li>
                <li><a href="#">Donec efficitur</a></li>
            </ul>
        </div>

        <div class="col-lg-4">
            <h4>Contact Us</h4>
            <form>
                <div>
                    <input type="text" placeholder="Name">
                </div>
                <div>
                    <input type="email" placeholder="Email">
                </div>
                <div>
                    <textarea placeholder="Message"></textarea>
                </div>
                <input class="btn btn-primary" type="submit" value="Send">
            </form>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
