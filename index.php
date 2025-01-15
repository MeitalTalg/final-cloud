<!DOCTYPE html>
<html>
<head>
<title> Hello DevOps Class</title>
</head>
<body>
    <?php
    $host = "meital-database.cx248m4we6k7.us-east-1.rds.amazonaws.com";
    $user = "admin";
    $password = "Meital1996";
    $dbname = "meital_schema";
    
    // Create connection
    $conn = mysqli_connect($host, $user, $password,$dbname);

    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    
    // Select all rows from the breached table

    $sql = "SELECT ID, email, pass, date_add FROM breached_table";
    $result = mysqli_query($conn, $sql);

    echo "<h1>Breached</h1>";
    echo "<table>";
    
    echo "<tr><th>ID</th><th>Email</th><th>Password</th><th>Date Added</th></tr>";

    // Output the data from each row
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr><td>".$row['ID']."</td><td>".$row['email']."</td><td>".$row['pass']."</td><td>".$row['date_add']."</td></tr>";
    }

    echo "</table>";

    mysqli_close($conn);    
    ?>
</body>
</html>


