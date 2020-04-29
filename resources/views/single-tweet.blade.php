
    <div class="flex pl-4 py-6 lg:py-8 sm:py-8 shadow-md relative {{ $loop->last ? '' : 'border-b border-gray-400' }}">
        <div>
        <a href="{{route('profile', $tweet->user->name)}}">
            <img width="40" height="40" class="rounded-full mr-2" src="https://i.pravatar.cc/147?u={{$tweet->user->email}}" alt=""> 
        </a>
        </div>
        <div >
            <a href="{{route('profile', $tweet->user->name)}}">

            <h3 class="font-bold mx-2">{{$tweet->user->name}}</h3>
            
            </a>
            <p class=" mx-2 my-2">{{$tweet->body}}</p>
            <div class="absolute bottom-0">
                <p class="text-xs mx-2 my-2">{{$tweet->created_at->toDayDateTimeString()}}</p>
            </div>
        </div>
</div>