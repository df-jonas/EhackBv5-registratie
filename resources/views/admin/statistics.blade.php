@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Statistics</div>
                    <div class="panel-body">
                        <p>Total users: {{ $useramount }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop