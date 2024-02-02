@include('includes/head')
<body class="bg-gray-200">
@include('includes/nav')
<div id="modal" class="flex justify-center  fixed z-10 inset-0 overflow-y-auto ">
      <div class="flex items-center justify-center min-h-screen">
        <div class="relative bg-white w-3/4 p-6 rounded shadow-lg">
          <!-- Modal Close Button -->
          <button
            id="closeModal"
            class="absolute top-0 right-0 mt-4 mr-4 text-gray-500 hover:text-gray-700 cursor-pointer"
            onclick="closeModal()"
          >
            &times;
          </button>

          <!-- Modal Content - Form -->
          <form class="space-y-4" enctype="multipart/form-data" method="post" action="">
            <!-- Form Fields -->
            <div class="mb-4">
              <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
              <input
                type="text"
                id="title"
                name="title"
                class="mt-1 p-2 w-full border rounded-md"
                placeholder="Enter the title"
              />
            </div>

            <div class="mb-4">
              <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
              <textarea
                id="content"
                name="content"
                class="mt-1 p-2 w-full border rounded-md"
                placeholder="Enter the content"
              ></textarea>
            </div>
            <div class="mb-4">
            <label for="destination" class="block text-sm font-medium text-gray-700">choose a destination:</label>
            <select name="destination" id="destinations">
            @foreach($destinations as $destination)
                <option value="{{$destination->id}}">{{$destination->dest_name}}</option>
            @endforeach
            </select>

            </div>
            
            

            <!-- Image Input Field -->
            <div class="mb-4">
              <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
              <input
                type="file"
                id="image"
                name="image"
                accept="image/*"
                class="mt-1 p-2 w-full border rounded-md"
              />
            </div>

            <!-- Submit Button -->
            <button
              type="submit"
              class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
              name="add"
            >
              Submit
            </button>
          </form>
        </div>
      </div>
    </div>
    

</body>