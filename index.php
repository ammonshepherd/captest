<?php 
$title = "Testing Capistrano 3";
$message = "Testing site for capistrano deployments"; 
$server = "vagrant, captest, ip: ".$_SERVER['SERVER_ADDR']; 

?>
<html>
    <style>
        body {background-color: #faa32d;}
        #wrap{
            background-color: white;
            margin: auto;
            }
        h1 {
            text-align: center;
            margin-top: 10%;
            color: blue;
            font-size: 6em;
            border: double gray;
            padding: 0.4em;
        }
        p {
            color: blue;
            font-size: 2em;
            background-color: #34ad9f;
            padding: 20px;
        }
    </style>
<body>

<div id="wrap">
    <h1><?php echo $title; ?></h1>

    <p><?php echo $message; ?></p>
    <p><?php echo $server; ?></p>
</div>


</body>
</html>
