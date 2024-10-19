<div class="h-2/6 w-screen md:h-2/5 flex flex-row bg-black items-center  ">
        <ion-icon name="person-circle-outline" class="w-2/5 h-80 text-white"></ion-icon>
        <form class="flex flex-col h-5/6 md:h-5/6  w-1/2 items-start justify-around md:justify-evenly">
            <input type="text" class="rounded-sm w-full md:w-3/4" placeholder="name" value="{{$data->name}}">
            <input type="text" class="rounded-sm w-full md:w-3/4" placeholder="email" value="{{$data->email}}">
            <input type="text"  class="rounded-sm w-full md:w-3/4" placeholder="phone" value="{{$data->phone}}">
            <button class="text-white border-4 border-white py-1 px-3"> done</button>
</form>
        </div>
        <div class="w-screen h-4/6 flex flex-col">
            <ul class="flex flex-row w-full h-1/5    items-center justify-center ">
                <a href="{{route('unpaid')}}" class="h-full w-full flex items-center flex-col justify-evenly ml-1 "><ion-icon name="wallet-outline" class="h-2/5 w-full"> </ion-icon><h6 class=" text-nowrap text-center ">belum dibayar</h6></a>
                <a href="{{route('packing')}}" class="h-full w-full flex items-center flex-col justify-evenly ml-1"><ion-icon name="cube-outline" class="h-2/5 w-full"> </ion-icon><h6>dikemas</h6></a>
                <a href="{{route('sent')}}" class="h-full w-full flex items-center flex-col justify-evenly ml-1"><ion-icon name="map-outline" class="h-2/5 w-full"> </ion-icon><h6>dikirim</h6></a>
                <a href="{{route('rating')}}" class="h-full w-full flex items-center flex-col justify-evenly ml-1"><ion-icon name="star-outline" class="h-2/5 w-full"> </ion-icon><h6>rating</h6></a>
            </ul>
            <a href="{{route('address')}}" class="address w-full h-1/5  flex items-center " onclick="setpopup('address-popup')">
                 
                    <div class="flex flex-row justify-start items-center h-3/4 w-full border-zinc-900 border-2" >
                    <ion-icon name="home-outline" class="mx-5 w-1/12 h-1/2"></ion-icon>
                    <h4 class="mx-5" >address</h4>
                    </div>
     
            </a>
            <a href="{{route('vouchers')}}" class="w-full h-1/5  flex items-center"   onclick="setpopup('vouchers-popup')">
                 
                    <div class="flex flex-row justify-start items-center h-3/4 w-full border-zinc-900 border-2" >
                    <ion-icon name="ticket-outline" class="mx-5 w-1/12 h-1/2"></ion-icon>
                    <h4 class="mx-5" >Vouchers</h4>
                    </div>
     
            </a>
         
                
            
            <div class="w-full h-1/5  flex items-center">
                <a class="flex flex-row justify-start items-center h-3/4 w-full border-zinc-900 border-2" href="">
                    <ion-icon name="reload-circle-outline" class="mx-5 w-1/12 h-1/2"></ion-icon>
                <h4 class="mx-5">history</h4>
                </a>

            </div>
            <!-- <div class="w-full h-1/5  flex items-center">
                <a class="flex flex-row justify-start items-center h-3/4 w-full border-zinc-900 border-2" href="">
                <ion-icon name="storefront-outline" class="mx-5 w-1/12 h-1/2"></ion-icon>
                <h4 class="mx-5">seller</h4>
                </a>

            </div> -->
        </div>
       
       
    </div>


