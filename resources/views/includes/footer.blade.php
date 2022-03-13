<!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container pt-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h3 class="text-white mb-4">Liens rapides</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a  class="text-light mb-2" href="{{ url('/') }}" class="nav-item nav-link active">Accueil</a>
                    <a  class="text-light mb-2" href="{{ url('about') }}" class="nav-item nav-link">A propos</a>
                    <a  class="text-light mb-2" href="{{ url('service') }}" class="nav-item nav-link">Services</a>
                    <a  class="text-light mb-2" href="{{ url('blog') }}" class="nav-item nav-link">Blog</a>
                    <a  class="text-light mb-2" href="{{ url('contact') }}" class="nav-item nav-link">Contact</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <h3 class="text-white mb-4">Contact</h3>
                <p class="mb-2"><i class="bi bi-geo-alt me-2"></i>Makepe, saint Tropez, Douala Cameroun</p>
                <p class="mb-2"><i class="bi bi-envelope-open me-2"></i><a class="text-white" href="mailto:sosservicestech@sosservicestech.com">sosservicestech@sosservicestech.com</a></p>
                <p class="mb-0"><i class="bi bi-telephone me-2"></i>+237 652 061 510 / +237 6 55 07 71 19</p>
            </div>
            <div class="col-lg-4 col-md-6">
                <h3 class="text-white mb-4">Suivez-nous</h3>
                <div class="d-flex">
                    <a class="btn btn-lg btn1 btn-lg-square rounded me-2 text-white" href="https://web.facebook.com/SOServicesTech"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-lg btn1 btn-lg-square rounded me-2 text-white" href="https://www.linkedin.com/company/78739894/admin"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-lg btn1 btn-lg-square rounded me-2 text-white" href="https://twitter.com/sosservicestech" style=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-lg btn1 btn-lg-square rounded text-white" href="https://api.whatsapp.com/send?phone=+237655077119"><i class="fab fa-whatsapp fw-normal"></i></a>
                </div>
            </div>
            <div class="col-12">
                <form class="mx-auto" style="max-width: 600px;" action="{{ url('new-letter') }}" method="POST">
                @csrf    
                <div class="input-group">
                        <input type="text" class="form-control border-white p-3" name="email" placeholder="Votre email">
                        <button class="btn btn1 text-white px-4">S'inscrire</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">
            Copyright &copy; {{ config('app.name', 'SOS Services Technologie') }} {{ now()->year }} 
            | powered by <a class="fg2" href="http://bmis-arts.com"> bmis-arts</a>
        </p>
    </div>
    <!-- /.container -->
</footer>