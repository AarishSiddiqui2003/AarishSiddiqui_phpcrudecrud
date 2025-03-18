<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Northland Analytics PHP/MySQL Test Page</title>
</head>
<body>
    <h1>Northland Analytics PHP/MySQL Test Page</h1>
    
    <?php
    $conn = new mysqli('localhost', 'siddi145', 'Abdullah4521', 'employees');

    if ($conn->connect_error) {
        die("MySQL Connection Failed: " . $conn->connect_error);
    }
    echo "MySQL Connection Succeeded<br><br>";

    $sql = "SELECT first_name, last_name, hire_date FROM employees where last_name = 'Weedman'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<p>Database Records Found</p>";
        while ($row = $result->fetch_assoc()) {
            echo "Employee: " . $row["first_name"] . " " . $row["last_name"] . " " . $row["hire_date"] . "<br>";
        }
    } else {
        echo "No Records Found";
    }

    $conn->close();
    ?>
    <p>For more information on connecting PHP to MySQL click here <a href="https://www.php.net/manual/en/book.mysqli.php">here</a>.</p>
</body>
</html>

