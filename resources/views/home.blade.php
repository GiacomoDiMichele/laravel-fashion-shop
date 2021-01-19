<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Dresses</title>
    </head>
    <body>
        <div class="dresses-container">
            <ul class="">
                @foreach ($dresses as $dress)
                    <li>{{ $dress->colore }}</li>
                    <li>{{ $dress->taglia }}</li>
                    <li>{{ $dress->sesso }}</li>
                @endforeach
            </ul>
        </div>
    </body>
</html>
