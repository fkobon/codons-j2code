		<div class="articlecontainer">
			<div class="container">
				<div class="row" id="articlelist">
					<?php foreach ($news as $news_item): ?>
					<div class="col-sm-6 mb-5">
						<a href="<?php echo site_url('news/'.$news_item['slug']); ?>">
							<div class="cover" style="background-color: #852b66;">
								<div class="content">
									<div class="ico"><span class="fa fa-code-fork"></span></div>
									<h2 class="title"><?php echo $news_item['title']; ?></h2>
								</div>
							</div>
						</a>
						<div class="details mt-3">
							<p class="description">
								<?php echo $news_item['text']; ?>
							</p>
							<span class="smalltext"><span class="fa fa-clock-o"></span> 5 minute read</span>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>