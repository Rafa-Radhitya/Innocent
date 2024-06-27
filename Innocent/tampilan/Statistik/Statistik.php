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

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script defer src="js/fontawesome/all.min.js"></script>
    <!-- cdn statistik -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>

<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader"></div>
    </div>


    <!-- header
    ================================================== -->
    <?php include '../header_footer/header.php'; ?>


    <!-- content
    ================================================== -->
    <section class="s-content s-content--no-top-padding">

        <div class="row">
            <div class="column large-12">

                <article class="s-content__entry format-standard">


                    <div class="s-content__entry-header">

                        <!-- Bar Chart Revenue  -->
                        <canvas id="myChart" width="200" height="90"></canvas>
                        <script>
                            const labels = ['CS2', 'Valorant', 'MlBB', 'Coc', 'Roblox'];
                            const data = {
                                labels: labels,
                                datasets: [{
                                    label: 'Juta',
                                    data: [20, 18, 15, 8, 5],
                                    borderColor: [
                                        'rgb(255, 99, 132)',
                                        'rgb(54, 162, 235)',
                                        'rgb(255, 205, 86)',
                                        'rgb(75, 192, 192)',
                                        'rgb(153, 102, 255)',
                                    ],
                                    backgroundColor: [
                                        'rgba(255, 99, 132)',
                                        'rgba(54, 162, 235)',
                                        'rgba(255, 205, 86)',
                                        'rgba(75, 192, 192)',
                                        'rgba(153, 102, 255)',
                                    ],
                                }]
                            };

                            const config = {
                                type: 'bar',
                                data: data,
                                options: {
                                    indexAxis: 'y',
                                    elements: {
                                        bar: {
                                            borderWidth: 2,
                                        }
                                    },
                                    responsive: true,
                                    plugins: {
                                        legend: {
                                            position: 'right',
                                            stacked: true,
                                        },
                                        title: {
                                            display: true,
                                            text: 'Pendapatan Tertinggi',
                                            font: {
                                                size: 30
                                            },
                                            color: 'rgba(255, 255, 255)',
                                        }

                                    },
                                    scales: {
                                        x: {
                                            grid: {
                                                color: '#d0d1d1',
                                            },
                                            border: {
                                                color: '#d0d1d1'
                                            }
                                        },
                                        y: {
                                            grid: {
                                                display: false
                                            },
                                            border: {
                                                color: '#d0d1d1'
                                            }
                                        }
                                    }
                                },
                            };

                            const myChart = new Chart(
                                document.getElementById('myChart'),
                                config
                            );
                        </script>
                    </div> <!-- end s-content__entry-header -->

                    <div class="s-content__primary">

                        <div class="s-content__entry-content">


                            <p class="lead">
                                Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor
                                sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat
                                enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco
                                magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum
                                adipisicing aliqua ea nisi sint. Unde quod at minus quia velit ipsa ea qui. </p>

                            <p>
                                Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor
                                sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat
                                enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco
                                magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum
                                adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa occaecat ut
                                laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat
                                in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.
                            </p>


                            <p>
                                Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor
                                sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat
                                enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco
                                magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum
                                adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa occaecat ut
                                laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat
                                in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.
                            </p>

                            <h2>Large Heading</h2>

                            <p>
                                Harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque nihil impedit quo minus <a href="http://#">omnis voluptas assumenda est</a>
                                id quod maxime placeat facere possimus, omnis dolor repellendus. Temporibus autem quibusdam et
                                aut officiis debitis aut rerum necessitatibus saepe eveniet ut et.</p>

                            <blockquote>
                                <p>
                                    For God so loved the world, that he gave his only Son, that whoever believes in
                                    him should not perish but have eternal life. For God did not send his Son into
                                    the world to condemn the world, but in order that the world might be
                                    saved through him.
                                </p>
                                <cite>John 3:16-17 ESV</cite>
                            </blockquote>

                            <p>
                                Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti dolores
                                et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa.
                                Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit
                                libero, a pharetra augue laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat
                                occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed..</p>

                            <h3>Smaller Heading</h3>

                            <p>
                                Quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est
                                eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas
                                assumenda est, omnis dolor repellendus.
                            </p>

                            <p>
                                Quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est
                                eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas
                                assumenda est, omnis dolor repellendus.
                            </p>


                            <p>
                                Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti dolores et
                                quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa.</p>

                            <ul>
                                <li>Donec nulla non metus auctor fringilla.
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                    </ul>
                                </li>
                                <li>Donec nulla non metus auctor fringilla.</li>
                                <li>Donec nulla non metus auctor fringilla.</li>
                            </ul>

                            <p>
                                Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti dolores et quas
                                molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa. Aenean eu leo quam.
                                Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue
                                laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing
                                in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.
                            </p>

                        </div> <!-- end s-entry__entry-content -->
                    </div> <!-- end s-entry__entry-content -->


            </div> <!-- end s-content__primary -->
            </article> <!-- end entry -->

        </div> <!-- end column -->
        </div> <!-- end row -->
    </section> <!-- end s-content -->


    <!-- footer
    ================================================== -->
    <footer class="s-footer">

        <div class="s-footer__main">

            <div class="row">

                <div class="column large-3 medium-6 tab-12 s-footer__info">

                    <h5>About Our Site</h5>

                    <p>
                        Lorem ipsum Ut velit dolor Ut labore id fugiat in ut
                        fugiat nostrud qui in dolore commodo eu magna Duis
                        cillum dolor officia esse mollit proident Excepteur
                        exercitation nulla. Lorem ipsum In reprehenderit
                        commodo aliqua irure.
                    </p>

                </div> <!-- end s-footer__info -->

                <div class="column large-2 medium-3 tab-6 s-footer__site-links">

                    <h5>Site Links</h5>

                    <ul>
                        <li><a href="#0">About Us</a></li>
                        <li><a href="#0">Blog</a></li>
                        <li><a href="#0">FAQ</a></li>
                        <li><a href="#0">Terms</a></li>
                        <li><a href="#0">Privacy Policy</a></li>
                    </ul>

                </div> <!-- end s-footer__site-links -->

                <div class="column large-2 medium-3 tab-6 s-footer__social-links">

                    <h5>Follow Us</h5>

                    <ul>
                        <li><a href="#0">Twitter</a></li>
                        <li><a href="#0">Facebook</a></li>
                        <li><a href="#0">Dribbble</a></li>
                        <li><a href="#0">Pinterest</a></li>
                        <li><a href="#0">Instagram</a></li>
                    </ul>

                </div> <!-- end s-footer__social links -->

                <div class="column large-3 medium-6 tab-12 s-footer__subscribe">

                    <h5>Sign Up for Newsletter</h5>

                    <p>Signup to get updates on articles, interviews and events.</p>

                    <div class="subscribe-form">

                        <form id="mc-form" class="group" novalidate="true">

                            <input type="email" value="" name="dEmail" class="email" id="mc-email" placeholder="Your Email Address" required="">

                            <input type="submit" name="subscribe" value="subscribe">

                            <label for="mc-email" class="subscribe-message"></label>

                        </form>

                    </div>

                </div> <!-- end s-footer__subscribe -->

            </div> <!-- end row -->

        </div> <!-- end s-footer__main -->

        <div class="s-footer__bottom">
            <div class="row">
                <div class="column">
                    <div class="ss-copyright">
                        <span>© Copyright Calvin 2020</span>
                        <span>Design by <a href="https://www.styleshout.com/">StyleShout</a></span>
                    </div> <!-- end ss-copyright -->
                </div>
            </div>

            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top">
                    <svg viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" width="15" height="15">
                        <path d="M7.5 1.5l.354-.354L7.5.793l-.354.353.354.354zm-.354.354l4 4 .708-.708-4-4-.708.708zm0-.708l-4 4 .708.708 4-4-.708-.708zM7 1.5V14h1V1.5H7z" fill="currentColor"></path>
                    </svg>
                </a>
            </div> <!-- end ss-go-top -->
        </div> <!-- end s-footer__bottom -->

    </footer> <!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.5.0.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>