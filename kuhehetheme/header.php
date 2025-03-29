<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-dns-prefetch-control" content="on">
  
  <meta name="renderer" content="webkit">
  <meta name="force-rendering" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <meta name="HandheldFriendly" content="True">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#000">
  <meta name="theme-color" content="#f9fafb">



<meta property="og:image" <?php if($this->is('post')||$this->is('page')): ?>
content="<?php $this->options->logoUrl(); ?>"<?php else: ?>
<?php if ($this->options->logoUrl){ ?>content="<?php $this->options->logoUrl();?>"<?php }else{ ?>content="<?php $this->options->siteUrl(); ?>logo.jpg"<?php };?><?php endif; ?>>
<meta property="og:title" content="<?php $this->archiveTitle(array(
'category'=>_t('%s '),
'search'=>_t('包含关键字 %s 的文章'),
'tag' =>_t('标签 %s 下的文章'),
'author'=>_t('%s 的主页')
), '', ' - '); ?><?php $this->options->title(); ?>"/>
<meta property="og:description" content="<?php $this->options->description(); ?>">  
<meta property="og:url" content="<?php $this->permalink() ?>"/>  
<meta itemprop="name" content="<?php $this->archiveTitle(array(
'category'=>_t('%s '),
'search'=>_t('包含关键字 %s 的文章'),
'tag' =>_t('标签 %s 下的文章'),
'author'=>_t('%s 的主页')
), '', ' - '); ?><?php $this->options->title(); ?>">
<meta itemprop="description" content="<?php $this->options->description(); ?>">
<meta itemprop="image" <?php if($this->is('post')||$this->is('page')): ?>
content="<?php $this->options->logoUrl(); ?>"<?php else: ?>
<?php if ($this->options->logoUrl){ ?>content="<?php $this->options->logoUrl();?>"<?php }else{ ?>content="<?php $this->options->siteUrl(); ?>logo.jpg"<?php };?><?php endif; ?>>




  
<title>
<?php if($this->is('index')): ?>
<?php $this->options->title(); if($this->_currentPage>1) echo '-第'.$this->_currentPage.'页'; ?>
<?php else :?>
<?php $this->options->title(); echo '-'; $this->archiveTitle('','',''); if($this->_currentPage>1) echo '-第'.$this->_currentPage.'页'; ?>
<?php endif; ?>
</title>
 

  
<meta name="description" content="<?php $this->options->description(); ?>">

<meta name="keywords" content="小呵爱分享">

  <!-- feed -->
  
<!-- <link rel="alternate" href="/atom.xml" title="酷小呵" type="application/atom+xml"> -->

<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">

<link rel="stylesheet" href="<?php $this->options->themeUrl('style2.css'); ?>">

<link rel="stylesheet" href="<?php $this->options->themeUrl('css/main.css'); ?>">

<link rel="stylesheet" href="<?php $this->options->themeUrl('css/custom.css'); ?>">

<link rel="stylesheet" href="<?php $this->options->themeUrl('css/ys.css'); ?>">






<script defer src="https://use.fontawesome.com/releases/v5.11.2/js/all.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.11.2/js/v4-shims.js"></script>




<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/css/iziToast.min.css">

 <link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/lxgw-wenkai-screen-webfont/1.7.0/style.min.css" media="all"> 

<!-- <link rel="stylesheet" href="https://npm.elemecdn.com/lxgw-wenkai-webfont@1.1.0/lxgwwenkai-regular.css" media="all"> -->



<?php if ($this->is('post')): ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@5.4.5/css/swiper.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@5.4.5/js/swiper.min.js"></script>


<script>
document.addEventListener('DOMContentLoaded', function() {
  // 您的 Swiper 相关代码放在这里
if(0!==$(".joe_post__ad .swiper-container").length){let e="vertical";new Swiper(".swiper-container",{keyboard:!0,direction:e,loop:!0,autoplay:!0,mousewheel:!0,pagination:{el:".swiper-pagination"},})}
});
</script>

<?php endif; ?>




<?php if ($this->is('post')): ?>
<script src="<?php $this->options->themeUrl('js/ssbg.js'); ?>"></script>
<?php endif; ?>


<style>
<?php if ($this->options->headcs()): ?>
<?php $this->options->headcs(); ?>
<?php endif; ?>


.l_left {
  background-image: url("<?php if ($this->options->leftimg()): ?><?php $this->options->leftimg(); ?><?php endif; ?>");
}


</style>


<?php if ($this->is('single') && isset($this->fields->headcode)): ?>
    <?php echo $this->fields->headcode; ?>
<?php endif; ?>


