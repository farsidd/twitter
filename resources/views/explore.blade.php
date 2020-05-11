<x-app>
<ul>
@foreach($user as $user)
    
<div class="flex items-center mb-4">
    <div class="mr-4">
    <a href="{{ route('profile', $user->username)}}">
    <img style="width: 80px; height:80px" class="rounded-full" src="{{$user->avatar}}" alt="">
     
    </div>
    
    <div>
    <h3 class="mb-2 font-bold">{{'@'.$user->name}}</h3>
    <p>I am description of the user</p>
    </div>
</a>
</div>

@endforeach
</ul>
</x-app>