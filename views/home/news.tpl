        <{include file='./header.tpl'}>
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
					<{foreach $newstype as $val}>
					<div class="col-md-4 col-sm-4 col-xs-4 text-center hot-news-list">
						<div class="media news-caption">
							<a href="?type=<{$val['news_type_id']}>" title="<{$val['news_type_name']}>"> <img src="<{$val['news_type_img']}>" class="img-responsive img-hover"></a>
							<p class="news-title hidden-xs "><a href="http://www.layabox.com/news/94.html" title="<{$val['news_type_name']}>"><{$val['news_type_name']}></a></p>
						</div>
					</div>
					<{/foreach}>

					

					
				</div>
			</div>
		</section>

		<section class="news-content">
			<div class="container">

			   <{foreach $newsinfo  as $val}>
				<div class="row news-list-group">
					<div class="news-img col-md-3 col-sm-4 col-xs-4 text-center" style="padding-top: 8px;">
						<div class="thumbnail">
							<a href="#" title="<{$val['news_title']}>"><img src="<{$val['news_img']}>" alt="<{$val['news_title']}>" class="img-hover img-responsive"></a>
						</div>
					</div>
					<div class="col-md-9 col-sm-8  col-xs-8">
						<div class="caption">

							<h4>  <a href="#" title="<{$val['news_title']}>" class="news-title-item"><{$val['news_title']}>   </a></h4>
							<p class="date"><{$val['news_time']|date_format:"%m/%d/%Y 
"}></p>
							<p class="news-des hidden-xs">
							<{$val['news_content']}>
								 </p>
							<p class="news-detail hidden-xs">
								<span class="view-details"> <a href="http://www.layabox.com/news/169.html" title="<{$val['news_title']}>">查看详情</a></span>
							</p>

						</div>
					</div>
				</div>

				<{/foreach}>
			
				<div class="row">
					<div class="container">
						<div class="col-md-12">
							<div class="news-line"></div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12" >
						
					   <div class="centet-block"><{$paes}></div>
						

					</div>
				</div>

			</div>
		</section>

		<!-- Footer -->
		<{include file='./footer.tpl'}>