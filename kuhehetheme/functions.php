<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;


function themeConfig($form)
{


    $logoUrl = new \Typecho\Widget\Helper\Form\Element\Text(
        'logoUrl',
        null,
        null,
        _t('侧边栏头像'),
        _t('会显示在左侧边栏的头像')
    );
    $form->addInput($logoUrl);


$logo = new Typecho_Widget_Helper_Form_Element_Text('logo', null, null, _t('首页头像'), _t('显示在文章主页的头像'));
    $form->addInput($logo);

$name = new Typecho_Widget_Helper_Form_Element_Text('name', null, null, _t('主页昵称'), _t('显示在主页顶部的字，不填很难看'));
    $form->addInput($name);



$leftimg = new Typecho_Widget_Helper_Form_Element_Text('leftimg', null, null, _t('左边栏背景图片，必填'), _t('填写渐变图片链接，不填的话，会不丝滑和难看'));
    $form->addInput($leftimg);


$logotxt1 = new \Typecho\Widget\Helper\Form\Element\Text(
        'logotxt1',
        null,
        null,
        _t('副标题1'),
        _t('在这里填入标题下方文字')
    );

    $form->addInput($logotxt1);

$logotxt2 = new \Typecho\Widget\Helper\Form\Element\Text(
        'logotxt2',
        null,
        null,
        _t('副标题2'),
        _t('鼠标移到网站标题，这里副标题会变成这个')
    );

    $form->addInput($logotxt2);


$description = new Typecho_Widget_Helper_Form_Element_Text('description', null, null, _t('网站描述'), _t('网站的描述信息'));
    $form->addInput($description);

    $sidebarBlock = new \Typecho\Widget\Helper\Form\Element\Checkbox(
        'sidebarBlock',
        [
            'ShowRecentPosts'    => _t('❌️左侧栏显示最近更新，别开，暂时有问题'),
            'Showxdhbt' => _t('显示左侧欢迎下方按钮'),
            'ShowCategory'       => _t('❌️显示分类'),
'Showhuanying1'       => _t('❌️显示左欢迎语'),
'Showhuanying2'       => _t('❌️显示右欢迎语'),
'Showhuanying3'       => _t('显示文章顶部广告'),
'Showrightbutton'       => _t('❌️显示右侧按钮'),
            'ShowArchive'        => _t('❌️显示归档，没用'),
            'ShowOther'          => _t('❌️显示其它杂项，没用')
        ],
        ['ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'],
        _t('侧边栏显示')
    );

    $form->addInput($sidebarBlock->multiMode());




$JADPost = new Typecho_Widget_Helper_Form_Element_Textarea(
        'JADPost',
        NULL,
        NULL,
        _t('文章页顶部广告'),
        _t('介绍：用于设置文章页顶部广告 <br />
         格式：广告图片 || 跳转链接 （中间使用两个竖杠分隔）<br />
         注意：如果您只想显示图片不想跳转，可填写：广告图片 || javascript:void(0)  <br />
         其他：一行一个，一行代表一个轮播广告图')
    );
    $form->addInput($JADPost);




$emoji_links = new Typecho_Widget_Helper_Form_Element_Textarea('emoji_links', null, 3, _t('文章行内表情数据'), _t('写法比如：别名|表情链接'));
    $form->addInput($emoji_links);




$commenton = new Typecho_Widget_Helper_Form_Element_Radio('commenton', array(
    'on' => _t('显示评论'),
    'off' => _t('关闭评论')
), 'on', _t('全站评论显示控制'), _t('默认显示评论'));
$form->addInput($commenton);



$搜索框提示 = new \Typecho\Widget\Helper\Form\Element\Text(
        '搜索框提示',
        null,
        null,
        _t('搜索框提示文字'),
        _t('在这里填入标题下方的下方文字')
    );
    $form->addInput($搜索框提示);



$zd = new \Typecho\Widget\Helper\Form\Element\Text(
        'zd',
        null,
        null,
        _t('置顶文章'),
        _t('这里写要置顶的文章cid')
    );
    $form->addInput($zd);


$tagnumber = new \Typecho\Widget\Helper\Form\Element\Text(
        'tagnumber',
        null,
        null,
        _t('❌️相关文章数'),
        _t('文章最后面，根据tag标签输出相关文章最大数量')
    );
    $form->addInput($tagnumber);



$leftbarshow = new Typecho_Widget_Helper_Form_Element_Textarea('leftbarshow', null, null, _t('左侧小组件'), _t('全站左侧小组件显示顺序，例如：Welcome2,RightButton,LeftWelcome,Navigation,tag,usercard'));
    $form->addInput($leftbarshow);


$rightbar = new Typecho_Widget_Helper_Form_Element_Textarea('rightbar', null, null, _t('右侧小组件'), _t('全站右侧小组件显示顺序，例如：Welcome2,RightButton,LeftWelcome,Navigation,tag,usercard'));
    $form->addInput($rightbar);



$侧边栏欢迎语 = new Typecho_Widget_Helper_Form_Element_Textarea('侧边栏欢迎语', null, null, _t('左侧边栏欢迎LeftWelcome'), _t('⭕️上面需开启开关才会显示，如果你不知道这个是啥，留着就好'));
    $form->addInput($侧边栏欢迎语);


$xdhbt = new Typecho_Widget_Helper_Form_Element_Textarea('xdhbt', null, 3, _t('左侧欢迎语内容下按钮'), _t('小导航内容下按钮可以填在这里，比如'));
    $form->addInput($xdhbt);


$leftnavnum = new Typecho_Widget_Helper_Form_Element_Text('leftnavnum', null, 3, _t('左侧小导航列数'), _t('一行显示几个，写1或2或3'));
    $form->addInput($leftnavnum);


$小导航内容 = new Typecho_Widget_Helper_Form_Element_Textarea('小导航内容', null, 3, _t('❌️左侧小导航内容'), _t('此项导航数据被下方代替，故弃用'));
    $form->addInput($小导航内容);


$linkzu = new Typecho_Widget_Helper_Form_Element_Textarea('linkzu', null, 3, _t('左侧小导航链接数据Navigation'), _t('小导航内容可以填在这里，比如：链接文本1|链接1|这里写颜色color|图标1、可不填,链接文本2|链接2|这里写颜色color|图标2等等'));
    $form->addInput($linkzu);




$右侧欢迎语 = new Typecho_Widget_Helper_Form_Element_Textarea('右侧欢迎语', null, null, _t('右侧欢迎语Welcome2'), _t('右侧栏想说什么，写在这里'));
    $form->addInput($右侧欢迎语);




$右侧按钮 = new Typecho_Widget_Helper_Form_Element_Textarea('右侧按钮', null, null, _t('右侧按钮'), _t('这里是显示在右侧边栏的🍎按钮'));
    $form->addInput($右侧按钮);


$right = new Typecho_Widget_Helper_Form_Element_Select('right', array(
        'show' => '开启',
        'hide' => '关闭'
    ), 'hide', _t('是否开启左侧时间线，仅主页显示'), _t('左右侧时间线不可同时开启！'));
    $form->addInput($right);


$right1 = new Typecho_Widget_Helper_Form_Element_Select('right1', array(
        'show' => '开启',
        'hide' => '关闭'
    ), 'hide', _t('是否开启右侧时间线，仅主页显示'), _t('已弃用，开启后会在右侧边栏显示下方填写的按钮'));
    $form->addInput($right1);


$sayleftn = new Typecho_Widget_Helper_Form_Element_Text('sayleftn', null, null, _t('侧边栏时间线动态显示条数timeline'), _t('直接写阿拉伯数字'));
    $form->addInput($sayleftn);


$sayleftnn = new Typecho_Widget_Helper_Form_Element_Text('sayleftnn', null, null, _t('侧边栏时间线，对应动态文章的mid'), _t('直接写阿拉伯数字'));
    $form->addInput($sayleftnn);




$项目 = new \Typecho\Widget\Helper\Form\Element\Textarea(
        '项目',
        null,
        null,
        _t('底部项目列表'),
        _t('这里填写项目代码')
    );
    $form->addInput($项目);

$首页友链 = new \Typecho\Widget\Helper\Form\Element\Textarea(
        '首页友链',
        null,
        null,
        _t('首页底部友链'),
        _t('在这里填写链接')
    );
    $form->addInput($首页友链);


$footer内容 = new Typecho_Widget_Helper_Form_Element_Textarea('footer内容', null, null, _t('底部内容'), _t('网站底部显示的文字内容，填写html标签'));
    $form->addInput($footer内容);




$recentn = new Typecho_Widget_Helper_Form_Element_Textarea('recentn', null, 5, _t('待定'), _t('待定'));
    $form->addInput($recentn);


$articleCopyright = new Typecho_Widget_Helper_Form_Element_Select('articleCopyright', array(
        'show' => '显示',
        'hide' => '不显示'
    ), 'show', _t('❌️显示原创声明'), _t('没用！开启后会在本篇文章底部显示版权声明。'));
    $form->addItem($articleCopyright);

$文章广告 = new Typecho_Widget_Helper_Form_Element_Textarea('文章广告', null, null, _t('文章广告内容'), _t('这里写的文章广告，会显示在每篇文章顶部'));
    $form->addInput($文章广告);



$footjs = new Typecho_Widget_Helper_Form_Element_Textarea('footjs', null, null, _t('自定义底部js内容'), _t('这里请直接填写js内容，不需要包裹'));
    $form->addInput($footjs);


$headcs = new Typecho_Widget_Helper_Form_Element_Textarea('headcs', null, null, _t('自定义头部css内容'), _t('这里请直接填写css内容，不需要包裹'));
    $form->addInput($headcs);




}






function themeFields($layout)
{


   
$Ar_Pword= new Typecho_Widget_Helper_Form_Element_Text('Ar_Pword', NULL, NULL, _t('📝🔒文章阅读密码'), _t('设置后文章将关闭显示，需要输入密码才可以阅读，允许中文，数字，英文字母'));
    $layout->addItem($Ar_Pword);


$headerDisplay = new Typecho_Widget_Helper_Form_Element_Radio('headerDisplay', array(
        '1' => _t('显示'),
        '0' => _t('不显示')
    ), '0', _t('🍁是否显示在头部导航栏'), _t('默认不显示'));
    $layout->addItem($headerDisplay);


$headerDisplay2 = new Typecho_Widget_Helper_Form_Element_Radio('headerDisplay2', array(
        '1' => _t('显示'),
        '0' => _t('不显示')
    ), '0', _t('🍁是否显示在左侧导航栏'), _t('默认不显示'));
    $layout->addItem($headerDisplay2);


$headerDisplay3 = new Typecho_Widget_Helper_Form_Element_Radio('headerDisplay3', array(
        '1' => _t('显示'),
        '0' => _t('不显示')
    ), '0', _t('🍁是否显示在底部'), _t('默认不显示'));
    $layout->addItem($headerDisplay3);



$zdhxswz = new Typecho_Widget_Helper_Form_Element_Text('zdhxswz', null, null, _t('🍁页面左侧及顶部导航栏显示文字'), _t('页面显示在左侧导航栏时，显示的文字，防止页面标题字数太多而不好看，若想显示出某页面，此项必填'));
    $layout->addItem($zdhxswz);


$subtitle = new Typecho_Widget_Helper_Form_Element_Textarea('subtitle', null, null, _t('🍁📝页面副标题'), _t('独立页面or文章副标题（一般用不到）'));
    $layout->addItem($subtitle);


$header1 = new Typecho_Widget_Helper_Form_Element_Radio('header1', array(
        '1' => _t('显示'),
        '0' => _t('不显示')
    ), '0', _t('🍁针对单独页面，是否显示顶部昵称头像等'), _t('默认不显示'));
    $layout->addItem($header1);



$header2 = new Typecho_Widget_Helper_Form_Element_Radio('header2', array(
        '1' => _t('显示'),
        '0' => _t('不显示')
    ), '0', _t('🍁针对单独页面，是否显示顶部导航'), _t('默认不显示'));
    $layout->addItem($header2);


$header3 = new Typecho_Widget_Helper_Form_Element_Radio('header3', array(
        '1' => _t('显示'),
        '0' => _t('不显示')
    ), '1', _t('🍁针对单独页面，是否显示banner上方的面包屑导航'), _t('默认显示'));
    $layout->addItem($header3);


$showsay = new Typecho_Widget_Helper_Form_Element_Radio('showsay', array(
        '1' => _t('显示'),
        '0' => _t('不显示')
    ), '0', _t('❌️💬📝文章内容是否在说说页面输出💔弃用'), _t('默认不显示'));
    $layout->addItem($showsay);



$saysay = new Typecho_Widget_Helper_Form_Element_Textarea('saysay', null, null, _t('🍁💬说说显示最多条数'), _t('这里写纯数字'));
    $layout->addItem($saysay);


$saysaysay = new Typecho_Widget_Helper_Form_Element_Radio('saysaysay', array(
        '1' => _t('开启'),
        '0' => _t('关闭')
    ), '1', _t('是否关闭本页时间线'), _t('默认开启，动态模板，必须关闭！！'));
    $layout->addItem($saysaysay);


$say1 = new Typecho_Widget_Helper_Form_Element_Textarea('say1', null, null, _t('🍁🈴合集页面指定字段'), _t('不同合集页面，这里写的东西不同'));
    $layout->addItem($say1);

$say2 = new Typecho_Widget_Helper_Form_Element_Textarea('say2', null, null, _t('📝🈴显示在合集页面的文章的指定字段'), _t('这里要写想显示在的合集页面对应的自定义字段'));
    $layout->addItem($say2);


$say3 = new Typecho_Widget_Helper_Form_Element_Radio('say3', array(
        '1' => _t('显示'),
        '0' => _t('不显示')
    ), '0', _t('📝🈴合集页面是否显示内容'), _t('决定是否显示文章全部内容，如果不显示，则只显示标题'));
    $layout->addItem($say3);


$say4 = new Typecho_Widget_Helper_Form_Element_Radio('say4', array(
        '1' => _t('显示'),
        '0' => _t('不显示')
    ), '0', _t('📝🈴在合集页面是否显示图片及摘要'), _t('文章被加入到某文章合集模板里可用，决这个适用于在不显示文章内容时使用！默认不显示，图片链接在banner头图那里写'));
    $layout->addItem($say4);


$say5 = new Typecho_Widget_Helper_Form_Element_Radio('say5', array(
        '1' => _t('显示'),
        '0' => _t('不显示')
    ), '0', _t('📝分类输出页面是否显示图片'), _t('在分类下输出时，决定是否显示大图，默认不显示，图片链接在头图那里写'));
    $layout->addItem($say5);

$showzy = new Typecho_Widget_Helper_Form_Element_Radio('showzy', array(
        '1' => _t('显示'),
        '0' => _t('不显示')
    ), '1', _t('📝文章是否显示在主页'), _t('如果只想要文章作为合集，而不想它显示在首页，可以选择不显示，分类详情页面也不会显示了'));
    $layout->addItem($showzy);


    $zhaiyao = new Typecho_Widget_Helper_Form_Element_Textarea('zhaiyao', null, null, ('📝自定义文章摘要'), _t('你如果想自己写摘要，在这里写即可，显示到文章封面'));
    $layout->addItem($zhaiyao);  //  注册


$banner = new Typecho_Widget_Helper_Form_Element_Select('banner', array(
        'show' => '显示',
        'hide' => '不显示'
    ), 'hide', _t('🍁📝显示文章or页面banner头图'), _t('开启后显示文章顶部图片，若开启，请填写下方头图链接'));
    $layout->addItem($banner);

    $image = new Typecho_Widget_Helper_Form_Element_Text('image', null, null, ('🍁📝文章头图'), _t('文章头图会显示在文章的顶部，若选择显示头图，请填写'));
    $layout->addItem($image);  //  注册

$mode = new Typecho_Widget_Helper_Form_Element_Select(
        'mode',
        array(
            '无图' => '无图模式',
            '大图' => '大图模式',
            '半图' => '半图模式'
        ),
        '无图',
        '📝文章显示方式',
        '介绍：用于设置当前文章在首页和搜索页的显示方式'
    );
    $layout->addItem($mode);


$imghight = new Typecho_Widget_Helper_Form_Element_Text('imghight', null, null, _t('📝封面大图高度'), _t('手机端文章封面图高度🍎单位px，不填则为默认高度'));
    $layout->addItem($imghight);


$datu = new Typecho_Widget_Helper_Form_Element_Text('datu', null, null, _t('📝文章封面大图链接'), _t('文章封面图半图和大图模式均使用此作为封面'));
    $layout->addItem($datu);  


$datutmetashow = new Typecho_Widget_Helper_Form_Element_Radio('datutmetashow', array(
        '1' => _t('显示'),
        '0' => _t('不显示')
    ), '1', _t('📝大图模式，是否显示文字'), _t('默认显示，如果选择不显示，你将不会看到封面上的任何文字'));
    $layout->addItem($datutmetashow);


$datutitleshow = new Typecho_Widget_Helper_Form_Element_Radio('datutitleshow', array(
        '1' => _t('显示'),
        '0' => _t('不显示')
    ), '1', _t('📝大图模式，是否显示大标题'), _t('默认显示'));
    $layout->addItem($datutitleshow);


$datutitle = new Typecho_Widget_Helper_Form_Element_Text('datutitle', null, null, _t('📝大图显示大标题'), _t('文章封面图大标题🍎大图模式可用'));
    $layout->addItem($datutitle); 


$datuposition = new Typecho_Widget_Helper_Form_Element_Radio('datuposition', array(
        '1' => _t('顶部'),
        '0' => _t('底部')
    ), '0', _t('📝大图模式，文字上下位置'), _t('默认底部'));
    $layout->addItem($datuposition);



$datu1 = new Typecho_Widget_Helper_Form_Element_Text('datu1', null, null, _t('📝大图上文字'), _t('文章封面图上文字🍎大图模式可用'));
    $layout->addItem($datu1); 

$datu2 = new Typecho_Widget_Helper_Form_Element_Text('datu2', null, null, _t('📝大图下文字'), _t('文章封面图🍎大图模式可用'));
    $layout->addItem($datu2);


$tagcolor = new Typecho_Widget_Helper_Form_Element_Text('tagcolor', null, null, _t('📝文章底部标签颜色'), _t('请写：green、red等等类似颜色，不填则为默认无色'));
    $layout->addItem($tagcolor);




$rightnotice = new Typecho_Widget_Helper_Form_Element_Textarea('rightnotice', null, null, _t('📝文章右侧栏提示文字'), _t('这里请填写html标签，markdown不可用，所以想换行请用换行的br标签'));
    $layout->addItem($rightnotice);


$mdbimg = new Typecho_Widget_Helper_Form_Element_Text('mdbimg', null, null, _t('🍎🍁针对没顶部页面的顶部图片'), _t('仅针对应用没顶部页面模板，普通文章不要动这里'));
    $layout->addItem($mdbimg);


$mdbtitle = new Typecho_Widget_Helper_Form_Element_Text('mdbtitle', null, null, _t('🍎🍁没顶部页面的显示标题'), _t('🍎仅针对应用没顶部页面模板，普通文章不要动这里'));
    $layout->addItem($mdbtitle);


$mdbbt = new Typecho_Widget_Helper_Form_Element_Textarea('mdbbt', null, null, _t('🍎🍁针对没顶部页面跳转按钮'), _t('仅针对没顶部页面🍎这里是显示右上角跳转按钮'));
    $layout->addItem($mdbbt);


    $isLatex = new Typecho_Widget_Helper_Form_Element_Radio('isLatex', 
    array(1 => _t('启用'),
    0 => _t('关闭')),
    0, _t('📝🍁LaTeX 渲染'), _t('默认关闭增加网页访问速度，如文章内存在LaTeX语法则需要启用'));
    $layout->addItem($isLatex);


$iscopycode = new Typecho_Widget_Helper_Form_Element_Radio('iscopycode', 
    array(1 => _t('启用'),
    0 => _t('关闭')),
    0, _t('📝🍁代码块复制'), _t('默认关闭增加网页访问速度，如文章想开启复制则需要启用，开启高亮，则此项就没用了'));
    $layout->addItem($iscopycode);



$ishighlight = new Typecho_Widget_Helper_Form_Element_Radio('ishighlight', 
    array(1 => _t('启用'),
    0 => _t('关闭')),
    0, _t('📝🍁代码块高亮1号'), _t('默认关闭增加网页访问速度，如文章想代码高亮则需要启用，需要手动写上语言，否则不高亮，自带代码复制'));
    $layout->addItem($ishighlight);


$ishighli = new Typecho_Widget_Helper_Form_Element_Radio('ishighli', 
    array(1 => _t('启用'),
    0 => _t('关闭')),
    0, _t('📝🍁代码块高亮2号'), _t('🐬这个比较好看，默认关闭增加网页访问速度，如文章想代码高亮则需要启用，否则不高亮，自带代码复制'));
    $layout->addItem($ishighli);


$fancybox = new Typecho_Widget_Helper_Form_Element_Radio('fancybox', 
    array(1 => _t('启用'),
    0 => _t('关闭')),
    0, _t('📝🍁图片fancybox'), _t('图片点击放大，默认关闭'));
    $layout->addItem($fancybox);



$isright = new Typecho_Widget_Helper_Form_Element_Radio('isright', 
    array(1 => _t('启用'),
    0 => _t('关闭')),
    0, _t('📝🍁复制版权提醒'), _t('默认关闭增加网页访问速度，如文章想开启则需要启用'));
    $layout->addItem($isright);





$headcode = new Typecho_Widget_Helper_Form_Element_Textarea('headcode', null, null, _t('📝🍁自定义插入head头部代码'), _t('一般不用填'));
    $layout->addItem($headcode);







$jiami = new Typecho_Widget_Helper_Form_Element_Textarea('jiami', null, null, _t('📝❌️加密文章提示文字'), _t('💔使用typecho默认加密时可用，可随意写，文章设置密码时填写，如填写了上方阅读密码，则此处忽略即可'));
    $layout->addItem($jiami);

$jiamimg = new Typecho_Widget_Helper_Form_Element_Textarea('jiamimg', null, null, _t('📝❌️加密文章提示右侧图片·方形'), _t('💔使用typecho默认加密时可用，需要设置二维码时填写，否则不显示图片，如填写了上方阅读密码，则此处忽略即可'));
    $layout->addItem($jiamimg);




$isleftshow = new Typecho_Widget_Helper_Form_Element_Radio('isleftshow', 
    array(1 => _t('启用'),
    0 => _t('关闭')),
    0, _t('📝🍁是否自定义左侧小组件顺序'), _t('默认显示全站左侧统一内容，如文章想开启则需要启用'));
    $layout->addItem($isleftshow);


$leftorder = new Typecho_Widget_Helper_Form_Element_Textarea('leftorder', null, null, _t('📝🍁左侧自定义组件显示顺序'), _t('请输入显示顺序，例如：Welcome2,RightButton,LeftWelcome'));
    $layout->addItem($leftorder);


$isrightshow = new Typecho_Widget_Helper_Form_Element_Radio('isrightshow', 
    array(1 => _t('启用'),
    0 => _t('关闭')),
    0, _t('📝🍁是否自定义右侧小组件顺序'), _t('默认显示全站右侧统一内容，如文章想开启则需要启用'));
    $layout->addItem($isrightshow);


$functionorder = new Typecho_Widget_Helper_Form_Element_Textarea('functionorder', null, null, _t('📝🍁右侧新增自定义组件显示顺序'), _t('开关开启后，请输入显示顺序，例如：Welcome2,RightButton,LeftWelcome'));
    $layout->addItem($functionorder);



  
}











function Postviews($archive) {
    $db = Typecho_Db::get();
    $cid = $archive->cid;
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `'.$db->getPrefix().'contents` ADD `views` INT(10) DEFAULT 0;');
    }
    $exist = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid))['views'];
    if ($archive->is('single')) {
        $cookie = Typecho_Cookie::get('contents_views');
        $cookie = $cookie ? explode(',', $cookie) : array();
        if (!in_array($cid, $cookie)) {
            $db->query($db->update('table.contents')
                ->rows(array('views' => (int)$exist+1))
                ->where('cid = ?', $cid));
            $exist = (int)$exist+1;
            array_push($cookie, $cid);
            $cookie = implode(',', $cookie);
            Typecho_Cookie::set('contents_views', $cookie);
        }
    }
    echo $exist == 0 ? '   暂无阅读' :'   <i class="fas fa-eye"></i> ' .$exist;
}




    function get_comment_at($coid){
    $db   = Typecho_Db::get();
    $prow = $db->fetchRow($db->select('parent,status')->from('table.comments')
        ->where('coid = ?', $coid));//当前评论
    $mail = "";
    $parent = @$prow['parent'];
    if ($parent != "0") {//子评论
        $arow = $db->fetchRow($db->select('author,status,mail')->from('table.comments')
            ->where('coid = ?', $parent));//查询该条评论的父评论的信息
        @$author = @$arow['author'];//作者名称
        $mail = @$arow['mail'];
        if(@$author && $arow['status'] == "approved"){//父评论作者存在且父评论已经审核通过
            if (@$prow['status'] == "waiting"){
                echo '<p class="commentReview">（评论正在审核中）</p>';
            }
            echo '<a href="#comment-' . $parent . '">@' . $author . '</a>';
        }else{//父评论作者不存在或者父评论没有审核通过
            if (@$prow['status'] == "waiting"){
                echo '<p class="commentReview">（评论正在审核中）</p>';
            }else{
                echo '';
            }
        }

    } else {//母评论，无需输出锚点链接
        if (@$prow['status'] == "waiting"){
            echo '<p class="commentReview">（评论正在审核中）</p>';
        }else{
            echo '';
        }
    }
    }





