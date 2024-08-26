<?php
include '../config/database.php';

$sql = "SELECT * FROM students";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal - Peotef University</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container mt-5">
    <h2>Registered Students</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Full Name</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Nationality</th>
            <th>Identification Number</th>
            <th>Permanent Address</th>
            <th>Contact Number</th>
            <th>Email Address</th>
            <th>Emergency Contact Person</th>
            <th>Emergency Contact Number</th>
            <th>Program of Study</th>
            <th>Department</th>
            <th>Level of Study</th>
            <th>Academic Year</th>
            <th>Previous Institution</th>
            <th>Referral</th>
            <th>Chronic Illness</th>
            <th>Medication</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row['full_name']."</td>
                        <td>".$row['dob']."</td>
                        <td>".$row['gender']."</td>
                        <td>".$row['nationality']."</td>
                        <td>".$row['id_number']."</td>
                        <td>".$row['address']."</td>
                        <td>".$row['contact_number']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['emergency_contact']."</td>
                        <td>".$row['emergency_contact_number']."</td>
                        <td>".$row['program']."</td>
                        <td>".$row['department']."</td>
                        <td>".$row['level']."</td>
                        <td>".$row['academic_year']."</td>
                        <td>".$row['previous_institution']."</td>
                        <td>".$row['referral']."</td>
                        <td>".$row['illness']."</td>
                        <td>".$row['medication']."</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='18'>No records found</td></tr>";
        }
        ?>
        </tbody>
    </table>
    <a href="export_csv.php" class="btn btn-success">Export to CSV</a>
</div>
</body>
</html>

<?php
$conn->close();
?>
