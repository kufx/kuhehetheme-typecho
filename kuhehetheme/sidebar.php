<div class="navbar top">
<nav class="post">
<a <?php if ($this->is('index')): ?>class="active";<?php endif; ?> href="/" title="近期发布">近期发布</a>

<?php \Widget\Contents\Page\Rows::alloc()->to($pages); ?>
  <?php while ($pages->next()): ?>
<?php if ($pages->fields->headerDisplay == 1): ?>
  <a class="<?php echo $this->is('page', $pages->slug)?'active':''; ?>" href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php if ($pages->fields->zdhxswz()): ?><?php $pages->fields->zdhxswz() ?><?php endif; ?>


</a>
<?php endif; ?>
  <?php endwhile; ?>

</nav>
</div>