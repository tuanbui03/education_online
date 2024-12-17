<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
                    <a href="#" class="nav-link">Teachers</a>
                </li>
                <li class="nav-item mb-2 dropdown">
                    <a href="{{asset('admin/view_courses')}}" class="nav-link">Courses</a>
                </li>
                <li class="nav-item mb-2 dropdown">
                    <a href="{{asset('admin/view_playlist')}}" class="nav-link">Playlists</a>
                </li>
                <li class="nav-item mb-2 dropdown">
                    <a href="#" class="nav-link">Users</a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="flex-grow-1 p-4">
            <h1>Welcome to the Admin Dashboard</h1>
            <p>Select an option from the sidebar to get started.</p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
