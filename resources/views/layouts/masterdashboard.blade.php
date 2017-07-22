<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul_bar') {{$title or ''}}</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/dashboard.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/jquery.sweet-modal-user.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap4.min.css" rel="stylesheet">


    <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>
    <script src="/js/jquery.sweet-modal.min.js">//harus paling bawah ini</script>
</head>
 <body>
 <nav class="navbar">
     <div class="container-fluid">
         <!-- Brand and toggle get grouped for better mobile display -->
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="defaultNavbar1">
             <ul class="nav navbar-nav">
                 <li><a href="/dashboard">Home</a></li>
                 <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Kategori & Katalog<span class="caret"></span></a>
                     <ul class="dropdown-menu" role="menu">
                         <li><a href="/full">Katalog</a></li>
                         <li><a href="/pinjam">Penelusuran Peminjaman</a></li>
                         <li><a href="/usulkatalog">Usulan katalog</a></li>
                         <li><a href="#">Notifikasi ketersediaan</a></li>

                     </ul>
                 </li>
                 <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Keanggotaan<span class="caret"></span></a>
                     <ul class="dropdown-menu" role="menu">
                         <li><a href="#">Notifikasi Anggota</a></li>
                     </ul>
                 </li>
                 <li><a href="#">Dokumen</a></li>
                 <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Informasi<span class="caret"></span></a>
                     <ul class="dropdown-menu" role="menu">
                         <li><a href="#">Ketentuan Bebas Pinjam Perpustakaan</a></li>
                         <li><a href="#">Formulir Pengajuan Bahan Pustaka</a></li>
                         <li><a href="#">Tool iThenticate untuk Pengecekan Referensi pada Karya Tulis Ilmiah</a></li>
                         <li><a href="#">Akses eJournal dan eBook</a></li>
                         <li><a href="#">Format Jurnal TA/PA Mahasiswa Telkom University</a></li>
                         <li><a href="#">Open Library Member Survival Guide</a></li>
                         <li><a href="#">Peraturan Tel-U Open Library</a></li>
                     </ul>
                 </li>
                 <li><a href="#">Tentang Kami</a></li>
                 <li><a href="#">Tahun Terbit</a></li>


             </ul>
             <ul class="nav navbar-nav navbar-right">
                 <li><a href="{{URL::to('logout')}}" class="btn btn-danger out" role="button">Keluar
                         @if(session()->has('user'))
                             ({{session()->get('nama')}})
                         @else
                            ({{session()->get('nama_adm')}})
                         @endif
                     </a></li>
             </ul>
         </div>
         <!-- /.navbar-collapse -->
     </div>
     <!-- /.container-fluid -->

 </nav>
@yield('dash_content')

 <script src="/js/bootstrap.js"></script>
</body>
</html>