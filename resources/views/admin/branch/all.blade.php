@extends("layouts.dashboard")

@section("content")
    <div class="container">

        <h1>Branches List</h1>

        <x-searchbar/>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Options</th>
            </tr>
            </thead>
            <tbody class="table-body">
            @php
            $counter=0;
            @endphp
            @foreach($branches as $branch)
                <tr>
                    <th scope="row">{{++$counter}}</th>
                    <td>{{$branch->name}}</td>
                    <td>{{$branch->address}}</td>

                    <td>
                        <ul class="list-inline d-flex">
                            <li class="list-inline-item">
                                <a href="{{route("admin.branchUpdate",$branch->id)}}" class="btn btn-primary btn-sm">Edite</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{route("admin.branchDelete",$branch->id)}}" class="btn btn-danger btn-sm">Delete</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
