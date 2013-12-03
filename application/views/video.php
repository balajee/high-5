<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				<?= $video->title ?>
			</header>
			<div class="panel-body">
				<video width="100%" controls autoplay>
					<source src="<?= $video->videoUrl ?>" type="video/mp4">
					Your browser does not support the video tag.
				</video>
				<div class="row">
					<section class="panel"><div class="panel-body"><p><?= $video->description ?></p></div></section>
				</div>
				<div class="row state-overview">
					<div class="col-lg-3 col-sm-6">
					    <section class="panel">
						<div class="symbol terques">
						    <i class="icon-filter"></i>
						</div>
						<div class="value">
						    <h4><?= $video->channel ?></h4>
						    <p>Channel</p>
						</div>
					    </section>
					</div>
					<div class="col-lg-6 col-sm-6">
					    <section class="panel">
						<div class="symbol red">
						    <i class="icon-film"></i>
						</div>
						<div class="value">
						    <h4><?= $video->category ?></h4>
						    <p>Category</p>
						</div>
					    </section>
					</div>
					<div class="col-lg-3 col-sm-3">
					    <section class="panel">
						<div class="symbol yellow">
						    <i class="icon-calendar"></i>
						</div>
						<div class="value">
						    <h4><?= date("m/d/Y", strtotime($video->pubDate)) ?></h4>
						    <p>Date</p>
						</div>
					    </section>
					</div>
				</div>
			</div>
		</section>
		<section class="panel">
			<header class="panel-heading">Related Videos</header>
			<div class="panel-body">
				<? if ($related) { ?>
					<ul class="grid cs-style-3">
					<?foreach ($related as $record) { ?>
						<li>
							<a href="/video/<?= $record->id ?>/">
							<figure>
								<img src="<?= $record->thumbnails[0]->url ?>">
								<figcaption>
									<h3><?= $record->title ?></h3>
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