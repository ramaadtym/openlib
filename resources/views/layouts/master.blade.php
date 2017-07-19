<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul_bar')</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/openlib.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/jquery.sweet-modal.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
    <script src="http://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="/js/jquery.sweet-modal.min.js">//harus paling bawah ini</script>
    <script src="/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap4.min.js"></script>

</head>
<body>
<div class="container container-imtelkom">
    <nav class="navbar navbar-default">
        <div class="navbar navbar-default navbar-imtelkom">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a class="navbar-brand" href="/">OPEN LIBRARY</a></div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="defaultNavbar1">
                    <ul class="nav navbar-nav">
                        <li class="active dropdown"><a href="/">Beranda  <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            @if(session()->has('user'))
                                <div class="dropdown-content">
                                    <a href="/full">Full Site</a>
                                </div>
                            @endif
                        </li>
                        <li><a href="#">Katalog</a></li>
                        <li><a href="#">E-Publications</a></li>
                        <li><a href="/board">Leaderboard</a></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    @if(session()->has('user'))
                            <li><a><strong>Selamat Datang!</strong> {{session()->get('nama')}}</a> </li>
                            <a href="{{URL::to('logout')}}" class="btn btn-success exit" role="button">Keluar</a>
                    @else
                        <form class="navbar-form navbar-form-imtelkom form-inline navbar-right" method="post" action="/login">
                            <input  type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group" style="float:left;margin-right:10px;font-weight:bold">
                                Silahkan Lakukan login dengan akun SSO. <br>Jika tidak ada silahkan <span style="color:green">daftar</span> untuk menjadi member.
                            </div>
                            <br>
                            <div class="form-group" style="float:left;margin-right:10px;">
                                <input type="text" name="username" placeholder="Username" class="form-control input-sm">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password" class="form-control input-sm">

                            </div>
                            <button type="submit" name="signin" class="btn btn-sm btn-imtelkom">Masuk</button>
                            <button type="button" name="signup" class="btn btn-sm btn-success" id="toggle-popover" data-toggle="modal" data-target="#modal-register">Daftar</button>
                        </form>
                    @endif
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </div>
    </nav>


                @yield('home_content')
            @yield('board_content')
    </div>
