<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en" ng-app="myApp">
<head>
    <meta charset="UTF-8">
    <title>我的收藏</title>
    <meta name="description" content="庖丁科技众包服务平台携手国内外先进技术科研院所、顶级技术专家，以实现科技成果市场化为核心，为企业提供快速精准的需求匹配服务，从而实现企业以及科技资源的有效对接，帮助企业实现产业技术升级，助力先进技术完成产业化发展。" />
    <meta name="keywords" content="庖丁众包、智能技术、机械制造、健康医疗、材料科学、能源环保、生产流程优化"/>
    <meta name='viewport' content='user-scalable=no,width=750'>
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/common_new.css">
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/index.css">
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/demand.css">
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/activity.css">
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/my.css">
</head>
<body>
<div class="tec_tab">
    <p class="active">技术</p>
    <p>需求</p>
    <p>活动</p>
    <p>单位</p>
    <div class="slideBlock"></div>
</div>
<div class="index_div" style="margin-bottom:30px"></div>

<!-- 技术 -->
<div class="tab_body" style="display:block">
    <div class="advancedWrap">
        <div class="main_section clear">
            <div class="fl main_section_left">
                <img  alt="">
                <p class="transfer">技术转让</p>
            </div>
            <div class="fr main_section_right">
                <p class="sec_tit"></p>
                <p>
                    <img src="<?php echo (MOBILE); ?>/images/icon-index-industry.png" alt="">
                    <span class="sec_industry"></span>
                </p>
                <p class="p_scan">
                    <img src="<?php echo (MOBILE); ?>/images/icon-index-browse.png" alt="">
                    <span class="sec_scan">2068</span>
                </p>
                <div class="adhi_print">
                    <span class="adhibition">应用类</span>
                    <span class="print">成熟方案</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 需求 -->
<div class="tab_body">
    <div class="main">
        <div class="section">
            <p class="sec_title clear">
                <span class="callForBids fl">【招标中】</span>
                <span class="materials fl">防水保温材料研发防水保温材料</span>
            </p>
            <p class="sec_content">防水性能：吸湿率小于0.2%防水性能：吸湿率小于0.2%防水性能：吸湿率小于0.2%防水性能：吸湿率小于0.2%防水性能：吸湿率小于0.2%防水性能：吸湿率小于0.2%</p>
            <div class="sec_data clear">
                <div class="sec_data_left fl">
                    <div>
                        <img src="<?php echo (MOBILE); ?>/images/icon-search-type.png" alt="">
                        <span class="sec_data_span">材料科学</span>
                        <img src="<?php echo (MOBILE); ?>/images/icon-search-time.png" alt="">
                        <span class="sec_data_span">12个月</span>
                        <img src="<?php echo (MOBILE); ?>/images/icon-search-scan.png" alt="">
                        <span class="sec_data_span">2480</span>
                    </div>
                    <p class="sec_data_p">
                        发布时间: <span class="sec_data_span">2017-09-26</span>
                        投入预算：<span>面议</span>
                    </p>
                </div>
                <img class="fr" src="<?php echo (MOBILE); ?>/images/icon-research.png" alt="">
            </div>
            <a href="#">
                <div class="viewDetails clear">
                    <img class="fr" src="<?php echo (MOBILE); ?>/images/icon-right.png" alt="">
                    <span class="viewDetails_span fr">查看详情</span>
                </div>
            </a>
        </div>
        <div class="index_div"></div>
    </div>
</div>

<!-- 活动 -->
<div class="tab_body">
    <div class="activity_lately_section clear">
        <div class="activity_section_left fl">
            <img src="<?php echo (MOBILE); ?>/images/activity-bottom-banner-1.jpg" alt="">
        </div>
        <div class="activity_section_right fr">
            <p class="activity_right_tit">广东省家具行业推行绿色清洁生产与挥发性有机污染物</p>
            <p class="activity_right_p">
                <span class="activity_right_span">广州 天河区</span>
                <span>09/16</span>
            </p>
            <p  class="activity_right_p">
                浏览<span class="activity_right_span"> 2068</span>
                收藏<span> 1258</span>
            </p>
        </div>
    </div>
</div>

<!-- 单位 -->
<!-- .nav -->
<div class="tab_body">
    <div class="coop_nav">
        <p class="fl active">院所</p>
        <p class="fl">协会</p>
        <p class="fl">公司</p>
    </div>

    <div class="index_coop_swiper clear" ng-controller="coopUnitCtrl" ng-cloak style="display:block">
        <div class="coop_section fl" ng-repeat="unit in unitList">
            <img class="coop_img" ng-src="{{unit.src}}" alt="">
            <p class="coop_title">{{unit.unit}}2</p>
        </div>
    </div>

    <div class="index_coop_swiper clear" ng-controller="coopUnitCtrl" ng-cloak >
        <div class="coop_section fl" ng-repeat="unit in unitList">
            <img class="coop_img" ng-src="{{unit.src}}" alt="">
            <p class="coop_title">{{unit.unit}}3</p>
        </div>
    </div>

    <div class="index_coop_swiper clear" ng-controller="coopUnitCtrl" ng-cloak >
        <div class="coop_section fl" ng-repeat="unit in unitList">
            <img class="coop_img" ng-src="{{unit.src}}" alt="">
            <p class="coop_title">{{unit.unit}}4</p>
        </div>
    </div>
</div>


</body>
<script src='<?php echo (MOBILE); ?>/js/jquery-3.0.0.min.js'></script>
<script src='<?php echo (MOBILE); ?>/js/angular.min.js'></script>
<script src='<?php echo (MOBILE); ?>/js/index.js'></script>
<script src='<?php echo (MOBILE); ?>/js/return.js'></script>
<script>
    $(".tec_tab p").on("click",function(){
        var index = $(this).index();
        var tranX = index*188;
        $(".slideBlock").css("transform","translateX("+tranX+"px)");
        $(".tab_body").eq(index).show().siblings(".tab_body").hide();
        $(this).addClass('active').siblings().removeClass('active');
    });

    $(".coop_nav p").on("click",function(){
        var index = $(this).index();
        $(".index_coop_swiper").eq(index).show().siblings(".index_coop_swiper").hide();
        $(this).addClass('active').siblings().removeClass('active');
    });
</script>
</html>