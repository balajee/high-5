

<script>var ajaxurl="/channel/getRecommendation/<?= $channel ?>/";</script>

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
								<?
								if (isset($record['thumbnails'][2]['url']) && $record['thumbnails'][2]['url']!="") {
									$imgurl =  $record['thumbnails'][2]['url'];
								} else {
									$imgurl =  $record['thumbnails'][0]['url'];
								}
								?>
								<img src="<?= $imgurl ?>">
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