<?php

$this->extend('layout/main');
$this->section('body');

?>

<style>
body {
    background-color: #f8f9fa;
    font-family: Arial, sans-serif;
}

.container {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 4px;
    box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.1);
    margin-top: 50px;
}

.form-label {
    font-weight: bold;
}

.form-control {
    border: 1px solid #ced4da;
    border-radius: 4px;
    padding: 8px;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.form-control:focus {
    outline: none;
    border-color: #80bdff;
    box-shadow: 0px 0px 8px rgba(0, 123, 255, 0.3);
}

.submit-btn {
    text-align: center;
    margin-top: 20px;
}

.form-container {
    position: relative;
    padding: 20px;
    background-color: #fff;
    border-radius: 4px;
    box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.1);
}

.form-container::before {
    content: "";
    position: absolute;
    top: -10px;
    left: -10px;
    right: -10px;
    bottom: -10px;
    z-index: -1;
    box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.1);
}
</style>
</head>

<body>
    <div class="container">
        <h1>Edit Student</h1>
        <div class="form-container">
            <form action="/students/update/<?= $student['id']; ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="studentName" class="form-label">Student Name</label>
                    <input type="text" class="form-control" name="studentName" value="<?= $student['student_name']; ?>">
                </div>
                <div class="form-group">
                    <label for="studentNum" class="form-label">Student Number</label>
                    <input type="text" class="form-control" name="studentNum" value="<?= $student['student_id']; ?>"
                        readonly>
                </div>
                <div class="form-group">
                    <label for="studentSection" class="form-label">Student Section</label>
                    <input type="text" class="form-control" name="studentSection"
                        value="<?= $student['student_section']; ?>">
                </div>
                <div class="form-group">
                    <label for="studentCourse" class="form-label">Student Course</label>
                    <input type="text" class="form-control" name="studentCourse"
                        value="<?= $student['student_course']; ?>">
                </div>

                <div class="form-group">
                    <label for="studentLevel" class="form-label">Student Year Level</label>
                    <input type="text" class="form-control" name="studentLevel"
                        value="<?= $student['student_year_level']; ?>">
                </div>
                <div class="form-group">
                    <label for="studentProfile" class="form-label">Student Profile</label>
                    <input type="file" class="form-control" name="studentProfile"
                        value="<?= $student['student_name']; ?>">
                </div>
                <div class="submit-btn">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <?php $this->endSection(); ?>