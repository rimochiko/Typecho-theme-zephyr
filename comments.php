<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

  <div class="mck-comment" id="<?php $this->respondId(); ?>">
	<?php if($this->allow('comment')): ?>
	<div class="mck-div-title">
		<h1 class="mck-div-maintitle">围观区<span class="mck-div-title_ani">_<span></h1>
		<p class="mck-div-subtitle">New comments</p>
	</div>
	
	<form  method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
		<?php if($this->user->hasLogin()): ?>
		<div class="mck-comment-input">
			<p><?php _e('你好，'); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>！  <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('[ 退出 ]'); ?></a></p>
		</div>
		<?php else: ?>
		<div class="mck-comment-input">
			<input type="text" name="author" placeholder="昵称" value="<?php $this->remember('author'); ?>">
		</div>
	
		<div class="mck-comment-input">
			<input type="text" name="url" placeholder="网站" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?>>
		</div>
	
		<div class="mck-comment-input">
			<input type="text" name="mail" placeholder="电子邮箱"  value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?>/>
		</div>
		<?php endif; ?>		
		<div class="mck-comment-input">
			<textarea name="text" id="" rows="4" placeholder="说点啥？"><?php $this->remember('text'); ?></textarea>
		</div>
	
		<div class="mck-comment-input">
			<input type="submit" name="" value="提交评论"/>
		</div>
	</form>

		<?php 
			  
		function threadedComments($comments) {
			if(!$comments) return;
			$commentClass = '';
			
			if ($comments->authorId) {
			    
			    if ($comments->authorId == $comments->ownerId) {
			        $commentClass .= ' comment-by-author'; 
			    } else {
			        $commentClass .= ' comment-by-user'; 
			    }
			} 
			
			$commentLevelClass = $comments->_levels > 0 ? ' comment-child' : ' comment-parent';  
	    ?>

		<li id="<?php $comments->theId(); ?>" class="comment-body<?php 
		if ($comments->levels > 0) {
		    echo ' comment-child';
		} else {
		    echo ' comment-parent';
		}
		$comments->alt(' comment-odd',' comment-even');
		echo ' '.$commentClass;
		?>">
         
        <div class="mck-comment-wrapper">
		    <div class="mck-comment-header">
				<a href="#" class="mck-comment-avatar">
					<?php echo $comments->gravatar(36);?>
				</a>
					
				<div class="mck-comment-info">
					<a href="#" class="mck-comment-author"><?php $comments->author(); ?></a>
					<p class="mck-comment-time"><?php $comments->date('Y-m-d H:i'); ?></p>	
				</div>
			
				<div class="mck-comment-reply">
					<?php $comments->reply('回复'); ?>
				</div>
			</div>
				
			<div class="mck-comment-content">
				<p><?php $comments->content(); ?></p>
			</div>
		</div>
			
		<?php if ($comments->children) { ?> 
	    <ul class="comment-children">
			<?php $comments->threadedComments(); ?> 
		</ul>
		<?php } ?>
		</li>
<?php } ?>

	<ul class="mck-comment-list">
		<?php $this->comments()->to($comments); ?>
		<?php while($comments->next()): ?>
           <?php threadedComments($comments); ?>
		<?php endwhile; ?>
	</ul>	
	<?php else: ?>
	    <p><?php _e('评论已关闭'); ?></p>
	<?php endif; ?>		
</div>	
