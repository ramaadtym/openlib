@extends('layouts.masterdashboard')
@section('judul_bar','Open Library - Usulan Katalog')
@section('dash_content')
    <script src="/js/jquery.dataTables.usulkatalog.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap4.min.js"></script>
    <div class="container-fluid">
        <div class="col-lg-12">
            <h2 class="katalog"> Daftar Usulan Katalog </h2>
        </div>
        <div class="col-lg-10 konten">
            <div class="row tabel-usul">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered" id="usulkatalog">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th>Unit</th>
                                <th>Kompetensi</th>
                                <th>Pengaju</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1;?>
                            @foreach($item as $usul)
                            <tr>
                                <td>{{$no}}</td>
                                <td>
                                    {{$usul->judul}}
                                </td>
                                <td>
                                    {{$usul->pengarang}}
                                </td>
                                <td>
                                    {{$usul->penerbit}}
                                </td>
                                <td>
                                    {{$usul->unit}}
                                </td>
                                <td>
                                    {{$usul->kompetensi}}
                                </td>
                                <td>
                                    {{$usul->nama}}
                                </td>
                                <td>
                                    <?php
                                    if($usul->status == "disetujui"){
                                        echo"Telah disetujui";
                                    }
                                    else{
                                    echo"
                                        <form method=\"post\" action=\"/setuju\">";
                                    ?>
                                        <input  type="hidden" name="_token" value="{{csrf_token()}}">

                                        <input  type="hidden" name="idusul" value="{{$usul->id_usul}}">
                                    <?php
                                        echo"
                                        <button class=\"btn btn-success\">Setuju</button>
                                    </form>
                                    ";
                                    }
                                   ?>
                                </td>

                            </tr>
                            <?php $no++;?>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#usulkatalog').DataTable();

        });
    </script>
@endsection