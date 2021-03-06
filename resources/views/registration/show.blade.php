@extends('layouts.register')

@section('title')
    <title>Profiel</title>
@endsection

@section('content')

    <div class="card">
        <div class="card-body">
            <img class="card-img-top" src="img/ehackb.png" alt="EhackB Logo">
            <h2 class="text-center">Profiel</h2>
            <ul class="list-group">
                <li class="list-group-item"><b>Voornaam: </b>{{ $user->firstName }}</li>
                <li class="list-group-item"><b>Achternaam: </b>{{ $user->lastName }}</li>
                <form method="POST" action="editSteamID">
                    {{ csrf_field() }}
                    <li class="list-group-item"><b>SteamID: </b>
                        <input type="text" class=“form-control” name="steamid" id="steamid" required value="{{ $user->steamid }}"/>
                        <button style="margin-left:5px;" id="editSteamID" name="submitbutton" type="submit" class="btn btn-primary">Wijzig SteamID</button>

                    </li>

                </form>
                <li class="list-group-item"><b>E-mailadres: </b>{{ $user->email }}</li>
                @if(!empty($user->reminderMail))
                    <li class="list-group-item"><b>Reminder E-mailadres: </b>{{ $user->reminderMail }}</li>
                @endif
            </ul>

            @if(isset($user->team) && isset($user->team[0]->game))
                <h2 class="text-center">Team</h2>
                <ul id="teamProfile" class="list-group">
                    <li class="list-group-item"><b>{{ $user->team[0]->game->name . ": " . $user->team[0]->name }}</b></li>
                    @if(isset($user->team[0]->users))
                        <li class="list-group-item"><b>Leden</b></li>
                        @foreach($user->team[0]->users as $member)
                            <li class="list-group-item">{{ $member->firstName . " " . $member->lastName . " | " . $member->email }}</li>
                        @endforeach
                    @endif
                    @if(isset($user->team[0]->invites))
                        <li class="list-group-item"><b>Pending Invites</b></li>
                        @foreach($user->team[0]->invites as $invite)
                            <li class="list-group-item">{{ $invite->email }}</li>
                        @endforeach
                    @endif
                </ul>
            @endif

            <h2 class="text-center">Activiteiten</h2>
            <form class="profileEdit" method="POST" action="editActivities">
                {{ csrf_field() }}
                @foreach($allActivities as $activity)
                    <div class="input-group">
                        <span class="input-group-addon">
                            <input type="checkbox" value="{{$activity->id}}" name="activities[]"
                                   aria-label="Checkbox for following text input"{{ $activities->contains($activity->id) ? 'checked' : '' }} {{  ($activity->maxUsers - $activity->users->count()) <= 0 && !($activities->contains($activity->id)) ? 'disabled' : '' }}>
                         </span>
                        <input type="text" class="form-control" disabled aria-label="Text input with checkbox"
                               value="{{$activity->name}} ({{date("H:i",strtotime($activity->startDate)) }}u-{{date("H:i",strtotime($activity->endDate))}}u)@if($activity->maxUsers != 9999) - Plaatsen: {{ $activity->maxUsers - $activity->users->count() }} @endif">
                    </div>
                @endforeach
                <button id="submitbutton" name="submitbtton" type="submit" class="btn btn-primary">Activiteiten opslaan</button>
            </form>

            <h2 class="text-center">Opties</h2>
            <form class="profileEdit" method="POST" action="editOptions">
                {{ csrf_field() }}
                @foreach($allOptions as $option)
                    <div class="input-group">
                        <span class="input-group-addon">
                            <input type="checkbox" value="{{$option->id}}" name="options[]"
                                   aria-label="Checkbox for following text input"{{ $options->contains($option->id) ? 'checked' : '' }}>
                         </span>
                        <input type="text" class="form-control" disabled aria-label="Text input with checkbox"
                               value="@if ($option->hasPrice){{$option->name . ": €" . number_format($option->price,2) }}@else{{ $option->name . ": gratis" }}@endif">
                    </div>
                @endforeach
                <button id="submitbutton" name="submitbtton" type="submit" class="btn btn-primary">Opties opslaan</button>
            </form>

        </div>
    </div>

@endsection
