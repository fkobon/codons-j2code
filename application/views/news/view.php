

		<div class="slidercontainer" style="background: #315F97;">
			<div class="container">
				<div class="ico"><span class="fa fa-tv"></span></div>
				<div class="title">
					<h2><?= $news_item['title'] ?></h2>
					<span><i class="fa fa-clock-o"></i> &nbsp; 10 minute read</span>
				</div>
			</div>
		</div>

		<div class="contentcontainer mt-5">
			<div class="container">
				<div class="col-md-12">
					<!-- lorem content -->
					<div>
						<p><?= $news_item['text']; ?></p>
					</div>
					<!-- end lorem content -->
				</div>
			</div>
		</div>

		<div class="authorcontainer">
			<div class="container">
				<div class="col-md-12">
					Written by <a href="#">admin</a> | 10/01/2018
				</div>
			</div>
		</div>
