@extends('frontend.layouts.app')
@section('title')
About Us
@endsection
@push('stylesheet-link')
@endpush
@section('mainsection')

<!-- 1st section  -->
<!-- <div class="relative">
  <div class="h-[calc(100vh_-_10px)] relative after:absolute after:top-0 after:left-0 after:h-full after:w-full after:bg-gradient-to-b from-slate-900/20 via-slate-900/30 to-slate-900">
    <img alt="" class="h-full w-full object-cover overflow-hidden object-top" src="https://like-flix-aura.vercel.app/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1610173827002-62c0f1f05d04%3Fq%3D80%26w%3D1470%26auto%3Dformat%26fit%3Dcrop%26ixlib%3Drb-4.0.3%26ixid%3DM3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%253D%253D&w=2048&q=75" style="color: transparent;">
  </div>
  <div class="absolute top-1/2 -translate-y-1/2 flex items-center px-8 sm:px-12 md:px-16 h-full text-white mx-auto w-full">
    <div class="w-full">
      <div class="text-6xl md:text-[100px] font-bold !leading-[130%] tracking-[2rem] md:tracking-[5rem] text-center uppercase">Blog</div>
    </div>
  </div>
 
</div> -->

<section class="md:h-dvh md:min-h-[500px] h-[500px] bg-no-repeat bg-cover bg-center bg-[url('{{asset('/public/tailwind_frontend/blog.webp')}}')] relative before:absolute before:bg-black/50 before:inset-0 before:z-10 before:size-full">
  <div class="mx-auto max-w-7xl lg:px-8 px-6 h-full py-10 relative z-20">
    <!-- <div class="text-white md:text-7xl sm:text-5xl text-4xl flex items-end justify-center text-center h-full">Haldi Ceremony </div> -->
    
    <form class="h-full flex items-center justify-center flex-col">
      <div class="text-white md:text-7xl sm:text-5xl text-4xl flex items-end justify-center text-center font-font-semibold mb-8">BLOG </div>
      <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
      <div class="relative  max-w-lg w-full">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
          <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"></path>
          </svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-theme1 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Blogs..." required="">
        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-theme1 hover:bg-theme1/80 focus:ring-4 focus:outline-none focus:ring-theme1 font-medium rounded-lg text-sm px-4 py-2 dark:bg-theme1 dark:hover:bg-theme1 dark:focus:ring-theme1/80">Search</button>
      </div>
      <div class="flex flex-wrap justify-center gap-2 py-5 text-balance 2xl:max-w-5xl xl:max-w-4xl lg:max-w-3xl md:max-w-2xl sm:max-w-xl max-w-lg mx-auto *:relative *:font-semibold *:md:text-sm *:text-xs *:flex *:text-white/80 *:bg-white/10 *:border-2 *:border-white/10 *:hover:border-white/20 *:items-center *:gap-x-2 *:rounded-full *:md:pr-4 *:pr-3 *:pl-3 *:py-1 *:*:size-2 *:*:lg:size-2.5 *:*:opacity-90">
        <a href="" class="group/db">
          <svg class="group-hover/db:opacity-80 group-hover/db:animate-spin" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
            <path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z">
            </path>
          </svg>
          Wedding Photographers
        </a>
        <a href="" class="group/db">
          <svg class="group-hover/db:opacity-80 group-hover/db:animate-spin" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
            <path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z">
            </path>
          </svg>
          Pre Wedding Photographers
        </a>
        <a href="" class="group/db">
          <svg class="group-hover/db:opacity-80 group-hover/db:animate-spin" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
            <path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z">
            </path>
          </svg>
          Wedding Jewellery
        </a>
        <a href="" class="group/db">
          <svg class="group-hover/db:opacity-80 group-hover/db:animate-spin" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
            <path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z">
            </path>
          </svg>
          Wedding Videography
        </a>
        <a href="" class="group/db">
          <svg class="group-hover/db:opacity-80 group-hover/db:animate-spin" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
            <path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z">
            </path>
          </svg>
          Wedding Entertainment 
        </a>
        <a href="" class="group/db">
          <svg class="group-hover/db:opacity-80 group-hover/db:animate-spin" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
            <path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z">
            </path>
          </svg>
          Engagement Photographers 
        </a>
        <a href="" class="group/db">
          <svg class="group-hover/db:opacity-80 group-hover/db:animate-spin" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
            <path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z">
            </path>
          </svg>
          Candid Photographers 
        </a>
   
      </div>
    </form>
  </div>
