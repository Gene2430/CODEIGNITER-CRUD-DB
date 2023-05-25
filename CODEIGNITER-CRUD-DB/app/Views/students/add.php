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
</style>
</head>

<body>
    <div class="container">
        <h1>Add Student</h1>
        <form action="/students/store" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="studentName" class="form-label">Student Name</label>
                <input type="text" class="form-control" name="studentName">
            </div>
            <div class="form-group">
                <label for="studentNum" class="form-label">Student Number</label>
                <input type="text" class="form-control" name="studentNum" value="<?= $studentNumber; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="studentSection" class="form-label">Student Section</label>
                <input type="text" class="form-control" name="studentSection">
            </div>
            <div class="form-group">
                <label for="studentCourse" class="form-label">Student Course</label>
                <input type="text" class="form-control" name="studentCourse">
            </div>

            <div class="form-group">
                <label for="studentLevel" class="form-label">Student Year Level</label>
                <input type="text" class="form-control" name="studentLevel">
            </div>
            <div class="form-group">
                <label for="studentProfile" class="form-label">Student Profile</label>
                <input type="file" class="form-control" name="studentProfile">
            </div>
            <div class="submit-btn">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <?php $this->endSection(); ?>