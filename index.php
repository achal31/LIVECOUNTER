<?php
$url = 'https://api.covid19india.org/state_district_wise.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data,true); // decode the JSON feed
$total_Confirmed=0;
$total_Active=0;
$total_Decreased=0;
$total_Recovered=0;
foreach($characters as $element=>$value){
    foreach($value as $v=>$j){
        foreach($j as $x){
            error_reporting(E_ERROR | E_PARSE);

            $total_Confirmed=$total_Confirmed+$x['confirmed'];
         
            $total_Active=$total_Active+$x['active'];
            
            $total_Decreased= $total_Decreased+$x['deceased'];
            
            $total_Recovered= $total_Recovered+$x['recovered'];
           

        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="#">LIVE COUNTER</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">FEATURES </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">REVIEWS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btnactive" href="#">SIGN UP</a>
            </li>
    </div>
</nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-lg-3 text-center">CONFIRMED CASES</div>
            <div class="col-md-3 col-lg-3 text-center">ACTIVE CASES</div>
            <div class="col-md-3 col-lg-3 text-center">DECREASE CASES</div>
            <div class="col-md-3 col-lg-3 text-center">RECOVERED CASES</div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-3 col-lg-3 text-center"><?php echo $total_Confirmed;?></div>
            <div class="col-md-3 col-lg-3 text-center"><?php echo $total_Active; ?></div>
            <div class="col-md-3 col-lg-3 text-center"><?php echo $total_Decreased; ?></div>
            <div class="col-md-3 col-lg-3 text-center"><?php echo $total_Recovered; ?></div>
    </div>
</body>

</html>