// 从主题自定义字段获取数据的函数
function get_emoji_links() {
    // 移除全局变量，改用 Typecho 标准方法获取配置
    $options = Typecho_Widget::widget('Widget_Options');
    
    // 直接获取字段值（合并原有两个判断逻辑）
    $customFieldValue = ($options && isset($options->emoji_links)) ? $options->emoji_links : '';

    if (empty($customFieldValue)) { 
        // 保持原始错误提示逻辑
        echo "自定义字段 emoji_links 为空";
        return []; 
    }

    // 保持原有分割和处理逻辑
    $lines = explode("\n", $customFieldValue);
    $emoji_links = []; 
    
    foreach ($lines as $line) { 
        $parts = explode('|', $line); 
        if (count($parts) === 2) { 
            $alias = trim($parts[0]); 
            $link = trim($parts[1]); 
            $emoji_links[$alias] = $link; 
        }
    }

    return $emoji_links; 
}






function getContentTest($content) {

// 定义一个全局变量来记录 copy 短代码的数量
    global $copyCount;
    $copyCount = 0;



    $pattern = '/\[mark color:(.*?)\](.*?)\[\/mark\]/';
    $replacement = '<mark class="tag-plugin colorful mark" color="$1">$2</mark>';
    $content = preg_replace($pattern, $replacement, $content);


   $pattern = '/\[hashtag color:(.*?)\](.*?)\[\/hashtag\]/';
    $replacement = '<a class="tag-plugin colorful hashtag" color="$1">$2</a>';
    $content = preg_replace($pattern, $replacement, $content);


$pattern = '/\[radio\](.*?)\[\/radio\]/';
    $replacement = '<div class="tag-plugin colorful checkbox"> <input type="radio"></input><span>$1</span> </div>';
    $content = preg_replace($pattern, $replacement, $content);


$pattern = '/\[radio check\](.*?)\[\/radio\]/';
    $replacement = '<div class="tag-plugin colorful checkbox"> <input type="radio" checked=""></input><span>$1</span> </div>';
    $content = preg_replace($pattern, $replacement, $content);


$pattern = '/\[radio (.*?) check\](.*?)\[\/radio\]/';
    $replacement = '<div class="tag-plugin colorful checkbox" color="red" symbol="$1"> <input type="checkbox" checked=""></input><span>$2</span> </div>';
    $content = preg_replace($pattern, $replacement, $content);



    
// 修改 fold 短代码的处理
    $pattern = '/\[fold summary:(.*?) color:(.*?)(?: open)?\]((?:.|\n)*?)\[\/fold\]/s';
    $replacement = function ($matches) {
        $openAttr = (stripos($matches[0], 'open')!== false)? 'open=""' : '';
        $bodyContent = $matches[3];

        // 处理代码块
        $bodyContent = preg_replace('/```(.*?)```/s', '<pre>$1</pre>', $bodyContent);

        return '<details class="tag-plugin colorful folding" color="'.$matches[2].'" '.$openAttr.'> 
        <summary> 
        <span>'.$matches[1].'</span>
        </summary>

        <div class="body"> 
        <p>'.$bodyContent.'</p>
        </div>
        </details>';
    };
    $content = preg_replace_callback($pattern, $replacement, $content);



// 修改 note 短代码的处理
    $pattern = '/\[note title:(.*?) color:(.*?)\]((?:.|\n)*?)\[\/note\]/s';
    $replacement = function ($matches) {
        $color = $matches[2];
        $title = $matches[1];
        $bodyContent = $matches[3];

        // 处理代码块
        $bodyContent = preg_replace('/```(.*?)```/s', '<pre>$1</pre>', $bodyContent);

        return '<div class="tag-plugin colorful note" color="'.$color.'"><div style="font-weight:bold" class="title">'.$title.'</div><div class="body">'.$bodyContent.'</div></div>';
    };
    $content = preg_replace_callback($pattern, $replacement, $content);



$pattern = '/\[searchtb\]/';
    $replacement = '<center><body onclick="handleClickOutsideSearch()"><input type="text" style="background:var(--card);color:var(--text);font-family:inherit" id="searchInput" oninput="searchTables()" onfocus="expandSearchInput()" onmousedown="expandSearchInput()" ontouchstart="expandSearchInput()" placeholder="输入【关键词】搜索..."><span id="resultInfo"></span> </center>';
    $content = preg_replace($pattern, $replacement, $content);



// 诗词短代码
    $pattern = '/\[poetry title:(.*?) meta:(.*?) footer:(.*?)\](.*?)\[\/poetry\]/s';
    $replacement = function ($matches) {
        $text = $matches[4];
        $text = preg_replace('/\n/', '<br></br><br></br>', $text);
        return '<div class="tag-plugin poetry"> 
        <div class="content"> 
        <div class="title">'. $matches[1]. '</div>
        <div class="meta">
        <span>'. $matches[2]. '</span>
        </div>
        <div class="body"> 
        <p>'. $text. '</p>
        </div>
        <div class="footer">'. $matches[3]. '</div>
        </div>
        </div>';
    };
    $content = preg_replace_callback($pattern, $replacement, $content);


// 卷轴短代码
$pattern = '/\[reel title:(.*?) meta:(.*?) footer:(.*?) date:(.*?)\](.*?)\[\/reel\]/s';
    $replacement = function ($matches) {
        $text = $matches[5];
        $text = preg_replace('/\n/', '<br></br><br></br>', $text);
        return '<div class="tag-plugin reel"> 
        <div class="content"> 
        <div class="title">'. $matches[1]. '</div> 
        <div class="meta"> 
        <span>'. $matches[2]. '</span>
        </div> 
        <div class="body"> 
        <div class="main"> 
        <p>'. $text. '</p>
        </div>
        </div> 
        <div class="date">'. $matches[4]. '</div> 
        <div class="footer">'. $matches[3]. '</div>
        </div>
        </div>';
    };
    $content = preg_replace_callback($pattern, $replacement, $content);


// 按钮标签


 $pattern = '/\[button title:(.*?) href:(.*?)\]/';
    $replacement = '<a class="tag-plugin colorful button" color="theme" title="$1" href="$2"> <span>$1</span>
</a>';
    $content = preg_replace($pattern, $replacement, $content);



$pattern = '/\[buttondown title:(.*?) href:(.*?)\]/';
    $replacement = '<a class="tag-plugin colorful button" color="theme" title="$1" href="$2"><i class="fas fa-download" /></i><span>$1</span>
</a>';
    $content = preg_replace($pattern, $replacement, $content);


$pattern = '/\[buttonwarn title:(.*?) href:(.*?)\]/';
    $replacement = '<a class="tag-plugin colorful button" color="theme" title="$1" href="$2"><i class="fas fa-exclamation-triangle" /></i><span>$1</span>
</a>';
    $content = preg_replace($pattern, $replacement, $content);


$pattern = '/\[buttonhome title:(.*?) href:(.*?)\]/';
    $replacement = '<a class="tag-plugin colorful button" color="theme" title="$1" href="$2"><i class="fas fa-home" /></i><span>$1</span>
</a>';
    $content = preg_replace($pattern, $replacement, $content);


$pattern = '/\[buttonfolder title:(.*?) href:(.*?)\]/';
    $replacement = '<a class="tag-plugin colorful button" color="theme" title="$1" href="$2"><i class="fas fa-folder-open" /></i><span>$1</span>
</a>';
    $content = preg_replace($pattern, $replacement, $content);


$pattern = '/\[buttonxs title:(.*?) href:(.*?)\]/';
    $replacement = '<a class="tag-plugin colorful button" color="theme" size="xs" title="$1" target="_blank" rel="external nofollow noopener noreferrer" href="$2"> 
 <span>$1</span>
 </a>';
    $content = preg_replace($pattern, $replacement, $content);





// 新增的 copy 短代码替换规则
    $pattern = '/\[copy prefix:(.*?)\](.*?)\[\/copy\]/s';
    $replacement = function ($matches) {
        global $copyCount;
        $copyCount++;  // 每次匹配到 copy 短代码时，数量加 1
        $copyId = 'copy_'. $copyCount;  // 生成递增的 id
        return '<div class="tag-plugin copy"> 
        <span>'. $matches[1]. '</span> 
        <input class="copy-area" id="'. $copyId. '" value="'. $matches[2]. '"></input>
        <button class="copy-btn" onclick="util.copy(\''. $copyId. '\', \'复制成功\')"=""> 
        <svg class="icon copy-btn" viewbox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"> 
 <path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
 </svg>
        </button>
        </div>';
    };
    $content = preg_replace_callback($pattern, $replacement, $content);




// 新增的 psw 短代码替换规则
    $pattern = '/\[psw (.*?)\]/';
    $replacement = '<psw>$1</psw>';
    $content = preg_replace($pattern, $replacement, $content);


// 新增的 u 短代码替换规则
    $pattern = '/\[u (.*?)\]/';
    $replacement = '<u>$1</u>';
    $content = preg_replace($pattern, $replacement, $content);


// 新增的 emp 短代码替换规则
    $pattern = '/\[emp (.*?)\]/';
    $replacement = '<emp>$1</emp>';
    $content = preg_replace($pattern, $replacement, $content);


// 新增的 wavy 短代码替换规则
    $pattern = '/\[wavy (.*?)\]/';
    $replacement = '<wavy>$1</wavy>';
    $content = preg_replace($pattern, $replacement, $content);


// 新增的 kbd 短代码替换规则
    $pattern = '/\[kbd (.*?)\]/';
    $replacement = '<kbd>$1</kbd>';
    $content = preg_replace($pattern, $replacement, $content);









// 图片fancybox点击放大
// 图片    $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i';
// 图片    $replacement = '<a href="$1" data-fancybox="gallery" /><img src="$1" alt="" title="点击放大图片"></a>';
// 图片    $content = preg_replace($pattern, $replacement, $content);   




// 相册瀑布流

$pattern = '/\[gallery layout:(.*?)\](.*?)\[\/gallery\]/s';
    $replacement = '<div class="tag-plugin gallery flow-box" size="s" ratio="square">$2</div>';
    $content = preg_replace($pattern, $replacement, $content);





$pattern = '/<img\s+([^>]*?)\s*src="([^"]+)"([^>]*?)>/i';
    $replacement = '<img $1 class="lazy" data-src="$2" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQIHWNgAAIAAAUAAY27m/MAAAAASUVORK5CYII=" $3>';
    $content = preg_replace($pattern, $replacement, $content);



$emoji_links = get_emoji_links();

    $pattern = '/\[emoji\s*"([^"]+)"\]/';
    $replacement = function ($matches) use ($emoji_links) {
        $alias = $matches[1];
        if (isset($emoji_links[$alias])) {
            return '<span class="tag-plugin emoji"><img class="inline" src="'. $emoji_links[$alias]. '" data-src="'. $emoji_links[$alias]. '"></img></span>';
        } else {
            // 如果不是别名而是直接的链接
            if (filter_var($alias, FILTER_VALIDATE_URL)) {
                return '<span class="tag-plugin emoji"><img class="inline" src="'. $alias. '" data-src="'. $alias. '"></img></span>';
            }
            return $matches[0]; 
        }
    };

    $content = preg_replace_callback($pattern, $replacement, $content);



// 生成标题锚点

if (preg_match_all('/<h(\d)>(.*)<\/h\d>/isU', $content, $outarr)){
    $toc_out = "";
    $minlevel = 6;
    for ($key=0; $key<count($outarr[2]); $key++) $minlevel = min($minlevel, $outarr[1][$key]);
    $curlevel = $minlevel-1;
    for ($key=0; $key<count($outarr[2]); $key++) {
        $ta = $content;
        $tb = strpos($ta, $outarr[0][$key]);
        $level = $outarr[1][$key];
        $content = substr($ta, 0, $tb). "<a id=\"toc_title{$key}\" style=\"position:relative; top:0px\"></a>". substr($ta, $tb);
        if ($level > $curlevel) $toc_out.=str_repeat("<ol>\n", $level-$curlevel);
        elseif ($level < $curlevel) $toc_out.=str_repeat("</ol>\n", $curlevel-$level);
        $curlevel = $level;
        $toc_out .= "<li><a href=\"#toc_title{$key}\">{$outarr[2][$key]}</a></li>\n";
    }
    $content = "". $content;
}

    return $content;
    
}










