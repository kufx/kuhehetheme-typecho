<?php
/**
 * 说说模板
 *
 * @package custom
 *
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('header.php'); ?>

<?php if ($this->fields->header1 == 1): ?>

<?php $this->need('head.php'); ?>

<?php endif; ?>

<?php if ($this->fields->header2 == 1): ?>

<?php $this->need('sidebar.php'); ?>

<?php endif; ?>

<div class="article banner top" style="background:var(--background);">
<?php if ($this->fields->banner === "show") : ?>
<img class="bg lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQIHWNgAAIAAAUAAY27m/MAAAAASUVORK5CYII=" data-src="<?php $this->fields->image(); ?>">
<?php endif; ?>

<div class="content">


<?php if ($this->fields->header3 == 1): ?>
<div class="top bread-nav footnote">

<div class="left">

<div class="flex-row" id="breadcrumb">

<a class="cap breadcrumb" href="/">主页</a>

<span class="sep"></span>

<a class="cap breadcrumb" href="<?php $this->permalink() ?>">
<?php $this->title() ?>
</a>

</div>

<div class="flex-row" id="post-meta">

<a class="author" href="<?php $this->author->permalink(); ?>">

<?php $this->author() ?>
</a>

<span class="sep"></span>

<span class="text created">
<time datetime="2024-02-27T14:16:18.000Z">
<?php $this->date('Y-m-d'); ?>
</time>
</span>

<span class="sep updated"></span>

<span class="text updated">
更新于：<time datetime="">
<?php echo date('Y-m-d H:i:s' , $this->modified); ?>
</time>
</span>
</div>


<div class="flex-row" id="breadcrumb">
<span class="text"><?php Postviews($this); ?></span>
</div>

</div></div>


<?php endif; ?>

<div class="bottom only-title">      
      <div class="text-area">
        <h1 class="text title"><span><?php $this->title() ?></span></h1>

<div class="text subtitle">
<?php if ($this->fields->subtitle()): ?>
<?php $this->fields->subtitle(); ?>
<?php endif; ?>
</div>  
      </div>
    </div>
  </div>
  </div>

<article class="md-text content" id="hh">
<?php echo getContentTest($this->content) ?>





<?php 
$idd = $this->fields->saysay; 
$iddd = $this->cid;  // 直接获取当前文章的 mid
if ($idd && $iddd) {
    $params = "pageSize=".$idd."&parentId=".$iddd;
    $this->widget('Widget_Comments_Recent', $params)->to($comments);
}
?>



<div class="tag-plugin timeline" id="comment-container">
<?php if ($comments->have()): ?>
<?php while($comments->next()): ?>


<div class="timenode" index="0">
<div class="header">
<div class="user-info"> 
 <img src="<?php $this->options->logoUrl(); ?>" onerror="javascript:this.src='https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/avatar/round/3442075.svg';""></img>
 
 
<a href="<?php $this->author->permalink(); ?>" target="_blank" rel="external nofollow"><span style="font-weight:bold"><?php $comments->author(false); ?></span></a>
&nbsp<span><?php $comments->date('Y-m-d H:i:s'); ?></span>
</div>
</div> 

<div class="body fs14"> 
<?php $comments->content(); ?>  
</div>


</div>

 
<?php endwhile; ?>


<?php endif; ?>
</div>











 





</article>


<?php if($this->user->hasLogin()):?>
<?php $this->need('comments.php'); ?>
<?php endif;?>

<?php $this->need('footer.php'); ?>