<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Page Title</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<style>
			body{
				width: 960px;
				margin: 0 auto;
			}
		</style>
	</head>
	<body>
		<h1 style="color: red">LIST STUDENTS</h1>

		

		<br><hr><br><a href="?controller=c_book&action=menu_book"><button type="button" class="btn btn-primary disabled">Home</button></a><br><hr><br>
		
		<a href="?controller=c_student&action=add_student"><button type="button" class="btn btn-primary disabled">Add Student</button></a>

		<br><hr><br>
		<form action="" method="POST" role="form">
			<legend>Search</legend>
		
			<div class="form-group">
				<input type="text" class="form-control" id="categoryName" name="nameStudent" placeholder="Enter Name Student">
			</div>
		
			<button type="submit" name="action" value="search_nameStudent" class="btn btn-primary">Search</button>
			<a href="?controller=c_student&action=list_students"><button type="button" class="btn btn-warning disabled">Back</button></a>
		</form>
		<br><hr><br>

		<br><br>
		<table class="table table-responsive table-inverse badge-success" style="font-size: 16px">
			<thead>
				<tr>
					<th>cardID</th>
					<th>nameStudent</th>
					<th>address</th>
					<th>tel</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($list_students as $key => $value): ?>
					
					<tr>
						<td><?php echo $value['cardID']; ?></td>
						<td><?php echo $value['nameStudent']; ?></td>
						<td><?php echo $value['address']; ?></td>
						<td><?php echo $value['tel']; ?></td>
					
						<td><a href="?controller=c_student&action=edit&id=<?php echo $value['cardID']; ?>">Edit</a></td>
						<td><a href="?controller=c_student&action=delete_student&id=<?php echo $value['cardID']; ?>">Delete</a></td>
					</tr>

				<?php endforeach; ?>
			</tbody>
		</table>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>