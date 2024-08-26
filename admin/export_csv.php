<?php
include '../config/database.php';

header('Content-Type: text/csv');
header('Content-Disposition: attachment;filename=registered_students.csv');

$output = fopen('php://output', 'w');

fputcsv($output, array('Full Name', 'Date of Birth', 'Gender', 'Nationality', 'Identification Number', 'Permanent Address', 'Contact Number', 'Email Address', 'Emergency Contact Person', 'Emergency Contact Number', 'Program of Study', 'Department', 'Level of Study', 'Academic Year', 'Previous Institution', 'Referral', 'Chronic Illness', 'Medication'));

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        fputcsv($output, $row);
    }
}

fclose($output);
$conn->close();
?>
