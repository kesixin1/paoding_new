<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人信息</title>
    <meta name="description" content="庖丁科技众包服务平台携手国内外先进技术科研院所、顶级技术专家，以实现科技成果市场化为核心，为企业提供快速精准的需求匹配服务，从而实现企业以及科技资源的有效对接，帮助企业实现产业技术升级，助力先进技术完成产业化发展。" />
    <meta name="keywords" content="庖丁众包、智能技术、机械制造、健康医疗、材料科学、能源环保、生产流程优化"/>
    <meta name='viewport' content='user-scalable=no,width=750'>
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/common_new.css">
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/my.css">
</head>
<body>
<p class="change_name">修改昵称</p>
<p class="change_name_tip">可使用中英文、数字和下划线，字数限制2-10位</p>
<p class="write_tip">输入新昵称</p>
<input class="new_name" id="nickname" type="text" placeholder="输入新昵称">
<a class="change_name_save" href="">保存</a>
</body>
<script src='<?php echo (MOBILE); ?>/js/jquery-3.0.0.min.js'></script>
<script src='<?php echo (MOBILE); ?>/js/common.js'></script>
<script src='<?php echo (MOBILE); ?>/js/return.js'></script>
<script>
    $(".new_name").focus(function(){
        $(".write_tip").css("opacity",1);
        $(this).css("border-bottom","1px solid #1e1e1e").attr("placeholder","");
    });

    // 判断输入内容不为空时按钮状态改变
    $(".new_name").keyup(function(){
        if($(this).val()!=""){
            $('.change_name_save').css('background','#333');
        }else{
            $('.change_name_save').css('background','#ccc');
        }
    })

    $('.change_name_save').on('click',function () {
        var data={nickname:$('#nickname').val()};
        $.ajax({
            type: "POST",
            url: "/api.php/User/user_info/action/edit",
            data: data,
            dataType: "json",
            success: function(response){
                alert(response.result);
            }
        });
    });






</script>
</html>