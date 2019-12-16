<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Update Receipts</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	</head>
	<body>
		<form action="" method="POST" role="form" enctype="multipart/form-data">
			<legend>Edit Receipts</legend>
		
			<div class="form-group">
				<label for="">cardID</label>
				<input type="text" class="form-control" id="" name="cardID" value="<?php echo $receipt['cardID']; ?>" placeholder="Enter cardID" readonly>

				<label for="">BookID</label>
				<input type="text" class="form-control" id="" name="bookID" value="<?php echo $receipt['bookID']; ?>" placeholder="Enter BookID">

				<label for="">dateBorrow</label>
				<input type="text" class="form-control" id="" name="dateBorrow" value="<?php echo $receipt['dateBorrow']; ?>"  placeholder="Enter dateBorrow">

				<label for="">datereturn</label>
				<input type="text" class="form-control" id="" name="datereturn" value="<?php echo $receipt['datereturn']; ?>"  placeholder="Enter datereturn">

				<label for="">returnOK</label>
				<input type="text" class="form-control" id="" name="returnOK" value="<?php echo $receipt['returnOK']; ?>"  placeholder="Enter 1 if return Book or Enter 0 if not return Book">

			</div>
		
			
		
			<button name="action" value="update_receipts" type="submit" class="btn btn-primary">Update</button>
		</form>


		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>