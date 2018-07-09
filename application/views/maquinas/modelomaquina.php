
<div class="container-fluid">
	

		<?php if ($maquina->ID_TIPO == 1 || $maquina->ID_TIPO == 2 || $maquina->ID_TIPO == 3 ){ ?>
			<div class="container-fluid">
				<div class="col-md-5">
					<div class="clearfix hidden-xs hidden-sm">
						<div class="col-md-7">
								<h1><?php echo $this->session->userdata('modelo'); ?></h1>
								<h2><?php echo $maquina->TIPO; ?></h2>
						</div>
						<div class="col-md-4">
							<?php if ($maquina->MARCA == 'JLG'): ?>
								<img width="160%" src="<?php echo base_url()."assets/"; ?>slider/img/jlg.png" alt="">
							<?php endif ?>
							<?php if ($maquina->MARCA == 'Genie'): ?>
								<img width="160%" src="<?php echo base_url()."assets/"; ?>slider/img/genie.png" alt="">
							<?php endif ?>
							
						</div>
					</div>
					<div class="contentTopLeftKeyBlockSpecs topShadowLight">
						<div class="clearfix">
						 	<h4 class="pull-left">Especificaciones principales</h4>
						 	<div class="pull-right visible-md visible-lg">
                                    <a id="aAllSpecsLarge" href="#myTab" class="scroll" data-tabcontrol="overview">VER TODAS LAS ESPECIFICACIONES</a>
                            </div>
						</div>
						<div class="contentTopLeftKey">
							<ul>
								<li><i class="fa fa-check"> </i><strong> Altura de Trabajo: </strong><span><?php echo $maquina->ALTURA_TRABAJO; ?> Metros</span></li>
								<li><i class="fa fa-check"></i><strong> Energía: </strong><span><?php echo $maquina->ENERGIA; ?></span></li>
								<li><i class="fa fa-check"></i><strong> Capacidad: </strong><span><?php echo $maquina->CAPACIDAD; ?></span> Kilógramos</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="container">
				        <div id="main_area">
				                <!-- Slider -->
				                <div class="row">
				                    <div id="slider">
				                        <!-- Top part of the slider -->
				                        <div class="row">
				                            <div class="col-sm-7" id="carousel-bounding-box">
				                                <div class="carousel slide" id="myCarousel">
				                                    <!-- Carousel items -->
				                                    <div class="carousel-inner">
				                                        <div class="active item" data-slide-number="0">
				                                        <img width="30%" class="center-block" src="<?php echo base_url()."imagenes/"; ?>max/<?php echo $maquina->FOTOMAX ?>"></div>

				                                        <div class="item" data-slide-number="1">
				                                        <img src="http://placehold.it/770x300&text=two"></div>

				                                        <div class="item" data-slide-number="2">
				                                        <img src="http://placehold.it/770x300&text=three"></div>

				                                        <div class="item" data-slide-number="3">
				                                        <img src="http://placehold.it/770x300&text=four"></div>

				                                        <div class="item" data-slide-number="4">
				                                        <img src="http://placehold.it/770x300&text=five"></div>

				                                        <div class="item" data-slide-number="5">
				                                        <img src="http://placehold.it/770x300&text=six"></div>
				                                    </div><!-- Carousel nav -->
				                                    <div class="left">
					                                    <a class="carousel-control" href="#myCarousel" role="button" data-slide="prev">
					                                        <span class="glyphicon glyphicon-chevron-left"></span>                                       
					                                    </a>
				                                    </div>
				                                    <div class="right">
					                                    <a class=" carousel-control" href="#myCarousel" role="button" data-slide="next">
					                                        <span class="glyphicon glyphicon-chevron-right"></span>                                       
					                                    </a>                                
				                                    </div>                                
			                                    </div>
				                            </div>

				                            <div class="col-sm-4" id="carousel-text"></div>
				                        </div>
				                    </div>
				                </div><!--/Slider-->

				                <div class="row hidden-xs col-md-7 center-block" id="slider-thumbs">
				                        <!-- Bottom switcher of slider -->
				                        <ul class="hide-bullets">
				                            <li class="col-sm-2">
				                                <a class="thumbnail" id="carousel-selector-0"><img src="http://placehold.it/170x100&text=one"></a>
				                            </li>

				                            <li class="col-sm-2">
				                                <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/170x100&text=two"></a>
				                            </li>

				                            <li class="col-sm-2">
				                                <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/170x100&text=three"></a>
				                            </li>

				                            <li class="col-sm-2">
				                                <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/170x100&text=four"></a>
				                            </li>

				                            <li class="col-sm-2">
				                                <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/170x100&text=five"></a>
				                            </li>

				                            <li class="col-sm-2">
				                                <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/170x100&text=six"></a>
				                            </li>
				                        </ul>                 
				                </div>
				        </div>
					</div>
				</div>
			</div>

			<div class="">
				<div id="dvTabContainer">
					<ul class="nav nav-tabs" id="myTab">
						<li class="active"><a href="#overview">
							Generalidades

							</a></li>
					</ul>
				</div>
				<div class="containerCollapse">
					<div>
						<div class="row">
							<div class="col-md-12">
								<p>
								  <button class="btn btn-success btn-block" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
								    Especificaciones
								  </button>
								</p>
								<div class="collapse" id="collapseExample">
								  <div class="card card-body">
								  	<table class="table table-striped">
										<tr>
											<th>Tipo</th>
											<td><?php echo $maquina->TIPO; ?></td>
										</tr>
										<tr>
											<th>Marca</th>
											<td><?php echo $maquina->MARCA; ?></td>
										</tr>
										<tr>
											<th>Modelo</th>
											<td><?php echo $maquina->MODELO; ?></td>
										</tr>
										<tr>
											<th>Energia</th>
											<td><?php echo $maquina->ENERGIA; ?></td>
										</tr>
										<tr>
											<th>Altura de trabajo</th>
											<td><?php echo $maquina->ALTURA_TRABAJO; ?> Metros</td>
										</tr>
										<tr>
											<th>Altura de plataforma</th>
											<td><?php echo $maquina->ALTURA_PLATAFORMA; ?> Metros</td>
										</tr>
										<tr>
											<th>Alto de baranda</th>
											<td><?php echo $maquina->ALTO_BARANDA; ?> Metros</td>
										</tr>
										<tr>
											<th>Largo replegado</th>
											<td><?php echo $maquina->LARGO_REPLEGADA; ?> Metros</td>
										</tr>
										<tr>
											<th>Largo plataforma</th>
											<td><?php echo $maquina->LARGO_PLATAFORMA; ?> Metros</td>
										</tr>
										<tr>
											<th>Ancho plataforma</th>
											<td><?php echo $maquina->ANCHO_PLATAFORMA; ?> Metros</td>
										</tr>
										<tr>
											<th>Peso plataforma</th>
											<td><?php echo $maquina->PESO; ?> Kilógramos</td>
										</tr>
										<tr>
											<th>Capacidad</th>
											<td><?php echo $maquina->CAPACIDAD; ?> Kilógramos</td>
										</tr>
									</table>
								    
								  </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } elseif ($maquina->ID_TIPO == 4) { ?>
			<div class="container-fluid">
				<div class="col-md-5">
					<div class="clearfix hidden-xs hidden-sm">
						<div class="col-md-7">
								<h1><?php echo $this->session->userdata('modelo'); ?></h1>
								<h2><?php echo $maquina->TIPO; ?></h2>
						</div>
						<div class="col-md-4">
							<?php if ($maquina->MARCA == 'JLG'): ?>
								<img width="160%" src="<?php echo base_url()."assets/"; ?>slider/img/jlg.png" alt="">
							<?php endif ?>
							<?php if ($maquina->MARCA == 'Genie'): ?>
								<img width="160%" src="<?php echo base_url()."assets/"; ?>slider/img/genie.png" alt="">
							<?php endif ?>
						</div>
					</div>
					<div class="contentTopLeftKeyBlockSpecs topShadowLight">
						<div class="clearfix">
						 	<h4 class="pull-left">Especificaciones principales</h4>
						 	<div class="pull-right visible-md visible-lg">
                                    <a id="aAllSpecsLarge" href="#myTab" class="scroll" data-tabcontrol="overview">VER TODAS LAS ESPECIFICACIONES</a>
                            </div>
						</div>
						<div class="contentTopLeftKey">
							<ul>
								<li><i class="fa fa-check"> </i><strong> Capacidad de carga: </strong><span><?php echo $maquina->CARGA_MAXIMA; ?></span> Kilógramos</li>
								<li><i class="fa fa-check"></i><strong> Carga con brazo extendido: </strong><span><?php echo $maquina->ALCANCE_MAXIMO; ?></span> Kilógramos</li>
								<li><i class="fa fa-check"></i><strong> Altura Máxima: </strong><span><?php echo $maquina->ALTURA_LEVANTAMIENTO; ?></span> Metros</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="container">
				        <div id="main_area">
				                <!-- Slider -->
				                <div class="row">
				                    <div id="slider">
				                        <!-- Top part of the slider -->
				                        <div class="row">
				                            <div class="col-sm-7" id="carousel-bounding-box">
				                                <div class="carousel slide" id="myCarousel">
				                                    <!-- Carousel items -->
				                                    <div class="carousel-inner">
				                                        <div class="active item" data-slide-number="0">
				                                        <img width="30%" class="center-block" src="<?php echo base_url()."imagenes/"; ?>max/<?php echo $maquina->FOTOMAX ?>"></div>

				                                        <div class="item" data-slide-number="1">
				                                        <img src="http://placehold.it/770x300&text=two"></div>

				                                        <div class="item" data-slide-number="2">
				                                        <img src="http://placehold.it/770x300&text=three"></div>

				                                        <div class="item" data-slide-number="3">
				                                        <img src="http://placehold.it/770x300&text=four"></div>

				                                        <div class="item" data-slide-number="4">
				                                        <img src="http://placehold.it/770x300&text=five"></div>

				                                        <div class="item" data-slide-number="5">
				                                        <img src="http://placehold.it/770x300&text=six"></div>
				                                    </div><!-- Carousel nav -->
				                                    <div class="left">
					                                    <a class="carousel-control" href="#myCarousel" role="button" data-slide="prev">
					                                        <span class="glyphicon glyphicon-chevron-left"></span>                                       
					                                    </a>
				                                    </div>
				                                    <div class="right">
					                                    <a class=" carousel-control" href="#myCarousel" role="button" data-slide="next">
					                                        <span class="glyphicon glyphicon-chevron-right"></span>                                       
					                                    </a>                                
				                                    </div>
			                                    </div>
				                            </div>

				                            <div class="col-sm-4" id="carousel-text"></div>
				                        </div>
				                    </div>
				                </div><!--/Slider-->

				                <div class="row hidden-xs col-md-7 center-block" id="slider-thumbs">
				                        <!-- Bottom switcher of slider -->
				                        <ul class="hide-bullets">
				                            <li class="col-sm-2">
				                                <a class="thumbnail" id="carousel-selector-0"><img src="http://placehold.it/170x100&text=one"></a>
				                            </li>

				                            <li class="col-sm-2">
				                                <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/170x100&text=two"></a>
				                            </li>

				                            <li class="col-sm-2">
				                                <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/170x100&text=three"></a>
				                            </li>

				                            <li class="col-sm-2">
				                                <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/170x100&text=four"></a>
				                            </li>

				                            <li class="col-sm-2">
				                                <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/170x100&text=five"></a>
				                            </li>

				                            <li class="col-sm-2">
				                                <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/170x100&text=six"></a>
				                            </li>
				                        </ul>                 
				                </div>
				        </div>
					</div>
				</div>
			</div>
			<div class="">
				<div id="dvTabContainer">
					<ul class="nav nav-tabs" id="myTab">
						<li class="active"><a href="#overview">
							Generalidades

							</a></li>
					</ul>
				</div>
				<div class="containerCollapse">
					<div>
						<div class="row">
							<div class="col-md-12">
								<p>
								  <button class="btn btn-success btn-block" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
								    Especificaciones
								  </button>
								</p>
								<div class="collapse" id="collapseExample">
								  <div class="card card-body">
								  	<table class="table table-striped">
										<tr>
											<th>Tipo</th>
											<td><?php echo $maquina->TIPO; ?></td>
										</tr>
										<tr>
											<th>Marca</th>
											<td><?php echo $maquina->MARCA; ?></td>
										</tr>
										<tr>
											<th>Modelo</th>
											<td><?php echo $maquina->MODELO; ?></td>
										</tr>
										<tr>
											<th>Energia</th>
											<td><?php echo $maquina->ENERGIA; ?></td>
										</tr>
										<tr>
											<th>Carga Máxima</th>
											<td><?php echo $maquina->CARGA_MAXIMA; ?> Kilógramos</td>
										</tr>
										<tr>
											<th>Carga con brazo extendido</th>
											<td><?php echo $maquina->ALCANCE_MAXIMO; ?> Kilógramos</td>
										</tr>
										<tr>
											<th>Altura de levantamiento</th>
											<td><?php echo $maquina->ALTURA_LEVANTAMIENTO; ?> Metros</td>
										</tr>
										<tr>
											<th>Largo de brazo extendido</th>
											<td><?php echo $maquina->BRAZO_EXTENDIDO; ?> Metros</td>
										</tr>
										<tr>
											<th>Peso máquinaria</th>
											<td><?php echo $maquina->PESO; ?> Kilógramos</td>
										</tr>
										
									</table>
								    
								  </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } else { ?>
			<div class="container-fluid">
				<div class="col-md-5">
					<div class="clearfix hidden-xs hidden-sm">
						<div class="col-md-7">
								<h1><?php echo $this->session->userdata('modelo'); ?></h1>
								<h2><?php echo $maquina->TIPO; ?></h2>
						</div>
						<div class="col-md-4">
							<?php if ($maquina->MARCA == 'JLG'): ?>
								<img width="160%" src="<?php echo base_url()."assets/"; ?>slider/img/jlg.png" alt="">
							<?php endif ?>
							<?php if ($maquina->MARCA == 'Genie'): ?>
								<img width="160%" src="<?php echo base_url()."assets/"; ?>slider/img/genie.png" alt="">
							<?php endif ?>
							<?php if ($maquina->MARCA == 'Terex'): ?>
								<img width="160%" src="<?php echo base_url()."assets/"; ?>slider/img/Terex-logo.png" alt="">
							<?php endif ?>
						</div>
					</div>
					<div class="contentTopLeftKeyBlockSpecs topShadowLight">
						<div class="clearfix">
						 	<h4 class="pull-left">Especificaciones principales</h4>
						 	<div class="pull-right visible-md visible-lg">
                                    <a id="aAllSpecsLarge" href="#myTab" class="scroll" data-tabcontrol="overview">VER TODAS LAS ESPECIFICACIONES</a>
                            </div>
						</div>
						<div class="contentTopLeftKey">
							<ul>
								<li><i class="fa fa-check"> </i><strong> Altura: </strong><span><?php echo $maquina->ALTURA; ?></span> Metros</li>
								<li><i class="fa fa-check"></i><strong> : </strong><span><?php echo $maquina->ALCANCE_MAXIMO; ?></span> Kilógramos</li>
								<li><i class="fa fa-check"></i><strong> Altura Máxima: </strong><span><?php echo $maquina->ALTURA_LEVANTAMIENTO; ?></span> Metros</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="container">
				        <div id="main_area">
				                <!-- Slider -->
				                <div class="row">
				                    <div id="slider">
				                        <!-- Top part of the slider -->
				                        <div class="row">
				                            <div class="col-sm-7" id="carousel-bounding-box">
				                                <div class="carousel slide" id="myCarousel">
				                                    <!-- Carousel items -->
				                                    <div class="carousel-inner">
				                                        <div class="active item" data-slide-number="0">
				                                        <img width="30%" class="center-block" src="<?php echo base_url()."imagenes/"; ?>max/<?php echo $maquina->FOTOMAX ?>"></div>

				                                        <div class="item" data-slide-number="1">
				                                        <img src="http://placehold.it/770x300&text=two"></div>

				                                        <div class="item" data-slide-number="2">
				                                        <img src="http://placehold.it/770x300&text=three"></div>

				                                        <div class="item" data-slide-number="3">
				                                        <img src="http://placehold.it/770x300&text=four"></div>

				                                        <div class="item" data-slide-number="4">
				                                        <img src="http://placehold.it/770x300&text=five"></div>

				                                        <div class="item" data-slide-number="5">
				                                        <img src="http://placehold.it/770x300&text=six"></div>
				                                    </div><!-- Carousel nav -->
				                                    <div class="left">
					                                    <a class="carousel-control" href="#myCarousel" role="button" data-slide="prev">
					                                        <span class="glyphicon glyphicon-chevron-left"></span>                                       
					                                    </a>
				                                    </div>
				                                    <div class="right">
					                                    <a class=" carousel-control" href="#myCarousel" role="button" data-slide="next">
					                                        <span class="glyphicon glyphicon-chevron-right"></span>                                       
					                                    </a>                                
				                                    </div>                                
			                                    </div>
				                            </div>

				                            <div class="col-sm-4" id="carousel-text"></div>
				                        </div>
				                    </div>
				                </div><!--/Slider-->

				                <div class="row hidden-xs col-md-7 center-block" id="slider-thumbs">
				                        <!-- Bottom switcher of slider -->
				                        <ul class="hide-bullets">
				                            <li class="col-sm-2">
				                                <a class="thumbnail" id="carousel-selector-0"><img src="http://placehold.it/170x100&text=one"></a>
				                            </li>

				                            <li class="col-sm-2">
				                                <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/170x100&text=two"></a>
				                            </li>

				                            <li class="col-sm-2">
				                                <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/170x100&text=three"></a>
				                            </li>

				                            <li class="col-sm-2">
				                                <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/170x100&text=four"></a>
				                            </li>

				                            <li class="col-sm-2">
				                                <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/170x100&text=five"></a>
				                            </li>

				                            <li class="col-sm-2">
				                                <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/170x100&text=six"></a>
				                            </li>
				                        </ul>                 
				                </div>
				        </div>
					</div>
				</div>
			</div>
			<div class="">
				<div id="dvTabContainer">
					<ul class="nav nav-tabs" id="myTab">
						<li class="active"><a href="#overview">
							Generalidades

							</a></li>
					</ul>
				</div>
				<div class="containerCollapse">
					<div>
						<div class="row">
							<div class="col-md-12">
								<p>
								  <button class="btn btn-success btn-block" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
								    Especificaciones
								  </button>
								</p>
								<div class="collapse" id="collapseExample">
								  <div class="card card-body">
								  	<table class="table table-striped">
										<tr>
											<th>Tipo</th>
											<td><?php echo $maquina->TIPO; ?></td>
										</tr>
										<tr>
											<th>Marca</th>
											<td><?php echo $maquina->MARCA; ?></td>
										</tr>
										<tr>
											<th>Modelo</th>
											<td><?php echo $maquina->MODELO; ?></td>
										</tr>
										<tr>
											<th>Energia</th>
											<td><?php echo $maquina->ENERGIA; ?></td>
										</tr>
										<tr>
											<th>Altura</th>
											<td><?php echo $maquina->ALTURA; ?> Metros</td>
										</tr>
										<tr>
											<th>Ancho de replegado</th>
											<td><?php echo $maquina->ANCHO_REPLEGADO; ?> Metros</td>
										</tr>
										<tr>
											<th>Ancho extendido</th>
											<td><?php echo $maquina->ANCHO_EXTENDIDO; ?> Metros</td>
										</tr>
										<tr>
											<th>Torre replegada</th>
											<td><?php echo $maquina->TORRE_REPLEGADA; ?> Metros</td>
										</tr>
										<tr>
											<th>Largo de brazo extendido</th>
											<td><?php echo $maquina->TOMA_CORRIENTE; ?> Metros</td>
										</tr>
										<tr>
											<th>Largo de brazo extendido</th>
											<td><?php echo $maquina->LAMPARA_HALOGENA; ?> Metros</td>
										</tr>
										<tr>
											<th>Largo de brazo extendido</th>
											<td><?php echo $maquina->GENERADOR; ?> Metros</td>
										</tr>
										<tr>
											<th>Peso máquinaria</th>
											<td><?php echo $maquina->PESO; ?> Kilógramos</td>
										</tr>
										
									</table>
								    
								  </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>

</div>

<script>
	  jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
       $('[id^=carousel-selector-]').click( function(){
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);
            $('#myCarousel').carousel(id);
        });
 
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
</script>