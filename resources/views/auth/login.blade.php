@extends('layouts.app')

@section('main')
<div class="md:w-10/12 mx-auto">
    <div class="shadow-lg rounded-lg h-auto w-93 my-10">
        <div class="flex justify-center">
            <img src="{{asset('images/LOGO.svg')}}" class="w-32 ">
        </div>
        
        <div class="flex justify-center my-2 px-6 md:px-0">
            <h2 class=" text-teritory" style="font-family: 'Poppins', serif;">
                Login To Find your Perfect Place with <span class="text-primary font-semibold">Homie Nepal</span>
            </h2>
        </div>

        <div class="flex justify-center">
            <form method="POST" action="{{ route('login') }}" class="my-2">
                @csrf
                <!-- Email Address -->
                <div class="my-3">
                    <label for="email" class="block text-primary font-semibold mb-2">
                       Email Address
                    </label>
                    <input type="email" name="email" id="email" class="border-0 focus:ring-primary shadow-md rounded-md @if ($errors->has('email'))
                    border-red-500 border-b-2 focus:border-primary
                    @endif" value={{old('email')}}>
                    @error('email')
                        <p class="text-red-400 py-2 text-sm">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="my-3">
                    <label for="password" class="block text-primary font-semibold mb-2">
                       Password
                    </label>
                    <input type="password" name="password" id="password" class="border-0 focus:ring-primary shadow-md rounded-md @if ($errors->has('password'))
                    border-red-500 border-b-2 focus:border-primary
                    @endif">
                    @error('password')
                        <p class="text-red-400 py-2 text-sm">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <div class="flex justify-center">
                    <a href="{{ route('register') }}" class="text-gray-600 hover:text-primary text-sm hover:underline">
                        Don't Have a Account?
                    </a>
                </div>
            
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
            
                    <x-button class="ml-3 px-4 py-1 bg-primary text-white border-2 rounded-lg border-primary hover:bg-transparent hover:text-primary">
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </form>  
        </div>  
    </div>
</div>

@endsection
