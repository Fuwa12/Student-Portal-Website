<?php
function getValue($key, $default = 'Unknown') {
    return isset($_GET[$key]) ? htmlspecialchars($_GET[$key]) : $default;
}

$name = getValue('name');
$birthDate = getValue('birthDate');
$birthPlace = getValue('birthPlace');
$sex = getValue('sex');
$civilStatus = getValue('civilStatus');
$height = getValue('height');
$weight = getValue('weight');
$bloodType = getValue('bloodType');
$nationality = getValue('nationality');
$cp_number = getValue('cp_number');
$email_address = getValue('email_address');
$address = getValue('address');
$mother = getValue('Mother');
$father = getValue('Father');
$guardian = getValue('Guardian');
$guardian_cp_number = getValue('guardian_cp_number');
$school_name = getValue('school_name');
$course = getValue('course');
$year = getValue('year');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Portal | Details</title>
  <style>
    body {
      background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Orbitron', 'Segoe UI', Tahoma, sans-serif;
      margin: 0;
      padding: 0;
      color: #fff;
    }

    .overlay {
      background-color: rgba(0, 0, 30, 0.8);
      min-height: 100vh;
      padding: 40px;
    }

    .header {
      text-align: center;
      font-size: 32px;
      font-weight: bold;
      text-shadow: 0 0 10px #00c3ff, 0 0 20px #00c3ff;
      margin-bottom: 20px;
    }

    .container {
      max-width: 800px;
      background: rgba(20, 20, 60, 0.9);
      margin: auto;
      padding: 40px 50px;
      border-radius: 15px;
      box-shadow: 0 0 25px #00c3ff;
    }

    h2 {
      text-align: center;
      color: #00c3ff;
      text-shadow: 0 0 10px #00c3ff;
      margin-bottom: 20px;
    }

    .details p {
      font-size: 18px;
      margin: 10px 0;
      color: #cceeff;
    }

    .details p strong {
      color: #00c3ff;
    }
  </style>
</head>
<body>

<div class="overlay">
  <div class="header">🪐 Student Portal</div>

  <div class="container">
    <h2>Student Information</h2>
    <div class="details">
      <p><strong>Name:</strong> <?= $name ?></p>
      <p><strong>Birth Date:</strong> <?= $birthDate ?></p>
      <p><strong>Birth Place:</strong> <?= $birthPlace ?></p>
      <p><strong>Sex:</strong> <?= $sex ?></p>
      <p><strong>Civil Status:</strong> <?= $civilStatus ?></p>
      <p><strong>Height:</strong> <?= $height ?></p>
      <p><strong>Weight:</strong> <?= $weight ?></p>
      <p><strong>Blood Type:</strong> <?= $bloodType ?></p>
      <p><strong>Nationality:</strong> <?= $nationality ?></p>
      <p><strong>CP Number:</strong> <?= $cp_number ?></p>
      <p><strong>Email Address:</strong> <?= $email_address ?></p>
      <p><strong>Address:</strong> <?= $address ?></p>
      <p><strong>Mother:</strong> <?= $mother ?></p>
      <p><strong>Father:</strong> <?= $father ?></p>
      <p><strong>Guardian:</strong> <?= $guardian ?></p>
      <p><strong>Guardian's CP Number:</strong> <?= $guardian_cp_number ?></p>
      <p><strong>School Name:</strong> <?= $school_name ?></p>
      <p><strong>Course:</strong> <?= $course ?></p>
      <p><strong>Year:</strong> <?= $year ?></p>
    </div>
  </div>
</div>

</body>
</html>
