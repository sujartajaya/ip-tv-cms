@extends('layout.appv1')
    @section('content')
        <h1 class="text-3xl font-bold text-blue-600 text-center">Dashboard</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            <div class="bg-white rounded-xl shadow-md overflow-hidden p-4">
                <h2 class="text-xl font-bold text-gray-700">Channel Category</h2>
                <div class="p-4">
                    <a href="{{ route('chcategory') }}" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Lihat Detail</a>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-md overflow-hidden p-4">
                <h2 class="text-xl font-bold text-gray-700">Tv Channel</h2>
                <div class="p-4">
                    <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Lihat Detail</button>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-md overflow-hidden p-4">
                <h2 class="text-xl font-bold text-gray-700">Food Category</h2>
                <div class="p-4">
                    <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Lihat Detail</button>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-md overflow-hidden p-4">
                <h2 class="text-xl font-bold text-gray-700">Food</h2>
                <div class="p-4">
                    <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Lihat Detail</button>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-md overflow-hidden p-4">
                <h2 class="text-xl font-bold text-gray-700">Hotel promo</h2>
                <div class="p-4">
                    <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Lihat Detail</button>
                </div>
            </div>
        </div>
    @endsection
