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
    
  
</section>
<section class="">
<h1 class="p-8 xl:text-5xl md:text-4xl text-2xl font-semibold leading-tight text-center text-gray-800 sm:mb-0 mb-12">
    Select from a varity of destinations
</h1>
@foreach($destinations as $destination)
 
  <div class="border-r shadow-lg my-8 border-b border-l max-w-2xl mx-auto border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
    <div class="mb-8">
     
      <a href="" class="text-gray-900 font-bold text-xl mb-2"><span><img class="h-4" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABcElEQVR4nO2YvSuGYRTGfyKZjEwGk/KVKPI657V4SvZ3YLHYDDIpu7JJ+QNMBrsMZhuRUhYGi9hMErn0vD7Kx+B5i/tN51dneLrvu+dcXffH6UAQBN+Szcwpj7dvjdMkpyRjWcaOnDMZd3Ik41HGhZzd6niJAepFgMbokbMq46qa7M/jVMaSRmlLIuC8F+VRMOmvkbvj7MmoqJvmIjnI6VCZBTkH6QR8jGsZm3JmZQxpmNb3ZEdpkzMoY1rGhowTOU9va+tFQM1BCPBwQLGFihCH2OMWUlyj5/GQES+xopTw9IWcopjzcECxhYry/4o540HGvpwVlZlSiS6N05LPVYVGOZ0yJqvjzlE9CTiWsagR2ousl9EvY03OTRIB2afGVq1U3TEm5GzLuS+UuHEpZz3vYCQT8EHMS+tk9rW1ciDn9lPL5VDOlpx5lekTNNT8s98Q8KdkISAxWTiQmCwcSEwWDiQmCwcSk4UDQRDwBzwDzWmdOjUCmIIAAAAASUVORK5CYII="></span>{{$destination->dest_name}}</a>
      <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
    </div>
    <div class="flex items-center">
      <img class="w-10 h-10 rounded-full mr-4" src="{{asset('img/africa.jpg')}}" alt="Avatar of Jonathan Reinink">
      <div class="text-sm">
        <p class="text-gray-900 leading-none"></p>
        <p class="text-gray-600">Jan 30</p>
      </div>
    </div>
  </div>
@endforeach

</section>

@include('includes/footer') 
 

<script src="{{ asset('js/carousel.js') }}"></script>
</body>
