<?php 
require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewRegistrationBtn'])) {
    $full_name = trim($_POST['full_name']);
    $email_address = trim($_POST['email_address']);
    $phone_number = trim($_POST['phone_number']);
    $linkedin_profile = trim($_POST['linkedin_profile']);
    $github_profile = trim($_POST['github_profile']);
    $current_job_title = trim($_POST['current_job_title']);
    $years_of_experience = trim($_POST['years_of_experience']);
    $primary_programming_languages = trim($_POST['primary_programming_languages']);
    $technologies_and_frameworks = trim($_POST['technologies_and_frameworks']);

    if (!empty($full_name) && !empty($email_address)) {
        $query = insertIntoRegistration($pdo, $full_name, $email_address, $phone_number, $linkedin_profile, $github_profile, $current_job_title, $years_of_experience, $primary_programming_languages, $technologies_and_frameworks);
        if ($query) {
            header("Location: ../index.php");
        } else {
            echo "Insertion failed";
        }
    } else {
        echo "Make sure that no fields are empty";
    }
}

if (isset($_POST['editRegistrationBtn'])) {
    $id = $_GET['id'];
    $full_name = trim($_POST['full_name']);
    $email_address = trim($_POST['email_address']);
    $phone_number = trim($_POST['phone_number']);
    $linkedin_profile = trim($_POST['linkedin_profile']);
    $github_profile = trim($_POST['github_profile']);
    $current_job_title = trim($_POST['current_job_title']);
    $years_of_experience = trim($_POST['years_of_experience']);
    $primary_programming_languages = trim($_POST['primary_programming_languages']);
    $technologies_and_frameworks = trim($_POST['technologies_and_frameworks']);

    if (!empty($id) && !empty($full_name) && !empty($email_address)) {
        $query = updateRegistration($pdo, $id, $full_name, $email_address, $phone_number, $linkedin_profile, $github_profile, $current_job_title, $years_of_experience, $primary_programming_languages, $technologies_and_frameworks);
        if ($query) {
            header("Location: ../index.php");
        } else {
            echo "Update failed";
        }
    } else {
        echo "Make sure that no fields are empty";
    }
}

if (isset($_POST['deleteRegistrationBtn'])) {
    $query = deleteRegistration($pdo, $_GET['id']);
    if ($query) {
        header("Location: ../index.php");
    } else {
        echo "Deletion failed";
    }
}
?>