<?php if ($this->is('single') && $this->fields->isLatex == 1): ?>
<script defer type="text/javascript" src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.css" />
<script defer type="text/javascript" src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/contrib/auto-render.min.js"></script>
<?php endif; ?>




<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.21.16/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.21.16/dist/js/uikit-icons.min.js"></script>





<script src="<?php $this->options->themeUrl('js/jindutiao.js'); ?>"></script>



<?php if ($this->is('single') && $this->fields->ishighlight == 1): ?>
<script src="<?php $this->options->themeUrl('js/high.js'); ?>"></script>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/high.css'); ?>">
<?php endif; ?>



<?php if ($this->is('post') && $this->fields->fancybox == 1): ?>
<link href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js" type="ee71b4ea12285dc3ed787f94-text/javascript"></script>
<?php endif; ?>



<?php if ($this->is('single') && $this->fields->ishighli == 1): ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.9.0/build/styles/atom-one-dark.min.css">
<script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.9.0/build/highlight.min.js"></script>
<!-- and it's easy to individually load additional languages -->
<script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.9.0/build/languages/go.min.js"></script>
<script>
hljs.highlightAll();
</script>
<?php endif; ?>
					

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
    function search() {
      var keyword = $('#search-Input').val();
      $.ajax({
        url: 'search.php?s=' + keyword,
        type: 'GET',
        success: function(response) {
          $('#search-result').html(response);
        },
        error: function() {
          $('#search-result').html('<div class="search-no-result">没有找到内容😶！</div>');
        }
      });
    }

</script>


<?php if ($this->is('single') && $this->fields->iscopycode == 1): ?>
<script>
    // 在代码块右上角添加复制按钮
    document.addEventListener('DOMContentLoaded', initCodeCopyButton);
    function initCodeCopyButton() {
        function initCSS(callback) {
            const css = `
               .btn-code-copy {
                    position: absolute;
                    line-height:.5em;
                    top:.2em;
                    right:.2em;
                    color: #fff;  /* 文字颜色为白色 */
                    background-color: #4CAF50;  /* 绿色背景 */
                    border: 1px solid #4CAF50;  /* 绿色边框 */
                    border-radius: 4px;  /* 圆角 */
                    padding: 5px 10px;  /* 内边距 */
                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);  /* 阴影效果 */
                }
               .btn-code-copy:hover {
                    color: #fff;  /* 鼠标悬停时文字颜色保持白色 */
                    background-color: #388E3C;  /* 鼠标悬停时背景颜色更深 */
                    border: 1px solid #388E3C;  /* 鼠标悬停时边框颜色更深 */
                    cursor: pointer;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);  /* 鼠标悬停时阴影加深 */
                }
                `;
            const styleId = btoa('btn-code-copy').replace(/[=+\/]/g, '');
            const head = document.getElementsByTagName('head')[0];
            if (!head.querySelector('#' + styleId)) {
                const style = document.createElement('style');
                style.id = styleId;
                if (style.styleSheet) {
                    style.styleSheet.cssText = css;
                } else {
                    style.appendChild(document.createTextNode(css));
                }
                head.appendChild(style);
            }
            callback();
        };
        function copyTextContent(source) {
            let result = false;
            const target = document.createElement('pre');
            target.style.opacity = '0';
            target.textContent = source.textContent;
            document.body.appendChild(target);
            try {
                const range = document.createRange();
                range.selectNode(target);
                window.getSelection().removeAllRanges();
                window.getSelection().addRange(range);
                document.execCommand('copy');
                window.getSelection().removeAllRanges();
                result = true;
            } catch (e) { console.log('copy failed.'); }
            document.body.removeChild(target);
            return result;
        };
        function initButton(pre) {
            const code = pre.querySelector('code');
            if (code) {
                const preParent = pre.parentElement;
                const newPreParent = document.createElement('div');
                newPreParent.style = 'position: relative';
                preParent.insertBefore(newPreParent, pre);
                const copyBtn = document.createElement('div');
                copyBtn.innerHTML = '复制';
                copyBtn.className = 'btn-code-copy';
                copyBtn.addEventListener('click', () => {
                    copyBtn.innerHTML = copyTextContent(code)? '复制成功' : '复制失败';
                    setTimeout(() => copyBtn.innerHTML = '复制', 250);
                });
                newPreParent.appendChild(copyBtn);
                newPreParent.appendChild(pre);
            }
        };
        const pres = document.querySelectorAll('pre');
        if (pres.length!== 0) {
            initCSS(() => pres.forEach(pre => initButton(pre)));
        }
    };
</script>
<?php endif; ?>


<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?fcaa976af98007d45a3f2d0769b0034b";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>


