<?php 
	include_once('model/m_students.php');
	include_once('model/m_categories.php');

	$action = filter_input(INPUT_POST, 'action');
	if(empty($action)){
		$action = filter_input(INPUT_GET, 'action');
		if(empty($action)){
			$action = '';
		}
	}

	switch ($action) {
		case 'list_students':
			$list_students = get_students();
			include('views/students/list_students.php');
			break;
		case 'add_student':
			include('views/students/add_student.php');
			break;
		case 'save_new_student':
			$cardID = filter_input(INPUT_POST,'cardID');
			$nameStudent = filter_input(INPUT_POST,'nameStudent');
			$address = filter_input(INPUT_POST,'address');
			$tel = filter_input(INPUT_POST,'tel');
			add_students($cardID,$nameStudent,$address,$tel);
			$list_students = get_students();
			include('views/students/list_students.php');
			break;	
		case 'edit':
			$id = filter_input(INPUT_GET,'id');
			$student = get_student_by_id($id);
			include('views/students/edit_student.php');
			break;
		case 'updates_student':
			$cardID = filter_input(INPUT_POST,'cardID');
			$nameStudent = filter_input(INPUT_POST,'nameStudent');
			$address = filter_input(INPUT_POST,'address');
			$tel = filter_input(INPUT_POST,'tel');

			updates_student($cardID,$nameStudent,$address,$tel);
			$list_students = get_students();
			include('views/students/list_students.php');
			break;
		case 'delete_student':
			$id = filter_input(INPUT_GET,'id');
			delete_student($id);
			
			$list_students = get_students();
			include('views/students/list_students.php');
			break;	
		case 'search_nameStudent':
			$nameStudent = filter_input(INPUT_POST,'nameStudent');	
			$list_students = search_nameStudent($nameStudent);
			include('views/students/list_students.php');

			break;	

		default:
			// code...
			break;
	}

 ?>