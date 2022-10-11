@extends('partials.main')

@section('main-content')
    <main class="container-fluid text-center pt-5 pb-2">
        <h1 class="cover-heading py-4"><strong>CAT</strong> Disease Expert System</h1>
        <p class="lead py-2 px-5"><em><strong>CAT</strong> Disease Expert System</em> merupakan aplikasi yang dapat
            melakukan analisa penyakit yang sedang dialami si kucing. Aplikasi ini menerapkan metode <em>Forward
                Chaining</em> sebagai mesin inferensi.</p>
    </main>
    <section class="container-fluid">
        <h3>Daftar Indikasi atau Gejala :</h3>
        <form class="py-4 mb-5" action="{{ route('diagnose.process') }}" method="POST">
            @csrf
            @foreach ($indications as $indication)
                <div class="mb-4">
                    <label for="{{ 'answer_' . $indication->id }}" class="form-label fs-5 fw-normal text">{{ $indication->id . '. ' . $indication->name }}</label>
                    <div class="container-fluid px-0">
                        <input type="radio" class="btn-check" name="{{ $indication->uid }}" id="{{ 'ans_yes' . $indication->id }}" value="1">
                        <label class="btn btn-lg btn-outline-success" for="{{ 'ans_yes' . $indication->id }}">Iya</label>
                        <input type="radio" class="btn-check" name="{{ $indication->uid }}" id="{{ 'ans_no' . $indication->id }}" value="0">
                        <label class="btn btn-lg btn-outline-secondary" for="{{ 'ans_no' . $indication->id }}">Tidak</label>
                    </div>
                </div>
            @endforeach
            <div class="container-fluid px-0 py-4 w-auto text-center">
                <input class="btn btn-primary btn-lg px-5 py-3" type="submit" value="Diagnosa">
            </div>
        </form>
    </section>
@endsection
