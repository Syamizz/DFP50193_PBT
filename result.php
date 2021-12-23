<?php
    $name=$_GET['name'];
    $price=$_GET['price'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <td><?php echo "$name" ?></td>
        </tr>
        <tr>
            <th>Room type</th>
            <td><?php echo "$price" ?></td>
        </tr>
    </table>
</body>
</html>