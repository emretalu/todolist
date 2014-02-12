<form action="<?=site_url();?>/add" method="post">
<input type="text" value="I have to..." onclick="this.value=''" name="todo"> <input type="submit" value="add">
</form>
<br/><br/>

<?php foreach($items as $i): ?>
	<a class="big" href="<?=site_url();?>/view/<?php echo $i->id; ?>/">
	<span class="item">
	<?php echo $i->id; ?> - <?php echo $i->item_name; ?>
	</span>
	</a>
	<?php if($i->done == 0) { ?>	
	<a href="<?=site_url();?>/done/<?php echo $i->id; ?>"><img src="<?=base_url();?>/assets/images/done.png" width="20px"/></a>
	<?php } ?>
	<?php if($i->done == 1) { ?>
	<a href="<?=site_url();?>/delete/<?php echo $i->id; ?>"><img src="<?=base_url();?>/assets/images/delete.png" width="20px"/></a>
	<?php } ?>
	<br/>
<?php endforeach; ?>


<?php if(strlen($pagination)): ?>
	<div>
	<br />
		<?php echo $pagination; ?>
	</div>
<?php endif; ?>