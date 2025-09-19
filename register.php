<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background-color: #f8f9fa; }
    .container { max-width: 500px; margin-top: 50px; }
  </style>
</head>
<body>
<div class="container">
  <div class="card shadow-lg p-4">
    <h2 class="text-center mb-4">Registration Form</h2>
    <form method="post" action="process.php" class="needs-validation" novalidate>
      
      <!-- First Name -->
      <div class="mb-3">
        <label for="firstname" class="form-label">First Name</label>
        <input type="text" name="firstname" id="firstname" class="form-control" required>
        <div class="invalid-feedback">Please enter your first name.</div>
      </div>

      <!-- Last Name -->
      <div class="mb-3">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text" name="lastname" id="lastname" class="form-control" required>
        <div class="invalid-feedback">Please enter your last name.</div>
      </div>
      
      <!-- Email -->
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" id="email" class="form-control" required>
        <div class="invalid-feedback">Please enter a valid email.</div>
      </div>
      
      <!-- Password -->
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control" minlength="6" required>
        <div class="invalid-feedback">Password must be at least 6 characters.</div>
      </div>
      
      <!-- Submit -->
      <button type="submit" class="btn btn-primary w-100">Register</button>
    </form>
  </div>
</div>

<script>
// Bootstrap client-side validation
(() => {
  'use strict'
  const forms = document.querySelectorAll('.needs-validation')
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
</body>
</html>
