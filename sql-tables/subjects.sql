CREATE TABLE subjects(
  subject_id int not null,
  subject_name tinytext not null,
  primary key(subject_id)
);

INSERT INTO subjects (subject_id, subject_name) VALUES (101, 'Filipino I');
INSERT INTO subjects (subject_id, subject_name) VALUES (102, 'Filipino II');
INSERT INTO subjects (subject_id, subject_name) VALUES (200, 'Math I');
INSERT INTO subjects (subject_id, subject_name) VALUES (201, 'Math II');

SELECT subject_name FROM `subjects` WHERE subject_id = 1;