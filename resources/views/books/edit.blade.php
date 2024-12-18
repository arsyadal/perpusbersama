@include('components.navbar') <!-- Include the navbar component -->

<div class="container mx-auto px-4">
    <h1 class="text-4xl text-center font-bold mt-5">Edit Buku</h1>
    <form action="{{ route('books.update', $book) }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto mt-10 bg-white p-8 rounded-lg shadow-lg">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Judul:</label>
            <input type="text" name="title" value="{{ $book->title }}" placeholder="Judul" class="input input-bordered w-full">
        </div>
        <div class="mb-4">
            <label for="author" class="block text-gray-700 text-sm font-bold mb-2">Penulis:</label>
            <input type="text" name="author" value="{{ $book->author }}" placeholder="Penulis" class="input input-bordered w-full">
        </div>
        <div class="mb-4">
            <label for="publisher" class="block text-gray-700 text-sm font-bold mb-2">Penerbit:</label>
            <input type="text" name="publisher" value="{{ $book->publisher }}" placeholder="Penerbit" class="input input-bordered w-full">
        </div>
        <div class="mb-4">
            <label for="year" class="block text-gray-700 text-sm font-bold mb-2">Tahun:</label>
            <input type="number" name="year" value="{{ $book->year }}" placeholder="Tahun" class="input input-bordered w-full">
        </div>
        <div class="mb-4">
            <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Gambar:</label>
            <img src="{{ asset('storage/' . $book->image) }}" alt="Gambar Buku" class="w-20 h-20 object-cover mb-2">
            <input type="file" name="image" class="file-input file-input-bordered w-full">
        </div>
        <div class="flex justify-end">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>