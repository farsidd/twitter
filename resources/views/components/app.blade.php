<x-master>
    <section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-between">
                <div class="lg:w-1/6">
                    @include('sidebar-links')
            
                </div>
                
                <div class="lg:flex-1 lg:mx-10 sm:mb-4" style="max-width: 700px">
                
                    {{$slot}}
            
                </div>
            
                
                <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4 h-full lg:mt-0 md:mt-0 sm:mt-4">
                    @include('friends-list')
                </div>
            </div>
        </main>
        </section>
</x-master>