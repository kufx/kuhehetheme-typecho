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

<div class="article banner top">

<?php if ($this->fields->banner === "show") : ?>
<img class="bg lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQIHWNgAAIAAAUAAY27m/MAAAAASUVORK5CYII=" data-src="<?php $this->fields->image(); ?>" alt="<?php $this->title() ?>-<?php $this->options->title(); ?>" onerror="this.src='/error.svg'">
<?php endif; ?>

<div class="content">
<div class="top bread-nav footnote">
<div class="left">
<div class="flex-row" id="breadcrumb">
<a class="cap breadcrumb" href="/">主页</a>
<span class="sep"></span>
<a class="cap breadcrumb" href="/">文章</a><span class="sep"></span>
<?php $this->category(','); ?>
</div>

<div class="flex-row" id="post-meta">
<a class="author" href="<?php $this->author->permalink(); ?>">
<?php $this->author(); ?>
</a>

<span class="sep"></span>
<span class="text created">
<time datetime="2024-02-09T09:02:44.000Z"><?php echo t_ago($this->created);?></time></span>
<span class="sep updated"></span>
<span class="text updated">更新于：<time datetime="2024-04-25T01:18:14.747Z"><?php echo date('Y-m-d H:i:s' , $this->modified); ?></time></span></div>


<div class="flex-row" id="breadcrumb">
<span class="text"><?php Postviews($this); ?></span>
<?php if ($this->options->commenton === "on" && $this->allow('comment')) : ?>
<span class="sep updated"></span>
<a href="#comments"><i class="fas fa-comments"></i> <?php $this->commentsNum(); ?></a>
<?php endif; ?>
</div>

</div></div>

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


<?php if (is_array($this->options->sidebarBlock) && in_array('Showhuanying3', $this->options->sidebarBlock)): ?>
<div class="tp-ad-text1">
<?php $this->options->文章广告(); ?>
</div>
<?php endif; ?>



<div class="joe_post__ad">
<?php
                            $JADPost = [];
                            $JADPost_text = $this->options->JADPost;
                            if ($JADPost_text) {
                            $JADPost_arr = explode("\r\n", $JADPost_text);
                            if (count($JADPost_arr) > 0) {
                                for ($i = 0; $i < count($JADPost_arr); $i++) {
                                    $img = explode("||", $JADPost_arr[$i])[0];
                                    $url = explode("||", $JADPost_arr[$i])[1];
                                    $JADPost[] = array("img" => trim($img), "url" => trim($url));
                                };
                            }
                            }
                        ?>

<?php if (sizeof($JADPost) > 0) : ?>

<div class="swiper-container">
<div class="swiper-wrapper" style="width:100%!important;">
<?php foreach ($JADPost as $item) : ?>
<div class="swiper-slide">
<a class="item" href="<?php echo $item['url'] ?>" target="_blank" rel="noopener noreferrer nofollow">
<img style="width:100%!important;box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);" class="image lazyload" src="<?php echo $item['img'] ?>" data-src="<?php echo $item['img'] ?>" />
</a>
</div>
<?php endforeach; ?>
</div>
<div class="swiper-pagination"></div>
<span class="icon">广告</span>
</div>
<?php endif; ?>
</div>










<?php if($this->hidden||$this->titleshow): ?>
<style>
    input[type="password"] {
      width: 80%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 2px solid #555;
      border-radius: 4px;
      color: var(--text);
      background-color: var(--block)
    }
.word {
  font-weight: bold;
  margin-bottom: 5px;
  display: flex;
}

