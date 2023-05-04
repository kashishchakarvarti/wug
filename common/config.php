<?php
ob_start();
session_start();
if($_SERVER['HTTP_HOST'] == 'test.core'){
	date_default_timezone_set('Asia/Kolkata');
	ini_set('display_errors', 1);
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'core_mission');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('SITE_NAME', 'UNCOVER YOUR FANTASY?');
	define('SITE_URL', 'http://test.core/mission/citadel/');
	define('SECRET_KEY',  'Bsdfsfhkhjkhj454565sf34r' );
	$allowed_domains = array(
		'http://test.core',
	    'https://test.core',
	    'http://www.test.core',
	    'https://www.test.core',
	);
}else{
	date_default_timezone_set('Asia/Kolkata');
	ini_set('display_errors', 0);
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'u615761582_citadel');
	define('DB_USERNAME', 'u615761582_fantasy');
	define('DB_PASSWORD', 'WugWeb123@');
	define('SITE_NAME', 'UNCOVER YOUR FANTASY?');
	define('SITE_URL', 'https://uncoveryourfantasy.com/citadel/');
	define('SECRET_KEY',  'DER34Rdfgdfggggfgee90XZ' );
	$allowed_domains = array(
		'http://uncoveryourfantasy.com',
	    'https://uncoveryourfantasy.com',
	    'http://www.uncoveryourfantasy.com',
	    'https://www.uncoveryourfantasy.com',
	);
}
//
$spyNameArray = array(
	'FALCON',
	'RANGER',
	'EAGLE',
	'CHASER',
	'RAIDER',
	'NOVA',
	'BLAZE',
	'KNOX',
	'RAVEN',
	'KNIGHT'
);
//
define('PRE', 'mis_');
define('TBL_REGISTERED_USERS', PRE . 'registered_mission');
//
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Check connection
if ($conn->connect_error){
	$result = array("result"=> 'error', "message" => "Connection failed!");
	echo json_encode($result);
	exit;
}


function fileToUpload($fileField){
	$fileExtension = pathinfo($_FILES[$fileField]["name"], PATHINFO_EXTENSION);
	$fileName      = basename($_FILES[$fileField]["name"]);
	$filenameImageToStore = md5($fileName . microtime()).'.'.$fileExtension;
	if(isset($_FILES[$fileField])) {
	    $errors     = array();
	    $maxsize    = 2097152;
	    $acceptable = array(
	    	'application/pdf',
	        'image/jpeg',
	        'image/jpg',
	        'image/png'
	    );
	    if(($_FILES[$fileField]['size'] >= $maxsize) || ($_FILES[$fileField]["size"] == 0)) {
	        $errors[] = 'File too large. File must be less than 2 megabytes.';
	    }
	    if(!in_array($_FILES[$fileField]['type'], $acceptable) && (!empty($_FILES[$fileField]["type"]))) {
		    $errors[] = 'Invalid file type. Only PDF, JPG, GIF and PNG types are accepted.';
		}
		if(count($errors) === 0) {
		    move_uploaded_file($_FILES[$fileField]['tmp_name'], './uploads/'.$fileField.'/'.$filenameImageToStore);
		    return $filenameImageToStore;
		} else {
			return false;
		}
	}
	return false;
}

function getTheIPLocation($ipAddress){
	/*$url = 'https://api.ip2location.io/?key=DE54735126BF3BB335BF563785ABB093&ip='.$ipAddress;
	$ch  = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FAILONERROR, true);
	$result = curl_exec($ch);
	if (curl_errno($ch)) {
	    $error_msg = curl_error($ch);
	}
	curl_close($ch);
	if (isset($error_msg)){
	    $result_data = json_decode('{"ip":"223.189.24.150","country_code":"IN","country_name":"India","region_name":"Maharashtra","city_name":"Mumbai","latitude":19.075975,"longitude":72.877377,"zip_code":"400099","time_zone":"+05:30","asn":"45609","as":"Bharti Airtel Ltd.","is_proxy":false}');
	}else{
		$result_data = json_decode($result);
	}
	return strtoupper($result_data->city_name) . ', '.strtoupper($result_data->country_name);*/
	$arrayLocations = array(
		'Shanghai, China',
		'Paris, France', 
		'Goa, Panaji',
		'Dublin, Ireland',
		'Oslo, Norway',
		'Rome, Italy',
		'Munich, Germany',
		'Edinburgh, UK',
		'Nairobi, Kenya',
		'Boston, USA'
	);
	return strtoupper($arrayLocations[rand(0,9)]);
}

function getTheSpecialSkills(){
	$arraySpecialSkills = array(
		'High Survival Skill',
		'Hand-to-hand combat',
		'Expert Sniper',
		'Expert In Cybersecurity',
		'Intelligence Gathering',
		'Martial Arts',
		'Undercover Operations',
	);
	return $arraySpecialSkills[rand(0,5)];
}

