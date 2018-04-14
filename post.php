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
						<p class="mck-article-type">[ <?php $this->category(',', false);?> ]</p>
					</div>
					
					<div class="mck-article-info-wrapper">
						<p class="mck-article-title"><?php $this->title() ?></p>
					</div>
					
					<ul class="mck-article-info-wrapper mck-article-tips">
						<li class="mck-article-time"><?php $this->date('F j, Y'); ?></li>
								<?php if($this->tags) { 
									$result = array();
									foreach ($this->tags as $tag) {
										echo "<li><a href='".$tag['permalink']."'>#".$tag['name']."</a></li>";
								}}?>
					</ul>
				</header>
				
				<main class="mck-article-content" id="mck-article-content">
					<?php $this->content(''); ?>		
				</main>
			</article>	

			<div class="mck-article-nav">
				<span><</span><?php $this->thePrev()?>
				<?php $this->theNext()?><span>></span>
			</div>	
			<?php $this->need('comments.php'); ?>
		</main>

<?php $this->need('footer.php'); ?>
