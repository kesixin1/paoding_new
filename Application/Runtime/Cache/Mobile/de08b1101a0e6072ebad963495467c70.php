<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>活动详情</title>
    <meta name="description" content="庖丁科技众包服务平台携手国内外先进技术科研院所、顶级技术专家，以实现科技成果市场化为核心，为企业提供快速精准的需求匹配服务，从而实现企业以及科技资源的有效对接，帮助企业实现产业技术升级，助力先进技术完成产业化发展。" />
    <meta name="keywords" content="庖丁众包、智能技术、机械制造、健康医疗、材料科学、能源环保、生产流程优化"/>
    <meta name='viewport' content='user-scalable=no,width=750'>
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/common_new.css">
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/activity.css">
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/swiper.css">
</head>
<body style="padding-bottom:150px;">
<div class="act_details_banner">
    <img src="<?php echo (MOBILE); ?>/images/hd-xqy-banner1.png" alt="">
</div>

<div class="act_details_article">
    <p class="act_details_article_tit">广东省家具行业推行绿色清洁生产与挥发性有......</p>
    <p class="act_details_article_scan">
        浏览<span class="act_art_scan">2068</span>
        收藏<span class="act_art_collect">1258</span>
    </p>
</div>

<div class="act_details_head">
    <div class="act_details_head_section clear">
        <div class="act_details_icon icon_time fl"></div>
        <div class="act_details_head_ct fr">
            <p class="act_section_ct">
                <span>09/24</span>
                <span class="act_section_ct_time">14:00-17:30</span>
            </p>
        </div>
    </div>

    <div class="act_details_head_section clear">
        <div class="act_details_icon icon_address fl"></div>
        <div class="act_details_head_ct fr">
            <p class="act_section_ct">
                广州市天河区珠江东路30号广州银行大厦7楼广
                州市天河区珠江东路30号广州银行大厦7楼......
            </p>
        </div>
    </div>

    <div class="act_details_head_section clear">
        <div class="act_details_icon icon_price fl"></div>
        <div class="act_details_head_ct fr">
            <p class="act_section_ct">免费</p>
        </div>
    </div>
</div>

<div class="act_details_main">
    <div class="act_details_main_section clear">
        <div class="act_details_icon icon_conference fl"></div>
        <p class="act_section_tit fl">会议目的</p>
    </div>
    <p class="act_details_main_ct">新材料作为高新技术的基础和先导，应用范围极其广泛。它同信息技术、生物技术一起成为二十一世纪最重要和最具发展潜力的技术。
        本期新材料专场路演，汇集了汽车制造、航空、电子、医疗等诸多领域的多个新材料创新项目，我们同时邀请到新材料领域的专家、投资人共同探索新材料的应用趋势。</p>
</div>

<div class="act_details_main">
    <div class="act_details_main_section clear">
        <div class="act_details_icon icon_conference fl"></div>
        <p class="act_section_tit fl">会议内容</p>
    </div>
    <p class="act_details_main_ct">
        专家分享新材料行业发展态势
        新材料创新项目路演及专家点评
        需求企业、投资机构、新材料技术企业沟通交流
    </p>
</div>

<div class="act_details_main">
    <div class="act_details_main_section clear">
        <div class="act_details_icon icon_conference fl"></div>
        <p class="act_section_tit fl">参会嘉宾</p>
    </div>
    <img class="act_main_pic" src="<?php echo (MOBILE); ?>/images/activitiy-guest.jpg" alt="">
</div>

<div class="act_details_main">
    <div class="act_details_main_section clear">
        <div class="act_details_icon icon_conference fl"></div>
        <p class="act_section_tit fl">会议流程</p>
    </div>
    <img class="act_main_pic" src="<?php echo (MOBILE); ?>/images/activity-process.jpg" alt="">
</div>

<div class="act_details_main">
    <div class="act_details_main_section clear">
        <div class="act_details_icon icon_conference fl"></div>
        <p class="act_section_tit fl">组织形式</p>
    </div>
    <img class="act_main_pic" src="<?php echo (MOBILE); ?>/images/activitiy-host.jpg" alt="">
</div>

<div class="sec_return">
    <a onclick="javascript:history.go(-1);">
        <img class="return_icon" src="<?php echo (MOBILE); ?>/images/icon-common-return.png" alt="">
    </a>
    <img class="act_love_icon" src="<?php echo (MOBILE); ?>/images/icon-activity-collect-default.png" alt="">
    <a href="/index.php/Mobile/Activity/enter" class="act_det_btn">
        立即报名
    </a>
</div>
</body>
<script src='<?php echo (MOBILE); ?>/js/jquery-3.0.0.min.js'></script>
<script>
    var bol = true;
    $(".act_love_icon").on("click",function(){
        // true
        if(bol){
            $(this).attr("src","images/icon-activity-collect-active.png");
            bol = false;
        }else{
            $(this).attr("src","images/icon-activity-collect-default.png");
            bol = true;
        }

    })
</script>
</html>