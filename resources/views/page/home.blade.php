<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    @vite('resources/css/app.css')
</head>
<body class=" bg-white    overflow-x-hidden ">
    <div class="top   flex flex-col w-screen  justify-self-center h-screen md:h-fit  items-center">
        @include('components.navbar')
        <div class="banner bg-zinc-600 w-11/12 my-10 md:h-60    lg:h-80   ml-5  mr-5 md:mr-9 h-2/3 rounded-lg bg-mobile md:bg-pc  bg-cover  ">    </div>
        <h1 class="text-xl font-bold font-mono flex items-center justify-center  ml-5  mr-9"> Be Unbound Be Bold</h1>
        <div class="h-1/6 w-screen my-6 flex justify-evenly ">
            @include('components.categoryCard')
             

        </div>
    </div>
    @include('components.categoryContainer')
    @include('components.footer')
    <script>


       
    </script>
</body>
</html>