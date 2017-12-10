<?php
/**
 * Created by PhpStorm.
 * User: udit
 * Date: 12/10/17
 * Time: 1:40 PM
 */

$current = $_SERVER['SCRIPT_NAME'];

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container">
		<a class="navbar-brand" href="./index.php">Mistry Vehicles</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item <?php echo $current === '/index.php' ? 'active' : ''; ?>">
					<a class="nav-link" href="./index.php">Home</a>
				</li>
				<li class="nav-item <?php echo $current === '/people.php' ? 'active' : ''; ?>">
					<a class="nav-link" href="./people.php">About Us</a>
				</li>
				<li class="nav-item <?php echo $current === '/inventory.html' ? 'active' : ''; ?>">
					<a class="nav-link" href="./inventory.php">Products</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Cart</a>
				</li>
				<li>
					<a id="clockbox" class="nav-link" href="#"></a>
				</li>
			</ul>
		</div>
	</div>
</nav>
