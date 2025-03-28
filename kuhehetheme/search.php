<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; 

$keywords = isset($_GET['s'])? $_GET['s'] : ''; // 获取搜索关键词

?>

<?php if ($this->have()):?>

<ul class="search-result-list"> 
    <?php while ($this->next()):?>
         <li><a href="<?php $this->permalink();?>"><span class="search-result-title"><?php $this->title();?></span>
        <p class="search-result-content"><?php 
            $excerpt = $this->excerpt(100); 
            $highlightedExcerpt = highlightKeywords($excerpt, $keywords); 
            echo $highlightedExcerpt; 
      ?></p></a></li>
    <?php endwhile;?>
 </ul>

<?php else:?>
<div class="search-wrapper noresult" id="search-wrapper" searching="true">
    <div class="search-no-result">
没有找到内容！</div>
</div>
<?php endif;?> 

<?php
function highlightKeywords($text, $keywords) {
    $words = explode(' ', $keywords);
    foreach ($words as $word) {
        $text = preg_replace('/('.$word.')/i', '<span class="search-keyword">$1</span>', $text);
    }
    return $text;
}
?>