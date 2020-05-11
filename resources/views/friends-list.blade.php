<h3 class="font-bold">Friends</h3>
<ul>
    @forelse(auth()->user()->follows as $user)
    <li class="{{$loop->last ? '' : 'mb-4'}}">
        <div>
            <a href="{{route('profile', $user->username)}}" class="flex items-center text-sm">
        <img class="rounded-full mr-2" style="width: 40px; height: 40px" src="{{$user->avatar}}" alt="Following"> {{$user->name}}
            </a>
        </div>
    </li>
    @empty
    <li>
        <div class="p-2 bg-indigo-800   text-indigo-100 leading-none flex" role="alert">
            <span class="font-semibold mr-2 flex-auto">You do not have any friends yet.</span>
          </div>
    </li>
    @endforelse
</ul>