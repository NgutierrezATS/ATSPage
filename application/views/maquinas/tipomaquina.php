<div class="container-fluid">
	<h2 class="text-center">Resultados que coinciden con el tipo de máquina "<?php echo $tipo->TIPO; ?>"</h2>
	<br><br><br>
	<?php foreach ($maquinas as $key): ?> 
		<?php if ($key->ID_TIPO == 1 || $key->ID_TIPO == 2 || $key->ID_TIPO == 3 ){ ?>
			<form method="POST" accept-charset="utf-8" action="<?php echo site_url(); ?>/maquinas/modelo">
				<input id="form" type="hidden" name="modelo" id="modelo" value="<?php echo $key->MODELO ?>|<?php echo $key->ID_TIPO ?>">
				<div class="col-md-4">
					<button type="submit" class="btn" style="background-color: transparent;">
						<div class="thumbnail text-center">
							<img height="25%" width="25%" src="<?php echo base_url()."imagenes/min/$key->FOTOMIN"; ?>" alt="">
							<div class="caption">
								<h2><?php echo $key->MARCA; ?> - <?php echo $key->MODELO; ?></h2>
								<table class="table table-striped">
									<tr>
										<th class="text-center">Energía</th>
										<th class="text-center">Altura de trabajo</th>
									</tr>
									<tr>
										<td><?php echo $key->ENERGIA; ?></td>
										<td><?php echo $key->ALTURA_TRABAJO; ?> Metros</td>
									</tr>
								</table>
							</div>
						</div>
					</button>
				</div>
			</form>
		<?php } elseif ($key->ID_TIPO == 4) { ?>
			<form method="POST" accept-charset="utf-8" action="<?php echo site_url(); ?>/maquinas/modelo">
				<input id="form" type="hidden" name="modelo" id="modelo" value="<?php echo $key->MODELO ?>|<?php echo $key->ID_TIPO ?>">
				<div class="col-md-4">
					<button type="submit" class="btn" style="background-color: transparent;">
						<div class="thumbnail text-center">
							<img height="25%" width="25%" src="<?php echo base_url()."imagenes/min/$key->FOTOMIN"; ?>" alt="">
							<div class="caption">
								<h2><?php echo $key->MARCA; ?> - <?php echo $key->MODELO; ?></h2>
								<table class="table table-striped table-bordered table-hover bg-success">
									<tr>
										<th class="text-center">Altura de levantamiento</th>
										<th class="text-center">Capacidad Máxima</th>
									</tr>
									<tr>
										<td><?php echo $key->ALTURA_LEVANTAMIENTO; ?> Metros</td>
										<td><?php echo $key->CARGA_MAXIMA; ?> Kilógramos</td>
									</tr>
								</table>
							</div>
						</div>
					</button>
				</div>
			</form>
		<?php } else { ?>
			<form method="POST" accept-charset="utf-8" action="<?php echo site_url(); ?>/maquinas/modelo">
				<input id="form" type="hidden" name="modelo" id="modelo" value="<?php echo $key->MODELO ?>|<?php echo $key->ID_TIPO ?>">
				<div class="col-md-4">
					<button type="submit" class="btn" style="background-color: transparent;">
						<div class="thumbnail text-center">
							<img height="25%" width="25%" src="<?php echo base_url()."imagenes/min/$key->FOTOMIN"; ?>" alt="">
							<div class="caption">
								<h2><?php echo $key->MARCA; ?> - <?php echo $key->MODELO; ?></h2>
								<table class="table table-striped table-bordered table-hover bg-success">
									<tr>
										<th class="text-center">Altura</th>
										<th class="text-center">Generador</th>
									</tr>
									<tr>
										<td><?php echo $key->ALTURA; ?> Metros</td>
										<td><?php echo $key->GENERADOR; ?> Hz</td>
									</tr>
								</table>
							</div>
						</div>
					</button>
				</div>
			</form>
		<?php } ?>
	<?php endforeach ?>
</div>