@extends('layouts.app')
@section('content')
<table class="table table-condensed">
    <thead>
    <tr>
        <th>Item Name</th>
        <th>Duration Assigned</th>
        <th>Serial Number</th>
        <th>Issued By</th>
    </tr>
    </thead>
    <tbody>

    @if(count($assets) > 0)

        @foreach ($assets as $asset)
            <tr>
                <td>{{$asset->ItemName}}</td>
                <td>{{$asset->duration}}</td>
                <td>{{$asset->serialNumber}}</td>
                <td>Admin</td>
                <td></td>
                <td></td>

            </tr>
        @endforeach
    @endif
    </tbody>

</table>
@endsection

