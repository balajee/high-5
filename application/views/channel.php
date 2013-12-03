

<script>var ajaxurl="/channel/getRecommendation/";</script>

<div id="recommend_mn" class="row">
	<div class="col-lg-12">
		<section class="panel">
		    <div class="panel-body">
			<div id="recommend"><i></i></div>
		    </div>
		</section>
	</div>
</div>


<div class="row">
	<div class="col-lg-12">
		
		<section class="panel">
			<header class="panel-heading">
	                      Videos
	                </header>
			<div class="panel-body">
				<? if ($records) { ?>
					<ul class="grid cs-style-3">
					<?foreach ($records['items'] as $record) { ?>
						<li>
							<a href="/video/<?= $record['id'] ?>/">
							<figure>
								<img src="<?= $record['thumbnails'][2]['url'] ?>">
								<figcaption>
									<h3><?= $record['title'] ?></h3>
								</figcaption>
							</figure>
							</a>
						</li>
					<? } ?>
					</ul>
				<? } ?>
			</div>
		</section>
				
	</div>
</div>