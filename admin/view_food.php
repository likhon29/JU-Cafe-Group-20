<?php include "header.php"; ?>
<?php include "connect.php"; ?>
<style type="text/css">
	tr {
		font-size: 1.2em;
		color: #26947e;


	}

	tr:hover {
		background-color: black;
		color: white;


	}

	th {
		color: blue;
		font-size: 1.3em;
	}

	.del {
		color: red;
		text-decoration: none;
	}

	.del:hover {
		color: blue;
		text-decoration: none;
		text-shadow: 2px 3px 2px #FFFFFF;
	}

	.content {
		position: relative;
		top: 100px;
		left: 350px;
		padding-right: 400px;
	}
</style>
<div class="content">
	<table border=1 width="100%" cellspacing="3" cellpadding="5" style="box-shadow: 5px 4px 10px 2px; font-family: times new roman; ">

		<tr>
			<th>SUB CATAGORY</th>
			<th>TITLE</th>
			<th>DESCRIPTION</th>
			<th>PRICE</th>
			<th>IMAGE</th>
			<th>REMOVE</th>
		</tr>
		<?php
		$s = mysqli_query($con, "select * from menu");
		while ($r = mysqli_fetch_array($s)) {
		?>
			<tr align=center>
				<td><?php echo $r['sub_cat']; ?></td>
				<td><?php echo $r['title']; ?></td>
				<td><?php echo $r['description']; ?></td>
				<td><?php echo $r['price']; ?></td>
				<td><img src="<?php echo $r['image']; ?>" width=70 height=70></td>
				<td><a href="delfood.php?a=<?php echo $r['id']; ?>" class="del">DELETE</a></td>
			</tr>
		<?php
		}
		?>

		<button style="color:azure; background-color:green;width:100px;height:50px;margin:5px"><a href="food.php" style="text-decoration: none; ">Add Food</a></button>
	</table>


</div>
<?php include "footer.php"; ?>