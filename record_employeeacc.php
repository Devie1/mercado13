<title>Employee Account Information</title>
<li><a href="form_employeeacc.php">BACK</a></li>


<link rel="stylesheet" type="text/css" href="style_employeeacc.css">

	<div>
		<table>
			<thead>
				<center>
                    <th>Account type </th>
				<th><center>Last Name</center></th>
				<th>First Name</th>
				<th>Middle Name</th>
				<th>Birthday</th>
				<th>Username</th>
				<th>Password</th>
				
				<th></th>
                </center>
			</thead>
			<tbody>



<?php
					include('conn_employeeacc.php');
					$query=mysqli_query($conn,"select * from `employee_acc`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
                            <td><?php echo $row['acc_type']; ?></td>
                            <td><?php echo $row['acc_lastname']; ?></td>
							<td><?php echo $row['acc_firstname']; ?></td>
							<td><?php echo $row['acc_middlename']; ?></td>
							<td><?php echo $row['acc_birthday']; ?></td>
							<td><?php echo $row['acc_username']; ?></td>
							<td><?php echo $row['acc_password']; ?></td>
						
							<td>

								
							
								<a href="edit_employeeacc.php?id=<?php echo $row['acc_id']; ?>">Edit</a>
								<a onclick="clicked(event)" href="delete_employeeacc.php?id=<?php echo $row['acc_id']; ?>">Delete</a>

								<script>
function clicked(e)
{
    if(!confirm('Are you sure you want to delete this record?')) {
        e.preventDefault();
    }
}
</script>
							</td>
						</tr>
						
						<?php
					}
				?>
			</tbody>
		</table>
    
	</div>
</body>
</html>