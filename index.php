<?php get_header(); ?>

<!-- Banner Home -->
<section class="home-introduction">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 home-introduction-block-title">
                <p>Discover sinata today</p>
                <h1>Search engine optimization & marketing</h1>
                <a href="#" class="btn btn-primary rounded-pill mr-3">Get help</a>
                <a href="#" class="btn btn-danger rounded-pill">Try free trial</a>
            </div>
            <div class="col-lg-4 offset-lg-2 home-introduction-form">
                <form action="#" class="needs-validation" novalidate>
                    <p>Welcome to sinata</p>
                    <h2>Get 30 days free trial</h2>
                    
                    <div class="group">
                        <label for="">Your Name*</label>
                        <input type="text">
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    
                    <div class="group">
                        <label for="">Your Email*</label>
                        <input type="text">
                    </div>
                    
                    <div class="group">
                        <label for="">Password*</label>
                        <input type="text">
                    </div>

                    <button type="submit" class="btn btn-primary">Get Started <i class="far fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
    </div>

    <script>
    
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    console.log(forms)
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, (form) => {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false ) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);    
    });
  }, false);
})();
    </script>
</section>
<!-- end Banner Home -->

<!-- Sessão One -->
<section class="home-sessao-one">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 home-sessao-one-block-title">
                <p>Services</p>
                <h2>We provide solutions to our clients</h2>
            </div>
        </div>
        <div class="row">

            <div class="col-md-4 home-sessao-one-wrapper p-4">
                <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/icon.svg" alt="">
                <h3>Bootstrap UI based</h3>
                <p>To an English person, it will seem like English as skeptical.</p>
            </div>

            <div class="col-md-4 home-sessao-one-wrapper p-4">
                <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/icon2.svg" alt="">
                <h3>Easy to customize</h3>
                <p>If several languages coalesce, the grammar of the language.</p>
            </div>

            <div class="col-md-4 home-sessao-one-wrapper p-4">
                <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/icon3.svg" alt="">
                <h3>Awesome Support</h3>
                <p>To an English person, it will seem like English as skeptical.</p>
            </div>

        </div>
    </div>
</section>
<!-- end Sessão One -->

<!-- Sessão Two -->
<section class="home-sessao-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 home-sessao-two-wrapper">
                <div class="home-sessao-two-block-title">
                    <span>
                        <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/folder.svg" alt="">
                    </span>
                    <h3>Improve your Marketing business</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                </div>
            </div>
            <div class="col-lg-6 col-sm-8">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/src/assets/images/screen.svg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- end Sessão Two -->

<!-- Sessão Tree -->
<section class="home-sessao-tree">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 home-sessao-tree-block-title">
                <h2>Best Solutions for your Business</h2>
                <p>To achieve this, it would be necessary to have uniform grammar, pronunciation and more common that of the individual languages.</p>
            </div>
        </div>
        <div class="row home-sessao-tree-wrapper">
            <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/folder (1).svg" alt="">
                <span>2581</span>
                <p>Projects</p>
            </div>
            <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/user (2).svg" alt="">
                <span>2581</span>
                <p>Projects</p>
            </div>
            <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/coffee-cup.svg" alt="">
                <span>2581</span>
                <p>Projects</p>
            </div>
            <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/trophy.svg" alt="">
                <span>2581</span>
                <p>Projects</p>
            </div>
        </div>
    </div>
</section>
<!-- end Sessão Tree -->

