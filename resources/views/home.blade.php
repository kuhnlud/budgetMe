@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><p class="text-uppercase">total</p></div>

                <div class="panel-body">
                    <div class="title text-center">
                        {{$Total}} <small>€</small>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-default btn-lg" href="/new_items">
                            <span>+</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
