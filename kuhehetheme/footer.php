<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; 

require_once 'toc_generator.php';

?>

<footer class="page-footer footnote">
<hr></hr>
<div class="sitemap">
<div class="sitemap-group">
<span class="fs15">博客</span>
<a href="/">近期文章</a>

<?php \Widget\Contents\Page\Rows::alloc()->to($pages); ?>
<?php while ($pages->next()): ?>
<?php if ($pages->fields->headerDisplay3 == 1): ?>
<a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php if ($pages->fields->zdhxswz()): ?><?php $pages->fields->zdhxswz() ?><?php endif; ?></a>
<?php endif; ?>
<?php endwhile; ?>
</div>

<div class="sitemap-group">
<span class="fs15">我的站点</span>
<?php generatefooter2();?>
</div>

<div class="sitemap-group"><span class="fs15">首页友链</span>
<?php generatefooter3();?>
</div>


<div class="sitemap-group">
<span class="fs15">其他</span>
<?php generatefooter4();?>
</div>

</div>

<div class="text">

总访客 <?php echo theAllViews();?><br>
<?php $this->options->footer内容(); ?>
<br>
&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('由 <a href="https://typecho.org">Typecho</a> 强力驱动'); ?>.
</div>




</footer>




<div class="main-mask" onclick="sidebar.dismiss()"></div></div>


<aside class="l_right">

<div class="widgets">

<?php if($this->is('index')): ?>

<?php else: ?>

<widget class="widget-wrapper toc" id="data-toc" collapse="false" style="border-radius:15px;">
<div class="widget-header dis-select">
<span class="name">本文目录</span>
<a class="cap-action" onclick="sidebar.toggleTOC()" >
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6h11m-11 6h11m-11 6h11M4 6h1v4m-1 0h2m0 8H4c0-1 2-2 2-3s-1-1.5-2-1"/></svg></a></div>

<div class="widget-body">


<?php if (isset($toc)) { echo $toc; }?>



</div>

<div class="widget-footer">

<a class="top" onclick="util.scrollTop()"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 12c0-4.714 0-7.071 1.464-8.536C4.93 2 7.286 2 12 2c4.714 0 7.071 0 8.535 1.464C22 4.93 22 7.286 22 12c0 4.714 0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12Z"/><path stroke-linecap="round" stroke-linejoin="round" d="m9 15.5l3-3l3 3m-6-4l3-3l3 3"/></g></svg><span>回到顶部</span></a>

<!-- <a class="top" onclick="javascript:window.history.back();"><span>返回上一页</span></a> -->


<?php if($this->user->hasLogin()):?>
<?php if ($this->is('post') or $this->is('page')): ?>
<a target="_blank" href="<?php if ($this->is('post')): ?><?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid;?><?php elseif ($this->is('page')): ?><?php $this->options->adminUrl(); ?>write-page.php?cid=<?php echo $this->cid;?><?php endif;?>" style="font-weight:bold"><?php _e('编辑'); ?></a>
<?php endif; ?>
<?php endif;?>
</div>

</widget>

<?php endif; ?>


<?php if ($this->is('single') && $this->fields->rightnotice): ?>
<widget class="widget-wrapper markdown"><div class="widget-header dis-select"><span class="name">⏰️本文提示</span></div><div class="widget-body fs14">
<?php $this->fields->rightnotice(); ?>
</div></widget>
<?php endif; ?>




<?php if ($this->options->right1 == 'show' && $this->fields->saysaysay == '1'): ?>
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
<?php elseif ($this->options->right1 == 'show' && $this->is('index')): ?>
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







<?php if ($this->is('single') && $this->fields->isrightshow == 1): ?>
<?php 
    $customFieldValue = $this->fields->functionorder; 
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
    $customFieldValue = $this->options->rightbar; 
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







</div></aside>






<div class="float-panel blur">
  <button type="button" style="display:none" class="laptop-only rightbar-toggle mobile" onclick="sidebar.rightbar()">
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6h11m-11 6h11m-11 6h11M4 6h1v4m-1 0h2m0 8H4c0-1 2-2 2-3s-1-1.5-2-1"></path></svg>
  </button>
  <button type="button" style="display:none" class="mobile-only leftbar-toggle mobile" onclick="sidebar.leftbar()">
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 11c0-3.771 0-5.657 1.172-6.828C4.343 3 6.229 3 10 3h4c3.771 0 5.657 0 6.828 1.172C22 5.343 22 7.229 22 11v2c0 3.771 0 5.657-1.172 6.828C19.657 21 17.771 21 14 21h-4c-3.771 0-5.657 0-6.828-1.172C2 18.657 2 16.771 2 13z"></path><path id="sep" stroke-linecap="round" d="M5.5 10h6m-5 4h4m4.5 7V3"></path></g></svg>
  </button>
