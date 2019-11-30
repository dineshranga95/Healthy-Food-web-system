@extends('layouts.app')


@section('content')
<div class="jumbotran big-bner">
<div class="container" style="margin:50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin:100px;">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are succesfully registered.!
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
