@extends('frontend.layouts.app')
@section('title')
@endsection

@section('mainsection')
<!-- hero section  -->


<div class="relative overflow-hidden h-dvh md:min-h-[600px] w-full select-none">
	<div class="heroSwiper swiper-container h-full [&_.swiper-pagination]:!w-auto [&_.swiper-pagination]:flex [&_.swiper-pagination]:lg:px-16 [&_.swiper-pagination]:px-6 [&_.swiper-pagination]:sm:pb-10 [&_.swiper-pagination]:pb-12 [&_.swiper-pagination-bullet]:flex [&_.swiper-pagination-bullet]:items-center [&_.swiper-pagination-bullet]:justify-center [&_.swiper-pagination-bullet]:text-sm [&_.swiper-pagination-bullet]:text-white/80 [&_.swiper-pagination-bullet-active]:text-white [&_.swiper-pagination-bullet]:size-2 [&_.swiper-pagination-bullet-active]:!size-2 [&_.swiper-pagination-bullet-active]:!bg-transparent [&_.swiper-pagination-bullet]:bg-white [&_.swiper-pagination-bullet]:p-1 [&_.swiper-pagination-bullet]:rounded-full [&_.swiper-pagination-bullet-active]:!border-amber-500 [&_.swiper-pagination-bullet]:border [&_.swiper-pagination-bullet]:opacity-100 [&_.swiper-button-prev]:absolute [&_.swiper-button-prev]:bottom-9 [&_.swiper-button-prev]:left-[auto] [&_.swiper-button-prev]:lg:right-32 [&_.swiper-button-prev]:right-24 [&_.swiper-button-prev]:top-[auto] [&_.swiper-button-next]:absolute [&_.swiper-button-next]:bottom-9 [&_.swiper-button-next]:left-[auto] [&_.swiper-button-next]:lg:right-20 [&_.swiper-button-next]:right-10 [&_.swiper-button-next]:top-[auto] [&_.swiper-button-next:after]:size-8 [&_.swiper-button-next:after]:text-lg [&_.swiper-button-next:after]:bg-white [&_.swiper-button-next:after]:flex [&_.swiper-button-next:after]:items-center [&_.swiper-button-next:after]:justify-center [&_.swiper-button-next:after]:rounded-full [&_.swiper-button-next:after]:text-slate-900 [&_.swiper-button-next:after]:font-bold [&_.swiper-button-next:after]:flex-shrink-0 [&_.swiper-button-prev:after]:size-8 [&_.swiper-button-prev:after]:text-lg [&_.swiper-button-prev:after]:bg-white [&_.swiper-button-prev:after]:flex [&_.swiper-button-prev:after]:items-center [&_.swiper-button-prev:after]:justify-center [&_.swiper-button-prev:after]:rounded-full [&_.swiper-button-prev:after]:text-slate-900 [&_.swiper-button-prev:after]:font-bold [&_.swiper-button-prev:after]:flex-shrink-0 [&_.swiper-button-prev]:max-sm:hidden [&_.swiper-button-next]:max-sm:hidden">
		<!-- Swiper Slides -->
		<div class="swiper-wrapper">
			<div class="swiper-slide relative h-full group">
				<div class="absolute inset-0 h-full w-full">
					<div class="absolute bg-black/50 inset-0 z-10"></div>
					<img src="{{ asset('/public/tailwind_frontend/slider-1.jpg') }}" height="1000" width="1000" alt="hero 1" class="w-full h-full object-cover" />
				</div>
				<div class="mx-auto max-w-7xl lg:px-8 px-6 relative z-50 h-full">
					<div class="relative z-10 flex items-center h-full max-md:py-24 pt-10">

						<div class="text-white relative z-20">
							<div class="text-lg relative  font-light uppercase tracking-wide mb-4 group-[.swiper-slide-active]:animate-fade-in-up opacity-0 group-[.swiper-slide-active]:[animation-delay:.3s]">
								<div class="text-5xl lg:text-[120px] sm:text-[80px] font-thin text-white/10 absolute inset-0 -top-10 lg:-left-14 -left-5  [font-family:'Caveat'] group-[.swiper-slide-active]:animate-fade-in-up opacity-0 group-[.swiper-slide-active]:[animation-delay:0s]">
									Wedding Photography!
								</div>
								Welcome to Wedding Photography!
							</div>
							<div class="text-3xl sm:text-5xl lg:text-7xl font-bold leading-tight group-[.swiper-slide-active]:animate-fade-in-up opacity-0 group-[.swiper-slide-active]:[animation-delay:.6s]">
								Memories Made Beautiful:
								<br class="md:block !hidden" />
								Your Unforgettable Wedding Day
							</div>
							<button class="flex justify-between text-white sm:text-lg text-sm uppercase items-center overflow-hidden group/btn gap-4 z-20 relative mt-8 group-[.swiper-slide-active]:animate-fade-in-up opacity-0 group-[.swiper-slide-active]:[animation-delay:.9s]">
								<span class='group-hover/btn:-translate-x-7 duration-300 w-7 h-[2px] bg-white'></span> <span class='group-hover/btn:-translate-x-7 duration-300'> explore my portfolio</span>
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-slide relative h-full group">
				<div class="absolute inset-0 h-full w-full">
					<div class="absolute bg-black/50 inset-0 z-10"></div>
					<img src="{{ asset('/public/tailwind_frontend/slider-2.webp') }}" height="1000" width="1000" alt="hero 1" class="w-full h-full object-cover" />

				</div>
				<div class="mx-auto max-w-7xl lg:px-8 px-6 relative z-50 h-full">
					<div class="relative z-10 flex items-center h-full max-md:py-24 pt-10">

						<div class="text-white relative z-20">
							<div class="text-lg relative font-light uppercase tracking-wide mb-4 group-[.swiper-slide-active]:animate-fade-in-up opacity-0 group-[.swiper-slide-active]:[animation-delay:.3s]">
								<div class="text-5xl lg:text-[120px] sm:text-[80px] font-thin text-white/10 absolute inset-0 -top-10 lg:-left-14 -left-5  [font-family:'Caveat'] group-[.swiper-slide-active]:animate-fade-in-up opacity-0 group-[.swiper-slide-active]:[animation-delay:0s]">
									Wedding Photography!
								</div>
								Welcome to Wedding Photography!
							</div>
							<div class="text-3xl sm:text-5xl lg:text-7xl font-bold leading-tight group-[.swiper-slide-active]:animate-fade-in-up opacity-0 group-[.swiper-slide-active]:[animation-delay:.6s]">

								Relive Your Unforgettable Wedding
								<br class="md:block !hidden" />
								Day through Captivating Images
							</div>
							<button class="flex justify-between text-white sm:text-lg text-sm uppercase items-center overflow-hidden group/btn gap-4 z-20 relative mt-8 group-[.swiper-slide-active]:animate-fade-in-up opacity-0 group-[.swiper-slide-active]:[animation-delay:.9s]">
								<span class='group-hover/btn:-translate-x-7 duration-300 w-7 h-[2px] bg-white'></span> <span class='group-hover/btn:-translate-x-7 duration-300'> explore my portfolio</span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Pagination -->
		<div class="swiper-pagination w-auto flex lg:px-16 px-6 sm:pb-10 pb-12"></div>
		<!-- Navigation -->
		<div class="swiper-button-prev absolute bottom-9 lg:right-32 right-24 top-auto"></div>
		<div class="swiper-button-next absolute bottom-9 lg:right-20 right-10 top-auto"></div>
	</div>
