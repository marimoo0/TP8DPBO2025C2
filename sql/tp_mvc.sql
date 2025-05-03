-- Create database
CREATE DATABASE IF NOT EXISTS tp_mvc;
USE tp_mvc;

-- Students table 
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `join_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Courses table (new)
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `credits` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Enrollments table 
CREATE TABLE IF NOT EXISTS `enrollments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `grade` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`),
  KEY `course_id` (`course_id`),
  CONSTRAINT `enrollments_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE,
  CONSTRAINT `enrollments_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert sample data
INSERT INTO `students` (`name`, `nim`, `phone`, `join_date`) VALUES
('Pebe', '12345678', '081234567890', '2024-09-01'),
('Yasmin', '23456789', '082345678901', '2024-09-01'),
('Kana', '34567890', '083456789012', '2024-09-01');

INSERT INTO `courses` (`code`, `name`, `credits`) VALUES
('CS101', 'DPBO', 3),
('CS202', 'JARKOM', 4),
('CS303', 'IOT', 3);

INSERT INTO `enrollments` (`student_id`, `course_id`, `semester`, `grade`) VALUES
(1, 1, '2024/2025-1', 'A'),
(1, 2, '2024/2025-1', 'B+'),
(2, 1, '2024/2025-1', 'A-'),
(2, 3, '2024/2025-1', 'B'),
(3, 2, '2024/2025-1', 'A');