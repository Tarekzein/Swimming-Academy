@extends("layouts.dashboard")

@section("content")
    <div class="container">

        <h1 class="my-5">Subscriptions List</h1>
        <x-searchbar/>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Subscription</th>
                <th scope="col">Branch</th>
                <th scope="col">Options</th>
            </tr>
            </thead>
            <tbody class="table-body">
            @php
            $counter=0;
            @endphp
            @foreach($subscriptions as $s)
                @php
                    $branch=\App\Models\Branch::find($s->branchID);
                @endphp
                <tr>
                    <th scope="row">{{++$counter}}</th>
                    <td>{{$s->name}}</td>
                    <td>{{$branch->name}}</td>

                    <td>
                        <ul class="list-inline d-flex">
                            <li class="list-inline-item">
                                <a href="{{route("admin.subsUpdate",$s->id)}}" class="btn btn-primary btn-sm">Edite</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{route("admin.subsDelete",$s->id)}}" class="btn btn-danger btn-sm">Delete</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
