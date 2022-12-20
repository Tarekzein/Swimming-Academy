@extends("layouts.manager")

@section("content")
    <div class="container">

        <h1>Branch: {{$branch->name}}</h1>

        <div>
            <h1>Interns: {{count($interns)}}</h1>
        </div>
        <h1>WaterCard: {{$watercards[count($watercards)-1]->card_credit}}</h1>


    </div>


@endsection
