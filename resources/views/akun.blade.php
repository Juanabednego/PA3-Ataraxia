<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Akun</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
       
    </style>
</head>
<body>

@include('layouts.Navbar')

<div class="container mt-5">
    <h2>Profil Akun</h2>
    <div class="card shadow-sm p-4 mt-3">
      <p><strong>Nama:</strong> {{ Auth::user()->name }}</p>
      <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
      <p><strong>Nomor Telepon:</strong> {{ Auth::user()->phone }}</p>
      <p><strong>Dibuat pada:</strong> {{ Auth::user()->created_at->format('d M Y') }}</p>
  
      <hr>
      <a href="#" class="btn btn-outline-secondary">Edit Profil</a>
    </div>
  </div>

@include('layouts.footer')

</body>
</html>
