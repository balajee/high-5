<div class="row">
	<div class="col-lg-12">
		<? if ($records) { ?>
			<section class="panel">
				<header class="panel-heading">
					<?= $welcome_msg ?>
				</header>
				<div class="panel-body">
					<div class="col-lg-6">
					<?
					$i = 0;
					foreach ($records['items'] as $record) { ?>
						<? if ($i==0) {  ?>
							<h4><a href="/video/<?= $record['id'] ?>/"><?= $record['title'] ?></a></h4>
							<video width="100%" controls autoplay>
								<source src="<?= $record['videoUrl'] ?>" type="video/mp4">
								<source src="movie.ogg" type="video/ogg">
								Your browser does not support the video tag.
							</video>
						<? } ?>
					<?
					$i++;
					}
					?>
					</div>
					<div class="col-lg-6">
						<ul class="grid cs-style-3">
						<?
						$j = 0;
						foreach ($records['items'] as $record) {
						?>
							<? if ($j>0 && $j<10) {  ?>
							<li style="width: 32%;">
								<a href="/video/<?= $record['id'] ?>/">
								<figure>
									<?
									if (isset($record['thumbnails'][2]['url']) && $record['thumbnails'][2]['url']!="") {
										$imgurl =  $record['thumbnails'][2]['url'];
									} else {
										$imgurl =  $record['thumbnails'][0]['url'];
									}
									?>
									<img src="<?= $imgurl ?>" alt="img04">
									<figcaption>
										<h3 style="font-size:10px;"><?= $record['title'] ?></h3>
									</figcaption>
								</figure>
								</a>
							</li>
							<? } ?>
						<?
						$j++;
						}
						?>
						</ul>
					</div>
				</div>
			</section>
		<? } ?>
	</div>
</div>

<div id="recommend_mn" class="row">
	<div class="col-lg-12">
		<section class="panel">
		    <div class="panel-body">
			<div id="recommend"><i></i></div>
		    </div>
		</section>
	</div>
</div>