</div>
<!-- hero section end  -->

<!-- 2nd section  -->

<section class="lg:py-20 py-12  overflow-hidden ">
	<div class="w-full lg:text-left relative z-[1] overflow-hidden md:gap-10 gap-8 flex flex-col">
		<div class="w-max flex group/marquee gap-3 *:flex *:items-center *:gap-3 *:duration-700 *:[animation-duration:50s] *:animate-marquee-h lg:*:*:w-[1700px] ">
			<div class="group-hover/marquee:[animationplay-state:paused]">

				<div class="text-[#f3f4f6] text-[150px] sm:text-[190px] inline-block font-bold uppercase leading-[150px] ">
					CandidShutters
				</div>
				<div class="text-[#f3f4f6] text-[150px] sm:text-[190px] inline-block font-bold uppercase leading-[150px] ">
					CandidShutters
				</div>
				<div class="text-[#f3f4f6] text-[150px] sm:text-[190px] inline-block font-bold uppercase leading-[150px] ">
					CandidShutters
				</div>
				<div class="text-[#f3f4f6] text-[150px] sm:text-[190px] inline-block font-bold uppercase leading-[150px] ">
					CandidShutters
				</div>
				<div class="text-[#f3f4f6] text-[150px] sm:text-[190px] inline-block font-bold uppercase leading-[150px] ">
					CandidShutters
				</div>

			</div>

			<div class="group-hover/marquee:[animationplay-state:paused]">
				<div class="text-[#f3f4f6] text-[150px] sm:text-[190px] inline-block font-bold uppercase leading-[150px] ">
					CandidShutters
				</div>
				<div class="text-[#f3f4f6] text-[150px] sm:text-[190px] inline-block font-bold uppercase leading-[150px] ">
					CandidShutters
				</div>
				<div class="text-[#f3f4f6] text-[150px] sm:text-[190px] inline-block font-bold uppercase leading-[150px] ">
					CandidShutters
				</div>
				<div class="text-[#f3f4f6] text-[150px] sm:text-[190px] inline-block font-bold uppercase leading-[150px] ">
					CandidShutters
				</div>
				<div class="text-[#f3f4f6] text-[150px] sm:text-[190px] inline-block font-bold uppercase leading-[150px] ">
					CandidShutters
				</div>
			</div>
		</div>
	</div>

	<div class="mx-auto px-6 lg:px-8 max-w-7xl">
		<div class="grid grid-cols-1 md:grid-cols-2 gap-10">
			<div class="col-auto">
				<div class="size-full">
					<div class="-rotate-6 relative z-10 sm:ps-4 size-full">
						<img width="500" height="500" class="object-cover size-full" src="{{asset('/public/tailwind_frontend/2nd.webp')}}" alt="" />
					</div>
				</div>
			</div>
			<div class="col-auto">
				<div class="size-full">
					<div class="text-[#ec9a96] text-[45px] sm:text-[70px] leading-[100%] font-normal font-cursive relative z-10 md:-ms-28 -mt-9">
						CandidShutters</div>
					<div class="text-[#686e78] text-lg sm:text-2xl font-workSans text-pretty pb-4">
						Artistic Story Telling Celebrating YOU!
					</div>
					<div class="font-workSans text-pretty max-sm:text-sm">
						Welcome to CandidShutters, where we infuse magic into your wedding memories turning them into timeless tales of love and companionship.
					</div>
					<div class="font-workSans text-pretty max-sm:text-sm py-4">
						We are an award-winning premium wedding photography and films brand, known for our artistic, professional and customer centric approach.
					</div>
					<div class="font-workSans text-pretty max-sm:text-sm">
						We believe in and exist to showcase the most beautiful and heartfelt stories of your life in their true magnificence.
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- 2nd section  end-->


