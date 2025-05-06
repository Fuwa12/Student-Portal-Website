<!DOCTYPE html>
<html>
<head>
  <title>Space-Themed Enrollment Form</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap');

    body {
      font-family: 'Orbitron', sans-serif;
      background: radial-gradient(ellipse at bottom, #05031a 0%, #000000 100%);
      background-size: cover;
      margin: 0;
      padding: 40px;
      color: #fff;
    }

    form {
      background-color: rgba(0, 0, 0, 0.75);
      padding: 30px;
      border-radius: 15px;
      max-width: 800px;
      margin: auto;
      box-shadow: 0 0 20px #00ffe1;
    }

    h2 {
      background: linear-gradient(90deg, #00ffe1, #0066ff);
      color: black;
      padding: 10px;
      border-radius: 10px;
      text-align: center;
      margin-top: 30px;
    }

    label {
      display: block;
      margin-top: 15px;
      font-size: 14px;
    }

    input, select {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      background-color: #111;
      border: 1px solid #00ffe1;
      border-radius: 5px;
      color: #00ffe1;
      font-family: 'Orbitron', sans-serif;
    }

    input[type="file"] {
      border: none;
    }

    input[type="checkbox"] {
      width: auto;
      margin-right: 10px;
    }

    button {
      background-color: #00ffe1;
      color: black;
      padding: 12px 25px;
      border: none;
      border-radius: 10px;
      margin-top: 25px;
      font-weight: bold;
      cursor: pointer;
      font-family: 'Orbitron', sans-serif;
      transition: 0.3s;
    }

    button:hover {
      background-color: #0066ff;
      color: white;
    }
  </style>
</head>
<body>
  <form action="enrollment_process.php" method="POST" enctype="multipart/form-data">
    
    <h2>Section 1: Basic Information</h2>
    <label>Full Name (First, Middle, Last)</label>
    <input type="text" name="full_name" required>

    <label>Gender</label>
    <input type="text" name="gender" required>

    <label>Date of Birth</label>
    <input type="date" name="dob" required>

    <label>Age</label>
    <input type="number" name="age" required>

    <label>Nationality</label>
    <input type="text" name="nationality" required>

    <label>Religion</label>
    <input type="text" name="religion" required>

    <label>Home Address</label>
    <input type="text" name="address" required>

    <label>Email Address</label>
    <input type="email" name="email" required>

    <label>Mobile Number</label>
    <input type="text" name="mobile_number" required>

    <h2>Section 2: Educational Background</h2>
    <label>Last School Attended</label>
    <input type="text" name="last_school" required>

    <label>Grade Level Completed / Year Graduated</label>
    <input type="text" name="level_completed" required>

    <label>Grade Level / Course Applying For</label>
    <input type="text" name="applying_for" required>

    <label>Student Type</label>
    <select name="student_type" required>
      <option value="New">New</option>
      <option value="Transferee">Transferee</option>
      <option value="Returning">Returning</option>
    </select>

    <label>Honors or Awards (optional)</label>
    <input type="text" name="awards">

    <h2>Section 3: Parent/Guardian Details</h2>
    <label>Parent/Guardian Full Name</label>
    <input type="text" name="guardian_name" required>

    <label>Relationship to Student</label>
    <input type="text" name="relationship" required>

    <label>Occupation</label>
    <input type="text" name="occupation" required>

    <label>Contact Number</label>
    <input type="text" name="guardian_contact" required>

    <label>Email Address</label>
    <input type="email" name="guardian_email">

    <label>Emergency Contact Person and Number</label>
    <input type="text" name="emergency_contact" required>

    <h2>Section 4: Required Uploads</h2>
    <label>PSA Birth Certificate (PDF/JPG)</label>
    <input type="file" name="psa_birth_certificate" accept=".pdf,.jpg,.jpeg,.png" required>

    <label>Recent ID Picture (2x2)</label>
    <input type="file" name="id_picture" accept=".jpg,.jpeg,.png" required>

    <label>Report Card / Form 138 (PDF/JPG)</label>
    <input type="file" name="report_card" accept=".pdf,.jpg,.jpeg,.png" required>

    <label>Certificate of Good Moral (PDF/JPG)</label>
    <input type="file" name="good_moral" accept=".pdf,.jpg,.jpeg,.png" required>

    <label>Barangay Clearance (if required)</label>
    <input type="file" name="brgy_clearance" accept=".pdf,.jpg,.jpeg,.png">

    <label>Vaccination Card or Medical Certificate (optional)</label>
    <input type="file" name="vaccination_or_medical" accept=".pdf,.jpg,.jpeg,.png">

    <h2>Section 5: Agreements / Declarations</h2>
    <label><input type="checkbox" name="certify_info" required> I certify that all information is true and correct.</label>
    <label><input type="checkbox" name="allow_store" required> I allow the school to store my information for registration purposes.</label>
    <label><input type="checkbox" name="agree_policies" required> I agree to follow all school policies and regulations.</label>

    <button type="button" onclick="window.location.href='http://localhost/justine/navigation.html';">Launch Enrollment 🚀</button>
  </form>
</body>
</html>
