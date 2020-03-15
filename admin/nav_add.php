<?php
    include 'header.php';
     //添加操作
    if(isset($_POST['add'])){
        $data['nav_name']=$_POST['nav_name'];
        $data['nav_url']=$_POST['nav_url'];
        $res=$db->add('lay_nav',$data);
        if($res['code']==1){
            echo "<script> alert('添加成功');window.location.href='nav_list.php';</script>";
        }else{
            echo "<script> alert('添加失败')</script>";
        }


    }
     //修改操作
        if(isset($_GET['edit_id'])){
            $id=$_GET['edit_id'];
            $findinfo=$db->find_all('lay_nav','*'," WHERE `nav_id`={$id}");
        }

        if(isset($_POST['edit'])){
            $id=$_POST['nav_id'];
            $data['nav_name']=$_POST['nav_name'];
            $data['nav_url']=$_POST['nav_url'];
            $res=$db->edit('lay_nav',$data," WHERE `nav_id`={$id}");
            if($res['code']==1){
                echo "<script> alert('修改成功');window.location.href='nav_list.php';</script>";
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
                    <input type="hidden" name="nav_id" value="<?php  if(isset($findinfo)){ echo $findinfo['nav_id'];}else{ echo ""; }?>" />
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title"> <?php if(isset($findinfo)){ echo "修改导航";}else{echo "添加导航";} ?></div>
                                <div class="panel-btns pull-right margin-left">
                                    <a href="nav_list.php"
                                       class="btn btn-default btn-gradient dropdown-toggle"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-7">
                                   
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">导航名称</span>
                                            <input type="text" name="nav_name" value="<?php 
                                                if(isset($findinfo)){
                                                    echo $findinfo['nav_name'];

                                                } 
                                            ?>" 
                                            class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">导航地址</span>
                                            <input type="text" name="nav_url" value="<?php 
                                                if(isset($findinfo)){
                                                    echo $findinfo['nav_url'];

                                                } 
                                            ?>" class="form-control" required>
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