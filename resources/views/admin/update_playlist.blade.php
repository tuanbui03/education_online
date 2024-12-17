<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Playlist</title>
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
            <h1>Update Playlist</h1>
            <form>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter playlist title">
                </div>
                <div class="mb-3">
                    <label for="createdAt" class="form-label">Created At</label>
                    <input type="date" class="form-control" id="createdAt">
                </div>
                <div class="mb-3">
                    <label for="updatedAt" class="form-label">Updated At</label>
                    <input type="date" class="form-control" id="updatedAt">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>