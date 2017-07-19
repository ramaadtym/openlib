{{-- Extend dari folder layouts > master--}}
@extends('layouts.master')

{{--section title bar--}}
@section('judul_bar','Leaderboard Openlib - Universitas Telkom')

{{--Section content--}}
@section('board_content')
    <div class="clearfix"></div>

    <!--News + E-Journal-->
    <div class="row row-board-full">
        <div class="row">
            <div class="col-md-12 col-sm-6 box-title-board-full">
                <div class="col-md-2">
                    <img src="/images/trophy.png" class="img-responsive trophy">
                </div>
                <div class="col-md-5">
                    Leaderboard Open Library Tel-U
                    <p>Berada dimanakah posisi kamu?</p>
                    <p>Segera cek!</p>
                </div>
                <div class="col-md-4 howto">
                   <p><a id="reward">Reward Minggu Ini ?</a></p>
                    <p><a id="poin"> Cara mendapatkan Poin ?</a></p>
                </div>

            </div>
        </div>
        <div class="row tbs">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#thisweek">Minggu Ini</a></li>
                <li><a data-toggle="tab" href="#allday">Sepanjang Waktu</a></li>
            </ul>

            <div class="tab-content ">
                <div id="thisweek" class="tab-pane fade in active tbl-reward">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered" id="week">
                            <thead>
                            <tr>
                                <th>Peringkat</th>
                                <th>Nama</th>
                                <th>Poin</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1;?>
                            @foreach($poin as $data)

                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->pts}} Pts</td>
                            </tr>
                                <?php $no++; ?>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="allday" class="tab-pane fade tbl-reward">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered" id="all">
                            <thead>
                            <tr>
                                <th>Peringkat</th>
                                <th>Nama</th>
                                <th>Poin</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ana</td>
                                <td>150 Pts</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Doni</td>
                                <td>100 Pts</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Dodit</td>
                                <td>80 Pts</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Yati</td>
                                <td>60 Pts</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Danang</td>
                                <td>30 Pts</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
<!-- Footer-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/js/jquery-1.11.2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#week').DataTable({
            "columnDefs": [
                { "orderable": false, "targets": 0 }
            ]
        });
        $('#all').DataTable();
        $('#cara').DataTable();
        var variants = {
            'reward': {
                args: [
                    {
                        title: '',
                        content:
                        '<img src="/images/reward.png" class="img-responsive reward-ribbon animated flipInX">' +
                        '<p> Periode: 5 Juni - 11 Juni 2017 </p>' +
                        '<div class="row rewards">' +
                        '   <div class="col-md-4">' +
                        '   <img src="/images/1.png" class="satu">' +
                        '       <img src="/images/reward1.jpg" class="img-responsive reward-img">' +
                        '   </div>' +
                        '   <div class="col-md-4">' +
                        '   <img src="/images/2.png" class="dua">' +
                        '       <img src="/images/reward2.jpg" class="img-responsive reward-img">' +
                        '   </div>' +
                        '   <div class="col-md-4">' +
                        '   <img src="/images/3.png" class="dua">' +
                        '       <img src="/images/reward3.jpg" class="img-responsive reward-img">' +
                        '   </div>' +
                        '</div>'

                    }
                ]
            },
            'poin': {
                args: [
                    {
                        title: 'Cara Mendapatkan Poin',
                        content:
                        /*'<ol>' +
                        '   <li>Pastikan kamu sudah memiliki akun Open Library (gunakan akun SSO Khusus civitas akademika Tel-U, jika belum punya, silakan daftar telebih dahulu)</li>' +
                        '   <li>Lakukan aktivitas seperti kunjungan ke perpustakaan, peminjaman buku, dan ruang diskusi untuk mendapatkan poin.</li>' +
                        '   <li>Semakin banyak aktivitas yang kamu lakukan di Open Library, semakin besar kesempatan kamu mendapatkan hadiah.</li>' +
                        '</ol>' +
                        '<h4>Gampang banget kan? Tunggu apalagi? Kunjungi Openlibrary Tel-U Sekarang!</h4>'*/
                        '<p>Beberapa Aktivitas untuk memperoleh poin :</p> '+
                        '<div class="table-responsive">'+
                            '<table class="table poin">'+
                                '<thead>'+
                                    '<tr>'+
                                        '<th>Aktivitas</th>'+
                                        '<th>Poin</th>'+
                                        '<th>Keterangan</th>'+
                                    '</tr>'+
                                '</thead>'+
                                '<tbody>'+
                                    '<tr>'+
                                        '<td>Login</td>'+
                                        '<td>2 Poin</td>'+
                                        '<td>Mahasiswa melakukan <i>login</i> pada website Open Library menggunakan akun yang telah terdaftar.</td>'+
                                    '</tr>'+
                                    '<tr>'+
                                        '<td>Perpanjang Online</td>'+
                                        '<td>3 Poin</td>'+
                                        '<td>Mahasiswa melakukan Perpanjangan masa peminjaman buku yang sudah dipinjam secara <i>online</i>.</td>'+
                                    '</tr>'+
                                    '<tr>'+
                                        '<td>Ulasan / Komentar</td>'+
                                        '<td>3 Poin</td>'+
                                        '<td>Mahasiswa memberikan ulasan / testimoni dan komentar pada suatu katalog.</td>'+
                                    '</tr>'+
                                    '<tr>'+
                                        '<td>Usulan Katalog</td>'+
                                        '<td>4 Poin</td>'+
                                        '<td>Memberikan usulan katalog yang belum tersedia.</td>'+
                                    '</tr>'+
                                '</tbody>'+
                            '</table>'+
                        '</div>'


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
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.js"></script>
</body>
</html>
