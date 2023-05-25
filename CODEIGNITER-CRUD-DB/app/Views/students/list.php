<?php

$this->extend('layout/main');
$this->section('body');

?>
<?php if(session()->getFlashdata('success')) :?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
 

<style>
    body {
      padding: 20px;
    }

    .container {
      margin-top: 20px;
    }

    .add-student-btn {
      margin-bottom: 20px;
    }

    .form-container {
      background-color: #f8f9fa;
      padding: 20px;
      border-radius: 5px;
    }

    .student-profile img {
      max-width: 100px;
      height: auto;
    }

    .table {
      margin-bottom: 0;
    }

    .table th,
    .table td {
      vertical-align: middle;
    }
  </style>
</head>

<body>
  <div class="container">
    <form>
      <h1>Student List</h1>
      <div class="form-container">
        <div class="add-student-btn">
          <a href="/students/create" class="btn btn-primary">Add Students</a>
        </div>
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Student Name</th>
              <th scope="col">Student Number</th>
              <th scope="col">Student Section</th>
              <th scope="col">Student Course</th>
              <!-- <th scope="col">Student Batch</th> -->
              <th scope="col">Student Year Level</th>
              <th scope="col">Student Profile</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($students as $student) : ?>
              <tr>
                <th scope="row"><?= $student['id']; ?></th>
                <td><?= $student['student_name']; ?></td>
                <td><?= $student['student_id']; ?></td>
                <td><?= $student['student_section']; ?></td>
                <td><?= $student['student_course']; ?></td>
               
                <td><?= $student['student_year_level']; ?></td>
                <td class="student-profile"><img src="/uploads/<?= $student['student_profile']; ?>" alt=""></td>
                <td>
                  <a href="/students/edit/<?= $student['id']; ?>" class="btn btn-primary">Edit</a>
                  <a href="/students/delete/<?= $student['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </form>
  </div>


<?php $this->endSection(); ?>