<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="<?= $Wcms->getSiteLanguage() ?>">
	<head>
		<!-- Encoding, browser compatibility, viewport -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- SEO -->
		<meta name="title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="description" content="<?= $Wcms->page('description') ?>">
		<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
		<meta property="og:url" content="<?= $this->url() ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
		<meta property="og:title" content="<?= $Wcms->page('title') ?>" />
		<meta name="twitter:site" content="<?= $this->url() ?>" />
		<meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />

		<!-- Website and page title -->
		<title>
			<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>
		</title>

		<!-- A CSS -->
		<?= $Wcms->css() ?>
		
		<!-- Theme CSS -->
		<style>*{box-sizing:border-box;}html{font-family:inherit;font-size:inherit;}body{font-family:Inter,Arial,sans-serif;}a{color:inherit;}</style>
		<link rel="preconnect" href="https://rsms.me/">
		<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
	</head>

	<body>
		<!-- Settings panel and alerts -->
		<?= $Wcms->settings() ?>
		<?= $Wcms->alerts() ?>

			<header>
				<nav class="nav-full">
					<details>
						<li>
							<a class="site-title" href="<?= $Wcms->url() ?>">
								<span><?= $Wcms->siteTitle() ?></span>
							</a>
						</li>
						<summary>Menu</summary>
						<ul>
							<?= $Wcms->menu() ?>
						</ul>
					</details>
				</nav>
			</header>
			
			<!-- Main -->
			<main>
				<?= $Wcms->page('content') ?>
			</main>
			
			<footer>
				<?= $Wcms->footer() ?>
			</footer>

		<!-- JS libraries -->
		<?= $Wcms->js() ?>

	</body>
</html>
