@extends('layouts.app')

@section('content')
@auth
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endauth

@guest
    {{-- Show login and registration form if not logged in --}}
    loginform
@endguest

@endsection
