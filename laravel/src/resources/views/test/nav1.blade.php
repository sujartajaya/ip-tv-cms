<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @yield('mystyle')
    @yield('addscript')
    <title>MEDIA LINK</title></title>
</head>
<body class="w-screen overflow-y-auto overflow-x-hidden" style="background: #ccf5ff;">
    <nav class="bg-blue-600 p-3">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex space-x-2">
                <a href="#" class="text-white text-xl font-bold">
                <img src="/medialink1.png" class="h-9" alt="Logo" />
                </a>
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">IPTV CMS</span>
            </div>
            
            <button id="menu-btn" class="block md:hidden text-white focus:outline-none">
                ☰
            </button>
            <ul id="menu" class="hidden md:flex space-x-4">
                <li><a href="#" class="text-white hover:text-gray-200">Home</a></li>
                <li><a href="#" class="text-white hover:text-gray-200">About</a></li>
                <li><a href="#" class="text-white hover:text-gray-200">Login</a></li>
            </ul>
        </div>
        <ul id="mobile-menu" class="md:hidden hidden bg-blue-700 p-4 space-y-2">
            <li><a href="#" class="text-white block">Home</a></li>
            <li><a href="#" class="text-white block">About</a></li>
            <li><a href="#" class="text-white block">Login</a></li>
        </ul>
    </nav>
    <main class="flex-grow container mx-auto text-center py-20 justify-center">
        <h1 class="text-4xl font-bold text-blue-600">Welcome to Our CMS IPTV</h1>
        <p class="mt-4 text-gray-700 font-semibold">Our solution for amazing services and experiences.</p>
        <div class="flex justify-center mt-6">
            <img src="/medialink1.png"  alt="Logo" />
        </div>
    </main>
    <footer class="text-gray-800 text-center p-4">
        <p class="font-semibold">&copy; 2025 Media Link Power by <a class="font-bold" href="https://datapratama.net">Data Pratama</a>. All rights reserved.</p>
    </footer>
    <script>
        document.getElementById('menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>
