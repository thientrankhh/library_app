<?php 
	include_once('model/books.php');
	include_once('model/m_categories.php');

	$action = filter_input(INPUT_POST, 'action');
	if(empty($action)){
		$action = filter_input(INPUT_GET, 'action');
		if(empty($action)){
			$action = '';
		}
	}
	
	switch ($action) {
		case 'menu_book':
			include('views/menu_book.php');
			break;
		case 'show_list_book':
			$list_books = get_books();
			$categories = get_categories();	
			include('views/books/list_books.php');
			break;
		case 'add_new':
			$categories = get_categories();	
			include('views/books/add_book.php');
			break;
		case 'save_new_book':
				$bookID = filter_input(INPUT_POST,'bookID');
				$bookName = filter_input(INPUT_POST,'bookName');
				$puslisher = filter_input(INPUT_POST,'puslisher');
				$author = filter_input(INPUT_POST,'author');
				$categoryID = filter_input(INPUT_POST,'categoryID');
				$numofpage = filter_input(INPUT_POST,'numofpage');
				$maxdate = filter_input(INPUT_POST,'maxdate');
				$num = filter_input(INPUT_POST,'num');
				$summary = filter_input(INPUT_POST,'summary');
				$picture = filter_input(INPUT_POST,'picture');

				//Xu li luu anh len server
				$image_dir_path = getcwd().'/public/images';
				if(isset($_FILES['picture'])){
					$filename = $_FILES['picture']['name'];
					if(!empty($filename)){
						$source = $_FILES['picture']['tmp_name'];
						$target = $image_dir_path.'/'.$filename;
						move_uploaded_file($source,$target);
						$picture = $filename;
					}
				}
				else{
					$picture ="";
				}
				add_book($bookID,$bookName,$puslisher,$author,$categoryID,$numofpage,$maxdate,$num,$summary,$picture);
				$list_books = get_books();
				include('views/books/list_books.php');
				break;	
		case 'delete':
			$id = filter_input(INPUT_GET,'id');
			delete_book($id);
			$list_books = get_books();
			include('views/books/list_books.php');
			break;
		case 'edit':
			$id = filter_input(INPUT_GET,'id');
			$book = get_book_by_id($id);
			// print_r($book);
			$categories = get_categories();
			include('views/books/edit_book.php');
			break;
		case 'update_book':
				$bookID = filter_input(INPUT_POST,'bookID');
				$bookName = filter_input(INPUT_POST,'bookName');
				$puslisher = filter_input(INPUT_POST,'puslisher');
				$author = filter_input(INPUT_POST,'author');
				$categoryID = filter_input(INPUT_POST,'categoryID');
				$numofpage = filter_input(INPUT_POST,'numofpage');
				$maxdate = filter_input(INPUT_POST,'maxdate');
				$num = filter_input(INPUT_POST,'num');
				$summary = filter_input(INPUT_POST,'summary');
				$picture = filter_input(INPUT_POST,'old_picture');

				//Xu li luu anh len server
				$image_dir_path = getcwd().'/public/images';
				if(isset($_FILES['picture'])){
					$filename = $_FILES['picture']['name'];
					if(!empty($filename)){
						$source = $_FILES['picture']['tmp_name'];
						$target = $image_dir_path.'/'.$filename;
						move_uploaded_file($source,$target);
						$picture = $filename;
					}
				}
				update_book($bookID, $bookName, $puslisher, $author, $categoryID, $numofpage, $maxdate, $num,$summary, $picture);
				$list_books = get_books();
				include('views/books/list_books.php');
			break;
		case 'search_book':
			$search_value = filter_input(INPUT_POST,'search_value');
			$categories = get_categories();
			$list_books = search_book($search_value);
			include('views/books/list_books.php');
			break;	
		case 'list_categories':
			$list_categories = get_categories();
			include('views/categories/categories.php');
			break;
		case 'add_categories':
			include('views/categories/add_categories.php');	
			break;	
		case 'save_new_categories':
			$categoryID = filter_input(INPUT_POST,'categoryID');
			$categoryName = filter_input(INPUT_POST,'categoryName');
			$moreinfo = filter_input(INPUT_POST,'moreinfo');
			add_categories($categoryID,$categoryName,$moreinfo);
			$list_categories = get_categories();
			include('views/categories/categories.php');
			break;		
		case 'delete_categories':
			$id = filter_input(INPUT_GET,'id');
			delete_categories($id);
			$list_categories = get_categories();
			include('views/categories/categories.php');
			break;	
		case 'edit_categories':
			$id = filter_input(INPUT_GET,'id');
			$category = get_categories_by_id($id);
			include('views/categories/edit_categories.php');	
			break;
		case 'update_categories':
			$categoryID = filter_input(INPUT_POST,'categoryID');
			$categoryName = filter_input(INPUT_POST,'categoryName');
			$moreinfo = filter_input(INPUT_POST,'moreinfo');
			update_categories($categoryID,$categoryName,$moreinfo);
			$list_categories = get_categories();
			include('views/categories/categories.php');
			break;	
		case 'search_category':
			$categoryName = filter_input(INPUT_POST,'categoryName');
			$list_categories = search_categories($categoryName);
			include('views/categories/categories.php');
			break;		

		default:
			// code...
			break;
	}

 ?>