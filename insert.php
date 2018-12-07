<meta 	charset="utf-8">
<?php 
include 'config.php';


if ( isset($_POST[submit]) ) {

	$username = $_POST[username];
	$password = $_POST[password];
	$phone = $_POST[phonenumber];
	$email = $_POST[email];
	$fname = $_POST[firstname];
	$lname = $_POST[lastname];

	$sql = "INSERT INTO admin (  username,password,phonenumber,email,firstname,lastname )  values (  '$username','$password','$phone','$email','$fname','$lname'  )  ;";

	$query = pg_query($sql);

	$text = "insert สำเร็จ";

}


if (  isset( $_POST[delete] )	) {

	$id = $_POST[id];
	$sql = "DELETE from admin  where id = '$id' ;";
	$query = pg_query($sql);

	$text = 'ลบสำเร็จ';
	
}


if (  isset( $_POST[update] )	) {
	$id = $_POST[id];
	$username = $_POST[username];
	$password = $_POST[password];
	$phone = $_POST[phonenumber];
	$email = $_POST[email];
	$fname = $_POST[firstname];
	$lname = $_POST[lastname];
	$sql = "UPDATE admin set username,password,phonenumber,email,firstname,lastname = '$username','$password','$phone','$email','$fname','$lname' where id = '$id' ;";
	$query = pg_query($sql);

		$text = 'อัพเดตสำเร็จ';

}

?>

<?php echo $text; ?>
<form action="insert.php" method="post">	

	<input type="text" name="username"> username <br>
	<input type="password" name="password"> password <br>
	<input type="text" name="phonenumber"> phonenumber <br>
	<input type="text" name="email"> email <br>
	<input type="text" name="firstname"> firstname <br>
	<input type="text" name="lastname"> lastname <br>	
	<button type="submit" name="submit">	submit</button>

</form>


<hr>	
<p> ลบ	</p>
<form action="insert.php" method="post">
<table>	

<?php 
		$sql1 = 'SELECT * from admin  order by id asc';
		$query1 = pg_query($sql1);
		while ( $arr1 = pg_fetch_array( $query1 )	) {
?>
		<tr>	
				<td><?php echo $arr1[id]; ?></td>
				<td><?php echo $arr1[username]; ?></td>
				<td><?php echo $arr1[password]; ?></td>
				<td><?php echo $arr1[phonenumber]; ?></td>
				<td><?php echo $arr1[email]; ?></td>
				<td><?php echo $arr1[firstname]; ?></td>
				<td><?php echo $arr1[lastname]; ?></td>
				<td>	
						
						<input type="hidden" name="id" value="<?php echo $arr1[id]; ?>">
						<button type="submit" name="delete"  >x</button>
					
				</td>
		</tr>
<?php } ?> 

</table>
</form>	

<hr>	


<p>	อัพเดต</p>

	
		<table>	

		<?php 
				$sql1 = 'SELECT * from admin order by id asc;';
				$query1 = pg_query($sql1);
				while ( $arr1 = pg_fetch_array( $query1 )	) {
		?>
<form action="insert.php" method="post">
				<tr>	
						<td><?php echo $arr1[id]; ?></td>
						<td> <input type="text" name="username" value="<?php echo $arr1[username]; ?>">   </td>
						<td>	
							
								<input type="hidden" name="id" value="<?php echo $arr1[id]; ?>">
								<button type="submit" name="update"  >up</button>
							
						</td>
				</tr>
</form>
		<?php } ?> 

		</table>
	




