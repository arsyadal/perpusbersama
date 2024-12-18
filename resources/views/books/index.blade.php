@include('components.navbar') <!-- Include the navbar component -->

<h1 class="text-4xl text-center font-bold mt-5">Daftar Buku</h1>

<div class="container mx-auto px-4">
    <div class="flex justify-end mb-4">
        <a href="{{ route('books.create') }}" class="btn btn-primary">Tambah Buku</a>
    </div>
    <table class="table-auto w-full mt-10">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Judul</th>
                <th class="px-4 py-2">Penulis</th>
                <th class="px-4 py-2">Penerbit</th>
                <th class="px-4 py-2">Tahun</th>
                <th class="px-4 py-2">Gambar</th>
                <th class="px-4 py-2">Aksi</th> <!-- Add Action column header -->
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td class="border px-4 py-2">{{ $book->id }}</td>
                <td class="border px-4 py-2">{{ $book->title }}</td>
                <td class="border px-4 py-2">{{ $book->author }}</td>
                <td class="border px-4 py-2">{{ $book->publisher }}</td>
                <td class="border px-4 py-2">{{ $book->year }}</td>
                <td class="border px-4 py-2">
                    @if($book->image)
                        <img src="{{ asset('storage/' . $book->image) }}" alt="Gambar Buku" class="w-20 h-20 object-cover">
                    @else
                        <img src="https://via.placeholder.com/150" alt="Tidak ada gambar" class="w-20 h-20 object-cover">
                    @endif
                </td>
                <td class="border px-4 py-2">
                    <a href="{{ route('books.show', $book) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('books.edit', $book) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>