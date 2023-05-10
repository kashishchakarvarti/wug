<?php
include_once('common/config.php');
include_once('common/s3-upload.php');

function uploadthumb($filename, $fileData, $orientation, $file_key) {
	$im = imagecreatefromstring($fileData);

	$deg = 0;
	switch ($orientation) {
		case 3:
		$deg = 180;
		break;
		case 6:
		$deg = 270;
		break;
		case 8:
		$deg = 90;
		break;
	}
	if ($deg) {
		$im = imagerotate($im, $deg, 0);        
	}

	imagefilter($im, IMG_FILTER_GRAYSCALE);
	// imagefilter($im, IMG_FILTER_CONTRAST, -100);
	$source_width = imagesx($im);
	$source_height = imagesy($im);

	$ratio =  $source_height / $source_width;

	$new_width = 300; // assign new width to new resized image
	$new_height = $ratio * 300;

	$thumb = imagecreatetruecolor($new_width, $new_height);

	// $transparency = imagecolorallocatealpha($thumb, 255, 255, 255, 127);
	// imagefilledrectangle($thumb, 0, 0, $new_width, $new_height, $transparency);

	imagecopyresampled($thumb, $im, 0, 0, 0, 0, $new_width, $new_height, $source_width, $source_height);
	$tmpDir = './uploads/tmp/'.$filename;
	imagepng($thumb, $tmpDir, 9);

	$file = uploadFile($tmpDir, $filename);

	$videFileName = $file_key.'.mp4';
	$videFileName_tmp_name = $file_key.'_tmp.mp4';

	$videoFile =  './uploads/tmp/'.$videFileName;
	$videFileName_tmp =  './uploads/tmp/'.$videFileName_tmp_name;
	$sdadad =  __DIR__.'/uploads/tmp/'.$videFileName_tmp_name;

	$textFile =  './uploads/tmp/'.$file_key.'.txt';

	exec('ffmpeg -framerate 40 -loop 1 -i '.$tmpDir.' -c:v libx264 -x264opts stitchable -t 1 -r 30 '.$videFileName_tmp);

	file_put_contents($textFile, array('file '.__DIR__.'/main.mp4', PHP_EOL, 'file '.$sdadad, PHP_EOL), FILE_APPEND | LOCK_EX);

	exec('ffmpeg -f concat -safe 0 -i '.$textFile.' -c:v copy '.$videoFile);

	$video_file = uploadFile($videoFile, $videFileName);
	
	// exec('ffmpeg -f concat -i '.$textFile.' -c copy '.$videoFile);

	unlink($tmpDir);
	unlink($textFile);
	unlink($videFileName_tmp);
	unlink($videoFile);
	
	imagedestroy($im);

	return $file;
}

function correctImageOrientation($filename) {
	if (function_exists('exif_read_data')) {
	  $exif = exif_read_data($filename);
	  ile_put_contents('logs.txt', $filename.PHP_EOL , FILE_APPEND | LOCK_EX);
	  if($exif && isset($exif['Orientation'])) {
		$orientation = $exif['Orientation'];
		if($orientation != 1){
		  $img = imagecreatefromjpeg($filename);
		  $deg = 0;
		  switch ($orientation) {
			case 3:
			  $deg = 180;
			  break;
			case 6:
			  $deg = 270;
			  break;
			case 8:
			  $deg = 90;
			  break;
		  }
		  if ($deg) {
			$img = imagerotate($img, $deg, 0);       
		  }
		  // then rewrite the rotated image back to the disk as $filename
		  imagejpeg($img, $filename, 95);
		} // if there is some rotation necessary
	  } // if have the exif orientation info
	} // if function exists     
  }

