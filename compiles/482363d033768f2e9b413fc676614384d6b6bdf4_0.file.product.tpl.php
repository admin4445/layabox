<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-31 13:47:24
  from 'C:\Users\admin\Desktop\timework\layabox\views\home\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e33bf6c9edff4_30210016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '482363d033768f2e9b413fc676614384d6b6bdf4' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\timework\\layabox\\views\\home\\product.tpl',
      1 => 1579232024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5e33bf6c9edff4_30210016 (Smarty_Internal_Template $_smarty_tpl) {
?>		<?php $_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<section class="product-layaflash">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="caption fadeInLeft animated">
							<p><span class="pro-num-001">1</span><span class="pro-title"><?php echo $_smarty_tpl->tpl_vars['productinfo']->value[2]['product_title'];?>
</span></p>
						</div>
						<div class="caption pro-layaflash-content fadeInDown animated">
							<p class="layaflash-header-title"><?php echo $_smarty_tpl->tpl_vars['productinfo']->value[2]['child'][0]['p_title'];?>
 </p>
							<ul>
								
								<li><?php echo $_smarty_tpl->tpl_vars['productinfo']->value[2]['child'][0]['p_content'];?>
</li>
							</ul>
							<p class="pro-down-btn">
								<a href="http://www.layabox.com/index.php?m=content&c=index&a=lists&catid=22" class="btn pro-btn-down">进入下载</a>
								<!--<a href="" class="btn pro-btn-version">查看详情</a>-->
							</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 text-center">
						<img src="<?php echo $_smarty_tpl->tpl_vars['productinfo']->value[2]['child'][0]['p_img'];?>
" class="img-hover img-responsive animated fadeInDown delay-2">
					</div>
				</div>
			</div>
		</section>
		<section class="product-layaair">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="caption fadeInLeft animated delay-1">
							<p><span class="pro-num-002">2</span><span class="pro-title"><?php echo $_smarty_tpl->tpl_vars['productinfo']->value[4]['product_title'];?>
</span></p>
						</div>
					</div>

				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<img src="<?php echo $_smarty_tpl->tpl_vars['productinfo']->value[4]['child'][0]['p_img'];?>
" class="img-responsive fadeInDown animated delay-1" alt="">
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="caption fadeInDown animated delay-2">
							<p class="layaplayer-title"><?php echo $_smarty_tpl->tpl_vars['productinfo']->value[4]['child'][0]['p_title'];?>
</p>
							<p class="layapalyer-text">
								<?php echo $_smarty_tpl->tpl_vars['productinfo']->value[4]['child'][0]['p_content'];?>

							</p>
							<p class="layaplayer-title"><?php echo $_smarty_tpl->tpl_vars['productinfo']->value[4]['child'][1]['p_title'];?>
</p>

							<p class="layapalyer-text"><?php echo $_smarty_tpl->tpl_vars['productinfo']->value[4]['child'][1]['p_content'];?>
</p>
							<p class="pro-down-btn">
								<!--<a href="" class="btn laya-btn-down">点击下载</a>-->
								<!--<a href="" class="btn laya-btn-version">查看详情</a>-->
							</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="layaplayer-right">
							<img src="<?php echo $_smarty_tpl->tpl_vars['productinfo']->value[4]['child'][1]['p_img'];?>
" class="img-responsive fadeInDown animated delay-3" alt="">
						</div>

					</div>
				</div>
			</div>
		</section>

		<section class="pro-list">
			<div class="container">
				<div class="row pro-list-part">

					<div class="col-md-6 col-sm-6">
						<div class="caption">
							<p><span class="pro-num">3</span><span class="pro-list-title"><?php echo $_smarty_tpl->tpl_vars['productinfo']->value[5]['product_title'];?>
</span></p>
							<h4 class="pro-header"><?php echo $_smarty_tpl->tpl_vars['productinfo']->value[5]['product_desc'];?>
</h4>
							
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productinfo']->value[5]['child'], 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
							<h4 class="pro-small-title"><?php echo $_smarty_tpl->tpl_vars['val']->value['p_title'];?>
</h4>
							<p class="pro-list-text">
								<?php echo $_smarty_tpl->tpl_vars['val']->value['p_content'];?>

							</p>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							
							<p class="pro-list-btn-group">
								<!--<a href="/index.php?m=content&c=index&a=lists&catid=22" class="btn pro-list-btn pro-list-down">点击下载</a>-->
								<!--<a href="" class="btn pro-list-btn pro-list-version">查看详情</a>-->
							</p>
							<p>
								<img src="./static/home/images/pro-list-001.png" alt="" class="img-responsive center-block">
							</p>
						</div>
					</div>

					<div class="col-md-6 col-sm-6">
						<div class="caption">
							<p><span class="pro-num">4</span><span class="pro-list-title"><?php echo $_smarty_tpl->tpl_vars['productinfo']->value[0]['product_title'];?>
</span></p>
							<h4 class="pro-header"><?php echo $_smarty_tpl->tpl_vars['productinfo']->value[0]['product_desc'];?>
</h4>
							
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productinfo']->value[0]['child'], 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
							<h4 class="pro-small-title"><?php echo $_smarty_tpl->tpl_vars['val']->value['p_title'];?>
</h4>
							<p class="pro-list-text">
								<?php echo $_smarty_tpl->tpl_vars['val']->value['p_content'];?>

							</p>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							
							<p class="pro-list-btn-group">
								<!--<a href="/index.php?m=content&c=index&a=lists&catid=22" class="btn pro-list-btn pro-list-down">点击下载</a>-->
								<!--<a href="" class="btn pro-list-btn pro-list-version">查看详情</a>-->
							</p>
							<p>
								<img src="./static/home/images/pro-list-002.png" alt="" class="img-responsive center-block">
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="pro-list pro-part-02">
			<div class="container">
				<div class="row pro-list-part ">
					<div class="col-md-6 col-sm-6">
						<div class="caption">
							<p><span class="pro-num">5</span><span class="pro-list-title"><?php echo $_smarty_tpl->tpl_vars['productinfo']->value[3]['product_title'];?>
</span></p>
							<h4 class="pro-header"><?php echo $_smarty_tpl->tpl_vars['productinfo']->value[3]['product_desc'];?>
</h4>
							
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productinfo']->value[3]['child'], 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
							<h4 class="pro-small-title"><?php echo $_smarty_tpl->tpl_vars['val']->value['p_title'];?>
</h4>
							<p class="pro-list-text">
								<?php echo $_smarty_tpl->tpl_vars['val']->value['p_content'];?>

							</p>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							
							<p class="pro-list-btn-group">
								<!--<a href="/index.php?m=content&c=index&a=lists&catid=22" class="btn pro-list-btn pro-list-down">点击下载</a>-->
								<!--<a href="" class="btn pro-list-btn pro-list-version">查看详情</a>-->
							</p>
							<p>
								<img src="./static/home/images/pro-list-003.png" alt="" class="img-responsive center-block">
							</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="caption">
							<p><span class="pro-num">6</span><span class="pro-list-title"><?php echo $_smarty_tpl->tpl_vars['productinfo']->value[1]['product_title'];?>
</span></p>
							<h4 class="pro-header"><?php echo $_smarty_tpl->tpl_vars['productinfo']->value[1]['product_desc'];?>
</h4>
							
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productinfo']->value[1]['child'], 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
							<h4 class="pro-small-title"><?php echo $_smarty_tpl->tpl_vars['val']->value['p_title'];?>
</h4>
							<p class="pro-list-text">
								<?php echo $_smarty_tpl->tpl_vars['val']->value['p_content'];?>

							</p>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							
							<p class="pro-list-btn-group">
								<!--<a href="/index.php?m=content&c=index&a=lists&catid=22" class="btn pro-list-btn pro-list-down">点击下载</a>-->
								<!--<a href="" class="btn pro-list-btn pro-list-version">查看详情</a>-->
							</p>
							<p>
								<img src="./static/home/images/pro-list-004.png" alt="" class="img-responsive center-block">
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Footer -->
		<?php $_smarty_tpl->_subTemplateRender('file:./footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
