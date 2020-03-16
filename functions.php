<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
define('__TYPECHO_GRAVATR_PREFIX__', 'https://gravatar.loli.net/');

function themeConfig($form) {
    $ArticleBanner = new Typecho_Widget_Helper_Form_Element_Text('ArticleBanner', NULL, NULL, _t('文章banner图片'), _t('如填写则文章不设置头图时默认使用此图片,如两者均未填写则使用必应每日图片'));
    $form->addInput($ArticleBanner->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));
    
    $AuthorAvatar = new Typecho_Widget_Helper_Form_Element_Text('AuthorAvatar', NULL, NULL, _t('作者头像'), _t('如不填写则使用Gravatar'));
    $form->addInput($AuthorAvatar->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));

    $beian = new Typecho_Widget_Helper_Form_Element_Text('beian', NULL, NULL, _t('备案号') , _t('没备案则空'));
    $form->addInput($beian);

    $EnableThanks = new Typecho_Widget_Helper_Form_Element_Radio('EnableThanks',
    array('able' => _t('启用'),
        'disable' => _t('禁止'),
    ),
    'disable', _t('友情感谢'), _t('默认禁止，开启它才可以打开阿里云和又拍云'));
$form->addInput($EnableThanks);

    $EnableUpyun = new Typecho_Widget_Helper_Form_Element_Radio('EnableUpyun',
        array('able' => _t('启用'),
            'disable' => _t('禁止'),
        ),
        'disable', _t('又拍云联盟'), _t('默认禁止'));
    $form->addInput($EnableUpyun);

    $EnableAliyun = new Typecho_Widget_Helper_Form_Element_Radio('EnableAliyun',
        array('able' => _t('启用'),
            'disable' => _t('禁止'),
        ),
        'disable', _t('阿里云图标'), _t('默认禁止'));
    $form->addInput($EnableAliyun);
    
}
