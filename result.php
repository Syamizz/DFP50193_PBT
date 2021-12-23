<?php
    $name=$_POST['name'];
    $room=$_POST['room'];
    $days=$_POST['days'];
    include("function.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Travel Agency</title>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <td><?php echo "$name" ?></td>
        </tr>
        <tr>
            <th>Room type</th>
            <td><?php echo "$room" ?></td>
        </tr>
        <tr>
            <th>Days</th>
            <td><?php echo "$days" ?></td>
        </tr>
        <tr>
            <th>Total Price</th>
            <td>RM<?php echo "$price" ?></td>
        </tr>
    </table>
</body>
</html>