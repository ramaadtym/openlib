@extends('layouts.masterdashboard')
@section('judul_bar','Dashboard - Open Library Tel-U')
@section('dash_content')
    <script src="/js/jquery.dataTables.pinjam.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap4.min.js"></script>
    <div class="container-fluid">
        <div class="col-lg-12">
            <h2 class="katalog"> Sirkulasi koleksi</h2>
        </div>
        <div class="col-lg-12 konten">
            <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered" id="katalog">
                    <thead>
                    <tr>
                        <th>Anggota</th>
                        <th>Barcode</th>
                        <th>Judul</th>
                        <th>Unit</th>
                        <th>Tgl Pinjam</th>
                        <th>Tgl Kembali</th>
                        <th>Perpanjangan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $rec)
                    <tr>
                        <td>
                            <p align="left">{{ $rec->username }}</p>
                            <p>{{$rec->nama}}</p>

                        </td>
                        <td>
                            <p>{{$rec->barcode}}</p>
                        </td>
                        <td>
                            <p><a href="/book/{{$rec->judul}}" class="book">{{$rec->judul}}</a></p>
                        </td>
                        <td>
                            <p>{{$rec->unit}}</p>
                        </td>
                        <td>
                            <p>{{$rec->tgl_pinjam}}</p>
                        </td>
                        <td>
                            <p>{{$rec->tgl_balik}}</p>
                        </td>
                        <td>
                            <?php
                            if($rec->perpanjangan == 0){
                                echo "Belum pernah melakukan perpanjangan";
                            }else{
                                echo"<p> $rec->perpanjangan</p>";
                            }
                            ?>
                        </td>
                        <td>
                            <p>{{$rec->status}}</p>
                        </td>
                        <td>
                        <?php
                            if($rec->perpanjangan == 0){
                              echo"

                                    <a id=\"panjang$rec->id_pinjam\" class=\"btn btn-primary\">Perpanjang</a>

                                ";
                            }
                            else{
                                echo "sudah diperpanjang";
                            }
                        ?>
                        </td>
                    </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#katalog').DataTable();
            var variants = {
                @foreach($data as $record)

                'panjang{{$record->id_pinjam}}':{
                    args: [
                        {
                            title: 'Perpanjangan Peminjaman <?php echo $record->judul?>',
                            content:
                            '<form method="post" action="/pjg">' +
                            '   <input  type="hidden" name="_method" value="put">' +
                            '   <input  type="hidden" name="_token" value="{{csrf_token()}}">' +
                            '   <input  type="hidden" name="idpinjam" value="{{$record->id_pinjam}}">' +
                            '   <div class="form-group">' +
                            '       <label for="focusedInput">Perpanjang s.d</label>' +
                            '       <input type="date" name="perpanjang"  class="form-control">' +
                            '       <span class="help-block">Format: DD/MM/YYYY</span>' +
                            '   </div>' +
                            '   <button type="submit" class="btn btn-primary btn-lg">Perpanjang</button>' +
                            '</form>'

                        }
                    ]
                },
            @endforeach
            };

            for (var key in variants) {
                if (variants.hasOwnProperty(key)) {
                    var variant = variants[key];
                    $('#' + key).on('click', { variant: variant }, function(e) {
                        var variant = e.data.variant;
                        variant.fn = variant.fn || $.sweetModal;
                        variant.fn.apply(this, variant.args);
                    });
                }
            }
        });
    </script>
@endsection