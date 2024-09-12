<?php if(!defined("__XE__")) exit(); $layout_info = new stdClass;
$layout_info->site_srl = 0;
$layout_info->layout = 'default';
$layout_info->type = NULL;
$layout_info->path = './layouts/default/';
$layout_info->title = '기본 레이아웃';
$layout_info->description = '사이트 기본 레이아웃.';
$layout_info->version = '1.7';
$layout_info->date = '20131127';
$layout_info->homepage = NULL;
$layout_info->layout_srl = $layout_srl;
$layout_info->layout_title = $layout_title;
$layout_info->license = NULL;
$layout_info->license_link = NULL;
$layout_info->layout_type = 'P';
$layout_info->author = array();
$layout_info->author[0] = new stdClass;
$layout_info->author[0]->name = 'XEHub';
$layout_info->author[0]->email_address = 'developer@xpressengine.com';
$layout_info->author[0]->homepage = 'https://www.xehub.io';
$layout_info->extra_var = new stdClass;
$layout_info->extra_var->LOGO_IMG = new stdClass;
$layout_info->extra_var->LOGO_IMG->group = NULL;
$layout_info->extra_var->LOGO_IMG->title = '사이트 로고 이미지';
$layout_info->extra_var->LOGO_IMG->type = 'image';
$layout_info->extra_var->LOGO_IMG->value = $vars->LOGO_IMG;
$layout_info->extra_var->LOGO_IMG->description = NULL;
$layout_info->extra_var->LOGO_TEXT = new stdClass;
$layout_info->extra_var->LOGO_TEXT->group = NULL;
$layout_info->extra_var->LOGO_TEXT->title = '사이트 로고 문자';
$layout_info->extra_var->LOGO_TEXT->type = 'text';
$layout_info->extra_var->LOGO_TEXT->value = $vars->LOGO_TEXT;
$layout_info->extra_var->LOGO_TEXT->description = NULL;
$layout_info->extra_var->WEB_FONT = new stdClass;
$layout_info->extra_var->WEB_FONT->group = NULL;
$layout_info->extra_var->WEB_FONT->title = '웹 폰트';
$layout_info->extra_var->WEB_FONT->type = 'select';
$layout_info->extra_var->WEB_FONT->value = $vars->WEB_FONT;
$layout_info->extra_var->WEB_FONT->description = NULL;
$layout_info->extra_var->WEB_FONT->options = array();
$layout_info->extra_var->WEB_FONT->options['NO'] = new stdClass;
$layout_info->extra_var->WEB_FONT->options['NO']->val = '\'나눔고딕\' 웹 폰트 사용 안함';
$layout_info->extra_var->WEB_FONT->options['YES'] = new stdClass;
$layout_info->extra_var->WEB_FONT->options['YES']->val = '\'나눔고딕\' 웹 폰트 사용';
$layout_info->extra_var->LAYOUT_TYPE = new stdClass;
$layout_info->extra_var->LAYOUT_TYPE->group = NULL;
$layout_info->extra_var->LAYOUT_TYPE->title = '레이아웃 유형';
$layout_info->extra_var->LAYOUT_TYPE->type = 'select';
$layout_info->extra_var->LAYOUT_TYPE->value = $vars->LAYOUT_TYPE;
$layout_info->extra_var->LAYOUT_TYPE->description = NULL;
$layout_info->extra_var->LAYOUT_TYPE->options = array();
$layout_info->extra_var->LAYOUT_TYPE->options['MAIN_PAGE'] = new stdClass;
$layout_info->extra_var->LAYOUT_TYPE->options['MAIN_PAGE']->val = 'Main Page(1Column=GNB+Content)';
$layout_info->extra_var->LAYOUT_TYPE->options['SUB_PAGE'] = new stdClass;
$layout_info->extra_var->LAYOUT_TYPE->options['SUB_PAGE']->val = 'Sub Page(2Column=GNB+LNB+Content)';
$layout_info->extra_var->VISUAL_USE = new stdClass;
$layout_info->extra_var->VISUAL_USE->group = NULL;
$layout_info->extra_var->VISUAL_USE->title = '비주얼 이미지와 텍스트 사용';
$layout_info->extra_var->VISUAL_USE->type = 'select';
$layout_info->extra_var->VISUAL_USE->value = $vars->VISUAL_USE;
$layout_info->extra_var->VISUAL_USE->description = NULL;
$layout_info->extra_var->VISUAL_USE->options = array();
$layout_info->extra_var->VISUAL_USE->options['YES'] = new stdClass;
$layout_info->extra_var->VISUAL_USE->options['YES']->val = '비주얼 이미지와 텍스트를 사용';
$layout_info->extra_var->VISUAL_USE->options['NO'] = new stdClass;
$layout_info->extra_var->VISUAL_USE->options['NO']->val = '비주얼 이미지와 텍스트를 사용하지 않음';
$layout_info->extra_var->VISUAL_IMAGE_1 = new stdClass;
$layout_info->extra_var->VISUAL_IMAGE_1->group = NULL;
$layout_info->extra_var->VISUAL_IMAGE_1->title = '비주얼 이미지 1';
$layout_info->extra_var->VISUAL_IMAGE_1->type = 'image';
$layout_info->extra_var->VISUAL_IMAGE_1->value = $vars->VISUAL_IMAGE_1;
$layout_info->extra_var->VISUAL_IMAGE_1->description = NULL;
$layout_info->extra_var->VISUAL_TEXT_1 = new stdClass;
$layout_info->extra_var->VISUAL_TEXT_1->group = NULL;
$layout_info->extra_var->VISUAL_TEXT_1->title = '비주얼 텍스트 1';
$layout_info->extra_var->VISUAL_TEXT_1->type = 'text';
$layout_info->extra_var->VISUAL_TEXT_1->value = $vars->VISUAL_TEXT_1;
$layout_info->extra_var->VISUAL_TEXT_1->description = NULL;
$layout_info->extra_var->VISUAL_LINK_1 = new stdClass;
$layout_info->extra_var->VISUAL_LINK_1->group = NULL;
$layout_info->extra_var->VISUAL_LINK_1->title = '비주얼 링크 1';
$layout_info->extra_var->VISUAL_LINK_1->type = 'text';
$layout_info->extra_var->VISUAL_LINK_1->value = $vars->VISUAL_LINK_1;
$layout_info->extra_var->VISUAL_LINK_1->description = NULL;
$layout_info->extra_var->VISUAL_IMAGE_2 = new stdClass;
$layout_info->extra_var->VISUAL_IMAGE_2->group = NULL;
$layout_info->extra_var->VISUAL_IMAGE_2->title = '비주얼 이미지 2';
$layout_info->extra_var->VISUAL_IMAGE_2->type = 'image';
$layout_info->extra_var->VISUAL_IMAGE_2->value = $vars->VISUAL_IMAGE_2;
$layout_info->extra_var->VISUAL_IMAGE_2->description = NULL;
$layout_info->extra_var->VISUAL_TEXT_2 = new stdClass;
$layout_info->extra_var->VISUAL_TEXT_2->group = NULL;
$layout_info->extra_var->VISUAL_TEXT_2->title = '비주얼 텍스트 2';
$layout_info->extra_var->VISUAL_TEXT_2->type = 'text';
$layout_info->extra_var->VISUAL_TEXT_2->value = $vars->VISUAL_TEXT_2;
$layout_info->extra_var->VISUAL_TEXT_2->description = NULL;
$layout_info->extra_var->VISUAL_LINK_2 = new stdClass;
$layout_info->extra_var->VISUAL_LINK_2->group = NULL;
$layout_info->extra_var->VISUAL_LINK_2->title = '비주얼 링크 2';
$layout_info->extra_var->VISUAL_LINK_2->type = 'text';
$layout_info->extra_var->VISUAL_LINK_2->value = $vars->VISUAL_LINK_2;
$layout_info->extra_var->VISUAL_LINK_2->description = NULL;
$layout_info->extra_var->VISUAL_IMAGE_3 = new stdClass;
$layout_info->extra_var->VISUAL_IMAGE_3->group = NULL;
$layout_info->extra_var->VISUAL_IMAGE_3->title = '비주얼 이미지 3';
$layout_info->extra_var->VISUAL_IMAGE_3->type = 'image';
$layout_info->extra_var->VISUAL_IMAGE_3->value = $vars->VISUAL_IMAGE_3;
$layout_info->extra_var->VISUAL_IMAGE_3->description = NULL;
$layout_info->extra_var->VISUAL_TEXT_3 = new stdClass;
$layout_info->extra_var->VISUAL_TEXT_3->group = NULL;
$layout_info->extra_var->VISUAL_TEXT_3->title = '비주얼 텍스트 3';
$layout_info->extra_var->VISUAL_TEXT_3->type = 'text';
$layout_info->extra_var->VISUAL_TEXT_3->value = $vars->VISUAL_TEXT_3;
$layout_info->extra_var->VISUAL_TEXT_3->description = NULL;
$layout_info->extra_var->VISUAL_LINK_3 = new stdClass;
$layout_info->extra_var->VISUAL_LINK_3->group = NULL;
$layout_info->extra_var->VISUAL_LINK_3->title = '비주얼 링크 3';
$layout_info->extra_var->VISUAL_LINK_3->type = 'text';
$layout_info->extra_var->VISUAL_LINK_3->value = $vars->VISUAL_LINK_3;
$layout_info->extra_var->VISUAL_LINK_3->description = NULL;
$layout_info->extra_var->FOOTER = new stdClass;
$layout_info->extra_var->FOOTER->group = NULL;
$layout_info->extra_var->FOOTER->title = '사이트 풋터 문자';
$layout_info->extra_var->FOOTER->type = 'textarea';
$layout_info->extra_var->FOOTER->value = $vars->FOOTER;
$layout_info->extra_var->FOOTER->description = NULL;
$layout_info->extra_var_count = 15;
$layout_info->menu_count = 1;
$layout_info->menu = new stdClass;
$layout_info->default_menu = 'GNB';
$layout_info->menu->GNB = new stdClass;
$layout_info->menu->GNB->name = 'GNB';
$layout_info->menu->GNB->title = '전역 네비게이션 바';
$layout_info->menu->GNB->maxdepth = '2';
$layout_info->menu->GNB->menu_srl = $vars->GNB;
$layout_info->menu->GNB->xml_file = "./files/cache/menu/".$vars->GNB.".xml.php";
$layout_info->menu->GNB->php_file = "./files/cache/menu/".$vars->GNB.".php";
 $layout_info->header_script = '<script src="http://gggaeun.dothome.co.kr/chicken_maru/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="http://gggaeun.dothome.co.kr/chicken_maru/js/navi.js"></script>
    
 

<link rel="stylesheet" href="http://gggaeun.dothome.co.kr/chicken_maru/dist/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="http://gggaeun.dothome.co.kr/chicken_maru/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="http://gggaeun.dothome.co.kr/chicken_maru/css/reset.css">
    <link rel="stylesheet" href="http://gggaeun.dothome.co.kr/chicken_maru/css/common.css">
    <link rel="stylesheet" href="http://gggaeun.dothome.co.kr/chicken_maru/css/sub_common.css">
    <link rel="stylesheet" href="http://gggaeun.dothome.co.kr/chicken_maru/css/sub05.css">

    <!-- 구글폰트 아이콘 -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- 구글폰트 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    
    <!-- 아이폰 홈화면 아이콘 추가 -->
    <link rel="apple-touch-icon-precomposed" href="http://gggaeun.dothome.co.kr/chicken_maru/img/ch_maru_favicon.png">
 
    <!-- chrome, safari, ms-edge -->
    <link rel="shortcut icon" href="http://gggaeun.dothome.co.kr/chicken_maru/img/ch_maru_favicon.png">'; 