</section>



<!-- 2nd section  -->


<div class="max-w-7xl mx-auto px-6 lg:px-8 py-7 sm:pt-20">
  <div class="grid sm:grid-cols-2 sm:items-center gap-8">
    <div class="sm:order-2">
      <div class="relative pt-[50%] sm:pt-[100%] rounded-lg">
        <img alt="Blog Image" loading="lazy" width="1920" height="1000" decoding="async" data-nimg="1" class="size-full absolute top-0 start-0 object-cover object-top rounded-lg" src="https://like-flix-aura.vercel.app/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1555447405-057915b40299%3Fq%3D80%26w%3D1470%26auto%3Dformat%26fit%3Dcrop%26ixlib%3Drb-4.0.3%26ixid%3DM3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%253D%253D&w=3840&q=75" style="color: transparent;">
      </div>
    </div>
    <div class="sm:order-1">
      <p class="mb-5 inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-gray-100 text-gray-800">Business insight</p>
      <h2 class="text-2xl font-bold md:text-3xl lg:text-4xl lg:leading-tight xl:text-5xl xl:leading-tight text-gray-800">
        <a class="hover:text-amber-500 focus:outline-none focus:text-amber-500" href="#">7 Tips for Hiring a Good Wedding Photographer</a>
      </h2>
      <div class="mt-6 sm:mt-10 flex items-center">
        <div class="shrink-0">
          <img alt="Blog Image" loading="lazy" width="600" height="600" decoding="async" data-nimg="1" class="size-10 sm:h-14 sm:w-14 rounded-full" src="https://like-flix-aura.vercel.app/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1669837401587-f9a4cfe3126e%3Fixlib%3Drb-4.0.3%26ixid%3DMnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8%26auto%3Dformat%26fit%3Dfacearea%26facepad%3D2%26w%3D320%26h%3D320%26q%3D80&w=1200&q=75" style="color: transparent;">
        </div>
        <div class="ms-3 sm:ms-4">
          <p class="sm:mb-1 font-semibold text-gray-800">Louise Donadieu</p>
          <p class="text-xs text-gray-500">Strategic Marketing Consultant</p>
        </div>
      </div>
      <div class="mt-5">
        <a class="inline-flex items-center gap-x-1.5 text-amber-500 decoration-2 hover:underline focus:outline-none focus:underline font-medium" href="#">Read more<svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m9 18 6-6-6-6">

            </path>
          </svg>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- 2nd section end  -->

<!-- 3rd section  -->


