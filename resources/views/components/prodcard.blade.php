<div class=" flex flex-col bg-black text-white w-36 h-3/5  md:w-1/5  md:h-1/5  md:my-8  justify-between flex-nowrap   my-2 slider-item ml-px md:ml-3">
                <img src="{{'http://127.0.0.1:8000/storage/products/1.png'}}" alt="" class="bg-green-500 h-4/5 w-full items-center flex object-fill  "/>
                <h1 class=" px-3 text-l overflow-hidden whitespace-nowrap  md:text-xl font-bold font-mono mt-1 md:mt-5  w-full  h-7 max-w-full text-ellipsis">{{$product['name']}}</h1>
                <h1 class=" px-3 text-s md:text-l font-bold font-mono">Rp {{$product['price']}}</h1>
                <h1 class=" px-3 text-s md:text-l  text-sm font-mono text-zinc-400 text-ellipsis overflow-hidden">kab.jakarta,indonesia</h1>
                
                <a href="{{route('detail',['id'=>$product['id']])}}" class="flex w-full items-center justify-center pt-1 md:pt-4 "> <button class="bg-white text-black w-11/12 mb-2">details</button></a>
             </div>