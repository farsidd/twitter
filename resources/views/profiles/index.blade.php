<x-app>

<header class="mb-4">
    <div class="relative">
        
        <img class="rounded-lg" src="/images/banner.jpg">
        
        
        <img  

        style="
        
        left: 50%;
        "
        class="rounded-full lg:w-1/5 md:w-1/5 sm:w-2/12 bottom-0 mr-2 absolute transform -translate-x-1/2 translate-y-1/2 " src="{{$user->avatar}}" alt="Following">
    
    </div>
  
    <div class="flex justify-between items-center">
        <div style="max-width: 270px">
        <h3 class="text-2xl font-bold mb-0">{{$user->name}}</h3>
        <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
        </div>
        <div class="flex">
            @can('edit', $user)
            <a class=" text-black border border-gray-300 mr-2 py-2 px-2 rounded-full text-sm"
        href="{{$user->username}}/edit">Edit Profile</a>
            @endcan
        <form action="/profiles/{{$user->username}}/follow" method="POST">
            @csrf
         @if(auth()->user()->username != $user->username)
            
         <button 
            type="submit"
            class="bg-blue-500 text-sm rounded-full hover:bg-blue-600 text-white shadow py-2 px-2 rounded-lg"
             href="">{{ auth()->user()->isFollowing($user) ? 'Unfollow Me' : 'Follow Me' }}
        </button>
        
        @endif
       </form>

        </div>
    </div>

    <div class="mt-6">
        <p text-sm>I am just a single description of this user and you can put anything here as your description.
            I am actually a good description and you can use me whatever [urpose you want]
        </p>
    </div>

 

 
</header>

@include('timeline', [
    'tweets' => $tweets
])

</x-app>