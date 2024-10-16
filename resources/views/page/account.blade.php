<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body class="overflow-x-hidden    " >
 
    
    @include('components.navbar')
    <div class="   h-screen w-screen flex items-center justify-center content-center flex-col ">
        @include('components.account')
        

    </div>

    
    <div>

    </div>
</body>
</html>