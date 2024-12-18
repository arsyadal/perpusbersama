
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('components.navbar') <!-- Include the navbar component -->
    
  

    <!-- hero -->

    <div
  class="hero min-h-screen"
  style="background-image: url(https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);">
  <div class="hero-overlay bg-opacity-60"></div>
  <div class="hero-content text-neutral-content text-center">
    <div class="max-w-md">
      <h1 class="mb-5 text-5xl font-bold">Selamat Datang di Perpus Bersama</h1>
      <p class="mb-5">
        Kami menyediakan berbagai macam buku yang dapat membantu anda dalam menambah wawasan dan pengetahuan.
      </p>
      <a href="{{ route('books.show') }}" class="btn btn-primary">Cari buku kamu</a> 
       </div>
  </div>
</div>


</body>
</html>