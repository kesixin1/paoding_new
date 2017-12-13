<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en" ng-app="index">
<head>
    <meta charset="UTF-8">
    <title>技术</title>
    <meta name="description" content="庖丁科技众包服务平台携手国内外先进技术科研院所、顶级技术专家，以实现科技成果市场化为核心，为企业提供快速精准的需求匹配服务，从而实现企业以及科技资源的有效对接，帮助企业实现产业技术升级，助力先进技术完成产业化发展。" />
    <meta name="keywords" content="庖丁众包、智能技术、机械制造、健康医疗、材料科学、能源环保、生产流程优化"/>
    <meta name='viewport' content='user-scalable=no,width=750'>
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/common_new.css">
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/index.css">
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/swiper.css">
</head>
<body>
<div class="index_banner">
    <div class="swiper-container" id="swiper-container1">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="#">
                    <img src="<?php echo (MOBILE); ?>/images/index-banner1.jpg" alt="">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="#">
                    <img src="<?php echo (MOBILE); ?>/images/index-banner2.jpg" alt="">
                </a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<!-- 发布技术 -->
<div class="index_dataBox">
    <div class="index_data clear" ng-controller="dataCtrl">
        <div class="data_section fl first_data">
            <p class="sec_num" ng-cloak>{{serve}}</p>
            <p class="sec_intro">次服务对接</p>
            <p class="sec_line"></p>
        </div>
        <div class="data_section fl">
            <p class="sec_num" ng-cloak>{{tec}}</p>
            <p class="sec_intro">项技术发布</p>
            <p class="sec_line"></p>
        </div>
        <div class="data_section fl">
            <p class="sec_num" ng-cloak>{{damend}}</p>
            <p class="sec_intro">项市场需求发布</p>
        </div>
    </div>
    <a href="/index.php/Mobile/Index/choose.html">
        <div class="issue_btn">
            发布技术/需求
            <p class="issue_num">已有326人发布</p>
        </div>
    </a>
</div>
<div class="index_div"></div>

<!-- 热门专题 -->
<div class="index_main_title clear">
    <img class="fl" src="<?php echo (MOBILE); ?>/images/icon-index-hottopic.png" alt="">
    <a href="/index.php/Mobile/Index/theme_list.html">
        <p class="fr more_tec">更多专题<img src="<?php echo (MOBILE); ?>/images/icon-right.png" alt=""></p>
    </a>
</div>
<div class="main_hot" ng-controller="specTopicCtrl">
    <div class="main_hot_wrap">
        <div class="swiper-container" id="swiper-container2">
            <div class="swiper-wrapper">
                <div class="swiper-slide" ng-repeat="list in lists">
                    <a href="/index.php/Mobile/Index/theme_tec?id={{list.id}}.html">
                        <img class="topic_img" ng-src="{{list.cover_url}}" alt="" ng-cloak>
                        <p class="hot_secTit" ng-cloak>{{list.title}}</p>
                        <p class="hot_secCt">
                            <img src="<?php echo (MOBILE); ?>/images/icon-index-item.png" alt="">
                            <span class="hot_secCt_tec" ng-cloak>{{list.count}}项技术</span>
                        </p>

                        <div class="hot_secCt2 clear">
                            <p class="fl">
                                <span class="point"></span>
                                <span class="sec_world" ng-cloak>{{list.miaoshu}}</span>
                            </p>
                          <!--  <p class="fl" style="margin-left: 30px;">
                                <span class="point"></span>
                                <span class="sec_world">抗菌清洁</span>
                            </p> 
                           -->
                        </div>
                    </a>
                </div>
                <!-- 占位div -->
                <div class="swiper-slide" id="sky-slide"></div>
                <div class="swiper-slide" id="sky-slide"></div>
            </div>
        </div>
    </div>
</div>
<div class="index_div"></div>


<!-- 前沿技术 -->
<div class="index_main_title clear">
    <img class="fl" src="<?php echo (MOBILE); ?>/images/icon-index-advanced-tech.jpg" alt="">
    <a href="/index.php/Mobile/Index/tec_list.html">
        <p class="fr more_tec">更多技术<img src="<?php echo (MOBILE); ?>/images/icon-right.png" alt=""></p>
    </a>
</div>

