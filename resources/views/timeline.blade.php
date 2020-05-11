<div class="border border-gray-300 rounded-lg lg:my-4 sm:my-4">
    @forelse($tweets as $tweet)
    
    @include('single-tweet')
    @empty

        <div class="p-2 bg-indigo-800  text-center text-indigo-100 leading-none lg:rounded-full flex" role="alert">
          <span class="font-semibold mr-2  flex-auto">You do not have any tweet yet.</span>
        </div>


    @endforelse
    {{ $tweets->links() }}
    </div>