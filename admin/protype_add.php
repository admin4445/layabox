    <?php 
        include 'header.php';
        include '../class/fun.php';
      
         //添加产品类型
        if(isset($_POST['sub'])){
             $pty['pdt_type_title'] = $_POST['pdt_type_title'];
             $pty['pdt_type_desc'] = isset($_POST['editorValue']) ? trim($_POST['editorValue']) : '';
            //上传图片
            if(!empty($_FILES)){
                $fun = new fun();
                $upload = $fun->upload('pic1');
                if($upload['code']==1){
                      $pty['pdt_type_img'] = $upload['imgpath'];
                }else{
                      $pty['pdt_type_img']="";
                }
            }
           $res = $db->add('lay_product_type',$pty);
           if($res['code']==1){
                echo "<script> alert('添加成功');window.location.href='protype_list.php';</script>";
           }else{
                echo "<script> alert('添加失败')</script>";
           }
        }

        //修改操作
        if(isset($_GET['edit'])&& !empty($_GET['edit'])){
            $id = $_GET['edit'];
            $findinfo=$db->find_all('lay_product_type','*'," WHERE `pdt_type_id`={$id}");

        }
         if(isset($_POST['edit']) && !empty($_POST['edit'])){

               $id=trim($_POST['pdt_type_id']);
               $pty['pdt_type_title'] = $_POST['pdt_type_title'];
               $pty['pdt_type_desc'] = isset($_POST['editorValue']) ? trim($_POST['editorValue']) : '';
                //验证数据
                //上传图片
                if($_FILES['pic1']['error']==0){
                    $fun = new fun();
                    $upload = $fun->upload('pic1');
                    if($upload['code']==1){
                           $pty['pdt_type_img'] = $upload['imgpath'];
                            //删除本地图片
                            $localimg = explode('/',$findinfo['pdt_type_img']);
                            $localimgs='./'.$localimg[4].'/'.$localimg[5];

                            if(is_file( $localimgs)){
                                unlink($localimgs);
                            }
  
                    }else{
                        $pty['pdt_type_img']=$findinfo['pdt_type_img'];
                    }
                }else{
                     $pty['pdt_type_img']=$findinfo['pdt_type_img'];
                }

                 $res = $db->edit('lay_product_type',$pty," WHERE `pdt_type_id`={$id}");
                 if($res['code']==1){
                    echo "<script> alert('修改成功');window.location.href='protype_list.php';</script>";
                   }else{
                        echo "<script> alert('修改失败')</script>";
                   }
             
       } 
        
       
    ?>
    <section id="content">
        <div id="topbar" class="affix">
            <ol class="breadcrumb">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                <li class="active">添加类型</li>
            </ol>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-md-10 col-lg-8 center-column">
                    <form action="" method="post" class="cmxform" id="uploadForm" enctype='multipart/form-data'>
                    <input type="hidden" name="pdt_type_id" value="<?php  if(isset($findinfo)){ echo $findinfo['pdt_type_id'];}else{ echo ""; }?>" />

                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title"> <?php if( isset($findinfo)){ echo '编辑产品类型'; }else{ echo "添加产品类型"; } ?></div>
                                <div class="panel-btns pull-right margin-left">
                                    <a href="#"
                                       class="btn btn-default btn-gradient dropdown-toggle" onclick="window.history.go(-1)"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-7">
                                    
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">标题</span>
                                            <input type="text" name="pdt_type_title" value="<?php 
                                                    if(isset($findinfo)){
                                                        echo $findinfo['pdt_type_title'];
                                                    }
                                            ?>" class="form-control" >
                                        </div>
                                    </div>

                                   
                                    <div>
                                            <div class="fileinput fileinput-new" data-provides="fileinput"  id="exampleInputUpload">
                                                <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
                                                <img id='picImg' style="width: 100%;height: auto;max-height: 150px;" src="<?php 
                                                        if(isset($findinfo)){
                                                         echo $findinfo['pdt_type_img'];
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
                                                        <input type="file" name="pic1" id="picID" accept="image/gif,image/jpeg,image/x-png"/>
                                                    </span>
                                                    <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                                                </div>
                                            </div>

                                    </div>

                                   
                                </div>
                                 <div class="form-group col-md-12">
                                    <script type="text/plain" id="myEditor" style="width:100%;height:200px;">
                                    <?php echo $findinfo['pdt_type_desc'] ?>
                                    </script>
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