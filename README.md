# Fridaynotes
FridayNotes
INTRODUCTION
Notes Sharing System is a platform for Peer-to-Peer Notes sharing, where faculties, Students, and institutes share their class notes with other students. This project aims to remove dictation from Classroom and bind the students and teachers(educators) community worldwide into a single platform where they can Learn, Share and Educate each other. Students can find notes for all their subjects relevant to their syllabus prepared by faculties of their own university. They can connect with the faculty, get their doubts cleared and prepare well for both universities, placements, competitive exams and improve their knowledge and understanding of the concept.

For a full description of the module, visit the project page: https://www.fridaynotes.rf.gd

To submit bug reports and feature suggestions, or track changes: jaikrishnaverma@gmail.com

#FEATURES
----------
Personalised Student and teacher profile.
Resume your studies directly from where you left last time.
Take notes offline, download all the notes for reading even if the internet is not available.
Learn Share Educate with us and enjoy the Open Learning Platform.
REQUIREMENTS
This module requires the following modules:

*WAMP Server install & put the project file in www folder *you have to knowledge of php & mysql and html,css,js *windows operating system

MODULES:
--------
 Visitor(Guest User) Visitors can visit, view and download any reference study material in an easy and simplified manner. Only registered member can upload study material in (pdf) format. Visitors can becomes registered user and create their profile after Successful Sign Up.  Registered User: Registered User or verified users can login with their Username & Password and open their profile. Only verified user can upload notes on this platform. Verified member can view , update and modify their profile & resources. Verified user can share their profile link on social media.  Search: Users can search notes by using search bar. On typing topic name or department name or subject name.  Profile: Verified User can manage their profile and see what data he/she uploaded at what time. Verified user can also edit there profile status. Verified user can add profile pic on their profile to introduce yourself to other users.

DATABASE
--------
-- Database: notes
-- -------------------------------------------------------- -- Table structure for table uploads --DROP TABLE IF EXISTS uploads; CREATE TABLE IF NOT EXISTS uploads ( file_id int(11) NOT NULL AUTO_INCREMENT, file_name varchar(225) NOT NULL, file_description text, file_type varchar(225) DEFAULT 'pdf', file_uploader varchar(225) NOT NULL, file_uploaded_on timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, file_uploaded_to varchar(225) NOT NULL, file varchar(225) NOT NULL, status varchar(225) NOT NULL DEFAULT 'not approved yet', thumbnail varchar(100) NOT NULL DEFAULT 'thumb.jpg', PRIMARY KEY (file_id) ) ENGINE=MyISAM AUTO_INCREMENT=324 DEFAULT CHARSET=latin1; ---- Dumping data for table uploads
INSERT INTO uploads (file_id, file_name, file_description, file_type, file_uploader, file_uploaded_on, file_uploaded_to, file, status, thumbnail) VALUES (57, 'demo previer', 'demo', 'pdf', 'user', '2017-07-19 05:08:23', 'Computer Science', '578090.pdf', 'approved', ''), (56, 'teacher3 demo', 'It's generally recommended to move all styles to external style sheets for ease of updating, clarity for future developers, and to separate content types (HTML != CSS). If at all possible, move the styles on #left to an external CSS file.It's generally recommended to move all styles to external style sheets for ease of updating, clarity for future developers, and to separate content types (HTML != CSS). If at all possible, move the styles on #left to an external CSS file.', 'txt', 'teacher2', '2021-03-20 04:39:16', 'Mechanical', '565834.txt', 'approved', ''), (55, 'teacher title', 'demo desc', 'zip', 'teacher', '2017-07-22 06:02:02', 'Mechanical', '898387.zip', 'approved', ''), (58, 'phpp demo', 'ppph demo', 'pdf', 'anirban', '2021-03-20 04:37:49', 'Computer Science', '69321.pdf', 'approved', ''),

---- Table structure for table users --DROP TABLE IF EXISTS users; CREATE TABLE IF NOT EXISTS users ( id int(11) NOT NULL AUTO_INCREMENT, username varchar(225) NOT NULL, about varchar(300) NOT NULL DEFAULT 'N/A', email varchar(225) NOT NULL, gender varchar(225) DEFAULT NULL, password varchar(225) NOT NULL, course varchar(225) DEFAULT NULL, college varchar(100) DEFAULT NULL, image varchar(300) NOT NULL DEFAULT 'profile.jpg', joindate timestamp NULL DEFAULT CURRENT_TIMESTAMP, usertype varchar(100) NOT NULL DEFAULT 'student', PRIMARY KEY (id), UNIQUE KEY username (username) ) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1; ---- Dumping data for table users
