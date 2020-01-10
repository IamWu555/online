<?php
/**
 * IamWu555随心打造
 *
 * @package Online
 * @author IamWu555
 * @version 1.0
 * @link http://blog.wubuster.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

	<?php while($this->next()): ?>
        <div class="jumbotron p-4 p-md-5 jumbotron-fluid rounded bg-white border shadow-sm">
          <div class="col-md-6 px-0">
              <strong class="lead mb-0"><?php $this->category(','); ?></strong>
              <h3 class="mb-0"><?php $this->sticky(); $this->title() ?></h3>
              <div class="mb-1 text-muted"><?php $this->date(); ?></div>
              <p class="lead my-3"><?php if ($this->options->enableOneRow == 0): ?><?php $this->excerpt(30);?><?php endif; ?></p>
              <a href="<?php $this->permalink() ?>" class="stretched-link">Continue reading</a>
          </div>
        </div>
	<?php endwhile; ?>
<div class="pages">
  <span class="badge badge-pill border border-primary"><?php $this->pageLink('上一页'); ?></span>
  <span class="badge badge-pill border border-primary"><?php $this->pageLink('下一页','next'); ?></span>
</div>

<?php $this->need('footer.php'); ?>
