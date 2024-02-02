@include('includes/head')

<body class="bg-gray-200">
    @include('includes/nav')
    <h1 class="p-8 xl:text-5xl md:text-4xl text-2xl font-semibold leading-tight text-center text-gray-800 sm:mb-0 mb-12">
        Experiment sharing knowledge
    </h1>
    <div class="flex justify-center   inset-0 ">
        <div class="flex items-center justify-center min-h-screen">
            <div class="relative bg-white w-4/5 p-6 rounded shadow-lg">
                <!-- Modal Close Button -->


                <!-- Modal Content - Form -->
                <form class="space-y-4" enctype="multipart/form-data" method="post" action="/insert">
                    <!-- Form Fields -->
                    @csrf
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" id="title" name="title" class="mt-1 p-2 w-full border rounded-md" placeholder="Enter the title" />

                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                        <textarea id="content" name="content" class="mt-1 p-2 w-full border rounded-md" placeholder="Enter the content"></textarea>

                        @error('content')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="destination" class="block text-sm font-medium text-gray-700">choose a destination:</label>
                        <select name="dest_id" id="destinations">
                            @foreach($destinations as $destination)
                            <option value="{{$destination->id}}">{{$destination->dest_name}}</option>
                            @endforeach

                        </select>

                    </div>



                    <!-- Image Input Field -->
                    <div class="mb-4">
                        <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                        <input type="file" id="image" name="images[]" accept="image/*" class="mt-1 p-2 w-full border rounded-md" multiple />

                        @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>

    @include('includes/footer')
</body>