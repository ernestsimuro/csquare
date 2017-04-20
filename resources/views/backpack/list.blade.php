<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>backpack Application </title>
</head>

<h3>This is the list items</h3>
    <table >
    <tr>
        <th>id</th>
        <th>Item Name</th>
    </tr>

@foreach ($list as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->bp_item }}</td>
    </tr>
@endforeach
</table>


