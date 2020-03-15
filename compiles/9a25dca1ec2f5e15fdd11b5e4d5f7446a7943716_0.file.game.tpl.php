<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-31 13:47:23
  from 'C:\Users\admin\Desktop\timework\layabox\views\home\game.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e33bf6bf12082_77177273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a25dca1ec2f5e15fdd11b5e4d5f7446a7943716' => 
    array (
      0 => 'C:\\Users\\admin\\Desktop\\timework\\layabox\\views\\home\\game.tpl',
      1 => 1580366177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5e33bf6bf12082_77177273 (Smarty_Internal_Template $_smarty_tpl) {
?>		<?php $_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<!-- Header Carousel -->
		<!-- Header Carousel -->
		<header id="myCarousel" class="carousel slide">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class=""></li>
				<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['baninfo']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
				<div class="item" >
					<div class="fill">
						<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['ban_img'];?>
" alt="" class="img-responsive">
					</div>
					<div class="carousel-caption">

					</div>
				</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<div class="item active">
					<div class="fill">
						<img src="./static/home/images/game-slider-02.jpg" alt="" class="img-responsive">

					</div>

					<div class="carousel-caption">

					</div>
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="http://www.layabox.com/html/game-list/#myCarousel" data-slide="prev">
				<span class="icon-prev"></span>
			</a>
			<a class="right carousel-control" href="http://www.layabox.com/html/game-list/#myCarousel" data-slide="next">
				<span class="icon-next"></span>
			</a>
		</header>
		<section class="game-hot2">
			<div class="container game-part2">
				<div class="row">
					<div class="col-md-1 col-sm-1 col-xs-2">
						<div class="hot-icon">
							<p>热门</p>
						</div>
					</div>
					<div class="col-md-8 col-sm-7 col-xs-12 pull-right">
						<div class="caption game-des-lr">
							<h1><?php echo $_smarty_tpl->tpl_vars['gameinfo']->value[0]['game_name'];?>
</h1>
							<p class="lead text-right"><?php echo $_smarty_tpl->tpl_vars['gameinfo']->value[0]['game_desc'];?>
</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-sm-8 col-sm-offset-4 col-md-offset-4">
						<div class="row">

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gameinfo']->value[0]['game_img_lib'], 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
							<div class="col-md-6 col-sm-6 col-xs-6 text-center game-item">
								<div class="game-item-img">
									<img src="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" class="img-responsive img-hover img-rounded">
								</div>

							</div>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="game-hot">
			<div class="container game-part1">
				<div class="row">

					<div class="col-md-8 col-sm-7 col-xs-12">
						<div class="caption game-des-mg">
							<h1><?php echo $_smarty_tpl->tpl_vars['gameinfo']->value[1]['game_name'];?>
</h1>
							<p class="lead text-left"><?php echo $_smarty_tpl->tpl_vars['gameinfo']->value[1]['game_desc'];?>

							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-sm-8">
						<div class="row">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gameinfo']->value[1]['game_img_lib'], 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
							<div class="col-md-6 col-sm-6 col-xs-6 text-center game-item">
								<div class="game-item-img">
									<img src="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" class="img-responsive img-hover img-rounded">
								</div>

							</div>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						</div>
					</div>
				</div>
			</div>

		</section>

		<!--更多案例-->
		<section class="case">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="page-header">
							<h1>更多案例</h1>
						</div>
					</div>
				</div>
				<div class="row">
				   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['info']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
					<div class="col-md-4 col-sm-4 col-xs-6 text-center game-item">
						<div class="game-item-img">
							<img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['game_small_img'];?>
" class="img-responsive img-hover img-rounded">
							<div class="txt-four">
								<p><?php echo $_smarty_tpl->tpl_vars['val']->value['game_desc'];?>
</p>
							</div>
						</div>
						<div class="caption game-list-title">
							<p><?php echo $_smarty_tpl->tpl_vars['val']->value['game_name'];?>
</p>
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
		<?php $_smarty_tpl->_subTemplateRender('file:./footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php echo '<script'; ?>
>
			$(function() {
				//从左侧显示遮罩效果 开始
				$(".game-item-img").hover(function() {
						$(this).find(".txt-four").stop().animate({
							"left": 0
						});
					}, function() {
						var itemWidth = $(this).width();
						$(this).find(".txt-four").stop().animate({
							"left": - +itemWidth
						});
					})
					//从左侧显示遮罩效果 结束
			});
		<?php echo '</script'; ?>
><?php }
}
