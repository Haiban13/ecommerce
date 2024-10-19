<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    @vite('resources/css/app.css')
</head>
<body>
<div class="flex-col   w-screen   h-screen   justify-between items-center   ">
@include('components.navbar2')
@if(isset($unpaid))
            <h1>unpaid</h1>
        @else  
        <div class="text-center w-full h-fit flex items-center justify-center flex-col mt-48">
            <ion-icon name="bag-remove-outline" class="text-zinc-400"></ion-icon>
            <h2 class="text-zinc-400">unpaid empty</h2>
        </div>
        @endif
</div>
</body>
</html>