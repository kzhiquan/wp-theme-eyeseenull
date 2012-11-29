
<?php 
/*
 * header for theme eyeseenull
 */
?>

<html>
	<head>
		<title>知泉的博客</title>
		<link href=<?php bloginfo('stylesheet_url') ?> type="text/css" rel="stylesheet" ></link>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico" />
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="header">
			<div class="blogname">
				<span>知泉的博客</span>
			</div>
			<?php wp_nav_menu() ?>
		</div>