// 回复可见
Typecho_Plugin::factory('Widget_Abstract_Contents')->excerptEx = array('z97hide','one');
Typecho_Plugin::factory('Widget_Abstract_Contents')->contentEx = array('z97hide','one');
class z97hide {
    public static function one($con,$obj,$text)
    {
      $text = empty($text)?$con:$text;
      if(!$obj->is('single')){
      $text = preg_replace("/\[hide\](.*?)\[\/hide\]/sm",'',$text);
      }
      
               return $text;
}
}
// 登录可见
Typecho_Plugin::factory('Widget_Abstract_Contents')->excerptEx = array('z97login','one');
Typecho_Plugin::factory('Widget_Abstract_Contents')->contentEx = array('z97login','one');
class z97login {
    public static function one($con,$obj,$text)
    {
      $text = empty($text)?$con:$text;
      if(!$obj->is('single')){
      $text = preg_replace("/\[login\](.*?)\[\/login\]/sm",'',$text);
      }
      return $text;
    }
}









/**
* 数学算术评论验证码
*/
function themeInit($comment){
    if ($comment->is('single')) {
        $comment = spam_protection_pre($comment);
    }
}

function spam_protection_math(){
    $num1=rand(0,9);
    $num2=rand(0,9);
    echo "<label for=\"math\">请输入 <i>$num1 + $num2 = ?</i> 的计算结果：</label>\n";
    echo "<input style=\"background:var(--block);color:var(--text);border-color:var(--text-meta)\" type=\"text\" name=\"sum\" class=\"text\" value=\"\" size=\"25\" tabindex=\"4\">\n";
    echo "<input type=\"hidden\" name=\"num1\" value=\"$num1\">\n";
    echo "<input type=\"hidden\" name=\"num2\" value=\"$num2\">";
}

