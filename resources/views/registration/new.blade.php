@extends('layouts.register')

@section('title')

    <title>Registratie</title>

@endsection

@section('content')

    <div class="card">
        <div class="card-body">
            <img class="card-img-top" src="img/ehackb.png" alt="Card image cap">

            <p class="text-center">
                Bij problemen tijdens het registreren kan je steeds contact opnemen via
                <a href="https://www.facebook.com/EhackB/">Facebook</a> <strong>(snel)</strong>
                of via <a href="mailto:ehackb@ehb.be">ehackb@ehb.be</a> <strong>(traag)</strong>.
            </p>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(Session::has('err'))
                <div class="alert alert-danger">
                    {{ Session::get('err') }}
                </div>
            @endif
            <br/>


            <form method="post" action="storecasual">
                {{ csrf_field() }}
                <div id="register1">

                    <h2 class="text-center">Persoonlijke Gegevens</h2>

                    <div class="form-row">
                        <div class="col">

                            <!-- EMAIL -->

                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="inputEmail" class="control-label">E-mail*</label>
                                <input type="email" name="email" class="form-control" id="inputEmail"
                                       placeholder="E-mail" required autofocus value="{{old('email')}}"/>
                                @if ($errors->has('email'))
                                    <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                                @endif
                            </div>
                        </div>

                        <div class="col">

                            <!-- REMINDER EMAIL -->

                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="inputReminderEmail" class="control-label">Reminder E-mail</label>
                                <input type="email" value="{{ old('reminderemail') }}" name="reminderemail"
                                       class="form-control" id="inputReminderEmail" placeholder="Reminder E-mail">
                                <small id="reminderHelp" class="form-text text-muted">Deze mail wordt gebruikt voor
                                    nieuwsbrieven en is optioneel.
                                </small>
                            </div>
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col">

                            <!-- FIRST NAME -->

                            <div class="form-group  {{ $errors->has('firstname') ? ' has-error' : '' }}">
                                <label for="inputFirstName" class="control-label">Voornaam*</label>
                                <input type="text" value="{{old('firstname')}}" name="firstname" class="form-control"
                                       id="inputFirstName" placeholder="Voornaam" required/>
                                @if ($errors->has('firstname'))
                                    <span class="help-block"><strong>{{ $errors->first('firstname') }}</strong></span>
                                @endif
                            </div>

                        </div>

                        <div class="col">

                            <!-- LAST NAME -->

                            <div class="form-group {{ $errors->has('lastname') ? ' has-error' : '' }}">
                                <label for="inputReminderEmail" class="control-label">Achternaam*</label>
                                <input type="text" name="lastname" value="{{old('lastname')}}" class="form-control"
                                       id="inputLastName"
                                       placeholder="Achternaam" required/>
                                @if ($errors->has('lastname'))
                                    <span class="help-block"><strong>{{ $errors->first('lastname') }}</strong></span>
                                @endif
                            </div>

                        </div>

                        <div class="col">

                            <!-- STEAM ID -->

                            <div class="form-group {{ $errors->has('steamid') ? ' has-error' : '' }}">
                                <label for="steamid" class="control-label">SteamID</label>
                                <input type="text" name="steamid" class="form-control" id="steamid"
                                       placeholder="SteamID" value="{{ old('steamid') }}" />
                                @if ($errors->has('steamid'))
                                    <span class="help-block"><strong>{{ $errors->first('steamid') }}</strong></span>
                                @endif
                            </div>

                        </div>
                    </div>

                    <div class="form-row">

                        <div class="col">

                            <!-- PASSWORD -->

                            <div class="form-group">
                                <label for="inputReminderEmail" class="control-label">Wachtwoord*</label>
                                <input type="password" name="password" class="form-control" id="inputPassword"
                                       placeholder="Wachtwoord" required/>
                            </div>

                        </div>

                        <div class="col">

                            <!-- PASSWORD CHECK -->

                            <div class="form-group">
                                <label for="inputReminderEmail" class="control-label">Wachtwoord Verificatie*</label>
                                <input type="password" name="verifypassword" class="form-control" id="inputPassword"
                                       placeholder="Wachtwoordverificatie" required/>
                            </div>

                        </div>

                    </div>

                </div>

                <div id="register2">

                    <!-- ACTIVITIES -->

                    <h2 class="text-center">Keynotes</h2>

                    @foreach($talks as $talk)
                        <div class="input-group">
                        <span class="input-group-addon">
                            <input type="checkbox" value="{{$talk->id}}" name="activities[]"
                                   aria-label="Checkbox for following text input" {{  ($talk->maxUsers - $talk->users->count()) <= 0 ? 'disabled' : '' }}>
                         </span>
                            <input type="text" class="form-control" disabled aria-label="Text input with checkbox"
                                   value="{{$talk->name}} ({{date("H:i",strtotime($talk->startDate)) }} - {{date("H:i",strtotime($talk->endDate)) }})@if($talk->maxUsers != 9999) - Plaatsen: {{ $talk->maxUsers - $talk->users->count() }} @endif">
                        </div>
                    @endforeach

                    <h2 class="text-center">Workshops</h2>

                    @foreach($workshops as $workshop)
                        <div class="input-group">
                        <span class="input-group-addon">
                            <input type="checkbox" value="{{$workshop->id}}" name="activities[]"
                                   aria-label="Checkbox for following text input" {{  ($workshop->maxUsers - $workshop->users->count()) <= 0 ? 'disabled' : '' }}>
                         </span>
                            <input type="text" class="form-control" disabled aria-label="Text input with checkbox"
                                   value="{{$workshop->name}} ({{date("H:i",strtotime($workshop->startDate)) }} - {{date("H:i",strtotime($workshop->endDate))}})@if($workshop->maxUsers != 9999) - Plaatsen: {{ $workshop->maxUsers - $workshop->users->count() }} @endif">
                        </div>
                    @endforeach

                    <h2 class="text-center">Extra Opties</h2>

                    @foreach($options as $option)

                        <div class="input-group">
                        <span class="input-group-addon">
                            <input type="checkbox" value="{{$option->id}}" name="options[]"
                                   aria-label="Checkbox for following text input">
                         </span>
                            <input type="text" class="form-control" disabled aria-label="Text input with checkbox"
                                   value=" {{$option->name}} - Prijs: €{{ number_format($option->price,2) }}">
                        </div>
                    @endforeach

                </div>

                <div id="register3">

                    <h2 class="text-center">Games</h2>

                    <div class="alert alert-warning" role="alert">
                        <strong>Let op!</strong> Deze keuze is definitief.
                    </div>

                    <div class="form-group">
                        <label for="formSelect" class="control-label">Maak je keuze</label>
                        <select class="form-control" id="formSelect">
                            <option selected value="1">Ik zal niet deelnemen aan een team</option>
                            <option value="2">Ik maak mijn eigen team</option>
                            <option value="3">Ik sluit mij aan bij een bestaand team</option>
                        </select>
                    </div>

                    <!-- NEW TEAM -->

                    <div id="createTeam">

                        <h4 class="text-center">Maak je team aan</h4>

                        <div class="form-group">
                            <label for="inputGameID" class="control-label">Game</label>
                            <select class="form-control" id="inputGameID" name="gameid">
                                @foreach(App\Game::all() as $game)
                                    @if($game->isFull())
                                        <option value={{$game->id}} disabled>{{$game->name}} - volzet</option>
                                    @else
                                        <option value={{$game->id}}>{{$game->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="inputTeamName" class="control-label">Teamnaam</label>
                            <input type="text" name="teamname" class="form-control" id="inputTeamName"
                                   placeholder="Teamnaam">
                        </div>
                        <div class="form-group">
                            <label for="inputTeamName" class="control-label">Teamleden</label>
                            <input type="text" class="form-control" placeholder="E-mail" name="teammembers[]">
                            <input type="text" class="form-control" placeholder="E-mail" name="teammembers[]">
                            <input type="text" class="form-control" placeholder="E-mail" name="teammembers[]">
                            <input type="text" class="form-control" placeholder="E-mail" name="teammembers[]">
                            <small id="reminderHelp" class="form-text text-muted"><strong>Opgepast:</strong> als niet
                                alle mailvelden ingevuld zijn wordt het team publiek gemaakt!
                            </small>
                        </div>
                    </div>

                    <div id="joinTeam">

                        <h4 class="text-center">Sluit je aan bij een bestaand team</h4>

                        <div class="form-group {{ $errors->has('game') ? ' has-error' : '' }}">
                            <label for="game" class="control-label">Game</label>
                            <select name="game" id="game" class="form-control">
                                @foreach($games as $game)
                                    <option value='{{$game->id}}'>{{$game->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('game'))
                                <span class="help-block"><strong>{{ $errors->first('game') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="team" class="control-label">Publieke teams</label>
                            <div id="teamholder">
                                @if(isset($teams))
                                    @include('ajax.team', array('teams' => $teams))
                                @else
                                    Geen publieke teams beschikbaar voor deze game
                                @endif
                            </div>
                        </div>
                    </div>


                    <input type="submit" name="submitbutton" id="submit" class="btn btn-primary" value="Inschrijven">

                </div>

                <nav aria-label="Registration Navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled" id="itemRegisterPrevious"><a class="page-link" href="">←</a></li>
                        <li class="page-item active" id="itemRegister1"><a class="page-link" href="">1</a></li>
                        <li class="page-item" id="itemRegister2"><a class="page-link" href="">2</a></li>
                        <li class="page-item" id="itemRegister3"><a class="page-link" href="">3</a></li>
                        <li class="page-item" id="itemRegisterNext"><a class="page-link" href="">→</a></li>
                    </ul>
                </nav>

            </form>
        </div>
    </div>


    {{--
        <div class="alert alert-warning">
            <p><b>Opgelet!</b> Voor een team te maken moeten er minstens twee ehb en/of vub studenten geregistreerd staan in je team!</p><br>
            <p><b>Opgelet!</b> Na inschrijving is het niet meer mogelijk om je te registeren voor games!</p>
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(Session::has('err'))
            <div class="alert alert-danger">
                {{ Session::get('err') }}
            </div>
        @endif
        <br/>

        <form class="form-horizontal" method="POST" action="storeteam" id="registerteamform">
            {{ csrf_field() }}
            @foreach(App\Game::all() as $game)
                <input type="hidden" id="game{{$game->id}}players" value="{{$game->maxPlayers}}">
            @endforeach

            <h2>inschrijven als team</h2>
            <div class="line"></div>

            --}}{{-- email --}}{{--
            <div class="form-group row {{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="inputEmail" class="col-md-4 control-label">E-mail</label>
                <div class="col-md-4">
                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="E-mail" required autofocus value="{{old('email')}}"/>
                </div>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            --}}{{-- reminder email --}}{{--
            <div class="form-group row {{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="inputReminderEmail" class="col-md-4 control-label">Reminder E-mail (Deze mail wordt gebruikt voor nieuwsbrieven en is optioneel)</label>
                <div class="col-md-4">
                    <input type="text" value="{{ old('reminderemail') }}" name="reminderemail" class="form-control" id="inputReminderEmail" placeholder="Reminder E-mail">
                </div>
            </div>

            --}}{{-- firstname --}}{{--
            <div class="form-group row {{ $errors->has('firstname') ? ' has-error' : '' }}">
                <label for="inputReminderEmail" class="col-md-4 control-label">Voornaam</label>
                <div class="col-md-4">
                    <input type="text" value="{{old('firstname')}}" name="firstname" class="form-control" id="inputFirstName" placeholder="Voornaam" required/>
                </div>
            </div>
            @if ($errors->has('firstname'))
                <span class="help-block">
                        <strong>{{ $errors->first('firstname') }}</strong>
                    </span>
            @endif

            --}}{{-- lastname --}}{{--
            <div class="form-group row {{ $errors->has('lastname') ? ' has-error' : '' }}">
                <label for="inputReminderEmail" class="col-md-4 control-label">Achternaam</label>
                <div class="col-md-4">
                    <input type="text" name="lastname" class="form-control" id="inputLastName" placeholder="Achternaam" required />
                </div>
            </div>
            @if ($errors->has('lastname'))
                <span class="help-block">
                        <strong>{{ $errors->first('lastname') }}</strong>
                    </span>
            @endif

            --}}{{-- wachtwoord --}}{{--
            <div class="form-group row">
                <label for="inputReminderEmail" class="col-md-4 control-label">Wachtwoord</label>
                <div class="col-md-4">
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Wachtwoord" required />
                </div>
            </div>

            --}}{{-- wachtwoord check --}}{{--
            <div class="form-group row">
                <label for="inputReminderEmail" class="col-md-4 control-label">Wachtwoordverificatie</label>
                <div class="col-md-4">
                    <input type="password" name="verifypassword" class="form-control" id="inputPassword" placeholder="Wachtwoordverificatie" required />
                </div>
            </div>

            <!-- Activities -->
            <div class="form-group row">
                <div class="col-md-4">
                    <h3>Activiteiten</h3>
                </div>
                <div class="col-md-4">
                    <h3 class="h3left">Keynotes</h3>
                    @foreach($talks as $talk)
                        <div class="checkbox">
                            <label><input type="checkbox" name="activities[]"value="{{$talk->id}}" {{  ($talk->maxUsers - $talk->users->count()) <= 0 ? 'disabled' : '' }}>{{$talk->name}} ({{date("H:i",strtotime($talk->startDate)) }}u-{{date("H:i",strtotime($talk->endDate))}}u)
                                @if($talk->maxUsers != 9999) - Plaatsen: {{ $talk->maxUsers - $talk->users->count() }} @endif
                            </label>
                        </div>
                    @endforeach

                    <h3 class="h3left">Workshops</h3>
                    @foreach($workshops as $workshop)
                        <div class="checkbox">
                            <label><input type="checkbox" name="activities[]"value="{{$workshop->id}}" {{  ($workshop->maxUsers - $workshop->users->count()) <= 0 ? 'disabled' : '' }}>{{$workshop->name}} ({{date("H:i",strtotime($workshop->startDate)) }}u-{{date("H:i",strtotime($workshop->endDate))}}u)
                                @if($workshop->maxUsers != 9999) - Plaatsen: {{ $workshop->maxUsers - $workshop->users->count() }} @endif
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Options -->
            <div class="form-group row">
                <div class="col-md-4">
                    <h3 class="h3antifix">Extra Opties</h3>
                </div>
                <div class="col-md-4">
                    @foreach($options as $option)
                        <div class="checkbox">
                            <label><input type="checkbox" name="options[]"value="{{$option->id}}">{{$option->name}} - Prijs: €{{ number_format($option->price,2) }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-4">
                <h3>Game</h3>
            </div>
            <div class="form-group row">
                <div class="col-md-4 halfantifixfix">
                    <select name="gameid" id="inputGameID" class="form-control">
                        @foreach(App\Game::all() as $game)
                            @if($game->isFull())
                                <option value={{$game->id}} disabled>{{$game->name}} - volzet</option>
                            @else
                                <option value={{$game->id}}>{{$game->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="form-group row">
                <div class="col-md-4">
                    <h3>Team</h3>
                </div>

                <div class="col-md-4 halfantifixfix">
                    <input type="text" name="teamname" class="form-control" id="inputTeamName" placeholder="Teamnaam">
                    <div id="members">
                        <div id="team">
                            <input type="text" class="form-control" placeholder="E-mail" name="teammembers[]">
                            <input type="text" class="form-control" placeholder="E-mail" name="teammembers[]">
                            <input type="text" class="form-control" placeholder="E-mail" name="teammembers[]">
                            <input type="text" class="form-control" placeholder="E-mail" name="teammembers[]">
                        </div>
                    </div>
                    <div class="alert-info small">Opgepast: als niet alle mailvelden ingevuld zijn wordt het team publiek gemaakt!</div>
                </div>
            </div>

            <button id="submitbutton" name="submitbtton" type="button" class="btn btn-primary">Submit</button>
        </form>--}}

@endsection