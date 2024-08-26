<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration - Peotef University</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<div class="container mt-5">
    <h2>Peotef University Student Registration Form</h2>
    <form action="register.php" method="POST">
        <h4>Personal Information</h4>
        <div class="form-group">
            <label for="fullName">Full Name</label>
            <input type="text" class="form-control" id="fullName" name="fullName" required>
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" required>
        </div>
        <div class="form-group">
            <label>Gender</label><br>
            <input type="radio" id="male" name="gender" value="Male" required> Male
            <input type="radio" id="female" name="gender" value="Female"> Female
        </div>
        <div class="form-group">
            <label for="nationality">Nationality</label>
            <input type="text" class="form-control" id="nationality" name="nationality" required>
        </div>
        <div class="form-group">
            <label for="idNumber">Identification Number</label>
            <input type="text" class="form-control" id="idNumber" name="idNumber" required>
        </div>
        <div class="form-group">
            <label for="address">Permanent Address</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="form-group">
            <label for="contactNumber">Contact Number</label>
            <input type="text" class="form-control" id="contactNumber" name="contactNumber" required>
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="emergencyContact">Emergency Contact Person</label>
            <input type="text" class="form-control" id="emergencyContact" name="emergencyContact" required>
        </div>
        <div class="form-group">
            <label for="emergencyContactNumber">Emergency Contact Number</label>
            <input type="text" class="form-control" id="emergencyContactNumber" name="emergencyContactNumber" required>
        </div>
        
        <h4>Academic Information</h4>
        <div class="form-group">
            <label for="program">Program of Study</label>
            <input type="text" class="form-control" id="program" name="program" required>
        </div>
        <div class="form-group">
            <label for="department">Department</label>
            <input type="text" class="form-control" id="department" name="department" required>
        </div>
        <div class="form-group">
            <label for="level">Level of Study</label>
            <input type="text" class="form-control" id="level" name="level" required>
        </div>
        <div class="form-group">
            <label for="academicYear">Academic Year</label>
            <input type="text" class="form-control" id="academicYear" name="academicYear" required>
        </div>
        <div class="form-group">
            <label for="previousInstitution">Previous Institution (if any)</label>
            <input type="text" class="form-control" id="previousInstitution" name="previousInstitution">
        </div>
        <div class="form-group">
            <label for="referral">Referral (if any)</label>
            <input type="text" class="form-control" id="referral" name="referral">
        </div>
        
        <h4>Medical Information</h4>
        <div class="form-group">
            <label>Do you have any chronic illness or medical condition?</label><br>
            <input type="radio" id="illnessYes" name="illness" value="Yes" required> Yes
            <input type="radio" id="illnessNo" name="illness" value="No"> No
        </div>
        <div class="form-group">
            <label for="illnessDetails">If yes, please specify</label>
            <input type="text" class="form-control" id="illnessDetails" name="illnessDetails">
        </div>
        <div class="form-group">
            <label>Are you on any regular medication?</label><br>
            <input type="radio" id="medicationYes" name="medication" value="Yes" required> Yes
            <input type="radio" id="medicationNo" name="medication" value="No"> No
        </div>
        <div class="form-group">
            <label for="medicationDetails">If yes, please specify</label>
            <input type="text" class="form-control" id="medicationDetails" name="medicationDetails">
        </div>
        
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
