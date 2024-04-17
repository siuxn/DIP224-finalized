<?php
session_start(); // Start session to access session variables

// Function to render the chart
function renderChart($result) {
    // Initialize arrays to store data for the chart
    $totalCarbonFootprint = array();
    $timestamp = array();

    // Fetch data from each row
    while ($row = $result->fetch_assoc()) {
        $totalCarbonFootprint[] = $row['total_carbon_footprint'];
        $timestamp[] = $row['timestamp'];
    }

    // Close the result set
    $result->close();

    // Format data for the chart
    $data = array(
        'labels' => $timestamp,
        'datasets' => array(
            array(
                'label' => 'Total Carbon Footprint',
                'data' => $totalCarbonFootprint,
                'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                'borderColor' => 'rgba(75, 192, 192, 1)',
                'borderWidth' => 2
            )
        )
    );

    // Encode data as JSON
    $chartData = json_encode($data);

    // Output the chart
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Historical Carbon Footprint Tracking</title>
        <!-- Include Chart.js library -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <!-- Link the CSS file -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> <!-- Google Fonts -->
            <link rel="stylesheet" href="historyDash.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin&amp;' type='text/css' media='all' />
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Noto+Sans%3Aregular%2Citalic%2C700%2C700italic&amp;subset=greek%2Ccyrillic-ext%2Ccyrillic%2Clatin%2Clatin-ext%2Cvietnamese%2Cgreek-ext&amp;' type='text/css' media='all' />
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Merriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext&amp;' type='text/css' media='all' />
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Mystery+Quest%3Aregular&amp;subset=latin%2Clatin-ext&amp;' type='text/css' media='all' />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
            <link rel='stylesheet' href='plugins/superfish/css/superfish.css' type='text/css' media='all' />
            <link rel='stylesheet' href='plugins/dl-menu/component.css' type='text/css' media='all' />
            <link rel='stylesheet' href='plugins/font-awesome-new/css/font-awesome.min.css' type='text/css' media='all' />
            <link rel='stylesheet' href='plugins/elegant-font/style.css' type='text/css' media='all' />
            <link rel='stylesheet' href='plugins/fancybox/jquery.fancybox.css' type='text/css' media='all' />
            <link rel='stylesheet' href='plugins/flexslider/flexslider.css' type='text/css' media='all' />
            <link rel='stylesheet' href='css/style-responsive.css' type='text/css' media='all' />
            <link rel='stylesheet' href='css/style-custom.css' type='text/css' media='all' />
            <link rel='stylesheet' href='plugins/masterslider/public/assets/css/masterslider.main.css' type='text/css' media='all' />
            <link rel='stylesheet' href='css/master-custom.css' type='text/css' media='all' />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
        </head>
        <body data-rsssl=1 class="home page-template-default page page-id-5680 _masterslider _msp_version_3.2.7 woocommerce-no-js">
    <div class="body-wrapper  float-menu" data-home="https://demo.goodlayers.com/greennature/">
    <header class="greennature-header-wrapper header-style-5-wrapper greennature-header-with-top-bar">
            <!-- top navigation -->
            <div class="top-navigation-wrapper">
                <div class="top-navigation-container container">
                    <div class="top-navigation-left">
                        <div class="top-navigation-left-text">
                            Phone : +1800-222-3333      Email : contact@yourdomain.com </div>
                    </div>
                    <div class="top-navigation-right">
                        <div class="top-social-wrapper">
                            <div class="social-icon">
                                <a href="#" target="_blank">
                                    <i class="fa fa-facebook"></i></a>
                            </div>
                            <div class="social-icon">
                                <a href="#" target="_blank">
                                    <i class="fa fa-flickr"></i></a>
                            </div>
                            <div class="social-icon">
                                <a href="#" target="_blank">
                                    <i class="fa fa-linkedin"></i></a>
                            </div>
                            <div class="social-icon">
                                <a href="#" target="_blank">
                                    <i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="social-icon">
                                <a href="#" target="_blank">
                                    <i class="fa fa-tumblr"></i></a>
                            </div>
                            <div class="social-icon">
                                <a href="#" target="_blank">
                                    <i class="fa fa-twitter"></i></a>
                            </div>
                            <div class="social-icon">
                                <a href="#" target="_blank">
                                    <i class="fa fa-vimeo"></i></a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div id="greennature-header-substitute"></div>
            <div class="greennature-header-inner header-inner-header-style-5">
                <div class="greennature-header-container container">
                    <div class="greennature-header-inner-overlay"></div>
                    <!-- logo -->
                    <div class="greennature-logo">
                        <div class="greennature-logo-inner">
                            <a href="index-2.html">
                                <img src="images/logo.png" alt="" /> </a>
                        </div>
                        <div class="greennature-responsive-navigation dl-menuwrapper" id="greennature-responsive-navigation">
                            <button class="dl-trigger">Open Menu</button>
                            <ul id="menu-main-menu" class="dl-menu greennature-main-mobile-menu">
                                <li class="menu-item menu-item-home current-menu-item page_item page-item-5680 current_page_item"><a href="index.php" aria-current="page">Home</a></li>
                                <li class="menu-item menu-item-has-children menu-item-15"><a href="#">Dashboard</a>
                                    <ul class="dl-submenu">
                                        <li class="menu-item"><a href="todayDashboard.php">Today Dashboard</a></li>
                                        <li class="menu-item"><a href="historyDashboard.php">History Dashboard</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="#">Blog</a>
                                    <ul class="dl-submenu">
                                        <li class="menu-item menu-item-has-children"><a href="display.php">Educational Content</a>
                                            <li class="menu-item menu-item-has-children"><a href="calender2.html">Calender</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="account.php">My Account</a>
                                    <ul class="dl-submenu">
                                    	<li class="menu-item"><a href="socialmedia.php">Share To Social Media</a></li>
                                        <li class="menu-item"><a href="survey.html">Survey</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- navigation -->
                    <div class="greennature-navigation-wrapper">
                        <nav class="greennature-navigation" id="greennature-main-navigation">
                            <ul id="menu-main-menu-1" class="sf-menu greennature-main-menu">
                                <li class="menu-item menu-item-home greennature-normal-menu"><a href="home.html"><i class="fa fa-home"></i>Home</a></li>
                                <li class="menu-item menu-item-has-children greennature-normal-menu"><a href="#" class="sf-with-ul-pre"><i class="fa fa-file-text-o"></i>Dashboard</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="todayDashboard.php">Today Dashboard</a></li>
                                        <li class="menu-item"><a href="historyDashboard.php">History Dashboard</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children greennature-normal-menu"><a href="#" class="sf-with-ul-pre"><i class="fa fa-file-text-o"></i>Blog</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="display.php">Educational Content</a></li>
                                        <li class="menu-item"><a href="calender2.html">Calendar</a></li>
                                    </ul>
                                </li>
                                <!-- My Account Section -->
                                <li class="menu-item menu-item-has-childrenmenu-item menu-item-has-children greennature-normal-menu">
                                    <a href="account.php" class="sf-with-ul-pre">My Account</a>
                                    <ul class="sub-menu">
                                        <!-- Profile Section -->
                                        <li class="menu-item"><a href="profile.php">Profile</a></li>
                                        <li class="menu-item"><a href="survey.html">Survey</a></li>
                                        <li class="menu-item menu-item-has-children menu-item-"><a href="socialmedia.php" class="sf-with-ul-pre">Share To Social Media</a>
                                    </ul>
                                </li>
                            </ul>
                            <a id="sign-out-button" class="greennature-donate-button greennature-lb-payment">
                                <span class="greennature-button-overlay"></span>
                                <span class="greennature-button-donate-text">Sign Out</span>
                            </a>

                        </nav>
                        <div class="greennature-navigation-gimmick" id="greennature-navigation-gimmick"></div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>               
            </div><br>
    </head>
    <body>
        <div class="content">
            <h1>Historical Carbon Footprint Tracking</h1>
            <!-- Chart container -->
            <canvas id="carbonChart" width="800" height="400"></canvas>
        </div><br>

        <script>
            // Parse JSON data
            var chartData = <?php echo $chartData; ?>;

            // Get chart canvas
            var ctx = document.getElementById('carbonChart').getContext('2d');

            // Create chart
            var carbonChart = new Chart(ctx, {
                type: 'line',
                data: chartData,
                options: {
                    responsive: true,
                    title: {
                        display: true,
                        text: 'Carbon Footprint Over Time'
                    },
                    scales: {
                        xAxes: [{
                            type: 'time',
                            time: {
                                unit: 'day'
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'Date'
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                // Ensure y-axis starts from 0 or the minimum carbon footprint minus 10
                                suggestedMin: Math.max(0, Math.min(...chartData.datasets[0].data) - 10),
                                // Ensure y-axis ends with the maximum carbon footprint plus 10
                                suggestedMax: Math.max(...chartData.datasets[0].data) + 10
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'Carbon Footprint (kg)'
                            }
                        }]
                    },
                    legend: {
                        display: true,
                        position: 'bottom'
                    },
                    elements: {
                        point: {
                            radius: 5, // Increase the size of the data points
                            pointStyle: 'circle' // Change the shape of the data points to a circle
                        }
                    }
                }
            });
        </script>

<footer class="footer-wrapper">
    <div class="footer-container container">
        <div class="footer-column three columns" id="footer-widget-1">
            <div id="text-5" class="widget widget_text greennature-item greennature-widget">
                <div class="textwidget">
                    <p><img src="upload/logo-light.png" style="width: 170px;" alt="" /></p>
                    <p>The best website to help u to calculate ur carbon footprint. save the earth</p>
                </div>
            </div>
        </div>
        <div class="footer-column three columns" id="footer-widget-2">
            <div id="text-9" class="widget widget_text greennature-item greennature-widget">
                <h3 class="greennature-widget-title">Contact Info</h3>
                <div class="clear"></div>
                <div class="textwidget"><span class="clear"></span><span class="greennature-space" style="margin-top: -6px; display: block;"></span> Address: 184 Main Collins Street West Victoria 8007

                    <span class="clear"></span><span class="greennature-space" style="margin-top: 10px; display: block;"></span>

                    <i class="greennature-icon fa fa-phone" style="vertical-align: middle; color: #fff; font-size: 16px; "></i> +123-456789

                    <span class="clear"></span><span class="greennature-space" style="margin-top: 10px; display: block;"></span>

                    <i class="greennature-icon fa fa-mobile" style="vertical-align: middle; color: #fff; font-size: 20px; "></i> +987-654-321

                    <span class="clear"></span><span class="greennature-space" style="margin-top: 10px; display: block;"></span>

                    <i class="greennature-icon fa fa-envelope-o" style="vertical-align: middle; color: #fff; font-size: 16px; "></i> helpunidip224@gmail.com</div>
            </div>
        </div>
        <div class="footer-column three columns" id="footer-widget-3">
            <div id="gdlr-recent-post-widget-5" class="widget widget_gdlr-recent-post-widget greennature-item greennature-widget">
                <h3 class="greennature-widget-title">Recent Posts</h3>
                <div class="clear"></div>
                <div class="greennature-recent-post-widget">
                    <div class="recent-post-widget">
                        <div class="recent-post-widget-thumbnail">
                            <a href="#"><img src="upload/shutterstock_294481373-150x150.jpg" alt="" width="150" height="150" /></a>
                        </div>
                        <div class="recent-post-widget-content">
                            <div class="recent-post-widget-title"><a href="#">How to reduce carbon emittion</a></div>
                            <div class="recent-post-widget-info">
                                <div class="blog-info blog-date greennature-skin-info"><i class="fa fa-clock-o"></i><a href="#">21 Mar 2024</a></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="recent-post-widget">
                        <div class="recent-post-widget-thumbnail">
                            <a href="#"><img src="upload/shutterstock_181393724-150x150.jpg" alt="" width="150" height="150" /></a>
                        </div>
                        <div class="recent-post-widget-content">
                            <div class="recent-post-widget-title"><a href="#">Types of carbon emmition</a></div>
                            <div class="recent-post-widget-info">
                                <div class="blog-info blog-date greennature-skin-info"><i class="fa fa-clock-o"></i><a href="#">21 Mar 2024</a></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="footer-column three columns" id="footer-widget-4">
            <div id="gdlr-recent-portfolio2-widget-6" class="widget widget_gdlr-recent-portfolio2-widget greennature-item greennature-widget">
                <h3 class="greennature-widget-title">Recent Works</h3>
                <div class="clear"></div>
                <div class="greennature-recent-port2-widget">
                    <div class="recent-port-widget-thumbnail">
                        <a href="#"><img src="upload/shutterstock_161515241-150x150.jpg" alt="" width="150" height="150" /></a>
                    </div>
                    <div class="recent-port-widget-thumbnail">
                        <a href="#"><img src="upload/shutterstock_133689230-150x150.jpg" alt="" width="150" height="150" /></a>
                    </div>
                    <div class="recent-port-widget-thumbnail">
                        <a href="#"><img src="upload/shutterstock_53600221-150x150.jpg" alt="" width="150" height="150" /></a>
                    </div>
                    <div class="recent-port-widget-thumbnail">
                        <a href="#"><img src="upload/shutterstock_124871620-150x150.jpg" alt="" width="150" height="150" /></a>
                    </div>
                    <div class="recent-port-widget-thumbnail">
                        <a href="#"><img src="upload/shutterstock_281995004-150x150.jpg" alt="" width="150" height="150" /></a>
                    </div>
                    <div class="recent-port-widget-thumbnail">
                        <a href="#"><img src="upload/shutterstock_256181956-150x150.jpg" alt="" width="150" height="150" /></a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>

    <div class="copyright-wrapper">
        <div class="copyright-container container">
            <div class="copyright-left">
                <a href="#"><i class="greennature-icon fa fa-facebook" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a> <a href="#"><i class="greennature-icon fa fa-twitter" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a> <a href="#"><i class="greennature-icon fa fa-dribbble" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a> <a href="#"><i class="greennature-icon fa fa-pinterest" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a> <a href="#"><i class="greennature-icon fa fa-google-plus" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a> <a href="#"><i class="greennature-icon fa fa-instagram" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a>
            </div>
        </div>
    </div>
</header>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Slick slider script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
    // JavaScript code here
    jQuery(document).ready(function($) {
            // Slick slider initialization
            $('.slider-nav').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                dots: true,
                centerMode: true,
                focusOnSelect: true,
                prevArrow: false,
                nextArrow: false
            });

            // Sign-out button click event
            $('#sign-out-button').on('click', function() {
                // Redirect to loginandsignup.php
                window.location.href = 'loginandsignup.php';
            });
        });
