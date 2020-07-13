<?php
    /**
     * Template Name: Page Careers 
     */
    get_header();
?>

<main class="page-careers">
    
    <section class="banner-intro">
        <div class="container">
            <div class="banner-intro-block-title">
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At architecto fugit officia eos ipsum veniam consequatur quidem molestiae corrupti, dignissimos officiis vel corporis, labore quis laborum aliquid nobis, ratione temporibus.</p>
            </div>
        </div>
    </section>

        <!-- Cards -->
    <section class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="content-block-title">
                        <h3>Job Vacancies</h3>
                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a mauris vitae elit. Class aptent taciti litora torquent per idunt auctor a ornare odio.</p>

                        <div class="input-group my-3 py-4">
                            <input type="text" class="form-control" placeholder="Faça sua pesquisa" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-danger" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 rounded card-group">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/card-job.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Titulo Job</h5>
                            <ul class="card-text">
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                                <li>Vestibulum laoreet porttitor sem</li>
                                <li>Ac tristique libero volutpat at</li>
                            </ul>
                            <a href="#" class="btn btn-primary">Ver Vaga</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 rounded card-group">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/card-job.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Titulo Job</h5>
                            <ul class="card-text">
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                                <li>Vestibulum laoreet porttitor sem</li>
                                <li>Ac tristique libero volutpat at</li>
                            </ul>
                            <a href="#" class="btn btn-primary">Ver Vaga</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 rounded card-group">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/card-job.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Titulo Job</h5>
                            <ul class="card-text">
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                                <li>Vestibulum laoreet porttitor sem</li>
                                <li>Ac tristique libero volutpat at</li>
                            </ul>
                            <a href="#" class="btn btn-primary">Ver Vaga</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 rounded card-group">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/card-job.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Titulo Job</h5>
                            <ul class="card-text">
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                                <li>Vestibulum laoreet porttitor sem</li>
                                <li>Ac tristique libero volutpat at</li>
                            </ul>
                            <a href="#" class="btn btn-primary">Ver Vaga</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 rounded card-group">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/card-job.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Titulo Job</h5>
                            <ul class="card-text">
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                                <li>Vestibulum laoreet porttitor sem</li>
                                <li>Ac tristique libero volutpat at</li>
                            </ul>
                            <a href="#" class="btn btn-primary">Ver Vaga</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 rounded card-group">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/card-job.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Titulo Job</h5>
                            <ul class="card-text">
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                                <li>Vestibulum laoreet porttitor sem</li>
                                <li>Ac tristique libero volutpat at</li>
                            </ul>
                            <a href="#" class="btn btn-primary">Ver Vaga</a>
                        </div>
                    </div>
                </div>

            </div> <!-- end Row -->
            <!-- Button via Ajax -->
            <button class="btn btn-primary m-auto d-block w-25">Load More Jobs</button>
            <!-- end Button via Ajax -->
        </div><!-- end Container -->

    </section>

</main>


<?php get_footer(); ?>