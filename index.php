<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Travel Agency</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Welcome to Star Travel Agency</h2>

    <h4>List of service:</h4>
    <table>
        <tr>
            <th>Room type</th>
            <th>Price per night</th>
        </tr>
        <tr>
            <td>Standard chalet</td>
            <td>RM459</td>
        </tr>
        <tr>
            <td>Superior chalet</td>
            <td>RM489</td>
        </tr>
        <tr>
            <td>Superior pool view</td>
            <td>RM509</td>
        </tr>
        <tr>
            <td>Standard beach front</td>
            <td>RM539</td>
        </tr>
        <tr>
            <td>Superior beach front</td>
            <td>RM579</td>
        </tr>
    </table>
    <br>
    <h4>Additional service</h4>
    <table>
        <tr>
            <th colspan="2">Optional</th>
        </tr>
        <tr>
            <td>Scuba Diving</td>
            <td>RM60</td>
        </tr>
        <tr>
            <td>Water Rafting</td>
            <td>RM30</td>
        </tr>
    </table>
    <br><br><br>
    <h4>Please insert form below to booking:</h4>
    <form action="result.php" method="post">
        <table>
            <tr>
                <th>Name</th>
                <td><input type="text" class="form-control" name="name"></td>
            </tr>
            <tr>
                <th>Room type</th>
                <td>
                    <select name="room" id="room" class="form-control">
                        <option value=""></option>
                        <option value="Standard chalet">Standard chalet</option>
                        <option value="Superior chalet">Superior chalet</option>
                        <option value="Superior pool view">Superior pool view</option>
                        <option value="Standard beach front">Standard beach front</option>
                        <option value="Superior beach front">Superior beach front</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Days</th>
                <td><input type="number" name="days" id="days" value="1"></td>
            </tr>
        </table>
        <br>
        <button id="btn" name="submit" type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>