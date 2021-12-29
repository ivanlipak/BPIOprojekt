@extends('app')
@section('content')
<table class='table'>
    <tr class='table-dark'>
        <th>Ime</th>
        <th>Username</th>
        <th>Email</th>
    </tr>  

    @foreach($user as $item)
    <tr>
        <td>{{ $item -> name }}</td>
        <td>{{ $item -> username }}</td>
        <td>{{ $item -> email }}</td>
    </tr> 
    @endforeach
</table>
@endsection('content')