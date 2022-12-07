@extends("layouts.dashboard")

@section("content")
    <div class="container">

        <h1>Promocode List</h1>
        <x-searchbar/>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Academy</th>
                <th scope="col">Branch</th>
                <th scope="col">Promo Code</th>
                <th scope="col">Discount Percent</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Date</th>
                <th scope="col">Options</th>
            </tr>
            </thead>
            <tbody class="table-body">
            @php
                $counter=0;
            @endphp
            @foreach($promocodes as $p)
                @php
                    $academy=\App\Models\Academy::find($p->academyID);
                    $branch=\App\Models\Branch::find($p->branchID);
                @endphp
                <tr>
                    <th scope="row">{{++$counter}}</th>
                    <td>{{$academy->name}}</td>
                    <td>{{$branch->name}}</td>
                    <td>{{$p->code}}</td>
                    <td>{{$p->discount_percent}}</td>
                    <td>{{$p->start_date}}</td>
                    <td>{{$p->end_date}}</td>

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
