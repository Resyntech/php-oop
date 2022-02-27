DROP TABLE students;
CREATE TABLE students(
  student_id int AUTO_INCREMENT not null,
  student_course tinytext not null,
  student_pwd longtext not null,
  student_email varchar(64) not null,
  student_firstname varchar(64) not null,
  student_lastname varchar(64),
  primary key(student_id)
);