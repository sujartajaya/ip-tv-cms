<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @yield('mystyle')
  @yield('addscript')
</head>
<body class="w-screen overflow-y-auto overflow-x-hidden" style="background: #ccf5ff;">

<nav class="bg-white border-gray-200 ">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="/medialink1.png" class="h-9" alt="Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap text-blue-700">IPTV CMS</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
        @if(Auth::check())
        <form id="logout-form" action="/logout" method="POST" class="d-none">@csrf</form>
        <li>
          <a href="#" class="block py-2 px-3 text-blue-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
        </li>
        @else
        <li>
          <a href="/login" class="block py-2 px-3 text-blue-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0">Login</a>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>
<main class="flex py-4 mx-2">
    @yield('content')
</main>
<script>
  document.addEventListener('DOMContentLoaded', function () {
     const menu = document.querySelectorAll('.navbar-default');
  });
</script>
</body>
</html>