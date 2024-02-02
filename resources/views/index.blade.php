@include('includes/head')
<body class="bg-gray-200">
    @include('includes/nav')
    <section>
        <!-- component -->
<h1 class="p-16 xl:text-5xl md:text-4xl text-2xl font-semibold leading-tight text-center text-gray-800 sm:mb-0 mb-12">
Exploring Horizons
        </h1>
        <div class="md:mt-14 mt-4 relative sm:flex items-center justify-center">
            <img src="https://i.ibb.co/KjrPCyW/map.png" alt="world map image" class="w-full xl:h-full h-96 object-cover object-fill sm:block hidden" />
            <img src="https://i.ibb.co/SXKj9Mf/map-bg.png" alt="mobile-image" class="sm:hidden -mt-10 block w-full h-96 object-cover object-fill absolute z-0" />

            <div class="shadow-lg xl:p-6 p-4 sm:w-auto w-full bg-white sm:absolute relative z-20 sm:mt-0 mt-4 left-0 xl:ml-56 sm:ml-12 xl:-mt-40 ">
                <p class="text-3xl font-semibold text-gray-800">{{$totaldetinations}}+</p>
                <p class="text-base leading-4 xl:mt-4 mt-2 text-gray-600">Destinations</p>
            </div>
            <div class="shadow-lg xl:p-6 p-4 w-48 sm:w-auto w-full bg-white sm:absolute relative z-20 sm:mt-0 mt-4 xl:mt-80  xl:-ml-0 sm:-ml-12">
                <p class="text-3xl font-semibold text-gray-800">{{ $totalArticles }}+</p>
                <p class="text-base leading-4 xl:mt-4 mt-2 text-gray-600">Active articles</p>
            </div>
            <div class="shadow-lg xl:p-6 p-4 sm:w-auto w-full bg-white sm:absolute relative z-20 md:mt-0 sm:-mt-5 mt-4 right-0 xl:mr-56 sm:mr-24">
                <p class="text-3xl font-semibold text-gray-800">15+</p>
                <p class="text-base leading-4 xl:mt-4 mt-2 text-gray-600">Users</p>
            </div>
           
        </div>
    </section>

<section class="dark:bg-gray-800 dark:text-gray-100 p-8">

	<div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
		<a rel="noopener noreferrer" href="#" class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-gray-900">
			<img src="https://source.unsplash.com/random/480x360" alt="" class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500">
			<div class="p-6 space-y-2 lg:col-span-5">
				<h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">Noster tincidunt reprimique ad pro</h3>
				<span class="text-xs dark:text-gray-400">February 19, 2021</span>
				<p>Ei delenit sensibus liberavisse pri. Quod suscipit no nam. Est in graece fuisset, eos affert putent doctus id.</p>
			</div>
		</a>
		<div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
		@foreach($recits as $recit)
			<a rel="noopener noreferrer" href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
				<img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500" src="{{ asset('images/storage' . $recit->image) }}">
				<div class="p-6 space-y-2">
					<h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">{{$recit->title}}</h3>
					<span class="text-xs dark:text-gray-400">{{$recit->created_at}}</span>
					<p>{{$recit->content}}</p>
				</div>
			</a>
		@endforeach
		
		
		</div>
		<div class="flex justify-center">
			<button type="button" class="px-6 py-3 text-sm rounded-md hover:underline dark:bg-gray-900 dark:text-gray-400">Load more posts...</button>
		</div>
	</div>
</section>
    
@include('includes/footer') 



</body>
</html>