<?php

	require_once 'cnxbdd.php';

	if ($_REQUEST['delete']) {

		$pid = $_REQUEST['delete'];
		$query = "delete from theme where id_theme=:pid";
		$stmt = $db->prepare( $query );
		$stmt->execute(array(':pid'=>$pid));

		if ($stmt) {
			echo "thème supprimé avec succées ...";
		}

	}