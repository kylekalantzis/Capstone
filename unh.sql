DROP DATABASE IF EXISTS UNHStudents;
CREATE DATABASE UNHStudents;

USE UNHStudents;

CREATE TABLE Students
(
    `id` INT(10) PRIMARY KEY AUTO_INCREMENT,
    `Name` VARCHAR(200) NOT NULL,
    `Phone_number` CHAR(10) NOT NULL,
    `Address` VARCHAR(200) NOT NULL,
    `Email` VARCHAR(200) NOT NULL,
    `DOB` DATE,
    `Major` VARCHAR(200) NOT NULL,
    `Year` VARCHAR(20) NOT NULL

);

CREATE TABLE Courses
(
    `Course_id` VARCHAR(30) PRIMARY KEY,
    `Course_name` VARCHAR(100) NOT NULL
);

CREATE TABLE Grades
(
    `id` INT(10),
    `Course_id` VARCHAR(30),
    `Grade` DECIMAL(5, 2) NOT NULL,
    `Letter` VARCHAR(2) NOT NULL,
    FOREIGN KEY (id) REFERENCES Students(id),
    FOREIGN KEY (Course_id) REFERENCES Courses(Course_id)
);

CREATE TABLE Financial
(
    `id` INT(10),
    `Social` INT(9) NOT NULL,
    `Amount_owed` DECIMAL(50) NOT NULL,
    FOREIGN KEY (id) REFERENCES Students(id)
);

CREATE TABLE Users
(
    `id` INT(10),
    `Username` VARCHAR(50) NOT NULL UNIQUE,
    `Password` VARCHAR(200) NOT NULL,
    FOREIGN KEY (id) REFERENCES Students(id)
);


INSERT INTO Students (Name, Phone_number, Address, Email, DOB, Major, Year)
VALUES
('Iolanthe Commings', '1667807951', '9495 Chinook Parkway', 'icommings0@cpanel.net', '1998-11-27', 'Biology', 'Senior'),
('Ira Deverick', '5524576369', '53273 Thackeray Circle', 'ideverick1@stumbleupon.com', '2002-02-11', 'Accounting', 'Sophomore'),
('Krishna Telford', '9466626286', '9 Cordelia Drive', 'ktelford2@intel.com', '1999-09-08', 'Psychology', 'Junior'),
('Hasty Balazs', '3936194440', '488 Oneill Street', 'hbalazs3@sourceforge.net', '1993-09-28', 'Communications', 'Freshman'),
('Myrtie Crickmer', '8014532352', '571 Elka Avenue', 'mcrickmer4@i2i.jp', '2000-04-20', 'Sports Medicine', 'Sophomore'),
('Odette Palffy', '1811309796', '92 Monument Pass', 'opalffy5@wikimedia.org', '2001-12-09', 'Computer Science', 'Freshman'),
('Polly Wakelam', '4928583670', '8570 Starling Alley', 'pwakelam6@goo.gl', '1998-08-08', 'Data Science', 'Senior'),
('Maurie Rupke', '6571663258', '250 Havey Crossing', 'mrupke7@angelfire.com', '1999-01-30', 'Marketing', 'Junior'),
('Issie Haney', '7808536709', '3223 Reindahl Trail', 'ihaney8@samsung.com', '2000-10-17', 'History', 'Sophomore'),
('Winfield Weeden', '1666098782', '47 Menomonie Circle', 'wweeden9@csmonitor.com', '1993-11-04', 'Electrical Engineer', 'Senior'),
('Hakim Spurritt', '8992066533', '30 Esch Trail', 'hspurritta@berkeley.edu', '2000-02-11', 'Biotechnology', 'Junior'),
('Carry Howick', '1079219816', '43287 Prairieview Drive', 'chowickb@google.com.hk', '1999-10-13', 'Business Admin', 'Senior'),
('Hayyim Alliban', '6525700651', '4 Garrison Center', 'hallibanc@360.cn', '2000-01-30', 'Spanish', 'Sophomore'),
('Flss Baldini', '5052034162', '30 Algoma Way', 'fbaldinid@yolasite.com', '1998-02-20', 'Accounting', 'Senior'),
('Omero Bowcock', '3336361934', '29952 Buhler Crossing', 'obowcocke@so-net.ne.jp', '2001-12-31', 'Marketing', 'Freshman'),
('Marin Jankowski', '7267016636', '34378 American Drive', 'mjankowskif@sitemeter.com', '1997-05-05', 'Communications', 'Sophomore'),
('Palmer Junkinson', '2009004392', '8 Forest Dale Parkway', 'pjunkinsong@cnet.com', '2002-09-04', 'Computer Science', 'Freshman'),
('Albertine Januszewicz', '1329683928', '2 Hermina Street', 'ajanuszewiczh@ucla.edu', '2001-08-10', 'Education', 'Sophomore'),
('Woodie Braidley', '8675525320', '812 Hudson Street', 'wbraidleyi@usatoday.com', '1999-05-06', 'Cybersecurity', 'Senior'),
('Pepito Devil', '7265974977', '970 Mitchell Hill', 'pdevilj@gnu.org', '2001-02-09', 'Computer Science', 'Sophomore');

