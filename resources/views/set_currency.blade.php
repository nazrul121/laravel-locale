<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
    $currencies = \DB::table('currencies')->get();
?>


@include('header')

  
<div class="container">
  <h3>ABout us page</h3>
  <p>This example adds a dropdown menu for the "Page 1" button in the navigation bar.</p>

    @foreach (config('app.locales') as $locale)
        <li>
            <a href="{{ route('set-language',  ['lang' => $locale]) }}">{{ strtoupper($locale) }}</a>
        </li>
    @endforeach
</div>

</body>
</html>
