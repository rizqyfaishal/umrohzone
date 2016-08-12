<div class="dashboard-side-nav">
    <ul>
        <li>
            <a href="{{ action('PageController@dashboardUser') }}">Panel Kontrol Akun</a>
        </li>
        <li>
            <a href="{{ action('PageController@dashboardUserInfoAkun') }}">Informasi Akun</a>
        </li>
        <li>
            <a href="{{ action('PageController@dashboardUserBooking') }}">My Booking</a>
        </li>
        <li>
            <a style="pointer-events: none;cursor: default;" href="{{ action('PageController@dashboardAgentDaftarPaket') }}">Data Calon Jamaah</a>
        </li>
    </ul>
</div>