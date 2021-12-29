@extends('app')
@section('content')
<table class='table'>
    <tr class='table-dark'>
        <th>ID</th>
        <th>ID USERA</th>
        <th>TOTAL</th>
    </tr>  

    @foreach($shopping_session as $item)
    <tr>
        <td>{{ #$item -> id }}</td>
        <td>{{ #$item -> users_id }}</td>
        <td>{{ #$item -> total}}</td>
    </tr> 
    @endforeach
</table>
@endsection('content')