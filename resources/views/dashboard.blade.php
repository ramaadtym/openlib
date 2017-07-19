@extends('layouts.masterdashboard')
@section('judul_bar','Dashboard - Open Library Tel-U')
@section('dash_content')
    <script src="/js/jquery.dataTables.katalog.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap4.min.js"></script>
    <div class="container-fluid">
        <div class="col-lg-12">
            <h2 class="katalog"> Katalog </h2>
        </div>
        <div class="col-lg-12 konten">
            <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered" id="katalog">
                    <thead>
                    <tr>
                        <th>No.Katalog</th>
                        <th>Katalog</th>
                        <th>Subjek</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <img src="https://openlibrary.telkomuniversity.ac.id/uploads/book/cover/17.24.157.png"
                                 title="Analysis Factor of Motivation that Influence Drivers Who Using UBER Application in UBER, Bandung : Proceeding of ISCLO (International Seminar and Conference on Learning Organization), October 26th 2016"
                                 width="70">
                            <div class="knowledge_item_title">17.24.157</div>
                        </td>
                        <td>
                            <a href="https://openlibrary.telkomuniversity.ac.id/pustaka/135696/analysis-factor-of-motivation-that-influence-drivers-who-using-uber-application-in-uber-bandung-proceeding-of-isclo-international-seminar-and-conference-on-learning-organization-october-26th-2016.html"><b>Analysis Factor of Motivation that Influence Drivers Who Using UBER Application in UBER, Bandung : Proceeding of ISCLO (International Seminar and Conference on Learning Organization), October 26th 2016</b></a><br>

                            <div class="item_meta">
                                <div class="meta_item_author">Rafi Achas Muhammad, Fetty Poerwita Sary</div>
                                <div class="meta_item_publish">Universitas Telkom, 2016</div>
                            </div>

                            <div class="item_meta">
                                <div class="item_bullet">Klasifikasi Higher education- Education, research, related topics</div>
                                <div class="item_bullet">E-Article (Non-Sirkulasi)</div>
                            </div>

                            <a class="item_available" href="/knowledgeitem/135696/available.html">tersedia 0 koleksi</a><br>
                            <a class="item_stock" href="/knowledgeitem/135696/stock.html">total 1 koleksi</a><br>
                            <a class="item_download_generic" href="/pustaka/135696/analysis-factor-of-motivation-that-influence-drivers-who-using-uber-application-in-uber-bandung-proceeding-of-isclo-international-seminar-and-conference-on-learning-organization-october-26th-2016.html">tersedia 1 file download</a>
                            <!-- patch here -->
                            <!-- end of patch -->

                            <br><a class="item_notify" href="/knowledgeitem/135696/notify.html">kirim notifikasi jika tersedia</a></td>
                        </td>
                        <td>
                            <div>
                                <b>HIGHER EDUCATION</b><br>
                                <small></small>
                            </div>
                            <div style="margin-top: 10px;">
                                The study attempted to identify factors affecting and assess the level of motivation of drivers working
                                using Uber Application in Uber Bandung. Motivation plays an important role in work environment. The..<a href="https://openlibrary.telkomuniversity.ac.id/pustaka/135696/analysis-factor-of-motivation-that-influence-drivers-who-using-uber-application-in-uber-bandung-proceeding-of-isclo-international-seminar-and-conference-on-learning-organization-october-26th-2016.html">selengkapnya..</a></div>

                        </td>

                    </tr>
                    <tr>
                        <td>
                            <img src="https://openlibrary.telkomuniversity.ac.id/uploads/book/cover/17.43.050.jpg" title="International Research Journal of Business Studies, Vol 9 No. 3 Desember 2016-March 2017" width="70">
                            <div class="knowledge_item_title">17.43.050</div>
                        </td>
                        <td>

                            <a href="https://openlibrary.telkomuniversity.ac.id/pustaka/135697/international-research-journal-of-business-studies-vol-9-no-3-desember-2016-march-2017.html"><b>International Research Journal of Business Studies, Vol 9 No. 3 Desember 2016-March 2017</b></a><br>

                            <div class="item_meta">
                                <div class="meta_item_author">Sulaimiah Sulaimiah, Et al.</div>
                                <div class="meta_item_publish">Prasetiya Mulya Business School, 2017</div>
                            </div>

                            <div class="item_meta">
                                <div class="item_bullet">Klasifikasi Journal of Management, Journal of Business</div>
                                <div class="item_bullet">Jurnal Terakreditasi DIKTI - Reference (Non-Sirkulasi)</div>
                            </div>

                            <a class="item_available" href="/knowledgeitem/135697/available.html">tersedia 0 koleksi</a><br>
                            <a class="item_stock" href="/knowledgeitem/135697/stock.html">total 1 koleksi</a><br>

                            <!-- patch here -->
                            <!-- end of patch -->

                            <br><a class="item_notify" href="/knowledgeitem/135697/notify.html">kirim notifikasi jika tersedia</a></td>

                        </td>
                        <td>
                            <div>
                                <b>BUSINESS</b><br>
                                <small></small>
                            </div>
                            <div style="margin-top: 10px;">
                                -How do Entrepreneurial Human Resource Practices Determine Small Firms’ Performance?
                                Sulaimiah Sulaimiah,	Sulhaini Sulhaini

                                -The Impact of Family Control on Dividend Policy: Evidence from Indonesia
                                Lukas Setia-Atmaja

                                -Accountability and Incumbent Re-election in Indonesian..<a href="https://openlibrary.telkomuniversity.ac.id/pustaka/135697/international-research-journal-of-business-studies-vol-9-no-3-desember-2016-march-2017.html">selengkapnya..</a></div>
                        </td>
                    </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function() {
        $('#katalog').DataTable();
    });
</script>
@endsection