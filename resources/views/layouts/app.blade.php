<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'STTCIPASUNG')</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  
  <!-- mendefinisikan css untuk semua halaman -->
   @yield('css') 
   <!--  akhir mendefinisikan css untuk semua halaman -->


</head>
<body class="bg-body-secondary">

  <!-- memanggil navbar -->
  @include('partials.navbar')
  <!-- akhir memanggil navbar -->

  <main class=" mb-5">

  <!-- mendefinisikan content dari setiap halaman -->
    @yield('content')
    <!-- akhir mendefinisikan content dari setiap halaman -->
  </main>

  <!-- memanggil footer -->
  @include('partials.footer')
  <!-- akhir memanggil footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
