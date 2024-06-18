<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Project Webtechnologie</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/pxl.ico" />
    <!-- Bootstrap icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap) -->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="index.html">Project</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">Live Data</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start">
                            <h1 class="display-5 fw-bolder text-white mb-2">CPU Temperatuur</h1>
                            <p class="lead fw-normal text-white-50 mb-4">We hebben deze website ontwikkeld als onderdeel van een opdracht voor de cursus Webtechnologie. Op de website vind je meer informatie over het project en een pagina waar live data getoond wordt van de CPU.</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="live.html">Live Data</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="/assets/cpu.jpg" alt="..." /></div>
                </div>
            </div>
        </header>
        <!-- Toepassingen -->
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center">
                            <h2 class="fw-bolder">Toepassingen</h2>
                            <p class="lead fw-normal text-muted mb-5">Onze website ontvangt gegevens van een externe pc waarvan de CPU temperatuur wordt uitgelezen. Dit kan nuttig zijn voor verschillende toepassingen, zoals:</p>
                        </div>
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="/assets/onderhoud.jpg" alt="..." />
                            <div class="card-body p-4">
                                <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Preventief onderhoud</h5></a>
                                <p class="card-text mb-0">Door de temperatuur van de NAS continu te monitoren, kun je potentiële oververhittingsproblemen vroegtijdig detecteren. Dit stelt je in staat om proactief maatregelen te nemen, zoals het verbeteren van de ventilatie of het toevoegen van koeling, voordat ernstige schade optreedt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="/assets/nas.jpg" alt="..." />
                            <div class="card-body p-4">
                                <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Monitoring op afstand</h5></a>
                                <p class="card-text mb-0">Als de NAS op een externe locatie staat, bijvoorbeeld in een datacenter of een ander gebouw, kun je door de temperatuur te monitoren op afstand problemen identificeren zonder fysiek aanwezig te hoeven zijn. Dit bespaart tijd en vermindert de kans op ongeplande uitval.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="/assets/warning.avif" alt="..." />
                            <div class="card-body p-4">
                                <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Waarschuwingen en meldingen</h5></a>
                                <p class="card-text mb-0">Door temperatuurwaarschuwingen in te stellen op een website of monitoringplatform, kun je snel op de hoogte worden gesteld van abnormaal hoge temperaturen. Dit stelt je in staat om snel te reageren en potentiële schade te voorkomen voordat deze optreedt.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Webtechnologie Project 2024</div></div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS -->
    <script src="js/scripts.js"></script>
</body>
</html>
