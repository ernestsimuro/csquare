<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>backpack Application </title>
</head>
<h3>This is the delete items</h3>

<form class="form-signin" role="form" method="get" action="{{ url('/my_delete') }}">
    <input type="text" name="removeId" >
    <input type="submit" value="Submit">
</form>