<!-- 3rd section  -->
<section class="max-sm:px-6 py-10">
	<div class="mx-auto max-w-7xl lg:px-8 px-6 pb-10">
		<div class="sm:text-5xl text-4xl relative text-balance md:w-1/2 w-full font-bold text-slate-800 pb-14">
			Gallery
			<div class="absolute -top-7 [font-family:Yesteryear] [-webkit-text-stroke:_0.8px_#000] opacity-40 text-transparent md:text-[120px] sm:text-[90px] text-[80px] font-light">
				Image
			</div>
		</div>
	</div>

	<!-- Fancybox Integration -->
	<div id="gallery-wrapper" class="grid md:grid-cols-4 grid-cols-2">
		<div>
			<a data-fancybox="gallery" href="{{asset('/public/tailwind_frontend/gallery2.webp')}}">
				<div class="relative overflow-hidden shadow-2xl group">
					<img width="400" height="400" src="{{asset('/public/tailwind_frontend/gallery2.webp')}}" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 1" />
					<div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
				</div>
			</a>
		</div>

		<div>
			<a data-fancybox="gallery" href="{{asset('/public/tailwind_frontend/gallery3.webp')}}">
				<div class="relative overflow-hidden shadow-2xl group">
					<img width="400" height="400" src="{{asset('/public/tailwind_frontend/gallery3.webp')}}" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
					<div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
				</div>
			</a>
		</div>
		<div>
			<a data-fancybox="gallery" href="{{asset('/public/tailwind_frontend/gallery4.webp')}}">
				<div class="relative overflow-hidden shadow-2xl group">
					<img width="400" height="400" src="{{asset('/public/tailwind_frontend/gallery4.webp')}}" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
					<div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
				</div>
			</a>
		</div>
		<div>
			<a data-fancybox="gallery" href="{{asset('/public/tailwind_frontend/gallery5.webp')}}">
				<div class="relative overflow-hidden shadow-2xl group">
					<img width="400" height="400" src="{{asset('/public/tailwind_frontend/gallery5.webp')}}" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
					<div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
				</div>
			</a>
		</div>
		<div>
			<a data-fancybox="gallery" href="{{asset('/public/tailwind_frontend/gallery6.webp')}}">
				<div class="relative overflow-hidden shadow-2xl group">
					<img width="400" height="400" src="{{asset('/public/tailwind_frontend/gallery6.webp')}}" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
					<div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
				</div>
			</a>
		</div>
		<div>
			<a data-fancybox="gallery" href="{{asset('/public/tailwind_frontend/gallery7.webp')}}">
				<div class="relative overflow-hidden shadow-2xl group">
					<img width="400" height="400" src="{{asset('/public/tailwind_frontend/gallery7.webp')}}" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
					<div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
				</div>
			</a>
		</div>
		<div>
			<a data-fancybox="gallery" href="{{asset('/public/tailwind_frontend/gallery8.webp')}}">
				<div class="relative overflow-hidden shadow-2xl group">
					<img width="400" height="400" src="{{asset('/public/tailwind_frontend/gallery8.webp')}}" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
					<div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
				</div>
			</a>
		</div>
		<div>
			<a data-fancybox="gallery" href="{{asset('/public/tailwind_frontend/gallery2.webp')}}">
				<div class="relative overflow-hidden shadow-2xl group">
					<img width="400" height="400" src="{{asset('/public/tailwind_frontend/gallery2.webp')}}" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
					<div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
				</div>
			</a>
		</div>
		<div>
			<a data-fancybox="gallery" href="{{asset('/public/tailwind_frontend/gallery3.webp')}}">
				<div class="relative overflow-hidden shadow-2xl group">
					<img width="400" height="400" src="{{asset('/public/tailwind_frontend/gallery3.webp')}}" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
					<div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
				</div>
			</a>
		</div>
		<div>
			<a data-fancybox="gallery" href="{{asset('/public/tailwind_frontend/gallery4.webp')}}">
				<div class="relative overflow-hidden shadow-2xl group">
					<img width="400" height="400" src="{{asset('/public/tailwind_frontend/gallery4.webp')}}" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
					<div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
				</div>
			</a>
		</div>
		<div>
			<a data-fancybox="gallery" href="{{asset('/public/tailwind_frontend/gallery5.webp')}}">
				<div class="relative overflow-hidden shadow-2xl group">
					<img width="400" height="400" src="{{asset('/public/tailwind_frontend/gallery5.webp')}}" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
					<div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
				</div>
			</a>
		</div>
		<div>
			<a data-fancybox="gallery" href="{{asset('/public/tailwind_frontend/gallery6.webp')}}">
				<div class="relative overflow-hidden shadow-2xl group">
					<img width="400" height="400" src="{{asset('/public/tailwind_frontend/gallery6.webp')}}" class="!h-56 object-cover group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" alt="Gallery Image 2" />
					<div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>
				</div>
			</a>
		</div>


		<!-- Add similar sections for other gallery images -->

	</div>

	<div class="mx-auto max-w-7xl lg:px-8 px-6 flex items-center justify-center">
		<button class="flex justify-between text-slate-950 items-center overflow-hidden group/btn gap-4 z-20 relative mt-8 sm:text-lg text-base">
			<span class="group-hover/btn:-translate-x-7 duration-300 w-7 h-[2px] bg-slate-950"></span>
			<span class="group-hover/btn:-translate-x-7 duration-300"> Visit Gallery</span>
		</button>
	</div>
