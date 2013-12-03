<? if (isset($records)) { ?>
<div class="panel-body">
	<? if (isset($uniqueKeywords)) { ?>
		<div class="col-lg-12">
		RELATED VIDEO NEAR BY YOUR LOCATION : <? if ($partnerName!="") { echo "(".$partnerName.")" ;} ?>
		<? if ($uniqueKeywords!="") { ?>
		<select id="rec_option" onchange="javascript:changeSel();">
			<? foreach ($uniqueKeywords as $key => $value) { ?>
				<? $val = str_replace("(all) ", "", $value); ?>
				<option value="<?= $val ?>"><?= $val ?></option>
			<? } ?>
		</select> <i></i>
		<? } ?>
		</div><br />
	<? } ?>
	
	<ul id="response_con" class="grid cs-style-3">
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
				<img src="<?= $imgurl ?>" alt="">
				<figcaption>
					<h3 style="text-overflow:ellipsis;"><?= $record['title'] ?></h3>
				</figcaption>
			</figure>
			</a>
		</li>
	<? } ?>
	</ul>
	
</div>
<? } ?>
		