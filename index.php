<?php 
$title = "Captest Site";
$message = "Testing site for capistrano deployments"; 
$server = "vagrant, captest, ip: 192.168.33.10"; 

?>
<html>
    <style>
        body {background-color: #ffa339;}
        h1 {
            text-align: center;
            margin-top: 10%;
            color: white;
            font-size: 10em;
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
