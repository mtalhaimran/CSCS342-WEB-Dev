<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Hazrat & Talha">
    <link rel="icon" href="favicon.ico">
    <title>Admin CMS Login</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap_css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
        }
        body {
            background-image: url(img/bg_1.jpg);
            background-position:center;
            background-size:cover;
        }
        @font-face {
            font-family: workSans;
            src: url(font/WorkSans-ExtraLight.ttf);
        }
        .signUpForm {
            margin: 0 auto;

        }
        #h1{
            margin-bottom: 30px;
            text-align: center;
        }


        /*ul li a {*/
        /*    font-size: 15px;*/
        /*    font-family: workSans, sans-serif;*/
        /*    color: rgb(19, 18, 18);*/
        /*    font-weight: bold;*/
        /*}*/

        /*ul li a:hover {*/
        /*    color: #181716;*/
        /*}*/

        /*.form-row button {*/
        /*    font-size: 15px;*/
        /*    font-family: workSans, sans-serif;*/
        /*    font-weight: bold;*/
        /*}*/

        /*h1, p, input {*/
        /*    font-family: workSans, sans-serif;*/
        /*}*/
        input {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>


<body>

<h1 id="h1">Add Medicine</h1>
name, type, description, price, quantity (i.e total no of availability), usage, Company name, dose etc.
<form class="col-md-3 col-md-offset-3 signUpForm">
    <div class="form-row ">
        <label for="mName">Medicine Name</label>
        <input type="text" class="form-control" id="inputfullname">
    </div>
    <div class="form-row">
        <label for="mType">Medicine Type</label>
        <input type="text" class="form-control" id="mType">
    </div>
    <div class="form-row">
        <label for="mDescription">Medicine Description</label>
        <input type="text" class="form-control" id="mDescription">
    </div>
    <div class="form-row">
        <label for="mPrice">Medicine Price</label>
        <input type="number" class="form-control" id="mPrice">
    </div>
    <div class="form-row">
        <label for="mQuantity">Medicine Quantity</label>
        <input type="number" class="form-control" id="mQuantity">
    </div>
    <div class="form-row">
        <label for="mUsage">Medicine Usage</label>
        <input type="text" class="form-control" id="mUsage">
    </div>
    <div class="form-row">
        <label for="mCompany">Medicine Company Name</label>
        <input type="text" class="form-control" id="mCompany">
    </div>
    <div class="form-row">
        <label for="mDose">Medicine Dose</label>
        <input type="text" class="form-control" id="mDose">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>