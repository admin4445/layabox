		<{include file='./header.tpl'}>
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
				<{foreach $baninfo as $v}>
				<div class="item" >
					<div class="fill">
						<img src="<{$v['ban_img']}>" alt="" class="img-responsive">
					</div>
					<div class="carousel-caption">

					</div>
				</div>
				<{/foreach}>
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
							<h1><{$gameinfo[0]['game_name']}></h1>
							<p class="lead text-right"><{$gameinfo[0]['game_desc']}></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-sm-8 col-sm-offset-4 col-md-offset-4">
						<div class="row">

							<{foreach $gameinfo[0]['game_img_lib'] as $val}>
							<div class="col-md-6 col-sm-6 col-xs-6 text-center game-item">
								<div class="game-item-img">
									<img src="<{$val}>" class="img-responsive img-hover img-rounded">
								</div>

							</div>
							<{/foreach}>
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
							<h1><{$gameinfo[1]['game_name']}></h1>
							<p class="lead text-left"><{$gameinfo[1]['game_desc']}>
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-sm-8">
						<div class="row">
							<{foreach $gameinfo[1]['game_img_lib'] as $val}>
							<div class="col-md-6 col-sm-6 col-xs-6 text-center game-item">
								<div class="game-item-img">
									<img src="<{$val}>" class="img-responsive img-hover img-rounded">
								</div>

							</div>
							<{/foreach}>

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
				   <{foreach $info as $val}>
					<div class="col-md-4 col-sm-4 col-xs-6 text-center game-item">
						<div class="game-item-img">
							<img src="<{$val['game_small_img']}>" class="img-responsive img-hover img-rounded">
							<div class="txt-four">
								<p><{$val['game_desc']}></p>
							</div>
						</div>
						<div class="caption game-list-title">
							<p><{$val['game_name']}></p>
						</div>
					</div>
					<{/foreach}>
				</div>
			</div>

		</section>

		<!-- Footer -->
		<{include file='./footer.tpl'}>
		<script>
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
		</script>