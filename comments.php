<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
function threadedComments($comments, $options) {
    $commentClass = 'commentlist';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }
    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
    if ($comments->url) {
        $author = '<a href="' . $comments->url . '" target="_blank"' . ' rel="external nofollow">' . $comments->author . '</a>';
    } else {
        $author = $comments->author;
    }
?>

    <li id="<?php $comments->theId(); ?>" class="alert alert-light list-unstyled comment byuser comment-author-admin bypostauthor depth-<?php echo $comments->levels+1; ?> comment-body<?php
    if ($comments->levels > 0) {
        echo ' comment-child';
        $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
    } else {
        echo ' comment-parent';
    }
    $comments->alt(' odd', ' even');
    ?>">
<?php
    $host = '//cn.gravatar.com';
    $url = '/avatar/';
    $size = '50';
    $rating = Helper::options()->commentsAvatarRating;
    $hash = md5(strtolower($comments->mail));
    $avatar = $host . $url . $hash . '?s=' . $size . '&r=' . $rating . '&d=mm';
?>
        <div class="comt-avatar"><img alt="" data-src="<?php echo $avatar; ?>" srcset="<?php echo $avatar; ?> 2x" class="avatar photo" height="50" width="50" src="<?php $aoptions = Typecho_Widget::widget('Widget_Options'); $aoptions ->themeUrl("img/avatar-default.png"); ?>"></div>
        <div class="comt-meta">
            <span class="comt-author"><?php echo $author; ?></span> <?php $comments->date('Y-m-d'); ?>&nbsp&nbsp&nbsp&nbsp<?php $comments->reply('回复'); ?></span>
        </div>
        <div class="comt-main" id="div-<?php $comments->theId(); ?>">
            <?php $comments->content(); ?>
        </div>
    <?php if ($comments->children) { ?><ul class="children"><?php $comments->threadedComments($options); ?></ul><?php } ?>
    </li><?php } ?>
<?php $this->comments()->to($comments); ?>


<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	<h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>

    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>

    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>

    	<h3 id="response"><?php _e('添加新评论'); ?></h3>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
    		<p>
          <label for="author" class="required"><?php _e('称呼'); ?></label>
    			<input type="text" name="author" id="author" class="form-control" value="<?php $this->remember('author'); ?>" required />
    		</p>
    		<p>
          <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>><?php _e('Email'); ?></label>
    			<input type="email" name="mail" id="mail" class="form-control" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
          <small id="emailHelp" class="form-text text-muted">将使用邮箱调用你的Gravatar头像.</small>
    		</p>
    		<p>
          <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e('网站'); ?></label>
    			<input type="url" name="url" id="url" class="form-control" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
    		</p>
            <?php endif; ?>
    		<p>
          <label for="textarea" class="required"><?php _e('内容'); ?></label>
          <textarea rows="8" cols="50" name="text" id="textarea" class="form-control" required ><?php $this->remember('text'); ?></textarea>
        </p>
    		<p>
          <button type="submit" class="btn btn-primary"><?php _e('发射'); ?></button>
        </p>
    	</form>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