<div class="advancedWrap" ng-controller="advancedCtrl" ng-cloak>
    <a href="/index.php/Mobile/Index/detail_tec.html" ng-repeat="tecList in tecLists">
        <div class="main_section clear">
            <div class="fl main_section_left">
                <img ng-src="{{tecList.lbxt}}" alt="">
                <p class="transfer">{{tecList.hzxs}}</p>
            </div>
            <div class="fr main_section_right">
                <p class="sec_tit">{{tecList.title}}</p>
                <p>
                    <img src="<?php echo (MOBILE); ?>/images/icon-index-industry.png" alt="">
                    <span class="sec_industry">{{tecList.yyxy}}</span>
                </p>
                <p class="p_scan">
                    <img src="<?php echo (MOBILE); ?>/images/icon-index-browse.png" alt="">
                    <span class="sec_scan">{{tecList.clicks}}</span>
                </p>
                <div class="adhi_print">
                    <span class="adhibition">{{tecList.cat_name}}</span>
                    <span class="print">{{tecList.csd}}</span>
                </div>
            </div>
        </div>
    </a>
 </div>

<a href="/index.php/Mobile/Index/tec_list.html">
    <p class="scan_more">查看更多技术</p>
</a>
<div class="index_div"></div>

<!-- 合作单位 -->
<div class="index_main_title clear">
    <img class="fl" src="<?php echo (MOBILE); ?>/images/icon-index-cooperator.jpg" alt="">
    <a href="#">
        <p class="fr more_tec">更多单位<img src="<?php echo (MOBILE); ?>/images/icon-right.png" alt=""></p>
    </a>
</div>
<div class="index_coop_swiper">
    <div class="swiper-container" id="swiper-container3">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="coop_img" src="<?php echo (MOBILE); ?>/images/index-cooperator2.jpg" alt="">
                <p class="coop_title">广州中国科学院现金技术研究所</p>
            </div>
            <div class="swiper-slide">
                <img class="coop_img" src="<?php echo (MOBILE); ?>/images/index-cooperator2.jpg" alt="">
                <p class="coop_title">广州中国科学院现金技术研究所</p>
            </div>
            <div class="swiper-slide">
                <img class="coop_img" src="<?php echo (MOBILE); ?>/images/index-cooperator2.jpg" alt="">
                <p class="coop_title">广州中国科学院现金技术研究所</p>
            </div>
            <div class="swiper-slide">
                <img class="coop_img" src="<?php echo (MOBILE); ?>/images/index-cooperator2.jpg" alt="">
                <p class="coop_title">广州中国科学院现金技术研究所</p>
            </div>
            <div class="swiper-slide">
                <img class="coop_img" src="<?php echo (MOBILE); ?>/images/index-cooperator2.jpg" alt="">
                <p class="coop_title">广州中国科学院现金技术研究所</p>
            </div>
            <div class="swiper-slide">
                <img class="coop_img" src="<?php echo (MOBILE); ?>/images/index-cooperator2.jpg" alt="">
                <p class="coop_title">广州中国科学院现金技术研究所</p>
            </div>

        </div>
    </div>
</div>
<div class="index_div"></div>


<!-- 合作企业 -->
<div class="index_main_title clear">
    <img class="fl" src="<?php echo (MOBILE); ?>/images/icon-index-cooperative-enterprise.jpg" alt="">
    <a href="#">
        <p class="fr more_tec">更多单位<img src="<?php echo (MOBILE); ?>/images/icon-right.png" alt=""></p>
    </a>
</div>
<div class="index_coop_swiper" ng-controller="companyCtrl" ng-cloak>
    <div class="swiper-container" id="swiper-container4">
        <div class="swiper-wrapper">
            <div class="swiper-slide" ng-repeat="unit in comList">
                <img class="coop_img" ng-src="{{unit.src}}" alt="">
            </div>

        </div>
    </div>
</div>

<!--  申请认证-->
<div class="apply_div">
    <p class="apply_div_p">申请认证，技术/需求优先发布</p>
    <a href="/index.php/Mobile/User/user_authen.html"><p class="apply_btn">申请合格认证</p></a>
</div>

<!-- ICP备案号 -->
<div class="ICP">
    <p class="copyright">粤ICP备14074540号-1copyright&copy2014<br>
        庖丁技术 版权所有
    </p>
</div>

