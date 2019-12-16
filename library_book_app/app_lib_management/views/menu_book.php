<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Book Manage</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<style>
			body{
				width: 960px;
				margin: 0 auto;
			}
			.logout_login{
				font-weight: bold;
				font-size: 20px;
			}
		</style>
	</head>
	<body>
		<h1 style="color: red">LIBRARY MANAGE</h1>
		
		<br><hr><br>
			<a href="?controller=c_login&action=logout"><button type="button" class="btn btn-danger logout_login" >Logout</button></a>
		<br><hr><br>
		<div class="row">
		  <div class="col-3">
		    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Books</a>
		      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Categories</a>
		      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Students</a>
		      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Receipts</a>
		    </div>
		  </div>
		  <div class="col-9">
		    <div class="tab-content" id="v-pills-tabContent">
		      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
		      	<a href="?controller=c_book&action=show_list_book"><button type="button" class="btn btn-primary disabled">List Books</button></a>	

		      </div>

		      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
		      	<a href="?controller=c_book&action=list_categories"><button type="button" class="btn btn-primary disabled">Categories</button></a>	
		      </div>

		      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
		      	<a href="?controller=c_student&action=list_students"><button type="button" class="btn btn-primary disabled">List Students</button></a>	
		      </div>

		      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
		      	<a href="?controller=c_receipts&action=list_receipts"><button type="button" class="btn-lg btn-primary disabled">List receipts</button></a>
		      	<a href="?controller=c_receipts&action=list_borrow"><button type="button" class="btn btn-xs btn-default disabled">List borrow</button></a>
		      	<a href="?controller=c_receipts&action=list_returns"><button type="button" class="btn btn-xs btn-default disabled">List return</button></a>

		      </div>
		    </div>
		  </div>
		</div>

		
		<br><hr><br>
			<a href="?controller=c_receipts&action=show_borrow_book"><button type="button" class="btn-lg btn-primary disabled">Shown Borrow Book</button></a><br><hr><br>

		<br><hr><br>
		<footer>
			<br><hr><br>
			<p>
				&copy; Copyright 2019 by Nhat Thien
			</p>		
		</footer>

		

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>