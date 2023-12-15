<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel + React</title>
    <link rel="stylesheet" href="{{ asset('build/assets/app-4e5c0698.css') }}">
    <link rel="shortcut icon" href="{{ asset('laravel.ico') }}" type="image/x-icon">
</head>

<body>
    <div class="min-vh-100 d-flex justify-content-center align-items-center bg-primary">
        <div class="d-flex flex-column bg-white p-5 rounded-3 shadow-lg">
            <div class="d-flex justify-content-center grid gap-2">
                <a href="https://www.laravel.com" class="text-decoration-none" target="blank">
                    <img src="{{ asset('laravel.ico') }}" alt="Laravel" height="128" width="128">
                </a>
                <a href="https://www.react.dev" class="text-decoration-none" target="blank">
                    <img src="{{ asset('react.ico') }}" alt="ReactJS">
                </a>
            </div>
            <div id="hello-react"></div>
            <div id="counter"></div>
            <div class="mt-2">Please Click Laravel or React Icon For More Information</div>
        </div>
    </div>
    <script src="{{ asset('build/assets/app-590a37e8.js') }}"></script>
</body>

</html>
