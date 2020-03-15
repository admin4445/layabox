		<{include file='./header.tpl'}>
		<section class="product-layaflash">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="caption fadeInLeft animated">
							<p><span class="pro-num-001">1</span><span class="pro-title"><{$productinfo[2]['product_title']}></span></p>
						</div>
						<div class="caption pro-layaflash-content fadeInDown animated">
							<p class="layaflash-header-title"><{$productinfo[2]['child'][0]['p_title']}> </p>
							<ul>
								
								<li><{$productinfo[2]['child'][0]['p_content']}></li>
							</ul>
							<p class="pro-down-btn">
								<a href="http://www.layabox.com/index.php?m=content&c=index&a=lists&catid=22" class="btn pro-btn-down">进入下载</a>
								<!--<a href="" class="btn pro-btn-version">查看详情</a>-->
							</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 text-center">
						<img src="<{$productinfo[2]['child'][0]['p_img']}>" class="img-hover img-responsive animated fadeInDown delay-2">
					</div>
				</div>
			</div>
		</section>
		<section class="product-layaair">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="caption fadeInLeft animated delay-1">
							<p><span class="pro-num-002">2</span><span class="pro-title"><{$productinfo[4]['product_title']}></span></p>
						</div>
					</div>

				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<img src="<{$productinfo[4]['child'][0]['p_img']}>" class="img-responsive fadeInDown animated delay-1" alt="">
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="caption fadeInDown animated delay-2">
							<p class="layaplayer-title"><{$productinfo[4]['child'][0]['p_title']}></p>
							<p class="layapalyer-text">
								<{$productinfo[4]['child'][0]['p_content']}>
							</p>
							<p class="layaplayer-title"><{$productinfo[4]['child'][1]['p_title']}></p>

							<p class="layapalyer-text"><{$productinfo[4]['child'][1]['p_content']}></p>
							<p class="pro-down-btn">
								<!--<a href="" class="btn laya-btn-down">点击下载</a>-->
								<!--<a href="" class="btn laya-btn-version">查看详情</a>-->
							</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="layaplayer-right">
							<img src="<{$productinfo[4]['child'][1]['p_img']}>" class="img-responsive fadeInDown animated delay-3" alt="">
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
							<p><span class="pro-num">3</span><span class="pro-list-title"><{$productinfo[5]['product_title']}></span></p>
							<h4 class="pro-header"><{$productinfo[5]['product_desc']}></h4>
							
							<{foreach $productinfo[5]['child'] as $val }>
							<h4 class="pro-small-title"><{$val['p_title']}></h4>
							<p class="pro-list-text">
								<{$val['p_content']}>
							</p>
							<{/foreach}>
							
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
							<p><span class="pro-num">4</span><span class="pro-list-title"><{$productinfo[0]['product_title']}></span></p>
							<h4 class="pro-header"><{$productinfo[0]['product_desc']}></h4>
							
							<{foreach $productinfo[0]['child'] as $val }>
							<h4 class="pro-small-title"><{$val['p_title']}></h4>
							<p class="pro-list-text">
								<{$val['p_content']}>
							</p>
							<{/foreach}>
							
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
							<p><span class="pro-num">5</span><span class="pro-list-title"><{$productinfo[3]['product_title']}></span></p>
							<h4 class="pro-header"><{$productinfo[3]['product_desc']}></h4>
							
							<{foreach $productinfo[3]['child'] as $val }>
							<h4 class="pro-small-title"><{$val['p_title']}></h4>
							<p class="pro-list-text">
								<{$val['p_content']}>
							</p>
							<{/foreach}>
							
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
							<p><span class="pro-num">6</span><span class="pro-list-title"><{$productinfo[1]['product_title']}></span></p>
							<h4 class="pro-header"><{$productinfo[1]['product_desc']}></h4>
							
							<{foreach $productinfo[1]['child'] as $val }>
							<h4 class="pro-small-title"><{$val['p_title']}></h4>
							<p class="pro-list-text">
								<{$val['p_content']}>
							</p>
							<{/foreach}>
							
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
		<{include file='./footer.tpl'}>