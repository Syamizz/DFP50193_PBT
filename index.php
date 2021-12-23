<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Travel Agency</title>
</head>
<body>
    <form action="result.php" method="post">
        <table>
            <tr>
                <th>Name</th>
                <td><input type="text" class="form-control" name="nama"></td>
            </tr>
            <tr>
                <th>No IC</th>
                <td><input type="text" class="form-control" name="noKP"></td>
            </tr>
            <tr>
                <th>Service</th>
                    <td>
                        <select name="service" id="service" class="form-control">
                        <option value=""></option>
                        <option value="accomodations">Accomodations:</option>
                        
                        </select></td>  
                    </tr>
        </table>
    </form>
</body>
</html>