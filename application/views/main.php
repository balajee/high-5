<div class="row">
	<div class="col-lg-12">
		<? if ($records) { ?>
			<section class="panel">
				<header class="panel-heading">
					<?= $welcome_msg ?>
				</header>
				<div class="panel-body">
					<?
					$i = 0;
					foreach ($records['items'] as $record) { ?>
						<? if ($i==0) {  ?>
							<video width="100%" controls>
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