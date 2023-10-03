

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>as1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="http://localhost/as1/as11.php">View Employees</a></li>
            </ul>
        </nav>
        <img src="logo.jpg" alt="Company Logo">
    </header>

    <main>
        <h1>Add Employee</h1>
        <form action="/as1/as1.php" method="post">
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname" required><br>
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" id="lname" required><br>
            <label for="position">Position:</label>
            <input type="text" name="position" id="position" required><br>
            <button type="submit">Add Employee</button>
        </form>
    </main>

    <footer>
        &copy; 2023 AS1 BANK
    </footer>
</body>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $position = $_POST['position'];

    
    $servername = "localhost:3306";
    $username = "root";
    $password = "Eko.115221"; 
    $database = "contacts"; 

    
    $conn = mysqli_connect($servername, $username, $password, $database);

    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        


        $sql = "INSERT INTO `as1` (`fname`, `lname`, `position`) VALUES ('$fname', '$lname', '$position')";
        $result=mysqli_query($conn,$sql);


        if($result) {
            echo "Data inserted successfully";
    
        }
        else {
            echo "Data not inserted due to" .mysqli_error($conn);
        }

        
    }
}
?>
</html>