<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Teacher</title>
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
            <h1>Update Teacher</h1>
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="John Doe" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="123 Main St, Cityville" required>
                </div>
                <div class="mb-3">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" value="1980-05-15" required>
                </div>
                <div class="mb-3">
                    <label for="avatar" class="form-label">Avatar</label>
                    <input type="file" class="form-control" id="avatar" name="avatar">
                    <img src="https://via.placeholder.com/100" alt="Avatar" class="img-thumbnail mt-2" style="max-width: 100px;">
                </div>
                <div class="mb-3">
                    <label for="playlist" class="form-label">Playlist</label>
                    <select class="form-select" id="playlist" name="playlist" required>
                        <option value="Playlist 1" selected>Playlist 1</option>
                        <option value="Playlist 2">Playlist 2</option>
                        <option value="Playlist 3">Playlist 3</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
