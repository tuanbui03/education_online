<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Education Online')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Meta Description -->
    <meta name="description" content="@yield('meta_description', 'Unicat Project')">

    <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{assets('css/style.css')}}">

</head>
<body>
    <div class="super_container">
        <!-- Include Header -->
        @include('components.header')

        <!-- Main Content -->
        @yield('content')

        <!-- Include Footer -->
        @include('components.footer')
    </div>

    <!-- Scripts -->
    <script src="{{asset('js/script.js')}}"></script>

</body>
</html>
