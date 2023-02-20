<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Type de formation</title>
        <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
        <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
        <link rel="stylesheet" href={{ asset('css/style.css') }}>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body style="background-color:aqua">


                   <div class="container">
                    <ul><h1>Formations en {{ $referenciel['libelleReferentiel'] }}</h1></ul>
                <div class="row" style="padding-left: 65px;">
                
                    @foreach ($referenciel->formations as $formation)
                        <div style="">
                            <i><p style="font-size: 30px;"> {{ $formation['nomFormation'] }}</p></i>
                            <br>
                            <p>Durée: {{ $formation['duree'] }} ans</p>
                            <br>
                            <p>Description : {{ $formation['description'] }}</p>
                            <br>
                            <a href="/formations/{{ $formation['id'] }}" class="btn btn-primary" style="width:210px;">S'inscrire à cette formation</a> <br><br><br><br>
                        </div>
                    @endforeach

                    
                </div>

    </body>
    <script src="/js/sc.js"></script>
</html>