function spam_protection_pre($commentdata){
    $user = Typecho_Widget::widget('Widget_User');
    if (isset($_REQUEST['text']) && $_REQUEST['text'] != null && !$user->hasLogin()) {
        if($_POST['num1'] == null || $_POST['num2'] == null) {
            throw new Typecho_Widget_Exception(_t('请输入验证码'));
        }
        $sum=$_POST['sum'];
        switch($sum){
            case $_POST['num1']+$_POST['num2']:
                break;
            case null:
                throw new Typecho_Widget_Exception(_t('请输入验证码'));
                break;
            default:
                throw new Typecho_Widget_Exception(_t('验证码错误，请重新输入'));
        }
    }
    return $commentdata;
}













//总访问量
    function theAllViews()
        {
            $db = Typecho_Db::get();
            $row = $db->fetchAll('SELECT SUM(VIEWS) FROM `typecho_contents`');
                echo number_format($row[0]['SUM(VIEWS)']);
        }















// 定义了右侧公告和右侧按钮函数

function showSidebarBlockIfWelcome2($options, $post) {
    
    echo '<widget class="widget-wrapper markdown"><div class="widget-header dis-select"><span class="name">🐬简单公告</span></div><div class="widget-body fs14">';
    $options->右侧欢迎语();
    echo '</div></widget>';

}

