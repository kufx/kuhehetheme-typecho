<?php
/**
 * 无顶部页面模板
 *
 * @package custom
 *
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 


global $articleContent;
if ($this->is('single')) {
    $articleContent = $this->content;
}

?>

<?php $this->need('header.php'); ?>

<script>
document.querySelector('.banner.top').style.display = 'none'
</script>

<article class="md-text content" id="hh">

<div class="tag-plugin banner">
<img class="bg no-lazy" src="<?php $this->fields->mdbimg(); ?>">

<div class="content">
<div class="top">

<button class="back cap" onclick="window.history.back()">
<svg aria-hidden="true" viewBox="0 0 16 16" fill="currentColor"><path fill-rule="evenodd" d="M7.78 12.53a.75.75 0 01-1.06 0L2.47 8.28a.75.75 0 010-1.06l4.25-4.25a.75.75 0 011.06 1.06L4.81 7h7.44a.75.75 0 010 1.5H4.81l2.97 2.97a.75.75 0 010 1.06z"></path></svg>
</button>

<div class="tag-plugin navbar">
<nav>
<?php if ($this->fields->mdbbt()): ?>
<?php $this->fields->mdbbt(); ?>
<?php endif; ?>
</nav>
</div></div>
<div class="bottom">
<div class="text-area">
<div class="text title">
<?php $this->fields->mdbtitle(); ?>
</div>
</div></div>
</div></div>





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



<?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
<li>文章总数：<?php $stat->publishedPostsNum() ?>篇</li>
<li>分类总数：<?php $stat->categoriesNum() ?>个</li>
<li>评论总数：<?php $stat->publishedCommentsNum() ?>条</li>
<li>独立页面总数：<?php $stat->publishedPagesNum() ?>页</li>

<?php
  //标签及对应的文章数
  $this->widget('Widget_Metas_Tag_Cloud')->parse('<a href="{permalink}">{name}({count})</a>');
?>


<br>


<?php $this->widget('Widget_Contents_Post_Recent','pageSize=10000')->to($newhh);?>
  <?php if($newhh->have()):?>
    <?php while($newhh->next()): ?>   
<a href="<?php $newhh->permalink();?>"><?php $newhh->title(); ?><?php $newhh->date(); ?></a><br>
    <?php endwhile; ?>
  <?php endif; ?>









<?php $this->widget('Widget_Metas_Category_List')->to($categories); ?>
<?php while ($categories->next()): ?>


<?php $this->widget('Widget_Archive@category-' . $categories->mid, 'pageSize=100&type=category', 'mid=' . $categories->mid)->to($posts); ?>
<div class="posts">

<?php $categories->name(); ?>：

<ul class="post-list"> 
<?php while ($posts->next()): ?>
<li>
<a href="<?php $posts->permalink(); ?>"><?php $posts->title(40); ?></a>
<span class="comment-num">(<?php $posts->commentsNum(); ?>)</span>
</li>
<?php endwhile; ?>
</ul>
</div>
<?php endwhile; ?>






<?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->parse('<li>{year}/{month}/{day} : <a href="{permalink}">{title}</a></li>'); ?>



<hr>






   
                                                          








</article>




<?php $this->need('comments.php');?>



<?php $this->need('footer.php'); ?>
