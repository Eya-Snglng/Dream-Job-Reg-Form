<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Registration</title>
    <style>
        body {
            font-family: "Arial";
        }
        input {
            font-size: 1.5em;
            height: 50px;
            width: 200px;
        }
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php $getRegistrationById = getRegistrationByID($pdo, $_GET['id']); ?>
    <form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <p>
            <label for="full_name">Full Name</label> 
            <input type="text" name="full_name" value="<?php echo htmlspecialchars($getRegistrationById['full_name']); ?>">
        </p>
        <p>
            <label for="email_address">Email Address</label> 
            <input type="email" name="email_address" value="<?php echo htmlspecialchars($getRegistrationById['email_address']); ?>">
        </p>
        <p>
            <label for="phone_number">Phone Number</label>
            <input type="text" name="phone_number" value="<?php echo htmlspecialchars($getRegistrationById['phone_number']); ?>">
        </p>
        <p>
            <label for="linkedin_profile">LinkedIn Profile</label>
            <input type="text" name="linkedin_profile" value="<?php echo htmlspecialchars($getRegistrationById['linkedin_profile']); ?>">
        </p>
        <p>
            <label for="github_profile">GitHub Profile</label>
            <input type="text" name="github_profile" value="<?php echo htmlspecialchars($getRegistrationById['github_profile']); ?>">
        </p>
        <p>
            <label for="current_job_title">Current Job Title</label>
            <input type="text" name="current_job_title" value="<?php echo htmlspecialchars($getRegistrationById['current_job_title']); ?>">
        </p>
        <p>
            <label for="years_of_experience">Years of Experience</label>
            <input type="number" name="years_of_experience" value="<?php echo htmlspecialchars($getRegistrationById['years_of_experience']); ?>">
        </p>
        <p>
            <label for="primary_programming_languages">Primary Programming Languages</label>
            <input type="text" name="primary_programming_languages" value="<?php echo htmlspecialchars($getRegistrationById['primary_programming_languages']); ?>">
        </p>
        <p>
            <label for="technologies_and_frameworks">Technologies and Frameworks</label>
            <input type="text" name="technologies_and_frameworks" value="<?php echo htmlspecialchars($getRegistrationById['technologies_and_frameworks']); ?>">
        </p>
        <p>
            <input type="submit" name="editRegistrationBtn" value="Update">
        </p>
    </form>
</body>
</html>
