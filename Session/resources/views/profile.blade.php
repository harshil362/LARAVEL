<div>
    <h1>this is profile</h1>
    @if (session('user'))
    <h1>welcome,{{ session ('user')}}</h1>
    @else
    <h1>no user </h1>
    @endif

    <a href="logout">Logout</a>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
</div>
