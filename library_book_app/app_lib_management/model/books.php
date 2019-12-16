<?php 
	function check_book($bookID){
		global $db;
		$query = "SELECT * FROM books WHERE bookID= :bookID";

		try {
			$statement = $db -> prepare($query);
			$statement -> bindValue(':bookID',$bookID);
			$statement -> execute();
			$result = $statement ->fetch();
			if(empty($result)){
				return false;
			}else{
				return true;
			}
		} catch (PDOException $e) {
			$error_message = $e ->getMessage();
			echo "Error query statement: ".$error_message;
		}
	}

	function get_books(){
		global $db;
		$query  = "SELECT * FROM books";

		try{
			//Chuan bi cau lenh truy van
			$statement = $db->prepare($query);

			$statement -> execute(); // thuc thi cau lenh truy van
			$result = $statement->fetchAll(); // lay tat ca du lieu da thuc thi tra ve mot mang
			return $result; // tra ve ket qua cho ham get_books

		}catch(PDOException $e){
			$error_message = $e ->getMessage();
			echo "Error query statement: ".$error_message;
		}
	}

	//Add book into book table
	function add_book($bookID, $bookName, $puslisher, $author, $categoryID, $numofpage, $maxdate, $num,$summary, $picture){
		global $db;
		$query = "INSERT INTO books(bookID,bookName,puslisher,author,categoryID,numofpage,maxdate,num,summary,picture)
		VALUES(:bookID,:bookName,:puslisher,:author,:categoryID,:numofpage,:maxdate,:num,:summary,:picture)";

		try {
			$statement = $db -> prepare($query);
			$statement -> bindValue(':bookID',$bookID);
			$statement -> bindValue(':bookName',$bookName);
			$statement -> bindValue(':puslisher',$puslisher);
			$statement -> bindValue(':author',$author);
			$statement -> bindValue(':categoryID',$categoryID);
			$statement -> bindValue(':numofpage',$numofpage);
			$statement -> bindValue(':maxdate',$maxdate);
			$statement -> bindValue(':num',$num);
			$statement -> bindValue(':summary',$summary);
			$statement -> bindValue(':picture',$picture);
			$statement -> execute();
			$statement ->closeCursor();
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo 'Error query statement:'.$error_message;
		}
	}

	//Delete Books
	function delete_book($id){
		global $db;
		$query = "DELETE FROM books
				  WHERE bookID =:id";
		try {
			$statement = $db ->prepare($query);
			$statement -> bindValue(':id',$id);
			$statement -> execute();
			$statement -> closeCursor();

		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo 'Error query statement:'.$error_message;
		}
	}

	//Edit Books
	function get_book_by_id($id){
		global $db;
		$query = "SELECT * FROM books
				  WHERE bookID = :id";
		try {
			$statement = $db->prepare($query);
			$statement->bindValue(':id',$id);
			$statement->execute();
			$result = $statement->fetch();
			$statement->closeCursor();
			return $result;
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo 'Error query statement:'.$error_message;
		}
	}

	function update_book($bookID, $bookName, $puslisher, $author, $categoryID, $numofpage, $maxdate, $num,$summary, $picture){
		global $db;
		$query = "UPDATE books
				  SET bookName=?, puslisher=?, author=?, categoryID=?, numofpage=?, maxdate=?, num=?, summary=?, picture=?
				  WHERE bookID=?";

		try {
			$statement  = $db -> prepare($query);
			$statement -> bindParam(1,$bookName);
			$statement -> bindParam(2,$puslisher);
			$statement -> bindParam(3,$author);
			$statement -> bindParam(4,$categoryID);
			$statement -> bindParam(5,$numofpage);
			$statement -> bindParam(6,$maxdate);
			$statement -> bindParam(7,$num);
			$statement -> bindParam(8,$summary);
			$statement -> bindParam(9,$picture);
			$statement -> bindParam(10,$bookID);
			$statement -> execute();
			$statement ->closeCursor();

		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo 'Error query statement:'.$error_message;			  	
		}		  

	}

	function search_book($search_value){
		global $db;
			$search_value ='%'.$search_value.'%';
			$query = "SELECT * FROM books
				  WHERE bookName LIKE :search_value OR puslisher LIKE :search_value OR author LIKE :search_value ";

		try {
				$statement = $db -> prepare($query);
				$statement -> bindValue(':search_value',$search_value);
				$statement ->execute();
				$result = $statement->fetchAll();
				$statement ->closeCursor();

				return $result;
			} catch (PDOException $e) {
				$error_message = $e->getMessage();
				echo 'Error query statement: '.$error_message; 	
			}		  
	}

	// function search_book_3($search_value,$bookName,$puslisher,$author,$categoryID){
	// 	global $db;
	// 	$search_value = "%".$search_value."%";
	// 	$query = "SELECT * FROM books";

	// 	if(isset($bookName)){
	// 		$query = "SELECT * FROM books
	// 				WHERE bookName LIKE :search_value";
	// 	}
	// 	if(isset($puslisher)){
	// 		$query = "SELECT * FROM books
	// 				WHERE puslisher LIKE :search_value";
	// 	}
	// 	if(isset($author)){
	// 		$query = "SELECT * FROM books
	// 				WHERE author LIKE :search_value";
	// 	}

	// 	if(isset($bookName) && isset($puslisher)){
	// 		$query = "SELECT * FROM books
	// 				WHERE bookName LIKE :search_value OR puslisher LIKE :search_value";
	// 	}
	// 	if(isset($bookName) && isset($author)){
	// 		$query = "SELECT * FROM books
	// 				WHERE bookName LIKE :search_value OR author LIKE :search_value";
	// 	}
	// 	if(isset($puslisher) && isset($author)){
	// 		$query = "SELECT * FROM books
	// 				WHERE puslisher LIKE :search_value OR author LIKE :search_value";
	// 	}

	// 	if(isset($bookName) && isset($categoryID)){
	// 		$query = "SELECT * FROM books
	// 				WHERE bookName LIKE :search_value AND categoryID LIKE :categoryID";
	// 	}
	// 	if(isset($puslisher) && isset($categoryID)){
	// 		$query = "SELECT * FROM books
	// 				WHERE puslisher LIKE :search_value AND categoryID LIKE :categoryID";
	// 	}
	// 	if(isset($author) && isset($categoryID)){
	// 		$query = "SELECT * FROM books
	// 				WHERE author LIKE :search_value AND categoryID LIKE :categoryID";
	// 	}

	// 	if(isset($bookName) && isset($author) && isset($categoryID)){
	// 		$query = "SELECT * FROM books
	// 				WHERE bookName LIKE :search_value OR author LIKE :search_value AND categoryID LIKE :categoryID";
	// 	}
	// 	if(isset($bookName) && isset($puslisher) && isset($categoryID)){
	// 		$query = "SELECT * FROM books
	// 				WHERE bookName LIKE :search_value OR puslisher LIKE :search_value AND categoryID LIKE :categoryID";
	// 	}
	// 	if(isset($author) && isset($puslisher) && isset($categoryID)){
	// 		$query = "SELECT * FROM books
	// 				WHERE author LIKE :search_value OR puslisher LIKE :search_value AND categoryID LIKE :categoryID";
	// 	}

	// 	if(isset($bookName) && isset($author) && isset($puslisher) && isset($categoryID)){
	// 		$query = "SELECT * FROM books
	// 				WHERE bookName LIKE :search_value OR author LIKE :search_value OR puslisher LIKE :search_value AND categoryID LIKE :categoryID";
	// 	}
		

	// 	try {
	// 			$statement = $db -> prepare($query);
	// 			$statement -> bindParam(':search_value',$search_value);
	// 			$statement -> bindParam(':categoryID',$categoryID);
				
	// 			$statement ->execute();
	// 			$result = $statement->fetchAll();
	// 			$statement ->closeCursor();

	// 			return $result;
	// 		} catch (PDOException $e) {
	// 			$error_message = $e->getMessage();
	// 			echo 'Error query statement:'.$error_message; 	
	// 		}	

	// }



 ?>