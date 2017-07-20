<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>All That Glitters</title>
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/prototype.css">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper">
		<?php get_template_part( 'partials/navigation', 'none' ); ?>