function getTheTraits(){
	$arrayTraits = array(
		'Discrete, Adaptable, Resilient, Creative, Intelligent, Versatile',
		'Discrete, Resilient, Intelligent, Patient, Trustworthy, Tactical', 
		'Adaptable, Creative, Resourceful, Brave, Assertive, Strategic',
		'Intelligent, Bold, Patient, Confident, Disciplined, Persuasive',
		'Resilient, Creative, Trustworthy, Tech-savvy, Alert',
		'Analytical, Decisive, Agile, Sharp, Tactical Thinker, Patient',
		'Loyal, Multilingual, Strategic, Charismatic, Resilient, Fast',
		'Resourceful, Patient, Trustworthy, Tech-savvy, Creative, Fast',
		'Creative, Intelligent, Resilient, Curious, Disciplined, Analytical',
		'Adaptable, Multilingual, Charismatic, Discrete, Strategic',
	);
	return $arrayTraits[rand(0,9)];
}

function getThePower(){
	$array = [40, 45, 55, 60, 65, 70, 75, 80, 85, 90];
	$key = array_rand($array);
	return $array[$key];
}

function getTheFootage(){
	return rand(0,17).'.jpg';
}

// Function to get the client IP address
function getClientIp() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = '223.189.24.150';
    return $ipaddress;
}

function uploadthumbnprocess($filename, $fileData) {
	$im = imagecreatefromstring($fileData);
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
	
	imagepng($thumb, $filename, 9);
	imagedestroy($im);
}


function load_image($filename, $type){
	if ($type == IMAGETYPE_JPEG){
		$image = imagecreatefromjpeg($filename);
	}elseif ($type == IMAGETYPE_PNG){
		$image = imagecreatefrompng($filename);
	}elseif ($type == IMAGETYPE_GIF){
		$image = imagecreatefromgif($filename);
	}
	return $image;
}
/*$filename = "images/imagename.jpg";
list($width, $height, $type) = getimagesize($filename);
$old_image = load_image($filename, $type);*/


function resize_image($new_width, $new_height, $image, $width, $height) {
	$new_image = imagecreatetruecolor($new_width, $new_height);
	imagecopyresampled($new_image, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
	return $new_image;
}
/*$filename = "images/imagename.jpg";
list($width, $height, $type) = getimagesize($filename);
$old_image = load_image($filename, $type);
$new_image = resize_image(280, 180, $old_image, $width, $height);*/


function resize_to_width($new_width, $image, $width, $height){
	$resize_ratio = $new_width / $width;
	$new_height = $height * $resize_ratio;
	return resize_image($new_width, $new_height, $image, $width, $height);
}

/*$filename = "images/imagename.jpg";
list($width, $height, $type) = getimagesize($filename);
$old_image = load_image($filename, $type);
$image_width_fixed = resize_image_to_width(560, $old_image, $width, $height);*/

function resize_to_height($new_height, $image, $width, $height){
	$ratio = $new_height / $height;
	$new_width = $width * $ratio;
	return resize_image($new_width, $new_height, $image, $width, $height);
}

/*$filename = "images/imagename.jpg";
list($width, $height, $type) = getimagesize($filename);
$old_image = load_image($filename, $type);
$image_height_fixed = resize_image_to_height(900, $old_image, $width, $height);*/


function scale_image($scale, $image, $width, $height){
	$new_width = $width * $scale;
	$new_height = $height * $scale;
	return resize_image($new_width, $new_height, $image, $width, $height);
}

/*$filename = "images/imagename.jpg";
list($width, $height, $type) = getimagesize($filename);
$old_image = load_image($filename, $type);
$image_scaled = scale_image(0.8, $old_image, $width, $height);*/

function save_image($new_image, $new_filename, $new_type='jpeg', $quality=80){
	if ($new_type == 'jpeg'){
	imagejpeg($new_image, $new_filename, $quality);
	}elseif ($new_type == 'png'){
	imagepng($new_image, $new_filename);
	}elseif ($new_type == 'gif'){
	imagegif($new_image, $new_filename);
	}
}

/*$filename = "images/imagename.jpg";
list($width, $height, $type) = getimagesize($filename);
$old_image = load_image($filename, $type);
$new_image = resize_image(280, 180, $old_image, $width, $height);
save_image($new_image, 'wallpapers/resized-'.basename($filename), 'jpeg', 75);*/

 
/*$im = imagecreatefrompng('dave.png');

if($im && imagefilter($im, IMG_FILTER_GRAYSCALE))
{
    echo 'Image converted to grayscale.';

    imagepng($im, 'dave.png');
}
else
{
    echo 'Conversion to grayscale failed.';
}

imagedestroy($im);*/