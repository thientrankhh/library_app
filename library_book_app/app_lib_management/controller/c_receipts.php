<?php 
	$lifetime = 5*24*3600;
	session_set_cookie_params($lifetime,'/');
	session_start();

	include_once('model/books.php');
	include_once('model/m_students.php');
	include_once('model/m_categories.php');
	include_once('model/m_receipts.php');

	$action = filter_input(INPUT_POST, 'action');
	if(empty($action)){
		$action = filter_input(INPUT_GET, 'action');
		if(empty($action)){
			$action = '';
		}
	}
	$message = "";
	$studentname = "";
	$address = "";
	switch ($action) {
		case 'list_receipts':
			$list_receipts = get_receipts();
			include('views/receipts/list_receipts.php');
			break;
		case 'edit':
			$id = filter_input(INPUT_GET,'id');
			$receipt = get_receipt_by_id($id);
			include('views/receipts/edit_receipts.php');	
			break;	
		case 'update_receipts':
			$cardID = filter_input(INPUT_POST,'cardID');
			$bookID = filter_input(INPUT_POST,'bookID');
			$dateBorrow = filter_input(INPUT_POST,'dateBorrow');
			$datereturn = filter_input(INPUT_POST,'datereturn');
			$returnOK = filter_input(INPUT_POST,'returnOK');

			update_receipt($cardID,$bookID,$dateBorrow,$datereturn,$returnOK);
			$list_receipts = get_receipts();
			include('views/receipts/list_receipts.php');
			break;	
		case 'delete':
			$id = filter_input(INPUT_GET,'id');
			delete_receipt($id);
			$list_receipts = get_receipts();
			include('views/receipts/list_receipts.php');
			break;
		case 'return_book':
			$id = filter_input(INPUT_GET,'id');	
			$receipt = get_receipt_by_id($id);

			include('views/receipts/return_book.php');	
			break;
		case 'submit_return_book':
			$datereturn = filter_input(INPUT_POST,'datereturn');
			$returnOK = filter_input(INPUT_POST,'returnOK');
			return_book($returnOK,$datereturn);
			$list_receipts = get_receipts();
			include('views/receipts/list_receipts.php');

			break;			
			
		case 'list_borrow':
			$list_borrow = get_borrow();
			include('views/receipts/list_borrow.php');
			break;

		case 'list_returns':
			$list_returns = get_returns();
			include('views/receipts/list_return.php');
			break;	
		case 'show_borrow_book':
			$borrow_books = get_borrow_books();
			include('views/list_borrow.php');	
			break;	
		case 'add_new':
			$CardID ='';
			include('views/add_new_borrow_book.php');	
			break;	
		case 'add_borrow_book':
			$CardID = filter_input(INPUT_POST,'CardID');
			$BookID = filter_input(INPUT_POST,'BookID');
			$book = get_book_by_id($BookID);
			$student = get_student_by_id($CardID);
			$dateBorrow = date('Y-m-d');

			if(check_book($BookID) && check_student($CardID)){
				$_SESSION[$CardID][] = array('bookID' => $BookID, 'bookName' => $book['bookName'], 'author' => $book['author'], 'puslisher' => $book['puslisher'], 'dateBorrow' => $dateBorrow);
				$studentname = $student['nameStudent'];
				$address = $student['address'];
			}else{
				$message = "$CardID or $BookID not exists";
				$CardID ='';
			}		

			include('views/add_new_borrow_book.php');
			break;	
		case 'delete_borrow':
			$id = filter_input(INPUT_GET,'id');
			$CardID = filter_input(INPUT_GET,'CardID');
			unset($_SESSION[$CardID][$id]);

			$_SESSION[$CardID]= array_values($_SESSION[$CardID]);
			include('views/add_new_borrow_book.php');
			break;
		case 'save_borrow_book':
			$CardID = filter_input(INPUT_GET,'CardID');	
			foreach ($_SESSION[$CardID] as $key => $value) {
				add_borrow_book($CardID,$value['bookID'],$value['dateBorrow']);
			}
			$borrow_books = get_borrow_books();
			include('views/list_borrow.php');
			break;	
		case 'search_cardID_receipts':
			$cardID_search = filter_input(INPUT_POST,'cardID_search');	
			$list_receipts = search_cardID($cardID_search);
			include('views/receipts/list_receipts.php');
			break;
		case 'list_return_book':
			$list_receipts = search_return_book();
			include('views/receipts/list_receipts.php');		
			break;
		case 'list_not_return_book':
			$list_receipts = search_not_return_book();
			include('views/receipts/list_receipts.php');			
			break;			

		default:
			// code...
			break;
	}

 ?>