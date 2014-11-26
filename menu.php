<?php 
	include("includes/header.php");
	include("includes/array.php");
?>

<h4 class="menuAlign"> Here are our Delicious menu items </h4>

<?php	foreach ($menu as $menuitem=>$menus){ ?>
			<div class="menuAlign">
				<a href=""><?php echo "$menuitem"; ?></a> &nbsp <?php echo "$$menus[price]"; ?><br></br>
			</div> <!-- menuALign-->
<?php		} ?>

<?php  include("includes/footer.php"); ?>
