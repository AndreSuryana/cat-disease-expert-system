@extends('partials.main')

@section('main-content')
    <main class="container-fluid text-center pt-5 pb-2">
        <h1 class="cover-heading py-4"><strong>CAT</strong> Disease Expert System</h1>
        <p class="lead py-2 px-5"><em><strong>CAT</strong> Disease Expert System</em> merupakan aplikasi yang dapat
            melakukan analisa penyakit yang sedang dialami si kucing.</p>
        <p class="lead py-2">
            <a href="{{ route('diagnose.index') }}" class="btn btn-lg btn-primary">Mulai Diagnosa</a>
        </p>
    </main>
@endsection
