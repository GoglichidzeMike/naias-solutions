<!DOCTYPE html>
<html lang="en" style="scroll-behavior:smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">


  <meta name="description" content="Naias is ultrafine nanobubble technology water purification system that is most efficient in (i) increaseing dissolved oxygen level in water and (ii) eradicating pathogens in water (i.e., bacteria, virus spores/fungi, including Harmful Algal Bloom) by producing Hydroxyl Radicals!" />
  
  <meta property="og:site_name"          content="Naias - Restoring Natural Balance" />
  <meta property="og:url"                contnet="<?php echo url()->current() ?>">
  <meta property="og:type"               content="website" />
  <meta property="og:title"              content="Naias - Restoring Natural Balance" />
  <meta property="og:description"        content="Our mission is to custom design your beauty game plan to get the best out of your skin, so you can give your best to life!Naias is ultrafine nanobubble technology water purification system that is most efficient in (i) increaseing dissolved oxygen level in water and (ii) eradicating pathogens in water (i.e., bacteria, virus spores/fungi, including Harmful Algal Bloom) by producing Hydroxyl Radicals!" />
  <meta property="og:image"              content="https://memike.xyz/image/naias.jpg" />
  
  
  <link rel="icon" type="image/png" href="/image/fav/favico-16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="/image/fav/favico-32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/image/fav/favico-96.png" sizes="96x96">
  <!-- For iPad with high-resolution Retina display running iOS ≥ 7: -->
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/image/fav/favico-152.png">
  
  <link rel="stylesheet preload" as="style" href="{{ asset('css/app.css') }}">

  <script src="/js/app.js" defer></script>
  <script src="/js/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous" rel="preload" as="script"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,300&display=swap" rel="stylesheet">


<title>Naias Solutions - Restoring Natural Balance</title>
</head>

<body class="min-h-screen flex  flex-col overflow-visible bg-gray-100">
  <a id="button"></a>
  <div class="nav bg-white w-full z-10 md:p-0 md:h-auto  overflow-hidden md:overflow-visible border-b border-gray-500 border-opacity-20">
    <div class="p-3 w-95  xl:w-9/12 relative  mx-auto md:flex justify-between items-center">
      <a href="{{ route('home') }}" class="md:hidden">
        <img src="/image/logo.svg" class="h-auto w-12" alt="Nabas Logo">  
      </a>
        <div class="burger absolute top-2 right-2 md:hidden cursor-pointer">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
      <ul class="flex flex-col md:flex-row md:items-center text-dark  space-y-2 my-4 md:m-0 md:space-x-6 md:space-y-0">
        {{-- <li>
          <a href="{{ route('home') }}" class="nav-link">Home</a>
        </li> --}}
        <li>
          <a href="#top" class="nav-link">About us</a>
        </li>
        <li>
          <a href="#contact" class="nav-link">Contact us</a>  
        </li>
      </ul>
      {{-- <a href="#contact" class="leading-none tracking-widest text-sm md:text-base bg-dark  text-white py-2 px-8 shadow-md  font-semibold rounded-sm hover:bg-secondary  hover:shadow-lg transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-primary">Contact</a> --}}
      <a href="#contact" class="px-4 md:px-8 rounded-sm shadow ring-2 text-sm leading-10 tracking-wider uppercase focus:outline-none focus:ring-4 transition-colors duration-200 ease-linear bg-white  ring-dark  text-dark hover:bg-dark  hover:text-white">contact us</a>
      </ul>
    </div>
  </div>


  


  @yield('content')


  <footer class="bg-white w-full mt-auto font-semibold">
    <div class="w-full lg:w-9/12  px-4 lg:px-0 py-4 text-white mx-auto ">
      <ul class="text-sm align-center space-x-2 flex flex-row sm:justify-between">
        <div class="flex space-x-2">
          <div class="sm:flex sm:space-x-2 text-dark ">
            <li>
              <a href="#top" class="text-sm sm:text-base py-3 hover:text-secondary focus:outline-none focus:text-secondary  transition duration-300 ease-out ">About us</a>
            </li>
            <div class="w-px h-auto bg-white bg-opacity-50 hidden sm:block"></div>
          </div>
        </div>
          
        <ul class="sm:flex sm:space-x-2 align-center text-dark ">
          <li>
            <a href="https://goglichidze.me" target="_blank" rel="nofollow noreferrer" class="text-sm sm:text-base py-3 hover:text-secondary  focus:outline-none focus:text-secondary transition duration-300 ease-out">&copy; Mikael</a>  
          </li>
        </ul>
      </ul>
        
    </div>
  </footer>
</body>
</html>

<style>



</style>