@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form>
                <div class="form-group">
                    <label for="montant">Montant</label>
                    <div class="input-group ">
                        <input type="text" class="form-control input-lg" name="montant" id="montant" placeholder="0">
                        <div class="input-group-addon">€</div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
