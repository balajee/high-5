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
							<figure>
								<img src="<?= $record['thumbnails'][2]['url'] ?>" alt="img04">
								<figcaption>
									<h3><?= $record['title'] ?></h3>
									<a class="fancybox" rel="group" href="/video/<?= $record['id'] ?>/">View More</a>
								</figcaption>
							</figure>
						</li>
					<? } ?>
					</ul>
				<? } ?>
			</div>
		</section>
				
	</div>
</div>