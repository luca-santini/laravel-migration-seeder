@extends('layouts.app')

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        @section('content')
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <table class="table">
                            <thead>
                                <tr>
                                   <th scope="col">ID</th>
                                   <th scope="col">Tipo</th>
                                   <th scope="col">Taglia</th>
                                   <th scope="col">Prezzo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lista_vestiti as $cloth)
                                <tr>
                                   <td> {{ $cloth->id }} </td>
                                   <td> {{ $cloth->tipo }} </td>
                                   <td> {{ $cloth->taglia }} </td>
                                   <td> {{ $cloth->prezzo }} </td>
                                </tr>
                           @endforeach

                        </div>
                    </div>
                </div>
            </div>
        @endsection


    </body>
</html>
