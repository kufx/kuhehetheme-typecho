<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; 

global $articleContent;
if ($this->is('single')) {
    $articleContent = $this->content;
}

?>

<?php $this->need('header.php'); ?>



<?php if ($this->fields->header1 == 1): ?>
<?php $this->need('head.php'); ?>
<?php endif; ?>


<?php if ($this->fields->header2 == 1): ?>
<?php $this->need('sidebar.php'); ?>
<?php endif; ?>

      

<div class="article banner top">
<?php if ($this->fields->banner === "show") : ?>
<img class="bg no-lazy" src="<?php $this->fields->image(); ?>">
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
<span class="sep updated"></span>
<a href="#comments"><i class="fas fa-comments"></i>：<?php $this->commentsNum(); ?></a>
</div>

</div></div>
<?php endif; ?>   
 
    <div class="bottom only-title">
      
<div class="text-area">
<h1 class="text title">
<span>
<?php $this->title() ?>
</span>
</h1>
<div class="text subtitle">
<?php if ($this->fields->subtitle()): ?>
<?php $this->fields->subtitle(); ?>
<?php endif; ?>
</div> 
      </div>
    </div>
    
  </div>
  </div>

<article class="md-text content">




<!-- 回复&登录可见 -->
                <?php
                $db = Typecho_Db::get();
                $sql = $db->select()->from('table.comments')
                    ->where('cid =?',$this->cid)
                    ->where('mail =?', $this->remember('mail',true))
                    ->where('status =?', 'approved')
                    ->limit(1);
                $result = $db->fetchAll($sql);
                
                $finalContent = getContentTest($this->content);  // 先保存原始内容
                
                if($this->user->hasLogin()) {
                    // 处理登录可见
                    $finalContent = preg_replace("/\[login\](.*?)\[\/login\]/sm",'<div class="login_reply2view jz jc ys">$1</div>', $finalContent);
                } else {
                    $finalContent = preg_replace("/\[login\](.*?)\[\/login\]/sm",'<div class="login_reply2view jz jc ys">此处内容需要<a href="/admin" target="_blank">登录</a>后方可阅读</div>', $finalContent);
                }
                
                if($this->user->hasLogin() || $result) {
                    // 处理回复可见
                    $finalContent = preg_replace("/\[hide\](.*?)\[\/hide\]/sm",'<div class="reply2view jz jc ys">$1</div>', $finalContent);
                } else {
                    $finalContent = preg_replace("/\[hide\](.*?)\[\/hide\]/sm",'<div class="reply2view jz jc ys">此处内容需要<a href="#comments">评论</a>回复后（审核通过）方可阅读</div>', $finalContent);
                }

echo $finalContent;
                ?>
                <!-- 回复&登录可见 -->




</article>

<?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>
