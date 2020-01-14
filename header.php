<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('CSS/online.css'); ?>" rel="stylesheet" >
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>


<div class="container">
  <header id="header" class="待定">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal"><a class="text-dark" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a></h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="<?php $this->options->siteUrl(); ?>">Home</a>
        <a class="p-2 text-dark" href="<?php Helper::options()->siteUrl()?>links.html" <?php if ($this->is('page','links')) : ?> <?php endif; ?>>Links</a>
        <a class="p-2 text-dark" href="<?php Helper::options()->siteUrl()?>about.html" <?php if ($this->is('page','About')) : ?> <?php endif; ?>>About</a>
      </nav>
    </div>
  </header><!-- end #header -->
