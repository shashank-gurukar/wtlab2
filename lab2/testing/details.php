<!DOCTYPE html>
<html>
<head>
    <title>Server Information</title>
</head>
<body>
    <h1>Server Information</h1>
    <?php
    
    echo "<p>Server Name: " . $_SERVER['SERVER_NAME'] . "</p>";
    echo "<p>Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
    echo "<p>Server Protocol: " . $_SERVER['SERVER_PROTOCOL'] . "</p>";
    echo "<p>CGI Revision: " . $_SERVER['GATEWAY_INTERFACE'] . "</p>";
    ?>
</body>
</html>
