<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>


<header class="header mobile-only"><div class="logo-wrap"><a class="avatar" href="/about/"><div class="bg" style="opacity:0;background-image:url(https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/avatar/round/rainbow64@3x.webp);"></div><img no-lazy="" class="avatar no-lazy" src="<?php $this->options->logo(); ?>"></a><a class="title" href="/"><div class="main" ff="title"><?php $this->options->name(); ?></div><div class="sub normal cap"><?php $this->options->logotxt1(); ?></div><div class="sub hover cap" style="opacity:0"><?php $this->options->logotxt2(); ?></div></a></div></header>


<?php $this->need('sidebar.php'); ?>




<?php if ($this->have()): ?>
<div class="post-list post">
<center>
<h3 style="color:var(--text)" class="archive-title"><?php $this->archiveTitle([ 
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ''); ?></h3></center>

<br>

<div class="tag-plugin timeline ds-fcircle" id="comment-container">
<?php while($this->next()): ?>
 <div class="timenode"> 
 <div class="header"> 
 <div class="user-info">
 <img src="<?php $this->options->logoUrl(); ?>" onerror="javascript:this.src='https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/avatar/round/3442075.svg';"></img>

<a href="/author/<?php $this->authorId(); ?>"><span style="font-weight:bold;"><?php $this->date('Y-m-d'); ?></span></a>&nbsp


<span><?php $this->category(','); ?>
<?php Postviews($this); ?>


<?php if($this->user->hasLogin()):?>
<a target="_blank" href="<?php $this->options->adminUrl();?>write-post.php?cid=<?php echo $this->cid;?>" style="font-weight:bold"><?php _e('编辑');?></a>
<?php endif;?>
</span>
</div>
</div>

<a style="color:var(--text);font-weight:bold;display:flex;flex-direction:column;" class="body" href="<?php $this->permalink() ?>" target="_blank" rel="external nofollow noopener noreferrer"><span style="color:#15B69C;"><?php $this->title() ?></span>
<div style="display: flex;" id="ku">
<?php if ($this->fields->say5 == 1): ?>
<img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQIHWNgAAIAAAUAAY27m/MAAAAASUVORK5CYII=" data-src="<?php $this->fields->image(); ?>" style="border-radius:10px;"/>
<span style="font-weight:normal;<?php if ($this->fields->say5 == 1): ?>margin-left:10px;<?php else: ?><?php endif;?>"><?php if ($this->fields->zhaiyao): ?><?php $this->fields->zhaiyao(); ?><?php else: ?><?php $this->excerpt(50, '...'); ?><?php endif;?>
</span>
<?php endif;?>
</div>
</a>
 </div>
 <?php endwhile; ?>
</div>
</div>

   
<?php else: ?>

<article class="md-text error-page">
  
  <p class="what">
    <strong>
      很抱歉，未找到相关内容
    </strong>
  </p>
  <a class="button" id="back" href="/">返回主页</a>
</article>

<?php endif; ?>

<br>

<?php $this->pageNav('👈', '👉'); ?>






<!-- <?php $this->pageNav('👈', '👉', 1, '...', array('wrapTag' => 'div', 'wrapClass' => 'paginator-wrap dis-select', 'itemTag' => 'span', 'textTag' => 'span', 'currentClass' => 'page-number current', 'prevClass' => 'extend prev', 'nextClass' => 'extend next',)); ?> -->

 
     
<?php $this->need('footer.php'); ?>
