<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
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
				<p class="mck-header-subtitle"><?php $this->options->description() ?></p>
				<a class="mck-header-maintitle" href="index.html"><?php $this->options->title(); ?></a>
			</div>
			<div class="mck-header-btn">
				
			</div>
		</header>
		<main class="mck-main">
			<nav class="mck-nav" id="mck-nav">
				<ul>
					<li><a href="<?php $this->options->siteUrl(); ?>">HOME</a></li>
					 <?php $this->widget('Widget_Contents_Page_List')
					->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
				</ul>
			</nav>
			<div class="mck-content">
			 <!-- left begin -->
			 <div class="mck-index-left">
				<div class="mck-article">
					<div class="mck-div-title">
						<h1 class="mck-div-maintitle">文章<span class="mck-div-title_ani">_<span></h1>
						<p class="mck-div-subtitle">Posts</p>
					</div>

					<div class="mck-article-list">
						<?php while($this->next()): ?>
						<a href="<?php $this->permalink() ?>" class="mck-article-single">
							<?php if($this->fields->cover){?>
							<div class="mck-article-cover-wrapper">
								<figure class="mck-article-cover" style="background-image:url(<?php echo $this->fields->cover; ?>)"></figure>
							</div>
							<?php } ?>
							<div class="mck-article-info-wrapper">
								<p class="mck-article-type">[ <?php $this->category(',', false);?> ]</p>
							</div>
							<div class="mck-article-info-wrapper">
								<p class="mck-article-title"><?php $this->title() ?></p>
							</div>
							<div class="mck-article-info-wrapper mck-article-des">
								<?php $this->excerpt(100,'...'); ?>
							</div>
							<ul class="mck-article-info-wrapper mck-article-tips">
								<li class="mck-article-time"><?php $this->date('F j, Y'); ?></li>
								<?php if($this->tags) { 
									$result = array();
									foreach ($this->tags as $tag) {
										echo "<li>".$tag['name']."</li>";
								}}?>
							</ul>
						</a>
						<?php endwhile; ?>
					</div>
					<?php $this->pageNav('< 上一页', '下一页 >', 3, '...', array('wrapTag' => 'ol', 'wrapClass' => 'mck-article-pagenav', 'itemTag' => 'li', 'textTag' => 'span', 'currentClass' => 'mck-active')); ?>
				</div>			
			 </div><!-- left end-->
			
			 <!-- right begin-->
			 <div class="mck-index-right">


			 	<div class="mck-type mck-aside-wrapper">
					<div class="mck-div-title">
						<h1 class="mck-div-maintitle">分类<span class="mck-div-title_ani">_<span></h1>
						<p class="mck-div-subtitle">My types</p>
					</div>

					<?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=mck-linklist')?>	
			 	</div>

			 	<div class="mck-type mck-aside-wrapper">
					<div class="mck-div-title">
						<h1 class="mck-div-maintitle">归档<span class="mck-div-title_ani">_<span></h1>
						<p class="mck-div-subtitle">My times</p>
					</div>

					<ul class="mck-linklist">
						<?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
						->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
					</ul>
			 	</div>

			 </div>

			</div>
		</main>
<?php $this->need('footer.php'); ?>