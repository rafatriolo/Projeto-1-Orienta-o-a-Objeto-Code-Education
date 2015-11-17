<?php require_once 'class/class_clientes.php' ?>
<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lista de Clientes Projeto 1</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">
	
	<script src="js/jquery.js"></script>

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Lista de Clientes</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Clientes</a>
                    </li>
                    <!-- <li class="page-scroll">
                        <a href="#about">About</a>
                    </li> -->
                    <!-- <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name">Conheça nossos Clientes </span>
                        <hr class="star-light">
                        <span class="skills">Curso de Orientação a Objetos - Code Education</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
		
	<script>
	  jQuery(function($){
			$('#sel1').change(function() {
				$('.enviar').trigger('click');				
			});  
		});	
	</script>
    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                    <hr class="star-primary">
					<div class="form-group" style="max-width:160px; float:right;">
						<form method="post" action="">
							<label for="sel1">Ordernar</label>
							<select class="form-control" id="sel1" name="color">
								<option value="">Selecione</option>
								<option value="Ascendente" class="ascendente">Ascendente</option>
								<option value="Descendente" class="descendente">Descendente</option>
							</select>
							<input class="enviar" type="submit" name="submit" value="Filtrar" style="display:none;"/>
						</form>
					</div>
                </div>
            </div>

	          <div class="row">	

			  	<?php
					if (isset($_POST['submit'])){
						$selecionado = $_POST['color'];
					}
					$tamanho1 = count($clientes);
					if($selecionado == 'Ascendente'):
					
					for ($i=0; $i < $tamanho1; $i++){
				?>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal<?php echo $i;?>" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/<?php echo $i?>.png" class="img-responsive" alt="">
                    </a>
                </div>
					<?php } else:
					for ($i=$tamanho1; $i >= 0; $i--){
					?>	
				<div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal<?php echo $i;?>" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/<?php echo $i?>.png" class="img-responsive" alt="">
                    </a>
                </div>
					<?php } endif; ?>
			</div>			
    </section>

    <!-- Footer -->
    <footer class="text-center">
 
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Rafael Triolo <?php echo date('Y')?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
	<?php 
	if (isset($_POST['submit'])){
		$selecionado = $_POST['color'];
		}
		if($selecionado == 'Ascendente'):
		$tamanho = count($clientes);
		for($i=0; $i < $tamanho; $i++){
	?>
    <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $i ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2><?php echo $clientes[$i]->getNome();?></h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/<?php echo $i ?>.png" class="img-responsive img-centered" alt="">
                            <p>Informações do Cliente:</p>
                              <ul class = "list-group">
								<li class = "list-group-item">Endereço: <?php echo $clientes[$i]->getEndereco();?> </li>
								<li class = "list-group-item">CPF: <?php echo $clientes[$i]->getCpf();?> </li>							  
							  </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
		<?php } else:
		$tamanho = count($clientes);
		for($i=0; $i < $tamanho; $i++){ 
			arsort($clientes);
		?> 
	<div class="portfolio-modal modal fade" id="portfolioModal<?php echo $i ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2><?php echo $clientes[$i]->getNome();?></h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/<?php echo $i ?>.png" class="img-responsive img-centered" alt="">
                            <p>Informações do Cliente:</p>
                              <ul class = "list-group">
								<li class = "list-group-item">Endereço: <?php echo $clientes[$i]->getEndereco();?> </li>
								<li class = "list-group-item">CPF: <?php echo $clientes[$i]->getCpf();?> </li>							  
							  </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
		<?php } endif; ?>
    <!-- jQuery -->
 

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <!--<script src="js/contact_me.js"></script> -->
    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>
    

</body>

</html>
