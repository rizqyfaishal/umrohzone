<footer>
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="list-inline">
                    <li>
                        <a href="{{ action('PageController@index') }}">Home</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="{{ action('PageController@bookingStatus') }}">My Booking</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="{{ action('AgenController@showRegister') }}">Afiliasi & Mitra</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="{{ action('PageController@login') }}">Login</a>
                    </li>
                </ul>
                <p class="copyright text-muted small">Copyright &copy; Umrohzone.com - All right reserved, 2016</p>
            </div>
        </div>
    </div>
</footer>
