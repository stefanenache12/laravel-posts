@extends('layouts.guest')

@section('page-title', 'Welcome')

@section('main-content')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body text-center ">
                        <h1 class="text-primary">
                            Welcome!
                        </h1>
                        <h6>
                            La welcome page è una pagina pubblica (NON protetta)
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
