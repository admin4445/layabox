<?php
    include 'header.php';
     //添加操作
    if(isset($_POST['add'])){
        $data['conf_copy']=$_POST['conf_copy'];
      
        $res=$db->add('lay_conf',$data);
        if($res['code']==1){
            echo "<script> alert('添加成功');window.location.href='conf_list.php';</script>";
        }else{
            echo "<script> alert('添加失败')</script>";
        }


    }
     //修改操作
        if(isset($_GET['edit_id'])){
            $id=$_GET['edit_id'];
            $findinfo=$db->find_all('lay_conf','*'," WHERE `conf_id`={$id}");
        }

        if(isset($_POST['edit'])){
            $id=$_POST['conf_id'];
            $data['conf_copy']=$_POST['conf_copy'];
           
            $res=$db->edit('lay_conf',$data," WHERE `conf_id`={$id}");
            if($res['code']==1){
                echo "<script> alert('修改成功');window.location.href='conf_list.php';</script>";
            }else{
                echo "<script> alert('修改失败')</script>";
            }
        }

?>


<section id="content">
        <div id="topbar" class="affix">
            <ol class="breadcrumb">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                <li class="active">导航列表</li>
            </ol>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-md-10 col-lg-8 center-column">
                    <form action="" method="post" class="cmxform">
                    <input type="hidden" name="conf_id" value="<?php  if(isset($findinfo)){ echo $findinfo['conf_id'];}else{ echo ""; }?>" />
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title"> <?php if(isset($findinfo)){ echo "修改配置信息";}else{echo "添加配置信息";} ?></div>
                                <div class="panel-btns pull-right margin-left">
                                    <a href="#"
                                       class="btn btn-default btn-gradient dropdown-toggle" onclick="window.history.go(-1)"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-7">
                                   
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">配置信息</span>
                                            <input type="text" name="conf_copy" value="<?php 
                                                if(isset($findinfo)){
                                                    echo $findinfo['conf_copy'];

                                                } 
                                            ?>" 
                                            class="form-control" required>
                                        </div>
                                    </div>
                                  
                                </div>
                              
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input type="submit" value="提交" class="submit btn btn-blue" name="<?php if(isset($findinfo)){ echo "edit";}else{
                                            echo "add";
                                        } ?>">
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

</body>

</html>