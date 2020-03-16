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
    <li id="<?php $comments->theId(); ?>" class="list-unstyled depth-<?php echo $comments->levels+1; ?> comment-body<?php
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
        <div class="comt-avatar">
        <span itemprop="image"><?php $number=$comments->mail; echo '<img src="https://q2.qlogo.cn/headimg_dl? bs='.$number.'&dst_uin='.$number.'&dst_uin='.$number.'&;dst_uin='.$number.'&spec=100&url_enc=0&referer=bu_interface&term_type=PC" width="48px" height="48px" style="border-radius: 50%;float: left;margin-top: 0px;margin-right: 10px;margin-bottom:-2px">'; ?></span>
          <div class="comt-author"><?php echo $author; ?></div>
        </div>
        <div class="comt-main" id="div-<?php $comments->theId(); ?>">
            <?php $comments->content(); ?>
        </div>
        <div class="comt-meta">
            <?php $comments->date('Y-m-d'); ?>
            <div class="comt-reply">
              <?php $comments->reply('回复'); ?>
            </div>
        </div>
    <?php if ($comments->children) { ?>
        <ul class="children"><?php $comments->threadedComments($options); ?></ul>
        <?php } ?>
    </li><?php } ?>
<?php $this->comments()->to($comments); ?>

<div id="comments" class="main-comments"> 
    <?php $this->comments()->to($comments); ?>
        <div class="comments-tips"><a href="#response"><p>快来评论区，留下你的评论吧</p></a></div>
        <?php if ($comments->have()): ?>

        <?php $comments->listComments(); ?>

        <div class="lists-navigator">
            <?php $comments->pageNav('←','→','2','...'); ?>
        </div>

        <?php endif; ?>

        <?php if($this->allow('comment')): ?>
        <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>

    	<div id="response"><?php _e('发表评论：'); ?></div>
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
          <button type="submit" class="comments-btn btn"><?php _e('发射'); ?></button>
        </p>
    	</form>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
        
</div>