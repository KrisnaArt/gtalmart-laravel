@extends('dashboardUser.layout.main')

@section('container')
    <div class="card w-71">
        <div class="card-header">
            Profile
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h6 class="card-title pr-5">Nama</h6>
                        <p class="card-text pr-5">{{ auth()->user()->name }}</p>
                        <h6 class="card-title pr-5">Email</h6>
                        <p class="card-text pr-5">{{ auth()->user()->email }}</p>
                    </div>
                    <div class="col">
                        <img src="img/faces/team-1.jpg" width="150" class="img-thumbnail rounded-circle">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection