<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>backpack Application </title>
</head>
<h3>This is the  items to find</h3>

<form class="form-signin" role="form" method="get" action="{{ url('/my_find') }}">
    <input type="text" name="findItem" >
    <input type="submit" value="Submit">
</form>