</div>
</div>


<!-- end .row -->
    </div>

</div><!-- end #body -->

<div class="scripts">
​
      
<script>
<?php if ($this->options->footjs()): ?>
<?php $this->options->footjs(); ?>
<?php endif; ?>
</script>


<!-- <script src="<?php $this->options->themeUrl(); ?>js/codecopy.js"></script> -->


<!-- <script src="<?php $this->options->themeUrl(); ?>js/high.js"></script> -->









<?php if ($this->is('single') && $this->fields->isLatex == 1): ?>
<script type = "text/javascript" >
  document.addEventListener("DOMContentLoaded", function() {
    renderMathInElement(document.body, {
      delimiters: [{
          left: "$$",
          right: "$$",
          display: true
      }, {
          left: "$",
          right: "$",
          display: false
      }],
      ignoredTags: ["script", "noscript", "style", "textarea", "pre", "code"],
      ignoredClasses: ["nokatex"]
    });
  });
</script>
<?php endif; ?>

   

<script>
  $(document).ready(function() {
    $("#comment_form").submit(function(e) {
      var email = $("input[name='email']").val();
      var nickname = $("input[name='author']").val();

      if (email === "" || nickname === "") {
        e.preventDefault(); 
        alert("邮箱和昵称是必填的，请填写完整！");
      }
    });
  });
</script>



<?php if ($this->is('post') && $this->fields->isright == 1): ?>
<script>
document.body.addEventListener('copy', function (e) {
    if (window.getSelection().toString() && window.getSelection().toString().length > 42) {
        setClipboardText(e);
        alert('商业转载请联系作者获得授权，非商业转载请注明出处，谢谢合作。');

    }
}); 

function setClipboardText(event) {
    var clipboardData = event.clipboardData || window.clipboardData;
    if (clipboardData) {
        event.preventDefault();
        var htmlData = ''
            
            + '著作权归作者所有。<br>'
            + '商业转载请联系作者获得授权，非商业转载请注明出处。<br>'
            + '作者：<?php $this->author() ?><br>'
            + '链接：' + window.location.href + '<br>'
            + '来源：<?php $this->options->siteUrl(); ?><br><br>'
            + window.getSelection().toString();
        var textData = ''
            + window.getSelection().toString()
            + '⭕️⭕️⭕️⭕️下方为版权信息⭕️⭕️⭕️⭕️\n'
            + '著作权归作者所有。\n'
            + '商业转载请联系作者获得授权，非商业转载请注明出处。\n'
            + '作者：<?php $this->author() ?>\n'
            + '链接：' + window.location.href + '\n'
            + '来源：<?php $this->options->siteUrl(); ?>\n\n'
            ;

        clipboardData.setData('text/html', htmlData);       clipboardData.setData('text/plain',textData);
    }
}
</script>
<?php endif; ?>



<!-- <script type="text/javascript">
  const ctx = {
    date_suffix: {
      just: `刚刚`,
      min: `分钟前`,
      hour: `小时前`,
      day: `天前`,
    },
    root : `/`,
  };

  // required plugins (only load if needs)
  if (`local_search`) {
    ctx.search = {};
    ctx.search.service = `local_search`;
    if (ctx.search.service == 'local_search') {
      let service_obj = Object.assign({}, `{"field":"all","path":"/search.json","content":true,"sort":"-date"}`);
      ctx.search[ctx.search.service] = service_obj;
    }
  }
  const def = {
    avatar: `https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/avatar/round/3442075.svg`,
    cover: `https://gcore.jsdelivr.net/gh/cdn-x/placeholder@1.0.12/cover/76b86c0226ffd.svg`,
  };
  const deps = {
    jquery: `https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js`,
    marked: `https://cdn.jsdelivr.net/npm/marked@13.0.1/lib/marked.umd.min.js`
  }
</script> -->

<script>
  const sidebar = {
    leftbar: () => {
      if (l_body) {
        l_body.toggleAttribute('leftbar');
        l_body.removeAttribute('rightbar');
      }
    },
    rightbar: () => {
      if (l_body) {
        l_body.toggleAttribute('rightbar');
        l_body.removeAttribute('leftbar');
      }
    },
    dismiss: () => {
      if (l_body) {
        l_body.removeAttribute('leftbar');
        l_body.removeAttribute('rightbar');
      }
    },
    toggleTOC: () => {
      document.querySelector('#data-toc').classList.toggle('collapse');
    }
  }
