<?php

	 include 'header.php';
	 

    //删除数据
    if(isset($_GET['del'])){
      $id=$_GET['del'];
      $res=$db->del('lay_nav'," WHERE `nav_id`={$id}");
      if($res['code']==1){
          echo "<script> alert('删除成功');window.location.href='nav_list.php';</script>";
      }else{
          echo "<script> alert('删除失败')</script>";
      }


    }else{

      //获取页码
      if(!empty($_GET['page']) && isset($_GET['page'])){
           $page = $_GET['page'];
      }else{
           $page = '1';
      }
       
        $limit = 5;
        $size = 5;
        $class = 'pagination';
        $offset = ($page-1)* $limit;
        $navinfo = $db->select_all('lay_nav','*'," LIMIT {$offset},{$limit}",'assoc');
        $datas = $db->select_all('lay_nav');
        $count=count($datas);
        $configs =[
            'current'=>$page,
            'count'=>$count,
            'limit'=>$limit,
            'size'=>$size,
            'class'=>$class,
        ];
        $page = Page::getInstance($configs);
        $paes = $page->showPage();
    }
	 
   

   
  

?>

  <section id="content">
    <div id="topbar" class="affix">
      <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">导航管理</li>
      </ol>
    </div>
    <div class="container">
   <div class="row">
        <div class="col-md-12">
      <div class="panel">
                <div class="panel-heading">
                  <div class="panel-title">导航列表</div>
                  <a href="nav_add.php" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span> 添加导航</a>
                </div>
                <form action="" method="post">
                <div class="panel-body">
                  <h2 class="panel-body-title">导航</h2>
                  <table class="table table-striped table-bordered table-hover dataTable">
                      <tr class="active">
                        <th class="text-center" width="100"><input type="checkbox" value="" id="checkall" class=""> 全选</th>
                        <th>编号</th>
                        <th>导航名称</th>
                        <th>导航地址</th>
                        <th width="200">操作</th>
                      </tr>
                      <?php if($navinfo != null){foreach($navinfo as $v){ ?>
                      <tr class="success">
                        <td class="text-center"><input type="checkbox" value="1" name="idarr[]" class="cbox"></td>
                        <td><?php echo $v['nav_id'] ?></td>
                        <td><?php echo $v['nav_name'] ?></td>
                        <td><?php echo $v['nav_url'] ?></td>
                        <td>
                          <div class="btn-group">
                            <a href="nav_add.php?edit_id=<?php echo $v['nav_id'] ?>" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
                            <a onclick="return confirm('确定要删除吗？');" href="nav_list.php?del=<?php echo $v['nav_id'] ?>" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
                          </div>
                        
                        </td>
                      </tr>

                    <?php }} ?>
                  </table>
                  
                  <div class="pull-left">
                    <button type="submit" class="btn btn-default btn-gradient pull-right delall" name="delall"><span class="glyphicons glyphicon-trash"></span></button>

                  </div>
                  
                 <div class="pull-right">
                     <?php echo $paes ;?>
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
  