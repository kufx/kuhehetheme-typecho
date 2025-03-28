<?php function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';  //如果是文章作者的评论添加 .comment-by-author 样式
        } else {
            $commentClass .= ' comment-by-user';  //如果是评论作者的添加 .comment-by-user 样式
        }
    } 
    $commentLevelClass = $comments->_levels > 0 ? ' comment-child' : ' comment-parent';  //评论层数大于0为子级，否则是父级




?>






<li class="timenode" id="<?php $comments->theId(); ?>"> 
<div class="header">
<div class="user-info"> 
<?php $number=$comments->mail;
if(preg_match('|^[1-9]\d{4,11}@qq\.com$|i',$number)){
echo '<img src="https://q2.qlogo.cn/headimg_dl? bs='.$number.'&dst_uin='.$number.'&dst_uin='.$number.'&;dst_uin='.$number.'&spec=100&url_enc=0&referer=bu_interface&term_type=PC">'; 
}else{
echo '<img src="https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/avatar/round/3442075.svg">';
}
?>
<span style="font-weight:bold">


<?php if ($comments->url): ?>
<a href="<?php echo $comments->url ?>" target="_blank" rel="external nofollow">
<?php echo $comments->author ?>
</a>


<?php
//博主样式

$me = md5(strtolower('3111349763@qq.com')); //这里填入自己的邮箱
$rz = md5(strtolower($comments->mail)); //用于判断邮箱
$str =  '<span style="color: #FFF;padding: .1rem .25rem;font-size: .7rem;border-radius: .25rem;background-color:#1ECD97;" >博主</span>';

$str2 =  '<span style="color: #FFF;padding: .1rem .25rem;font-size: .7rem;border-radius: .25rem;background-color:#C0C0C0;" >游客</span>';
//开始判断
if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {echo $str;}}

elseif($me==$rz){echo $str;}

else{echo $str2;}        
?>


<?php else: ?>
<a href="<?php $comments->permalink();?>">
<?php $comments->author(); ?></a>

<?php
$me = md5(strtolower('3111349763@qq.com')); //这里填入自己的邮箱
$rz = md5(strtolower($comments->mail)); //用于判断邮箱
//博主样式
$str =  '<span style="color: #FFF;padding: .1rem .25rem;font-size: .7rem;border-radius: .25rem;background-color:#1ECD97;" >博主</span>';

$str2 =  '<span style="color: #FFF;padding: .1rem .25rem;font-size: .7rem;border-radius: .25rem;background-color:#C0C0C0;" >游客</span>';
//开始判断
if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {echo $str;}}
elseif($me==$rz){echo $str;}
else{echo $str2;}        
?>

<?php endif; ?>
</span>

</div> 
<span>
<?php $comments->date('Y/n/j H:i:s'); ?>🥝</span>
&nbsp<span class=cm>ID:<?php $comments->coid(); ?> <b><?php $comments->reply('回复'); ?></b>
</span>
</div>
<div class="body">

<?php $parentMail = get_comment_at($comments->coid)?><?php echo $parentMail;?>

<?php $comments->content(); ?>
<?php if ('waiting' == $comments->status): ?>
<span style="color:#ff0000;font-weight:bold;float:right">💔评论正在审核中</span>
<?php endif;?>
</div>
</li>



<?php if ($comments->children) { ?>
      <?php $comments->threadedComments($options); ?>
    <?php } ?>
 
<?php } ?> 






<?php $this->comments()->to($comments); ?>

<?php if ($this->options->commenton === "on" && $this->allow('comment')) : ?>

<article class="md-text content" id="hh">





<div id="<?php $this->respondId(); ?>" class="reply-form">
<!-- 取消回复哈 -->

<form method="post" action="<?php $this->commentUrl() ?>" id="comment_form"> 

<!-- 如果当前用户已经登录 -->
<?php if($this->user->hasLogin()): ?>
<!-- 显示当前登录用户的用户名以及登出连接 -->
            <p>已登录<a href="<?php $this->options->adminUrl(); ?>"><?php $this->user->screenName(); ?></a>. 
            <a href="<?php $this->options->index('Logout.do'); ?>" title="Logout">退出登录 &raquo;</a></p>
<!-- 若当前用户未登录 -->
<?php else: ?>
            <!-- 要求输入名字、邮箱、网址 -->

