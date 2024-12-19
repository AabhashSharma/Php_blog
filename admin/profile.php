<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <?php include('Layouts//sidebar.php');?>
            <div class="col-lg-9">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Profile</h2>
                    <a href="create-post.php" class="btn btn-primary">
                        <i class="bi bi-plus"></i> Add New
                    </a>
                </div>
                <div class="rounded-circle bg-light d-flex justify-content-center align-items-center" style="width: 100px; height: 100px;">
          <i class="bi bi-person-circle" style="font-size: 3rem; color: gray;"></i>
        </div>
  <div class="mb-1">
  <label for="first name" class="form-label">First Name</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="First Name">
</div>
<div class="mb-1">
  <label for="email" class="form-label">Email</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email">
</div>  
<button type="button" class="btn btn-outline-secondary">Update Profile</button>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>