$origin = (isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : NULL);
header('Access-Control-Allow-Origin: ' . $origin);
// in_array($origin, $allowed_domains)
if (true) {
	if (isset($_POST['type']) && !empty($_POST['type']) && ($_POST['type'] == 'process')) {
		if(isset($_SESSION['SERVER_USER_SESSION_ID']) && isset($_SESSION['SERVER_USER_IP_ADDRESS']) && isset($_SESSION['SERVER_USER_CITYNAME'])){
			if(isset($_POST['user_session_id']) && !empty($_POST['user_session_id']))
				$user_session_id = $_POST['user_session_id'];
			else
				$user_session_id = NULL;
			if(isset($_POST['user_ip_address']) && !empty($_POST['user_ip_address']))
				$user_ip_address = $_POST['user_ip_address'];
			else
				$user_ip_address = NULL;
			if(isset($_POST['user_ip_city_name']) && !empty($_POST['user_ip_city_name']))
				$user_ip_city_name = $_POST['user_ip_city_name'];
			else
				$user_ip_city_name = NULL;
			if(isset($_POST['user_start_mission']) && !empty($_POST['user_start_mission']))
				$user_start_mission = $_POST['user_start_mission'];
			else
				$user_start_mission = NULL;
			if(isset($_POST['user_full_name']) && !empty($_POST['user_full_name']))
				$user_full_name = $_POST['user_full_name'];
			else
				$user_full_name = NULL;
			if(isset($_POST['user_finix_name']) && !empty($_POST['user_finix_name']))
				$user_finix_name = $_POST['user_finix_name'];
			else
				$user_finix_name = NULL;
			if(isset($_POST['file_name']) && !empty($_POST['file_name']))
				$file_name = $_POST['file_name'];
			else
				$file_name = NULL;
			if(isset($_POST['user_accept_call']) && !empty($_POST['user_accept_call']))
				$user_accept_call = $_POST['user_accept_call'];
			else
				$user_accept_call = NULL;
			if(isset($_POST['user_accept_mission']) && !empty($_POST['user_accept_mission']))
				$user_accept_mission = $_POST['user_accept_mission'];
			else
				$user_accept_mission = NULL;
			if(isset($_POST['skills']) && !empty($_POST['skills']))
				$skills = $_POST['skills'];
			else
				$skills = NULL;
			if(isset($_POST['traits']) && !empty($_POST['traits']))
				$traits = $_POST['traits'];
			else
				$traits = NULL;
			if(isset($_POST['strength']) && !empty($_POST['strength']))
				$strength = $_POST['strength'];
			else
				$strength = NULL;
			if(isset($_POST['agility']) && !empty($_POST['agility']))
				$agility = $_POST['agility'];
			else
				$agility = NULL;
			if(isset($_POST['endurance']) && !empty($_POST['endurance']))
				$endurance = $_POST['endurance'];
			else
				$endurance = NULL;
			if(isset($_POST['intelligence']) && !empty($_POST['intelligence']))
				$intelligence = $_POST['intelligence'];
			else
				$intelligence = NULL;
			if(isset($_POST['footage']) && !empty($_POST['footage']))
				$footage = $_POST['footage'];
			else
				$footage = NULL;
			if(isset($_POST['phone']) && !empty($_POST['phone']))
				$phone = $_POST['phone'];
			else
				$phone = NULL;
			if(isset($_POST['email']) && !empty($_POST['email']))
				$email = $_POST['email'];
			else
				$email = NULL;
			if($user_session_id && $user_ip_address && $user_ip_city_name && $user_start_mission && $user_full_name && $user_finix_name && $file_name && $skills &&  $traits &&  $strength &&  $agility &&  $endurance &&  $intelligence && $footage && $phone && $email){
				$sqlInsertContact = "INSERT INTO `".TBL_REGISTERED_USERS."` 
										(`session_id`, `ip_address`, `city_name`, `start_mission`, `full_name`, `finix_name`, `image`, `skills`, `traits`, `strength`, `agility`, `endurance`, `intelligence`, `footage`, `accept_call`, `accept_profile`, `email`, `mobile_no`, `share`, `status`, `created`) 
									VALUES 
										(   '".$conn->real_escape_string($user_session_id)."', 
											'".$conn->real_escape_string($user_ip_address)."', 
											'".$conn->real_escape_string($user_ip_city_name)."',
											'".$conn->real_escape_string($user_start_mission)."',
											'".$conn->real_escape_string($user_full_name)."',
											'".$conn->real_escape_string($user_finix_name)."',
											'".$conn->real_escape_string($file_name)."',
											'".$conn->real_escape_string($skills)."',
											'".$conn->real_escape_string($traits)."',
											'".$conn->real_escape_string($strength)."',
											'".$conn->real_escape_string($agility)."',
											'".$conn->real_escape_string($endurance)."',
											'".$conn->real_escape_string($intelligence)."',
											'".$conn->real_escape_string($footage)."',
											'".$conn->real_escape_string($user_accept_call)."',
											'".$conn->real_escape_string($user_accept_mission)."',
											'".$conn->real_escape_string($email)."', 
											'".$conn->real_escape_string($phone)."',
											null,
											'1', 
											'".date('Y-m-d H:i:s')."')";
				$resultInsertContact = $conn->query($sqlInsertContact);
				if(isset($conn->insert_id) && intval($conn->insert_id)){
					$insertedId = $conn->insert_id;
					$_SESSION['SERVER_USER_ID'] = $insertedId;
					$result = array("result"=> 'success', "message" => "Your data has been saved successfully.", 'insertedId' => md5($insertedId));
				}else{
					$result = array("result"=> 'error', "message" => "Something went wrong while saving data. Please try again!");
				}
			}else{
				$result = array("result"=> 'error', "message" => "All fields are mandatory!");
			}
		}else{
			$result = array("result"=> 'error', "message" => "Session not set!", 'redirect' => 'index.php?session-process');
		}
	}else if (isset($_POST['type']) && !empty($_POST['type']) && ($_POST['type'] == 'image')) {
		if(isset($_SESSION['SERVER_USER_SESSION_ID']) && isset($_SESSION['SERVER_USER_IP_ADDRESS']) && isset($_SESSION['SERVER_USER_CITYNAME'])){
			list($type, $data) = explode(';', $_POST['file']);
			list(, $data) = explode(',', $data);
			$file_data = base64_decode($data);
			$finfo = finfo_open();
			$file_mime_type = finfo_buffer($finfo, $file_data, FILEINFO_MIME_TYPE);

			$exif = exif_read_data($_POST['file']);
			$ewew = 0;
			if(isset($exif['Orientation'])) {
				$ewew = $exif['Orientation'];
			}
			

			if($file_mime_type == 'image/jpeg' || $file_mime_type == 'image/jpg')
				$file_type = 'jpeg';
			else if($file_mime_type == 'image/png')
				$file_type = 'png';
			else if($file_mime_type == 'image/gif')
				$file_type = 'gif';
			else 
				$file_type = 'other';
			if(in_array($file_type, ['jpeg', 'png', 'gif'])) {
				$file_name = uniqid() . '-' . time();

				$filePath = uploadthumb($file_name. '.' . $file_type, $file_data, $ewew, $file_name);
				$sqlUpdateContact = "UPDATE `".TBL_REGISTERED_USERS."`  
					SET `image` = '".$conn->real_escape_string($filePath)."', 
					`updated`   = '".date('Y-m-d H:i:s')."'
					WHERE `id`  = '".$conn->real_escape_string($_SESSION['SERVER_USER_ID'])."'";
				$resultUpdateContact = $conn->query($sqlUpdateContact);
				$result = array("result"=> 'success', "message" => "Image uploaded successfully", 'file_url' => $filePath);
			}else {
				$result = array("result"=> 'error', "message" => "Only JPEG, PNG & GIF allowed");
			}
		}else{
			$result = array("result"=> 'error', "message" => "Session not set!", 'redirect' => 'index.php?session-image');
		}
	} else if (isset($_POST['type']) && !empty($_POST['type']) && ($_POST['type'] == 'share')) {
		// if(isset($_SESSION['SERVER_USER_SESSION_ID']) && isset($_SESSION['SERVER_USER_IP_ADDRESS']) && isset($_SESSION['SERVER_USER_CITYNAME']) && isset($_SESSION['SERVER_USER_ID'])){
		// 	$sqlSelectContact = "SELECT * FROM `".TBL_REGISTERED_USERS."`  
		// 							WHERE `session_id` = '".$conn->real_escape_string($_SESSION['SERVER_USER_SESSION_ID'])."'
		// 							AND `ip_address` = '".$conn->real_escape_string($_SESSION['SERVER_USER_IP_ADDRESS'])."'
		// 							AND `city_name` = '".$conn->real_escape_string($_SESSION['SERVER_USER_CITYNAME'])."'
		// 							AND `id` = '".$conn->real_escape_string($_SESSION['SERVER_USER_ID'])."'
		// 							AND	`status` = '1'";
		// 	$resultSelectContact = $conn->query($sqlSelectContact);
		// 	$numRows = $resultSelectContact->num_rows;
		// 	if($numRows > 0){
		// 		// $rowData = mysqli_fetch_assoc($resultSelectContact);
		// 		// if(!isset($rowData['share']) || empty($rowData['share'])){
					
		// 		// 	$result = array("result"=> 'success', "message" => "Share Image uploaded successfully", 'file_name' => $file_name, 'file_url' => SITE_URL.'/uploads/share/'.$file_name);
		// 		// }else {
		// 		// 	$result = array("result"=> 'success', "message" => "Image allready shared", 'file_name' => $rowData['share'], 'file_url' => SITE_URL.'/uploads/share/'.$rowData['share']);
		// 		// }
		// 	}else{
		// 		$result = array("result"=> 'error', "message" => "Invalid credentails! Please try again.");
		// 	}
		// }else{
		// 	$result = array("result"=> 'error', "message" => "Session not set!", 'redirect' => 'index.php?session-share');
		// }
	}else{
		$result = array("result"=> 'error', "message" => "Invalid process type!");
	}
}else{
	$result = array("result"=> 'error', "message" => "Invalid origin request!");
}
echo json_encode($result);
exit;