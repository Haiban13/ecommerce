<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<div class="flex-row   w-screen   h-auto      ">
  @isset($category)
    <div class="flex flex-row w-screen justify-between bg-black h-14  ">
      <ion-icon name="chevron-back-outline" class="text-white h-full w-8" onclick="history.back()"></ion-icon>
      <div class="flex flex-row justify-center items-center mr-2 ">
        <input type="text" placeholder="search"  class="mr-2 h-2/3 rounded-full placeholder:pl-3 text-zinc-700">
        <ion-icon name="search-outline" class="h-full text-white w-8"></ion-icon>
        
      </div>
    </div>
    <div class="w-full h-14 bg-zinc-900 mt-4 flex flex-row items-center justify-evenly text-white overflow-x-auto  ">
       <div class="w-4/5 h-full bg-zinc-900  flex flex-row items-center justify-evenly text-white overflow-x-auto  scroll">
         <h1 class="rounded-full border w-fit min-w-28 flex items-center justify-center ml-3 px-2 text-nowrap">most-popular</h1>
         <h1 class="rounded-full border w-fit min-w-28 flex items-center justify-center ml-3 px-2 text-nowrap">cheapest</h1>
         <h1 class="rounded-full border w-fit min-w-29 flex items-center justify-center ml-3 px-3 text-nowrap">most expensive</h1>         
         <h1 class="rounded-full border w-fit min-w-29 flex items-center justify-center ml-3 px-3 text-nowrap">most expensive</h1>         
         <h1 class="rounded-full border w-fit min-w-29 flex items-center justify-center ml-3 px-3 text-nowrap">most expensive</h1>         
         <h1 class="rounded-full border w-fit min-w-29 flex items-center justify-center ml-3 px-3 text-nowrap">most expensive</h1>         
         <h1 class="rounded-full border w-fit min-w-29 flex items-center justify-center ml-3 px-3 text-nowrap">most expensive</h1>         
         <h1 class="rounded-full border w-fit min-w-29 flex items-center justify-center ml-3 px-3 text-nowrap">most expensive</h1>         
         <h1 class="rounded-full border w-fit min-w-29 flex items-center justify-center ml-3 px-3 text-nowrap">most expensive</h1>         
         <h1 class="rounded-full border w-fit min-w-29 flex items-center justify-center ml-3 px-3 text-nowrap">most expensive</h1>         
         <h1 class="rounded-full border w-fit min-w-29 flex items-center justify-center ml-3 px-3 text-nowrap">most expensive</h1>         
         <h1 class="rounded-full border w-fit min-w-29 flex items-center justify-center ml-3 px-3 text-nowrap">most expensive</h1>         
         <h1 class="rounded-full border w-fit min-w-29 flex items-center justify-center ml-3 px-3 text-nowrap">most expensive</h1>         
         <h1 class="rounded-full border w-fit min-w-29 flex items-center justify-center ml-3 px-3 text-nowrap">most expensive</h1>         
         <h1 class="rounded-full border w-fit min-w-29 flex items-center justify-center ml-3 px-3 text-nowrap">most expensive</h1>         
         <h1 class="rounded-full border w-fit min-w-29 flex items-center justify-center ml-3 px-3 text-nowrap">most expensive</h1>         
         <h1 class="rounded-full border w-fit min-w-29 flex items-center justify-center ml-3 px-3 text-nowrap">most expensive</h1>         
       </div>

     
    <ion-icon name="list-outline" class="h-full w-8"></ion-icon>
    </div>
    @endisset
    <div class="  flex-col ml-5   mr-5 items-center   md:mr-9 h-fit  ">
        <!-- loop category here -->
         @isset ($category)
          <h1>{{$category[0]['category']}}</h1>
         @endisset
         <div class=" flex flex-wrap justify-evenly  items-center  justify-items-center md:flex-row md:justify-evenly md:items-center h-fit md slider-wrapper mt-4">
            <!-- loop product here -->
             @foreach($data as $product)
               @include('components.prodcard')
             @endforeach
              
             </div>
             
        </div>
        
             
    </div>
    
     
     
 </div>