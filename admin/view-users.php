<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<div class="d-flex justify-content-center align-items-center vh-100">
    <form class="p-4 border rounded shadow" style="width: 500px; background-color: #f8f9fa;">
        <div class=" mb-4">
            <!-- People Logo -->
            <i class="bi bi-person-circle" style="font-size: 4rem; color: #6c757d;"></i>
        </div>
        <div class="mb-3 text-start">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" disabled>
        </div>
        <div class="mb-3 text-start">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" disabled>
        </div>
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </div>
    </form>
</div>

<!-- Bootstrap JS (optional, for interactive components) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
