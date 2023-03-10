
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Title -->
    <title>Neptune - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="assets/plugins/pace/pace.css" rel="stylesheet">
    <link href="assets/plugins/datatables/datatables.min.css" rel="stylesheet">
    <link href="assets/plugins/highlight/styles/github-gist.css" rel="stylesheet">
    
    <!-- Theme Styles -->
    <link href="assets/css/main.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/neptune.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="app align-content-stretch d-flex flex-wrap">

        <!-- APP SIDEBAR -->

        <?php 
            include 'connection/conn.php'; 
            include 'templates/sidebar.php'; 
        ?>

        <!-- APP CONTAINER -->

        <div class="app-container">

            <!-- APP SEARCH -->

            <div class="search">
                <form>
                    <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>

            <!-- APP HEADER -->

            <?php include 'templates/header.php'; ?>

            <!-- APP CONTENT -->
            
            <?php 
            // Define your location project directory in htdocs (EX THE FULL PATH: D:\xampp\htdocs\x-kang\simple-routing-with-php)
            //  misal mau nambah param di halaman about (bisa pake GET aja).

            // Bentuk url nya kyk gini :
            // localhost/PROJECT_DIR/about?param1=hari rabu&param2=003

            // Cara ngambil data paramya tinggal gini aja:
            // $p1 = $_GET['param1'];
            // $p2 = $_GET['param2'];

            // echo $p1 . ' ' . $p2;
                $project_location = "/MedRec";
                $me = $project_location;

                // For get URL PATH
                $request = $_SERVER['REQUEST_URI'];

                switch ($request) {
                    case $me.'/' :
                        require "pages/home.php";
                        break;
                    case $me.'/home' :
                        require "pages/home.php";
                        break;
                    case $me.'/datapasien' :
                        require "pages/datapasien.php";
                        break;
                    case $me.'/contact' :
                        require "pages/tables-basic.php";
                        break;
                    default:
                        require "pages/error.php";
                        break;
                }
                // include 'templates/home.php'; 
            
            ?>
            
            <!-- END SECTION -->

        </div>
    </div>
    
    <!-- Javascripts -->
    <script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="assets/plugins/highlight/highlight.pack.js"></script>
    <script src="assets/plugins/pace/pace.min.js"></script>
    <script src="assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/main.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
    <script src="assets/plugins/datatables/datatables.min.js"></script>
    <script src="assets/js/pages/datatables.js"></script>

    
</body>
</html>