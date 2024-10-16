<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</head>
<body class="h-screen flex  w-screen flex-col justify-between items-center content-center">
    @include('components.navbar')
    <div class="flex items-center flex-row md:h-5/6 md:w-10/12 justify-center w-full h-full">
        @auth

            @include('page.account')
        
        @else
            @include('components.login')
        
        @endauth
    </div>
</body>
</html>