<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>活动报名</title>
    <meta name="description" content="庖丁科技众包服务平台携手国内外先进技术科研院所、顶级技术专家，以实现科技成果市场化为核心，为企业提供快速精准的需求匹配服务，从而实现企业以及科技资源的有效对接，帮助企业实现产业技术升级，助力先进技术完成产业化发展。" />
    <meta name="keywords" content="庖丁众包、智能技术、机械制造、健康医疗、材料科学、能源环保、生产流程优化"/>
    <meta name='viewport' content='user-scalable=no,width=750'>
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/common_new.css">
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/my.css">
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/activity.css">
</head>
<body style="padding-top:60px;">

<!-- 使用my.css 注册页面样式 -->

<div class="mask" style="display:none;"></div>
<div class="identify_tip">
    <p>活动报名成功</p>
    <a href="">请留意系统消息...</a>
</div>
<div class="apply_choose">
    <div class="apply_choice">
        <div class="apply_choosing apply_choice_company">公司</div>
        <div class="apply_choosing apply_choice_personal">个人</div>
    </div>
    <div class="apply_choice_cancle">取消</div>
</div>
<div class="regist_main">
    <div class="regist_input">
        <span class="regist_span">姓名</span>
        <input type="text" placeholder="输入您的真实姓名">
    </div>

    <div class="regist_input">
        <span class="regist_span">手机</span>
        <span style="margin-left:20px;color:#1e1e1e">13688888888</span>
    </div>

    <div class="regist_input">
        <span class="regist_span">公司</span>
        <input type="text" placeholder="输入公司名称">
    </div>

    <div class="regist_input">
        <span class="regist_span">职务</span>
        <input type="text" placeholder="请输入您所在公司职务">
    </div>

    <div class="regist_input">
        <span class="regist_span">关注领域</span>
        <span style="margin-left:20px;color:#ccc">请点选</span>
    </div>

    <div class="regist_input">
        <span class="regist_span">贵公司的业务范围</span>
        <img class="fr" src="<?php echo (MOBILE); ?>/images/icon-right2.png" alt="">
    </div>

    <div class="regist_input">
        <span class="regist_span">您本人的研究方向</span>
        <img class="fr" src="<?php echo (MOBILE); ?>/images/icon-right2.png" alt="">
    </div>

    <div class="regist_input">
        <span class="regist_span">希望对接的技术领域或您所需要的需求领域</span>
        <img class="fr" src="<?php echo (MOBILE); ?>/images/icon-right2.png" alt="">
    </div>

    <div class="regist_input">
        <span class="regist_span">需求内容</span>
        <input type="text" placeholder="请简要描述您需要解决的技术难题" style="width:500px;">
        <img class="fr" src="<?php echo (MOBILE); ?>/images/icon-right2.png" alt="">
    </div>
</div>

<div class="sec_return">
    <a onclick="javascript:history.go(-1);">
        <img class="return_icon" src="<?php echo (MOBILE); ?>/images/icon-common-return.png" alt="">
    </a>
    <a href="" class="act_det_btn">
        确定
    </a>
</div>

</body>
</html>