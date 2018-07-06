<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard Mail Track</title>

    <!-- Jquery JS-->
    <script src="/vendor/jquery-3.2.1.min.js"></script>

    <!-- Fontfaces CSS-->
    <link href="/css/font-face.css" rel="stylesheet" media="all">
    <link href="/vendor/font-awesome-4.7//css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/vendor/font-awesome-5//css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/vendor/mdi-font//css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <h3 style="color:white">MM Mail Track</h3>
                    </div>
                    <div class="header__tool">
                        
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                
                                <div class="content">
                                    <a class="js-acc-btn" href="#">{{$nome}} {{$sobrenome}}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">{{$nome}} {{$sobrenome}}</a>
                                            </h5>
                                            <span class="email">{{$email}}</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="/logout">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                        <h3 style="color:white">MM Mail Track</h3>
                        </a>
                    </div>
                </div>
            </div>
            
        </header>
        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        
                        <div class="content">
                            <a class="js-acc-btn" href="#">{{$nome}} {{$sobrenome}}</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">{{$nome}} {{$sobrenome}}</a>
                                    </h5>
                                    <span class="email">{{$email}}</span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="#">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">

            <!-- STATISTIC-->
            <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="statistic__item statistic__item--green">
                                <h2 class="number">{{$aberturas->acessos_total}}</h2>
                                <span class="desc">E-mails oppened</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-book"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="statistic__item statistic__item--orange">
                                <h2 class="number">{{$total_trackIDs->total_trackIDs}}</h2>
                                <span class="desc">TrackIDs created</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-eye"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number">{{$trackIDs_ativos->trackIDs_ativos}}</h2>
                                <span class="desc">Active TrackIDs</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-notifications-active"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            <!-- STATISTIC CHART-->
            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">statistics</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <!-- CHART-->
                            <div class="statistic-chart-1">
                                <h3 class="title-3 m-b-30">chart</h3>
                                <div class="chart-wrap">
                                    <canvas id="widgetChart5"></canvas>
                                </div>
                                <div class="statistic-chart-1-note">
                                    <span class="big">10,368</span>
                                    <span>/ 16220 items sold</span>
                                </div>
                            </div>
                            <!-- END CHART-->
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <!-- TOP CAMPAIGN-->
                            <div class="top-campaign">
                                <h3 class="title-3 m-b-30">Top read e-mails</h3>
                                <div class="table-responsive">
                                    <table class="table table-top-campaign">
                                        <tbody>
                                            @foreach ($top_leituras as $item)
                                            <tr>
                                                <td>{{$loop->index+1}}. {{$item->observacao}}</td>
                                                <td>{{$item->contagem_acessos}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END TOP CAMPAIGN-->
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <!-- CHART PERCENT-->
                            <div class="chart-percent-2">
                                <h3 class="title-3 m-b-30">chart by %</h3>
                                <div class="chart-wrap">
                                    <canvas id="percent-chart2"></canvas>
                                    <div id="chartjs-tooltip">
                                        <table></table>
                                    </div>
                                </div>
                                <div class="chart-info">
                                    <div class="chart-note">
                                        <span class="dot dot--blue"></span>
                                        <span>products</span>
                                    </div>
                                    <div class="chart-note">
                                        <span class="dot dot--red"></span>
                                        <span>Services</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END CHART PERCENT-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC CHART-->

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Track IDs</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#modal-newTrackID">
                                        <i class="zmdi zmdi-plus"></i>Create new Track ID</button>
                                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Track ID</th>
                                            <th>Created at</th>
                                            <th>Read Count</th>
                                            <th>First Access</th>
                                            <th>Last Access</th>
                                            <th>Monitoring</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($dados as $dado)
                                        <tr>
                                        <td>{{$dado->observacao}}</td>
                                        <td data-toggle="modal" data-target="#modal-linkTrackID" class="trackID">{{$dado->trackID}}</td>
                                        <td>{{$dado->data_criacao}}</td>
                                        <td>{{$dado->contagem_acessos}}</td>
                                        <td>{{$dado->primeiro_acesso}}</td>
                                        <td>{{$dado->ultimo_acesso}}</td>
                                        @if ($dado->ativo == 1)
                                            <td><center><a class="status--process" href="/trackID/disable/{{$dado->trackID}}">Yes</a></center></td>
                                        @else
                                            <td><center><a class="status--denied"href="/trackID/enable/{{$dado->trackID}}">No</a></center></td>
                                        @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->

            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>

    </div>

    <!--MODALS-->
    <div class="modal fade" tabindex="-1" role="dialog" id="modal-newTrackID">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create new TrackID</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/new/TrackID" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" type="text" id="name" name="name" placeholder="Subject of the e-mail">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" type="submit" style="width:100%">Save</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="modal-linkTrackID">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">TrackID Link</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Copy this and add as an image in your e-mail. After, enable the Monitoring option.</p>
                    <div class="alert alert-success">
                        <input class="form-control" readonly type="text" id="link">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnCopy">Copy</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--END MODALS-->

    <!--MODAL SCRIPTS (AUTO COPY)-->
    <script>
        $(document).ready(function() {
            $('.trackID').on('click',function() {
                txt = 'https://matheusmiliorini.com.br/trackID/' + $(this).text();
                $('#link').val(txt);
            });

            $('#btnCopy').on('click',function() {
                var copyText = $("#link");
                /* Select the text field */
                copyText.select();
                /* Copy the text inside the text field */
                document.execCommand("copy");
            });
        });
    </script>
    <!--END MODAL SCRIPTS-->

    
    <!-- Bootstrap JS-->
    <script src="/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="/vendor/slick/slick.min.js">
    </script>
    <script src="/vendor/wow/wow.min.js"></script>
    <script src="/vendor/animsition/animsition.min.js"></script>
    <script src="/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="/js/main.js"></script>

</body>

</html>
<!-- end document-->