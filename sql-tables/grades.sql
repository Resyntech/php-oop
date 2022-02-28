CREATE TABLE grades(
    student_id int not null REFERENCES students(student_id),
    -- teacher_id int not null REFERENCES teachers(teacher_id),
    subject_id int not null REFERENCES subjects(subject_id),
    grade int(3),
    primary key(student_id, subject_id)
);

INSERT INTO grades (student_id, subject_id, grade) VALUES (1, 101, 80);

SELECT subject_id, grade FROM `grades` WHERE student_id = 1;
