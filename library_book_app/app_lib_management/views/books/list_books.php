<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>List Books</title>

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
		<h1 style="color: red">LIST OF BOOK</h1>

		<br><hr><br><a href="?controller=c_book&action=menu_book"><button type="button" class="btn btn-primary disabled">Home</button></a><br><hr><br>
		
		<a href="?controller=c_book&action=add_new"><button type="button" class="btn btn-primary disabled">Add Book</button></a>

		<br><hr><br>
		<form action="" method="POST" role="form">
			<legend>Search</legend>
			<div class="form-group">
				<label for="">Enter Value</label>
				<input type="text" class="form-control" id="" name="search_value" placeholder="Enter Value"><br>
				<button type="submit" name="action" value="search_book" class="btn btn-primary">Search</button>
			</div>
		</form>

		<br><br>
		<table class="table table-responsive table-inverse badge-success" style="font-size: 16px">
			<thead>
				<tr>
					<th>bookID</th>
					<th>Name</th>
					<th>publisher</th>
					<th>author</th>
					<th>categoryID</th>
					<th>numofpage</th>
					<th>maxdate</th>
					<th>number</th>
					<th>sumary</th>
					<th>picture</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($list_books as $key => $value): ?>
					
					<tr>
						<td><?php echo $value['bookID']; ?></td>
						<td><?php echo $value['bookName']; ?></td>
						<td><?php echo $value['puslisher']; ?></td>
						<td><?php echo $value['author']; ?></td>
						<td><?php echo $value['categoryID']; ?></td>
						<td><?php echo $value['numofpage']; ?></td>
						<td><?php echo $value['maxdate']; ?></td>
						<td><?php echo $value['num']; ?></td>
						<td><?php echo $value['summary']; ?></td>
						<td><img style="width: 70px" src="public/images/<?php echo $value['picture']; ?>" alt=""></td>
						<td><a href="?controller=c_book&action=edit&id=<?php echo $value['bookID'] ?>">Edit</a></td>
						<td><a href="?controller=c_book&action=delete&id=<?php echo $value['bookID'] ?>">Delete</a></td>
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