</script>

<script src="<?php $this->options->themeUrl('js/main.js'); ?>" defer=""></script>





<script type="text/javascript">
  const applyTheme = (theme) => {
    if (theme === 'auto') {
      document.documentElement.removeAttribute('data-theme')
    } else {
      document.documentElement.setAttribute('data-theme', theme)
    }

    applyThemeToGiscus(theme)
  }

  const applyThemeToGiscus = (theme) => {
    theme = theme === 'auto' ? 'preferred_color_scheme' : theme

    const cmt = document.getElementById('giscus')
    if (cmt) {
      // This works before giscus load.
      cmt.setAttribute('data-theme', theme)
    }

    const iframe = document.querySelector('#comments > section.giscus > iframe')
    if (iframe) {
      // This works after giscus loaded.
      const src = iframe.src
      const newSrc = src.replace(/theme=[\w]+/, `theme=${theme}`)
      iframe.src = newSrc
    }
  }

  const switchTheme = () => {
    // light -> dark -> auto -> light -> ...
    const currentTheme = document.documentElement.getAttribute('data-theme')
    let newTheme;
    switch (currentTheme) {
      case 'light':
        newTheme = 'dark'
        break
      case 'dark':
        newTheme = 'auto'
        break
      default:
        newTheme = 'light'
    }
    applyTheme(newTheme)
    window.localStorage.setItem('Stellar.theme', newTheme)

    const messages = {
      light: `切换到浅色模式`,
      dark: `切换到深色模式`,
      auto: `切换到跟随系统配色`,
    }
    hud?.toast?.(messages[newTheme])
  }

  (() => {
    // Apply user's preferred theme, if any.
    const theme = window.localStorage.getItem('Stellar.theme')
    if (theme !== null) {
      applyTheme(theme)
    }
  })()
</script>

<script>
  // https://www.npmjs.com/package/vanilla-lazyload
  // Set the options globally
  // to make LazyLoad self-initialize
  window.lazyLoadOptions = {
    elements_selector: ".lazy",
  };
  // Listen to the initialization event
  // and get the instance of LazyLoad
  window.addEventListener(
    "LazyLoad::Initialized",
    function (event) {
      window.lazyLoadInstance = event.detail.instance;
    },
    false
  );
  document.addEventListener('DOMContentLoaded', function () {
    window.lazyLoadInstance?.update();
  });
</script>


<!-- <script defer>
window.addEventListener('DOMContentLoaded', (event) => {
ctx.services = Object.assign({}, JSON.parse(`{"mdrender":{"js":"https://www.kuhehe.top/js/services/mdrender.js"},"siteinfo":{"js":"/js/services/siteinfo.js","api":"https://site.kuhehe.top/api/v1?url={href}"},"ghinfo":{"js":"/js/services/ghinfo.js"},"sites":{"js":"/js/services/sites.js"},"friends":{"js":"/js/services/friends.js"},"timeline":{"js":"https://www.kuhehe.top/js/services/timeline.js"},"fcircle":{"js":"https://www.kuhehe.top/js/services/fcircle.js"},"weibo":{"js":"/js/services/weibo.js"},"memos":{"js":"https://www.kuhehe.top/js/services/memos.js"}}`));
for (let id of Object.keys(ctx.services)) {
const js = ctx.services[id].js;
if (id == 'siteinfo') {
ctx.cardlinks = document.querySelectorAll('a.link-card[cardlink]');
if (ctx.cardlinks?.length > 0) {
utils.js(js, { defer: true }).then(function () {
setCardLink(ctx.cardlinks);
});
}
} else {
const els = document.getElementsByClassName(`ds-${id}`);
if (els?.length > 0) {
utils.jq(() => {
if (id == 'timeline' || 'memos' || 'marked') {
utils.js(deps.marked).then(function () {
utils.js(js, { defer: true });
});
} else {
utils.js(js, { defer: true });
}
});
}
}
}
});
</script> -->

<!-- <script>
window.addEventListener('DOMContentLoaded', (event) => {
ctx.search = {
path: `/search.json`,
}
utils.js('https://www.kuhehe.top//js/search/local-search.js', { defer: true });
});
</script><script>
window.FPConfig = {
delay: 0,
ignoreKeywords: [],
maxRPS: 5,
hoverDelay: 25
};
</script> -->
<!-- <script defer src="https://cdn.bootcdn.net/ajax/libs/flying-pages/2.1.2/flying-pages.min.js"></script> -->




