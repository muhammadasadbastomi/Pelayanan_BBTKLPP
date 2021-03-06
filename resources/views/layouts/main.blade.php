<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Aplikasi Pelayanan BBTKLP</title>
    <!-- Custom CSS -->
    <link href="{{asset('dist/css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/pages/floating-label.css')}}" rel="stylesheet">
    <link href="{{asset('assets/node_modules/dropify/dist/css/dropify.css')}}" rel="stylesheet">
    <link href="{{asset('assets/node_modules/datatables/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('iziToast/iziToast.css')}}" rel="stylesheet">
    <link href="{{asset('assets/node_modules/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/node_modules/chartist-js/dist/chartist-init.css')}}" rel="stylesheet">
    <link href="{{asset('assets/node_modules/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}"
        rel="stylesheet">
    <link href="{{asset('assets/node_modules/css-chart/css-chart.css')}}" rel="stylesheet">
    @yield('css')
    <!-- page css -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default-dark fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{asset('assets/images/logo-icon.png')}}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="{{asset('assets/images/logo-light-icon.png')}}" alt="homepage"
                                class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                            <!-- dark Logo text -->
                            <img src="{{asset('assets/images/logo-text.png')}}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="{{asset('assets/images/logo-light-text.png')}}" class="light-logo"
                                alt="homepage" /></span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-sm-none waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a
                                class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                                href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        {{-- <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <input type="text" class="form-control" placeholder="Search & enter">
                            </form>
                        </li> --}}
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    {{-- <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"> <i class="ti-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new
                                                        admin!</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-success btn-circle"><i class="ti-calendar"></i>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>Event today</h5> <span class="mail-desc">Just a reminder that
                                                        you have event</span> <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Settings</h5> <span class="mail-desc">You can customize this
                                                        template as you want</span> <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my
                                                        admin!</span> <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link" href="javascript:void(0);"> <strong>Check
                                                all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                    class="icon-note"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-right animated bounceInDown"
                                aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <img src="{{asset('ART.png')}}" alt="user"
                    class="img-circle"> <span class="profile-status online pull-right"></span>
                </div>
                <div class="mail-contnet">
                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my
                        admin!</span> <span class="time">9:30 AM</span>
                </div>
                </a>
                <!-- Message -->
                <a href="javascript:void(0)">
                    <div class="user-img"> <img src="{{asset('ART.png')}}" alt="user" class="img-circle"> <span
                            class="profile-status busy pull-right"></span> </div>
                    <div class="mail-contnet">
                        <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See
                            you at</span> <span class="time">9:10 AM</span>
                    </div>
                </a>
                <!-- Message -->
                <a href="javascript:void(0)">
                    <div class="user-img"> <img src="{{asset('ART.png')}}" alt="user" class="img-circle"> <span
                            class="profile-status away pull-right"></span> </div>
                    <div class="mail-contnet">
                        <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span>
                        <span class="time">9:08 AM</span>
                    </div>
                </a>
                <!-- Message -->
                <a href="javascript:void(0)">
                    <div class="user-img"> <img src="{{asset('ART.png')}}" alt="user" class="img-circle"> <span
                            class="profile-status offline pull-right"></span> </div>
                    <div class="mail-contnet">
                        <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my
                            admin!</span> <span class="time">9:02 AM</span>
                    </div>
                </a>
    </div>
    </li>
    <li>
        <a class="nav-link text-center link" href="javascript:void(0);"> <strong>See all
                e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
    </li>
    </ul>
    </div>
    </li>
    <!-- ============================================================== -->
    <!-- End Messages -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- mega menu -->
    <!-- ============================================================== -->
    <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle waves-effect waves-dark" href=""
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                class="ti-layout-width-default"></i></a>
        <div class="dropdown-menu animated bounceInDown">
            <ul class="mega-dropdown-menu row">
                <li class="col-lg-3 col-xlg-2 m-b-30">
                    <h4 class="m-b-20">CAROUSEL</h4>
                    <!-- CAROUSEL -->
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="container"> <img class="d-block img-fluid"
                                        src="../assets/images/big/img1.jpg" alt="First slide"></div>
                            </div>
                            <div class="carousel-item">
                                <div class="container"><img class="d-block img-fluid"
                                        src="../assets/images/big/img2.jpg" alt="Second slide">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container"><img class="d-block img-fluid"
                                        src="../assets/images/big/img3.jpg" alt="Third slide"></div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span
                                class="sr-only">Previous</span> </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span
                                class="sr-only">Next</span> </a>
                    </div>
                    <!-- End CAROUSEL -->
                </li>
                <li class="col-lg-3 m-b-30">
                    <h4 class="m-b-20">ACCORDION</h4>
                    <!-- Accordian -->
                    <div id="accordion" class="nav-accordion" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        Collapsible Group Item #1
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                <div class="card-body"> Anim pariatur cliche reprehenderit, enim
                                    eiusmod high. </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Collapsible Group Item #2
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="card-body"> Anim pariatur cliche reprehenderit, enim
                                    eiusmod high life accusamus terry richardson ad squid. </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Collapsible Group Item #3
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="card-body"> Anim pariatur cliche reprehenderit, enim
                                    eiusmod high life accusamus terry richardson ad squid. </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3  m-b-30">
                    <h4 class="m-b-20">CONTACT US</h4>
                    <!-- Contact -->
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleTextarea" rows="3"
                                placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>
                </li>
                <li class="col-lg-3 col-xlg-4 m-b-30">
                    <h4 class="m-b-20">List style</h4>
                    <!-- List style -->
                    <ul class="list-style-none">
                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                You can give link</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                Give link</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                Another Give link</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                Forth link</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                Another fifth link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </li>
    <!-- ============================================================== -->
    <!-- End mega menu -->
    <!-- ============================================================== -->
    <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i
                class="ti-settings"></i></a></li>
    </ul> --}}
    </div>
    </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- User Profile-->
            <div class="user-profile">
                <div class="user-pro-body">
                    <div><img src="{{asset('default.png')}}" alt="user-img" class="img-circle"></div>
                    <div class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu"
                            data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">{{Auth::user()->nama}} <span class="caret"></span></a>
                        <div class="dropdown-menu animated flipInY">
                            <!-- text-->
                            {{-- <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My
                                Profile</a>
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My
                                Balance</a>
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account
                                Setting</a> --}}
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <form id="frm-logout" action="{{ route('auth.logout') }}" method="POST">
                                {{ csrf_field() }}
                                <button type="submit" class="dropdown-item"><i class="fa fa-power-off"></i>
                                    Logout</a>
                            </form>
                            <!-- text-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-small-cap">--- MENU UTAMA</li>
                    <li> <a class="waves-effect waves-dark" href="{{Route('admin.index')}}"><i
                                class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a>
                    </li>
                    {{-- @if (Auth::user()->role == 0) --}}
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                                class="ti-palette"></i><span class="hide-menu">Manajemen User
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{Route('admin.user.index')}}">User</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                                class="ti-server"></i><span class="hide-menu">Master
                                Data</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('admin.jenis.index')}}">Jenis Sampel</a></li>
                            <li><a href="{{route('admin.jenis-pengujian.index')}}">Jenis Pengujian</a></li>
                        </ul>
                    </li>
                    <li> <a class="waves-effect waves-dark" href="{{route('admin.permohonan.index')}}"><i
                                class="ti-receipt"></i>Data
                            Permohonan</span></a>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                                class="ti-server"></i><span class="hide-menu">Laporan
                            </span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a target="_blank" href="{{Route('admin.report.pemohon')}}">Pemohon</a></li>
                            <li><a target="_blank" href="{{Route('admin.report.penyelia')}}">Penyelia</a></li>
                            <li><a href="{{route('admin.report.permohonanindex')}}">Permohonan (periode)</a></li>
                            <li><a href="{{route('admin.report.jenisindex')}}">Permohonan (jenis sampel)</a></li>
                            <li><a href="{{route('admin.report.bentukindex')}}">Permohonan (bentuk sampel)</a></li>
                            <li><a href="{{route('admin.report.sifatindex')}}">Permohonan (sifat sampel)</a></li>
                            <li><a href="{{route('admin.report.wadahindex')}}">Permohonan (wadah sampel)</a></li>
                        </ul>
                    </li>
                    {{-- <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                                class="ti-server"></i><span class="hide-menu">Master
                                Data</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('admin.desa.index')}}">Desa</a></li>
                    <li><a href="{{route('admin.jabatan.index')}}">Jabatan</a></li>
                    <li><a href="{{route('admin.camat.index')}}">Camat</a></li>
                    <li><a href="{{route('admin.kasi.index')}}">Kepala Seksi</a></li>
                    <li><a href="{{route('admin.pegawai.index')}}">Pegawai</a></li>
                    <li><a href="{{route('admin.petugas.index')}}">Petugas</a></li>
                    <li><a href="{{route('admin.jadwal.index')}}">Jadwal Petugas</a></li>
                </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-menu"></i><span class="hide-menu">Laporan
                            Kejadian</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.kegiatan.index')}}">Kegiatan</a></li>
                        <li><a href="{{route('admin.konflik.index')}}">Konflik</a></li>
                        <li><a href="{{route('admin.gangguan.index')}}">Gangguan</a></li>
                        <li><a href="{{route('admin.kriminal.index')}}">Kriminal</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-bar-chart"></i><span class="hide-menu">Cetak Laporan
                        </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.report.kegiatanIndex')}}">Kegiatan</a></li>
                        <li><a href="{{route('admin.report.konflikIndex')}}">Konflik</a></li>
                        <li><a href="{{route('admin.report.gangguanIndex')}}">Gangguan</a></li>
                        <li><a href="{{route('admin.report.kriminalIndex')}}">Kriminal</a></li>
                        <li><a target="_blank" href="{{route('admin.report.grafik')}}">Grafik Kejadian</a></li>
                        <li><a target="_blank" href="{{route('admin.report.camat')}}">Camat</a></li>
                        <li><a target="_blank" href="{{route('admin.report.pegawai')}}">Pegawai</a></li>
                        <li><a target="_blank" href="{{route('admin.report.petugas')}}">Petugas</a></li>
                        <li><a target="_blank" href="{{route('admin.report.kasi')}}">Kasi</a></li>
                        <li><a target="_blank" href="{{route('admin.report.jadwal')}}">Jadwal Petugas</a></li>
                        <li><a href="{{route('admin.report.suratIndex')}}">Surat Tugas Petugas</a>
                        </li>
                    </ul>
                </li>
                @else
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-menu"></i><span class="hide-menu">Laporan
                            Kejadian</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.kegiatan.index')}}">Kegiatan</a></li>
                        <li><a href="{{route('admin.konflik.index')}}">Konflik</a></li>
                        <li><a href="{{route('admin.gangguan.index')}}">Gangguan</a></li>
                        <li><a href="{{route('admin.kriminal.index')}}">Kriminal</a></li>
                    </ul>
                </li>
                @endif --}}

                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            @yield('content')
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer">
        ?? 2021 BBTKLP Banjarbaru
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/node_modules/popper/popper.min.js')}}"></script>
    <script src="{{asset('assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('dist/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{asset('assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{asset('assets/node_modules/sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('dist/js/custom.min.js')}}"></script>
    <script src="{{asset('assets/node_modules/dropify/dist/js/dropify.js')}}"></script>
    <script src="{{asset('assets/node_modules/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('iziToast/iziToast.js')}}"></script>
    <script>
        $('.dropify').dropify();
    </script>
    <script>
        $('#myTable').dataTable();
    </script>
    @include('layouts.alert')
    @include('layouts.alert_error')
    @include('layouts.filter')
    @yield('script')
</body>

</html>
