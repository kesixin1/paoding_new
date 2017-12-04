<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>需求详情</title>
    <meta name="description" content="庖丁科技众包服务平台携手国内外先进技术科研院所、顶级技术专家，以实现科技成果市场化为核心，为企业提供快速精准的需求匹配服务，从而实现企业以及科技资源的有效对接，帮助企业实现产业技术升级，助力先进技术完成产业化发展。" />
    <meta name="keywords" content="庖丁众包、智能技术、机械制造、健康医疗、材料科学、能源环保、生产流程优化"/>
    <meta name='viewport' content='user-scalable=no,width=750'>
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/common_new.css">
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/demand.css">
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/my.css">
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/swiper.css">
</head>
<body>
<div class="mask"></div>
<div class="alert">
    <div class="sorry">
        很抱歉，没有找到相关的结果。<br>
        你可以委托庖丁众包
        <p class="findDemand">找需求</p>
    </div>

    <div class="showTel">
        <p>电话号码<span class="tel_email">020-34031992</span></p>
        <p style="border:none">邮箱号<span class="tel_email">info@paoding.cc </span></p>
    </div>
    <div class="close">关闭</div>
</div>
<div class="main">
    <div class="section">
        <p class="sec_title clear">
            <span class="callForBids fl">【招标中】</span>
            <span class="materials fl">防水保温材料研发防水保温材料</span>
        </p>

        <div class="sec_data clear">
            <div class="sec_data_left fl">
                <div>
                    <p class="sec_data_num">需求编号:20171106001</p>
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
    </div>
    <div class="index_div"></div>
</div>

<div class="apply_content_box chose clear">
    <span class='apply_word fl'>发布者</span>
    <input class='apply_means fr' type="text" value="柯大大" readonly="readonly">
</div>
<!-- 获取联系方式 -->
<a href="#"><p class="getConWay">获取联系方式</p></a>

<!-- 未认证时 demand_hide 不可见 -->
<div class="demand_hide" style="display:none">
    <div class="apply_content_box chose clear">
        <span class='apply_word fl'>联系人</span>
        <input class='apply_means fr' type="text" value="柯大大" readonly="readonly">
    </div>

    <div class="apply_content_box chose clear">
        <span class='apply_word fl'>手机号</span>
        <input class='apply_means fr' type="text" value="13651248714" readonly="readonly">
    </div>

    <div class="apply_content_box chose clear">
        <span class='apply_word fl'>邮箱</span>
        <input class='apply_means fr' type="text" value="32456132@qq.com" readonly="readonly">
    </div>

    <div class="apply_content_box chose clear">
        <span class='apply_word fl'>企业名称</span>
        <input class='apply_means fr' type="text" value="庖丁技术开发" readonly="readonly">
    </div>
</div>


<div class="index_div"></div>

<div class="demand_main">
    <div class="demand_main_tit clear">
        <div class="black_block fl"></div>
        需求讲述
    </div>
    <p>
        1、通过裙板或桁架内侧多点监测梯级振动<br>
        2、接入安全回路，必要时停梯<br>
        3、每个梯型正常振幅不同，可以调整报警区间<br>
        4、存储振动记录<br>
        5、目前市场没有同类装置
    </p>
    <div class="demand_photo">
        <img src="<?php echo (MOBILE); ?>/images/demand-image.jpg" alt="">
    </div>
</div>
<p class="advert">
    庖丁众包·专业科技服务平台
</p>
<div class="sec_return">
    <a onclick="javascript:history.go(-1);">
        <img class="return_icon" src="<?php echo (MOBILE); ?>/images/icon-common-return.png" alt="">
    </a>
    <p class="collect">收藏</p>
</div>
</body>
<script src='<?php echo (MOBILE); ?>/js/jquery-3.0.0.min.js'></script>
<script>

    $(".findDemand").on("click",function(){
        $(".sorry").hide();
        $(".showTel").show();
    });

    // 关闭弹出框

    $(".close").on("click",function(){
        $(".mask").hide();
        $(".alert").hide();
    })
</script>
</html>