<script defer src="
https://cdn.jsdelivr.net/npm/vanilla-lazyload@19.1.3/dist/lazyload.min.js
"></script>


<script> 
// https://www.npmjs.com/package/vanilla-lazyload
// Set the options globally
// to make LazyLoad self-initialize
window.lazyLoadOptions = {
elements_selector: ".lazy",
};
// Listen to the initialization event
// and get the instance of LazyLoad
window.addEventListener(
"LazyLoad::Initialized",
function (event) {
window.lazyLoadInstance = event.detail.instance;
},
false
);
document.addEventListener('DOMContentLoaded', function () {
window.lazyLoadInstance?.update();
});
</script>
<!-- <script>
ctx.fancybox = {
selector: `.timenode p>img`,
css: `https://cdn.bootcdn.net/ajax/libs/fancyapps-ui/5.0.22/fancybox/fancybox.min.css`,
js: `https://cdn.bootcdn.net/ajax/libs/fancyapps-ui/5.0.22/fancybox/fancybox.umd.min.js`
};
var selector = '[data-fancybox]:not(.error)';
if (ctx.fancybox.selector) {
selector += `, ${ctx.fancybox.selector}`
}
var needFancybox = document.querySelectorAll(selector).length !== 0;
if (!needFancybox) {
const els = document.getElementsByClassName('ds-memos');
if (els != undefined && els.length > 0) {
needFancybox = true;
}
}
if (needFancybox) {
utils.css(ctx.fancybox.css);
utils.js(ctx.fancybox.js, { defer: true }).then(function () {
Fancybox.bind(selector, {
hideScrollbar: false,
Thumbs: {
autoStart: false,
},
caption: (fancybox, slide) => {
return slide.triggerEl.alt || slide.triggerEl.dataset.caption || null
}
});
})
}
</script> -->
<!-- <script>
window.addEventListener('DOMContentLoaded', (event) => {
const swiper_api = document.getElementById('swiper-api');
if (swiper_api != undefined) {
utils.css(`https://unpkg.com/swiper@10.3.1/swiper-bundle.min.css`);
utils.js(`https://unpkg.com/swiper@10.3.1/swiper-bundle.min.js`, { defer: true }).then(function () {
const effect = swiper_api.getAttribute('effect') || '';
var swiper = new Swiper('.swiper#swiper-api', {
slidesPerView: 'auto',
spaceBetween: 8,
centeredSlides: true,
effect: effect,
rewind: true,
pagination: {
el: '.swiper-pagination',
clickable: true,
},
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
},
});
})
}
});
</script> -->

<!-- <link rel="stylesheet" href="https://gcore.jsdelivr.net/npm/katex@0.16.4/dist/katex.min.css" integrity="sha384-vKruj+a13U8yHIkAyGgK1J3ArTLzrFGBbBc0tDp4ad/EyewESeXE/Iv67Aj8gKZ0" crossorigin="anonymous"> -->


<!-- <script defer src="https://gcore.jsdelivr.net/npm/katex@0.16.4/dist/katex.min.js" integrity="sha384-PwRUT/YqbnEjkZO0zZxNqcxACrXe+j766U2amXcgMg5457rve2Y7I6ZJSm2A0mS4" crossorigin="anonymous"></script> -->

<!-- <script defer src="https://gcore.jsdelivr.net/npm/katex@0.16.4/dist/contrib/auto-render.min.js" integrity="sha384-+VBxd3r6XgURycqtZ117nYw44OOcIax56Z4dCRWbxyPt0Koah1uHoK0o4+/RRE05" crossorigin="anonymous"onload="renderMathInElement(document.body);"></script> -->

<!-- <script>
document.addEventListener('DOMContentLoaded', function () {
window.codeElements = document.querySelectorAll('.code');
if (window.codeElements.length > 0) {
ctx.copycode = {
default_text: `Copy`,
success_text: `Copied`,
toast: `复制成功`,
};
utils.js('/js/plugins/copycode.js');
}
});
</script> -->


<script>
document.addEventListener("DOMContentLoaded", function() {
    var links = document.querySelectorAll('.tp-ad-text1 a');
    for (var i = 0; i < links.length; i++) {
        links[i].style.textDecoration = 'none';
    }
});
</script>




</body>
</html>
