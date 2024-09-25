<h1>Dashboard Petugas</h1>
<p>Selamat datang, Petugas</p>
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>
