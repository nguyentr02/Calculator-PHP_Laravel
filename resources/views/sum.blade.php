<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Calculator</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>
    <body class="antialiased">
        <form method="POST">
              @csrf
            <div class="form-group">
                <h1>Enter so A</h1>
                <input type="number" class="form-control" placeholder="số A" name="soA">
            </div>
            <div>
                <h1>Enter so B</h1>
                <input type="number" class="form-control" placeholder="số B" name="soB">
            </div>

            <button type="submit" class="btn btn-primary">GO GO</button>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Kết quả" disabled="" value="<?php if (isset($sum)) echo $sum; ?>">
            </div>
        </form>
    </body>
</html>
