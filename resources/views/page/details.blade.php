<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite('resources/css/app.css')
    <style>
        input[type="radio"]:checked + label {
            background-color:  #342334;
            color: white; /* Light gray background */
             

        }
    </style>
</head>
<body class="overflow-x-hidden  lg:overflow-y-hidden     h-screen md:h-screen">
@include('components.navbar2')
    <div class=" flex md:h-full w-screen justify-center md:items-center  flex-col lg:flex-row ">
        <!-- for image -->
        <div class="  flex  justify-center  md:w-7/12  w-screen h-screen ">
            <div class="bg-slate-600 mt-5 flex w-5/6 h-3/4 "> </div>
        </div>
        
        <!-- for attributes -->
        <form class=" bg-zinc-50 flex-row w-5/12 md:w-screen pl-10 pr-10 pt-5" action="" method="POST">
            @csrf 
            <h1 class="text-6xl font-bold font-mono w-fit">{{$data['name']}}</h1>
            <br>
            <h1 class="flex  w-80 md:w-auto ">{{$data['description']}}</h1>
            <br>
            <h1 class="text-4xl font-bold font-mono">Rp {{$data['price']}}</h1>
            <br>
            <h1 class="  font-bold font-mono">Size</h1> 
            <div class="flex w-72 ">
                
                <!-- loop here -->
                <input type="radio" name="size" value="s" id="size-s" class="rounded-sm w-0  fixed "><label for="size-s"  class="w-20 h-10 pt-0 mr-1 flex justify-center items-center border-2 border-slate-800">S</label>
                <input type="radio" name="size" value="l" id="size-l" class="rounded-sm w-0  fixed "><label for="size-l"  class="w-20 h-10 pt-0 mr-1 flex justify-center items-center border-2 border-slate-800">L</label>
                <input type="radio" name="size" value="m" id="size-m" class="rounded-sm w-0  fixed "><label for="size-m"  class="w-20 h-10 pt-0 mr-1 flex justify-center items-center border-2 border-slate-800">M</label>
                <input type="radio" name="size" value="xl" id="size-xl" class="rounded-sm w-0  fixed "><label for="size-xl"  class="w-20 h-10 pt-0 mr-1 flex justify-center items-center border-2 border-slate-800">XL</label>
                <input type="radio" name="size" value="xxl" id="size-xxl" class="rounded-sm w-0  fixed "><label for="size-xxl"  class="w-20 h-10 pt-0 mr-1 flex justify-center items-center border-2 border-slate-800">XXL</label>
            </div>
            <br>
            <h1 class="  font-bold font-mono">Quantity</h1> 
            <input type="number" name="price" class="border-2 border-zinc-800">
            <br>
            <button type="submit" class="bg-zinc-800 w-full h-10 text-white my-7">Checkout</button>
    </form>
 
    </div>
</body>
</html>
