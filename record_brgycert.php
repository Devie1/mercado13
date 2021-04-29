<html>
<title>Resident Information</title>
    

<li><a href="form_brgycert.php">BACK</a></li>
    

<link rel="stylesheet" type="text/css" href="designregisters.css">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">


	<table id="myTable">
	<div>
		
			<thead>
				<center>
				<th>First Name</th>
				<th>Middle Name</th>
				<th>Last Name</th>
				<th>House Number</th>
                <th>Street Address</th>
				<th>Barangay</th>
				<th>City</th>
				<th>Province</th>
				<th>Gender</th>
				<th></th>
                </center>
			</thead>
			<tbody>



<?php
					include('connregister.php');
					$query=mysqli_query($conn,"select * from `register`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr class="header">
							<td><?php echo $row['firstname']; ?></td>
							<td><?php echo $row['middlename']; ?></td>
							<td><?php echo $row['lastname']; ?></td>
							<td><?php echo $row['housenumber']; ?></td>
                            <td><?php echo $row['streetaddress']; ?></td>
							<td><?php echo $row['barangay']; ?></td>
							<td><?php echo $row['city']; ?></td>
							<td><?php echo $row['province']; ?></td>
							<td><?php echo $row['gender']; ?></td>
							<td>


								
								<a href="edit_brgycert.php?id=<?php echo $row['userid']; ?>">Edit</a>
								<a onclick="clicked(event)" href="delete_brgycert.php?id=<?php echo $row['userid']; ?>">Delete</a>
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
                
			</body>
		</table>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>