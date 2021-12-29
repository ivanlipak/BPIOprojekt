@extends('app')
@section('content')
<table class='table'>
    <tr class='table-dark'>
        <th>ID</th>
        <th>User ID</th>
        <th>Adresa</th>
        <th>Grad</th>
        <th>Post_br</th>
    </tr>  

    @foreach($user_address as $item)
    <tr>
        <td>{{ $item -> id }}</td>
        <td>{{ $item -> users_id }}</td>
        <td>{{ $item -> address1 }}</td>
        <td>{{ $item -> city }}</td>
        <td>{{ $item -> post_nr }}</td>
    </tr> 
    @endforeach
</table>
@endsection('content')