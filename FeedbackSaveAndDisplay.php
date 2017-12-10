<html xmlns = "http://www.w3.org/1999/xhtml">

<head>
<title>feedback List</title>

<style type = "text/css">
body {
font-family: tahoma, helvetica, arial, sans-serif;
}
table, tr, td, th {
text-align: center;
font-size: .9em;
border: 3px groove;
padding: 5px;
background-color: #dddddd;
}
</style>
</head>

<body>
<p style = "font-size: 2em;">feedback List</p>

<table>
<thead>
<tr>
<th style = "width: 100px;">Name</th>
<th style = "width: 200px;">Feedback</th>
<th style = "width: 50px;">Score</th>
<th style = "width: 100px;">Product</th>
</tr>
</thead>

<tbody>
<?php
$name = $_POST['name'];
$feedback = $_POST['feedback'];
$score = $_POST['score'];
$product = $_POST['product'];
$user = $_POST['user'];
$pwd = $_POST['pwd'];
$connectionstring = mysql_connect('localhost') 
or die('Could not connect:' . mysql_error());
mysql_select_db ('CustomerFeedback')
or die('Could not select database: ' . mysql_error());

//create insert SQL string
$Insert = "INSERT INTO tblOnlineWatch (Name, Feedback, Score, Product) VALUES ('$name', '$feedback', $score, '$product')";


//insert into database
$results = mysql_query($Insert)
or die('Could not insert into database: ' . mysql_error());
//SQL query
$Query = 'SELECT * FROM tblOnlineWatch WHERE 1';

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
</body>

</html>