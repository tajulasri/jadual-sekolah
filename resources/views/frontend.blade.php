<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Helping parents monitor and track their children's PdPR schedule. Add this website to your child's home screen or desktop to help them keep track of classes.">
    <meta name="author" content="zulfajuniadi@gmail.com">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://jadualku.com/">
    <meta property="og:title" content="PdPR Dengan Mudah!">
    <meta property="og:description" content="Membantu Ibu bapa untuk memantau kehadiran PdPR anak-anak. Simpan halaman ini di Desktop atau Home Screen peranti anak anda.">
    <meta property="og:image" content="https://jadualku.com/img/schedule.jpg">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://jadualku.com/">
    <meta property="twitter:title" content="PdPR Dengan Mudah!">
    <meta property="twitter:description" content="Membantu Ibu bapa untuk memantau kehadiran PdPR anak-anak. Simpan halaman ini di Desktop atau Home Screen peranti anak anda.">
    <meta property="twitter:image" content="https://jadualku.com/img/schedule.jpg">
    
    <title>JadualKu.com - Permudahkan PdPR</title>
    
    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom fonts for this template -->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    
    <!-- Custom styles for this template -->
    <link href="/css/landing-page.min.css" rel="stylesheet">
    
</head>

<body>
    
    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
        <div class="container">
            <a class="navbar-brand" href="/"><strong>Jadual</strong>Ku</a>
            <a class="btn btn-primary" href="/app/login">Log Masuk</a>
        </div>
    </nav>
    
    @yield('content')
    
    <!-- Footer -->
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item">
                            <a href="mailto:zulfajuniadi@gmail.com">Bantuan Emel</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="/privacy">Dasar Privasi</a>
                        </li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">Servis diberi percuma tanpa waranti. Bantu pembangunan kod sumber di <a target="_blank" href="https://github.com/zulfajuniadi/jadual-sekolah">Github</a>. <br/> &copy; jadualku.com {{date('Y')}}. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                    <div class="fb-share-button" data-href="https://jadualku.com" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fjadualku.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>

                    {{-- <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <a href="#">
                                <i class="fab fa-facebook fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="#">
                                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-instagram fa-2x fa-fw"></i>
                            </a>
                        </li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </footer>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0&appId=1790171384588486" nonce="xQtLZW47"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RVE5351F6L"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-RVE5351F6L');
    </script>
</body>

</html>
