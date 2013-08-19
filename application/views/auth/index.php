<div class='mainInfo'>

	<h1>Users</h1>
	
	<div id="infoMessage"><?php echo $message;?></div>
	
	<table class="table">
		<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Group</th>
			<th>Status</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($users as $user):?>
			<tr>
				<td><?php echo $user['first_name']?></td>
				<td><?php echo $user['last_name']?></td>
				<td><?php echo $user['email'];?></td>
				<td><?php echo $user['group_description'];?></td>
				<td><?php echo ($user['active']) ? anchor("auth/deactivate/".$user['id'], 'Active') : anchor("auth/activate/". $user['id'], 'Inactive');?></td>
			</tr>
		<?php endforeach;?>
		</tbody>
	</table>
	
	<p><a href="<?php echo site_url('auth/create_user');?>">Create a new user</a></p>
	
	<p><a href="<?php echo site_url('auth/logout'); ?>">Logout</a></p>
	
</div>