function showSidebarBlockIfRightButton($options, $post) {    
    echo '<widget class="widget-wrapper linklist"><div class="widget-body fs14">';
    echo '<div class="linklist left" style="grid-template-columns:repeat(1,1fr);">';
    generateyoubt();
    echo '</div></div></widget>';  
}






function showLeftSidebarWelcome($options, $post) {
    
        echo '<widget class="widget-wrapper markdown"><div class="widget-header dis-select"><span class="name">⏰️ 欢迎光临</span></div><div class="widget-body fs14">';
        echo '<p>';
        $options->侧边栏欢迎语();
        echo '</p>';
        if (is_array($options->sidebarBlock) && in_array('Showxdhbt', $options->sidebarBlock)) {
            echo '<div class="linklist center" style="grid-template-columns:repeat(<1,1fr);">';
            $options->xdhbt();
            echo '</div>';
        }
        echo '</p></div></widget>';    
}








function showNavigationWidget($options, $post) {
    echo '<widget class="widget-wrapper markdown">'."\n";
    echo '    <div class="widget-header dis-select">'."\n";
    echo '        <span class="name">🍎 小导航</span>'."\n";
    echo '    </div>'."\n";
    echo '    <div class="widget-body fs14">'."\n";
    echo '        <div class="linklist center" style="grid-template-columns:repeat('.$options->leftnavnum.',1fr);">'."\n";
    echo '            <a class="link" title="黑暗" href="javascript:switchTheme()" rel="external nofollow noreferrer">'."\n";
    echo '                <div class="flex">'."\n";
    echo '<svg t="1714889937788" class="icon" viewbox="0 0 1025 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1959" width="200" height="200"><path d="M510.240572 0.448971a37.925879 37.925879 0 0 1 31.977975 19.186785 38.37357 38.37357 0 0 1 0 37.925878 317.157558 317.157558 0 0 0 276.929265 472.762385 311.27361 311.27361 0 0 0 147.930113-36.966539 38.37357 38.37357 0 0 1 37.925879 0.959339 39.716645 39.716645 0 0 1 18.035578 33.257094A511.647603 511.647603 0 1 1 510.240572 0.448971z m416.864884 267.271916a20.082168 20.082168 0 0 1 20.21008 19.762389 55.449809 55.449809 0 0 0 55.577721 54.362558 19.762389 19.762389 0 1 1 0 39.524777 55.449809 55.449809 0 0 0-55.577721 54.362558 20.274036 20.274036 0 0 1-40.484116 0 55.449809 55.449809 0 0 0-55.577721-54.362558 19.762389 19.762389 0 1 1 0-39.524777h2.941974a55.449809 55.449809 0 0 0 52.635747-54.298602 20.082168 20.082168 0 0 1 20.21008-19.762389zM736.069032 0.448971a19.762389 19.762389 0 0 1 19.698433 19.698432 127.911901 127.911901 0 0 0 127.911901 127.911901 19.698433 19.698433 0 1 1 0 39.396866 127.911901 127.911901 0 0 0-127.911901 127.9119 19.698433 19.698433 0 0 1-39.460821 0 127.911901 127.911901 0 0 0-127.911901-127.9119 19.762389 19.762389 0 0 1-19.442609-14.326133 19.762389 19.762389 0 0 1 19.186785-24.303261 127.911901 127.911901 0 0 0 127.911901-127.911901 19.762389 19.762389 0 0 1 20.018212-20.465904z" p-id="1960" fill="#edc90d"></path></svg>';
    echo '                    <span>黑暗</span>'."\n";
    echo '                </div>'."\n";
    echo '            </a>'."\n";

    // 调用 generateCustomLinks 函数生成自定义链接
    generateCustomLinks();

    echo '        </div>'."\n";
    echo '    </div>'."\n";
    echo '</widget>';
}






