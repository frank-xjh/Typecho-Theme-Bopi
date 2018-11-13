<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!--CSS-->
    <link href="<?php $this->options->themeUrl('assets/css/style.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/mdui/0.4.2/css/mdui.min.css">
    <link rel="stylesheet" href="//unpkg.com/nprogress@0.2.0/nprogress.css">

    <!--ICON-->
    <link href="https://fonts.loli.net/icon?family=Material+Icons" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--HTMLInHead-->
    <?php echo "\n"; ?>
    <?php echo $this->options->inHead(); ?>
    <!--HTMLInHead_end-->
</head>
<body class="mdui-appbar-with-toolbar" id="pjax-container">

<!--[if lt IE 8]>
<div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="https://browsehappy.com">升级你的浏览器</a>'); ?>.</div>
<![endif]-->

</body>
</html>
