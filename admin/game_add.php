    <?php 
        include 'header.php';
        include '../class/fun.php';
       

        

         //添加游戏
        if(isset($_POST['sub'])){
          
             $game['game_name']= $_POST['game_name'];
             $game['game_img_lib']= json_encode($_POST['imgs']);
             $game['game_desc'] = isset($_POST['editorValue']) ? trim($_POST['editorValue']) : '';
            //上传图片
            if(!empty($_FILES)){
              
                $fun = new fun();
                 $upload = $fun->uplaods();
              
                if($upload['code']==1){
                      $game['game_img'] =  $upload['thumb'];
                      $game['game_small_img'] =$upload['img'];
                }else{
                      $game['game_img'] = "";
                      $game['game_small_img'] = "";
                }
            }
           $res = $db->add('lay_game',$game);
           if($res['code']==1){
                echo "<script> alert('添加成功');window.location.href='game_list.php';</script>";
           }else{
                echo "<script> alert('添加失败')</script>";
           }
        }

        //修改操作
        if(isset($_GET['edit'])&& !empty($_GET['edit'])){
            $id = $_GET['edit'];
            $findinfo=$db->find_all('lay_game','*'," WHERE `game_id`={$id}");

            $imglib = json_decode($findinfo['game_img_lib'],true);

        }
         if(isset($_POST['edit']) && !empty($_POST['edit'])){

                $id=trim($_POST['game_id']);
                $game['game_name']= $_POST['game_name'];
                if(isset($_POST['imgs'])){
                     $game['game_img_lib']= json_encode($_POST['imgs']);
                }else{
                     $game['game_img_lib']= json_encode($_POST['imgss']);
                }
               
                $game['game_desc'] = isset($_POST['editorValue']) ? trim($_POST['editorValue']) : '';
                //验证数据
             
                //上传图片
                if(!empty($_FILES)){
                    $fun = new fun();
                     $upload = $fun->uplaods();
                    if($upload['code']==1){
                          $game['game_img'] =  $upload['thumb'];
                          $game['game_small_img'] =$upload['img'];
                    }else{
                          $game['game_img'] = $findinfo['game_img'];
                          $game['game_small_img'] = $findinfo['game_small_img'];
                    }
                }else{
                          $game['game_img'] = $findinfo['game_img'];
                          $game['game_small_img'] = $findinfo['game_small_img'];
                }

                 $res = $db->edit('lay_game',$game," WHERE `game_id`={$id}");
                 if($res['code']==1){
                    echo "<script> alert('修改成功');window.location.href='game_list.php';</script>";
                   }else{
                        echo "<script> alert('修改失败')</script>";
                   }
             
       }
        
       
    ?>
    <style>
        .upload-thumb {
            display: block !important;
            float: left;
            width: 147px !important;
            height: 147px !important;
            position: relative;
        }

        .upload-thumb img {
            width: 100%;
            height: 100%;
        }

        .img-box, .sku-img-box {
            overflow: hidden;
        }

        .off-box, .sku-off-box {
            position: absolute;
            width: 18px;
            height: 18px;
            right: 0;
            top: 0;
            line-height: 18px;
            background-color: #FFF;
            cursor: pointer;
            text-align: center;
        }

        .black-bg {
            position: absolute;
            right: 0;
            top: 0;
            left: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.3);
        }

        .hide {
            display: none;
        }

        .img-error {
            color: red;
            height: 25px;
            line-height: 25px;
            display: none;
        }

        .hint {
            font-size: 12px;
            line-height: 16px;
            color: #BBB;
            margin-top: 10px;
        }

        .ncsc-goods-default-pic .goodspic-uplaod .handle {
            height: 30px;
            margin: 10px 0;
        }

        .ncsc-upload-btn, .upload-btn {
            vertical-align: top;
            width: 80px;
            height: 30px;
            margin: 10px 5px 0 0;
            display: block;
            position: relative;
            z-index: 1;
        }

        .ncsc-upload-btn {
            display: inline-block;
            margin: 0 5px 0;
            vertical-align: middle;
        }

        .ncsc-upload-btn span, .upload-btn span {
            width: 80px;
            height: 30px;
            position: absolute;
            left: 0;
            top: 0;
            z-index: 2;
            cursor: pointer;
        }

        .ncsc-upload-btn .input-file, .upload-btn .input-file {
            width: 80px;
            height: 30px;
            padding: 0;
            margin: 0;
            border: none 0;
            opacity: 0;
            filter: alpha(opacity=0);
            cursor: pointer;
        }

        .ncsc-upload-btn p, .upload-btn p {
            font-size: 12px;
            line-height: 20px;
            background-color: #F5F5F5;
            text-align: center;
            color: #666;
            width: 78px;
            height: 20px;
            padding: 4px 0;
            border: solid 1px;
            border-color: #DCDCDC #DCDCDC #B3B3B3 #DCDCDC;
            position: absolute;
            left: 0;
            top: 0;
            cursor: pointer;
            z-index: 1;
        }

        select, input[type="file"] {
            height: 30px;
            line-height: 30px;
        }

        .base {
            width: 80%;
            background-color: #fff;
            border-radius: 20px;
            margin: auto;
        }

    </style>
    <section id="content">
        <div id="topbar" class="affix">
            <ol class="breadcrumb">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                <li class="active">游戏管理</li>
            </ol>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-md-10 col-lg-8 center-column">
                    <form action="" method="post" class="cmxform" id="uploadForm" enctype='multipart/form-data'>
                    <input type="hidden" name="game_id" value="<?php  if(isset($findinfo)){ echo $findinfo['game_id'];}else{ echo ""; }?>" />

                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title"> <?php if( isset($findinfo)){ echo '编辑'; }else{ echo "添加"; } ?></div>
                                <div class="panel-btns pull-right margin-left">
                                    <a href="#"
                                       class="btn btn-default btn-gradient dropdown-toggle" onclick="window.history.go(-1)"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-7">
                                    
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">游戏名称</span>
                                            <input type="text" name="game_name" value="<?php 
                                                    if(isset($findinfo)){
                                                        echo $findinfo['game_name'];
                                                    }
                                            ?>" class="form-control" >
                                        </div>
                                    </div>

                                   
                                    <div>
                                            <div class="fileinput fileinput-new" data-provides="fileinput"  id="exampleInputUpload">
                                                <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
                                                <img id='picImg' style="width: 100%;height: auto;max-height: 150px;" src="<?php 
                                                        if(isset($findinfo)){
                                                         echo $findinfo['game_img'];
                                                     }else{
                                                        echo "../static/admin/images/uploadimg.png";
                                                     }

                                                ?>" alt="" />
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                <div>
                                                    <span class="btn btn-primary btn-file">
                                                        <span class="fileinput-new">选择文件</span>
                                                        <span class="fileinput-exists">换一张</span>
                                                        <input type="file" name="pic1[]" id="picID" accept="image/gif,image/jpeg,image/x-png"/>
                                                    </span>
                                                    <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                                                </div>
                                            </div>

                                    </div>
                                    <h2>小图</h2>
                                    <div>
                                            <div class="fileinput fileinput-new" data-provides="fileinput"  id="exampleInputUpload">
                                                <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
                                                <img id='picImg' style="width: 100%;height: auto;max-height: 150px;" src="<?php 
                                                        if(isset($findinfo)){
                                                         echo $findinfo['game_small_img'];
                                                     }else{
                                                        echo "../static/admin/images/uploadimg.png";
                                                     }

                                                ?>" alt="" />
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                <div>
                                                    <span class="btn btn-primary btn-file">
                                                        <span class="fileinput-new">选择文件</span>
                                                        <span class="fileinput-exists">换一张</span>
                                                        <input type="file" name="pic1[]" id="picID" accept="image/gif,image/jpeg,image/x-png"/>
                                                    </span>
                                                    <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                                                </div>
                                            </div>

                                    </div>

                                   
                                </div>
                                  <div class="form-group col-md-12">
                                    <script type="text/plain" id="myEditor" style="width:100%;height:200px;">
                                    <?php echo $findinfo['game_desc'] ?>
                                    </script>
                                </div>
                                <div style="clear: both;"></div>
                                <h2 style="text-align:center;margin-top: 120px;">游戏图库（可拖动排序）</h2>
                                <div class="base">
                                    <div id="goods_picture_box" class="controls" style="background-color:#FFF;border: 1px solid #E9E9E9;">
                                        <div class="ncsc-goods-default-pic">
                                            <div class="goodspic-uplaod" style="padding: 15px;">
                                                <div class='img-box' style="min-height:160px;">
                                                    <div class="upload-thumb" id="default_uploadimg">
                                                        <?php if($findinfo){?>
                                                        <?php foreach($imglib as $val){ ?>
                                                            <img src="<?php echo $val; ?>">
                                                            <input type="hidden" name="imgss[]"  value="<?php echo $val; ?>"/>

                                                        <?php }?>
                                                        <?php }else{ ?>
                                                        <img src="../static/admin/images/default_goods_image_240.gif">
                                                        <?php }?>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                                <span class="img-error">最少需要一张图片作为商品主图</span>
                                                <p class="hint">上传多张图片，<font color="red">支持同时上传多张图片,多张图片之间可随意调整位置</font>；支持jpg、gif、png格式上传或从图片空间中选择，建议使用尺寸800x800像素以上、大小不超过1M的正方形图片，上传后的图片将会自动保存在uploads文件夹中。
                                                </p>
                                                <div class="handle">
                                                    <div class="ncsc-upload-btn">
                                                        <a href="javascript:void(0);">
                                                            <span>
                                                                <input style="cursor:pointer;font-size:0;height: 20px;" type="file" id="fileupload" hidefocus="true" class="input-file" name="file_upload" multiple="multiple"/>
                                                            </span>
                                                            <p >图片上传</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input type="submit" value="提交" class="submit btn btn-blue" name="<?php if(isset($findinfo)){
                                                echo "edit";
                                        }else{echo "sub" ;} ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>
    <!-- End: Content -->
