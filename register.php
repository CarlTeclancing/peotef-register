<?php
include 'config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $idNumber = $_POST['idNumber'];
    $address = $_POST['address'];
    $contactNumber = $_POST['contactNumber'];
    $email = $_POST['email'];
    $emergencyContact = $_POST['emergencyContact'];
    $emergencyContactNumber = $_POST['emergencyContactNumber'];
    $program = $_POST['program'];
    $department = $_POST['department'];
    $level = $_POST['level'];
    $academicYear = $_POST['academicYear'];
    $previousInstitution = $_POST['previousInstitution'];
    $referral = $_POST['referral'];
    $illness = $_POST['illness'];
    $illnessDetails = $_POST['illnessDetails'];
    $medication = $_POST['medication'];
    $medicationDetails = $_POST['medicationDetails'];

    $sql = "INSERT INTO students (full_name, dob, gender, nationality, id_number, address, contact_number, email, emergency_contact, emergency_contact_number, program, department, level, academic_year, previous_institution, referral, illness, illness_details, medication, medication_details) 
            VALUES ('$fullName', '$dob', '$gender', '$nationality', '$idNumber', '$address', '$contactNumber', '$email', '$emergencyContact', '$emergencyContactNumber', '$program', '$department', '$level', '$academicYear', '$previousInstitution', '$referral', '$illness', '$illnessDetails', '$medication', '$medicationDetails')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
