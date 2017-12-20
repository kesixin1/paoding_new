<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en" ng-app="tec_list">
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
<body ng-controller="tecListCtrl">

<div class="mask" style="display:none"></div>
<div class="alert" style="display:none">
    <div class="sorry">
        很抱歉，没有找到相关的结果。<br>
        你可以委托庖丁众包
        <p class="findDemand">找技术</p>
    </div>

    <div class="showTel">
        <p>电话号码<span class="tel_email">020-34031992</span></p>
        <p style="border:none">邮箱号<span class="tel_email">info@paoding.cc </span></p>
    </div>
    <div class="close">关闭</div>
</div>
<div class="demand_nav">
    <ul>
        <div class="swiper-container" style="overflow:visible">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <li style="margin-left:0;text-align:center" class="active_cat" value="0">全部</li>
                    <div class="sildeBlock"></div>
                </div>
                <div class="swiper-slide" ng-repeat="list in lists">
                    <li ng-cloak ng-value="list.id">{{list.tag_name}}</li>
                </div>
            </div>
        </div>
    </ul>
</div>

<div class="search clear">
    <p class="search_p fl">您当前选择的业务范围</p>   
    <select class="fl" name="" id="demand_type">
        <option value="0">全部</option>
        <option ng-cloak ng-value="option.id" ng-repeat="option in options">{{option.cat_name}}</option>
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
    <a href="/index.php/Mobile/Index/detail_tec.html?data_id={{tecList.id}}" ng-repeat="tecList in tecLists">
        <div class="main_section clear">
            <div class="fl main_section_left">
                <img ng-cloak ng-src="{{tecList.cover_url}}" alt="">
                <p ng-cloak class="transfer">{{tecList.hzxs}}</p>
            </div>
            <div class="fr main_section_right">
                <p class="sec_tit" ng-cloak>{{tecList.title}}</p>
                <p>
                    <img src="<?php echo (MOBILE); ?>/images/icon-index-industry.png" alt="">
                    <span class="sec_industry" ng-cloak>{{tecList.yyxy}}</span>
                </p>
                <p class="p_scan">
                    <img src="<?php echo (MOBILE); ?>/images/icon-index-browse.png" alt="">
                    <span class="sec_scan" ng-cloak>{{tecList.clicks}}</span>
                </p>
                <div class="adhi_print">
                    <span class="adhibition" ng-cloak>{{tecList.cat_name}}</span>
                    <span class="print" ng-cloak>{{tecList.csd}}</span>
                </div>
            </div>
        </div>
    </a>
    </div>


<p class="advert">
    庖丁众包·专业科技服务平台
</p>

<div class="sec_return">
    <a href="/index.php/Mobile/Index/index.html">
        <img class="return_icon" src="<?php echo (MOBILE); ?>/images/icon-common-return.png" alt="">
    </a>
    <p class="collect">发布技术</p>
</div>