</div>
<!-- End: Main -->


<script src="../static/admin/js/bootstrap-fileinput.js"></script>
<input type="hidden" id="album_id" value="1"/>
<script src="../static/admin/js/jquery-1.8.1.min.js" type="text/javascript" charset="utf-8"></script>
<script src="../static/admin/js/drag-arrange.js" type="text/javascript" charset="utf-8"></script>
<script src="../static/admin/js/ajax_file_upload.js" type="text/javascript"></script>
<script type="text/javascript" src="../static/admin/js/jquery.ui.widget.js" charset="utf-8"></script>
<script type="text/javascript" src="../static/admin/js/jquery.fileupload.js" charset="utf-8"></script>
<link type="text/css" rel="stylesheet" href="../static/admin/umeditor/themes/default/_css/umeditor.css">
 <script src="../static/admin/js/bootstrap-fileinput.js"></script>
<script src="../static/admin/umeditor/umeditor.config.js" type="text/javascript"></script>
<script src="../static/admin/umeditor/api.js" type="text/javascript"></script>
<script src="../static/admin/umeditor/lang/zh-cn/zh-cn.js" type="text/javascript"></script>
<script type="text/javascript">
    var ue = UM.getEditor('myEditor', {
        autoClearinitialContent: false,
        wordCount: false,
        elementPathEnabled: false,
        initialFrameHeight: 300
    });
