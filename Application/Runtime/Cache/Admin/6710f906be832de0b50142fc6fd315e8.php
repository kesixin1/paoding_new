<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title><?php echo ($gemmap_config['shop_info_store_title']); ?></title>
    <meta name="keywords" content="<?php echo ($gemmap_config['shop_info_store_keyword']); ?>"/>
    <meta name="description" content="<?php echo ($gemmap_config['shop_info_store_desc']); ?>"/>

    <link href="<?php echo (CSS); ?>/style.css" rel="stylesheet">
    <link href="<?php echo (CSS); ?>/style-responsive.css" rel="stylesheet">

    <!-- jQuery 2.1.4 -->
    <script src="/Public/js/global.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<style type="text/css">
    .fr {
        float: right;
    }

    .caption h2 {
        font-size: 24px;
        line-height: 18px;
        font-weight: 700;
    }

    .option {
        height: 27px;
        width: 145px;
    }

    .form-input {
        width: 400px;
        display: inline-block;
    }

    .panel-body {
        padding: 15px;
        border: 1px solid #e6e8eb;
        margin-top: -1px;
    }

    .radio input[type=radio], .radio-inline input[type=radio], .checkbox input[type=checkbox], .checkbox-inline input[type=checkbox] {
        float: none;
        margin-left: 10px;
    }

    .input-group-addon {
        padding: 5px 20px;
    }
    .control-label  input{    width: 20px;
        height: 20px;
        background-color: #ffffff;
        border: solid 1px #dddddd;
        -webkit-border-radius:50%;
        border-radius: 50%;
        font-size: 16px;
        margin: 0;
        padding: 0;
        position: relative;
        display: inline-block;
        vertical-align: top;
        cursor: default;
        -webkit-appearance: none;
        -webkit-user-select: none;
        user-select: none;
        -webkit-transition: background-color ease 0.1s;
        transition: background-color ease 0.1s;
    }
    .control-label  input:hover{cursor:pointer;}
    .control-label  input:focus { outline: none !important; }
    .control-label  input:checked{    background-color: #03a9f4;
        border: solid 1px #03a9f4;
        text-align: center;
        background-clip: padding-box;
        border:none;
    }
    .control-label  input:checked:before{    content: '';
        width: 10px;
        height: 6px;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -5px;
        margin-top: -5px;
        background: transparent;
        border: 1px solid #ffffff;
        border-top: none;
        border-right: none;
        z-index: 2;
        -webkit-border-radius: 0;
        border-radius: 0;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);}

    .control-label  input:checked:after{    content: '';
        width: 10px;
        height: 6px;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -5px;
        margin-top: -5px;
        background: transparent;
        border: 1px solid #ffffff;
        border-top: none;
        border-right: none;
        z-index: 2;
        -webkit-border-radius: 0;
        border-radius: 0;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);}
</style>

