<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Verify</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>
    <body class="antialiased">
        <form method="POST">
              @csrf
              <h1>Simple Form</h1>
            <div class="form-group">
                <h1>Enter a number greater than 10</h1>
                <input class="form-control" placeholder="số ne" name="number">
            </div>

            <button type="submit" class="btn btn-primary">GO GO</button>
        </form>
    </body>
</html>
