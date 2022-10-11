@extends('partials.main')

@section('main-content')
    <main class="container-fluid text-center pt-5 pb-2">
        @if ($disease != null)
            <h1 class="cover-heading py-4">{{ $disease->description }}</h1>
            @if ($disease->uid[0] == 'P')
                <p class="lead py-2 px-5">Kucing Anda terkena penyakit <strong><em>{{ $disease->description }}</em></strong>.
                    Segera hubungi dokter hewan terdekat untuk informasi dan penanganan lebih lanjut.</p>
            @else
                <p class="lead py-2 px-5">Informasi mengenai gejala yang dibutuhkan tidak cukup untuk melakukan konsultasi.</p>
            @endif
        @else
            <h1 class="cover-heading py-4">Penyakit tidak ditemukan</h1>
            <p class="lead py-2 px-5">Informasi mengenai gejala yang dibutuhkan tidak cukup untuk melakukan konsultasi.</p>
        @endif
        <p class="lead py-2">
            <a href="{{ route('diagnose.index') }}" class="btn btn-lg btn-primary">Diagnosa Lagi</a>
        </p>
    </main>
@endsection
