<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form class="modal-content" method="post" action="actionInsert.php">
    <table>
        <thead>
            <tr>
                <td>Colunm</td>
                <td>Information</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    First Name :
                </td>
                <td>
                    <input type="text" placeholder="Enter First Name" name="firstname" required>
                </td>
            </tr>
            <tr>
                <td>
                    Last Name :
                </td>
                <td>
                    <input type="text" placeholder="Enter Last Name" name="lastname" required>
                </td>
            </tr>
            <tr>
                <td>
                    Email :
                </td>
                <td>
                    <input type="text" placeholder="Enter Email" name="email">
                </td>
            </tr>
            <tr>
                <td>
                <button type="submit" name="submit">Add</button>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <a href="index.php">Back</a>
    </form>
</body>

</html>