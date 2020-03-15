 <?php
    include 'header.php';

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
        $proinfo = $db->select_all('lay_product','*'," as a INNER JOIN lay_product_type as b  ON a.product_type_id = b.pdt_type_id  LIMIT {$offset},{$limit}",'assoc');
        $datas = $db->select_all('lay_product');
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
    


        //删除产品
        if(isset($_GET['del']) && !empty($_GET['del'])){
             $id=$_GET['del'];
             $profind = $db->find_all('lay_product','*'," WHERE `product_id`={$id}");
             $res = $db->del('lay_product'," WHERE `product_id`={$id}");
             if($res['code']==1){
              //删除本地图片
              $localimg = explode('/',$profind['product_img']);
              $localimgs='./'.$localimg[4].'/'.$localimg[5];
              if(is_file( $localimgs)){
                  unlink($localimgs);
              }
              echo "<script> alert('删除成功');window.location.href='product_list.php';</script>";

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
        <li class="active">产品管理</li>
      </ol>
    </div>
    <div class="container">
	 <div class="row">
        <div class="col-md-12">
			<div class="panel">
                <div class="panel-heading">
                  <div class="panel-title">产品列表</div>
                  <a href="product_add.php" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span> 添加产品</a>
                </div>
                <form action="" method="post">
                <div class="panel-body">
                  <h2 class="panel-body-title">产品</h2>
                  <table class="table table-striped table-bordered table-hover dataTable">
                      <tr class="active">
                        <th class="text-center" width="100"><input type="checkbox" value="" id="checkall" class=""> 全选</th>
                        <th>产品标题</th>
                       
                        <th>产品图片</th>
                        <th>产品类型</th>
                        <th width="200">操作</th>
                      </tr>
                    
                      <?php  if($proinfo != null){ foreach($proinfo as $v){ ?>
                      <tr class="success">
                        <td class="text-center"><input type="checkbox" value="1" name="idarr[]" class="cbox"></td>
                         <td><?php echo $v['product_title'] ?></td>

                         
                          <td width="200" height="150"><img src="<?php echo $v['product_img'] ?>"  width="100%"/></td>
                           <td><?php echo $v['pdt_type_title']?></td>
                          <td>

                          <div class="btn-group">
                            <a href="product_add.php?edit=<?php  echo $v['product_id'] ?>" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
                            <a onclick="return confirm('确定要删除吗？');" href="product_list.php?del=<?php echo $v['product_id'] ?>" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
                          </div>
                        </td>
                      </tr>

                    <?php } }?>

                  </table>
                  
                  <div class="pull-left">
                  	<button type="submit" class="btn btn-default btn-gradient pull-right delall"><span class="glyphicons glyphicon-trash"></span></button>
                  </div>
                  <div class="pull-right">
                     <?php echo $paes;?>
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