</div>
<div class="footer">
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <div style="background-color:#FFF;min-height:306px;border-radius:10px;margin-bottom:13px;">
                    <div class="box-title" style="border-radius:10px 10px 0 0;">SOCIAL MEDIA</div>
                    <table width="100%">
                        <tbody><tr>
                            <td align="center">  <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://staticxx.facebook.com/connect/xd_arbiter/r/1FegrZjPbq3.js?version=42#channel=f144f6427b1513&amp;origin=https%3A%2F%2Fopenlibrary.telkomuniversity.ac.id" style="border: none;"></iframe></div></div></div>
                                <script>(function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) return;
                                        js = d.createElement(s); js.id = id;
                                        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>    <div class="fb-like-box fb_iframe_widget" data-href="http://www.facebook.com/TelkomOpenLibrary" data-width="250" data-height="The pixel height of the plugin" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;color_scheme=light&amp;container_width=360&amp;header=false&amp;href=http%3A%2F%2Fwww.facebook.com%2FTelkomOpenLibrary&amp;locale=en_US&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false&amp;width=250"><span style="vertical-align: bottom; width: 250px; height: 214px;"><iframe name="f138a277cb8e688" width="250px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like_box Facebook Social Plugin" src="https://www.facebook.com/plugins/like_box.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F1FegrZjPbq3.js%3Fversion%3D42%23cb%3Df17caee845ae588%26domain%3Dopenlibrary.telkomuniversity.ac.id%26origin%3Dhttps%253A%252F%252Fopenlibrary.telkomuniversity.ac.id%252Ff144f6427b1513%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=360&amp;header=false&amp;href=http%3A%2F%2Fwww.facebook.com%2FTelkomOpenLibrary&amp;locale=en_US&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false&amp;width=250" style="border: none; visibility: visible; width: 250px; height: 214px;" class=""></iframe></span></div>
                                <br><!--
	 <div style="background-color:#e2dcc5;padding:10px;"><img src="/images/instagram.jpg" width="30" title="Instagram"> <a href="https://instagram.com/openlibrary.telu/" target="_blank" style="color:#9d6459;font-weight:bold;">openlibrary.telu </a></div>-->
                                <style>.ig-b- { display: inline-block; }
                                    .ig-b- img { visibility: hidden; }
                                    .ig-b-:hover { background-position: 0 -60px; } .ig-b-:active { background-position: 0 -120px; }
                                    .ig-b-v-24 { width: 137px; height: 24px; background: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24.png) no-repeat 0 0; }
                                    @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
                                        .ig-b-v-24 { background-image: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24@2x.png); background-size: 160px 178px; } }</style>
                                <a href="https://www.instagram.com/openlibrary.telu/?ref=badge" class="ig-b- ig-b-v-24"><img src="//badges.instagram.com/static/images/ig-badge-view-24.png" alt="Instagram"></a></td>
                        </tr>
                        </tbody></table>
                </div>
                <!-- Modal -->
                <div id="askalibrarian" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-body">
                                <div style="text-align:right;">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
                                </div><br>
                                <img src="/images/askalibrarian.jpg" width="100%">
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div style="background-color:#FFF;min-height:146px;border-radius:10px;margin-bottom:13px;">
                    <div class="box-title" style="border-radius:10px 10px 0 0;">ASK A LIBRARIAN</div>
                    <table width="100%" style="cursor:pointer;" data-toggle="modal" data-target="#askalibrarian">
                        <tbody><tr>
                            <td align="center"><img src="/images/asklibrarian_cover.jpg" width="70%"></td>
                        </tr>
                        </tbody></table>
                </div>
                <div style="background-color:#FFF;min-height:146px;border-radius:10px;margin-bottom:0px">
                    <div class="box-title" style="border-radius:10px 10px 0 0;">FAQ</div>
                    <table width="100%" style="cursor:pointer;" data-toggle="modal" data-target="#faq">
                        <tbody><tr>
                            <td align="center"><img src="/images/faq_cover.jpg" width="70%"></td>
                        </tr>
                        </tbody></table>
                </div>

                <!-- Modal -->

                <div id="faq" class="modal fade" role="dialog">
                    <div class="modal-dialog" style="width:80% !important">

                        <!-- Modal content-->

                        <div class="modal-content">

                            <div class="modal-body">
                                <div style="text-align:right;">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
                                </div><br>
                                <img src="/images/faq_detail.jpg" width="100%">
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!--
                <div class="col-md-4" >

                    <div style="background-color:#FFF;min-height:306px;border-radius:10px;margin-bottom:13px;">
                        <div class="box-title" style="border-radius:10px 10px 0 0;">FAQ</div>
                        <table width="100%"  style="cursor:pointer;" data-toggle="modal" data-target="#faq">
                        <tr>
                            <td align="center"><img src="/images/faq_cover.jpg" width="90%"></td>
                        </tr>
                        </table>
                    </div>
        -->
            <!-- Modal -->
            <!--
            <div id="faq" class="modal fade" role="dialog">
              <div class="modal-dialog" style="width:80% !important">
