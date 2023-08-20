-- roles table
CREATE TABLE roles (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) UNIQUE NOT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

-- users table
CREATE TABLE users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    email_verified_at TIMESTAMP NULL,
    password VARCHAR(255) NOT NULL,
    role_id INT UNSIGNED DEFAULT 1,
    avatar VARCHAR(255),
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (role_id) REFERENCES roles(id)
);

-- user_profiles table
CREATE TABLE user_profiles (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id INT UNSIGNED,
    bio TEXT,
    birthdate DATE,
    location VARCHAR(255),
    website VARCHAR(255),
    gender ENUM('male', 'female', 'other'),
    phone VARCHAR(255),
    interests VARCHAR(255),
    occupation VARCHAR(255),
    timezone VARCHAR(255),
    remember_token VARCHAR(100),
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- user_device_info table
CREATE TABLE user_device_info (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id INT UNSIGNED,
    ip_address VARCHAR(45),
    user_region VARCHAR(255),
    mobile_carrier VARCHAR(255),
    advertising_id VARCHAR(255),
    device_model VARCHAR(255),
    device_system VARCHAR(255),
    network_type VARCHAR(255),
    device_id VARCHAR(255),
    screen_resolution VARCHAR(255),
    operating_system VARCHAR(255),
    app_and_file_info TEXT,
    key_stroke_patterns TEXT,
    battery_state VARCHAR(255),
    audio_settings VARCHAR(255),
    connected_audio_devices VARCHAR(255),
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- user_full_info table
CREATE TABLE user_full_info (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id INT UNSIGNED,
    location VARCHAR(255),
    website VARCHAR(255),
    gender ENUM('male', 'female', 'other'),
    phone VARCHAR(255),
    interests VARCHAR(255),
    occupation VARCHAR(255),
    about TEXT,
    education VARCHAR(255),
    language VARCHAR(255),
    skills VARCHAR(255),
    social_links VARCHAR(255),
    hobbies VARCHAR(255),
    family_status VARCHAR(255),
    relationship_status VARCHAR(255),
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
);



-- -------------------------------------------
-- Inserting roles
-- Insert data into roles table
INSERT INTO roles (name, created_at, updated_at) VALUES
    ('admin', NOW(), NOW()),
    ('user', NOW(), NOW()),
    ('editor', NOW(), NOW());

-- Insert data into users table
INSERT INTO users (name, email, email_verified_at, password, role_id, avatar, created_at, updated_at) VALUES
    ('John Doe', 'john@example.com', NULL, 'hashed_password_here', 1, 'avatar.jpg', NOW(), NOW()),
    ('Jane Smith', 'jane@example.com', NULL, 'hashed_password_here', 2, 'avatar.jpg', NOW(), NOW());

-- Insert data into user_profiles table
INSERT INTO user_profiles (user_id, bio, birthdate, location, website, gender, phone, interests, occupation, timezone, remember_token, created_at, updated_at) VALUES
    (1, 'Bio for John Doe', '1990-01-15', 'New York', 'https://johndoe.com', 'male', '123-456-7890', 'Sports', 'Developer', 'UTC', NULL, NOW(), NOW()),
    (2, 'Bio for Jane Smith', '1985-05-20', 'Los Angeles', 'https://janesmith.com', 'female', '987-654-3210', 'Travel', 'Writer', 'UTC', NULL, NOW(), NOW());

-- Insert data into user_device_info table
INSERT INTO user_device_info (user_id, ip_address, user_region, mobile_carrier, advertising_id, device_model, device_system, network_type, device_id, screen_resolution, operating_system, app_and_file_info, key_stroke_patterns, battery_state, audio_settings, connected_audio_devices, created_at, updated_at) VALUES
    (1, '192.168.1.1', 'USA', 'Verizon', 'advertising_id_here', 'iPhone X', 'iOS', '4G', 'device_id_here', '1080x1920', 'iOS 14', 'info_here', 'patterns_here', '100%', 'High', 'Headphones', NOW(), NOW()),
    (2, '192.168.1.2', 'USA', 'AT&T', 'advertising_id_here', 'Samsung Galaxy S10', 'Android', '5G', 'device_id_here', '1440x2560', 'Android 11', 'info_here', 'patterns_here', '90%', 'Low', 'Speakers', NOW(), NOW());

-- Insert data into user_full_info table
INSERT INTO user_full_info (user_id, location, website, gender, phone, interests, occupation, about, education, language, skills, social_links, hobbies, family_status, relationship_status, created_at, updated_at) VALUES
    (1, 'New York', 'https://johndoe.com', 'male', '123-456-7890', 'Sports', 'Developer', 'About John Doe', 'Computer Science', 'English', 'PHP, JavaScript', 'https://linkedin.com/johndoe', 'Hiking', 'Single', 'In a relationship', NOW(), NOW()),
    (2, 'Los Angeles', 'https://janesmith.com', 'female', '987-654-3210', 'Travel', 'Writer', 'About Jane Smith', 'Literature', 'English', 'Writing, Editing', 'https://linkedin.com/janesmith', 'Painting', 'Married', 'Married', NOW(), NOW());

