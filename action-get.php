
<html>
<head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    echo  $_GET["Country"];
    echo $_GET["From"];
    echo $_GET["To"];
    echo $_GET["Passengers"];
    echo $_GET["One"];
    echo $_GET["Way"];
    echo $_GET["Return"];
    echo $_GET["Time"];
    echo $_GET["Payment"];
}
?>
</body>
</html>