-->
            <!-- Modal content-->
            <!--
            <div class="modal-content">

              <div class="modal-body">
                <div   style="text-align:right;">
                <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
                </div><br>
                <img src="/images/faq_detail.jpg" width="100%">
              </div>

            </div>

          </div>
        </div>
    </div>
    -->
            <div class="col-md-4">
                <div style="background-color:#FFF;min-height:70px;border-radius:10px;color:#666;margin-bottom:12px;">
                    <div class="box-title-small">DISCUSSION ROOM RESERVATION</div>
                    <table width="100%" height="40px" style="cursor:pointer;" onclick="window.open('http://openlibrary.telkomuniversity.ac.id/room','_blank')">
                        <tbody><tr>

                            <td align="center"><img src="/images/discussion_room.jpg" width="36%" title="Ithenticate"></td>
                        </tr>
                        </tbody></table>
                </div>
                <div style="background-color:#FFF;min-height:70px;border-radius:10px;color:#666;margin-bottom:13px;	">
                    <div class="box-title-small">CHECK PLAGIARISM</div>
                    <table width="100%" height="49px" style="cursor:pointer;" onclick="window.open('/home/information/id/30.html','_blank')">
                        <tbody><tr>
                            <td align="center"><img src="/images/ithenticate-logo.png" width="55%" title="Ithenticate"></td>
                        </tr>
                        </tbody></table>
                </div>
                <div style="background-color:#FFF;min-height:100px;border-radius:10px;color:#666;">
                    <div class="box-title-small">E - CATALOGUE</div>
                    <table width="100%" height="49px" style="cursor:pointer;" onclick="window.open('/home/information/id/53.html','_blank')">
                        <tbody><tr>
                            <td align="center"><img src="/images/ecatalog.jpg" width="80%" title="Ithenticate"></td>
                        </tr>
                        </tbody></table>
                </div>
            </div>
        </div>
        <script>
            // This is called with the results from from FB.getLoginStatus().
            // function statusChangeCallback(response) {
            // console.log('statusChangeCallback');
            // console.log(response);
            // // The response object is returned with a status field that lets the
            // // app know the current login status of the person.
            // // Full docs on the response object can be found in the documentation
            // // for FB.getLoginStatus().
            // if (response.status === 'connected') {
            // // Logged into your app and Facebook.
            // testAPI();
            // } else if (response.status === 'not_authorized') {
            // // The person is logged into Facebook, but not your app.
            // document.getElementById('status').innerHTML = 'Please log ' +
            // 'into this app.';
            // } else {
            // // The person is not logged into Facebook, so we're not sure if
            // // they are logged into this app or not.
            // document.getElementById('status').innerHTML = 'Please log ' +
            // 'into Facebook.';
            // }
            // }

            // // This function is called when someone finishes with the Login
            // // Button.  See the onlogin handler attached to it in the sample
            // // code below.
            // function checkLoginState() {
            // FB.getLoginStatus(function(response) {
            // statusChangeCallback(response);
            // });
            // }

            // window.fbAsyncInit = function() {
            // FB.init({
            // appId      : '370091649996785',
            // cookie     : true,  // enable cookies to allow the server to access
            // // the session
            // xfbml      : true,  // parse social plugins on this page
            // version    : 'v2.8' // use graph api version 2.8
            // });

            // // Now that we've initialized the JavaScript SDK, we call
            // // FB.getLoginStatus().  This function gets the state of the
            // // person visiting this page and can return one of three states to
            // // the callback you provide.  They can be:
            // //
            // // 1. Logged into your app ('connected')
            // // 2. Logged into Facebook, but not your app ('not_authorized')
            // // 3. Not logged into Facebook and can't tell if they are logged into
            // //    your app or not.
            // //
            // // These three cases are handled in the callback function.

            // FB.getLoginStatus(function(response) {
            // statusChangeCallback(response);
            // });

            // };

            // // Load the SDK asynchronously
            // (function(d, s, id) {
            // var js, fjs = d.getElementsByTagName(s)[0];
            // if (d.getElementById(id)) return;
            // js = d.createElement(s); js.id = id;
            // js.src = "//connect.facebook.net/en_US/sdk.js";
            // fjs.parentNode.insertBefore(js, fjs);
            // }(document, 'script', 'facebook-jssdk'));

            // // Here we run a very simple test of the Graph API after login is
            // // successful.  See statusChangeCallback() for when this call is made.
            // function testAPI() {
            // console.log('Welcome!  Fetching your information.... ');
            // FB.api('/me', function(response) {
            // console.log('Successful login for: ' + response.name);
            // document.getElementById('status').innerHTML =
            // 'Thanks for logging in, ' + response.name + '!';
            // });
            // }
        </script>

        <!--
          Below we include the Login Button social plugin. This button uses
          the JavaScript SDK to present a graphical Login button that triggers
          the FB.login() function when clicked.
        -->
        <!--
        <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
        </fb:login-button>
        -->
        <div id="status">
        </div>


        <div class="row footer-location-imtelkom">
            <hr>
            <div class="col-md-12 col-sm-12 col-lg-12">
                <h4>Lokasi Perpustakaan</h4>
            </div>

            <div class="col-md-4 col-sm-6 col-lg-3">
                <p class="basic-contact">
                    <span>Gedung Manterawu Lantai 5</span><br>
                    <small>
                        Jl. Telekomunikasi - Ters. Buah Batu<br>Bandung 40257 Indonesia<br>
                        <span class="glyphicon glyphicon-phone-alt"></span> +6222 756 5929<br>
                        <span class="glyphicon glyphicon-print"></span> +6222 756 5929<br>
                        <span class="glyphicon glyphicon-envelope"></span> library@telkomuniversity.ac.id<br>
                    </small>
                </p>
                <p class="operational-hours">Waktu operasional</p>

                <table>
                    <tbody><tr>
                        <td>Senin - Jumat<br></td>
                        <td>08:00 - 19:00</td>
                    </tr>
                    <tr>
                        <td>Sabtu<br></td>
                        <td>08:00 - 13:00</td>
                    </tr>
                    </tbody></table>
            </div>
            <div class="col-md-4 col-sm-6 col-lg-3">
                <p class="basic-contact">
                    <span>Kampus Geger Kalong</span><br>
                    <small>
                        Jl. Geger Kalong No. 1 <br>Bandung Indonesia<br>
                        <span class="glyphicon glyphicon-phone-alt"></span> -<br>
                        <span class="glyphicon glyphicon-print"></span> +6222 756 5929<br>
                        <span class="glyphicon glyphicon-envelope"></span> library@telkomuniversity.ac.id<br>
                    </small>
                </p>
                <p class="operational-hours">Waktu operasional</p>

                <table>
                    <tbody><tr>
                        <td>Senin</td>
                        <td>08:00 - 20:00 </td>
                    </tr>
                    <tr>
                        <td>Selasa</td>
                        <td>08:00 - 16:30 </td>
                    </tr>

                    <tr>
                        <td>Rabu</td>
                        <td>08:00 - 20:00 </td>
                    </tr>

                    <tr>
                        <td>Kamis</td>
                        <td>08:00 - 16:30 </td>
                    </tr>

                    <tr>
                        <td>Jumat</td>
                        <td>08:00 - 20:00 </td>
                    </tr>

                    <tr>
                        <td>Sabtu</td>
                        <td>08:00 - 13.00 </td>
                    </tr>

                    </tbody></table>
            </div>


            <div class="col-md-4 col-sm-6 col-lg-3">
                <p class="basic-contact">
                </p><p><a href="http://www.telkomuniversity.ac.id"><img src="/images/telkom-university.png" width="60%"></a></p>
                <h4>Telkom University Library</h4>
                <p>Copyright © 2011 - Telkom Open Library</p>
                <p><span></span> <a href="http://www.facebook.com/TelkomOpenLibrary">Telkom Open Library</a></p>
                <small>
                </small>
                <p></p>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <p><br><img src="https://licensebuttons.net/l/by-nc/4.0/88x31.png"></p>
            </div>
        </div>

    </div>