function generateCustomLinks() {
    // 删除 global $options，改用 Typecho 标准方法获取配置
    $options = Typecho_Widget::widget('Widget_Options');
    
    // 检查配置对象是否有效
    if (!$options || !isset($options->linkzu)) {
        echo "自定义字段 linkzu 未配置";
        return;
    }
    
    $customFieldValue = $options->linkzu;
    
    if (empty($customFieldValue)) {
        echo "自定义字段 linkzu 为空";
        return;
    }

    $links = explode(',', $customFieldValue);

    foreach ($links as $link) {
        $parts = explode("|", trim($link)); // 添加 trim 防止空格干扰
        if (count($parts) >= 3) {
            $text = htmlspecialchars($parts[0]); // 防止 XSS
            $href = htmlspecialchars($parts[1]);
            $color = htmlspecialchars($parts[2]);
            $icon = isset($parts[3]) ? htmlspecialchars($parts[3]) : '';

            // 优化 URL 对比逻辑（考虑带斜杠和不带斜杠的情况）
            $currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $isActive = rtrim($currentPath, '/') === rtrim($href, '/');
            $class = $isActive ? 'link active' : 'link';

            // 使用 printf 提升可读性
            printf(
                '<a class="%s" title="%s" href="%s" style="color:%s"><div class="flex">%s<span>%s</span></div></a>',
                $class,
                $text,
                $href,
                $color,
                $icon,
                $text
            );
        }
    }
}














