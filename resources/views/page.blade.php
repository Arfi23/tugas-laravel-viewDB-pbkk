<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
  <body>
        <h3 class="mt-3 ms-4 text-white">Games Data</h3>
        <table class="table table-bordered table-dark table-striped container mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Developer</th>
                    <th scope="col">Publisher</th>
                    <th scope="col">Release Date</th>
                    <th scope="col">Price (in IDR)</th>
                    <th scope="col">Size</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php $count = 1; ?>
                @foreach($games as $game)
                <tr>
                    <th scope="row">{{ $count++ }}</th>
                    <td>{{ $game->title }}</td>
                    <td>{{ $game->developer }}</td>
                    <td>{{ $game->publisher }}</td>
                    <td>{{ \Carbon\Carbon::parse($game->release_date)->format('d F Y')}}</td>
                    <td>Rp {{ $game->price }}</td>
                    <td>{{ $game->size }} GB</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>