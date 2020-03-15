<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-31 13:47:15
  from 'C:\Users\admin\Desktop\timework\layabox\views\home\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e33bf63b7ae72_81666470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93d125c4f2979c57306c2a068e4b5fa8dcb689a9' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\timework\\layabox\\views\\home\\about.tpl',
      1 => 1580449631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5e33bf63b7ae72_81666470 (Smarty_Internal_Template $_smarty_tpl) {
?>       <?php $_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<header>
			<img src="<?php echo $_smarty_tpl->tpl_vars['baninfo']->value[0]['ban_img'];?>
" class="img-responsive img-hover">
		</header>
		<!--公司简介-->
		<section class="company" id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-12 contact">
						<h1>公司简介</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<div class="caption">
							<h2 class="lead"><?php echo $_smarty_tpl->tpl_vars['companyinfo']->value['com_title'];?>
</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-sm-8 col-xs-12 introduce">
						<div class="caption">
							<p> 
							 <?php echo $_smarty_tpl->tpl_vars['companyinfo']->value['com_desc'];?>

							</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="caption text-center">
							<img src=" <?php echo $_smarty_tpl->tpl_vars['companyinfo']->value['com_img'];?>
" class="img-hover img-responsive">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--人才招聘-->
		<section class="zhaopin" id="zhaopin">
			<div class="container">
				<div class="row">
					<div class="col-md-12 page-header">
						<h1>人才招聘</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-sm-8 col-xs-12">
						<div class="caption introduce">
							<p><?php echo $_smarty_tpl->tpl_vars['talentinfo']->value['com_title'];?>
</p>
							<p><?php echo $_smarty_tpl->tpl_vars['talentinfo']->value['com_desc'];?>
</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="caption contact-email">
							<p>请投简历到HR邮箱:</p>
							<p class="email"><a href="" class="btn btn-default">hr@layabox.com</a> </p>
							<p> 期待优秀的你，共同将梦想写进未来！</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="zhaopin-content">
			<div class="container">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recruitinfo']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
				<div class="row positon-list">
					<div class="col-md-12">
						<div class="page-header">
							<h2 class="zhaopin-title"><?php echo $_smarty_tpl->tpl_vars['val']->value['rec_positon'];?>
</h2>
						</div>
						<div class="caption">

							<h4>职位描述：</h4>
							<div class="positon-detail">
								<ol class=" list-paddingleft-2">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['val']->value['rec_pos_desc'], 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
									<li>
										<p><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</p>
									</li>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									
								</ol>
							</div>
							<h4>任职要求：</h4>
							<div class="require-detail">
								<ol class=" list-paddingleft-2">
									<?php echo $_smarty_tpl->tpl_vars['val']->value['rec_pos_demand'];?>

								</ol>
							</div>
						</div>
					</div>
				</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			
				

			</div>

		</section>

		<!--联系方式-->
		<section class="contact-us" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="page-header">
							<h1>联系方式</h1>
						</div>
					</div>
				</div>
				<div class="row">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['telinfo']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
					<div class="col-md-6 col-sm-6">
						<div class="media well">
							<div class="media-body">
								<p><img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['com_img'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['com_desc'];?>
</p>
							</div>
						</div>
					</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
				
			</div>
		</section>
		<!-- Footer -->
		 <?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