</section>
<!-- 3rd section end -->


<!-- 4th section  -->
<div class="mx-auto max-w-7xl lg:px-8 px-6">
	<div class="sm:text-5xl text-4xl relative  text-balance md:w-1/2 w-full font-bold text-slate-800 pb-14">
		Gallery
		<div class="absolute -top-7 font-family-yesteryear -webkit-text-stroke:0.8px opacity-40 text-transparent md:text-[120px] sm:text-[90px] text-[80px] font-light">Video</div>
	</div>

	<!-- Swiper -->
	<div class="videoSwiper swiper swiper swiper-initialized swiper-horizontal swiper-backface-hidden h-full overflow-hidden [&_.swiper-button-next:after]:size-8 [&_.swiper-button-next:after]:text-lg [&_.swiper-button-next:after]:bg-white [&_.swiper-button-next:after]:flex [&_.swiper-button-next:after]:items-center [&_.swiper-button-next:after]:justify-center [&_.swiper-button-next:after]:rounded-full [&_.swiper-button-next:after]:text-slate-900 [&_.swiper-button-next:after]:font-bold [&_.swiper-button-next:after]:flex-shrink-0 [&_.swiper-button-prev:after]:size-8 [&_.swiper-button-prev:after]:text-lg [&_.swiper-button-prev:after]:bg-white [&_.swiper-button-prev:after]:flex [&_.swiper-button-prev:after]:items-center [&_.swiper-button-prev:after]:justify-center [&_.swiper-button-prev:after]:rounded-full [&_.swiper-button-prev:after]:text-slate-900 [&_.swiper-button-prev:after]:font-bold [&_.swiper-button-prev:after]:flex-shrink-0 [&_.swiper-button-prev]:max-sm:hidden [&_.swiper-button-next]:max-sm:hidden [&_.swiper-pagination-bullet]:text-white/80 [&_.swiper-pagination-bullet-active]:bg-white [&_.swiper-pagination-bullet]:size-2 [&_.swiper-pagination-bullet]:p-1 [&_.swiper-pagination-bullet]:rounded-full">
		<div class="swiper-wrapper">
			<!-- Slide 1 -->
			<div class="swiper-slide">
				<div class="relative aspect-video w-full bg-gray-300 rounded-lg overflow-hidden">
					<iframe class="h-full" src="https://www.youtube.com/embed/X1lTCG8VKhA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
			</div>
			<!-- Slide 2 -->
			<div class="swiper-slide">
				<div class="relative aspect-video w-full bg-gray-300 rounded-lg overflow-hidden">
					<iframe class="h-full" src="https://www.youtube.com/embed/RW1Vvm_jbu0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
			</div>
			<!-- Slide 3 -->
			<div class="swiper-slide">
				<div class="relative aspect-video w-full bg-gray-300 rounded-lg overflow-hidden">
					<iframe class="h-full" src="https://www.youtube.com/embed/ysZEG4bSqvE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
			</div>
			<!-- Slide 1 -->
			<div class="swiper-slide">
				<div class="relative aspect-video w-full bg-gray-300 rounded-lg overflow-hidden">
					<iframe class="h-full" src="https://www.youtube.com/embed/X1lTCG8VKhA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
			</div>
			<!-- Slide 2 -->
			<div class="swiper-slide">
				<div class="relative aspect-video w-full bg-gray-300 rounded-lg overflow-hidden">
					<iframe class="h-full" src="https://www.youtube.com/embed/RW1Vvm_jbu0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
			</div>
			<!-- Slide 3 -->
			<div class="swiper-slide">
				<div class="relative aspect-video w-full bg-gray-300 rounded-lg overflow-hidden">
					<iframe class="h-full" src="https://www.youtube.com/embed/ysZEG4bSqvE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
			</div>
			<!-- Add more slides as needed -->
		</div>
		<!-- Add Pagination and Navigation Buttons -->
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
	</div>

	<div class="mx-auto max-w-7xl lg:px-8 px-6 flex items-center justify-center">
		<button class="flex justify-between text-slate-950 items-center overflow-hidden group/btn gap-4 z-20 relative mt-8 sm:text-lg text-base">
			<span class="group-hover/btn:-translate-x-7 duration-300 w-7 h-[2px] bg-slate-950"></span>
			<span class="group-hover/btn:-translate-x-7 duration-300">Visit Our YouTube Channel</span>
		</button>
	</div>