</div>
    <!-- Modal -->
    <div id="modal-register" class="modal slideInUp animated" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Daftar Sebagai Anggota</h4>
                </div>
                <div class="modal-body">
                    <p>Daftar Sebagai anggota untuk dapat mengakses koleksi flippingbook Tugas Akhir kami</p>
                    <form action="/simpan" method="post">
                        <div class="form-group" id="notif" style="display:none"><span style="color:green;">Your account has been made. <!--<br />  Please verify it by clicking the activation link that has been send to your email.--> You can login now</span>
                        </div>
                        <div class="form-group">
                            <label for="inputTitle">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="nama" required="" aria-required="true">
                        </div>
                        <div class="form-group">
                            <label for="inputTitle">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="nama" required="" aria-required="true">
                        </div>
                        <div class="form-group">
                            <label for="inputTitle">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required="" aria-required="true">
                        </div>
                        {{ csrf_field() }}
                        <!--<div class="form-group">
                            <label for="inputTitle">Nama Lengkap</label>
                            <input type="text" name="inp[NAMA_PEGAWAI]" class="form-control" id="NAMA_PEGAWAI" placeholder="Nama" required="" aria-required="true">
                        </div>
                        <div class="form-group">
                            <label for="inputTitle">Nama Institusi</label>
                            <input type="text" name="inp[ALAMAT]" class="form-control" id="ALAMAT" placeholder="Nama Institusi" required="" aria-required="true">
                        </div>
                        <div class="form-group">
                            <label for="inputTitle">Handphone</label>
                            <input type="text" name="inp[NO_HP]" class="form-control" id="NO_HP" placeholder="Handphone" required="" aria-required="true">
                        </div>
                        <div class="form-group">
                            <h1>
                            </h1></div>
                    </div>-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-embossed" data-dismiss="modal" id="close">Batal</button>
                        <button type="submit" class="btn btn-primary btn-embossed loading">Daftar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
<script>
    $(document).ready(function() {
        @if(!session()->has('user'))
            $('.fa').css('display','none');
        @endif
    });
</script>

</body>
</html>
