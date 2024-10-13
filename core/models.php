<!-- Functions for interacting with the database -->

<?php 

require_once 'dbConfig.php';

function insertIntoRegistration($pdo, $full_name, $email_address, $phone_number, $linkedin_profile, $github_profile, $current_job_title, $years_of_experience, $primary_programming_languages, $technologies_and_frameworks) {
    $sql = "INSERT INTO Registration (full_name, email_address, phone_number, linkedin_profile, github_profile, current_job_title, years_of_experience, primary_programming_languages, technologies_and_frameworks) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$full_name, $email_address, $phone_number, $linkedin_profile, $github_profile, $current_job_title, $years_of_experience, $primary_programming_languages, $technologies_and_frameworks]);
    if ($executeQuery) {
        return true;    
    }
}

function seeAllRegistrations($pdo) {
    $sql = "SELECT * FROM Registration";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute();
    if ($executeQuery) {
        return $stmt->fetchAll();
    }
}

function getRegistrationByID($pdo, $id) {
    $sql = "SELECT * FROM Registration WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$id])) {
        return $stmt->fetch();
    }
}

function updateRegistration($pdo, $id, $full_name, $email_address, $phone_number, $linkedin_profile, $github_profile, $current_job_title, $years_of_experience, $primary_programming_languages, $technologies_and_frameworks) {
    $sql = "UPDATE Registration SET full_name = ?, email_address = ?, phone_number = ?, linkedin_profile = ?, github_profile = ?, current_job_title = ?, years_of_experience = ?, primary_programming_languages = ?, technologies_and_frameworks = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$full_name, $email_address, $phone_number, $linkedin_profile, $github_profile, $current_job_title, $years_of_experience, $primary_programming_languages, $technologies_and_frameworks, $id]);
    if ($executeQuery) {
        return true;
    }
}

function deleteRegistration($pdo, $id) {
    $sql = "DELETE FROM Registration WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$id]);
    if ($executeQuery) {
        return true;
    }
}

?>
