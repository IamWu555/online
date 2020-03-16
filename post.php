<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="article-wrappaper">
    <div class="greyback"></div>
    <div class="article-content">
        <div class="article-heaer">
            <div class="article-banner">
                <?php if (array_key_exists('imgurl',unserialize($this->___fields()))): ?>
                    <img src="<?php  $this->fields->imgurl(); ?>";>
                <?php else: ?>
                    <?php if ($this->options->ArticleBanner): ?>
                        <img src="<?php $this->options->ArticleBanner(); ?>">
                    <?php else: ?>
                        <img src="https://open.saintic.com/api/bingPic/" alt="">
			        <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="main-article">
            <div class="article-info">
                <h2 class="article-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
                <div class="article-info-content">
                    <p class="author">
                        <?php if ($this->options->AuthorAvatar): ?>
                            <img src="<?php $this->options->AuthorAvatar(); ?>">
                        <?php else: ?>
                            <?php $this->author->gravatar(); ?><?php $this->author(); ?>    
			            <?php endif; ?>
                    <?php $this->author(); ?>
                    </p>
                    <p class="date"><?php $this->date(); ?></p>
                    <p class="ml-auto"><?php $this->category(','); ?></p>
                </div>
            </div>
            <div>
                <?php $this->content(); ?>
            </div>
            <div class="article-blank"></div>
            <div class="lines"></div>
            <div class="article-tags">
                <?php _e('标签: '); ?><?php $this->tags(' ', true, ''); ?>
			</div>
        </div>
    </div>
    <div class="article-blank"></div>
    <?php $this->need('comments.php'); ?>
    <div class="article-footer">
        <?php $this->need('footer.php'); ?>
    </div>
</div>


