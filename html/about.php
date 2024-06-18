<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Modern Business - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/pxl.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Plotly.js -->
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
</head>
<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="index.html">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">Live Data</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Temperature section -->
        <section class="bg-light py-5">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="fw-bolder">Live Data</h1>
                    <p class="lead fw-normal text-muted mb-0">CPU Temperatuur</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6" style="width: 70%;">
                        <div id="temperatureChart" style="height: 400px;"></div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="card mb-5 mb-xl-0">
                            <div class="card-body p-5">
                                <h5 class="card-title">Laatste beschikbare temperatuur</h5>
                                <p class="card-text" id="lastTemperature">...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Webtechnologie Project 2024</div></div>                   
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- Custom script for fetching and plotting data -->
    <script>
        function fetchTemperatureData() {
            fetch('/api.php')
                .then(response => response.json())
                .then(data => {
                    const times = data.map(item => item.recorded_at);
                    const values = data.map(item => item.value);

                    const trace = {
                        x: times,
                        y: values,
                        mode: 'lines+markers',
                        type: 'scatter',
                        name: 'Temperature'
                    };

                    const layout = {
                        title: 'CPU Temperatuur (Laatste 2 Minuten)',
                        xaxis: { title: 'Tijd' },
                        yaxis: { title: 'Temperatuur (°C)', range: [50, 70] }
                    };

                    Plotly.newPlot('temperatureChart', [trace], layout);

                    // Update last temperature display
                    const lastTemperature = values[values.length - 1];
                    document.getElementById('lastTemperature').textContent = `${lastTemperature} °C`;
                })
                .catch(error => {
                    console.error('Error fetching temperature data:', error);
                });
        }

        setInterval(fetchTemperatureData, 2500); // Update every 2.5 seconds
        fetchTemperatureData(); // Initial fetch
    </script>
</body>
</html>
