<?php foreach ($item as $i):?>
<h2><?php echo $i['item_name']?></h2>

	<a class="big" href="<?=site_url();?>/delete/<?php echo $i['id']?>">
	<span class="item">
	Delete this item
	</span>
	</a><br/>
<?php endforeach?>