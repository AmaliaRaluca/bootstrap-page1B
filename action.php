
<html>
<head>
<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Country = test_input($_POST["Country"]);
    $From = test_input($_POST["From"]);
    $To = test_input($_POST["To"]);
    $Passengers = test_input($_POST["Passengers"]);
    $One = test_input($_POST["One"]);
    $Way = test_input($_POST["Way"]);
    $Return = test_input($_POST["Return"]);
    $Time = test_input($_POST["Time"]);
    $Payment = test_input($_POST["Payment"]);
    }

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    ?>
    <h4>Your Input:</h4>
    Country: <?php echo $_POST["Country"]; ?> <br>
    From: <?php echo $_POST["From"]; ?> <br>
    To: <?php echo $_POST["To"]; ?> <br>
    Passengers: <?php echo $_POST["Passengers"]; ?> <br>
    One Way: <?php echo $_POST["One"]; ?> <?php echo $_POST["Way"]; ?> <br>
    Return Time: <?php echo $_POST["Return"]; ?> <?php echo $_POST["Time"]; ?> <br>
    Payment: <?php echo $_POST["Payment"];?> <br>
</body>
</html>