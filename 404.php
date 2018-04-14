<?php $this->need('header.php'); ?>
<body class="animated fadeIn">
	<div class="mck-loading-wrapper" id="mck-loading-wrapper">
		<div class="mck-loading">
			<p>LOADING...</p>
		</div>
	</div>
	<div class="mck-wrapper" data-mcs-theme="minimal-dark" id="mck-wrapper">
		<header class="mck-header">
			<div class="mck-header-title-wrapper">
				<p class="mck-header-subtitle">404 Not Found</p>
				<h1 class="mck-header-maintitle">小可爱，你迷路了哦！</h1>
			</div>
		</header>
		<main class="mck-main">
			<section class="mck-welcome">
				<div class="mck-welcome-img" style="background-image:url(<?php $this->options->themeUrl(); ?>/images/main.png)"></div>
			</section>
			<nav class="mck-nav" id="mck-nav">
				<ul>
					<li><a href="<?php $this->options->siteUrl(); ?>">HOME</a></li>
					 <?php $this->widget('Widget_Contents_Page_List')
					->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
				</ul>
			</nav>
		</main>
<?php $this->need('footer.php'); ?>