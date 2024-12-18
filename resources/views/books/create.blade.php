@include('components.navbar') <!-- Include the navbar component -->

<div class="container mx-auto px-4">
    <h1 class="text-4xl text-center font-bold mt-5">Tambah Buku</h1>
    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto mt-10 bg-white p-8 rounded-lg shadow-lg">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Judul:</label>
            <input type="text" name="title" placeholder="Judul" class="input input-bordered w-full">
        </div>
        <div class="mb-4">
            <label for="author" class="block text-gray-700 text-sm font-bold mb-2">Penulis:</label>
            <input type="text" name="author" placeholder="Penulis" class="input input-bordered w-full">
        </div>
        <div class="mb-4">
            <label for="publisher" class="block text-gray-700 text-sm font-bold mb-2">Penerbit:</label>
            <input type="text" name="publisher" placeholder="Penerbit" class="input input-bordered w-full">
        </div>
        <div class="mb-4">
            <label for="year" class="block text-gray-700 text-sm font-bold mb-2">Tahun:</label>
            <input type="number" name="year" placeholder="Tahun" class="input input-bordered w-full">
        </div>
        <div class="mb-4">
            <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Gambar:</label>
            <input type="file" name="image" class="file-input file-input-bordered w-full">
        </div>
        <div class="flex justify-end">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>