<h1>all Users page</h1>

<div class="card">
	
<div class="card-title">
	<h3 class="display-3">All Users</h3>

</div>
<div class="card-body">
	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Fullname</th>
				<th scope="col">Email</th>
				<th scope="col">Role</th>
				<th scope="col">password</th>
				<th scope="col">Status</th>
			</tr>

		</thead>
		<tbody>
			<?php viewUsers(); ?>
		</tbody>
	</table>

</div> <!-- Card Body ends -->
</div>