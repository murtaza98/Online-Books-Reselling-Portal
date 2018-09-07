<h3 class="text-center"><b><u>ALL USERS</u></b></h3>
<div class="row">
	<div class="col-lg-12">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th class="text-center">UserName</th>
					<th class="text-center">Email</th>
					<th class="text-center">Name</th>
					<th class="text-center">Role</th>
					<th class="text-center">City</th>
					<th class="text-center">Pincode</th>
					<th class="text-center">Contact</th>
					<th class="text-center">User Category</th>
					<th class="text-center">Edit</th>
					<th class="text-center">Delete</th>
				</tr>
			</thead>
			<tbody>

				<?php
					$query = "SELECT * from users";

					$query_result = mysqli_query($connection,$query);

					if(!$query_result){
						die("QUERY FAILED " .mysqli_error($connection));
					}else{
						while ($row = mysqli_fetch_assoc($query_result)) {
							$username = $row['username'];
							$email = $row['email'];
							$name = $row['first_name'] . " " . $row['middle_name']. " " .$row['last_name'];
							$role = $row['role'];
							$city = $row['city'];
							$pincode = $row['pincode'];
							$contact = 1234456;
							$user_category = $row['user_category'];
				?>
							<tr>
								<td class="text-center"><?php echo $username ?></td>
								<td class="text-center"><?php echo $email ?></td>
								<td class="text-center"><?php echo $name ?></td>
								<td class="text-center"><?php echo $role ?></td>
								<td class="text-center"><?php echo $city ?></td>
								<td class="text-center"><?php echo $pincode ?></td>
								<td class="text-center"><?php echo $contact ?></td>
								<td class="text-center"><?php echo $user_category ?></td>
								<td class="text-center"><a href="users.php?source=edit_user&edit=<?php echo $username ?>" class="btn btn-primary">Edit</a></td>
								<td class="text-center"><a href="users.php?delete=<?php echo $username ?>" class="btn btn-danger">Delete</a></td>
							</tr>
				<?php
						}

					}

				?>
			</tbody>						
		</table>
	</div>	
</div>	