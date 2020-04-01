	<?php
		session_start();
		if(isset($_SESSION['usr']['uid']))
		{
			include("includes/header.php");
		}
		else
		{
			 header('Location:login.php');
		}
		require("../includes/connect_db.php");
		include("../includes/check_errors.php");
		if(isset($_GET['id']) && $_GET['id']!=null)
		{
			$id=$_GET['id'];
			$query_item="SELECT * FROM khachhang WHERE makh=".$id;
			$result_item=mysqli_query($dbc,$query_item);check_errors($result_item,$query_item);
			if(mysqli_num_rows($result_item)<1)
			{
				header('location:quanlyuser.php');
			}
		}else{
			header('location:quanlyuser.php');
		}
		$query="DELETE FROM khachhang WHERE makh=".$id;
		$result=mysqli_query($dbc,$query);
		check_errors($result,$query);
		header('location:quanlyuser.php');
	?>