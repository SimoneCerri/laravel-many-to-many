@extends('layouts.admin')

@section('content')
    <header>
        <div class="container-fluid bg-dark py-3 text-danger shadow">
            <div class="container d-flex align-items-center justify-content-between">
                <h1>
                    <strong>
                        Home
                    </strong>
                </h1>
                <a class="btn btn-danger text-dark" href="{{ route('admin.projects.index') }}">Portfolio</a>
            </div>
        </div>
    </header>
@endsection