<div class="nav">
    <a class="nav_option" href="/index.php/Mobile/Index/index">
        <img src="<?php echo (MOBILE); ?>/images/icon-tabbar-technology-selected.png" alt="">
        <p style="color:#ff971d;">技术</p>
    </a>
    <a class="nav_option" href="/index.php/Mobile/Demand/demand_list">
        <img src="<?php echo (MOBILE); ?>/images/icon-tabbar-demand-default.png" alt="">
        <p>需求</p>
    </a>
    <a class="nav_option" href="/index.php/Mobile/Activity/activity">
        <img src="<?php echo (MOBILE); ?>/images/icon-tabbar-activity-default.png.png" alt="">
        <p>活动</p>
    </a>
    <a class="nav_option" href="/index.php/Mobile/User/user_center">
        <img src="<?php echo (MOBILE); ?>/images/icon-tabbar-my-default.png" alt="">
        <p >我的</p>
    </a>
</div>

</body>
<script src='<?php echo (MOBILE); ?>/js/jquery-3.0.0.min.js'></script>
<script src='<?php echo (MOBILE); ?>/js/swiper.min.js'></script>
<script src='<?php echo (MOBILE); ?>/js/angular.min.js'></script>
<!-- <script src='<?php echo (MOBILE); ?>/js/index.js'></script> -->
<script>
    // 轮播
    var mySwiper = new Swiper('#swiper-container1', {
        pagination : '.swiper-pagination',
        paginationClickable :true,
        // loop:true,
        observer:true,//修改swiper自己或子元素时，自动初始化swiper
        observeParents:true,//修改swiper的父元素时，自动初始化swiper
        // onSlideChangeEnd: function(swiper){
        // 　　　swiper.update();
        // 　　　mySwiper.startAutoplay();
        // 　　   mySwiper.reLoop();
        // }
    });
    var mySwiper2 = new Swiper('#swiper-container2', {
        paginationClickable :true,
        slidesPerView : 3,
        slidesPerGroup : 3,
        freeMode : true,
        observer:true,
        observeParents:true

    });
    var mySwiper3 = new Swiper('#swiper-container3', {
        paginationClickable :true,
        slidesPerColumn : 2,
        slidesPerView : 2,
        slidesPerGroup : 3,
        freeMode : true,
        slidesPerView : 'auto',
        observer:true,
        observeParents:true
    });

    var mySwiper4 = new Swiper('#swiper-container4', {
        paginationClickable :true,
        slidesPerColumn : 2,
        slidesPerView : 2,
        slidesPerGroup : 3,
        freeMode : true,
        slidesPerView : 'auto',
        observer:true,
        observeParents:true
    });

    var app = angular.module('index',[]);
    app.controller("dataCtrl",function ($scope,$http){
        $http({
            method:"GET",
            url:"/api.php/ChannelIndex/index/action/count/channel/fwdj/type/1"
        }).then(function successCallback(response) {                      
                $scope.serve = response.data.data;                             
            }, function errorCallback(response) {
            });

        $http({
            method:"GET",
            url:"/api.php/ChannelIndex/index/action/count/channel/js/type/1"
        }).then(function successCallback(response) {                      
                $scope.tec = response.data.data;                            
            }, function errorCallback(response) {
            });

        $http({
            method:"GET",
            url:"/api.php/ChannelIndex/index/action/count/channel/xq/type/1"
        }).then(function successCallback(response) {                      
                $scope.damend = response.data.data;                
            }, function errorCallback(response) {
            });

    });

    app.controller("specTopicCtrl",function ($scope,$http){    
        $http({
            method:"GET",
            params:{page_num:9},
            url:"/api.php/Paoding/getIndex"
        }).then(function successCallback(response) {                      
                $scope.lists = response.data.data;                           
            }, function errorCallback(response) {

            });
    });

    // 前沿技术
    app.controller("advancedCtrl",function ($scope,$http){
        var data = {
            page:1,
            page_num:2,
            order_field:'create_time',
            category_id:0,
            tag_id:0,
            order_by:'DESC'
        };
        $http({
            method:"POST",
            data:data,
            url:"/api.php/ChannelIndex/index/action/dataList/channel/js/type/1",
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            transformRequest: function(obj) {
                var str = [];
                for (var p in obj) {
                    str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
                }
                return str.join("&");
            }
        }).then(function successCallback(response) {                      
                $scope.tecLists = response.data.data;                                      
            }, function errorCallback(response) {

            });
    })
</script>
</html>