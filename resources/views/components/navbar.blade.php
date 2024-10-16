<div class="w-screen  flex    h-16 md:h-20 bg-black  md:flex flex-row text-white  justify-end md:items-center md:justify-between  md:flex-row z-50      ">
  

        <div class=" ml-7   md:w-4/5 lg:w-auto  h-full flex items-center justify-start">

            <img src="{{'http://127.0.0.1:8000/storage/products/Untitled-1.png'}}" alt="" class="w-2/5 h-full object-contain ">
        </div>
        <div class=" z-50 h-full w-1/5 md:hidden flex items-center justify-start">

            <ion-icon name="menu-outline" onclick="menu(this)" class="  z-50 h-3/4 w-full md:hidden  "></ion-icon>
        </div>
        
        <ul class="w-2/3 md:w-2/4  hidden md:flex justify-evenly items-center py-24   h-full md:h-full flex-col md:flex-row backdrop-blur-sm md:backdrop-blur-none bg-black/55 z-40 md:bg-transparent absolute md:relative ">
            <li><a href="{{route('home')}}" class="text-l  ">Home</a></li>
            <li><a href="{{route('cart')}}" class="text-l  ">Cart</a></li>
            <li><a href="{{route('account')}}" class="text-l ">Account</a></li>
            <!-- <li><a href="{{route('about')}}">chat</a></li> -->

        </ul>

</div>

<script>
    function menu(e){
        var list=document.querySelector('ul')
        e.name=== 'menu'?( e.name="close-outline",list.classList.add('flex'),list.classList.remove('hidden')):(e.name="menu",list.classList.remove('flex'),list.classList.add('hidden'))
    }
</script>