</div>

<!-- 4th section end  -->


<!-- {/* counter 5th */} -->

<div class="mx-auto max-w-7xl px-6 lg:px-8 w-full lg:py-20 sm:py-10 max-sm:pb-10">
	<div class="grid grid-cols-2 md:grid-cols-5 gap-y-4 md:gap-4 items-center sm:mt-14 mt-5">
		<div class="col-span-3">
			<div class="py-6">
				<div class="text-[#ec9a96] text-center text-[45px] sm:text-[70px] leading-[100%] font-normal font-cursive pb-8">
					Nurtured to perfection
				</div>
				<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 gap-y-10 md:gap-y-20">
					<div class="">
						<div class="font-semibold text-5xl text-center text-gray-300">
							75+
						</div>
						<div class="text-xl text-center pt-4 font-bold uppercase text-black/80">
							Cities travelled
						</div>
						<div class="text-sm text-center text-black/60 pt-2">
							Spread across the globe
						</div>
					</div>
					<div class="">
						<div class="font-semibold text-5xl text-center text-gray-300">
							1000+
						</div>
						<div class="text-xl text-center pt-4 font-bold uppercase text-black/80">
							Happy Couples
						</div>
						<div class="text-sm text-center text-black/60 pt-2">
							Hailing from varied cultures, regions and religions.
						</div>
					</div>
					<div class="">
						<div class="font-semibold text-5xl text-center text-gray-300">
							1 M+
						</div>
						<div class="text-xl text-center pt-4 font-bold uppercase text-black/80">
							Photos delivered
						</div>
						<div class="text-sm text-center text-black/60 pt-2">
							Edited pictures of life defining moments.
						</div>
					</div>
					<div class="">
						<div class="font-semibold text-5xl text-center text-gray-300">
							850+
						</div>
						<div class="text-xl text-center pt-4 font-bold uppercase text-black/80">
							Videos produced
						</div>
						<div class="text-sm text-center text-black/60 pt-2">
							Edited videos that are a real tribute to love and companionship.
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-span-2">
			<div class="aspect-[1/1]">
				<img class="size-full object-cover" width={1000} height={1500} src="{{asset('/public/tailwind_frontend/counterimage.jpeg')}}" alt="" />
			</div>
		</div>
	</div>
</div>


<!-- 5th section end  -->

