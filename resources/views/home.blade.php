@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenue, {{ Auth::user()->name }} !
                    Tu peux ajouter des maps ci-dessous.
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <h3>Ajouter une map</h3>
            <form action="/api/v1/maps/add" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Nom de la carte">
                </div>
                <div class="form-group">
                    <select class="form-control" name="type">
                        <option value="CTR">CTR</option>
                        <option value="CNK">CNK</option>
                        <option value="BONUS">BONUS</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Nom de l'image">
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-primary btn-lg" value="Ajouter">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
