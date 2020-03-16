<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="dns-prefetch" href="//cdn.bootcss.com"/>
    <link rel="dns-prefetch" href="//pic.wubuster.com"/>
    <link rel="dns-prefetch" href="//www.gravatar.com"/>
    <meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    
    <link href="https://cdn.bootcss.com/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/highlight.js/9.18.1/styles/xcode.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/w555.css'); ?>" rel="stylesheet" >
    <script src="//cdn.bootcss.com/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <?php $this->header(); ?>
</head>
<body>
    <a onclick="topFunction()" id="top-btn" title="返回顶部"><svg t="1584335329094" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2228" width="48" height="48"><path d="M736.803999 448.468035c3.25923-257.385045-208.512964-374.677425-224.807069-384.449999l0 0 0 0 0 0 0 0c-13.028735 6.516414-228.062206 123.803677-224.800929 384.449999-42.35669 29.322839-87.968517 78.19492-81.452103 162.903184 6.516414 84.708264 91.224678 143.353942 123.803677 140.097782 32.584116-3.25923 22.805402-26.066679 22.805402-26.066679l9.777691-45.61285c0 0 48.867988 71.679529 61.900815 71.679529l87.964424 0 0 0 0 0 0 0 0 0 87.968517 0c16.290011 0 61.901839-71.679529 61.901839-71.679529l9.776667 45.61285c0 0-9.776667 22.806425 22.805402 26.066679 32.578999 3.25616 117.287263-55.389518 123.8047-140.097782C824.771493 526.662955 779.160689 477.790874 736.803999 448.468035L736.803999 448.468035 736.803999 448.468035zM511.99693 445.210851c-6.511297 0-84.708264-3.261277-94.480838-94.485955 3.25616-87.967494 87.968517-94.480838 94.480838-97.741092 6.517437 0 91.229794 9.773598 94.485955 97.741092C596.709287 441.950597 518.514367 445.210851 511.99693 445.210851L511.99693 445.210851 511.99693 445.210851zM511.99693 445.210851" p-id="2229" fill="#67a7e6"></path><path d="M463.128943 891.562688c0 9.772574-9.773598 19.549242-19.550265 19.549242l0 0c-9.772574 0-19.546172-9.776667-19.546172-19.549242l0-94.481861c0-9.776667 9.773598-19.549242 19.546172-19.549242l0 0c9.776667 0 19.550265 9.772574 19.550265 19.549242L463.128943 891.562688 463.128943 891.562688 463.128943 891.562688zM463.128943 891.562688" p-id="2230" fill="#67a7e6"></path><path d="M534.804379 940.435793c0 9.772574-9.773598 19.546172-19.546172 19.546172l0 0c-9.772574 0-19.550265-9.773598-19.550265-19.546172L495.707942 800.338011c0-9.772574 9.777691-19.550265 19.550265-19.550265l0 0c9.772574 0 19.546172 9.777691 19.546172 19.550265L534.804379 940.435793 534.804379 940.435793 534.804379 940.435793zM534.804379 940.435793" p-id="2231" fill="#67a7e6"></path><path d="M599.966471 868.756263c0 9.773598-9.772574 19.550265-19.546172 19.550265l0 0c-9.776667 0-19.549242-9.776667-19.549242-19.550265l0-68.418252c0-9.772574 9.772574-19.550265 19.549242-19.550265l0 0c9.773598 0 19.546172 9.777691 19.546172 19.550265L599.966471 868.756263 599.966471 868.756263 599.966471 868.756263zM599.966471 868.756263" p-id="2232" fill="#67a7e6"></path></svg></a>
    <script>
    // 当网页向下滑动 30px 出现"返回顶部" 按钮
    window.onscroll = function() {scrollFunction()};
        
    function scrollFunction() {console.log(121);
        if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
            document.getElementById("top-btn").style.display = "block";
        } else {
            document.getElementById("top-btn").style.display = "none";
        }
    }
 
    // 点击按钮，返回顶部
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    </script>
    <header id="header" class="header">
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal"><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a></h5>
            <div class="navbar-menu my-2 my-md-0 mr-md-3">
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>

                <a <?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a>
                <?php endwhile; ?>
            </div>
        </div>
    </header>