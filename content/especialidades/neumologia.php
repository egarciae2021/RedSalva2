<section class="fondo-azul content-space-3  d-block d-md-none">
	<div class="container pt-3 mb-n5">
		<div class="row">
			<div class="col-12 mt-2">
				<h1 class="h4 color-naranja"><?php echo $h1;?></h1>
			</div>
			<div class="mb-0">
				<a class="link color-white color-naranja-hover" href="/"><i class="fa fa-arrow-left small me-1"></i> Inicio</a>
				<a class="link color-white color-naranja-hover ms-3" href="/especialidades"><i class="fa fa-arrow-left small me-1"></i> Especialidades</a>
			</div>
		</div>
	</div>
</section>
<img src="<?php echo $page_image;?>" class="img-fluid mt-n5 d-block d-md-none" alt="<?php echo $h1;?>">
<section class="fondo-azul content-space-3 d-none d-md-block">
	<div class="container pt-3 mb-n5">
		<div class="row position-relative">
			<div class="position-md-absolute top-0 col-md-7 offset-md-5 h-100">
				<div class="bg-img-center card-img">
					<img class="img-fluid rounded-3" src="<?php echo $page_image;?>" alt="<?php echo $h1;?>">
				</div>
			</div>
			<div class="col-10 col-md-7 col-lg-6 offset-1 offset-md-0 content-space-md-1">
				<div class="position-relative fondo-celeste-bajo rounded-3 zi-1 p-6 mt-5 mb-5 pe-6  shadow-sm">
					<div class="mb-2 mt-5">
						<h1 class="h4 color-azul"><?php echo $h1;?></h1>
					</div>
					<div class="mb-5">
						<a class="link color-azul color-naranja-hover" href="/"><i class="fa fa-arrow-left small me-1"></i> Inicio</a>
						<a class="link color-azul color-naranja-hover ms-3" href="/especialidades"><i class="fa fa-arrow-left small me-1"></i> Especialidades</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-lg-1">
				<p>La neumología es la especialidad médica dedicada al diagnóstico y tratamiento de las enfermedades del aparato respiratorio. Esta área abarca una amplia variedad de condiciones, desde enfermedades crónicas como el asma y la enfermedad pulmonar obstructiva crónica (EPOC), hasta infecciones respiratorias como la neumonía y la tuberculosis. Además, los neumólogos también tratan problemas relacionados con el sueño, como el síndrome de apnea-hipopnea durante el sueño (SAHS), y condiciones más graves como el cáncer de pulmón.</p>
				<p>En la Clínica Montesur, ofrecemos un enfoque integral y personalizado para el cuidado de la salud respiratoria. Nuestro equipo de neumólogos altamente capacitados utiliza tecnología de última generación para realizar diagnósticos precisos y proporcionar tratamientos efectivos. Nos especializamos en el manejo de enfermedades respiratorias crónicas, proporcionando planes de tratamiento individualizados que incluyen medicamentos, terapia respiratoria y seguimiento continuo. También contamos con programas de detección temprana para el cáncer de pulmón, utilizando técnicas avanzadas para identificar la enfermedad en sus etapas iniciales.</p>
				<p>Nos comprometemos a mejorar la calidad de vida de nuestros pacientes a través de una atención comprensiva y compasiva. Desde el manejo del asma y el EPOC hasta el tratamiento de infecciones pulmonares y trastornos del sueño, en la Clínica Montesur estamos dedicados a proporcionar un cuidado respiratorio de excelencia, asegurando que nuestros pacientes reciban la mejor atención posible en cada etapa de su tratamiento.</p>
				<?php require_once('links-neumologia.php');?>
			</div>
		</div>
	</div>
</section>
<?php require_once('formulario.php');?>