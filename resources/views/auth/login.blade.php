
<x-master>

    <div class="container mx-auto flex justify-center">

    
                    
                        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">{{ __('E-Mail Address') }}</label>
    
                                
                            <input id="email" type="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror" required autocomplete="email" value="{{old('email')}}" autofocus>

                                    @error('email')
                                    <p class="text-red-500 text-xs italic">{{$message}}.</p>
                                    @enderror
                                
                            </div>
    
                            <div class="mb-2">
                                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Password') }}</label>
    
                                
                                    <input id="password" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                    
                                            <p class="text-red-500 text-xs italic">{{$message}}.</p>
                        
                                    @enderror
                               
                            </div>
    

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
  
    
                            <div class="flex items-center justify-between mt-4">
                                
                                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                        {{ __('Login') }}
                                    </button>
    
                                    @if (Route::has('password.request'))
                                        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('password.request') }}">
                                            {{ __('Forgot Password?') }}
                                        </a>
                                    @endif
                               
                            </div>
                        </form>
    </div>

</x-master>


