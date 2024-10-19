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
<body >
    <div class="w-screen h-screen flex flex-col ">
    @include('components.navbar2')

    
    @include('components.voucher.voucher')

    <div class="w-screen h-fit justify-center flex items-center mt-9"><div class="flex flex-col justify-center items-center" onclick="setpopup('voucher-popup')"><ion-icon name="add-circle-outline" class="w-10 h-10"></ion-icon> add</div></div>
   
        @include('components.voucher.createVoucher')
        @include('components.voucher.editVoucher')
 
    </div>

    <script>
    function setpopup(x){
        
        var element=document.getElementsByClassName(x)
        element[0].classList.contains('hidden') === true ?( element[0].classList.add('flex'),element[0].classList.remove('hidden')):(element[0].classList.remove('flex'),element[0].classList.add('hidden'))
    }


     
</script>
</body>
</html>