<!-- 6th section  -->
<div class="bg-black/90 py-20">
	<div class="mx-auto max-w-7xl lg:px-8 px-6">
		<div class="flex items-center justify-between">
			<div class="text-white text-[45px] sm:text-[70px] leading-[100%] font-normal font-cursive pb-8">
				Client Testimonial
			</div>
			<div class="flex items-center space-x-2 fill-gray-500">
				<button id="prevButton">
					<svg class="h-10 w-10 rounded-full border p-1 hover:border-amber-600 hover:fill-amber-600 dark:fill-white dark:hover:fill-amber-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M13.293 6.293L7.58 12l5.7 5.7 1.41-1.42 -4.3-4.3 4.29-4.293Z"></path>
					</svg>
				</button>
				<button id="nextButton">
					<svg class="h-10 w-10 rounded-full border p-1 hover:border-amber-600 hover:fill-amber-600 dark:fill-white dark:hover:fill-amber-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M10.7 17.707l5.7-5.71 -5.71-5.707L9.27 7.7l4.29 4.293 -4.3 4.29Z"></path>
					</svg>
				</button>
			</div>
		</div>

		<!-- Swiper -->
		<div class="swiper-container testimonialSwiper swiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="bg-gray-100 rounded-lg rounded-br-none p-5 relative">
						<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-gray-300 size-20 absolute left-2 top-2 " xmlns="http://www.w3.org/2000/svg">
							<path d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
						</svg>
						<div class="relative z-10">
							<div class=" text-sm md:text-base leading-7 text-slate-600 ">The best company for website designing. my website looks stunning and designed in a committed timeline. Great work. Recommended for the website.</div>
							<div class="md:flex items-center mt-5 gap-3">
								<div class="size-12 rounded-full overflow-hidden">
									<img width={100} height={100} class="size-full object-contain object-center" src="{{asset('/public/tailwind_frontend/user-1.jpg')}}" alt="akki-art-and-craft" />
								</div>
								<div class="">
									<div class="text-slate-950 text-base px-2 font-medium text-nowrap">Anu Rajput</div>
									<div class="text-slate-500 text-sm px-2  text-nowrap">2023-11-03</div>

								</div>
							</div>
							<div class="bg-slate-950/20 text-white font-bold text-2xl size-20 rounded-full flex justify-center items-start p-4 absolute -bottom-10 -right-10 -rotate-45">
								<span class="flex items-center justify-center size-8">
									<img width={100} height={100} class="size-full object-contain object-center" src="{{asset('/public/tailwind_frontend/googleIcon.svg')}}" alt="akki-art-and-craft" />

								</span>
							</div>

						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="bg-gray-100 rounded-lg rounded-br-none p-5 relative">
						<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-gray-300 size-20 absolute left-2 top-2 " xmlns="http://www.w3.org/2000/svg">
							<path d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
						</svg>
						<div class="relative z-10">
							<div class=" text-sm md:text-base leading-7 text-slate-600 ">The best company for website designing. my website looks stunning and designed in a committed timeline. Great work. Recommended for the website.</div>
							<div class="md:flex items-center mt-5 gap-3">
								<div class="size-12 rounded-full overflow-hidden">
									<img width={100} height={100} class="size-full object-contain object-center" src="{{asset('/public/tailwind_frontend/user-1.jpg')}}" alt="akki-art-and-craft" />
								</div>
								<div class="">
									<div class="text-slate-950 text-base px-2 font-medium text-nowrap">Anu Rajput</div>
									<div class="text-slate-500 text-sm px-2  text-nowrap">2023-11-03</div>

								</div>
							</div>
							<div class="bg-slate-950/20 text-white font-bold text-2xl size-20 rounded-full flex justify-center items-start p-4 absolute -bottom-10 -right-10 -rotate-45">
								<span class="flex items-center justify-center size-8">
									<img width={100} height={100} class="size-full object-contain object-center" src="{{asset('/public/tailwind_frontend/googleIcon.svg')}}" alt="akki-art-and-craft" />

								</span>
							</div>

						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="bg-gray-100 rounded-lg rounded-br-none p-5 relative">
						<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-gray-300 size-20 absolute left-2 top-2 " xmlns="http://www.w3.org/2000/svg">
							<path d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
						</svg>
						<div class="relative z-10">
							<div class=" text-sm md:text-base leading-7 text-slate-600 ">The best company for website designing. my website looks stunning and designed in a committed timeline. Great work. Recommended for the website.</div>
							<div class="md:flex items-center mt-5 gap-3">
								<div class="size-12 rounded-full overflow-hidden">
									<img width={100} height={100} class="size-full object-contain object-center" src="{{asset('/public/tailwind_frontend/user-1.jpg')}}" alt="akki-art-and-craft" />
								</div>
								<div class="">
									<div class="text-slate-950 text-base px-2 font-medium text-nowrap">Anu Rajput</div>
									<div class="text-slate-500 text-sm px-2  text-nowrap">2023-11-03</div>

								</div>
							</div>
							<div class="bg-slate-950/20 text-white font-bold text-2xl size-20 rounded-full flex justify-center items-start p-4 absolute -bottom-10 -right-10 -rotate-45">
								<span class="flex items-center justify-center size-8">
									<img width={100} height={100} class="size-full object-contain object-center" src="{{asset('/public/tailwind_frontend/googleIcon.svg')}}" alt="akki-art-and-craft" />

								</span>
							</div>

						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="bg-gray-100 rounded-lg rounded-br-none p-5 relative">
						<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-gray-300 size-20 absolute left-2 top-2 " xmlns="http://www.w3.org/2000/svg">
							<path d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
						</svg>
						<div class="relative z-10">
							<div class=" text-sm md:text-base leading-7 text-slate-600 ">The best company for website designing. my website looks stunning and designed in a committed timeline. Great work. Recommended for the website.</div>
							<div class="md:flex items-center mt-5 gap-3">
								<div class="size-12 rounded-full overflow-hidden">
									<img width={100} height={100} class="size-full object-contain object-center" src="{{asset('/public/tailwind_frontend/user-1.jpg')}}" alt="akki-art-and-craft" />
								</div>
								<div class="">
									<div class="text-slate-950 text-base px-2 font-medium text-nowrap">Anu Rajput</div>
									<div class="text-slate-500 text-sm px-2  text-nowrap">2023-11-03</div>

								</div>
							</div>
							<div class="bg-slate-950/20 text-white font-bold text-2xl size-20 rounded-full flex justify-center items-start p-4 absolute -bottom-10 -right-10 -rotate-45">
								<span class="flex items-center justify-center size-8">
									<img width={100} height={100} class="size-full object-contain object-center" src="{{asset('/public/tailwind_frontend/googleIcon.svg')}}" alt="akki-art-and-craft" />

								</span>
							</div>

						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="bg-gray-100 rounded-lg rounded-br-none p-5 relative">
						<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-gray-300 size-20 absolute left-2 top-2 " xmlns="http://www.w3.org/2000/svg">
							<path d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
						</svg>
						<div class="relative z-10">
							<div class=" text-sm md:text-base leading-7 text-slate-600 ">The best company for website designing. my website looks stunning and designed in a committed timeline. Great work. Recommended for the website.</div>
							<div class="md:flex items-center mt-5 gap-3">
								<div class="size-12 rounded-full overflow-hidden">
									<img width={100} height={100} class="size-full object-contain object-center" src="{{asset('/public/tailwind_frontend/user-1.jpg')}}" alt="akki-art-and-craft" />
								</div>
								<div class="">
									<div class="text-slate-950 text-base px-2 font-medium text-nowrap">Anu Rajput</div>
									<div class="text-slate-500 text-sm px-2  text-nowrap">2023-11-03</div>

								</div>
							</div>
							<div class="bg-slate-950/20 text-white font-bold text-2xl size-20 rounded-full flex justify-center items-start p-4 absolute -bottom-10 -right-10 -rotate-45">
								<span class="flex items-center justify-center size-8">
									<img width={100} height={100} class="size-full object-contain object-center" src="{{asset('/public/tailwind_frontend/googleIcon.svg')}}" alt="akki-art-and-craft" />

								</span>
							</div>

						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="bg-gray-100 rounded-lg rounded-br-none p-5 relative">
						<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-gray-300 size-20 absolute left-2 top-2 " xmlns="http://www.w3.org/2000/svg">
							<path d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
						</svg>
						<div class="relative z-10">
							<div class=" text-sm md:text-base leading-7 text-slate-600 ">The best company for website designing. my website looks stunning and designed in a committed timeline. Great work. Recommended for the website.</div>
							<div class="md:flex items-center mt-5 gap-3">
								<div class="size-12 rounded-full overflow-hidden">
									<img width={100} height={100} class="size-full object-contain object-center" src="{{asset('/public/tailwind_frontend/user-1.jpg')}}" alt="akki-art-and-craft" />
								</div>
								<div class="">
									<div class="text-slate-950 text-base px-2 font-medium text-nowrap">Anu Rajput</div>
									<div class="text-slate-500 text-sm px-2  text-nowrap">2023-11-03</div>

								</div>
							</div>
							<div class="bg-slate-950/20 text-white font-bold text-2xl size-20 rounded-full flex justify-center items-start p-4 absolute -bottom-10 -right-10 -rotate-45">
								<span class="flex items-center justify-center size-8">
									<img width={100} height={100} class="size-full object-contain object-center" src="{{asset('/public/tailwind_frontend/googleIcon.svg')}}" alt="akki-art-and-craft" />

								</span>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- end  -->

