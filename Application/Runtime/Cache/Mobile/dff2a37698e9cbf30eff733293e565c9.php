<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>关联手机号</title>
    <meta name="description" content="庖丁科技众包服务平台携手国内外先进技术科研院所、顶级技术专家，以实现科技成果市场化为核心，为企业提供快速精准的需求匹配服务，从而实现企业以及科技资源的有效对接，帮助企业实现产业技术升级，助力先进技术完成产业化发展。" />
    <meta name="keywords" content="庖丁众包、智能技术、机械制造、健康医疗、材料科学、能源环保、生产流程优化"/>
    <meta name='viewport' content='user-scalable=no,width=750'>
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/common_new.css">
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/my.css">
</head>
<body>
<div class="user_header">
    <div class="user_cicle">
        <img src="images/WX-head.png" alt="">
    </div>
    <p class="user_name">老王</p>
</div>
<div class="apply_identifying">
    <input class="new_name" type="number" placeholder="输入新手机号" id="phone1" oninput="if(this.value>4){this.value=this.value.substr(0,11)};;">
    <input type='button' class="get_indentify" value='点击获取验证码'>
    <input class="new_name" type="number" placeholder="输入验证码" id="phone2" oninput="if(this.value>4){this.value=this.value.substr(0,4)};">
    <input class="new_name" type="password" placeholder="密码不少于6位" id="phone3">
</div>
<a class="change_name_save" href="" style="margin:108px auto 0;">完成</a>
</body>
<script src='<?php echo (MOBILE); ?>/js/jquery-3.0.0.min.js'></script>
<script src='<?php echo (MOBILE); ?>/js/common.js'></script>
<script>
    // 判断输入内容不为空时按钮状态改变
    $(".new_name").keyup(function(){
        if($("#phone1").val()!="" && $("#phone2").val()!="" && $("#phone3").val()!=""){
            $('.change_name_save').css('background','#333');
        }else{
            $('.change_name_save').css('background','#ccc');
        }
    })

    var countdown=60;
    function goTime() {
        if (countdown == 0) {
            $('.get_indentify').attr("disabled",false);

            $('.get_indentify').val("重新发送");
            countdown = 60;
        } else {
            $('.get_indentify').attr("disabled",true);
            // $('.get_indentify').css('background','#fff');
            $('.get_indentify').val("重新发送(" + countdown + ")");
            countdown--;
            setTimeout(function() {
                goTime()
            },1000);
        }
    }

    $('.get_indentify').on('click',function(){
        goTime();
    })

</script>
</html>