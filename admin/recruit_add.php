    <?php 
        include 'header.php';
        include '../class/fun.php';
      
         //添加产品类型
        if(isset($_POST['sub'])){
            $pty['rec_positon'] = $_POST['rec_positon'];
            $pty['rec_pos_desc'] = $_POST['rec_pos_desc'];
            $pty['rec_pos_demand'] = isset($_POST['editorValue']) ? trim($_POST['editorValue']) : '';
            $res = $db->add('lay_recruit',$pty);
            if($res['code']==1){
                echo "<script> alert('添加成功');window.location.href='recruit_list.php';</script>";
            }else{
                echo "<script> alert('添加失败')</script>";
            }
        }

        //修改操作
        if(isset($_GET['edit'])&& !empty($_GET['edit'])){
            $id = $_GET['edit'];
            $findinfo=$db->find_all('lay_recruit','*'," WHERE `rec_id`={$id}");

        }
         if(isset($_POST['edit']) && !empty($_POST['edit'])){
            $id=trim($_POST['rec_id']);
            $pty['rec_positon'] = $_POST['rec_positon'];
            $pty['rec_pos_desc'] = $_POST['rec_pos_desc'];
            $pty['rec_pos_demand'] = isset($_POST['editorValue']) ? trim($_POST['editorValue']) : '';
            $res = $db->edit('lay_recruit',$pty," WHERE `rec_id`={$id}");
            if($res['code']==1){
                echo "<script> alert('修改成功');window.location.href='recruit_list.php';</script>";
            }else{
                echo "<script> alert('修改失败')</script>";
            }
             
       } 
        
       
    ?>
    <section id="content">
        <div id="topbar" class="affix">
            <ol class="breadcrumb">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                <li class="active">招聘管理</li>
            </ol>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-md-10 col-lg-8 center-column">
                    <form action="" method="post" class="cmxform" id="uploadForm" enctype='multipart/form-data'>
                    <input type="hidden" name="rec_id" value="<?php  if(isset($findinfo)){ echo $findinfo['rec_id'];}else{ echo ""; }?>" />

                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title"> <?php if( isset($findinfo)){ echo '编辑招聘信息'; }else{ echo "添加招聘信息"; } ?></div>
                                <div class="panel-btns pull-right margin-left">
                                    <a href="#"
                                       class="btn btn-default btn-gradient dropdown-toggle" onclick="window.history.go(-1)"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-7">
                                    
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">职位名称</span>
                                            <input type="text" name="rec_positon" value="<?php 
                                                    if(isset($findinfo)){
                                                        echo $findinfo['rec_positon'];
                                                    }
                                            ?>" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">职位描述</span>
                                            <input type="text" name="rec_pos_desc" value="<?php 
                                                    if(isset($findinfo)){
                                                        echo $findinfo['rec_pos_desc'];
                                                    }
                                            ?>" class="form-control" >
                                        </div>
                                    </div>

                                   
                                </div>

                                 <div class="form-group col-md-12">
                                     <h3>职位要求</h3>
                                    <script type="text/plain" id="myEditor" style="width:100%;height:200px;">
                                    <?php echo $findinfo['rec_pos_demand'] ?>
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