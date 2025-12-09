<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        Daftar Author
        @foreach (App\Models\Author::all() as $a)
    <p>{{ $a->name }} - {{ $a->email }}</p>
    <p>Bio: {{ $a->bio }}</p>
    <p>Produk: {{ $a->produk }}</p>
    <p>Jenis: {{ $a->jenis }}</p>
@endforeach

<form action="{{ route('authors.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nama">
    <input type="email" name="email" placeholder="Email">
    <textarea name="bio" name="Bio"></textarea>
    <input type="text" name="produk" placeholder="Produk">
    <input type="text" name="jenis" placeholder="Jenis">
    <button type="submit">Tambah Author</button>
</form>
    
        </header>
        
    </body>
</html>
