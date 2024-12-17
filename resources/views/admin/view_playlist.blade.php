<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Playlists</title>
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
            <h1>Playlists</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Playlist 1</td>
                        <td>2024-01-01</td>
                        <td>2024-01-10</td>
                    </tr>
                    <tr>
                        <td>Playlist 2</td>
                        <td>2024-02-01</td>
                        <td>2024-02-15</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