<body class="sticky-header">
<section>

    <!-- main content start-->
    <div class="main-content" width="100%" style="margin:0px;">
        <!--body wrapper start-->
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            用户信息
                        <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" id="postbutton" class="btn btn-default "
                                            onclick="ajax_submit_form('form_id')"><i class="fa fa-save"></i>保存
                                    </button>
                                    <a href="javascript:history.go(-1)" data-toggle="tooltip" title=""
                                       class="btn btn-default" data-original-title="返回"><i class="fa fa-reply"></i>返回</a>
                                </div>
                            </div>
                        </header>
                        <div class="">
                            <form  class="adminex-form" method="post" id="form_id">
                                <input type="hidden" name="id" id="id" value="<?php echo ($user["user_id"]); ?>">
                                <div class="panel-body">
                                    <div class="nav-button ">
                                        <span class="col-md-2">用户名:</span>
                                        <?php if($user["user_id"] != ''): echo ($user["user_name"]); ?>
                                        <?php else: ?>
                                        <input class="form-control form-input" datatype="*"
                                               nullmsg="用户名不得为空！" type="text" name="user_name"
                                               placeholder="用户名"
                                               value="<?php echo ($user["user_name"]); ?>"/><?php endif; ?>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="nav-button ">
                                        <span class="col-md-2">密码: </span>

                                            <input class="form-control form-input" ignore="ignore"
                                                   datatype="/^[0-9a-zA-Z]+$/,*6-15"
                                                   errormsg="请填写6到15位的数字和英文的字符" type="password"
                                                   name="password" placeholder="6-15位，由数字和英文组成"/>

                                            <!--<input class="form-control form-input" ignore="ignore"-->
                                                   <!--datatype="/^[0-9a-zA-Z]+$/,*6-15"-->
                                                   <!--errormsg="请填写6到15位的数字和英文的字符" type="password"-->
                                                   <!--readonly="readonly"-->

                                                   <!--name="password" placeholder="6-15位，由数字和英文组成"/>（只修改资料时请勿填写）-->
                                    </div>
                                </div>
                                <?php if($user["user_id"] == ''): ?><div class="panel-body">
                                    <div class="nav-button ">
                                        <span class="col-md-2">确认密码: </span>
                                            <input class="form-control form-input" ignore="ignore"
                                                   datatype="/^[0-9a-zA-Z]+$/,*6-15"
                                                   errormsg="确认密码不一致！" recheck="password"
                                                   type="password" name="password2"
                                                   placeholder="6-15位，由数字和英文组成"/>
                                            <!--<input class="form-control form-input" ignore="ignore"-->
                                                   <!--datatype="/^[0-9a-zA-Z]+$/,*6-15"-->
                                                   <!--errormsg="确认密码不一致！" recheck="password"-->
                                                   <!--readonly="readonly"-->
                                                   <!--type="password" name="password2"-->
                                                   <!--placeholder="6-15位，由数字和英文组成"/>（只修改资料时请勿填写）-->
                                    </div>
                                </div><?php endif; ?>
                                <div class="panel-body">
                                    <div class="nav-button ">
                                        <span class="col-md-2">头像图片:</span>
                                        <input type="text" readonly="readonly" class="form-control form-input" style="float:left;"
                                               placeholder="头像图片"
                                               name="head_pic" id="head_pic" value="<?php echo ($user["head_pic"]); ?>">
                                        <div class="col-sm-3">
                                            <input type="button" class="btn btn-info" style="float: left;"
                                                   onClick="GetUploadify(1,'head_pic','head_pic','')" value="上传图片"/>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <button class="btn btn-info " type="button" onclick="preview('head_pic')">预览</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel-body">
                                    <div class="nav-button ">
                                        <span class="col-md-2">会员昵称:</span>
                                        <input class="form-control form-input" datatype="*"
                                               nullmsg="会员昵称不得为空！" type="text" name="nickname"
                                               placeholder="会员昵称" value="<?php echo ($user["nickname"]); ?>"/>
                                    </div>
                                </div>
                                <!--<div class="panel-body">-->
                                    <!--<span class="col-md-2">用户类型:</span>-->
                                    <!--<select class="small form-option" id="authentication" name="authentication"-->
                                            <!--style="font-size: 14px;">-->
                                        <!--<option value="1">&nbsp;普通用户</option>-->
                                        <!--<option value="2">&nbsp;认证用户</option>-->
                                        <!--<option value="3">&nbsp;企业用户</option>-->
                                    <!--</select>-->
                                <!--</div>-->
                                <div class="panel-body">
                                    <span class="col-md-2">性别:</span>
                                    <label class="control-label">
                                        <input name="sex" type="radio" value="0"<?php if($user['sex'] == 0): ?>checked<?php endif; ?>>保密
                                    </label>
                                    <label class="control-label">
                                        <input name="sex" type="radio" value="1"<?php if($user['sex'] == 1): ?>checked<?php endif; ?>>男
                                    </label>
                                    <label class="control-label">
                                        <input name="sex" type="radio" value="2"<?php if($user['sex'] == 2): ?>checked<?php endif; ?>>女
                                    </label>
                                </div>
                                <div class="panel-body">
                                    <div class="nav-button ">
                                        <span class="col-md-2">邮件地址:</span>
                                        <input class="form-control form-input"
                                               datatype="e" type="text" name="email"
                                               placeholder="邮件地址" value="<?php echo ($user["email"]); ?>"/>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="nav-button ">
                                        <span class="col-md-2">联系电话:</span>
                                        <input class="form-control form-input" datatype="m"
                                               type="tel" name="mobile" placeholder="联系电话" value="<?php echo ($user["mobile"]); ?>"/>
                                    </div>
                                </div>
                                <div class="panel-body" style="display: none">
                                    <span class="col-md-2">是否分销:</span>
                                    <label class="control-label">
                                    <input name="is_distribut" type="radio" value="1"
                                    <?php if($user['is_distribut'] == 1): ?>checked<?php endif; ?>
                                    >是
                                        </label>
                                    <label class="control-label">
                                    <input name="is_distribut" type="radio" value="0"
                                    <?php if($user['is_distribut'] == 0): ?>checked<?php endif; ?>
                                    >否
                                        </label>

                                </div>

                                <div class="panel-body" style="display: none">
                                    <table class="table table-bordered table-striped table-condensed cf">
                                        <tbody>
                                        <tr>
                                            <td data-title="Code">用户余额:</td>
                                            <td data-title="Company"><?php echo ($user["user_money"]); ?></td>
                                            <td class="numeric" data-title="Price">累积分佣金额:</td>
                                            <td class="numeric" data-title="Change"><?php echo ($user["distribut_money"]); ?></td>
                                        </tr>
                                        <tr>
                                            <td data-title="Code">上一级编号:</td>
                                            <td data-title="Company">
                                                <?php if($user[first_leader] > 0): ?><a href="<?php echo U(detail,array('id'=>$user[first_leader]));?>"><?php echo ($user["first_leader"]); ?></a>
                                                    <?php else: ?>
                                                    <?php echo ($user["first_leader"]); endif; ?>
                                            </td>
                                            <td class="numeric" data-title="Price">一级下线数:</td>
                                            <td class="numeric" data-title="Change"><?php echo ($user["first_lower"]); ?></td>
                                        </tr>
                                        <tr>
                                            <td data-title="Code">上二级编号:</td>
                                            <td data-title="Company">
                                                <?php if($user[second_leader] > 0): ?><a href="<?php echo U(detail,array('id'=>$user[second_leader]));?>"><?php echo ($user["second_leader"]); ?></a>
                                                    <?php else: ?>
                                                    <?php echo ($user["second_leader"]); endif; ?>
                                            </td>
                                            <td class="numeric" data-title="Price">二级下线数:</td>
                                            <td class="numeric" data-title="Change"><?php echo ($user["second_lower"]); ?></td>
                                        </tr>
                                        <tr>
                                            <td data-title="Code">上三级编号:</td>
                                            <td data-title="Company">
                                                <?php if($user[third_leader] > 0): ?><a href="<?php echo U(detail,array('id'=>$user[third_leader]));?>"><?php echo ($user["third_leader"]); ?></a>
                                                    <?php else: ?>
                                                    <?php echo ($user["third_leader"]); endif; ?>
                                            </td>
                                            <td class="numeric" data-title="Price">三级下线数:</td>
                                            <td class="numeric" data-title="Change"><?php echo ($user["third_lower"]); ?></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </section><!--表单数据-->


    </div>
    </div>


    </div>
    <!-- main content end-->
