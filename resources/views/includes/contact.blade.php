<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">N'hésitez pas à nous contacter</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-7 wow slideInUp" data-wow-delay="0.3s">
                <div class="bg-light rounded p-2 pb-3">
                    <form method="POST" action="{{ route('sendemail') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="text" class="form-control border-0 px-4" name="name" placeholder="Nom" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control border-0 px-4" name="email" placeholder="Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 px-4" name="subject" placeholder="Sujet" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 px-4 py-3" name="message" rows="8" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn1 w-100 py-3 text-white" type="submit">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 wow slideInUp" data-wow-delay="0.6s">
                <div class="bg-light rounded p-5">
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-geo-alt fs-1 fg2 me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-1">Localisation</h5>
                            <span>Makepe, saint Tropez, Douala Cameroun</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-envelope-open fs-1 fg2 me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-1">Email</h5>
                            <span>contact@sosservicestech.com</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <i class="bi bi-phone-vibrate fs-1 fg2 me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-1">Téléphone</h5>
                            <span>+237 652 061 510</span> <br>
                            <span>+237 655 077 119</span>
                        </div>
                    </div>
                    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=350&amp;height=190&amp;hl=en&amp;q=LM Consulting & Technology&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://kokagames.com/">FNF</a></div><style>.mapouter{position:relative;text-align:right;width:350px;height:185px;}.gmap_canvas {overflow:hidden;background:none!important;width:350px;height:190px;}.gmap_iframe {width:350px!important;height:190px!important;}</style></div>                    </div>
            </div>
        </div>
    </div>
</div>