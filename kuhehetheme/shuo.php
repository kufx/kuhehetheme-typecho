<?php
/**
 * 文章合集模板
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






<div class="tag-plugin timeline ds-fcircle" id="comment-container">
<?php 
    $pageCustomValue = $this->fields->say1;
    $recentPosts = \Widget\Contents\Post\Recent::alloc('pageSize=10000');
    $recentPosts->to($news); 

    while ($news->next()) {
        $postCustomValue = $news->fields->say2; 
        if ($postCustomValue && $pageCustomValue === $postCustomValue) { 
?>
 <div class="timenode" index="0"> 
 <div class="header"> 
 <div class="user-info"> 
 <img src="<?php $this->options->logoUrl();?>" onerror="javascript:this.src='https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/avatar/round/3442075.svg';"></img>
 <span><a class="user-info" href="<?php $this->author->permalink(); ?>" target="_blank" rel="external nofollow noopener noreferrer"><?php $news->author()?></a></span>
 
 <span><?php if ($news->fields->say3 == 1): ?><?php echo date('Y-m-d' , $news->modified); ?> 更新<?php else: ?><?php $news->date('Y-m-d');?><?php endif; ?>&nbsp
·&nbsp<?php $news->category(',', false);?>&nbsp·<?php Postviews($news);?><?php if($this->user->hasLogin()):?>&nbsp·&nbsp
 <a target="_blank" href="<?php $this->options->adminUrl();?>write-post.php?cid=<?php echo $news->cid;?>" style="font-weight:bold"><?php _e('编辑');?></a>
<?php endif;?>
 </span>
</div>
 </div>
 <div class="body fs14">


<?php if ($news->fields->say3 == 1): ?>

 <span style="font-weight:bold;color:#15B69C;font-size:20px">
 <?php $news->title()?>
 </span>

<?php if ($news->fields->Ar_Pword): ?>
<?php if($this->user->hasLogin()):?>
<?php echo getContentTest($news->content) ?>
<?php else: ?>
<span>😭此文章已被加密！</span>
<?php endif; ?>

<?php else: ?>


<?php echo getContentTest($news->content) ?>



<?php endif; ?>


 <hr>
 <span style="font-weight:bold;float:left;font-size:10px">
 最后更新：<br><?php echo date('m-d H:i:s', $news->modified);?>
 </span>
 <a style="font-weight:bold;float:right" href="<?php $news->permalink()?>" target="_blank">阅读原文</a>


<?php else: ?>

<span style="font-weight:bold;color:#15B69C;font-size:20px">
<a style="font-weight:bold;" href="<?php $news->permalink()?>" target="_blank"><?php $news->title()?>
</a></span>
<div style="display: flex;" id="ku">
<?php if ($news->fields->say4 == 1): ?>
<img class="no-lazy" src="<?php $news->fields->image(); ?>" style="border-radius:10px;"/>

<span style="font-weight:normal;<?php if ($news->fields->say4 == 1): ?>margin-left:10px;<?php else: ?><?php endif;?>"><?php if ($news->fields->zhaiyao): ?><?php $news->fields->zhaiyao(); ?><?php else: ?><?php $news->excerpt(50, '...'); ?><?php endif;?>
</span>

<?php endif;?>
</div>


<?php endif;?>
 </div>



 </div>
<?php 
        }
    }
?>
</div>



</article>


<?php $this->need('comments.php'); ?>


<?php $this->need('footer.php'); ?>
