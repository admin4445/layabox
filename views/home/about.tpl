       <{include file="./header.tpl"}>
		<header>
			<img src="<{$baninfo[0]['ban_img']}>" class="img-responsive img-hover">
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
							<h2 class="lead"><{$companyinfo['com_title']}></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-sm-8 col-xs-12 introduce">
						<div class="caption">
							<p> 
							 <{$companyinfo['com_desc']}>
							</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="caption text-center">
							<img src=" <{$companyinfo['com_img']}>" class="img-hover img-responsive">
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
							<p><{$talentinfo['com_title']}></p>
							<p><{$talentinfo['com_desc']}></p>
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
				<{foreach $recruitinfo as $val}>
				<div class="row positon-list">
					<div class="col-md-12">
						<div class="page-header">
							<h2 class="zhaopin-title"><{$val['rec_positon']}></h2>
						</div>
						<div class="caption">

							<h4>职位描述：</h4>
							<div class="positon-detail">
								<ol class=" list-paddingleft-2">
									<{foreach $val['rec_pos_desc'] as $v}>
									<li>
										<p><{$v}></p>
									</li>
									<{/foreach}>
									
								</ol>
							</div>
							<h4>任职要求：</h4>
							<div class="require-detail">
								<ol class=" list-paddingleft-2">
									<{$val['rec_pos_demand']}>
								</ol>
							</div>
						</div>
					</div>
				</div>
				<{/foreach}>
			
				

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
					<{foreach  $telinfo as $val}>
					<div class="col-md-6 col-sm-6">
						<div class="media well">
							<div class="media-body">
								<p><img src="<{$val['com_img']}>"><{$val['com_desc']}></p>
							</div>
						</div>
					</div>
					<{/foreach}>
				</div>
				
			</div>
		</section>
		<!-- Footer -->
		 <{include file="./footer.tpl"}>