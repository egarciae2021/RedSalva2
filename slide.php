<style>
.swiper-slide {
    background-size: cover;
    background-position: center;
    background-color: #f0f0f0; /* Placeholder color */
}

.lazyload {
    background-image: none; /* Sin fondo inicialmente */
}

.lazyloaded {
    transition: background-image 0.3s ease-in-out; /* Transición suave */
}

</style>

<div class="position-relative">
	<div class="js-swiper-blog-modern-hero swiper swiper-equal-height">
		<div class="swiper-wrapper">
			            <?php
            // Consulta del último artículo del blog
            $latest_post = new WP_Query([
                'post_type'      => 'post',
                'posts_per_page' => 1,
                'orderby'        => 'date',
                'order'          => 'DESC',
            ]);

            if ($latest_post->have_posts()) :
                while ($latest_post->have_posts()) : $latest_post->the_post();
                    $latest_title = get_the_title();
                    $latest_excerpt = wp_trim_words(get_the_excerpt(), 20, '...');
                    $latest_image = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: '/images/placeholder.webp';
                    $latest_link = get_permalink();
                    ?>
                    <div class="swiper-slide lazyload bg-img-start content-space-4 content-space-t-lg-3 content-space-t-sm-4 content-space-b-sm-4" data-bg="<?php echo esc_url($latest_image); ?>">
                        <div class="container content-space-b-sm-2 content-space-t-sm-2">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mb-5">
                                        <h1 class="text-primary"><?php echo esc_html($latest_title); ?></h1>
                                    </div>
                                    <a class="btn btn-naranja d-md-block d-none d-lg-inline-block" href="<?php echo esc_url($latest_link); ?>">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
			<div class="swiper-slide lazyload bg-img-start content-space-4 content-space-t-lg-3 content-space-t-sm-4 content-space-b-sm-4" data-bg="/images/slide-001.webp">
				<div class="container content-space-b-sm-2 content-space-t-sm-2">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-5">
								<h1 class="text-primary">20 años atendiendo<br>a las familias<br>del Perú y el mundo.</h1>
							</div>
									
							<a class="btn btn-naranja d-md-block d-none d-lg-inline-block" href="/nosotros">Conócenos</a>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-slide lazyload bg-img-start content-space-4 content-space-t-lg-3 content-space-t-sm-4 content-space-b-sm-4" data-bg="/images/slide-002.webp">
				<div class="container content-space-b-sm-2 content-space-t-sm-2">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-5">
								<h1 class="text-primary">Conoce nuestro<br>programa especializado:<br>Dulce Espera</h1>
								<p>
							</div>
									
							<a class="btn btn-naranja d-md-block d-none d-lg-inline-block" href="/programas/dulce-espera">Descubrelo</a>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-slide lazyload bg-img-start content-space-4 content-space-t-lg-3 content-space-t-sm-4 content-space-b-sm-4" data-bg="/images/slide-003.webp">
				<div class="container content-space-b-sm-2 content-space-t-sm-2">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-5">
								<h1 class="text-primary">Seguridad y protección<br>en todas<br>nuestra especialidades.</h1>
							</div>
							<a class="btn btn-naranja d-md-block d-none d-lg-inline-block" href="/especialidades">Conoce más</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="js-swiper-blog-modern-hero-pagination swiper-pagination swiper-pagination-light position-absolute bottom-0 start-0 end-0 mb-3 d-sm-none"></div>
	</div>
	<div class="position-sm-absolute bottom-0 start-0 end-0 zi-2 d-none d-sm-block mb-7">
		<div class="container content-space-t-1">
			<div class="js-swiper-blog-modern-hero-thumbs swiper swiper-step-pagination swiper-step-pagination-light">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<span class="swiper-step-pagination-title">Último post</span>
					</div>
					<div class="swiper-slide">
						<span class="swiper-step-pagination-title">35 años contigo</span>
					</div>
					<div class="swiper-slide">
						<span class="swiper-step-pagination-title">Dulce Espera</span>
					</div>
					<div class="swiper-slide">
						<span class="swiper-step-pagination-title">Especialidades</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">document.addEventListener("DOMContentLoaded", function () {
    const lazySlides = document.querySelectorAll(".lazyload");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const slide = entry.target;
                    const bgImage = slide.getAttribute("data-bg");
                    if (bgImage) {
                        slide.style.backgroundImage = `url(${bgImage})`;
                        slide.classList.add("lazyloaded");
                        observer.unobserve(slide); // Dejar de observar después de cargar
                    }
                }
            });
        },
        {
            rootMargin: "0px 0px 50px 0px", // Opcional: Margen para cargar antes de que sea visible
            threshold: 0.1, // Visible al menos 10% para iniciar la carga
        }
    );

    lazySlides.forEach((slide) => observer.observe(slide));
});
</script>