INSERT INTO Courses (Course_id, Course_name)
VALUES
('BMS 503', 'General Microbiology'),
('BUS 530', 'Personal Finance'),
('COMP 430', 'Systems Fundamentals'),
('ENGL 401', 'First Year Writing'),
('ET 421', 'Digital Electronics'),
('MATH 425', 'Calculus I'),
('SPAN 402', 'Elementary Spanish II'),
('USMT 599', 'Special Topics'),
('HLS 410', 'Introduction to Homeland Security'),
('ANTH 411', 'Introduction to Anthropology'),
('CA 527', 'History of Film'),
('CHEM 404', 'General Chemistry');


-- Each student takes 4 classes
INSERT INTO Grades (id, Course_id, Grade, Letter)
VALUES
('1', 'COMP 430', '90', 'A'),
('1', 'BUS 530', '87', 'B+'),
('1', 'ENGL 401', '81', 'B'),
('1', 'USMT 599', '96', 'A+'),
('2', 'ANTH 411', '90', 'A'),
('2', 'CA 527', '78', 'C+'),
('2', 'SPAN 402', '82', 'B'),
('2', 'ENGL 401', '97', 'A+'),
('3', 'ET 421', '89', 'B+'),
('3', 'MATH 425', '83', 'B'),
('3', 'BMS 503', '85', 'B'),
('3', 'HLS 410', '90', 'A'),
('4', 'USMT 599', '98', 'A+'),
('4', 'SPAN 402', '85', 'B'),
('4', 'CHEM 404', '74', 'C'),
('4', 'BUS 530', '83', 'B'),
('5', 'COMP 430', '91', 'A'),
('5', 'BMS 503', '87', 'B+'),
('5', 'ANTH 411', '83', 'B'),
('5', 'ENGL 401', '86', 'B+'),
('6', 'ET 421', '98', 'A+'),
('6', 'CHEM 404', '86', 'B+'),
('6', 'MATH 425', '87', 'B+'),
('6', 'SPAN 402', '84', 'B'),
('7', 'USMT 599', '99', 'A+'),
('7', 'COMP 430', '94', 'A'),
('7', 'BUS 530', '98', 'A+'),
('7', 'ANTH 411', '93', 'A'),
('8', 'CA 527', '81', 'B'),
('8', 'HLS 410', '86', 'B+'),
('8', 'ET 421', '78', 'C+'),
('8', 'SPAN 402', '74', 'C'),
('9', 'MATH 425', '65', 'D'),
('9', 'USMT 599', '76', 'C+'),
('9', 'BUS 530', '86', 'B+'),
('9', 'BMS 503', '78', 'C+'),
('10', 'CHEM 404', '83', 'B'),
('10', 'ENGL 401', '96', 'A+'),
('10', 'ET 421', '84', 'B'),
('10', 'SPAN 402', '79', 'C+'),
('11', 'HLS 410', '87', 'B+'),
('11', 'USMT 599', '89', 'B+'),
('11', 'COMP 430', '87', 'B+'),
('11', 'ET 421', '83', 'B'),
('12', 'COMP 430', '58', 'F'),
('12', 'ET 421', '71', 'C'),
('12', 'MATH 425', '69', 'D'),
('12', 'CA 527', '76', 'C+'),
('13', 'ANTH 411', '87', 'B+'),
('13', 'HLS 410', '76', 'C+'),
('13', 'BMS 503', '94', 'A'),
('13', 'COMP 430', '91', 'A'),
('14', 'ENGL 401', '84', 'B'),
('14', 'CA 527', '91', 'A'),
('14', 'USMT 599', '98', 'A+'),
('14', 'ET 421', '87', 'B+'),
('15', 'COMP 430', '69', 'D+'),
('15', 'BMS 503', '86', 'B+'),
('15', 'MATH 425', '84', 'B'),
('15', 'CHEM 404', '79', 'C+'),
('16', 'CA 527', '85', 'B+'),
('16', 'MATH 425', '81', 'B'),
('16', 'SPAN 402', '86', 'B+'),
('16', 'BMS 503', '84', 'B'),
('17', 'SPAN 402', '79', 'C+'),
('17', 'ET 421', '84', 'B'),
('17', 'MATH 425', '89', 'B+'),
('17', 'COMP 430', '87', 'B+'),
('18', 'BUS 530', '78', 'C+'),
('18', 'ANTH 411', '86', 'B+'),
('18', 'CA 527', '88', 'B+'),
('18', 'CHEM 404', '80', 'B'),
('19', 'COMP 430', '90', 'A'),
('19', 'CA 527', '82', 'B'),
('19', 'USMT 599', '93', 'A'),
('19', 'HLS 410', '71', 'C'),
('20', 'ET 421', '70', 'C'),
('20', 'BMS 503', '86', 'B+'),
('20', 'COMP 430', '83', 'B'),
('20', 'MATH 425', '75', 'C+');