<!-- Sessão Four -->
<section class="home-sessao-four">
    <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/top-background-left.jpg" alt="" class="home-sessao-four-background-top-left">
    <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/top-background-left.jpg" alt="" class="home-sessao-four-background-top-right">
    <div class="container">
        <div class="home-sessao-four-block-title">
            <p>Pricing</p>
            <h2>Choose your Plan</h2>
        </div>

        <div class="home-sessao-four-pricing">
            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Monthly</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Yearly</a>
                </li>
            </ul>
            <div class="tab-content text-center" id="pills-tabContent">

                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row">

                    <div class="col-sm-4">
                        <div class="card shadow-sm rounded">
                            <div class="card-body">
                                <h5 class="card-title">Economy</h5>
                                <p class="card-text">$19/mo</p>
                                <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Buy plan now</a>
                                <ul class="list-unstyled">
                                    <li>Bandwidth : <span class="text-danger">1GB</span></li>
                                    <li>Onlinespace : <span class="text-danger">50MB</span></li>
                                    <li>Support : <span class="text-danger">No</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card shadow-sm rounded">
                            <div class="card-body">
                                <h5 class="card-title">Economy</h5>
                                <p class="card-text">$19/mo</p>
                                <a href="#" class="btn btn-danger rounded-pill py-2 px-4">Buy plan now</a>
                                <ul class="list-unstyled">
                                    <li>Bandwidth : <span class="text-danger">1GB</span></li>
                                    <li>Onlinespace : <span class="text-danger">50MB</span></li>
                                    <li>Support : <span class="text-danger">No</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card shadow-sm rounded">
                            <div class="card-body">
                                <h5 class="card-title">Economy</h5>
                                <p class="card-text">$19/mo</p>
                                <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Buy plan now</a>
                                <ul class="list-unstyled">
                                    <li>Bandwidth : <span class="text-danger">1GB</span></li>
                                    <li>Onlinespace : <span class="text-danger">50MB</span></li>
                                    <li>Support : <span class="text-danger">No</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    </div><!-- end Row -->

                </div>

                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row">
                        
                        <div class="col-sm-4">
                                <div class="card shadow-sm rounded">
                                    <div class="card-body">
                                        <h5 class="card-title">Economy</h5>
                                        <p class="card-text">$19/mo</p>
                                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Buy plan now</a>
                                        <ul class="list-unstyled">
                                            <li>Bandwidth : <span class="text-danger">1GB</span></li>
                                            <li>Onlinespace : <span class="text-danger">50MB</span></li>
                                            <li>Support : <span class="text-danger">No</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-4">
                                <div class="card shadow-sm rounded">
                                    <div class="card-body">
                                        <h5 class="card-title">Economy</h5>
                                        <p class="card-text">$19/mo</p>
                                        <a href="#" class="btn btn-danger rounded-pill py-2 px-4">Buy plan now</a>
                                        <ul class="list-unstyled">
                                            <li>Bandwidth : <span class="text-danger">1GB</span></li>
                                            <li>Onlinespace : <span class="text-danger">50MB</span></li>
                                            <li>Support : <span class="text-danger">No</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="card shadow-sm rounded">
                                    <div class="card-body">
                                        <h5 class="card-title">Economy</h5>
                                        <p class="card-text">$19/mo</p>
                                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Buy plan now</a>
                                        <ul class="list-unstyled">
                                            <li>Bandwidth : <span class="text-danger">1GB</span></li>
                                            <li>Onlinespace : <span class="text-danger">50MB</span></li>
                                            <li>Support : <span class="text-danger">No</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                    </div><!-- end Row -->
                </div>
               
            </div>
        </div>
    </div>
</section>
<!-- end Sessão Four -->

<!-- Sessão Five -->
<section class="home-sessao-five">
    <div class="container">
        <div class="home-sessao-five-block-title">
            <span>Subscribe</span>
            <h2>Subscribe to our Newsletter</h2>
            <p>It will be as simple as occidental in fact, it will be Occidental.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-7 form">
                <div class="input-group">
                    <input type="text" class="form-control rounded py-4" placeholder="Enter your E-mail address" aria-label="Username" aria-describedby="addon-wrapping">
                    <button class="btn btn-primary around rounded-pill px-4 ml-4">Subscribe Us</button>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- end Sessão Five -->

<?php get_footer(); ?>