.word:hover {
  color: red;
  font-size: 1.5em;
}

  
 .container {
      display: flex;
      justify-content: space-around;  /* 整体居中 */
  }

 .left-column {
      width: 50%;
      padding: 0 2px 0 0;  /* 右侧间隔 3px */
      display: flex;
      
      flex-direction: column;
  }

 .right-column {
      width: 50%;
      padding: 0 0 0 2px;  /* 左侧间隔 3px */
      display: flex;
      align-items: flex-end;
      flex-direction: column;  /* 使文字垂直排列 */
  }

 .left-column img {
      width: 50%;
      height: auto;  /* 自动调整图片高度以保持比例 */
  }

 .right-column p {
      flex: 1;  /* 让文字段落占据剩余空间，从而自动调整大小 */
      margin: 0;  /* 去除默认的段落外边距 */
      line-height: 0.5;  /* 减小段落之间的上下间隔 */
  }
</style>

<div class="tag-plugin colorful note" color="red">
<div style="font-weight:bold" class="title">

<div class="container">
<div class="left-column">
<?php $this->fields->jiami(); ?>
</div>
<div class="right-column">
<img src="<?php if ($this->fields->jiamimg()): ?><?php $this->fields->jiamimg(); ?><?php endif; ?>"></img>
</div>
</div>

</div></div>

<?php endif; ?>


<?php if($this->user->hasLogin()):?>

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
                    $finalContent = preg_replace("/\[login\](.*?)\[\/login\]/sm",'<div class="login_reply2view">$1</div>', $finalContent);
                } else {
                    $finalContent = preg_replace("/\[login\](.*?)\[\/login\]/sm",'<div class="login_reply2view">此处内容已隐藏，需要<a href="/admin" target="_blank">登录</a>后方可阅读</div>', $finalContent);
                }
                
                if($this->user->hasLogin() || $result) {
                    // 处理回复可见
                    $finalContent = preg_replace("/\[hide\](.*?)\[\/hide\]/sm",'<div class="reply2view">$1</div>', $finalContent);
                } else {
                    $finalContent = preg_replace("/\[hide\](.*?)\[\/hide\]/sm",'<div class="reply2view">此处内容已隐藏，需要<a href="#comments">评论</a>回复后（审核通过）刷新一下，方可阅读</div>', $finalContent);
                }
echo $finalContent;
                ?>
                <!-- 回复&登录可见 -->


<?php else: ?>

<?php $ar_pword=""; ?>
<?php if(isset($_POST['ar_pword'])){ ?>
    <?php $ar_pword = $_POST['ar_pword']; ?>
    <?php if($this->fields->Ar_Pword == $ar_pword){ ?>



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
                    $finalContent = preg_replace("/\[login\](.*?)\[\/login\]/sm",'<div class="login_reply2view">此处内容需要<a href="/admin" target="_blank">登录</a>后方可阅读</div>', $finalContent);
                }
                
                if($this->user->hasLogin() || $result) {
                    // 处理回复可见
                    $finalContent = preg_replace("/\[hide\](.*?)\[\/hide\]/sm",'<div class="reply2view">$1</div>', $finalContent);
                } else {
                    $finalContent = preg_replace("/\[hide\](.*?)\[\/hide\]/sm",'<div class="reply2view">此处内容已隐藏，需要<a href="#comments">评论</a>回复后（审核通过）刷新一下，方可阅读</div>', $finalContent);
                }
echo $finalContent;
                ?>
                <!-- 回复&登录可见 -->


    <?php }else{ ?>
        <p>密码错误，请重新输入</p>
        <form action="" method="post">
            <input style="background:var(--block);color:var(--text);border-color:var(--text-meta);font-family:inherit;" type="text" name="ar_pword"/>
            <input type="submit" name="submit" value="提交"/>
        </form>
    <?php } ?>
