<?php 
$title = "Testing Capistrano 3";
$message = "Testing site for capistrano deployments"; 
$server = "vagrant, captest, ip: ".$_SERVER['SERVER_ADDR']; 

?>
<html>
    <style>
        body {background-color: #faa32d;}
        h1 {
            text-align: center;
            margin-top: 10%;
            color: white;
            font-size: 6em;
            border: double white;
            padding: 0.4em;
        }
        p {
            color: white;
            font-size: 2em;
            background-color: #34ad9f;
            padding: 20px;
        }
    </style>
<body>

<h1><?php echo $title; ?></h1>

<p><?php echo $message; ?></p>
<p><?php echo $server; ?></p>
</body>
</html>
