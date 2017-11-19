@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Manage</div>
                    <div class="panel-body">
                        <a href="{{ url('admin/manage/activity') }}">Beheer activiteiten.</a>
                    </div>
                    <div class="panel-body">
                        <a href="{{ url('admin/manage/game') }}">Beheer games.</a>
                    </div>
                    <div class="panel-body">
                        <a href="{{ url('admin/manage/option') }}">Beheer opties.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop