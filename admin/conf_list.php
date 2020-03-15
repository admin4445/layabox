<?php

	 include 'header.php';
	 

    //删除数据
    if(isset($_GET['del'])){
      $id=$_GET['del'];
      $res=$db->del('lay_conf'," WHERE `conf_id`={$id}");
      if($res['code']==1){
          echo "<script> alert('删除成功');window.location.href='conf_list.php';</script>";
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
        $confinfo = $db->select_all('lay_conf','*'," LIMIT {$offset},{$limit}",'assoc');
        $datas = $db->select_all('lay_conf');
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
        <li class="active">网站配置</li>
      </ol>
    </div>
    <div class="container">
   <div class="row">
        <div class="col-md-12">
      <div class="panel">
                <div class="panel-heading">
                  <div class="panel-title">配置列表</div>
                  <a href="conf_add.php" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span> 添加配置</a>
                </div>
                <form action="" method="post">
                <div class="panel-body">
                  <h2 class="panel-body-title">配置</h2>
                  <table class="table table-striped table-bordered table-hover dataTable">
                      <tr class="active">
                        <th class="text-center" width="100"><input type="checkbox" value="" id="checkall" class=""> 全选</th>
                        <th>编号</th>
                        <th>配置信息</th>
                      
                        <th width="200">操作</th>
                      </tr>
                      <?php if($confinfo != null){foreach($confinfo as $v){ ?>
                      <tr class="success">
                        <td class="text-center"><input type="checkbox" value="1" name="idarr[]" class="cbox"></td>
                        <td><?php echo $v['conf_id'] ?></td>
                        <td><?php echo $v['conf_copy'] ?></td>
                      
                        <td>
                          <div class="btn-group">
                            <a href="conf_add.php?edit_id=<?php echo $v['conf_id'] ?>" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
                            <a onclick="return confirm('确定要删除吗？');" href="conf_list.php?del=<?php echo $v['conf_id'] ?>" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
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
  