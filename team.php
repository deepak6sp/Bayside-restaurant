<?php 
	include("includes/header.php");
	include("includes/array.php");
?>
<?php	foreach ($team as $tm){ ?>
			<div id="teamAlign">
				<img src="img/<?php echo "$tm[image]" ?>.png" height="100" width="100" />
				<?php echo "<br>"."$tm[name]"."<br>"."$tm[description]" ?>
			</div>
<?php		} ?>

<?php  include("includes/footer.php"); ?>
