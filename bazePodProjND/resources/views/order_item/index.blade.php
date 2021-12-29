@extends('app')
@section('content')
<table class='table'>
    <tr class='table-dark'>
        <th>ID</th>
        <th>Order ID</th>
        <th>Proizvod id</th>
    	<th>Količina</th>
    </tr>  

    @foreach($order_item as $item)
    <tr>
        <td>{{  $item -> id }}</td>
        <td>{{  $item -> order_id }}</td>
        <td>{{  $item -> product_id }}</td>
        <td>{{  $item -> amount }}</td>
    </tr> 
    @endforeach
</table>
@endsection('content')