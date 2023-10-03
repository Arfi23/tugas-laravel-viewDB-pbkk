<!-- @dd(App\Models\GameInfo::all()) -->
<!-- @dd($games); -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Developer</th>
                    <th scope="col">Publisher</th>
                    <th scope="col">Release Date</th>
                    <th scope="col">Price</th>
                    <th scope="col">Size</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 1; ?>
                @foreach($games as $game)
                <tr>
                    <th scope="row">{{ $count++ }}</th>
                    <td>{{ $game->title }}</td>
                    <td>{{ $game->developer }}</td>
                    <td>{{ $game->publisher }}</td>
                    <td>{{ $game->release_date }}</td>
                    <td>{{ $game->price }}</td>
                    <td>{{ $game->size }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>