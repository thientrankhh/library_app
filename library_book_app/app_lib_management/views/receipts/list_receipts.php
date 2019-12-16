<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>List Receipts</title>

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
		
		<a href="?controller=c_receipts&action=show_borrow_book"><button type="button" class="btn-lg btn-primary disabled">Shown Borrow Book</button></a><br><hr><br>

		<!-- <form action="" method="POST" accept-charset="utf-8">
			<input class="btn btn-info" type="text" name="cardID_search" placeholder="Search cardID" style="font-weight: bold">
			<a href="?controller=c_receipts&action=search_cardID"><button type="button" class="btn btn-primary">Search</button></a>
		</form> -->

		<form action="" method="POST" role="form">
			<legend>Search</legend>
		
			<div class="form-group">
				<input type="text" class="form-control" id="categoryName" name="cardID_search" placeholder="Search cardID">
			</div>
		
			<button type="submit" name="action" value="search_cardID_receipts" class="btn btn-primary">Search</button>
			<a href="?controller=c_receipts&action=list_receipts"><button type="button" class="btn btn-warning disabled">Back</button></a>
		</form>
		<hr>
			<div class="btn-group btn-success">
				<button type="button" class="btn btn-secondary btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					List Receipts
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="?controller=c_receipts&action=list_return_book">Đã trả</a>
					<a class="dropdown-item" href="?controller=c_receipts&action=list_not_return_book">Chưa trả</a>	
				</div>
			</div>
			<a href="?controller=c_receipts&action=list_receipts"><button type="button" class="btn btn-warning disabled">Back</button></a>
							
		<br><hr><br>
		<br><br>
		<table class="table table-responsive table-inverse badge-success" style="font-size: 16px">
			<thead>
				<tr>
					<th>cardID</th>
					<th>bookID</th>
					<th>dateBorrow</th>
					<th>datereturn</th>
					<th>
						<div class="btn-group btn-success">
							<button type="button" class="btn btn-secondary btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								returnOK
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="?controller=c_receipts&action=list_return_book">Đã trả</a>
								<a class="dropdown-item" href="?controller=c_receipts&action=list_not_return_book">Chưa trả</a>	
							</div>
						</div>	
					</th>
					<th>Book Return</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($list_receipts as $key => $value): ?>
					
					<tr>
						<td><?php echo $value['cardID']; ?></td>
						<td><?php echo $value['bookID']; ?></td>
						<td><?php echo $value['dateBorrow']; ?></td>
						<td><?php echo $value['datereturn']; ?></td>
						<td><?php echo ($value['returnOK']==1)?"Đã trả":"Chưa trả"; ?></td>
						<td> 
							<?php if($value['returnOK']==0){ ?>
						 		<a href="?controller=c_receipts&action=return_book&id=<?php echo $value['cardID']; ?>"><button type="button" class="btn btn-primary">Trả sách</button></a>
						 	<?php } ?>
						</td>
						<td><a href="?controller=c_receipts&action=edit&id=<?php echo $value['cardID']; ?>">Edit Info</a></td>
						<td><a href="?controller=c_receipts&action=delete&id=<?php echo $value['cardID'] ?>">Delete</a></td>
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