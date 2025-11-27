<h2>Dashboard Psikolog</h2>
<p>Halo, {{ auth()->user()->email }} (Psikolog)</p>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
