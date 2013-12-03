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
				<div class="row state-overview">
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol terques">
                              <i class="icon-user"></i>
                          </div>
                          <div class="value">
                              <h1><?= $video->channel ?></h1>
                              <p>Channel</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol red">
                              <i class="icon-tags"></i>
                          </div>
                          <div class="value">
                              <h1><?= $video->category ?></h1>
                              <p>Category</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                      <section class="panel">
                          <div class="symbol yellow">
                              <i class="icon-shopping-cart"></i>
                          </div>
                          <div class="value">
                              <h1><?= date("m/d/Y", strtotime($video->pubDate)) ?></h1>
                              <p>Date</p>
                          </div>
                      </section>
                  </div>
              </div>
			</div>
		</section>
	</div>
</div>