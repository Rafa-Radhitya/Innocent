<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Innocent</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="../css/vendor.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/genre.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script defer src="js/fontawesome/all.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

    <!-- preloader
    ================================================== -->
    <div id="preloader"> 
        <div id="loader"></div>
    </div>

    <!-- header
    ================================================== -->
    <?php include '../header_footer/header.php'; ?>

</head>
<body>
    <h1>Popular Games Chart</h1>
    <canvas id="gamesChart"></canvas>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        fetch("chart_backend.php")
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    document.body.innerHTML += `<div class='error'>${data.error}</div>`;
                    return;
                }

                const ctx = document.getElementById('gamesChart').getContext('2d');
                const gamesChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: data.gameTitles,
                        datasets: [{
                            label: 'Price in USD',
                            data: data.gamePrices,
                            backgroundColor: 'rgba(75, 192, 192, 0.6)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1,
                            hoverBackgroundColor: 'rgba(75, 192, 192, 0.8)',
                            hoverBorderColor: 'rgba(75, 192, 192, 1)',
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    color: '#ffffff',
                                    font: {
                                        size: 14,
                                    }
                                },
                                grid: {
                                    color: 'rgba(255, 255, 255, 0.1)'
                                }
                            },
                            x: {
                                ticks: {
                                    color: '#ffffff',
                                    font: {
                                        size: 14,
                                    }
                                },
                                grid: {
                                    color: 'rgba(255, 255, 255, 0.1)'
                                }
                            }
                        },
                        plugins: {
                            legend: {
                                labels: {
                                    color: '#ffffff',
                                    font: {
                                        size: 16,
                                    }
                                }
                            },
                            tooltip: {
                                enabled: true,
                                backgroundColor: 'rgba(0,0,0,0.8)',
                                titleColor: '#ffffff',
                                bodyColor: '#ffffff',
                                borderColor: 'rgba(75, 192, 192, 1)',
                                borderWidth: 1
                            }
                        }
                    }
                });
            })
            .catch(error => {
                document.body.innerHTML += `<div class='error'>${error}</div>`;
            });
    </script>

    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            margin: 20px;
        }

        canvas {
            display: block;
            width: 90vw;
            height: 90vh;
            max-width: none;
            max-height: none;
            margin: 0 auto;
        }

        .error {
            color: red;
            text-align: center;
        }
    </style>

</body>
</html>
