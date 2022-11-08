<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tailwind Starter Template - Responsive Header : Tailwind Toolbox</title>
	<meta name="author" content="name">
  <meta name="description" content="description here">
	<meta name="keywords" content="keywords,here">
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
	

</head>
<body class="bg-gray-200 font-sans leading-normal tracking-normal">

	<nav class="flex items-center justify-between flex-wrap  p-6 h-40 fixed w-full z-10 top-0" style="background-image: url('images/nav-achtergrond.jpg'); background-size: cover">
		
        
        <div class="flex items-center flex-shrink-0 text-white mr-6">
			<a class="text-white no-underline hover:text-white hover:no-underline" href="#">
            <x-application-logo class="block h-20 w-auto fill-current text-gray-600" />
				
             
			</a>
		</div>

		<div class="block lg:hidden">
			<button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-white hover:border-white">
				<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
			</button>
		</div>

		<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0" id="nav-content">
			<ul class="list-reset lg:flex justify-end flex-1 items-center">
@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block text-white">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-white dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-white dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-white dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
                
            @endif
			</ul>
		</div>
	</nav>

	<!--Container-->
	<div class="container shadow-lg mx-auto bg-white mt-44 md:mt-18">
   <div class="grid grid-cols-3 gap-4 w-full">
  <div class="border h-40">01</div>
  <div class="border">
  <img src="/images/nav-achtergrond.jpg"></div>
  <div class="border">03</div>
  <div class="col-span-2 border h-40">04</div>
  <div class="border">05</div>
  <div class="border h-20">06</div>
                <div class="col-span-2 border">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
</div>
	</div>



</body>
</html>
