<h3 class="font-bold mb-2">Friends</h3>
<ul>
    @foreach(auth()->user()->follows as $user)
    <li class="mb-4">
        <div>
            <a href="{{route('profile', $user->name)}}" class="flex items-center text-sm">
        <img class="rounded-full mr-2" src="https://i.pravatar.cc/40?u={{$user->email}}" alt="Following"> {{$user->name}}
            </a>
        </div>
    </li>
    @endforeach
</ul>