@extends('layouts.home')

@section('content')
    
<div class="hero w-full">
  <div class="relative bg-white w-97 lg:w-11/12 xl:w-9/12 mt-2 lg:mt-6 mx-auto shadow-lg rounded">
    <div class="hero-box"></div>
    <div class="w-97 flex flex-col lg:flex-row mx-auto py-10 z-50">
      
      <div class="w-full lg:w-5/12 flex flex-col justify-between py-2 mr-4" style="z-index:10">
        
        <img src="/image/hero-logo.png" class="w-72 mx-auto mb-6 lg:mx-0" alt="Navas Logo">
        <div class="headings">
          
          <h1 class="text-3xl text-secondary md:text-5xl font-semibold mb-1 filter drop-shadow-lg text-center md:text-left">
            Restoring Natural Balance
          </h1>
          <p class="text-md font-bold md:text-xl   mb-6 text-center md:text-left">
            <span class="text-primary">100% Natural - </span><span class="text-orange">0% Chemical</span>
          </p>
        </div>
        
        <p class="text-dark leading-6 mb-4 text-center md:text-left">
          <span class="font-bold">Naias</span> is ultrafine <span class="font-bold">nanobubble technology</span> water purification system that is most efficient in <span class="font-bold">(i)</span> increasing dissolved oxygen level in water and <span class="font-bold">(ii)</span> eradicating pathogens in water (<span class="italic">i.e</span>., bacteria, virus spores/fungi, including <span class="italic">Harmful Algal Bloom</span>) by producing <span class="font-bold">Hydroxyl Radicals.</span>
        </p>

        <p class="text-dark leading-6 mb-6 text-center md:text-left">
          <span class="font-bold">Naias</span> is <span class="font-bold">100% natural</span> with 0% chemicals, leaving <span class="font-bold">no ecological footprint</span> other than <span class="italic font-medium">eleveated dissolved oxygen</span> level which is always good for our ecosystem.
        </p>
        
        
        
        <div class="mx-auto lg:mx-0">
          <a href="#contact" class="hero-btn bg-white  ring-dark  text-dark hover:bg-dark  hover:text-white">contact us</a>
        </div>
        
      </div>
      
      <div class="w-full lg:w-7/12 lg:ml-4 mt-4 lg:mt-0 flex items-center">
        <div class="splide w-full h-auto z-50">
          <div class="splide__track">
            <ul class="splide__list">
              <li class="splide__slide">
                <div class="relative">
                  <a href="https://youtu.be/e614gvkyoIU" target="_blank" rel="noopener noreferrer" style="z-index:10" class="animate-pulse absolute text-center slider-btn px-4 md:px-8 rounded-sm shadow-lg ring-2 text-sm leading-1 tracking-wider uppercase focus:outline-none focus:ring-4 transition-colors duration-200 ease-linear bg-secondary  ring-primary text-white hover:bg-white hover:text-secondary">Click to see <br />News Report</a>
                  <style>
                    .slider-btn{
                      bottom: 12%;
                      right: 29%;
                    }
                  </style>
                  <img src="/image/slides/slide-1.jpg" alt="Slide">
                </div>
              </li>
              <li class="splide__slide"><img src="/image/slides/slide-2.jpg" alt="Slide"></li>
              <li class="splide__slide"><img src="/image/slides/slide-3.jpg" alt="Slide"></li>
              <li class="splide__slide"><img src="/image/slides/slide-4.jpg" alt="Slide"></li>
              <li class="splide__slide"><img src="/image/slides/slide-5.jpg" alt="Slide"></li>
              <li class="splide__slide"><img src="/image/slides/slide-6.jpg" alt="Slide"></li>
              <li class="splide__slide"><img src="/image/slides/slide-7.jpg" alt="Slide"></li>
              <li class="splide__slide"><img src="/image/slides/slide-8.jpg" alt="Slide"></li>
              <li class="splide__slide"><img src="/image/slides/slide-9.jpg" alt="Slide"></li>
            </ul>
          </div>
        </div>
      </div>
      
    </div>
    
  </div>
</div>


<div class="bg-white w-97 lg:w-11/12 xl:w-9/12 my-10 mx-auto p-5 shadow-lg rounded">
  <div class="seperator rounded h-px shadow-lg w-1/2 mx-auto my-2"></div>
  <p class="text-center text-xl md:text-2xl text-secondary font-bold animate-pulse">Full website in progress... Please return soon!</p>
  <div class="seperator rounded h-px shadow-lg w-1/2 bg-dark mx-auto bg-opacity-30 my-2"></div>
  <style>
    .seperator{
      background: rgb(255,255,255);
      background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(65,79,118,0.5970763305322129) 50%, rgba(255,255,255,1) 100%);
    }
  </style>
</div>

@include('includes.contact')






<style>


</style>


@endsection