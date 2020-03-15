 <?php
    include 'header.php';
    

    //查询所有轮播图
    if(isset($_GET['type'])){
      $id = $_GET['type'];
      $baninfo = $db->select_all('lay_banner','*'," as a INNER JOIN lay_nav as b  ON a.ban_type = b.nav_id AND b.nav_id=".$id);
      
    }

    //删除轮播图
    if(isset($_GET['del']) && !empty($_GET['del'])){
         $id=$_GET['del'];
     

         $banfind = $db->find_all('lay_banner','*'," WHERE `ban_id`={$id}");
       
         $res = $db->del('lay_banner'," WHERE `ban_id`={$id}");
        
         if($res['code']==1){
          //删除本地图片
          $localimg = explode('/',$banfind['ban_img']);
          $localimgs='./'.$localimg[4].'/'.$localimg[5];
          if(is_file( $localimgs)){
              unlink($localimgs);
          }
          echo "<script> alert('删除成功');window.location.href='banner_list.php?type=".$banfind['ban_type']."';</script>";

        }else{
          echo "<script> alert('删除失败')</script>";

        }


    }

    






  ?>
  <!-- End: Sidebar -->   

  <!-- Start: Content -->
  <section id="content">
    <div id="topbar" class="affix">
      <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">轮播图管理</li>
      </ol>
    </div>
    <div class="container">
	 <div class="row">
        <div class="col-md-12">
			<div class="panel">
                <div class="panel-heading">
                  <div class="panel-title">轮播图列表</div>
                  <a href="banner_add.php" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span> 添加轮播图</a>
                </div>
                <form action="" method="post">
                <div class="panel-body">
                  <h2 class="panel-body-title">轮播图</h2>
                  <table class="table table-striped table-bordered table-hover dataTable">
                      <tr class="active">
                        <th class="text-center" width="100"><input type="checkbox" value="" id="checkall" class=""> 全选</th>
                        <th>名称</th>
                        <th>图片</th>
                        <th>类型</th>
                        <th width="200">操作</th>
                      </tr>
                    
                      <?php if($baninfo != null){foreach($baninfo as $v){ ?>
                      <tr class="success">
                        <td class="text-center"><input type="checkbox" value="1" name="idarr[]" class="cbox"></td>
                        <td><?php echo $v['ban_name'] ?></td>
                        <td width="200" height="150"><img src="<?php echo $v['ban_img'] ?>" / width="100%"></td>
                        <td><?php echo $v['nav_name'] ?></td>
                        <td>
                          <div class="btn-group">
                            <a href="banner_add.php?edit=<?php  echo $v['ban_id'] ?>" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
                            <a onclick="return confirm('确定要删除吗？');" href="banner_list.php?del=<?php echo $v['ban_id'] ?>" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
                          </div>
                        </td>
                      </tr>

                    <?php }}else{echo " 暂无数据";} ?>

                  </table>
                  
                  <div class="pull-left">
                  	<button type="submit" class="btn btn-default btn-gradient pull-right delall"><span class="glyphicons glyphicon-trash"></span></button>
                  </div>
                </div>
                </form>
              </div>
          </div>
        </div>
    </div>
  </section>
  <!-- End: Content --> 
</div>
<!-- End: Main --> 
</body>
</html>