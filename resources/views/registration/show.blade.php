@extends('layouts.register')

@section('head')
  <title>Dashboard</title>
@stop

@section('content')
  <h2>Jouw info</h2>
  <div class="line"></div>
  <div class="col-md-6">
    <ul class="list-unstyled">
      <li class="list-group-item"><b>Voornaam: </b>{{ $user->firstName }}</li>
      <li class="list-group-item"><b>Achternaam: </b>{{ $user->lastName }}</li>
      <li class="list-group-item"><b>E-mailadres: </b>{{ $user->email }}</li>
      @if(!empty($user->reminderMail))
        <li class="list-group-item"><b>Reminder E-mailadres: </b>{{ $user->reminderMail }}</li>
      @endif
    </ul>


      <h2>Wijzig activiteiten</h2>
      <div class="line"></div>
      <form method="POST" action="editActivities">
          {{ csrf_field() }}
            @foreach($allActivities as $activity)
              <div class="checkbox">
                  <label><input type="checkbox" name="activities[]"value="{{$activity->id}}" {{ $activities->contains($activity->id) ? 'checked' : '' }} {{  ($activity->maxUsers - $activity->users->count()) <= 0 && !($activities->contains($activity->id)) ? 'disabled' : '' }}>{{$activity->name}} ({{date("H:i",strtotime($activity->startDate)) }}u-{{date("H:i",strtotime($activity->endDate))}}u)
                      @if($activity->maxUsers != 9999) - Plaatsen: {{ $activity->maxUsers - $activity->users->count() }} @endif
                  </label>
              </div>
          @endforeach
          <button id="submitbutton" name="submitbtton" type="submit" class="btn btn-primary">Activitieten opslaan</button>
      </form>

      <h2>Wijzig opties</h2>
      <div class="line"></div>
      <form method="POST" action="editOptions">
          {{ csrf_field() }}
          @foreach($allOptions as $option)
              <div class="checkbox">
                  <label><input type="checkbox" name="options[]"value="{{$option->id}}" {{ $options->contains($option->id) ? 'checked' : '' }} >
                      @if ($option->hasPrice)
                          {{ $option->name . ": €" . number_format($option->price,2) }}
                      @else
                          {{ $option->name . ": gratis" }}
                      @endif

                  </label>
              </div>
          @endforeach
          <button id="submitbutton" name="submitbtton" type="submit" class="btn btn-primary">Opties opslaan</button>
      </form>
  </div>



  <div class="col-md-6">
    @if(isset($user->team) && isset($user->team[0]->game))


      <ul class="list-unstyled">
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


    {{--@else
          <form class="form-horizontal" method="POST" action="storeTeamExistingUser">

              {{ csrf_field() }}
              @foreach(App\Game::all() as $game)
                  <input type="hidden" id="game{{$game->id}}players" value="{{$game->maxPlayers}}">
              @endforeach


              <h2>Inschrijven voor een game</h2>


                  <select name="gameid" id="inputGameID" class="form-control">
                      @foreach(App\Game::all() as $game)
                          @if($game->isFull())
                              <option value={{$game->id}} disabled>{{$game->name}} - volzet</option>
                          @else
                              <option value={{$game->id}}>{{$game->name}}</option>
                          @endif
                      @endforeach
                  </select>





                  <h2>Team</h2>



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



          <button id="submitbutton" name="submitbtton" type="submit" class="btn btn-primary">Submit</button>
          </form>

          @stop

      @section('scripts')
          <script type="text/javascript" src="{{ asset('js/storeTeam.js') }}"></script>--}}
    @endif
  </div>
@stop
