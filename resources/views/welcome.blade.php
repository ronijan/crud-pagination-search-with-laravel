<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Affenfels Test Aufgabe</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="container mb-5">
    <div class="row mt-5">
        <div class="col-md-12">

            <h3>Alle Artikeln</h3>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Teaserbild</th>
                    <th scope="col">Dachzeile</th>
                    <th scope="col">Überschrift</th>
                    <th scope="col">Teasertext</th>
                    <th scope="col">Actions</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>

                @foreach($articles as $article)
                    <tr>
                        <th scope="row">{{$article->id}}</th>
                        <td>{{$article->teaserbild}}</td>
                        <td>{{$article->dachzeile}}</td>
                        <td>{{$article->ueberschrift}}</td>
                        <td>{{$article->teasertext}}</td>
                        <td class="text-right">
                            <a href="#">view</a>
                        </td>
                        <td class="text-right">
                            <a href="#" class="text-danger">delete</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