<input style="background:var(--block);color:var(--text);border-color:var(--text-meta);font-family:inherit;" type="text" name="author" class="text" size="35" value="<?php $this->remember('author'); ?>"  placeholder="🍁昵称 (必填)" />
	   
<input style="background:var(--block);color:var(--text);border-color:var(--text-meta);font-family:inherit;" type="text" name="mail" class="text" size="35" value="<?php $this->remember('mail'); ?>" placeholder="🍁邮箱，必填-QQ邮箱可显示QQ头像" />	    

<input style="background:var(--block);color:var(--text);border-color:var(--text-meta);font-family:inherit;" type="text" name="url" class="text" size="35" value="<?php $this->remember('url'); ?>" placeholder="🍁网站，得带http://或https://等-选填" />
        <?php endif; ?> 
        <!-- 输入要回复的内容 -->
	 <textarea style="background:var(--block);color:var(--text);border-color:var(--text-meta);font-family:inherit;" placeholder="✅️注意文明发言哦！✅️邮箱写QQ邮箱可显示QQ头像哦✅️评论区现在支持markdown语法，欢迎发言哈，谢谢！✅️若是评论可见内容，则邮箱必填，否则评论无效" rows="10" cols="50" name="text"><?php $this->remember('text'); ?></textarea>
<?php spam_protection_math();?>
<center>
<?php $comments->cancelReply(); ?>

<input style="font-family:inherit;width:30%;position:flex;" value="提交评论" type="submit" class="submit" />
</center>
</form>

<script type="text/javascript">
(function () {
    window.TypechoComment = {
        dom : function (id) {
            return document.getElementById(id);
        },

        create : function (tag, attr) {
            var el = document.createElement(tag);

            for (var key in attr) {
                el.setAttribute(key, attr[key]);
            }

            return el;
        },

        reply : function (cid, coid) {
            var comment = this.dom(cid), parent = comment.parentNode,
                response = this.dom('<?php $this->respondId();?>'), input = this.dom('comment-parent'),
                form = 'form' == response.tagName? response : response.getElementsByTagName('form')[0],
                textarea = response.getElementsByTagName('textarea')[0];

            if (null == input) {
                input = this.create('input', {
                    'type' : 'hidden',
                    'name' : 'parent',
                    'id'   : 'comment-parent'
                });

                form.appendChild(input);
            }

            input.setAttribute('value', coid);

            if (null == this.dom('comment-form-place-holder')) {
                var holder = this.create('div', {
                    'id' : 'comment-form-place-holder'
                });

                response.parentNode.insertBefore(holder, response);
            }

            comment.appendChild(response);
            this.dom('cancel-comment-reply-link').style.display = '';

            if (null!= textarea && 'text' == textarea.name) {
                textarea.focus();
            }

            return false;
        },

        cancelReply : function () {
            var response = this.dom('<?php $this->respondId();?>'),
            holder = this.dom('comment-form-place-holder'), input = this.dom('comment-parent');

            if (null!= input) {
                input.parentNode.removeChild(input);
            }

            if (null == holder) {
                return true;
            }

            this.dom('cancel-comment-reply-link').style.display = 'none';
            holder.parentNode.insertBefore(response, holder);
            return false;
        }
    };
})();
</script>



</div>









<?php if ($comments->have()) : ?>
<!-- 评论头部提示信息 -->
<center><h4 style="color:var(--text)" id="comments"><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h4></center>
        <!-- 评论的内容 -->
<div class="tag-plugin timeline ds-fcircle" id="comment-container">
<?php $comments->listComments(); ?>
</div>
<!-- 评论page -->
<?php $comments->pageNav('👈', '👉'); ?>

<?php else: ?>

 <img style="width:80%!important;opacity: .7!important;border:none!important" src="https://bu.dusays.com/2025/01/05/6779ff010cbda.webp"></img>
 <center><span style="margin-top:20px;font-weight:bold;">暂无评论</span><center>

<?php endif; ?>

</article>

<?php else: ?>
<article class="md-text content" id="hh">
<img style="width:80%!important;opacity: .7!important;border:none!important" src="https://bu.dusays.com/2025/01/05/6779ff010cbda.webp"></img>
 <center><span style="margin-top:20px;font-weight:bold;">评论区已关闭！</span><center>
</article>

<?php endif; ?>
