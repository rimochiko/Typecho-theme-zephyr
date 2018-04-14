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
				<h1 class="mck-header-maintitle"><?php $this->options->title(); ?></h1>
			</div>
		</header>
		<main class="mck-main">
			<div class="mck-welcome">
				<div class="mck-welcome-img" style="background-image:url(<?php $this->options->themeUrl(); ?>/images/main.png)"></div>
			</div>
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
						<h1 class="mck-div-maintitle">最近在做些什么<span class="mck-div-title_ani">_<span></h1>
						<p class="mck-div-subtitle">Recent Posts</p>
					</div>

					<div class="mck-article-list">
						<?php while($this->next()): ?>
						<a href="<?php $this->permalink() ?>" class="mck-article-single">
							<?php if($this->fields->cover): ?>
							<div class="mck-article-cover-wrapper">
								<figure class="mck-article-cover" style="background-image:url(<?php echo $this->fields->cover; ?>)"></figure>
							</div>
							<?php endif; ?>

							<div class="mck-article-info-wrapper">
								<p class="mck-article-type">[ <?php $this->category(',', false);?> ]</p>
							</div>

							<div class="mck-article-info-wrapper">
								<p class="mck-article-title"><?php $this->title() ?>
								</p>
							</div>

							<div class="mck-article-info-wrapper mck-article-des">
								<?php $this->excerpt(100,'...'); ?>
							</div>

							<ul class="mck-article-info-wrapper mck-article-tips">
								<li class="mck-article-time"><?php $this->date('F j, Y'); ?></li>

									<?php 
										if($this->tags) { 
											$result = array();
											foreach ($this->tags as $tag) {
												echo "<li>".$tag['name']."</li>";
											}
										}
									?>
							</ul>
						</a>
						<?php endwhile; ?>
					</div>
					<a href="http://www.mochiko.cn/index.php/posts.html" class="mck-article-more">> 更多记忆</a>
				</div>			
			 </div><!-- left end-->
			
			 <!-- right begin-->
			 <div class="mck-index-right">
			 	<div class="mck-introduction">
			 		<p class="mck-introduction-eng">owner</p>
			 		<p class="mck-introduction-zh"><?php echo $this->author->screenName(); ?></p>
			 		<div class="mck-avatar-wrapper">
			 			<?php echo $this->author->gravatar(128,'','','mck-index-avatar');?>
			 			<a href="http://www.mochiko.cn/index.php/about.html" class="mck-avatar-link">ABOUT</a>
			 		</div>
			 		<p class="mck-introduction-des">未来程序猿 / J-POP乐迷 / 处女座</br>做一点设计 / 拍拍照 / 说点日语</p>
			 	</div>
			 	<div class="mck-friends mck-aside-wrapper">
					<div class="mck-div-title">
						<h1 class="mck-div-maintitle">友情传送<span class="mck-div-title_ani">_<span></h1>
						<p class="mck-div-subtitle">My Friends</p>
					</div>

					<ul class="mck-linklist">
						<li>
							<a href="http://blog.hijerry.cn/" target="_blank" class="mck-linklist-url">JerryHe</a>
						</li>
						<li>	
							<a href="http://blog.csdn.net/qq_32623363" target="_blank" class="mck-linklist-url">Yinyoupoet</a>
						</li>
						<li>
							<a href="https://anrans.github.io" target="_blank" class="mck-linklist-url">Anran</a>
						</li>
						<li>
							<a href="https://xuyonglin222.github.io" target="_blank" class="mck-linklist-url">徐永林</a>
						</li>
					</ul>
			 	</div>

			 	<div class="mck-friends mck-aside-wrapper">
					<div class="mck-div-title">
						<h1 class="mck-div-maintitle">糕在他途<span class="mck-div-title_ani">_<span></h1>
						<p class="mck-div-subtitle">Community</p>
					</div>

					<ul class="mck-linklist">
						<li>
							<a href="https://segmentfault.com/u/mochichan" target="_blank" class="mck-linklist-url">SegementFault</a>
						</li>
						<li>	
							<a href="http://music.163.com/#/user/home?id=82219531" target="_blank" class="mck-linklist-url">网易云音乐</a>
						</li>
						<li>
							<a href="https://weibo.com/rimochiko" target="_blank" class="mck-linklist-url">新浪微博</a>
</li>
<li>
							<a href="https://github.com/rimochiko" target="_blank" class="mck-linklist-url">GitHub</a>
						</li>
						</li>
<li>
							<a href="https://git.oschina.net/" target="_blank" class="mck-linklist-url">码云</a>
						</li>
</li>
<li>
							<a href="http://huaban.com/rimochiko/" target="_blank" class="mck-linklist-url">花瓣网</a>
						</li>

					</ul>
			 	</div>

				<div class="mck-mysites mck-aside-wrapper">
					<div class="mck-div-title">
						<h1 class="mck-div-maintitle">糕の后院<span class="mck-div-title_ani">_<span></h1>
						<p class="mck-div-subtitle">My Sites</p>
					</div>
					<a href="https://rimochiko.github.io/" target="_blank" class="mck-link-site mck-github-blog">
						<p class="mck-link-title">技术博客</p>
						<p class="mck-link-des">学习相关都在此</p>
					</a>

					<a href="http://www.mochiko.cn/zero" target="_blank" class="mck-link-site mck-nav-blog">
						<p class="mck-link-title">ZERO</p>
						<p class="mck-link-des">自制Wordpress主题</p>
					</a>
				</div>
			 </div>

			</div>
		</main>
<?php $this->need('footer.php'); ?>
