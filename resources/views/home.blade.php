@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dasboard Laravel</div>
                 <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5>IDENTITAS</h5>

                    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";


                        <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
