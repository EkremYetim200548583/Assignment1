<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>as11</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                 <li><a href="http://localhost/as1/as1.php">Add Employee</a></li>
            </ul>
        </nav>
        <img src="logo.jpg" alt="Company Logo">
    </header>

    <main>
        <h1>View Employees</h1>
        <?php
        
        $servername = "localhost:3306";
        $username = "root";
        $password = "Eko.115221"; 
        $database = "contacts"; 

      
        $conn = mysqli_connect($servername, $username, $password, $database);

        
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
            
            $sql = "SELECT `fname`, `lname`, `position` FROM `as1`"; // Sadece istenilen sütunları seçiyoruz.
            $result = mysqli_query($conn, $sql);

            
            if (mysqli_num_rows($result) > 0) {
                echo '<table border="3">';
                echo '<tr><th>First Name</th><th>Last Name</th><th>Position</th></tr>'; // Başlık satırı

                
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' . $row['fname'] . '</td>';
                    echo '<td>' . $row['lname'] . '</td>';
                    echo '<td>' . $row['position'] . '</td>';
                    echo '</tr>';
                }

                echo '</table>';
            } else {
                echo "No records found.";
            }

        
            mysqli_close($conn);
        }
        ?>
    </main>

    <footer>
        &copy; 2023 AS1 BANK
    </footer>
</body>
</html>
