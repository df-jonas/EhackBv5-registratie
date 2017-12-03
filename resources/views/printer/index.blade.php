@extends('layouts.kassa')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form method="GET">
                            <div class="form-group">
                                <select data-placeholder="Klik om te zoeken" class="form-control chosen-select form-control-lg" id="search" name="search">
                                    <option value=""></option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->firstName }} {{ $user->lastName }} ({{ $user->email }})</option>
                                    @endforeach
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script src="/js/jquery.min.js" type="text/javascript"></script>
    <script src="/js/chosen.jquery.min.js" type="text/javascript"></script>
    <script src="/js/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
    <script src="/js/docsupport/init.js" type="text/javascript" charset="utf-8"></script>
    <script>
        $("#search").on('change', function () {
            console.log($(this).val())
        });
    </script>
@stop