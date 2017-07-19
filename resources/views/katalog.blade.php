@extends('layouts.masterdashboard')
@section('judul_bar','Open Library - Usulan Katalog')
@section('dash_content')
    <script src="/js/jquery.dataTables.usulkatalog.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap4.min.js"></script>
    <div class="container-fluid">
        <div class="col-lg-12">
            <h2 class="katalog"> Usulan Katalog </h2>
        </div>
        <div class="col-lg-10 konten">
            <div class="row">
                <div class="col-lg-12">
                    <a class="btn btn-primary btn-lg btn-usul" id="usul"> Buat usulan Katalog</a>
                </div>
            </div>
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
                                <th>Status Pengajuan</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1;?>
                                @foreach($usulan as $usul)
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
                                    {{$usul->status}}
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
            var variants = {
                'usul':{
                    args: [
                        {
                            title: 'Buat Usulan Katalog Baru',
                            content:
                            '<form method="post" action="/simpankatalog" class="form-horizontal">' +
                            '   <input  type="hidden" name="_token" value="{{csrf_token()}}">' +
                            '     <div class="panel panel-info">' +
                            '        <div class="panel-heading text">Member</div>' +
                            '             <div class="panel-body">' +
                            '                <div class="form-group">' +
                            '                     <label for="focusedInput" class="control-label col-sm-1">Anggota</label>' +
                            '                     <div class="col-sm-10">' +
                            '                       <input  type="text" name="username" value="{{$item->nama}}"  class="form-control" readonly>' +
                            '                     </div>' +
                            '                </div>' +
                            '             </div>' +
                            '        </div>' +
                            '        <div class="panel panel-info">' +
                            '           <div class="panel-heading text">Permintaan Katalog</div>' +
                            '              <div class="panel-body">' +
                            '                <div class="form-group">' +
                            '                   <label for="focusedInput" class="control-label col-sm-1">Judul</label>' +
                            '                    <div class="col-sm-10">' +
                            '                       <input type="text" name="judul" class="form-control">' +
                            '                    </div>' +
                            '                </div>' +
                            '                <div class="form-group">' +
                            '                   <label for="focusedInput" class="control-label col-sm-1">Pengarang</label>' +
                            '                    <div class="col-sm-10">' +
                            '                       <input type="text" name="pengarang" class="form-control">' +
                            '                    </div>' +
                            '                </div>'+
                            '                <div class="form-group">' +
                            '                   <label for="focusedInput" class="control-label col-sm-1">Penerbit</label>' +
                            '                    <div class="col-sm-10">' +
                            '                       <input type="text" name="penerbit" class="form-control">' +
                            '                    </div>' +
                            '                </div>'+
                            '                <div class="form-group">' +
                            '                   <label for="focusedInput" class="control-label col-sm-1">Deskripsi</label>' +
                            '                    <div class="col-sm-10">' +
                            '                    <textarea class="form-control enambelas" name="deskripsi" rows="5" id="comment"></textarea>' +
                            '                    </div>' +
                            '                </div>'+
                            '             </div>' +
                            '      </div>'+'        ' +
                            '      <div class="panel panel-info">' +
                            '           <div class="panel-heading text">Instansi</div>' +
                            '              <div class="panel-body">' +
                            '                <div class="form-group">' +
                            '                   <label for="focusedInput" class="control-label col-sm-1">Unit</label>' +
                            '                    <div class="col-sm-10">' +
                            '                       <select name="unit" class="form-control" onchange="showKompetensi(this.value)">' +
                                                    @foreach($prodi as $prog)
                            '                           <option value="{{$prog->id_jurusan}}">{{$prog->unit}}</option> ' +
                                                    @endforeach
                            '                       </select>' +
                            '                    </div>' +
                            '                </div>' +
                            '                <div class="form-group">' +
                            '                   <label for="focusedInput" class="control-label col-sm-1">Kompetensi</label>' +
                            '                     <div class="col-sm-10">' +
                            '                       <input type="text" name="kompetensi" placeholder="isi dengan kode dan matakuliah" class="form-control">' +
                            '                    </div>' +
                            '             </div>' +
                            '                   <div class="help">*Kompetensi diisi dengan kode dan matakuliah. Contoh: CSH2D3 - SISTEM BASIS DATA</div>' +
                            '      </div>' +
                            '</div>'+

                            '   <button type="submit" class="btn btn-primary btn-lg">Usulkan</button>' +
                            '</form>'

                        }
                    ]
                },
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