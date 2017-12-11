<!DOCTYPE html>
<html>
<head>
	<?php include_once './head.php'; ?>
</head>
<body>
<?php include_once './feedback-template.php'; ?>
<div class="container-fluid">

	<?php include_once './header.php'; ?>

    <div class="container-first">
        <div class="row">
            <div class="container">
                <h1 style="color: #C0C0C0">Feedback List</h1>
            </div>
        </div>
    </div>

    <table class="table table-dark table-striped table-hover table-responsive-sm">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Feedback</th>
            <th scope="col">Score</th>
            <th scope="col">Product</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Feedback</th>
            <th scope="col">Score</th>
            <th scope="col">Product</th>
        </tr>
        </tfoot>
        <tbody>
        <?php
        $connectionstring = mysql_connect('localhost', 'mistrydhruv118w', '')
        or die('Could not connect:' . mysql_error());
        mysql_select_db ('my_mistrydhruv118w')
        or die('Could not select database: ' . mysql_error());

        if ( $_POST['mrova-name'] && $_POST['mrova-message'] && $_POST['rating'] && $_POST['carlist'] ) {
	        $name = $_POST['mrova-name'];
	        $feedback = $_POST['mrova-message'];
	        $score = $_POST['rating'];
	        $product = $_POST['carlist'];

	        //create insert SQL string
	        $Insert = "INSERT INTO customerFeedback (Name, Feedback, Score, Product) VALUES ('$name', '$feedback', $score, '$product')";

	        //insert into database
	        $results = mysql_query($Insert)
	        or die('Could not insert into database: ' . mysql_error());
        }

        //SQL query
        $Query = 'SELECT * FROM customerFeedback WHERE 1';

        //execute query
        $queryexe = mysql_query($Query)
        or die('Could not query database: ' . mysql_error());
        //query database
        while($dataArray = mysql_fetch_array($queryexe, MYSQL_ASSOC))
        {
	        echo "<tr>\n";
	        foreach ($dataArray as $col_value) {
		        echo "\t<td>$col_value</td>\n";
	        }
	        echo "</tr>\n";
        }

        // Free resultset
        mysql_free_result($queryexe)
        or die('Could not free result: ' . mysql_error());

        //disconnect from database
        mysql_close($connectionstring)
        or die('Could not close database: ' . mysql_error());
        ?>
        </tbody>
    </table>

	<?php include_once './scripts.php'; ?>
</div>
</body>
</html>