
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url("bower_components/bootstrap/dist/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("bower_components/bootstrap/dist/css/bootstrap-theme.min.css"); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url("bower_components/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url("bower_components/magnific-popup/dist/magnific-popup.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("bower_components/datatables.net-dt/css/jquery.dataTables.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("bower_components/datatables.net-buttons-dt/css/buttons.dataTables.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("bower_components/animate.css/animate.min.css"); ?>" rel="stylesheet">

    <!-- Theme CSS -->
    <!-- link href="css/creative.min.css" rel="stylesheet" -->
<link href="css/style.css" rel="stylesheet">

<!-- Custom CSS -->
    <link href="<?php echo base_url("assets/css/simple-sidebar.css"); ?>" rel="stylesheet">


<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                <a href="#menu-toggle"><span class="glyphicon glyphicon-menu-hamburger">   </span>FlockFuster</a>
                </li>
                <li>
                    <a href="#" onclick="location.href='<?php echo base_url("index.php/catalogo");?>'">Catálogo de Peliculas</a>
                </li>
                <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

    <div id="page-content-wrapper">    
    <section id="contact">
        <div class="container">
            <div class="row">
              <h2 style="margin-top: 80px;">Catálogo de Películas</h2>
              <hr class="primary">
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <table id="peliculas"></table>
              </div>
            </div>
        </div>
    </section>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

<!-- jQuery -->
    <script src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>

     <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo base_url("bower_components/scrollreveal/dist/scrollreveal.min.js"); ?>"></script>
    <script src="<?php echo base_url("bower_components/magnific-popup/dist/jquery.magnific-popup.min.js"); ?>"></script>
    <script src="<?php echo base_url("bower_components/datatables.net/js/jquery.dataTables.min.js"); ?>"></script>
    <script src="<?php echo base_url("bower_components/bootbox.js/bootbox.js"); ?>"></script>
    <script src="<?php echo base_url("bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"); ?>"></script>
    <script src="<?php echo base_url("bower_components/noty/js/noty/packaged/jquery.noty.packaged.min.js"); ?>"></script>
    <script src="<?php echo base_url("bower_components/noty/js/noty/themes/default.js"); ?>"></script>

 <script src="<?php echo base_url("assets/js/codes.js"); ?>"></script>
 <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    </script>
    </body>