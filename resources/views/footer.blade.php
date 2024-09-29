<footer class="container-fluid bg-primary text-white pt-5 pb-2">
    <div class="row">
        <div class="col-md-4 mb-md-0 text-center">
            <img src="{{ asset('/Images/Property/logo.png') }}" alt="Company Logo" class="img-fluid"
                style="width: 300px;" />
        </div>
        <div class="col-md-2 mb-md-0 text-center">
            <h5>Quick Links</h5>
            <ul class="list-unstyled">
                <li><a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a></li>
                <li><a href="{{ url('/about') }}" class="text-white text-decoration-none">About Us</a></li>
                <li><a href="{{ url('/services') }}" class="text-white text-decoration-none">Services</a></li>
                <li><a href="{{ url('/contact') }}" class="text-white text-decoration-none">Contact</a></li>
                <li><a href="{{ url('/privacy-policy') }}" class="text-white text-decoration-none">Privacy Policy</a>
                </li>
            </ul>
        </div>
        <div class="col-md-2 mb-md-0 text-center">
            <h5>Quick Links</h5>
            <ul class="list-unstyled">
                {{-- MAIN CITY --}}
                <li><a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a></li>
                <li><a href="{{ url('/about') }}" class="text-white text-decoration-none">About Us</a></li>
                <li><a href="{{ url('/services') }}" class="text-white text-decoration-none">Services</a></li>
                <li><a href="{{ url('/contact') }}" class="text-white text-decoration-none">Contact</a></li>
                <li><a href="{{ url('/privacy-policy') }}" class="text-white text-decoration-none">Terms & conditions</a>                </li>
            </ul>
        </div>
        <div class="col-md-4 mb-md-0">
            <h5>Follow Us</h5>
            <ul class="list-unstyled d-flex">
                <li class="me-3">
                    <a href="#" aria-label="Facebook" class="text-white text-decoration-none">
                        <i class="bi bi-facebook"></i>
                    </a>
                </li>
                <li class="me-3">
                    <a href="#" aria-label="Twitter" class="text-white text-decoration-none">
                        <i class="bi bi-twitter"></i>
                    </a>
                </li>
                <li class="me-3">
                    <a href="#" aria-label="Instagram" class="text-white text-decoration-none">
                        <i class="bi bi-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="#" aria-label="LinkedIn" class="text-white text-decoration-none">
                        <i class="bi bi-linkedin"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col pt-5 text-center">
            <p>&copy; 2017 Bechoproperty. All rights reserved.</p>
        </div>
        <div class="col-sm-2 text-end">
            <a href="#" aria-label="Scroll to top" class="text-white text-decoration-none scroll-to-top">
                <i class="bi bi-arrow-up-circle-fill" style="font-size: 50px;"></i>
            </a>
        </div>
    </div>
</footer>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>
