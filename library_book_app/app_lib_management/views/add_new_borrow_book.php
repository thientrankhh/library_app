<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Add New Borrow Book</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	</head>
	<body>
		<!-- <h1>Add new borrow book</h1> -->
		<br><hr><br><a href="?controller=c_book&action=menu_book"><button type="button" class="btn btn-primary disabled">Home</button></a><br><hr><br>

		<a href="?controller=c_receipts&action=list_receipts"><button type="button" class="btn btn-primary disabled">Back List Receipts</button></a><br><hr><br>

		<form action="" method="POST" role="form">
			<legend><h2>Add new borrow book</h2></legend>
		
			<div class="form-group">
				<label for="">CardID</label>
				<input type="text" class="form-control" name='CardID' id="" placeholder="Enter CardID" required value="<?php echo $CardID; ?>">

				<label for="">BookID</label>
				<input type="text" class="form-control" name='BookID' id="" placeholder="Enter BookID" required >
			</div>
		
			
		
			<button type="submit" name="action" value="add_borrow_book" class="btn btn-primary">Add</button>
		</form><br><h5><?php echo $message; ?></h5><br>

         <h5>CardID: <?php echo $CardID; ?></h5>
         <br><h5>StudentName: <?php echo $studentname; ?></h5>
         <br><h5>Adress: <?php echo $address; ?></h5>

         <table class="table table-hover">
         	<thead>
         		<tr>
         			<th>No</th>
         			<th>BookID</th>
         			<th>BookName</th>
         			<th>Author</th>
         			<th>Publisher</th>
         			<th>DateBorrow</th>
         			<th>Action</th>
         		</tr>
         	</thead>
         	<tbody>
         		<?php if(isset($_SESSION[$CardID])): ?>
         			<?php foreach ($_SESSION[$CardID] as $key => $value): ?>
		         		<tr>
		         			<td><?php echo $key+1; ?></td>
		         			<td><?php echo $value['bookID']; ?></td>
		         			<td><?php echo $value['bookName']; ?></td>
		         			<td><?php echo $value['author']; ?></td>
		         			<td><?php echo $value['puslisher']; ?></td>
		         			<td><?php echo $value['dateBorrow']; ?></td>
		         			<td><a href="?controller=c_receipts&action=delete_borrow&id=<?php echo $key; ?>&CardID=<?php echo $CardID; ?>"><button type="submit"> Delete</button></a></td>
		         		</tr>
		         	<?php endforeach; ?>
		         <?php endif; ?>		
         	</tbody>
         </table>
         <a href="?controller=c_receipts&action=save_borrow_book&CardID=<?php echo $CardID; ?>"><button type="button" class="btn btn-primary">Submit</button></a>
         <a href="?controller=c_receipts&action=show_borrow_book"><button type="button" class="btn btn-primary">Back</button></a>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>