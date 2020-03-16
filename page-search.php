<?php
/**
* 搜索页
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="container">
  <div class="search-icon"><svg t="1584333166704" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1189" width="80" height="80"><path d="M222.6944 222.7968A323.1488 323.1488 0 0 0 133.6832 512c19.2512-87.3728 64.512-172.7488 135.0144-243.3024C339.2512 198.1184 424.6272 152.8832 512 133.632c-101.632-19.1488-210.688 10.5216-289.3056 89.1648z" fill="#343a40" p-id="1190"></path><path d="M989.44 822.1184l-121.7024-121.7024a118.016 118.016 0 0 0-92.8-34.1248c114.4576-165.5552 97.92-394.3936-49.4848-541.824-165.9392-165.9904-435.0464-165.9904-601.0368 0-165.9392 165.9904-165.9392 435.1232 0 601.1136 147.4048 147.4304 376.064 163.84 541.7216 49.3824-2.56 33.28 8.8576 67.5328 34.1248 92.8l121.7024 121.728c46.08 45.9776 121.3696 45.9776 167.3472 0 46.208-45.9776 46.208-121.2928 0.128-167.3728zM676.096 676.096c-138.6752 138.6752-363.392 138.6752-502.016 0-138.6752-138.6752-138.6752-363.4432 0-502.1184 138.624-138.6752 363.3408-138.6752 502.016 0 138.6496 138.5728 138.6496 363.4432 0 502.1184z" fill="#343a40" p-id="1191"></path></svg></div>
  <form class="form" id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
  <div class="input-group mb-3">
    <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
    <input type="text" class="form-control" name="s" placeholder="<?php _e('输入关键字搜索'); ?>">
    <div class="input-group-append">
      <button type="submit" class="search-btn btn btn-block md-2"><?php _e('搜索'); ?></button>
    </div>
  </div>
  </form>
  <div class="p-4 mb-3 rounded">
   <?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=30')->to($tags); ?>
    <div class="tags-list">
     <?php while($tags->next()): ?>
     <span class="tagscloud badge badge-pill border"><a href="<?php $tags->permalink(); ?>" title='<?php $tags->name(); ?>'><?php $tags->name(); ?></a></span>
     <?php endwhile; ?>
    </div>
   </div>
</div>

<?php $this->need('footer.php'); ?>