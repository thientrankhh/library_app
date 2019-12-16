<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Add Categories</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	</head>
	<body>

		

		<form action="" method="POST" role="form" enctype="multipart/form-data">
			<legend><h3>Add Categories</h3></legend>
		
			<div class="form-group">
				<label for="">categoryID</label>
				<input type="text" class="form-control" id="" name="categoryID" placeholder="Enter categoryID">

				<label for="">categoryName</label>
				<input type="text" class="form-control" id="" name="categoryName" placeholder="Enter categoryName">

				<label for="">moreinfo</label>
				<input type="text" class="form-control" id="" name="moreinfo" placeholder="Enter moreinfo">

			</div>
		
			
		
			<button name="action" value="save_new_categories" type="submit" class="btn btn-primary">Add Categories</button>
			<a href="?controller=c_book&action=list_categories"><button type="button" class="btn btn-warning disabled">Back</button></a>
		</form>


		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>