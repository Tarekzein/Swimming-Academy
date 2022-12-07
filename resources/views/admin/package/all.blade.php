@extends("layouts.dashboard")

@section("content")
    <div class="container">

        <h1>Packages List</h1>
        <x-searchbar/>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Branch</th>
                <th scope="col">Subscription</th>
                <th scope="col">Package Name</th>
                <th scope="col">Sessions</th>
                <th scope="col">Price</th>
                <th scope="col">Options</th>
            </tr>
            </thead>
            <tbody class="table-body">
            @php
                $counter=0;
            @endphp
            @foreach($packages as $p)
                @php
                    $subs=\App\Models\SubscriptionType::find($p->subsID);
                    $branch=\App\Models\Branch::find($subs->branchID);
                @endphp
                <tr>
                    <th scope="row">{{++$counter}}</th>
                    <td>{{$branch->name}}</td>
                    <td>{{$subs->name}}</td>
                    <td>{{$p->package_name}}</td>
                    <td>{{$p->sessions_number}}</td>
                    <td>{{$p->price}}</td>

                    <td>
                        <ul class="list-inline d-flex">
                            <li class="list-inline-item">
                                <a href="{{route("admin.packageUpdate",$p->id)}}" class="btn btn-primary btn-sm">Edite</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{route("admin.packageDelete",$p->id)}}" class="btn btn-danger btn-sm">Delete</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
