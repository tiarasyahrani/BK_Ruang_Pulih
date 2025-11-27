<h2>Dashboard Admin</h2>
<p>Halo, {{ auth()->user()->email }} (Admin)</p>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
