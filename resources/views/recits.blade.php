@include('includes/head')
<body class="bg-gray-200">
@include('includes/nav')

<section>
    
    
@foreach($recits as $recit)

@php
    $photo = $recit->Photos; 
@endphp
<a rel="noopener noreferrer" href="{{ route('show', ['id' => $recit->id]) }}" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">


        <img id="item" src="{{ asset( $photo[0]->image ?? false) }}" alt="recit image" class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500">



    <div class="p-6 space-y-2">
        <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">{{ $recit->title }}</h3>
        <span class="text-xs dark:text-gray-400">{{ $recit->created_at }}</span>
        <p>{{ substr($recit->content, 0, 300) }}...</p>
    </div>
</a>
@endforeach
  
</section>
@include('includes/footer')    
</body>