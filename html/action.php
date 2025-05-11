<?php
	
	include "includes/db.php"; 

	if(isset($_POST['action'])){

		if($_POST['action'] == 'app_settings'){

			$query = "SELECT * FROM settings";

			$query_all = mysqli_query($con, $query);

			if($query_all){

				while($row = mysqli_fetch_assoc($query_all)){

					$brand_logo = $row['Brand_logo'];
					$brand_name = $row['Brand'];
					$dark_mode  = $row['Dark_mode'];
					$logo_skin  = $row['Logo_skin'];
					$nav_skin 	= $row['Navbar_skin'];
					$sb_skin 	= $row['Sidebar_skin'];
					$fixed_sb 	= $row['Fixed_sidebar'];
					$fixed_hd 	= $row['Fixed_header'];
					$box_layout	= $row['Box_layout'];
					$sdbr_type 	= $row['Sidebar_type'];

				$datas = array('Brand_logo' => $brand_logo, 'Brand' => $brand_name, 'Dark_mode' => $dark_mode, 'Logo_skin' => $logo_skin, 'Navbar_skin' => $nav_skin, 'Sidebar_skin' => $sb_skin, 'Fixed_sidebar' => $fixed_sb, 'Fixed_header' => $fixed_hd, 'Box_layout' => $box_layout, 'Sidebar_type' => $sdbr_type);

				}

				echo json_encode($datas);

			}

			else{

				echo json_encode(['No Results']);
			}

			$con->close();

		}




		else if($_POST['action'] == 'dark_mode'){

			if(isset($_POST['dmval'])){

				$dmval = $_POST['dmval'];

				$query = "UPDATE settings SET Dark_mode = '$dmval' ";

				$change = mysqli_query($con, $query);

				if($change){

					echo json_encode(['Success']);

				}
			}

			else{

				echo json_encode(['Error']);
			}

			$con->close();
		}





		else if($_POST['action'] == 'logo_bg'){

			if(isset($_POST['skin'])){

				$skin = $_POST['skin'];

				$query = "UPDATE settings SET Logo_skin = '$skin' ";

				$change = mysqli_query($con, $query);

				if($change){

					echo json_encode(['Success']);

				}

			}

			else{

				echo json_encode(['Error']);
			}

			$con->close();
		}





		else if($_POST['action'] == 'nav_bg'){

			if(isset($_POST['skin'])){

				$skin = $_POST['skin'];

				$query = "UPDATE settings SET Navbar_skin = '$skin' ";

				$change = mysqli_query($con, $query);

				if($change){

					echo json_encode(['Success']);

				}

			}

			else{

				echo json_encode(['Error']);
			}

			$con->close();
		}





		else if($_POST['action'] == 'sb_bg'){

			if(isset($_POST['skin'])){

				$skin = $_POST['skin'];

				$query = "UPDATE settings SET Sidebar_skin = '$skin' ";

				$change = mysqli_query($con, $query);

				if($change){

					echo json_encode(['Success']);

				}

			}

			else{

				echo json_encode(['Error']);
			}

			$con->close();
		}

	}


?>