</body>
<script src='<?php echo (MOBILE); ?>/js/jquery-3.0.0.min.js'></script>
<script src="<?php echo (MOBILE); ?>/js/swiper.min.js"></script>
<script src="<?php echo (MOBILE); ?>/js/angular.min.js"></script>
<script src="<?php echo (MOBILE); ?>/js/index-publishTec.js"></script>
<script>
    $(".findDemand").on("click",function(){
        $(".sorry").hide();
        $(".showTel").show();
    });
    // 关闭弹出框
    $(".close").on("click",function(){
        $(".mask").hide();
        $(".alert").hide();
    });

    $(".getConWay").on("click",function(){
        $(this).hide();
        $(".getTelphoto").show();
    })

    // 轮播
    var mySwiper = new Swiper(".swiper-container",{
        freeMode : true,
        slidesPerView : 5,
        observer: true,//修改swiper自己或子元素时，自动初始化swiper
        observeParents: true//修改swiper的父元素时，自动初始化swiper
    });

    $(".inputDiv").on("click",function(){
        $(".search").hide();
        $(".searching").show();
    });
    $(function(){
        $.ajaxSetup({
            async: false,
        });
    });

    var page = "";//页码
    var info = "";//搜索判断有无数据
    var page_total = "";//总页数
    var data = {
        "page": "1",
        "page_num": "10",
        "order_field": "create_time",
        "order_by": "DESC",
        "category_id": "0",
        "tag_id": "0",
        "get_page":"true",
        "search":""
    };
   
    var app = angular.module("tec_list", []);  
    app.controller("tecListCtrl",function ($scope,$http){
        // 头部导航
        $http({
            method:'GET',
            url:'/api.php/ChannelIndex/index/action/dataList/channel/js/type/4',
        }).then(function successCallback(response) {
               $scope.lists = response.data.data;                       
            }, function errorCallback() {
        });
        // 获取需求业务范围接口
        $http({
            method:'GET',
            url: '/api.php/ChannelIndex/index/action/dataList/channel/js/type/2'
        }).then(function successCallback(response) {
               $scope.options = response.data.data;
            }, function errorCallback() {
        }); 
        // 全部
        $http({
            method:'POST',
            data:data,
            url: '/api.php/ChannelIndex/index/action/dataList/channel/js/type/1',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            transformRequest: function(obj) {
                var str = [];
                for (var p in obj) {
                    str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
                }
                return str.join("&");
            }
        }).then(function successCallback(response) {
               $scope.tecLists = response.data.data.info;
                page = response.data.data.page.page;
                page_total = response.data.data.page.page_total;
            }, function errorCallback() {
        }); 

    });

    $(".demand_nav").on("click",".swiper-slide li",function(){
        page="1";
        $(".swiper-slide li").each(function () {
            $(this).removeClass('active_cat');
        });
        $(this).addClass('active_cat');
        var index = $(this).parent(".swiper-slide").index();
        var tranLeft = index*150;
        if(index==6){tranLeft = 873;}
        $(".sildeBlock").css("transform","translateX("+tranLeft+"px)");
        // 按需求栏目和业务范围请求列表接口
        data.search="";
        data.page="1";
        data.category_id = $("#demand_type").val();
        data.tag_id = $(this).val();
        page_total=getListData(data,"html");
    });

    // 滚动加载
    $(window).scroll(function () {
        if ($(document).scrollTop() > ($(document).height() - $(window).height()) / 1.5) {
            page = parseInt(page) + 1;
            if (page <= page_total) {
                data.page=page;
                page_total=getListData(data,"append");
            }
        }
    });  

    // 下拉请求
    $('select#demand_type').change(function () {
        page="1";
        data.search="";
        data.page="1";
        data.category_id = $(this).val();
        data.tag_id = $(".active_cat").val();
        page_total=getListData(data,"html");
    }); 

    // 搜索
    $(".click_search").on("click",function(){
        page="1";
        data.category_id="0";
        data.tag_id="0";
        data.page="1";
        data.search = $(".tech_search").val();      
        page_total=getListData(data,"html");
        if(info == ""){
            $(".mask").show();
            $(".alert").show();
        }
    })

    /**
     * 请求列表数据
     * @param data  全局变量data
     * @param action  append或者html方法
     */

    function getListData(data,action) {
        var result;
        $.ajax({
            type: "POST",
            url: "/api.php/ChannelIndex/index/action/dataList/channel/js/type/1",
            data: data,
            dataType: "json",
            async: false,
            success: function(response){
                var code="";
                var info = response['data']['info'];
                result=response['data']['page'].page_total;
                for (var i = 0; i < info.length; i++) {
                    code = code +
                    '<a href=/index.php/Mobile/Index/detail_tec.html?data_id='+info[i].id+'>'+
                        '<div class="main_section clear">'+
                            '<div class="fl main_section_left">'+
                                '<img src='+info[i].cover_url+' alt="">'+
                                '<p class="transfer">'+info[i].hzxs+'</p>'+
                            '</div>'+
                            '<div class="fr main_section_right">'+
                               '<p class="sec_tit">'+info[i].title+'</p>'+
                               '<p>'+
                                    '<img src="<?php echo (MOBILE); ?>/images/icon-index-industry.png" alt="">'+
                                    '<span class="sec_industry">'+info[i].yyxy+'</span>'+
                                '</p>'+
                                '<p class="p_scan">'+
                                    '<img src="<?php echo (MOBILE); ?>/images/icon-index-browse.png" alt="">'+
                                    '<span class="sec_scan">'+info[i].clicks+'</span>'+
                                '</p>'+
                                '<div class="adhi_print">'+
                                    '<span class="adhibition">'+info[i].cat_name+'</span>'+
                                    '<span class="print">'+info[i].csd+'</span>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</a>';

                }
                if(action == "html"){
                    $('.advancedWrap').html(code);
                }else{
                    $('.advancedWrap').append(code);
                }
            }
        });
        return result;
    }
</script>
</html>