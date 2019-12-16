<?php 
	function get_receipts(){
		global $db;

		$query = "SELECT * FROM receipts";

		try {
			$statement = $db ->prepare($query);
			$statement ->execute();
			$result = $statement -> fetchAll();

			return $result;
		} catch (PDOException $e) {
			$error_message = $e ->getMessage();
			echo '$Error Databases: '.$error_message;
		}
	}

	function get_receipt_by_id($id){
		global $db;

		$query = "SELECT * FROM receipts 
				WHERE cardID = :id";
		try {
			$statement = $db -> prepare($query);
			$statement -> bindValue(':id',$id);
			$statement -> execute();
			$result = $statement -> fetch();

			return $result;			
		} catch (PDOException $e) {
			$error_message = $e ->getMessage();
			echo '$Error query statement: '.$error_message;
		}		
	}
	function return_book($returnOK,$datereturn){
		global $db;

		$query ="UPDATE receipts
				SET returnOK = ?, datereturn= ?
				WHERE 1=1";
		try {
			$statement = $db -> prepare($query);
			$statement -> bindParam(1,$returnOK);
			$statement -> bindParam(2,$datereturn);
			// $statement -> bindParam(3,$cardID);
			$statement -> execute();
			$statement -> closeCursor();

		} catch (PDOException $e) {
			$error_message = $e ->getMessage();
			echo '$Error query statement: '.$error_message;
		}		
				
	}

	function update_receipt($cardID,$bookID,$dateBorrow,$datereturn,$returnOK){
		global $db;

		$query ="UPDATE receipts
				SET bookID= ?, dateBorrow= ?, datereturn= ?, returnOK= ?
				WHERE cardID= ?";
		try {
			$statement = $db -> prepare($query);
			$statement -> bindParam(1,$bookID);
			$statement -> bindParam(2,$dateBorrow);
			$statement -> bindParam(3,$datereturn);
			$statement -> bindParam(4,$returnOK);
			$statement -> bindParam(5,$cardID);
			$statement -> execute();
			$statement -> closeCursor();

		} catch (PDOException $e) {
			$error_message = $e ->getMessage();
			echo '$Error query statement: '.$error_message;
		}		

	}

	function delete_receipt($id){
		global $db;

		$query = "DELETE FROM receipts
				WHERE cardID = :id";
		try {
			$statement = $db -> prepare($query);
			$statement -> bindValue('id',$id);
			$statement -> execute();
			$statement -> closeCursor();

		} catch (PDOException $e) {
			$error_message = $e ->getMessage();
			echo '$Error query statement: '.$error_message;
		}		
	}

	function get_borrow(){
		global $db;

		$query = "SELECT * FROM borrow";

		try {
			$statement = $db ->prepare($query);
			$statement ->execute();
			$result = $statement -> fetchAll();

			return $result;
		} catch (PDOException $e) {
			$error_message = $e ->getMessage();
			echo '$Error Databases: '.$error_message;
		}
	}

	function get_returns(){
		global $db;

		$query = "SELECT * FROM returns";

		try {
			$statement = $db ->prepare($query);
			$statement ->execute();
			$result = $statement -> fetchAll();

			return $result;
		} catch (PDOException $e) {
			$error_message = $e ->getMessage();
			echo '$Error Databases: '.$error_message;
		}
	}

	function get_borrow_books(){
		global $db;
		$query = "SELECT s.cardID, s.nameStudent, s.address, s.tel, b.bookID, c.categoryName, b.bookName, b.puslisher, b.author, r.dateBorrow, r.datereturn, r.returnOK
			FROM students s
				INNER JOIN receipts r
					ON s.cardID = r.cardID
				INNER JOIN books b
					ON r.bookID = b.bookID
				INNER JOIN categories c
					ON c.categoryID = b.categoryID
			ORDER BY cardID ASC				
		";

		try {
			$statement = $db ->prepare($query);
			$statement ->execute();
			$result = $statement -> fetchAll();
			$statement -> closeCursor();

			return $result;
		} catch (PDOException $e) {
			$error_message = $e ->getMessage();
			echo '$Error Databases: '.$error_message;
		}
	}

	function add_borrow_book($cardID,$bookID,$dateBorrow){
		global $db;
		$query = "INSERT INTO receipts(cardID,bookID,dateBorrow)VALUES(?,?,?) ";

		try {
			$statement = $db -> prepare($query);
			$statement -> bindParam(1,$cardID);
			$statement -> bindParam(2,$bookID);
			$statement -> bindParam(3,$dateBorrow);
			$statement -> execute();
			$statement -> closeCursor();

		} catch (PDOException $e) {
			$error_message = $e ->getMessage();
			echo '$Error execute query: '.$error_message;
		}
	}

	function search_cardID($cardID_search){
		global $db;

		$cardID_search = "%".$cardID_search."%";
		$query = "SELECT * FROM receipts
			WHERE cardID LIKE :cardID_search ";

		try {
			$statement = $db ->prepare($query);
			$statement -> bindValue(':cardID_search',$cardID_search);
			$statement -> execute();
			$result = $statement -> fetchAll();
			$statement -> closeCursor();

			return $result;
		} catch (PDOException $e) {
			$error_message = $e ->getMessage();
			echo '$Error statement query: '.$error_message;
		}	
			
	}

	function search_return_book(){
		global $db;
		$query = "SELECT * FROM receipts
				WHERE returnOK = 1 ";

		try {
			$statement = $db -> prepare($query);
			$statement -> execute();
			$result = $statement -> fetchAll();
			$statement -> closeCursor();

			return $result;
		} catch (PDOException $e) {
			$error_message = $e ->getMessage();
			echo '$Error statement query: '.$error_message;
		}		
	}

	function search_not_return_book(){
		global $db;
		$query = "SELECT * FROM receipts
				WHERE returnOK = 0 ";

		try {
			$statement = $db -> prepare($query);
			$statement -> execute();
			$result = $statement -> fetchAll();
			$statement -> closeCursor();

			return $result;
		} catch (PDOException $e) {
			$error_message = $e ->getMessage();
			echo '$Error statement query: '.$error_message;
		}		
	}


 ?>