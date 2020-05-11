@error('body')
<div class="bg-red-200 border-l-4 border-orange-500 text-red-700 p-4 rounded-lg mb-2" role="alert">
    <p class="font-bold">Warning</p>
    <p>{{$message}}</p>
  </div>
  @enderror

<div class="border border-blue-400 rounded-lg px-8 py-6 lg:mb-4 sm:mb-4 shadow-md">
        <form action="/tweets" method="POST">
            @csrf
            <textarea  placeholder="Spit out your shit here!" required name="body" id="" class="w-full outline-none"></textarea>
      
        <hr class="my-4">
        <div class="flex justify-between items-center">

        <img width="40" height="40" class="rounded-full mr-2 flex-shrink-0" src="{{auth()->user()->avatar}}" alt="">
        <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" type="submit">Publish</button>

        </div>
    </form>
</div>

        
