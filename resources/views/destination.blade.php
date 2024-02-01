@include('includes/head')
<body class="bg-gray-200">
@include('includes/nav')
<section>
    <div id="carousel" class="carousel">
        <img id="item" src="{{asset('img/africa.jpg')}}" alt="destination" class="w-3/4 h-52 my-16   mx-auto shadow-xl rounded-lg">
        <img id="item" src="{{asset('img/asia.jpg')}}" alt="destination" class="w-3/4 h-52 my-16  mx-auto shadow-xl rounded-lg">
        <img id="item" src="{{asset('img/australia.jpg')}}" alt="destination" class="w-3/4 h-52 my-16  mx-auto shadow-xl rounded-lg">
        <img id="item" src="{{asset('img/eu.jpg')}}" alt="destination" class="w-3/4  h-52 my-16 mx-auto shadow-xl rounded-lg">
        <img id="item" src="{{asset('img/na.jpg')}}" alt="destination" class="w-3/4 h-52 my-16  mx-auto shadow-xl rounded-lg">
        <img id="item" src="{{asset('img/sa.jpg')}}" alt="destination" class="w-3/4 h-52 my-16  mx-auto shadow-xl rounded-lg">
    </div>
    <h1 class="p-8 xl:text-5xl md:text-4xl text-2xl font-semibold leading-tight text-center text-gray-800 sm:mb-0 mb-12">
    Select from a varity of destinations
            </h1>
  
</section>

@include('includes/footer') 
<script src="{{ asset('js/carousel.js') }}"></script>
</body>
