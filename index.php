<!DOCCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8"/>
    <meta name="description" content="Trying out PHP">
    <title>Using PHP Variables, arrays and operators</title>

</head>
<body>
    <h1>PHP Variables, arrays and operators</h1>
<?php
    $marks = array (85, 85, 95); //declare and initialise array
    $marks[1] = 90; //modify second element
    $marks[2] = 75;
    $ave = ($marks[0] + $marks[1] + $marks[2])/3; //Compute average
    if($ave >= 50)
        $status = "PASSED";
    else
        $status = "FAILED";
    echo "<p>The average score is $ave. You $status.</p>";
    ?>

</body>
</html>