function showUsercard($options, $post) {

    echo '<widget class="widget-wrapper user-card ghuser">';
    echo ' <div class="widget-body ds-ghinfo"> ';
    echo '<div class="avatar">';
    
    
    echo '<img id="avatar_url" src="https://q1.qlogo.cn/g?b=qq&nk=3111349763&s=640" />';
    
        
    echo '</div>';
    echo '<p class="username" ff="title" type="text" id="name"></p>';
    echo '<p class="bio" type="text" id="bio"></p>';

    echo '<div class="buttons"> ';
    $stat = Typecho_Widget::widget('Widget_Stat');
    $stat->to($stat);
    echo '<a class="btn" target="_blank" rel="noopener" href="/author/1/"> ';
    echo '<span class="title" type="text" id="followers">'. $stat->publishedPostsNum(). '</span>';
    echo '<span class="desc">文章</span>';
    echo ' </a>';

    $stat = Typecho_Widget::widget('Widget_Stat');
    $stat->to($stat);
    echo '<a class="btn" target="_blank" rel="noopener"> ';
    echo '<span class="title" type="text" id="following">'. $stat->publishedCommentsNum(). '</span>';
    echo '<span class="desc">评论</span>';
    echo '</a>';

    $stat = Typecho_Widget::widget('Widget_Stat');
    $stat->to($stat);
    echo '<a class="btn" target="_blank" rel="noopener" href="/4.html"> ';
    echo '<span class="title" type="text" id="public_repos">'. $stat->categoriesNum(). '</span>';
    echo '<span class="desc">分类</span>';
    echo ' </a>';
    echo ' </div>';

    echo '  <a class="follow" target="_blank" rel="noopener" href="https://kuhehe.vip/"><i class="fas fa-home" /></i>发布页地址</a>';
    echo ' </div>';
    echo ' </widget>';
}






function outputRandomNumber() {
    $randomNumber = random_int(10, 20);
    echo "随机数: ". $randomNumber;
}










