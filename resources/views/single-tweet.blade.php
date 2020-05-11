
    <div class="flex pl-4 py-6 lg:py-8 sm:py-8 shadow-md relative {{ $loop->last ? '' : 'border-b border-gray-400' }}">
        <div>
        <a href="{{route('profile', $tweet->user->username)}}">
            <img width="40" height="40" class="rounded-full mr-2" src="{{$tweet->user->avatar}}" alt=""> 
        </a>
        </div>
        <div >
            <a href="{{route('profile', $tweet->user->username)}}">

            <h3 class="font-bold mx-2">{{$tweet->user->name}}</h3>
            
            </a>
            <p class=" mx-2 my-2">{{$tweet->body}}</p>


            <x-like-buttons :tweet="$tweet" />



            <div class="absolute bottom-0">
                <p class="text-xs mx-2 my-2">{{$tweet->created_at->timezone('Asia/Karachi')->toDayDateTimeString()}}</p>
            </div>
        </div>

</div>