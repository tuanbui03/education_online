create database education_onl;
use education_onl;
-- Bảng user
CREATE TABLE user (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    full_name VARCHAR(100),
    role ENUM('student', 'teacher', 'admin') DEFAULT 'student',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Bảng teacher
CREATE TABLE teacher (
    teacher_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    bio TEXT,
    FOREIGN KEY (user_id) REFERENCES user(user_id) ON DELETE CASCADE
);

-- Bảng courses
CREATE TABLE courses (
    course_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT,
    teacher_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (teacher_id) REFERENCES teacher(teacher_id) ON DELETE CASCADE
);

-- Bảng playlist
CREATE TABLE playlist (
    playlist_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    course_id INT NOT NULL,
    title VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES user(user_id) ON DELETE CASCADE,
    FOREIGN KEY (course_id) REFERENCES courses(course_id) ON DELETE CASCADE
);

-- Bảng video
CREATE TABLE video (
    video_id INT AUTO_INCREMENT PRIMARY KEY,
    course_id INT NOT NULL,
    title VARCHAR(100) NOT NULL,
    url VARCHAR(255) NOT NULL,
    duration INT, -- duration in seconds
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (course_id) REFERENCES courses(course_id) ON DELETE CASCADE
);

-- Bảng comment
CREATE TABLE comment (
    comment_id INT AUTO_INCREMENT PRIMARY KEY,
    video_id INT NOT NULL,
    user_id INT NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (video_id) REFERENCES video(video_id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES user(user_id) ON DELETE CASCADE
);

-- Bảng playlist_video (bảng trung gian)
CREATE TABLE playlist_video (
    playlist_id INT NOT NULL,
    video_id INT NOT NULL,
    PRIMARY KEY (playlist_id, video_id),
    FOREIGN KEY (playlist_id) REFERENCES playlist(playlist_id) ON DELETE CASCADE,
    FOREIGN KEY (video_id) REFERENCES video(video_id) ON DELETE CASCADE
);

INSERT INTO user (username, password, email, full_name, role) VALUES
('student1', 'hashed_password1', 'student1@example.com', 'John Doe', 'student'),
('teacher1', 'hashed_password2', 'teacher1@example.com', 'Jane Smith', 'teacher'),
('admin1', 'hashed_password3', 'admin1@example.com', 'Admin User', 'admin');

INSERT INTO teacher (user_id, bio) VALUES
(2, 'A web programming teacher with over 5 years of experience.'),  -- user_id = 2 is teacher1
(2, 'Expert in HTML, CSS, and JavaScript.'),                       -- user_id = 2 is teacher1
(2, 'Passionate about teaching and sharing knowledge with students.');  -- user_id = 2 is teacher1

INSERT INTO courses (title, description, teacher_id) VALUES
('Basic HTML Course', 'This course will help you master the fundamentals of HTML.', 1),  -- teacher_id = 1
('Basic CSS Course', 'This course will help you master the fundamentals of CSS.', 1),   -- teacher_id = 1
('Basic JavaScript Course', 'This course will help you master the fundamentals of JavaScript.', 1);  -- teacher_id = 1

INSERT INTO playlist (user_id, course_id, title) VALUES
(1, 1, 'HTML Basics Playlist by John Doe'),  -- user_id = 1, course_id = 1
(1, 2, 'CSS Basics Playlist by John Doe'),   -- user_id = 1, course_id = 2
(1, 3, 'JavaScript Basics Playlist by John Doe');  -- user_id = 1, course_id = 3

INSERT INTO video (course_id, title, url, duration) VALUES
(1, 'Video 1: Introduction to HTML', 'http://example.com/video1', 300),  -- course_id = 1
(1, 'Video 2: Basic Structure of HTML', 'http://example.com/video2', 600),  -- course_id = 1
(2, 'Video 1: Introduction to CSS', 'http://example.com/video3', 400);  -- course_id = 2

INSERT INTO comment (video_id, user_id, content) VALUES
(1, 1, 'This video is very helpful!'),  -- video_id = 1, user_id = 1
(2, 1, 'I learned a lot from this video.'),  -- video_id = 2, user_id = 1
(3, 1, 'Thank you, teacher, for sharing this video!');  -- video_id = 3, user_id = 1

INSERT INTO playlist_video (playlist_id, video_id) VALUES
(1, 1),  -- playlist_id = 1, video_id = 1
(1, 2),  -- playlist_id = 1, video_id = 2
(2, 3);  -- playlist_id = 2, video_id = 3

ALTER TABLE user ADD updated_at TIMESTAMP NULL DEFAULT NULL;
ALTER TABLE playlist ADD updated_at TIMESTAMP NULL DEFAULT NULL;
ALTER TABLE courses ADD updated_at TIMESTAMP NULL DEFAULT NULL;