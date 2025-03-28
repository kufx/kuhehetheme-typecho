<?php
function generate_toc($content) {

    $content = getContentTest($content);

    // 匹配标准 HTML 标题标签
    preg_match_all('/<h(\d)>(.*)<\/h\d>/isU', $content, $matches);

    $toc = '<ol class="toc">';
    $minlevel = 6;
    for ($key = 0; $key < count($matches[2]); $key++) {
        $minlevel = min($minlevel, $matches[1][$key]);
    }
    $curlevel = $minlevel - 1;

    foreach ($matches[0] as $key => $match) {
        $ta = $content;
        $tb = strpos($ta, $match);
        $level = $matches[1][$key];
        $content = substr($ta, 0, $tb). "<a id=\"toc_title{$key}\" style=\"position:relative; top:-50px\"></a>". substr($ta, $tb);

        while ($level <= $curlevel) {
            array_pop($levelStack);
            $toc.= '</ol>';
            $curlevel--;
        }

        if ($level > $curlevel) {
            if ($curlevel === 0) {
                $toc.= '<li class="toc-item toc-level-'. $level. '">';
                $toc.= '<a class="toc-link" href="#toc_title'.$key.'">';
                $toc.= '<span class="toc-text">'. $matches[2][$key]. '</span>';
                $toc.= '</a>';
                $toc.= '<ol class="toc-child">';
                $levelStack[] = $level;
                $curlevel = $level;
            } else {
                $toc.= '<li class="toc-item toc-level-'. $level. '">';
                $toc.= '<a class="toc-link" href="#toc_title'.$key.'">';
                $toc.= '<span class="toc-text">'. $matches[2][$key]. '</span>';
                $toc.= '</a>';
                $toc.= '<ol class="toc-child">';
                $levelStack[] = $level;
                $curlevel = $level;
            }
        } else {
            $toc.= '</ol>';
            array_pop($levelStack);
            $curlevel--;

            $toc.= '<li class="toc-item toc-level-'. $level. '">';
            $toc.= '<a class="toc-link" href="#toc_title'.$key.'">';
            $toc.= '<span class="toc-text">'. $matches[2][$key]. '</span>';
            $toc.= '</a>';
            $toc.= '<ol class="toc-child">';
            $levelStack[] = $level;
            $curlevel = $level;
        }
    }

    while (!empty($levelStack)) {
        $toc.= '</ol>';
        array_pop($levelStack);
    }

    $toc.= '</ol>';

    // 添加 JavaScript 函数来处理滚动时的 active 类
    $toc.= '<script>
        var links = document.getElementsByClassName("toc-link");
        var anchors = [];

        for (var i = 0; i < links.length; i++) {
            var link = links[i];
            var targetId = link.getAttribute("href").substring(1);
            anchors.push(document.getElementById(targetId));
        }

        var currentActiveIndex = -1;  // 跟踪当前激活的索引

        window.addEventListener("scroll", function() {
            for (var i = 0; i < anchors.length; i++) {
                var anchor = anchors[i];
                if (anchor.getBoundingClientRect().top + 5 <= 0) {  // 调整这里，增加 5 的偏移
                    links[i].classList.add("active");
                    if (currentActiveIndex!== i) {  // 只有当索引变化时才更新
                        if (currentActiveIndex >= 0) {
                            links[currentActiveIndex].classList.remove("active");
                        }
                        currentActiveIndex = i;
                    }
                } else {
                    if (i === currentActiveIndex) {  // 如果当前项不再可见，取消激活
                        links[i].classList.remove("active");
                        currentActiveIndex = -1;
                    }
                }
            }
        });
    </script>';

    return $toc;
}

// 检测全局变量中是否有文章内容，并生成目录
if (isset($GLOBALS['articleContent'])) {
    $toc = generate_toc($GLOBALS['articleContent']);
}
?>