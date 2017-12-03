<head>
    <title>Persoon zoeken</title>
</head>
<body>


    <div class="form-group col-md-12">
        <label for="editactivity_desc">Zoek een gebruiker</label>
        <input id="zoekbalk" name="desc" class="form-control"
                  rows="4"></input>
    </div>

        <ul id="naamlijst">

            <!-- DE CODE HIERONDER WORDT GELADEN PER GEVONDEN USER MET FOR EACH, ID ALS HIDDEN INPUT -->

            {{--<form method="POST" action="editSteamID">
                {{ csrf_field() }}
                <li class="list-group-item"><b>Voornaam Naam </b>
                    <input type="hidden" class=“form-control” name="userId" id="userID"/>
                    <button style="margin-left:5px;" name="submitbutton" type="submit" class="btn btn-primary">Print User en zet op aanwezig!</button>
                </li>

            </form>--}}
        </ul>

</body>
@section('scripts')
    <script>
        //dees is kaka
    </script>
@stop
