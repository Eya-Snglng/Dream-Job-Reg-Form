<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Stack Developer Registration</title>
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
    <h3>Welcome to the Full Stack Developer Registration System. Input your details here to register</h3>
    <form action="core/handleForms.php" method="POST">
        <p><label for="full_name">Full Name</label> <input type="text" name="full_name" required></p>
        <p><label for="email_address">Email Address</label> <input type="email" name="email_address" required></p>
        <p><label for="phone_number">Phone Number</label> <input type="text" name="phone_number"></p>
        <p><label for="linkedin_profile">LinkedIn Profile</label> <input type="text" name="linkedin_profile"></p>
        <p><label for="github_profile">GitHub Profile</label> <input type="text" name="github_profile"></p>
        <p><label for="current_job_title">Current Job Title</label> <input type="text" name="current_job_title"></p>
        <p><label for="years_of_experience">Years of Experience</label> <input type="number" name="years_of_experience"></p>
        <p><label for="primary_programming_languages">Primary Programming Languages</label> <input type="text" name="primary_programming_languages"></p>
        <p><label for="technologies_and_frameworks">Technologies and Frameworks</label> <input type="text" name="technologies_and_frameworks"></p>
        <p><input type="submit" name="insertNewRegistrationBtn" value="Register"></p>
    </form>

    <table style="width:100%; margin-top: 50px;">
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email Address</th>
            <th>Phone Number</th>
            <th>LinkedIn Profile</th>
            <th>GitHub Profile</th>
            <th>Current Job Title</th>
            <th>Years of Experience</th>
            <th>Primary Programming Languages</th>
            <th>Technologies and Frameworks</th>
            <th>Action</th>
        </tr>

        <?php $seeAllRegistrations = seeAllRegistrations($pdo); ?>
        <?php foreach ($seeAllRegistrations as $row) { ?>
        <tr>
            <td><?php echo htmlspecialchars($row['id']); ?></td>
            <td><?php echo htmlspecialchars($row['full_name']); ?></td>
            <td><?php echo htmlspecialchars($row['email_address']); ?></td>
            <td><?php echo htmlspecialchars($row['phone_number']); ?></td>
            <td><?php echo htmlspecialchars($row['linkedin_profile']); ?></td>
            <td><?php echo htmlspecialchars($row['github_profile']); ?></td>
            <td><?php echo htmlspecialchars($row['current_job_title']); ?></td>
            <td><?php echo htmlspecialchars($row['years_of_experience']); ?></td>
            <td><?php echo htmlspecialchars($row['primary_programming_languages']); ?></td>
            <td><?php echo htmlspecialchars($row['technologies_and_frameworks']); ?></td>
            <td>
                <a href="editRegistration.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="deleteRegistration.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
