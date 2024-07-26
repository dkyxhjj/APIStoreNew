<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>API Store</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #ADD8E6;
            /* Light background color */
            color: #000000;
            /* Dark text color */
        }

        .container {
            margin-top: 20px;
        }

        .alert {
            margin-top: 20px;
        }

        .navbar {
            background-color: #f8f9fa;
            color: #000;
        }

        .navbar a {
            color: #000;
        }

        .card-deck .card {
            flex: 1 1 auto;
            margin-bottom: 20px;
        }

        .card {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .card img {
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            flex-grow: 1;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 20px 0;
        }
    </style>
</head>

<body>
    @include('layout.navbar')
    <div class="container" style="margin-top: 5em">
        @yield('content')
    </div>

    @include('layout.footer')
</body>

</html>