<section class="max-w-7xl mx-auto px-6 lg:px-8 sm:py-10 sm:pt-20 ">
  <div class="uppercase text-5xl  max-sm:text-start relative  text-balance flex sm:items-center sm:justify-center  w-full font-bold text-theme1 z-20 sm:pb-14  mx-auto">Blogs<div class="absolute sm:-top-7 sm:-top-4 [font-family:Yesteryear] [-webkit-text-stroke:_0.8px_#000] opacity-40 text-transparent xl:text-[120px] sm:text-[90px] text-[40px] font-light -z-10">Latest Blogs</div>
  </div>
  <div class="sm:py-12 py-10 grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 md:gap-8 lg:gap-12">
    <a class="group flex flex-col focus:outline-none" href="{{route('blog.details')}}">
      <div class="aspect-[1/0.6] aspect-h-12 overflow-hidden bg-gray-100 rounded-2xl">
        <img alt="Blog Image" loading="lazy" width="500" height="500" decoding="async" data-nimg="1" class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out object-cover rounded-2xl size-full" src="https://like-flix-aura.vercel.app/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1641279676778-3c94588147fd%3Fq%3D80%26w%3D1470%26auto%3Dformat%26fit%3Dcrop%26ixlib%3Drb-4.0.3%26ixid%3DM3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%253D%253D&w=1080&q=75" style="color: transparent;">
      </div>
      <div class="pt-4">
        <h3 class="relative inline-block font-medium text-lg text-black before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-amber-500 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100">eYoga</h3>
        <p class="mt-1 text-gray-600">A revamped and dynamic approach to yoga analytics</p>
        <div class="mt-3 flex flex-wrap gap-2">
          <span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">Discovery</span>
          <span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">Brand Guidelines</span>
          <span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">Yoga</span>
        </div>
      </div>
    </a>
    <a class="group flex flex-col focus:outline-none" href="{{route('blog.details')}}">
      <div class="aspect-[1/0.6] aspect-h-12 overflow-hidden bg-gray-100 rounded-2xl">
        <img alt="Blog Image" loading="lazy" width="500" height="500" decoding="async" data-nimg="1" class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out object-cover rounded-2xl size-full" src="https://like-flix-aura.vercel.app/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1587271636175-90d58cdad458%3Fq%3D80%26w%3D1470%26auto%3Dformat%26fit%3Dcrop%26ixlib%3Drb-4.0.3%26ixid%3DM3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%253D%253D&w=1080&q=75" style="color: transparent;">
      </div>
      <div class="pt-4">
        <h3 class="relative inline-block font-medium text-lg text-black before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-amber-500 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100">Nike React</h3>
        <p class="mt-1 text-gray-600">Rewriting sports playbook for billions of athletes</p>
        <div class="mt-3 flex flex-wrap gap-2">
          <span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">Brand Strategy</span>
          <span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">Visual Identity</span>
        </div>
      </div>
    </a>
    <a class="group flex flex-col focus:outline-none" href="{{route('blog.details')}}">
      <div class="aspect-[1/0.6] aspect-h-12 overflow-hidden bg-gray-100 rounded-2xl">
        <img alt="Blog Image" loading="lazy" width="500" height="500" decoding="async" data-nimg="1" class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out object-cover rounded-2xl size-full" src="https://like-flix-aura.vercel.app/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1587271449604-04bb40332709%3Fq%3D80%26w%3D1470%26auto%3Dformat%26fit%3Dcrop%26ixlib%3Drb-4.0.3%26ixid%3DM3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%253D%253D&w=1080&q=75" style="color: transparent;">
      </div>
      <div class="pt-4">
        <h3 class="relative inline-block font-medium text-lg text-black before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-amber-500 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100">Day Spa</h3>
        <p class="mt-1 text-gray-600">Designing a new cocktail can</p>
        <div class="mt-3 flex flex-wrap gap-2">
          <span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">Brand Strategy</span>
          <span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">Visual Identity</span>
        </div>
      </div>
    </a>
    <a class="group flex flex-col focus:outline-none" href="{{route('blog.details')}}">
      <div class="aspect-[1/0.6] aspect-h-12 overflow-hidden bg-gray-100 rounded-2xl">
        <img alt="Blog Image" loading="lazy" width="500" height="500" decoding="async" data-nimg="1" class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out object-cover rounded-2xl size-full" src="https://like-flix-aura.vercel.app/_next/image?url=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1505932794465-147d1f1b2c97%3Fq%3D80%26w%3D1470%26auto%3Dformat%26fit%3Dcrop%26ixlib%3Drb-4.0.3%26ixid%3DM3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%253D%253D&w=1080&q=75" style="color: transparent;">
      </div>
      <div class="pt-4">
        <h3 class="relative inline-block font-medium text-lg text-black before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-amber-500 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100">Diamond Dynamics</h3>
        <p class="mt-1 text-gray-600">From cutting-edge equipment to stylish apparel</p>
        <div class="mt-3 flex flex-wrap gap-2">
          <span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">Sports Gear</span>
          <span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">Equipment</span>
          <span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">Discovery</span>
        </div>
      </div>
    </a>
  </div>
</section>

<!-- 3rd section end  -->



@endsection

@push('page-script-link')
@endpush


@push('page-script')
@endpush