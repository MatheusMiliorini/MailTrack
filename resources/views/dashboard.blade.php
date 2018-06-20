<!doctype html>
<html lang="{{ app()->getLocale() }}" class="alto">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>MM MailTrack Dashboard</title>

    <style>
        .largo {
            width:100%;
        }
        .alto {
            height:100%
        }
    </style>
  </head>
  <body class="alto">
    
    <div class="container">
        <div class="col-sm">
            <table class="table">
                <thead class="thead-dark">
                    <th>Name</th>
                    <th>TrackID</th>
                    <th>Created at</th>
                    <th>Read count</th>
                    <th>First access</th>
                    <th>Last access</th>
                </thead>
                <tbody>
                    @foreach ($dados as $dado)
                        <tr>
                            <td>{{$dado->observacao}}</td>
                            <td>{{$dado->trackID}}</td>
                            <td>{{$dado->data_criacao}}</td>
                            <td>{{$dado->contagem_acessos}}</td>
                            <td>{{$dado->primeiro_acesso}}</td>
                            <td>{{$dado->ultimo_acesso}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <a class="btn btn-outline-info" href="/new/TrackID/" role="button">Create new TrackID</a>
        </div> 
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>