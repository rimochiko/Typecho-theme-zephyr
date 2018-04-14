<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<body class="mck-subpage animated fadeIn">
	<div class="mck-loading-wrapper" id="mck-loading-wrapper">
		<div class="mck-loading">
			<p>LOADING...</p>
		</div>
	</div>
	<div class="mck-wrapper" data-mcs-theme="minimal-dark" id="mck-wrapper">
		<header class="mck-sub-header">
			<div class="mck-header-title-wrapper">
				<a class="mck-header-maintitle" href="<?php $this->options->siteUrl() ?>"><?php $this->options->title(); ?></a>
			</div>
		</header>
		<main class="mck-main">
			<article class="mck-article-post">
				<header href="#" class="mck-article-single">
							
					<div class="mck-article-info-wrapper">
						<p class="mck-article-type">[ Happy Everyday ]</p>
					</div>
					
					<div class="mck-article-info-wrapper">
						<p class="mck-article-title"><?php $this->title() ?></p>
					</div>
					
				</header>
				
				<main class="mck-article-content" id="mck-article-content">
					<?php $this->content(''); ?>		
				</main>
			</article>	
			<?php $this->need('comments.php'); ?>
		</main>
<?php $this->need('footer.php'); ?>
