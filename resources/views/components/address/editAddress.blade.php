
<div class="hidden address-edit-popup h-full w-screen flex-col  items-center bg-gray/30 backdrop-blur-sm  fixed  mb-28 z-50  ">
    <div class=" flex h-3/4 w-4/5  flex-col  items-center bg-white  fixed  mb-28 z-50 border-2 border-black rounded-sm  mt-10 md:mt-16">
        <div class="h-10 w-full flex justify-between  items-center border border-b-black">
            <h1 class="ml-4 text-xl ">Edit Address</h1>
            <ion-icon name="close-outline" class="w-10 h-full z-50" onclick="setpopup('address-edit-popup')"></ion-icon>
        </div>
        <form class="h-full w-full flex flex-col items-start justify-center px-2">
            <label for="address">address</label>
            <textarea type="text" name="address"  class="w-full h-10 max-w-full max-h-16 border-2 border-black "></textarea>
            <label for="reciever">reciever</label>
            <input type="text" name="reciever" class="w-full h-8 border-2 border-black">
            <label for="label">label</label>
            <input type="text" name="label" class="w-full h-8 border-2 border-black">
            <button class="flex flex-row items-center w-full h-10  bg-black text-white  mt-2 justify-center" >
                <ion-icon name="add-circle-outline" class="w-10 h-9"></ion-icon>
                    <h1 class="ml-4 text-xl">edit</h1>
</button>
</form>
    </div>
</div>
 