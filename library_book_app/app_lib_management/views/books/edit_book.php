<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Edit Book</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	</head>
	<body>
		<form action="" method="POST" role="form" enctype="multipart/form-data">
			<legend>Edit Book</legend>
		
			<div class="form-group">
				<label for="">BookID</label>
				<input type="text" class="form-control" id="" name="bookID" placeholder="Enter bookID" value="<?php echo $book['bookID']; ?>" readonly>

				<label for="">Name</label>
				<input type="text" class="form-control" id="" name="bookName" placeholder="Enter Name" value="<?php echo $book['bookName']; ?>">

				<label for="">publisher</label>
				<input type="text" class="form-control" id="" name="puslisher" placeholder="Enter Puslisher" value="<?php echo $book['puslisher']; ?>">

				<label for="">author</label>
				<input type="text" class="form-control" id="" name="author" placeholder="Enter author" value="<?php echo $book['author']; ?>">


				<label for="">CategoryID</label>
				<select name="categoryID" id="inputCategoryID" class="form-control" required="required" >
					<?php foreach ($categories as $key => $value): ?>			
						<option value="<?php echo $value['categoryID']; ?>" <?php if($book['categoryID']==$value['categoryID']) echo "selected"; ?> >  <?php echo $value['categoryName']; ?> </option>
					<?php endforeach; ?>
				</select>

				<label for="">numofpage</label>
				<input type="text" class="form-control" id="" name="numofpage" placeholder="Enter numofpage" value="<?php echo $book['numofpage']; ?>">

				<label for="">Maxdate</label>
				<input type="text" class="form-control" id="" name="maxdate" placeholder="Enter Maxdate" value="<?php echo $book['maxdate']; ?>">

				<label for="">Num</label>
				<input type="text" class="form-control" id="" name="num" placeholder="Enter Num" value="<?php echo $book['num']; ?>">


				<label for="">summary</label>
				<input type="text" class="form-control" id="" name="summary" placeholder="Enter Summary" value="<?php echo $book['summary']; ?>">

				<input type="hidden" name="old_picture" value="<?php echo $book['picture'];?>">
				<label for="">Picture</label>
				<input type="file" class="form-control" id="" name="picture" placeholder="Enter Picture" >

			</div>
		
			
		
			<button name="action" value="update_book" type="submit" class="btn btn-primary">Update</button>
		</form>


		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>