<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="article-wrappaper">
    <div class="page-blank"></div>
    <div class="main-page">
        <h2 class="article-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
        <?php $this->content(); ?>
    </div>
    <div class="article-blank"></div>
    <div class="lines"></div>
    <?php $this->need('comments.php'); ?>
    <div class="article-footer">
        <?php $this->need('footer.php'); ?>
    </div>
</div>