</head>




<body>

<div class="l_body s:aa index tech" layout="<?php if ($this->is('post')): ?>post<?php else: ?>page<?php endif; ?>" id="start"><aside class="l_left"><div class="leftbar-container">

<header class="header">
<div class="logo-wrap">
<a class="avatar" href="<?php $this->author->permalink(); ?>">
<div class="bg" style="opacity:0;background-image:url(https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/avatar/round/rainbow64@3x.webp);">
</div>
<img no-lazy="" class="avatar no-lazy" src="<?php $this->options->logoUrl(); ?>">
</a>

<a class="title" href="/">
<div class="main" ff="title">
<?php $this->options->title(); ?>
</div>

<div class="sub normal cap">
<?php $this->options->logotxt1(); ?>
</div>

<div class="sub hover cap" style="opacity:0">
<?php $this->options->logotxt2(); ?>
</div>
</a>

</div>



</header>


<div class="nav-area">

<div class="search-wrapper" id="search-wrapper" searching="true">

<form class="search-form" action="" method="get">
<a type="submit" class="search-button" onclick="document.getElementById(&quot;search-input&quot;).focus();">
<svg t="1705074644177" viewBox="0 0 1025 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1560" width="200" height="200">
<path d="M1008.839137 935.96571L792.364903 719.491476a56.783488 56.783488 0 0 0-80.152866 0 358.53545 358.53545 0 1 1 100.857314-335.166073 362.840335 362.840335 0 0 1-3.689902 170.145468 51.248635 51.248635 0 1 0 99.217358 26.444296 462.057693 462.057693 0 1 0-158.255785 242.303546l185.930047 185.725053a51.248635 51.248635 0 0 0 72.568068 0 51.248635 51.248635 0 0 0 0-72.978056z" p-id="1561"></path>
<path d="M616.479587 615.969233a50.428657 50.428657 0 0 0-61.498362-5.534852 174.655348 174.655348 0 0 1-177.525271 3.484907 49.403684 49.403684 0 0 0-58.833433 6.76482l-3.074918 2.869923a49.403684 49.403684 0 0 0 8.609771 78.10292 277.767601 277.767601 0 0 0 286.992355-5.739847 49.403684 49.403684 0 0 0 8.404776-76.667958z" p-id="1562">
</path>
</svg>
</a>
<input type="text" class="search-input" class="text" name="s" placeholder="<?php $this->options->搜索框提示(); ?>" id="search-Input" oninput="search()"></input>
</form>




<div class="search-result" id="search-result"></div>

 </div>


<nav class="menu dis-select">


<a <?php if ($this->is('index')): ?>class="nav-item active"<?php else: ?>class="nav-item"<?php endif; ?> title="首页" href="<?php $this->options ->siteUrl(); ?>" style="color:#1BCDFC">
<span>首页</span>
</a>
<?php \Widget\Contents\Page\Rows::alloc()->to($pages); ?>
<?php while ($pages->next()): ?>
<?php if ($pages->fields->headerDisplay2 == 1): ?>
<a class="nav-item <?php echo $this->is('page', $pages->slug)?'active':''; ?>" href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>">
<span>
<?php if ($pages->fields->zdhxswz()): ?>
<?php $pages->fields->zdhxswz(); ?>
<?php endif; ?>
</span></a>
<?php endif; ?>
<?php endwhile; ?>
<a class="nav-item" title="登录" href="<?php $this->options ->siteUrl(); ?>admin" style="color:#E4080A" target="_blank"><span>登录</span>
</a>
</nav>
</div>

<div class="widgets">


<?php if ($this->is('single') && $this->fields->isleftshow == 1): ?>
<?php 
    $customFieldValue = $this->fields->leftorder; 
    $functionOrders = explode(',', $customFieldValue);

    foreach ($functionOrders as $functionOrder) {
        switch ($functionOrder) {
            case 'Welcome2':
                showSidebarBlockIfWelcome2($this->options, $this->post);
                break;
            case 'RightButton':
                showSidebarBlockIfRightButton($this->options, $this->post);
                break;
            case 'LeftWelcome':
                showLeftSidebarWelcome($this->options, $this->post);
                break;
            case 'Navigation': 
                showNavigationWidget($this->options, $this->post);
                break;
            case 'usercard': 
                showUsercard($this->options, $this->post);
                break;
            case 'tag': 
                tagcloud($this->options, $this->post);
                break;
            case 'linklist': 
                showSocialWidget($this->options, $this->post);
                break;
        }
    }
