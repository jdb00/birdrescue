<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>New Zealand Bird Rescue</title>
  <?php wp_head()?>

</head>
<body>
    <div class="wrapper">
        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white">
            
            <div class="logo-container">
                <a class="navbar-brand" href="#">
                    <img class="logo" src="<?php echo get_template_directory_uri()?>/img/Untitled-1.png" alt="">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php wp_nav_menu( array( 
                    'theme_location' => 'main-menu',
                    'container' => 'ul',
                    'menu_class' => 'navbar-nav'
                ) ); ?>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link pr-4" href="">About Us</a></li>
                    <li class="nav-item"><a class="nav-link pr-4" href="">Donate</a></li>
                    <li class="nav-item"><a class="nav-link pr-4" href="">Newsletters</a></li>
                    <li class="nav-item"><a class="nav-link pr-4" href="">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link pr-4" href="">Bird Rescue Centres</a></li>
                </ul>
            </div>
        </nav>