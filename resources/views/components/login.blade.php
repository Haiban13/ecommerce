<div class=" flex w-11/12 md:h-4/5 md:w-1/3     h-3/4 justify-between items-center text-white bg-black flex-col ">
    <div class="     md:w-4/5 lg:w-auto flex-col  h-2/5 flex items-center text-center justify-center mt-5" >
        <h1 class="text-3xl md:text-5xl font-bold  text-center  ">Login</h1>      

            <img src="{{'http://127.0.0.1:8000/storage/products/Untitled-1.png'}}" alt="" class="  w-1/5 h-full object-contain ">
    </div>
 
    <form id="loginform" action="{{route('login')}}" method="POST" class="flex flex-col h-3/4 justify-center 
    md:h-4/5 w-4/5  " >
     @csrf
     @method("POST")
    
        <div class="flex flex-col h-1/4 md:h-1/5">
            <label for="email" class="">Email</label>
            <input id="email" name="email" type="text" class="w-full h-3/4 text-black">
        </div>
        <div class="flex flex-col h-1/4 mt-5 md:h-1/5">
            <label for="password" class="">Password</label>
            <input id="password" name="password" type="text" class="w-full h-3/4 text-black">
        </div>
        
        <button type="submit" class="bg-white text-black mt-8 h-8">asdf</button>
    </form>

    <h5>or</h5>

    <a href="" class="w-10/12 bg-white text-black h-[3.5rem] flex items-center justify-center   mb-4">login with google <ion-icon name="logo-google" class="ml-5"></ion-icon></a>
</div>

 