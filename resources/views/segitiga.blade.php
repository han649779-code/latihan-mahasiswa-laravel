@extends('layouts.app')

@section('title', 'Kalkulator Luas Segitiga')

@section('content')
    <h1>Kalkulator Luas Segitiga</h1>

    @if ($errors->any())
        <div class="alert">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="/kalkulator/segitiga" method="POST">
        @csrf
        <label for="alas">Alas</label>
        <input type="number" step="any" name="alas" id="alas" value="{{ old('alas') }}" required>

        <label for="tinggi">Tinggi</label>
        <input type="number" step="any" name="tinggi" id="tinggi" value="{{ old('tinggi') }}" required>

        <button type="submit">Hitung</button>
    </form>

    @isset($luas)
        <div class="hasil">
            <p>Luas = &frac12; &times; alas &times; tinggi</p>
            <p>Luas = &frac12; &times; {{ $alas }} &times; {{ $tinggi }} = <strong>{{ $luas }}</strong></p>
        </div>
    @endisset
@endsection