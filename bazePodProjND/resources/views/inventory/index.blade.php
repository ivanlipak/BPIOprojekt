@extends('app')
@section('content')
<table class='table'>
    <tr class='table-dark'>
        <th>Id</th>
        <th>Količina</th>
    </tr>  

    @foreach($inventory as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->quantity }}</td>
    </tr> 
    @endforeach
</table>
@endsection('content')