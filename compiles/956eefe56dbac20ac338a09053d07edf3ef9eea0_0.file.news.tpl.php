<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-31 14:05:22
  from 'C:\Users\admin\Desktop\timework\layabox\views\home\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e33c3a2bd8e35_17993096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '956eefe56dbac20ac338a09053d07edf3ef9eea0' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\timework\\layabox\\views\\home\\news.tpl',
      1 => 1580450719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5e33c3a2bd8e35_17993096 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\admin\\Desktop\\timework\\layabox\\includes\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
        <?php $_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<section>
			<div class="container hot-news">
				<div class="row">
					<div class="col-lg-12">
						<div class="page-header news-header">
							<h2>新闻动态</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newstype']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
					<div class="col-md-4 col-sm-4 col-xs-4 text-center hot-news-list">
						<div class="media news-caption">
							<a href="?type=<?php echo $_smarty_tpl->tpl_vars['val']->value['news_type_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['val']->value['news_type_name'];?>
"> <img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['news_type_img'];?>
" class="img-responsive img-hover"></a>
							<p class="news-title hidden-xs "><a href="http://www.layabox.com/news/94.html" title="<?php echo $_smarty_tpl->tpl_vars['val']->value['news_type_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['news_type_name'];?>
</a></p>
						</div>
					</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

					

					
				</div>
			</div>
		</section>

		<section class="news-content">
			<div class="container">

			   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newsinfo']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
				<div class="row news-list-group">
					<div class="news-img col-md-3 col-sm-4 col-xs-4 text-center" style="padding-top: 8px;">
						<div class="thumbnail">
							<a href="#" title="<?php echo $_smarty_tpl->tpl_vars['val']->value['news_title'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['news_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['val']->value['news_title'];?>
" class="img-hover img-responsive"></a>
						</div>
					</div>
					<div class="col-md-9 col-sm-8  col-xs-8">
						<div class="caption">

							<h4>  <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['val']->value['news_title'];?>
" class="news-title-item"><?php echo $_smarty_tpl->tpl_vars['val']->value['news_title'];?>
   </a></h4>
							<p class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value['news_time'],"%m/%d/%Y 
");?>
</p>
							<p class="news-des hidden-xs">
							<?php echo $_smarty_tpl->tpl_vars['val']->value['news_content'];?>

								 </p>
							<p class="news-detail hidden-xs">
								<span class="view-details"> <a href="http://www.layabox.com/news/169.html" title="<?php echo $_smarty_tpl->tpl_vars['val']->value['news_title'];?>
">查看详情</a></span>
							</p>

						</div>
					</div>
				</div>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			
				<div class="row">
					<div class="container">
						<div class="col-md-12">
							<div class="news-line"></div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12" >
						
					   <div class="centet-block"><?php echo $_smarty_tpl->tpl_vars['paes']->value;?>
</div>
						

					</div>
				</div>

			</div>
		</section>

		<!-- Footer -->
		<?php $_smarty_tpl->_subTemplateRender('file:./footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
