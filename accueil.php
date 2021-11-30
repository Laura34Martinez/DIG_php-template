<?php
if (isset ($_GET['page'])) {
	include_once('pages/page' . $_GET['page'] . '.php');
} else {
	$title = "Accueil";
	$content = "Bienvenue sur mon site";
}
?>

<html>
	<?php
		include_once('template/head.php');
	?>

	<body>
		
		<?php
			include_once('template/header.php');
		?>

		<main>
			<h1>
				<?php echo $title; ?>
			</h1>
			<div>
				<?php echo $content ;?>
			</div>
		</main>

	</body>
</html>