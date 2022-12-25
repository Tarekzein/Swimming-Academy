@extends("layouts.dashboard")

@section("content")
    <div class="container">

        <div class="d-flex my-5 align-items-center position-relative">

        <h1>Outcome List</h1>

        <x-searchbar/>
        </div>


        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Academy</th>
                <th scope="col">Branch</th>
                <th scope="col">Outcome Type</th>
                <th scope="col">Value</th>
                <th scope="col">Date</th>
                <th scope="col">Options</th>
            </tr>
            </thead>
            <tbody class="table-body">
            @php
                $counter=0;
            @endphp
            @foreach($outcomes as $p)
                @php
                    $academy=\App\Models\Academy::find($p->academyID);
                    $branch=\App\Models\Branch::find($p->branchID);
                @endphp
                <tr>
                    <th scope="row">{{++$counter}}</th>
                    <td>{{$academy->name}}</td>
                    <td>{{$branch->name}}</td>
                    <td>{{$p->outcomeType}}</td>
                    <td>{{$p->value}} EGP</td>
                    <td>{{$p->outcomeDate}}</td>

                    <td>
                        <ul class="list-inline d-flex">
                            <li class="list-inline-item">
                                <a href="{{route("admin.outcomeUpdate",$p->id)}}" class="btn btn-primary btn-sm">Edite</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{route("admin.outcomeDelete",$p->id)}}" class="btn btn-danger btn-sm">Delete</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