<!-- 7th section start  -->
<div class=" py-20">
	<div class="mx-auto max-w-7xl lg:px-8 px-6">
		<div class="flex items-center justify-between">
			<div class="text-white text-[45px] sm:text-[70px] leading-[100%] font-normal font-cursive pb-8">
				Client Testimonial
			</div>
			<div class="flex items-center space-x-2 fill-gray-500">
				<button id="prevButton">
					<svg class="h-10 w-10 rounded-full border p-1 hover:border-amber-600 hover:fill-amber-600 dark:fill-white dark:hover:fill-amber-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M13.293 6.293L7.58 12l5.7 5.7 1.41-1.42 -4.3-4.3 4.29-4.293Z"></path>
					</svg>
				</button>
				<button id="nextButton">
					<svg class="h-10 w-10 rounded-full border p-1 hover:border-amber-600 hover:fill-amber-600 dark:fill-white dark:hover:fill-amber-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M10.7 17.707l5.7-5.71 -5.71-5.707L9.27 7.7l4.29 4.293 -4.3 4.29Z"></path>
					</svg>
				</button>
			</div>
		</div>

		<!-- Swiper -->
		<div class="swiper-container blogSwiper swiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<a href="{{ url('/blog-details') }}" class="group flex flex-col focus:outline-none">
						<div class="aspect-[1/0.6] aspect-h-12 overflow-hidden bg-gray-100 rounded-2xl">
							<img width="500" height="500" class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out object-cover rounded-2xl size-full"
								src="https://images.unsplash.com/photo-1641279676778-3c94588147fd?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
								alt="Blog Image" />
						</div>

						<div class="pt-4">
							<h3 class="relative inline-block font-medium text-lg text-black before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-amber-500 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100">
								eYoga
							</h3>
							<p class="mt-1 text-gray-600">
								A revamped and dynamic approach to yoga analytics
							</p>

							<div class="mt-3 flex flex-wrap gap-2">
								<span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">
									Discovery
								</span>
								<span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">
									Brand Guidelines
								</span>
								<span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">
									Yoga
								</span>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="{{ url('/blog-details') }}" class="group flex flex-col focus:outline-none">
						<div class="aspect-[1/0.6] aspect-h-12 overflow-hidden bg-gray-100 rounded-2xl">
							<img width="500" height="500" class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out object-cover rounded-2xl size-full"
								src="https://images.unsplash.com/photo-1587271636175-90d58cdad458?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
								alt="Blog Image" />
						</div>

						<div class="pt-4">
							<h3 class="relative inline-block font-medium text-lg text-black before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-amber-500 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100">
								eYoga
							</h3>
							<p class="mt-1 text-gray-600">
								A revamped and dynamic approach to yoga analytics
							</p>

							<div class="mt-3 flex flex-wrap gap-2">
								<span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">
									Discovery
								</span>
								<span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">
									Brand Guidelines
								</span>
								<span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">
									Yoga
								</span>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="{{ url('/blog-details') }}" class="group flex flex-col focus:outline-none">
						<div class="aspect-[1/0.6] aspect-h-12 overflow-hidden bg-gray-100 rounded-2xl">
							<img width="500" height="500" class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out object-cover rounded-2xl size-full"
								src="https://images.unsplash.com/photo-1587271449604-04bb40332709?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
								alt="Blog Image" />
						</div>

						<div class="pt-4">
							<h3 class="relative inline-block font-medium text-lg text-black before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-amber-500 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100">
								eYoga
							</h3>
							<p class="mt-1 text-gray-600">
								A revamped and dynamic approach to yoga analytics
							</p>

							<div class="mt-3 flex flex-wrap gap-2">
								<span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">
									Discovery
								</span>
								<span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">
									Brand Guidelines
								</span>
								<span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">
									Yoga
								</span>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="{{ url('/blog-details') }}" class="group flex flex-col focus:outline-none">
						<div class="aspect-[1/0.6] aspect-h-12 overflow-hidden bg-gray-100 rounded-2xl">
							<img width="500" height="500" class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out object-cover rounded-2xl size-full"
								src="https://images.unsplash.com/photo-1641279676778-3c94588147fd?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
								alt="Blog Image" />
						</div>

						<div class="pt-4">
							<h3 class="relative inline-block font-medium text-lg text-black before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-amber-500 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100">
								eYoga
							</h3>
							<p class="mt-1 text-gray-600">
								A revamped and dynamic approach to yoga analytics
							</p>

							<div class="mt-3 flex flex-wrap gap-2">
								<span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">
									Discovery
								</span>
								<span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">
									Brand Guidelines
								</span>
								<span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">
									Yoga
								</span>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="{{ url('/blog-details') }}" class="group flex flex-col focus:outline-none">
						<div class="aspect-[1/0.6] aspect-h-12 overflow-hidden bg-gray-100 rounded-2xl">
							<img width="500" height="500" class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out object-cover rounded-2xl size-full"
								src="https://images.unsplash.com/photo-1587271636175-90d58cdad458?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
								alt="Blog Image" />
						</div>

						<div class="pt-4">
							<h3 class="relative inline-block font-medium text-lg text-black before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-amber-500 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100">
								eYoga
							</h3>
							<p class="mt-1 text-gray-600">
								A revamped and dynamic approach to yoga analytics
							</p>

							<div class="mt-3 flex flex-wrap gap-2">
								<span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">
									Discovery
								</span>
								<span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">
									Brand Guidelines
								</span>
								<span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">
									Yoga
								</span>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="{{ url('/blog-details') }}" class="group flex flex-col focus:outline-none">
						<div class="aspect-[1/0.6] aspect-h-12 overflow-hidden bg-gray-100 rounded-2xl">
							<img width="500" height="500" class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out object-cover rounded-2xl size-full"
								src="https://images.unsplash.com/photo-1587271449604-04bb40332709?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
								alt="Blog Image" />
						</div>

						<div class="pt-4">
							<h3 class="relative inline-block font-medium text-lg text-black before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-amber-500 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100">
								eYoga
							</h3>
							<p class="mt-1 text-gray-600">
								A revamped and dynamic approach to yoga analytics
							</p>

							<div class="mt-3 flex flex-wrap gap-2">
								<span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">
									Discovery
								</span>
								<span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">
									Brand Guidelines
								</span>
								<span class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">
									Yoga
								</span>
							</div>
						</div>
					</a>
				</div>

		

			</div>
		</div>
	</div>
</div>
<!-- 7th section end  -->

@endsection



@push('page-script')
@endpush