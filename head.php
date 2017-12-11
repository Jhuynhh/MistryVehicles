<?php
/**
 * Created by PhpStorm.
 * User: udit
 * Date: 12/10/17
 * Time: 1:39 PM
 */

$current = $_SERVER['SCRIPT_NAME'];

switch ( $current ) {
    case '/feedback.php':
	    $title = 'Feedback List';
        break;
	case '/people.php':
		$title = 'Mystery Team';
		break;
	case '/dhruv-mistry.php':
		$title = 'Dhruv Mistry';
		break;
	case '/shraddha-tailor.php':
		$title = 'Shraddha Tailor';
		break;
	case '/jacky-huynh.php':
		$title = 'Jacky Huynh';
		break;
	case '/eric-chee.php':
		$title = 'Eric Chee';
		break;
	case '/inventory.php':
		$title = 'Inventory';
		break;
	default:
		$title = 'Mystery Vehicles';
		break;
}

?>
<title><?php echo $title; ?></title>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<link rel="stylesheet" href="feedback-form-css.css" type="text/css"/>

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

<style>
	body {
		font-family: 'Open Sans', sans-serif;
		font-style: normal;
        background-color: black;
	}

	#clockbox {
		color: red;
	}

	.container-first {
		margin-top: 64px;
	}
</style>