</section>
<script type="text/javascript" src="<?php echo (JS); ?>/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo (JS); ?>/Validform_v5.3.2_min.js"></script>
<script type="text/javascript">
    $('.adminex-form').Validform({
        tiptype: 3
    });
</script>
<!-- Placed js at the end of the document so the pages load faster -->
<script src="<?php echo (JS); ?>/jquery-1.10.2.min.js"></script>
<script src="<?php echo (JS); ?>/jquery-ui-1.9.2.custom.min.js"></script>
<script src="<?php echo (JS); ?>/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo (JS); ?>/bootstrap.min.js"></script>
<script src="<?php echo (JS); ?>/modernizr.min.js"></script>
<script src="<?php echo (JS); ?>/jquery.nicescroll.js"></script>
<script src="/Public/js/layer/layer-min.js"></script><!-- 弹窗js 参考文档 http://layer.layui.com/-->
<script src="/Public/js/laydate/laydate.js"></script>
<!--common scripts for all pages-->
<script src="<?php echo (JS); ?>/scripts.js"></script>
<script>
    document.getElementById("authentication").value="<?php echo ($user["authentication"]); ?>";
    function preview(id) {
        var src = "";
        if ( $( '#' + id ).val() ) {
            src = $( '#' + id ).val();
        } else {
            src = $( '#' + id ).attr( "src" );
        }

        var content;
        if (src == "") {
            content = '没有图片可供预览';
            layer.msg(content);
        }
        else {
            content = "<img width='300' height='300' src='" + src + "'>";
            layer.open({
                type: 1,
                title: false,
                closeBtn: false,
                area: ['300px', '300px'],
                skin: 'layui-layer-nobg', //没有背景色
                shadeClose: true,
                content: content
            });
        }
    }    //表单提交判断，id为空则URL表示添加，否则表示编辑
    function ajax_submit_form(form_id) {
        //判断id值是否存在
        var id = $("#id").val();
        var action = '';
        if (id == '') {
            //不存在，表示添加
            action = "/index.php/Admin/User/user/action/add";
        } else {
            //存在，表示编辑
            action = "/index.php/Admin/User/user/action/edit/id/<?php echo ($user["user_id"]); ?>";
        }
        //异步提交表单数据
        $.ajax({
            type: "post",
            url: action,
            data: $('#' + form_id).serialize(),
            dataType: 'json',
            success: function (res) {
                if (res.result == 1) {
                    layer.msg(res.msg);
                    setTimeout(function () {
                        window.location.href = "/index.php/Admin/User/user/action/page_list";
                    }, 1000);
                }
                if (res.result == 0) {
                    layer.msg(res.msg);
                }
            }
        })
    }
</script>
</body>
</html>