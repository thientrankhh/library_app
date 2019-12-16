<?php 
	function check_student($cardID){
		global $db;
		$query = "SELECT * FROM students WHERE cardID= :cardID";

		try {
			$statement = $db -> prepare($query);
			$statement -> bindValue(":cardID",$cardID);
			$statement -> execute();
			$result = $statement ->fetch();

			if(empty($result)){
				return false;
			}else{
				return true;
			}
			// if(empty(var))
		} catch (PDOException $e) {
			
		}
	}

	function get_students(){
		global $db;

		$query = "SELECT * FROM students";

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

	function add_students($cardID,$nameStudent,$address,$tel){
		global $db;

		$query = "INSERT INTO students(cardID,nameStudent,address,tel)
				VALUES(:cardID,:nameStudent,:address,:tel)";

		try {
				$statement = $db ->prepare($query);
				$statement -> bindValue(':cardID',$cardID);
				$statement -> bindValue(':nameStudent',$nameStudent);
				$statement -> bindValue(':address',$address);
				$statement -> bindValue(':tel',$tel);
				$statement ->execute();
				$statement -> closeCursor();

			} catch (PDOException $e) {
				$error_message = $e ->getMessage();
				echo '$Error Databases: '.$error_message;
			}	
	}

	function get_student_by_id($id){
		global $db;

		$query = "SELECT * FROM students
				  WHERE cardID = :id";
		try {
			$statement = $db->prepare($query);
			$statement->bindValue(':id',$id);
			$statement->execute();
			$result = $statement->fetch();
			$statement->closeCursor();
			return $result;

		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo 'Error query statement'.$error_message;
		}

	}

	function updates_student($cardID,$nameStudent,$address,$tel){
		global $db;

		$query = "UPDATE students
				SET nameStudent=?, address=?, tel=?
				WHERE cardID=?";

		try {
			$statement = $db -> prepare($query);
			$statement -> bindParam(1,$nameStudent);
			$statement -> bindParam(2,$address);
			$statement -> bindParam(3,$tel);
			$statement -> bindParam(4,$cardID);
			$statement -> execute();
			$statement -> closeCursor();		
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo 'Error query statement'.$error_message;
		}		
	}

	function delete_student($id){
		global $db;
		$query = "DELETE FROM students
				WHERE cardID = :id";

		try {
			$statement = $db -> prepare($query);
			$statement -> bindValue('id',$id);
			$statement -> execute();
			$statement -> closeCursor();

		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo 'Error query statement'.$error_message;
		}		

	}

	function search_nameStudent($nameStudent){
		global $db;

		$nameStudent = "%".$nameStudent."%";
		$query = "SELECT * FROM students
			WHERE nameStudent LIKE :nameStudent ";

		try {
			$statement = $db ->prepare($query);
			$statement -> bindValue(':nameStudent',$nameStudent);
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