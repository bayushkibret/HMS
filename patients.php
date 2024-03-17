<?php
// Include database connection
include_once 'includes/db_connect.php';

// Fetch patients from database
$query = "SELECT * FROM patients";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System - Patients</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Patients List</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="appointments.php">Appointments</a></li>
            <li><a href="doctors.php">Doctors</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                </tr>
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Hospital Management System. All rights reserved.</p>
    </footer>
</body>
</html>
