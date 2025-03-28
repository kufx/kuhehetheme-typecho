<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<header class="header mobile-only"><div class="logo-wrap"><a class="avatar" href="/about/"><div class="bg" style="opacity:0;background-image:url(https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/avatar/round/rainbow64@3x.webp);"></div><img no-lazy="" class="avatar lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQIHWNgAAIAAAUAAY27m/MAAAAASUVORK5CYII=" data-src="https://bu.dusays.com/2024/06/19/6672f2c43c9b0.gif"></a><a class="title" href="/"><div class="main" ff="title"><?php $this->options->name(); ?></div><div class="sub normal cap"><?php $this->options->logotxt1(); ?></div><div class="sub hover cap" style="opacity:0"><?php $this->options->logotxt2(); ?></div></a></div></header>


<div class="navbar top">
<nav class="post">
<a <?php if ($this->is('index')): ?>class="active";<?php endif; ?> href="/" title="近期发布">近期发布</a>

<?php \Widget\Contents\Page\Rows::alloc()->to($pages); ?>
  <?php while ($pages->next()): ?>
<?php if ($pages->fields->headerDisplay == 1): ?>
  <a<?php if ($this->is('page', $pages->slug)): ?> class="active"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php if ($pages->fields->zdhxswz()): ?><?php $pages->fields->zdhxswz() ?><?php endif; ?></a>
<?php endif; ?>
  <?php endwhile; ?>
</nav></div>

<?php $this->content(); ?>

<article class="md-text error-page">
  <h1><img class="lazy" id="error" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQIHWNgAAIAAAUAAY27m/MAAAAASUVORK5CYII=" data-src="https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/404/1c830bfcd517d.svg" alt="404"></h1>
  <p class="what">
    <strong>
      很抱歉，您访问的页面不存在
    </strong>

<script src="http://cdn.bootcss.com/purl/2.3.1/purl.min.js"></script>

<script>
{
    window.location.href="/";
}
</script>  </p>
  <p class="why">
    可能是输入地址有误或该地址已被删除
  </p>
  <a class="button" id="back" href="/">返回主页</a>



<div class="tag-plugin timeline ds-fcircle">
<?php \Widget\Contents\Post\Recent::alloc('pageSize=10000')->to($news); ?>
<?php while($news->next()): ?>

 <div class="timenode" index="0"> 
 <div class="header"> 
 <div class="user-info"> 
 <img src="<?php $this->options->logoUrl(); ?>" onerror="javascript:this.src='https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/avatar/round/3442075.svg';"></img>
 <span><a class="user-info" href="/" target="_blank" rel="external nofollow noopener noreferrer"><?php $news->author() ?></a></span>
 </div>
 <span><?php $news->date('Y-m-d'); ?>&nbsp
·&nbsp<?php $news->category(',', false); ?>&nbsp·<?php Postviews($news); ?><?php if($this->user->hasLogin()):?>&nbsp·&nbsp
 <a target="_blank" href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $news->cid;?>" style="font-weight:bold"><?php _e('编辑'); ?></a>
<?php endif;?>
 </span>
 </div>
 <div class="body fs14">
 <span style="font-weight:bold;color:#15B69C;text-decoration:underline;">
 <?php $news->title() ?>
 </span>
 <a style="font-weight:bold" href="<?php $news->permalink() ?>" target="_blank">阅读全文</a>


 </div>

 </div>
 <?php endwhile; ?>

</div>



</article>

<?php $this->need('footer.php'); ?>
