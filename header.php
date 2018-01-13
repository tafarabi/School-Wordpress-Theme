<!DOCTYPE HTML>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo()?>">
	<title><?php bloginfo('name')?>-<?php bloginfo('description');?></title>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/stylee.css" media="all" />
</head>
<?php wp_head();?>
<body <?php body_class();?>>
<div class="body">
<div class="mid">
	<div class="top-header">

	<div class="menu">

	<div class="menu-left">
	
	<?php 
        $args=array(
        
        'theme_location' => 'left'
            
        );
        
        
        
        ?>
        <?php wp_nav_menu( $args );?>
		</div>
		
		<div class="logo">
		<img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="" />
		</div>
		
		<div class="menu-right">
		<?php 
        $args=array(
        
        'theme_location' => 'right'
            
        );
        ?>
        <?php wp_nav_menu( $args );?>
	
	</div>
	</div>
	</div>