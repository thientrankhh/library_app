<?php 
	function get_categories(){
		global $db;
		$query  = "SELECT * FROM categories";
		try{
			//Chuan bi cau lenh truy van
			$statement = $db->prepare($query);

			$statement -> execute(); // thuc thi cau lenh truy van
			$result = $statement->fetchAll(); // lay tat ca du lieu da thuc thi tra ve mot mang
			return $result; // tra ve ket qua cho ham get_books

		}catch(PDOException $e){
			$error_message = $e ->getMessage();
			echo "Error database: ".$error_message;
		}
	}

	function add_categories($categoryID,$categoryName,$moreinfo){
		global $db;
		$query = "INSERT INTO categories(categoryID,categoryName,moreinfo)
				VALUES (:categoryID,:categoryName,:moreinfo)";
		try {
				$statement = $db -> prepare($query);
				$statement -> bindValue(':categoryID',$categoryID);		
				$statement -> bindValue(':categoryName',$categoryName);	
				$statement -> bindValue(':moreinfo',$moreinfo);	
				$statement -> execute();
				$statement -> closeCursor();
			} catch (PDOException $e) {
				$error_message = $e->getMessage();
				echo 'Error Database'.$error_message;
			}		

	}

	function delete_categories($id){
		global $db;

		$query = "DELETE FROM categories
				WHERE categoryID = :id";

		try {
				$statement = $db -> prepare($query);
				$statement -> bindValue(':id',$id);
				$statement -> execute();
				$statement ->closeCursor();	
			} catch (PDOException $e) {
				$error_message = $e->getMessage();
				echo 'Error Database'.$error_message;
			}		
	}
	function get_categories_by_id($id){
		global $db;

		$query = "SELECT * FROM categories
					WHERE categoryID =:id";
		try {
				$statement = $db ->prepare($query);
				$statement -> bindValue(':id',$id);
				$statement -> execute();
				$result = $statement -> fetch();
				$statement -> closeCursor();

				return $result;
			} catch (PDOException $e) {
				$error_message = $e->getMessage();
				echo 'Error Database'.$error_message;
			}			
	}
	function update_categories($categoryID,$categoryName,$moreinfo){
		global $db;

		$query = "UPDATE categories
				 SET categoryName=?, moreinfo = ?
				 WHERE categoryID = ? 
				";
		try {
				$statement = $db -> prepare($query);
				$statement -> bindParam(1,$categoryName);
				$statement -> bindParam(2,$moreinfo);
				$statement -> bindParam(3,$categoryID);
				$statement -> execute();
				$statement -> closeCursor();

			} catch (Exception $e) {
				$error_message = $e->getMessage();
				echo 'Error Database'.$error_message;	
			}		
	}

	function search_categories($categoryName){
		global $db;
		$categoryName = "%".$categoryName."%";
		$query = "SELECT * FROM categories
				WHERE categoryName LIKE :categoryName";

		try {
				$statement = $db -> prepare($query);
				$statement -> bindValue(':categoryName',$categoryName);
				$statement -> execute();
				$result = $statement -> fetchAll();
				$statement ->closeCursor();

				return $result;
			} catch (PDOException $e) {
				$error_message = $e->getMessage();
				echo 'Error Database'.$error_message;
			}		

	}

 ?>