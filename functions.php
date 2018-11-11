<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $notice = new Typecho_Widget_Helper_Form_Element_Text('notice', NULL, NULL, _t('公告'), NULL);
    $form->addInput($notice);

    $inHead = new Typecho_Widget_Helper_Form_Element_Textarea('inHead', NULL, NULL, _t('HeadCode'), _t('自定义 CSS / JavaScript（需 style/script 标签）在Head'));
    $form->addInput($inHead);

    $inFooter = new Typecho_Widget_Helper_Form_Element_Textarea('inFooter', NULL, NULL, _t('FooterCode'), _t('自定义 CSS / JavaScript（需 style/script 标签）在Footer'));
    $form->addInput($inFooter);
}

function themeInit($archive) {
Helper::options()->commentsAntiSpam = false;//评论关闭反垃圾
}