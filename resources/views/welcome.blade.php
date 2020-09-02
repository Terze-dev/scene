@extends('layouts.app')

@section('content')

@auth
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
			moo
                </div>
            </div>
        </div>
    </div>
</div>
@endauth

@guest
    <div class="container mx-auto">
        {{-- Show login and registration form if not logged in --}}
        <livewire:login />
    </div>
@endguest


@endsection
