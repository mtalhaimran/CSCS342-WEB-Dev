<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        input {
            display: block;
            margin-bottom: 10px;
        }

    </style>
</head>
<body>
    <h3>Current Username: <?php echo "Hazrat" ?></h1>
    
    <label for="username">Update Username: </label>
    <input type="text" name="username" id="username">
    <input type="button" value="Submit">

    <h3>Update Password</h1>

    <label for="Password">Enter Current Password: </label>
    <input type="password" name="Password" id="Password">

    <label for="newPassword">Enter New Password: </label>
    <input type="password" name="newPassword" id="newPassword">

    <label for="againPassword">Enter New Password Again: </label>
    <input type="password" name="againPassword" id="againPassword">

    <input type="button" value="Submit">


    <h3>Current Full Name: <?php echo "Muhammad Hazrat" ?></h1>
    
    <label for="name">Update Full Name: </label>
    <input type="text" name="name" id="name">
    <input type="button" value="Submit">


    <h3>Current Age: <?php echo "19" ?></h1>
    
    <label for="age">Update Age: </label>
    <input type="text" name="age" id="age">
    <input type="button" value="Submit">




</body>
</html>