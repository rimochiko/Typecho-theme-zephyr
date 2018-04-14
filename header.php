<!doctype html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8">
	<title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>
	<link href="https://cdn.bootcss.com/animate.css/3.5.2/animate.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/style.css'); ?>" />
    <!--[if lt IE 9]>
    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <?php $this->header(); ?>
</head>

<!--[if lt IE 8]>
    <div class="mck-header-maintitle"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->