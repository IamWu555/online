<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="container" id="main" role="main">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
      <p class="blog-post-meta"><?php $this->date(); ?> by <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> in <?php $this->category(','); ?></p>
      <div class="content">
          <?php $this->content(); ?>
      </div>
      <small><p class="tags"><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p></small>
          <?php $this->need('comments.php'); ?>
    </div>
    <div class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">Recent Post</h4>
        <p class="mb-0">
          <?php $this->widget('Widget_Contents_Post_Recent','pageSize=5')->to($recent);
          if($recent->have()):
          while($recent->next()):?>
          <li class="list-unstyled mb-0"><a href="<?php $recent->permalink();?>"><?php $recent->title();?></a></li>
          <?php endwhile; endif;?>
        </p>
      </div>
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">Tag Cloud</h4>
        <?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=30')->to($tags); ?>
        <div class="tags-list">
          <?php while($tags->next()): ?>
          <span class="badge badge-pill border border-primary"><a href="<?php $tags->permalink(); ?>" title='<?php $tags->name(); ?>'><?php $tags->name(); ?></a></span>
          <?php endwhile; ?>
        </div>
      </div>
    </div><!-- end .blog-sidebar-->
  </div>
</div><!-- end #main-->

<?php $this->need('footer.php'); ?>
