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
<link rel="icon" href="data:,">
<!-- Website and page title -->
<title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>
<!-- A CSS -->
<?= $Wcms->css() ?>
<!-- Theme CSS -->
<style>
*{box-sizing:border-box}
html,pre,input,button,textarea{font-family:inherit;font-size:inherit}
body{background:#f2f4f6;color:#222;font-family:Inter,Arial,sans-serif;line-height:1.5;margin:0}
a{color:inherit}
a:hover{text-decoration-thickness:2px}
pre{white-space:pre-wrap}
img{max-width:100%}
hr{border:none;background:#222;height:1px;margin:2rem 0}
summary{cursor:pointer;font-weight:bold;}
nav summary{border:1px solid;border-radius:2rem;display:inline-block;padding:.5rem 1rem}
nav details[open] summary:after{content:'\2715';padding-left:2rem}
nav details[open]{min-height:100vh}
nav ul{list-style-type:none;padding-left:0}
nav ul ul{font-size:.875rem;padding-left:1rem}
nav a{padding:.25rem;display:inline-block;text-decoration:none}
nav a:hover{font-weight:bold}
header,main,footer{padding:2rem 5vw}
header{background:linear-gradient(90deg,white,transparent)}
.site-title{font-size:1.5rem;font-weight:bold;margin-bottom:1rem;padding:0}
@media(max-width:576px){.post.card{width:calc(100% - 2rem)}}
</style>
<link rel="preconnect" href="https://rsms.me/">
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>

	<body>
		<!-- Settings panel and alerts -->
		<?= $Wcms->settings() ?>
		<?= $Wcms->alerts() ?>

			<header>
				<nav class="nav">
					<a class="site-title" href="<?= $Wcms->url() ?>">
						<span><?= $Wcms->siteTitle() ?></span>
					</a>
					
					<details>
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