</script>
<script type="text/javascript">

    var dataAlbum;
    var UPLOADGOODS = 'UPLOAD_GOODS';//存放商品图片
    $(function () {
        //给图片更换位置事件
        $('.draggable-element').arrangeable();

        var album_id = $("#album_id").val();
        dataAlbum = {
            "album_id": album_id,
            "type": "1,2,3,4",
            'file_path': UPLOADGOODS
        };
        // ajax 上传图片
        var upload_num = 0; // 上传图片成功数量
        $('#fileupload').fileupload({
            url: "upload.php",
            dataType: 'json',
            //formData:dataAlbum,
            add: function (e, data) {
                $("#goods_picture_box .img-error").hide();
                $("#goods_picture_box #default_uploadimg").remove();
                //显示上传图片框
                var html = "";
                $.each(data.files, function (index, file) {
                    html += '<div class="upload-thumb draggable-element"  nstype="' + file.name + '">';
                    html += '<img nstype="goods_image" src=../static/admin/images/uoload_ing.gif">';
                    html += '<input type="hidden"  class="upload_img_id" nstype="goods_image" name="imgs[]">';
                    html += '<div class="black-bg hide">';
                    html += '<div class="off-box">&times;</div>';
                    html += '</div>';
                    html += '</div>';
                });
                $(html).appendTo('#goods_picture_box .img-box');
                //模块可拖动事件
                $('#goods_picture_box .draggable-element').arrangeable();
                data.submit();
            },
            done: function (e, data) {
                var param = data.result;
                $this = $('#goods_picture_box div[nstype="' + param.origin_file_name + '"]');
                if (param.state > 0) {
                    $this.removeAttr("nstype");
                    $this.children("img").attr("src", param.file_name);
                    $this.children("input[type='hidden']").val(param.file_path);
                } else {
                    $this.remove();
                    if ($("#goods_picture_box .img-box .upload-thumb").length == 0) {
                        var img_html = '<div class="upload-thumb" id="default_uploadimg">';
                        img_html += '<img src="./static/admin/images/default_goods_image_240.gif">';
                        img_html += '</div>';
                        $("#goods_picture_box .img-box").append(img_html);
                    }
                    $("#goods_picture_box .img-error").html("请检查您的上传参数配置或上传的文件是否有误").show();
                }
            }
        })

        //图片幕布出现
        $(".draggable-element").live('mouseenter', function () {
            $(this).children(".black-bg").show();
        });
        //图片幕布消失
        $(".draggable-element").live('mouseleave', function () {
            $(this).children(".black-bg").hide();
        });

        //删除页面图片元素
        $(".off-box").live('click', function () {
            if ($(".img-box .upload-thumb").length == 1) {
                var html = "";
                html += '<div class="upload-thumb" id="default_uploadimg">';
                html += '<img nstype="goods_image" src="./static/admin/images/default_goods_image_240.gif">';
                html += '<input type="hidden" name="image_path" id="image_path" nstype="goods_image"   name="imgs[]">';
                html += '</div>';
                $(html).appendTo('.img-box');
            }
            $(this).parent().parent().remove();
        });


    });
  
    
</script>
<script type="text/javascript">
    $(function () {
        //比较简洁，细节可自行完善
        $('#uploadSubmit').click(function () {
            var data = new FormData($('#uploadForm')[0]);
            $.ajax({
                url: 'xxx/xxx',
                type: 'POST',
                data: data,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    console.log(data);
                    if(data.status){
                        console.log('upload success');
                    }else{
                        console.log(data.message);
                    }
                },
                error: function (data) {
                    console.log(data.status);
                }
            });
        });

    })
</script>
</body>

</html>