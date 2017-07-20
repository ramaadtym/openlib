{{-- Extend dari folder layouts > master--}}
@extends('layouts.master')

{{--section title bar--}}
@section('judul_bar','Open Library - Universitas Telkom')

{{--Section content--}}
@section('home_content')
    <div class="clearfix"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="page-header page-header-imtelkom">
                @if(session()->has('waduh'))
                <div class="alert alert-danger">
                    <strong>Maaf!</strong> {{session()->get('waduh')}}.
                </div>
                @endif
                @if(session()->has('sip'))
                        <div class="alert alert-info">
                            <strong>Selamat!</strong> {{session()->get('sip')}}.
                        </div>
                @endif
    <h3 class="col-md-6 col-sm-8" style="margin: 0px;height:40px;padding-top:10px;margin-bottom:25px;"><strong>Katalog Terbaru</strong>
        <small><strong>114.735</strong> koleksi dari <strong>71.712</strong> judul telah tersedia!</small>
    </h3>
    <div class="col-md-6 col-sm-4">

        <!-- <div class=" btn-group pull-right">
            <button type="button" class="btn btn-success">Terbaru</button>
            <button class="btn btn-success dropdown-toggle" data-toggle="dropdown">
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="/?order=latest">Terbaru</a></li>
              <li><a href="/?order=popular">Terpopuler</a></li>
            </ul>
          </div>

          -->

        <form method="post" action="home/catalog">
            <div class="input-group" style="margin: 0px;">
                <input style="height:40px;" type="text" name="search[keyword]" placeholder="Search" class="form-control" value="">
                <div class="input-group-btn">
                    <input style="height:40px;" type="submit" name="submit" class="btn btn-success" value="Search">

                    <button style="height:40px;" type="button" class="btn btn-primary dropdown-toggle" id="toggle-popover" data-toggle="modal" data-target="#modal-front">
                        Advanced Search				<span class="caret"></span>
                        <span class="sr-only">Detailed Search</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="clearfix"></div>
    </div>
    </div>
    <!--Carousel-->
    <div class="row">
        <div id="carousel-latest-catalog" class="carousel slide" data-ride="carousel" rel="carousel">
            <div class="carousel-inner">                      <div class="item">
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a class="thumbnail-imtelkom" href="/home/catalog/id/128050/slug/hbr-s-10-must-reads-on-emotional-intelligence.html">
                            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="fa fa-calendar"></span>
                23/03
              </span>
                                <img width="100%" title="HBR's 10 Must Reads on Emotional Intelligence" src="/images/buku/15036_500.png">
                                <div class="caption">
                                    HBR's 10 Must Reads on..              </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a class="thumbnail-imtelkom" href="/home/catalog/id/128070/slug/the-savage-way-successfully-navigating-the-waves-of-business-and-life.html">
                            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="fa fa-calendar"></span>
                23/03
              </span>
                                <img width="100%" title="The Savage Way: Successfully Navigating the Waves of Business and Life" src="/images/buku/51b37lNrV9L._SX331_BO1,204,203,200_.jpg">
                                <div class="caption">
                                    The Savage Way: Successfully Navigating..              </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a class="thumbnail-imtelkom" href="/home/catalog/id/128066/slug/unleashing-creativity-and-innovation-nine-lessons-from-nature-for-enterprise-growth-and-career-success.html">
                            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="fa fa-calendar"></span>
                23/03
              </span>
                                <img width="100%" title="Unleashing Creativity and Innovation: Nine Lessons from Nature for Enterprise Growth and Career Success" src="/images/buku/1118768116.jpg">
                                <div class="caption">
                                    Unleashing Creativity and Innovation: Nine..              </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a class="thumbnail-imtelkom" href="/home/catalog/id/127567/slug/akuntansi-keuangan-menengah.html">
                            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="fa fa-calendar"></span>
                16/03
              </span>
                                <img width="100%" title="Akuntansi Keuangan Menengah" src="/images/buku/514641_453839cd-beef-4772-975b-4fb1334ecd7f.jpg">
                                <div class="caption">
                                    Akuntansi Keuangan Menengah              </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a class="thumbnail-imtelkom" href="/home/catalog/id/127565/slug/hotel-management.html">
                            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="fa fa-calendar"></span>
                16/03
              </span>
                                <img width="100%" title="Hotel Management" src="/images/buku/51vQ3g5sqNL._AC_UL320_SR240,320_.jpg">
                                <div class="caption">
                                    Hotel Management              </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a class="thumbnail-imtelkom" href="/home/catalog/id/127568/slug/memulai-usaha-itu-gampang-.html">
                            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="fa fa-calendar"></span>
                16/03
              </span>
                                <img width="100%" title="Memulai Usaha Itu Gampang!" src="/images/buku/95526_f.jpg">
                                <div class="caption">
                                    Memulai Usaha Itu Gampang!              </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item active">
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a class="thumbnail-imtelkom" href="/home/catalog/id/127552/slug/5-pilar-kepemimpinan-di-abad-21.html">
                            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="fa fa-calendar"></span>
                15/03
              </span>
                                <img width="100%" title="5 Pilar Kepemimpinan di Abad 21" src="/images/buku/9786026931047_5_pilar_kepemimpinan_di_abad_21.jpeg">
                                <div class="caption">
                                    5 Pilar Kepemimpinan di Abad..              </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a class="thumbnail-imtelkom" href="/home/catalog/id/127553/slug/al-wala-wal-bara-konsep-loyalitas-dan-permusuhan-dalam-islam.html">
                            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="fa fa-calendar"></span>
                15/03
              </span>
                                <img width="100%" title="Al-Wala’ Wal Bara’ Konsep Loyalitas Dan Permusuhan Dalam Islam" src="/images/buku/ALWALA-WAL-BARA-Terbaru-Jazera.jpg">
                                <div class="caption">
                                    Al-Wala’ Wal Bara’ Konsep Loyalitas..              </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a class="thumbnail-imtelkom" href="/home/catalog/id/122928/slug/simulasi-arduino.html">
                            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="fa fa-calendar"></span>
                15/03
              </span>
                                <img width="100%" title="Simulasi Arduino" src="/images/buku/simulasi-arduino.jpg">
                                <div class="caption">
                                    Simulasi Arduino              </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a class="thumbnail-imtelkom" href="/home/catalog/id/127554/slug/thaifah-manshurah.html">
                            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="fa fa-calendar"></span>
                15/03
              </span>
                                <img width="100%" title="Thaifah Manshurah" src="/images/buku/3357482cab599bb4b1430eadea4e78cb.jpg">
                                <div class="caption">
                                    Thaifah Manshurah              </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a class="thumbnail-imtelkom" href="/home/catalog/id/123961/slug/1-miliar-setiap-orang-bisa-menjadi-miliader.html">
                            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="fa fa-calendar"></span>
                14/03
              </span>
                                <img width="100%" title="1 Miliar: Setiap orang bisa menjadi miliader" src="/images/buku/9786023410156_1_miliar_setiap_orang_bisa_menjadi_miliader.jpg">
                                <div class="caption">
                                    1 Miliar: Setiap orang bisa..              </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a class="thumbnail-imtelkom" href="/home/catalog/id/123978/slug/417-kesalahan-shalat.html">
                            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="fa fa-calendar"></span>
                14/03
              </span>
                                <img width="100%" title="417 Kesalahan Shalat" src="/images/buku/417-KESALAHAN-SHALAT.jpg">
                                <div class="caption">
                                    417 Kesalahan Shalat              </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a class="thumbnail-imtelkom" href="/home/catalog/id/123967/slug/be-an-optimist-banyak-bekerja-banyak-bicara-banyak-hasilnya.html">
                            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="fa fa-calendar"></span>
                14/03
              </span>
                                <img width="100%" title="Be An Optimist! Banyak bekerja, banyak bicara, banyak hasilnya" src="/images/buku/BE_AN_OPTIMIST___BANYAK_KERJA__BANYAK_BICARA__BANYAK_HASILNY.jpg">
                                <div class="caption">
                                    Be An Optimist! Banyak bekerja,..              </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a class="thumbnail-imtelkom" href="/home/catalog/id/123981/slug/dasar-dasar-kewirausahaan-teori-dan-praktik-2-e-.html">
                            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="fa fa-calendar"></span>
                14/03
              </span>
                                <img width="100%" title="Dasar-Dasar Kewirausahaan Teori dan Praktik, 2/E." src="/images/buku/12739164184.jpg">
                                <div class="caption">
                                    Dasar-Dasar Kewirausahaan Teori dan Praktik,..              </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a class="thumbnail-imtelkom" href="/home/catalog/id/123965/slug/demokrasi-di-tangan-netizen.html">
                            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="fa fa-calendar"></span>
                14/03
              </span>
                                <img width="100%" title="Demokrasi di tangan Netizen" src="/images/buku/9786027936621_demokrasi_di_tangan_netizen.jpg">
                                <div class="caption">
                                    Demokrasi di tangan Netizen              </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a class="thumbnail-imtelkom" href="/home/catalog/id/123975/slug/halaqah-cinta-follow-your-prophet-find-your-true-love.html">
                            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="fa fa-calendar"></span>
                14/03
              </span>
                                <img width="100%" title="Halaqah Cinta: Follow your prophet, find your true love" src="/images/buku/203322500_xl_1.jpg">
                                <div class="caption">
                                    Halaqah Cinta: Follow your prophet,..              </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a class="thumbnail-imtelkom" href="/home/catalog/id/123973/slug/khalifah-remake.html">
                            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="fa fa-calendar"></span>
                14/03
              </span>
                                <img width="100%" title="Khalifah Remake" src="/images/buku/23510858.jpg">
                                <div class="caption">
                                    Khalifah Remake              </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a class="thumbnail-imtelkom" href="/home/catalog/id/123992/slug/konsep-dan-analisis-rasio-pajak.html">
                            <div class="thumbnail">
                            <span class="label label-info label-imtelkom">
                <span class="fa fa-calendar"></span>
                14/03
              </span>
                                <img width="100%" title="Konsep dan Analisis Rasio Pajak" src="/images/buku/konsep-analisis-rasio-pajak.jpg">
                                <div class="caption">
                                    Konsep dan Analisis Rasio Pajak              </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <ol class="carousel-indicators carousel-indicators-imtelkom">
                <li data-target="#carousel-latest-catalog" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-latest-catalog" data-slide-to="1" class=""></li>
                <li data-target="#carousel-latest-catalog" data-slide-to="2" class=""></li>
            </ol>
        </div>
    </div>

    <!--News + E-Journal-->
    <div class="row row-board">
        <div class="col-md-12 col-sm-6 box-title-board">
            <div class="col-md-2 col-md-offset-2">
                <img src="/images/trophy.png" class="img-responsive trophy">
            </div>
            <div class="col-md-8">
                Leaderboard Top 5
                <p>Berada dimanakah posisi kamu?</p>
                <p>Segera cek!</p>
            </div>

        </div>
        <ul class="nav nav-tabs tbs">
            <li class="active"><a data-toggle="tab" href="#thisweek">Minggu Ini</a></li>
            <li><a data-toggle="tab" href="#allday">Sepanjang Waktu</a></li>
        </ul>

        <div class="tab-content tbs">
            <div id="thisweek" class="tab-pane fade in active">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
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
                                <td>{{$data->pts}}</td>
                            </tr>
                            <?php $no++; ?>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="allday" class="tab-pane fade">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th></th>
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
        <div class="more-board">
            <a class="btn btn-danger btn-lg btn-block" href="/board">Lihat Selengkapnya</a>
        </div>
    </div>

    </div>
    <div class="row row-imtelkom">

        <div class="col-md-3 col-sm-6">
            <h3><a href="https://openlibrary.telkomuniversity.ac.id/home/information/">News</a></h3>
            <ul class="list-unstyled">
                <li>
                    <p>
                        <span class="label label-primary">16/03/2017</span>
                        <a href="/home/information/id/113.html">
                            <small>Kunjungan STIE Lembah Dempo ke Telkom University Open Library</small>
                        </a>
                    </p>
                </li>
                <li>
                    <p>
                        <span class="label label-primary">15/03/2017</span>
                        <a href="/home/information/id/112.html">
                            <small>Kunjungan Kaprodi Ilmu Komunikasi Se-Jawa Barat</small>
                        </a>
                    </p>
                </li>
                <li>
                    <p>
                        <span class="label label-primary">07/02/2017</span>
                        <a href="/home/information/id/111.html">
                            <small>eProceedings of International Conference on Transformation in Communications - ICoTiC 2016</small>
                        </a>
                    </p>
                </li>
                <li>
                    <p>
                        <span class="label label-primary">08/12/2016</span>
                        <a href="/home/information/id/110.html">
                            <small>eProceedings of International Conference on Creative Industries - 2016</small>
                        </a>
                    </p>
                </li>
                <li>
                    <p>
                        <span class="label label-primary">01/12/2016</span>
                        <a href="/home/information/id/109.html">
                            <small>Talkshow with sivitas akademika di PR FM bersama Telkom University Open Library</small>
                        </a>
                    </p>
                </li>
            </ul>  </div>

        <div class="col-md-3 col-sm-6">
            <h3>Informasi Penting</h3>
            <ul class="list-unstyled">
                <li>
                    <p>
                        <a href="/home/information/id/20.html">
                            <small>Peraturan Tel-U Open Library</small>
                        </a>
                    </p>
                </li>
                <li>
                    <p>
                        <a href="/home/information/id/21.html">
                            <small>Open Library Member Survival Guide</small>
                        </a>
                    </p>
                </li>
                <li>
                    <p>
                        <a href="/home/information/id/23.html">
                            <small>Akses eJournal dan eBook</small>
                        </a>
                    </p>
                </li>
                <li>
                    <p>
                        <a href="/home/information/id/29.html">
                            <small>Format Jurnal TA/PA Mahasiswa Telkom University</small>
                        </a>
                    </p>
                </li>
                <li>
                    <p>
                        <a href="/home/information/id/30.html">
                            <small>Tool iThenticate untuk Pengecekan Referensi pada Karya Tulis Ilmiah</small>
                        </a>
                    </p>
                </li>
                <li>
                    <p>
                        <a href="/home/information/id/62.html">
                            <small>Formulir Pengajuan Bahan Pustaka</small>
                        </a>
                    </p>
                </li>
                <li>
                    <p>
                        <a href="/home/information/id/89.html">
                            <small>Ketentuan Bebas Pinjam Perpustakaan</small>
                        </a>
                    </p>
                </li>
            </ul>
        </div>

        <div class="clearfix visible-sm"></div>

        <div class="col-md-4 col-sm-6 geserejournal">
            <h3>E-Journal</h3>
            <div>
                <table width="100%" style="cursor:pointer;" data-toggle="modal" data-target="#ejurnal">
                    <tbody><tr>
                        <td align="left" style="padding-right:10px;"><img src="/images/ieee.png" width="110" title="IEEE"></td>
                        <td align="left" style="padding-right:13px;"><img src="/images/springer.png" width="110" title="Springer">
                        </td><td align="left" style="padding-right:13px;"><img src="/images/acm_.png" width="40" title="ACM"></td>
                        <td align="left"><img src="/images/ama.png" width="80" title="American Marketing Association"></td>
                    </tr>
                    <tr>
                        <td align="left"><img src="/images/sciencedirect.png" width="110" title="Science Direct"></td>
                        <td align="left"><img src="/images/worldscientific.jpg" width="110" title="World Scientific"></td>
                        <td align="left" colspan="2"><img src="/images/emerald.gif" width="110" title="Emerald Insight"></td>
                    </tr>
                    <tr>
                        <td align="left"><img src="/images/sage.png" width="110" title="SAGE">
                        </td><td align="left"><img src="/images/indersience.jpg" width="110" title="Inderscience"></td>
                        <td align="left" colspan="2"><img src="/images/taylorfrancis.png" width="110" title="Taylor and Francis"></td>
                    </tr>
                    <tr style="padding:3px;border-top:1px solid #ccc;"><td colspan="3" style="color:#337ab7;padding:3px;">Dikti</td></tr>
                    <tr>
                        <td align="left"><img src="/images/proquest.jpg" width="110" title="Proquest"></td>
                        <td align="left"><img src="/images/gale.jpg" width="110" title="Gale Cengage"></td>
                        <td align="left" colspan="2"><img src="/images/ebsco.jpg" width="50" title="EBSCO"></td>
                    </tr>

                    <tr style="padding:3px;border-top:1px solid #ccc;"><td colspan="3" style="color:#337ab7;padding:3px;">Perpusnas</td></tr>
                    <tr>
                        <td align="left" colspan="4"><img src="/images/pnri.jpg" width="130" title="E - Resources Perpusnas"> <img src="/images/onesearch.jpg" width="130" title="One Search">
                        </td></tr>

                    <tr> <td style="padding:4px;"></td></tr>
                    </tbody></table>
            </div>
        </div>

        <div class="col-md-2 col-sm-6" style="border:1px #ccc;">
            <table style="border-left:1px #ccc solid;margin-top:5px;">
                <tbody><tr><td>
                        <img style="margin-top:10px;margin-left:20px;" src="/images/akreditasi.png" width="90%"><br>
                        <img style="margin-top:10px;margin-left:25px;" src="/images/iso.jpg" width="80%">
                    </td></tr>
                </tbody></table>
        </div>


    </div>
@endsection
<!-- Footer-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/js/jquery-1.11.2.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.js"></script>
</body>
</html>
<script>
    $(".alert").delay(4000).slideUp(600, function() {
        $(this).alert('close');
    });
</script>
