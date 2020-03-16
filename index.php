<?php
/**
 * IamWu555 online
 *
 * @package online
 * @author IamWu555
 * @version 2.1.0
 * @link http://blog.wubuster.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
    $this->need('header.php');
?>

<div class="main-content">
    <?php while($this->next()): ?>
        <div class="post-item col-12 px-0 border shadow-sm">
            <div class="item-cover">
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
            <div class="item-info">
                <p class="mb-0 item-title"><?php $this->sticky(); $this->title() ?></p>
                <div class="blank"></div>
                <div class="item-info-content">
                    <p class="md-0 author">
                        <?php if ($this->options->AuthorAvatar): ?>
                            <img src="<?php $this->options->AuthorAvatar(); ?>">
                        <?php else: ?>
                            <?php $this->author->gravatar(28); ?><?php $this->author(); ?>    
			            <?php endif; ?>
                    </p>
                    <p class="md-0 date"><?php $this->date(); ?></p>
                    <p class="md-0 ml-auto"><?php $this->category(','); ?></p>
                </div>
                <a href="<?php $this->permalink() ?>" class="stretched-link"></a>
            </div>
        </div>
    <?php endwhile; ?>
    
    <div class="lists-navigator">
        <?php $this->pageNav('←','→','2','...'); ?>
    </div>
</div>
<?php $this->need('footer.php'); ?>