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
				<ul class="summary-list">
					<li>
					    <a href="javascript:;">
						<i class=" icon-shopping-cart text-primary"></i>
						1 Purchase
					    </a>
					</li>
					<li>
					    <a href="javascript:;">
						<i class="icon-envelope text-info"></i>
						15 Emails
					    </a>
					</li>
					<li>
					    <a href="javascript:;">
						<i class=" icon-picture text-muted"></i>
						2 Photo Upload
					    </a>
					</li>
					<li>
					    <a href="javascript:;">
						<i class="icon-tags text-success"></i>
						19 Sales
					    </a>
					</li>
					<li>
					    <a href="javascript:;">
						<i class="icon-microphone text-danger"></i>
						4 Audio
					    </a>
					</li>
				    </ul>
			</div>
		</section>
	</div>
</div>