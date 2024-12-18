@include('components.navbar') <!-- Include the navbar component -->

<h1 class="text-4xl text-center font-bold mt-5">Daftar Buku</h1>

<div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($books as $book)
        <div class="card bg-base-100 shadow-xl mt-10">
            <figure>
                @if($book->image)
                    <img src="{{ asset('storage/' . $book->image) }}" alt="Gambar Buku" class="w-full h-96 object-cover">
                @else
                    <img src="https://via.placeholder.com/150" alt="Tidak ada gambar" class="w-full h-96 object-cover">
                @endif
            </figure>
            <div class="card-body">
                <h5 class="card-title">{{ $book->title }}</h5>
                <p class="card-text">Penulis: {{ $book->author }}</p>
                <p class="card-text">Penerbit: {{ $book->publisher }}</p>
                <p class="card-text">Tahun: {{ $book->year }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>