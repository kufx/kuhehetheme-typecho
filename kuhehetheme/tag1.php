<?php
/**
 * 标签模板
 *
 * @package custom
 *
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>


<?php $this->need('head.php'); ?>

<?php $this->need('sidebar.php'); ?>

<?php $this->content(); ?>

<div class='post-list'>

<?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=mid&ignoreZeroCount=1&desc=0&limit=1000')->to($tags); ?>

<article class='' id='tags'>


<?php if($tags->have()): ?>
<?php while ($tags->next()): ?>

<a class='tag' href="<?php $tags->permalink(); ?>" rel="tag" class="size-<?php $tags->split(5, 10, 20, 30); ?>" title="<?php $tags->count(); ?> 个话题">
<span class='name'><?php $tags->name(); ?> <?php $tags->count(); ?>
</span>
</a>

<?php endwhile; ?>
<?php else: ?>
    <li><?php _e('没有任何标签'); ?></li>
<?php endif; ?>
      



</article>
  </div>


<?php $this->need('footer.php'); ?>
