<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="bg-light p-3" style="width: 250px; height: 100vh;">
            <h4 class="text-center">Admin Panel</h4>
            <ul class="nav flex-column mt-4">
                <li class="nav-item mb-2 dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Teachers</a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">View All</a></li>
                        <li><a href="#" class="dropdown-item">Add New</a></li>
                        <li><a href="#" class="dropdown-item">Edit</a></li>
                        <li><a href="#" class="dropdown-item">Delete</a></li>
                    </ul>
                </li>
                <li class="nav-item mb-2 dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Courses</a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">View All</a></li>
                        <li><a href="#" class="dropdown-item">Add New</a></li>
                        <li><a href="#" class="dropdown-item">Edit</a></li>
                        <li><a href="#" class="dropdown-item">Delete</a></li>
                    </ul>
                </li>
                <li class="nav-item mb-2 dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Playlists</a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">View All</a></li>
                        <li><a href="#" class="dropdown-item">Add New</a></li>
                        <li><a href="#" class="dropdown-item">Edit</a></li>
                        <li><a href="#" class="dropdown-item">Delete</a></li>
                    </ul>
                </li>
                <li class="nav-item mb-2 dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Users</a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">View All</a></li>
                        <li><a href="#" class="dropdown-item">Add New</a></li>
                        <li><a href="#" class="dropdown-item">Edit</a></li>
                        <li><a href="#" class="dropdown-item">Delete</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="flex-grow-1 p-4">
            <h1>Update User</h1>
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="username" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="username" name="username" value="John Doe" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="abc@gmail.com" required>
                </div>
                <div class="mb-3">
                    <label for="fullname" class="form-label">Name</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" value="B A T" required>
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <input type="text" class="form-control" id="role" name="role" value="user" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
