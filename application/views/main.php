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
		<? if ($records) { ?>
			<section class="panel">
				<heading class="panel-heading">
					<?= $welcome_msg ?>
				</heading>
				<div class="panel-body">
					<?
					$i = 0;
					foreach ($records['items'] as $record) { ?>
						<? if ($i==0) {  ?>
							<video width="100%" height="300" controls>
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