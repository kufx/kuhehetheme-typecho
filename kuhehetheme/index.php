<?php
/**
 * 酷小呵亲自移植Hexo的Stellar主题
 *
 * @package kuheheStellar
 * @author 酷小呵
 * @version 1.0
 * @link https://kuhehe.vip
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;



/** 文章置顶 */
$sticky = $this->options->zd; //置顶的文章id，多个用|隔开
if($sticky){
    $sticky_cids = explode('|',$sticky); //分割文本
    $sticky_html = "<span style='color:#fff;padding: .1rem .25rem;font-size:inherit;border-radius: .25rem;background-color:#f00;'>置顶</span>&nbsp"; //置顶标题的 html

    $db = Typecho_Db::get();
    $pageSize = $this->options->pageSize;
    $select1 = $this->select()->where('type = ?', 'post');
    $select2 = $this->select()->where('type = ? && status = ? && created < ?', 'post','publish',time());

    //清空原有文章的列队
    $this->row = [];
    $this->stack = [];
    $this->length = 0;

    $order = '';
    foreach($sticky_cids as $i => $cid) {
        if($i == 0) $select1->where('cid = ?', $cid);
        else $select1->orWhere('cid = ?', $cid);
        $order .= " when $cid then $i";
        $select2->where('table.contents.cid != ?', $cid); //避免重复
    }
    if ($order) $select1->order('', "(case cid$order end)"); //置顶文章的顺序 按 $sticky 中 文章ID顺序
    if (($this->_currentPage || $this->currentPage) == 1) foreach($db->fetchAll($select1) as $sticky_post){ //首页第一页才显示
        $sticky_post['sticky'] = $sticky_html;
        $this->push($sticky_post); //压入列队
    }
    if($this->user->hasLogin()){
    $uid = $this->user->uid; //登录时，显示用户各自的私密文章
    if($uid) $select2->orWhere('authorId = ? && status = ?', $uid, 'private');
    }
    $sticky_posts = $db->fetchAll($select2->order('table.contents.created', Typecho_Db::SORT_DESC)->page($this->_currentPage, $this->parameter->pageSize));
    foreach($sticky_posts as $sticky_post) $this->push($sticky_post); //压入列队
    $this->setTotal($this->getTotal()-count($sticky_cids)); //置顶文章不计算在所有文章内
}



?>  



<?php $this->need('header.php'); 


?>










<?php if ($this->is('index')): ?>
<?php $this->need('head.php'); ?>


<?php $this->need('sidebar.php'); ?>


<?php endif; ?>

<div class="post-list post">
<?php $this->need('article.php'); ?>
</div>


<!-- <div class="paginator-wrap dis-select">
<?php $this->pageNav('👈', '👉'); ?>
</div> -->

<?php $this->pageNav('👈', '👉', '1', '...'); ?>


<br>
<div id="containerr">
<input type="text" id="pageInput" placeholder="输入页码数字">
<button id="gotoBtn" onclick="gotoPage()">跳转</button>
</div>

<script>
function gotoPage() {
    var pageNumber = document.getElementById("pageInput").value;
    if (pageNumber &&!isNaN(pageNumber)) {
        var currentUrl = window.location.href;
        var urlParts = currentUrl.split('/page/');
        window.location.href = urlParts[0] + 'page/' + pageNumber + '/';
    } else {
        alert("请输入有效的数字页面！");
    }
}
</script>



<!-- <?php $this->pageNav('👈', '👉', 1, '...', array('wrapTag' => 'div', 'wrapClass' => 'paginator-wrap dis-select', 'itemTag' => 'span', 'textTag' => 'span', 'currentClass' => 'page-number current', 'prevClass' => 'extend prev', 'nextClass' => 'extend next',)); ?> --> 




<?php $this->need('footer.php'); ?>

