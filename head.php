<?php
/**
 * Created by PhpStorm.
 * User: udit
 * Date: 12/10/17
 * Time: 1:39 PM
 */

$current = $_SERVER['SCRIPT_NAME'];

switch ( $current ) {
	case '/people.php':
		$title = 'Mistry Team';
		break;
	default:
		$title = 'Autoshop Homepage';
		break;
}

?>
<title><?php echo $title; ?></title>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">

<style>
	body {
		font-family: 'Open Sans', sans-serif;
		font-style: normal;
	}

	#clockbox {
		color: red;
	}

	.container-first {
		margin-top: 64px;
	}
</style>