function tagcloud() {
    echo '<widget class="widget-wrapper tagcloud">';
    echo '<div class="widget-header dis-select">';
    echo '<span class="name">标签云</span>';
    echo '</div>';
    echo '<div class="widget-body fs14">';
    $tagCloudWidget = Typecho_Widget::widget('Widget_Metas_Tag_Cloud');
    echo $tagCloudWidget->parse('<a href="{permalink}" style="color:rgb('. rand(0, 255). ','. rand(0, 255). ','. rand(0, 255). ');font-family:serif;" class="tag -0">{name}</a>&nbsp');
    echo '</div>';
    echo '</widget>';
}








function t_ago($v) {
    $t = time() - $v;
    if ($t < 60) {
        return $t . ' 秒前';//文字可以自己修改想要的 秒前
    } elseif ($t < 3600) {
        return floor($t / 60) .'分钟前';//分钟前
    } elseif ($t < 86400) {
        return floor($t / 3670) .'小时前';//小时前
    } elseif ($t < 604800) {
        return floor($t / 86400) .'天前';//天前
    } elseif ($t < 2419200) {
        return floor($t / 604800) .'周前';//周前
    } elseif ($t < 31536000 ) {
        return floor($t / 2592000 ).'个月前';//月前
    } 
    return floor($t / 31536000 ).'年前';//年前
}








function showSocialWidget($options, $post) {
    $leftnavnum = $options->leftnavnum;
    echo '<widget class="widget-wrapper linklist">'."\n";
    echo '    <div class="widget-header dis-select">'."\n";
    echo '        <span class="name">本站小导航</span>'."\n";
    echo '    </div>'."\n";
    echo '    <div class="widget-body fs14">'."\n";
    echo '        <div class="linklist left" style="grid-template-columns:repeat('.$leftnavnum.',1fr);">'."\n";

    // 调用 generateCustomLinks 函数生成自定义链接
    generateCustomLinks();

    echo '        </div>'."\n";
    echo '    </div>'."\n";
    echo '</widget>';
}










function generatefooter2() {
    // 删除全局变量，改用 Typecho 标准方法获取配置
    $options = Typecho_Widget::widget('Widget_Options');
    
    // 检查配置有效性
    if (!$options || !isset($options->项目)) {
        echo "自定义字段 项目 未配置";
        return;
    }
    
    $customFieldValue = $options->项目;
    
    if (empty($customFieldValue)) {
        echo "空";
        return;
    }

    // 分割链接并清理空行
    $links = array_filter(
        explode("\n", $customFieldValue),
        function($line) { return !empty(trim($line)); }
    );

    foreach ($links as $link) {
        // 清理首尾空格并分割字段
        $parts = array_map('trim', explode("|", trim($link)));
        
        // 验证字段数量
        if (count($parts) == 2) {
            $text = htmlspecialchars($parts[0]);
            $href = htmlspecialchars($parts[1]);
            
            // 使用 printf 安全输出
            printf(
                '<a target="_blank" rel="external nofollow noopener noreferrer" href="%s">%s</a>',
                $href,
                $text
            );
        }
    }
}





function generatefooter3() {
    // 移除全局变量，改用 Typecho 标准方法获取配置
    $options = Typecho_Widget::widget('Widget_Options');

    // 检查配置有效性
    if (!$options || !isset($options->首页友链)) {
        echo "自定义字段 首页友链 未配置";
        return;
    }

    $customFieldValue = $options->首页友链;

    if (empty($customFieldValue)) {
        echo "空";
        return;
    }

    // 分割链接并清理空行
    $links = array_filter(
        explode("\n", $customFieldValue),
        function($line) { return !empty(trim($line)); }
    );

    foreach ($links as $link) {
        // 清理首尾空格并分割字段
        $parts = array_map('trim', explode("|", trim($link)));
        
        // 验证字段数量
        if (count($parts) == 2) {
            $text = htmlspecialchars($parts[0]);
            $href = htmlspecialchars($parts[1]);
            
            // 安全输出（添加 rel 安全属性）
            printf(
                '<a target="_blank" rel="noopener noreferrer" href="%s">%s</a>',
                $href,
                $text
            );
        }
    }
}




function generatefooter4() {
    // 移除全局变量，改用 Typecho 标准方法获取配置
    $options = Typecho_Widget::widget('Widget_Options');

    // 静默模式：配置不存在或字段为空时不显示错误
    if (!$options || !isset($options->recentn) || empty($options->recentn)) {
        return; // 直接退出，不输出任何内容
    }

    $customFieldValue = $options->recentn;
    $links = array_filter(
        explode("\n", $customFieldValue),
        function($line) { return !empty(trim($line)); }
    );

    foreach ($links as $link) {
        $parts = array_map('trim', explode("|", trim($link)));
        
        if (count($parts) == 2) {
            $text = htmlspecialchars($parts[0]);
            $href = htmlspecialchars($parts[1]);
            
            // 使用安全输出（保留原有 rel 属性）
            printf(
                '<a target="_blank" rel="external nofollow noopener noreferrer" href="%s">%s</a>',
                $href,
                $text
            );
        }
    }
}






function generateyoubt() {
    global $options;

    $customFieldValue = $options->右侧按钮;
    if (empty($customFieldValue)) {
        // 尝试重新获取主题设置
        $options = Typecho_Widget::widget('Widget_Options');
        $customFieldValue = $options->右侧按钮;
        if (empty($customFieldValue)) {
            echo "自定义字段 右侧按钮 为空";
            return;
        }
    }

    $links = explode(",", $customFieldValue);

$currentUrl = $_SERVER['REQUEST_URI'];  // 获取当前页面的 URL

    foreach ($links as $link) {
        $parts = explode("|", $link);
        if (count($parts) == 3) {
            $svgCode = $parts[0];
            $text = $parts[1];
            $href = $parts[2];
   
            
            $class2 = ($currentUrl === $href)? 'link active' : 'link';
            $additionalSvgCode = ($currentUrl === $href)? '<svg class="active-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 24 24"><path fill="currentColor" d="M21 11.098v4.993c0 3.096 0 4.645-.734 5.321c-.35.323-.792.526-1.263.58c-.987.113-2.14-.907-4.445-2.946c-1.02-.901-1.529-1.352-2.118-1.47a2.225 2.225 0 0 0-.88 0c-.59.118-1.099.569-2.118 1.47c-2.305 2.039-3.458 3.059-4.445 2.945a2.238 2.238 0 0 1-1.263-.579C3 20.736 3 19.188 3 16.091v-4.994C3 6.81 3 4.666 4.318 3.333C5.636 2 7.758 2 12 2c4.243 0 6.364 0 7.682 1.332C21 4.665 21 6.81 21 11.098" opacity=".5"></path><path fill="currentColor" d="M9 5.25a.75.75 0 0 0 0 1.5h6a.75.75 0 0 0 0-1.5z"></path></svg>' : '';

            $linkCode = '<a class="'. $class2. '" title="'. $text. '" target="_blank" rel="external nofollow noopener noreferrer" href="'. $href. '"><div class="flex">'. $svgCode. '<span>'. $text. '</span></div>'. $additionalSvgCode. '</a>';
            echo $linkCode;
        }
    }
}

