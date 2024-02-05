@include('includes/head')
<body class="bg-gray-200">
@include('includes/nav')

<section>
    
    
    <div  class=" p-8 block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-gray-900">
    @foreach($recit->Photos as $photo)
			<img src="{{ asset( $photo->image) }}" alt="recit image" class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500">
    @endforeach
			<div class="p-6 space-y-2 lg:col-span-5">
				<h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">{{$recit->title}}</h3>
				<span class="text-xs dark:text-gray-400">{{$recit->created_at}}</span>
				<p>{{ substr($recit->content, 0, 100) }}...</p>
			</div>
	</div>
    <div class="p-8">
        <p class="leading-loose text-lg">
            {{$recit->content}}
        </p>
    </div>
  
</section>
@include('includes/footer')    
</body>