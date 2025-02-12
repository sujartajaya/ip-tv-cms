@extends('layout.app')
    @section('content')
        <!-- component -->
        <div class="container mx-auto py-8">
            <h1 class="text-2xl font-bold mb-6 text-center">Registration Form</h1>
            <form class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md" method="post" action="{{ route('register') }}">
                @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                type="text" id="name" name="name" placeholder="John Doe" required="" autofocus value="{{ old('name') }}">
                @error('name')
                <div class="invalid block text-sm font-medium text-gray-700 dark:text-red-600 mb-2">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                type="email" id="email" name="email" placeholder="john@example.com" required="" value="{{ old('email') }}">
                @error('email')
                <div class="invalid block text-sm font-medium text-gray-700 dark:text-red-600 mb-2">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                type="password" id="password" name="password" placeholder="********" required="">
                @error('password')
                <div class="invalid block text-sm font-medium text-gray-700 dark:text-red-600 mb-2">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm-password">Confirm Password</label>
                <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                type="password" id="confirm-password" name="confirm_password" placeholder="********">
            </div>
            <button
                class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300"
                type="submit">Register</button>
            </form>
        </div>
    @endsection