CREATE TABLE FullStackDeveloperRegistration (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email_address VARCHAR(255) NOT NULL,
    phone_number VARCHAR(20),
    linkedin_profile VARCHAR(255),
    github_profile VARCHAR(255),
    current_job_title VARCHAR(100),
    years_of_experience INT,
    primary_programming_languages VARCHAR(255),
    technologies_and_frameworks VARCHAR(255)
);
