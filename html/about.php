<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Data</title>
    <link rel="stylesheet" href="./css/stylesheet.css">
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Project Webtechnologie</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="index.php">Home</a>
                    <a class="nav-link active" aria-current="page" href="about.php">About</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Temperature Monitoring</h1>
        <div class="row">
            <div class="col-md-8">
                <div id="temperatureChart" style="width:100%;height:500px;"></div>
            </div>
            <div class="col-md-4">
                <h3>Latest Temperature</h3>
                <p id="latestTemperature" class="display-4"></p>
                <p id="latestTimestamp"></p>
            </div>
        </div>
    </div>

    <script>
        function fetchTemperatureData() {
            fetch('/api.php')
                .then(response => response.json())
                .then(data => {
                    if (data.length > 0) {
                        const times = data.map(entry => entry.recorded_at); // Assuming recorded_at is already in a date format
                        const temperatures = data.map(entry => entry.value);

                        const trace = {
                            x: times,
                            y: temperatures,
                            mode: 'lines+markers',
                            type: 'scatter',
                            name: 'Temperature'
                        };

                        const layout = {
                            title: 'Temperature Data (Last 2 Minutes)',
                            xaxis: {
                                title: 'Time',
                                tickmode: 'auto', // 'auto' chooses the best tick spacing automatically
                                tickformat: '%Y-%m-%d %H:%M:%S.%L', // Custom tick format with milliseconds
                                tickangle: -45, // Angle of rotation for tick labels
                                automargin: true // Automatically adjusts margins
                            },
                            yaxis: { title: 'Temperature (°C)' }
                        };

                        Plotly.newPlot('temperatureChart', [trace], layout);

                        // Update latest temperature display
                        const latestData = data[0];
                        const latestTemperature = latestData.value;
                        const latestTimestamp = latestData.recorded_at;

                        document.getElementById('latestTemperature').innerText = `${latestTemperature} °C`;
                        document.getElementById('latestTimestamp').innerText = `Last update: ${latestTimestamp}`;
                    } else {
                        document.getElementById('latestTemperature').innerText = 'No data available';
                        Plotly.purge('temperatureChart'); // Clear graph if no data
                    }
                })
                .catch(error => {
                    console.error('Error fetching temperature data:', error);
                });
        }

        setInterval(fetchTemperatureData, 2500); // Update every 2.5 seconds
        fetchTemperatureData(); // Initial fetch
    </script>

    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: #e92517;">
        <div class="container">
            <section class="mt-5">
                <div class="row text-center d-flex justify-content-center pt-5">
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!" class="text-white">About us</a>
                        </h6>
                    </div>
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!" class="text-white">Products</a>
                        </h6>
                    </div>
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!" class="text-white">Awards</a>
                        </h6>
                    </div>
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!" class="text-white">Help</a>
                        </h6>
                    </div>
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!" class="text-white">Contact</a>
                        </h6>
                    </div>
                </div>
            </section>
            <hr class="my-5" />
            <section class="mb-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <p>Project Webtechnologie</p>
                    </div>
                </div>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Copyright:
            <a class="text-white" href="https://www.pxl.be/">PXL</a>
        </div>
    </footer>
    <!-- Footer end -->
</body>

</html>
