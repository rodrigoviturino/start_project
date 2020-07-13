<?php
    /**
     * Template Name: Page Contact
     */
    get_header('interno'); 
?>
<section class="page-contact">

    <div class="container content-internal section">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="block-title">
                    <h2>Contact</h2>
                    <p>Why I say old chap that is, spiffing jolly good a load of old tosh spend a penny tosser arse over tit, excuse my French owt to do with me up the kyver matie boy.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/contact2.png" alt="">
            </div>
            <div class="col-md-5 offset-lg-1">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Name</label>
                            <input type="text" class="form-control" id="inputPassword4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Subject</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Assunto">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                 
                    <button type="submit" class="btn btn-primary w-50 rounded-pill mt-4">Enviar</button>
                </form>
            </div>
        </div>


    </div>

</section>

<?php get_footer(); ?>