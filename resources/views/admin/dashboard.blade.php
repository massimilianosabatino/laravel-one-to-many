@extends('layouts.app')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Projects</div>
                <div class="card-body">
                    <div class="col-6">
                        Totale progetti: {{ $countProjectTotal }}
                    </div>
                    <div class="col-6">
                        
                        Categoria con più progetti: {{Str::ucfirst($getMaxCategoryName->category) }} -> {{ $getMaxCategory->number }} progetti
                    </div>
                    <div class="mt-2">
                        <a href="{{ route('admin.projects.index') }}" class="btn btn-light">Gestione progetti</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body d-flex">
                    <div class="col-6 text-center d-flex">
                        <div class="col-6">
                            <a href="{{ route('admin.projects.index') }}" class="btn btn-light">Gestione progetti</a>
                        </div>
                        <div class="col-6">
                            <a href="{{ route('admin.projects.create') }}" class="btn btn-light">Aggiungi progetto</a>
                        </div>
                    </div>
                    <div class="col-6 text-center d-flex">
                        <div class="col-6">
                            <a href="{{ route('admin.types.index') }}" class="btn btn-light">Gestione categorie</a>
                        </div>
                        <div class="col-6">
                            <a href="{{ route('admin.types.create') }}" class="btn btn-light">Aggiungi categoria</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
