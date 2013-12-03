<? if (isset($records)) { ?>
<div class="panel-body">
	<? if (isset($uniqueKeywords)) { ?>
		<div class="col-lg-12">
		YOU MIGHT ALSO LIKE : <select id="rec_option" onchange="javascript:changeSel();">
			<? foreach ($uniqueKeywords as $key => $value) { ?>
				<? $val = str_replace("(all) ", "", $value); ?>
				<option value="<?= $val ?>"><?= $val ?></option>
			<? } ?>
		</select> <i></i>
		</div><br />
	<? } ?>
	
	<ul id="response_con" class="grid cs-style-3">
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
	
</div>
<? } ?>
		