?>
<?php else: ?>
<?php 
    $customFieldValue = $this->options->leftbarshow; 
    $functionOrders = explode(',', $customFieldValue);

    foreach ($functionOrders as $functionOrder) {
        switch ($functionOrder) {
            case 'Welcome2':
                showSidebarBlockIfWelcome2($this->options, $this->post);
                break;
            case 'RightButton':
                showSidebarBlockIfRightButton($this->options, $this->post);
                break;
            case 'LeftWelcome':
                showLeftSidebarWelcome($this->options, $this->post);
                break;
            case 'Navigation': 
                showNavigationWidget($this->options, $this->post);
                break;
            case 'usercard': 
                showUsercard($this->options, $this->post);
                break;
            case 'tag': 
                tagcloud($this->options, $this->post);
                break;
            case 'linklist': 
                showSocialWidget($this->options, $this->post);
                break;
                         
        }
    }
?>
<?php endif; ?>


​<?php if (is_array($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>

<widget class="widget-wrapper post-list"><div class="widget-header dis-select">
<span class="name">最新文章</span>
<a class="cap-action" id="rss" title="Subscribe" href="/"> 
 <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 24 24"> 
  <path fill="currentColor" d="M5 21q-.825 0-1.412-.587T3 19q0-.825.588-1.412T5 17q.825 0 1.413.588T7 19q0 .825-.587 1.413T5 21m13.5 0q-.65 0-1.088-.475T16.9 19.4q-.275-2.425-1.312-4.537T12.9 11.1q-1.65-1.65-3.762-2.687T4.6 7.1q-.65-.075-1.125-.512T3 5.5q0-.65.45-1.062t1.075-.363q3.075.275 5.763 1.563t4.737 3.337q2.05 2.05 3.338 4.738t1.562 5.762q.05.625-.363 1.075T18.5 21m-6 0q-.625 0-1.075-.437T10.85 19.5q-.225-1.225-.787-2.262T8.65 15.35q-.85-.85-1.888-1.412T4.5 13.15q-.625-.125-1.062-.575T3 11.5q0-.65.45-1.075t1.075-.325q1.825.25 3.413 1.063t2.837 2.062q1.25 1.25 2.063 2.838t1.062 3.412q.1.625-.325 1.075T12.5 21"></path>
 </svg>
 </a>
</div>
<div class="widget-body fs14">
<?php $this->widget('Widget_Contents_Post_Recent','pageSize=5')->to($news);?>
  <?php if($news->have()):?>
    <?php while($news->next()): ?>   
        <a class="item title" href="<?php $news->permalink();?>">
        <span class="title"><?php $news->title(); ?></span>
          </a>
    <?php endwhile; ?>
  <?php endif; ?>
</div></widget>

​<?php endif; ?>



<?php if ($this->options->right == 'show' && $this->fields->saysaysay == '1'): ?>
<widget class="widget-wrapper timeline"> 
<div class="widget-body fs14"> 
<?php 
$idq = $this->options->sayleftn; 
$iddq = $this->options->sayleftnn;  // 直接获取当前文章的 mid
if ($idq && $iddq) {
    $params = "pageSize=".$idq."&parentId=".$iddq;
    $this->widget('Widget_Comments_Recent', $params)->to($commentss);
}
?>
<div class="tag-plugin timeline">
 
<?php if ($commentss->have()): ?>
<?php while($commentss->next()): ?>
 <div class="timenode"> 
 <div class="header">
 <span><?php $commentss->date('Y-m-d H:i:s'); ?></span>
 </div> 
<div class="body"> 
<?php $commentss->content(); ?>
</div>
 </div>
<?php endwhile; ?>
<?php endif; ?> 
</div>
</div>
</widget>
<?php elseif ($this->options->right == 'show' && $this->is('index')): ?>
<widget class="widget-wrapper timeline"> 
<div class="widget-body fs14"> 
<?php 
$idq = $this->options->sayleftn; 
$iddq = $this->options->sayleftnn;  // 直接获取当前文章的 mid
if ($idq && $iddq) {
    $params = "pageSize=".$idq."&parentId=".$iddq;
    $this->widget('Widget_Comments_Recent', $params)->to($commentss);
}
?>
<div class="tag-plugin timeline"> 
<?php if ($commentss->have()): ?>
<?php while($commentss->next()): ?>
 <div class="timenode"> 
 <div class="header"> 
 <span><?php $commentss->date('Y-m-d H:i:s'); ?></span>
 </div> 
<div class="body"> 
<?php $commentss->content(); ?>
</div>
 </div>
<?php endwhile; ?>
<?php endif; ?> 
</div>

</div>
</widget>
<?php endif; ?>



</div></aside><div class="l_main" id="main">





    