<?php }else{ ?>
    <?php if($this->fields->Ar_Pword == ""){ ?>
        

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
                    $finalContent = preg_replace("/\[login\](.*?)\[\/login\]/sm",'<div class="login_reply2view">$1</div>', $finalContent);
                } else {
                    $finalContent = preg_replace("/\[login\](.*?)\[\/login\]/sm",'<div class="login_reply2view">此处内容需要<a href="/admin" target="_blank">登录</a>后方可阅读</div>', $finalContent);
                }
                
                if($this->user->hasLogin() || $result) {
                    // 处理回复可见
                    $finalContent = preg_replace("/\[hide\](.*?)\[\/hide\]/sm",'<div class="reply2view jz jc ys">$1</div>', $finalContent);
                } else {
                    $finalContent = preg_replace("/\[hide\](.*?)\[\/hide\]/sm",'<div class="reply2view">此处内容已隐藏，需要<a href="#comments">评论</a>回复后（审核通过）刷新一下，方可阅读</div>', $finalContent);
                }
echo $finalContent;
                ?>
                <!-- 回复&登录可见 -->


    <?php }else{ ?>
        <p>作者给文章设置了密码哦！输入正确的口令才可以阅读</p>
        <form action="" method="post">
            <input style="background:var(--block);color:var(--text);border-color:var(--text-meta);font-family:inherit;" type="text" name="ar_pword"/>
            <input type="submit" name="submit" value="提交"/>
        </form>
    <?php } ?>
<?php } ?>

<?php endif;?>



<div style="margin: 20px auto;width: fit-content;">-------꧁༺ <span style="color: var(--card);background-color: var(--text);padding: 0 5px;font-size: 1.2rem;font-weight:bold;border-radius:5px;">完</span> ༻꧂-------</div>






<?php 
foreach($this->tags as $val){
   ?>
    <a href="<?php echo $val['url'];?>" itemprop="url" color="<?php if ($this->fields->tagcolor()):?>
    <?php $this->fields->tagcolor();?><?php endif;?>" class="tag-plugin colorful hashtag">
        
            <svg t="1701408144765" class="icon" viewbox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4228" width="200" height="200"> 
                <path d="M426.6 64.8c34.8 5.8 58.4 38.8 52.6 73.6l-19.6 117.6h190.2l23-138.6c5.8-34.8 38.8-58.4 73.6-52.6s58.4 38.8 52.6 73.6l-19.4 117.6H896c35.4 0 64 28.6 64 64s-28.6 64-64 64h-137.8l-42.6 256H832c35.4 0 64 28.6 64 64s-28.6 64-64 64h-137.8l-23 138.6c-5.8 34.8-38.8 58.4-73.6 52.6s-58.4-38.8-52.6-73.6l19.6-117.4h-190.4l-23 138.6c-5.8 34.8-38.8 58.4-73.6 52.6s-58.4-38.8-52.6-73.6l19.4-117.8H128c-35.4 0-64-28.6-64-64s28.6-64 64-64h137.8l42.6-256H192c-35.4 0-64-28.6-64-64s28.6-64 64-64h137.8l23-138.6c5.8-34.8 38.8-58.4 73.6-52.6z m11.6 319.2l-42.6 256h190.2l42.6-256h-190.2z" p-id="4229"></path>
            </svg>
        <span><?php echo $val['name'];?></span></a>
<?php }?>




</article>






 












<div class="related-wrap" id="read-next"><section class="body"><div class="item" id="prev"><div class="note">较新文章</div><strong><?php $this->theNext(); ?></strong></div><div class="item" id="next"><div class="note">较早文章</div><strong><?php $this->thePrev(); ?></strong></div></section></div>


<?php
$this->related(5)->to($relatedPosts);
if ($relatedPosts->have()) {  // 判断是否存在相关文章
?>

<div class="related-wrap" id="related-posts">
<section class="header"> 
  <div class="title cap theme">
 相关文章</div>
 </section>
<section class="body"> 
 <div class="related-posts"> 
    <?php while ($relatedPosts->next()): ?>
 <a class="item" href="<?php $relatedPosts->permalink(); ?>" title="<?php $relatedPosts->title(); ?>"> 
 <span class="title"><?php $relatedPosts->title(); ?></span>
 </a>
    <?php endwhile; ?>
 </div>
 </div>
 </section>
<?php }?>


<?php $this->need('comments.php'); ?>







<?php $this->need('footer.php'); ?>