</script>

<script type='text/javascript' src='js/jquery/jquery.js'></script>
<script type='text/javascript' src='js/jquery/jquery-migrate.min.js'></script>
<script type='text/javascript' src='plugins/superfish/js/superfish.js'></script>
<script type='text/javascript' src='js/hoverIntent.min.js'></script>
<script type='text/javascript' src='plugins/dl-menu/modernizr.custom.js'></script>
<script type='text/javascript' src='plugins/dl-menu/jquery.dlmenu.js'></script>
<script type='text/javascript' src='plugins/jquery.easing.js'></script>
<script type='text/javascript' src='plugins/fancybox/jquery.fancybox.pack.js'></script>
<script type='text/javascript' src='plugins/fancybox/helpers/jquery.fancybox-media.js'></script>
<script type='text/javascript' src='plugins/fancybox/helpers/jquery.fancybox-thumbs.js'></script>
<script type='text/javascript' src='plugins/flexslider/jquery.flexslider.js'></script>
<script type='text/javascript' src='plugins/jquery.isotope.min.js'></script>
<script type='text/javascript' src='js/plugins.js'></script>
<script type='text/javascript' src='js/isotope.js'></script>
<script type='text/javascript' src='plugins/jquery.transit.min.js'></script>
<script type='text/javascript' src='plugins/gdlr-portfolio/gdlr-portfolio-script.js'></script>
    </body>
    </html>
    <?php
}

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if user is logged in
if(isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    // Query to retrieve data associated with the logged-in user's email
    $sql = "SELECT total_carbon_footprint, timestamp FROM cal_carbonfootprint3 WHERE email = '$email'";

    // Execute the query
    $result = $conn->query($sql);

    // Check if the query was successful
    if ($result === false) {
        echo "Error: " . $conn->error;
    } else {
        // Check if there are any records
        if ($result->num_rows > 0) {
            // If there are more than a certain number of records, allow user to select a time range
            if ($result->num_rows > 10) { // Change 10 to the desired threshold
                ?>
                <!DOCTYPE html>
                <html>
                <head>
                    <title>History Dashboard</title>
                    <link rel="stylesheet" href="historyDash.css">
                    <style>
                        /* Sidebar styles */
                    .sidebar {
                        width: 250px;
                        position: absolute;
                        top: 30%; /* Adjust this value to set the distance from the top */
                        left: 20px; /* Adjust this value to set the distance from the left */
                        background-color: #f2f2f2;
                        padding-top: 20px;
                        padding-left: 10px;
                        z-index: 1000;
                        overflow-y: auto; /* Allow vertical scrolling if content exceeds sidebar height */
                        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                    }

                    .sidebar h2 {
                        margin-bottom: 20px;
                        font-size: 1.5rem;
                        color: #333;
                    }

                    .range-form label {
                        display: block;
                        margin-bottom: 10px;
                        font-weight: bold;
                        color: #555;
                    }

                    .range-form input[type="date"] {
                        width: calc(100% - 20px);
                        padding: 10px;
                        margin-bottom: 15px;
                        border: 1px solid #ccc;
                        border-radius: 5px;
                        font-size: 1rem;
                    }

                    .range-form input[type="submit"] {
                        background-color: #285586;
                        color: white;
                        padding: 12px 20px;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                        font-size: 1rem;
                    }

                    .range-form input[type="submit"]:hover {
                        background-color: #4e77a3;
                    }

                    .range-form input[type="submit"]:focus {
                        outline: none;
                    }

                    .range-form input[type="submit"]:active {
                        background-color: #4e77a3;
                    }

                    /* Main content styles */
                    .content {
                        margin-left: 300px; /* Adjust this value to set the distance from the left */
                        padding: 20px;
                    }

                        </style>
                </head>
                <body>
                    <div class="sidebar">
                        <h2>Select Time Range</h2>
                        <form class="range-form" action="" method="POST">
                            <label for="start_date">Start Date:</label>
                            <input type="date" id="start_date" name="start_date" required><br>
                            <label for="end_date">End Date:</label>
                            <input type="date" id="end_date" name="end_date" required><br>
                            <input type="submit" name="submit_range" value="Submit">
                        </form>
                    </div>
                </body>
                </html>
                <?php

                // Check if the user has submitted the form to select a time range
                if(isset($_POST['submit_range'])) {
                    $start_date = $_POST['start_date'];
                    $end_date = $_POST['end_date'];

                    // Query to retrieve data within the selected time range, ordered by timestamp
                    $sql = "SELECT total_carbon_footprint, timestamp FROM cal_carbonfootprint3 WHERE email = '$email' AND timestamp BETWEEN '$start_date' AND DATE_ADD('$end_date', INTERVAL 1 DAY) ORDER BY timestamp";

                    // Execute the query
                    $result = $conn->query($sql);

                    // Output the chart
                    renderChart($result);
                }
            } else {
                // If there are fewer records, render the chart directly
                renderChart($result, true); // Set true to show the range form initially
            }
        } else {
            // No records found, display a message box and redirect to the home page
            echo "<script>alert('No historical data available. Please use the app regularly to track your carbon footprint and generate historical data.'); window.location.href = 'home.html';</script>";
        }
    }
}
?>

