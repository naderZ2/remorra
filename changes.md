CREATE TABLE talent_applications (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(50) NOT NULL,
    city_of_residence VARCHAR(100) NOT NULL,
    linkedin_profile VARCHAR(255) NOT NULL,
    current_role VARCHAR(255) NOT NULL,
    years_of_experience INT NOT NULL,
    technical_skills TEXT NOT NULL,
    english_proficiency ENUM('Beginner', 'Intermediate', 'Advanced', 'Fluent/Native') NOT NULL,
    cv_path VARCHAR(255) NOT NULL,
    portfolio_url VARCHAR(255) NULL,
    availability ENUM('Immediately', 'Within 2 Weeks', 'Within 1 Month', 'Other') NOT NULL,
    start_date DATE NULL,
    referral_source ENUM('LinkedIn', 'Referral', 'Google', 'Social Media', 'Other') NOT NULL,
    created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


CREATE TABLE talent_requests (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    company_name VARCHAR(255) NOT NULL,
    company_website VARCHAR(255) NULL,
    contact_person_name VARCHAR(255) NOT NULL,
    contact_email VARCHAR(255) NOT NULL,
    contact_phone VARCHAR(50) NULL,
    job_title VARCHAR(255) NOT NULL,
    number_of_positions INT DEFAULT 1,
    experience_level ENUM('Junior', 'Mid-Level', 'Senior', 'Lead') NOT NULL,
    employment_type ENUM('Full-Time', 'Part-Time', 'Project-Based') NOT NULL,
    contract_duration ENUM('3 months', '6 months', '12 months', 'Other') NOT NULL,
    expected_start_date DATE NULL,
    timezone_preference ENUM('GMT+0', 'GMT+1', 'GMT+2', 'GMT+3', 'Flexible') NOT NULL,
    preferred_working_hours VARCHAR(100) NULL,
    required_skills TEXT NOT NULL,
    nice_to_have_skills TEXT NULL,
    tools_used TEXT NULL,
    language_requirements ENUM('English', 'Arabic', 'Both', 'Other') NOT NULL,
    certifications_required VARCHAR(255) NULL,
    budget_range ENUM('<$1,500', '$1,500-$2,500', '$2,500-$4,000', '>$4,000') NULL,
    job_description TEXT NULL,
    company_policies TEXT NULL,
    heard_about ENUM('LinkedIn', 'Referral', 'Google', 'Social Media', 'Other') NOT NULL,
    additional_notes TEXT NULL,
    agree_terms BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);



CREATE TABLE schedule_meeting(
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    time DATETIME NOT NULL,
    notes TEXT NULL,
    created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


ALTER TABLE talent_applications
DROP COLUMN city_of_residence,
ADD COLUMN city_id BIGINT UNSIGNED NOT NULL,
ADD COLUMN risen_id BIGINT UNSIGNED NULL