@extends('layout.base')
@section('title', 'Kunjungan')
@section('main-content')
    <div class="container-kunjungan">
        <div class="first-content">
            <h2>KUNJUNGAN MUSEUM SANDI</h2>
            <span></span>
            <p>Silahkan isi daftar kunjungan di bawah ini</p>
        </div>
        <div class="second-content">
            <form action="/kunjungan" method="post">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
                @csrf
                <input class="my-form-control" type="text" name="tanggal" id="tanggal" disabled="disabled">
                <input class="my-form-control @error('nama') is-invalid @enderror" type="text" name="nama" id="nama" placeholder="Nama/Name" value="{{ old('nama') }}">
                @error('nama')
                <small>{{ $message }}</small>
                @enderror
                <select class="my-form-control" name="asal" id="asal">
                    @include('snippets.country')
                </select>
                <input class="my-form-control @error('alamat') is-invalid @enderror" type="text" name="alamat" id="alamat" placeholder="Alamat/Address" value="{{ old('alamat') }}">
                @error('nama')
                <small>{{ $message }}</small>
                @enderror
                <input class="my-form-control @error('jumlah') is-invalid @enderror" type="number" name="jumlah" id="jumlah" placeholder="Jumlah/Total" value="{{ old('jumlah') }}">
                @error('nama')
                <small>{{ $message }}</small>
                @enderror
                <textarea class="my-form-control my-textarea" name="keterangan" id="keterangan" cols="30" rows="10" placeholder="Keterangan/Information" style="resize: none;" >{{ old('keterangan') }}</textarea>
                <input class="my-form-control submit-btn" type="submit">
            </form>
            <div class="alamat">
                <h3>Alamat</h3>
                <p>Jl. Faridan M Noto No.21, Kotabaru, Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55224</p>
                <p>(0274) 556921</p>
                <a href="https://www.facebook.com/museumsandi/"><i class="fa fa-facebook" style="font-size:28px"></i></a>
                <a href="https://twitter.com/museumsandiina?lang=en"><i class="fa fa-twitter" style="font-size:28px"></i></a>
                <a href="https://www.instagram.com/museum.sandi/?hl=id"><i class="fa fa-instagram" style="font-size:28px"></i></a>
                <a href="https://www.youtube.com/channel/UCQwXmTAMieEDMJgaCNUWlXQ"><i class="fa fa-youtube" style="font-size:28px"></i></a>
            </div>
        </div>
    </div>
    <section id="googleMap">
        <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1976.522366496972!2d110.37203169482653!3d-7.7850822202802235!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x149a142e1131425d!2sCode+Museum!5e0!3m2!1sen!2sid!4v1553228408276"></iframe>
    </section>
@endsection