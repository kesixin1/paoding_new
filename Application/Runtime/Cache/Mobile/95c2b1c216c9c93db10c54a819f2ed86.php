<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en" ng-app="activity">
<head>
    <meta charset="UTF-8">
    <title>前沿技术</title>
    <meta name="description" content="庖丁科技众包服务平台携手国内外先进技术科研院所、顶级技术专家，以实现科技成果市场化为核心，为企业提供快速精准的需求匹配服务，从而实现企业以及科技资源的有效对接，帮助企业实现产业技术升级，助力先进技术完成产业化发展。" />
    <meta name="keywords" content="庖丁众包、智能技术、机械制造、健康医疗、材料科学、能源环保、生产流程优化"/>
    <meta name='viewport' content='user-scalable=no,width=750'>
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/common_new.css">
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/index.css">
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/demand.css">
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/swiper.css">
</head>
<body>
<div class="demand_nav">
    <ul>
        <div class="swiper-container" style="overflow:visible">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <li style="margin-left:0;text-align:center">全部</li>
                    <div class="sildeBlock"></div>
                </div>
                <div class="swiper-slide">
                    <li>机械制造</li>
                </div>
                <div class="swiper-slide">
                    <li>智能技术</li>
                </div>
                <div class="swiper-slide">
                    <li>健康医疗</li>
                </div>
                <div class="swiper-slide">
                    <li>材料科学</li>
                </div>
                <div class="swiper-slide">
                    <li>能源节能</li>
                </div>
                <div class="swiper-slide">
                    <li>环境保护</li>
                </div>
            </div>
        </div>
    </ul>
</div>

<div class="search clear">
    <p class="search_p fl">您当前选择的业务范围</p>
    <select class="fl" name="" id="">
        <option value="全部">全部</option>
        <option value="科研类">科研类</option>
        <option value="应用类">应用类</option>
        <option value="专利类">专利类</option>
        <option value="服务类">服务类</option>
    </select>
    <div class="inputDiv fr">
        <img src="<?php echo (MOBILE); ?>/images/icon-search-default.png" alt="">
        技术搜索
    </div>
</div>

<!-- 搜索框 -->
<div class="searching" style="display:none;">
    <div class="input_search">
        <img src="<?php echo (MOBILE); ?>/images/icon-search-default.png" alt="">
        <input class="tech_search" type="text" placeholder="技术搜索">
        <p class="click_search fr">点击搜索</p>
    </div>
</div>

<div class="advancedWrap" style="margin-top:30px;">
    <a href="/index.php/Mobile/Index/detail_tec.html">
        <div class="main_section clear">
            <div class="fl main_section_left">
                <img ng-src="<?php echo (MOBILE); ?>/images/index-advanced-tech.jpg" alt="">
                <p class="transfer">技术转让</p>
            </div>
            <div class="fr main_section_right">
                <p class="sec_tit">印刷品无痕防伪技术</p>
                <p>
                    <img src="<?php echo (MOBILE); ?>/images/icon-index-industry.png" alt="">
                    <span class="sec_industry">印刷工业，防伪工业</span>
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
    </a>
    <div class="main_section clear">
        <div class="fl main_section_left">
            <img ng-src="<?php echo (MOBILE); ?>/images/index-advanced-tech.jpg" alt="">
            <p class="transfer">技术转让</p>
        </div>
        <div class="fr main_section_right">
            <p class="sec_tit">印刷品无痕防伪技术</p>
            <p>
                <img src="<?php echo (MOBILE); ?>/images/icon-index-industry.png" alt="">
                <span class="sec_industry">印刷工业，防伪工业</span>
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

<p class="advert">
    庖丁众包·专业科技服务平台
</p>

<div class="sec_return">
    <a onclick="javascript:history.go(-1);">
        <img class="return_icon" src="<?php echo (MOBILE); ?>/images/icon-common-return.png" alt="">
    </a>
    <p class="collect">发布技术</p>
</div>

</body>
<script src='<?php echo (MOBILE); ?>/js/jquery-3.0.0.min.js'></script>
<script src="<?php echo (MOBILE); ?>/js/swiper.min.js"></script>
<script src="<?php echo (MOBILE); ?>/js/angular.min.js"></script>
<script src="<?php echo (MOBILE); ?>/js/index-publishTec.js"></script>
<script src='<?php echo (MOBILE); ?>/js/index.js'></script>
<script>
    // 轮播
    var mySwiper = new Swiper(".swiper-container",{
        freeMode : true,
        slidesPerView : 5,
    });
    $(".swiper-slide li").on("click",function(){
        var index = $(this).parent(".swiper-slide").index();
        var tranLeft = index*150;
        $(".sildeBlock").css("transform","translateX("+tranLeft+"px)");
    });

    $(".inputDiv").on("click",function(){
        $(".search").hide();
        $(".searching").show();
    })
</script>
</html>