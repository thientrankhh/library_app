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
		<h1 style="color: red">LIST BORROW</h1>

		

		<br><hr><br><a href="?controller=c_book&action=menu_book"><button type="button" class="btn btn-primary disabled">Home</button></a><br><hr><br>

		<a href="?controller=c_receipts&action=list_receipts"><button type="button" class="btn btn-primary disabled">Back List Receipts</button></a><br><hr><br>
		
		<a href="?controller=c_receipts&action=add_new"><button type="button" class="btn btn-primary disabled">Add New Borrow</button></a>

		<br><hr><br>
		
		

		<br><br>
		<table class="table table-responsive table-inverse badge-success" style="font-size: 16px">
			<thead>
				<tr>
					<th>No</th>
					<th>cardID</th>
					<th>StudentName</th>
					<th>Address</th>
					<th>Tel</th>
					<th>bookID</th>
					<th>Category Name</th>
					<th>book Name</th>
					<th>puslisher</th>
					<th>author</th>
					<th>dateBorrow</th>
					<th>datereturn</th>
					<th>returnOK</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($borrow_books as $key => $value): ?>
					
					<tr>
						<td><?php echo $key+1; ?></td>
						<td><?php echo $value['cardID']; ?></td>
						<td><?php echo $value['nameStudent']; ?></td>
						<td><?php echo $value['address']; ?></td>
						<td><?php echo $value['tel']; ?></td>
						<td><?php echo $value['bookID']; ?></td>
						<td><?php echo $value['categoryName']; ?></td>
						<td><?php echo $value['bookName']; ?></td>
						<td><?php echo $value['puslisher']; ?></td>
						<td><?php echo $value['author']; ?></td>
						<td><?php echo $value['dateBorrow']; ?></td>
						<td><?php echo $value['datereturn']; ?></td>
						<td><?php echo ($value['returnOK']==1)?'Đã trả':'Chưa trả'; ?></td>
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