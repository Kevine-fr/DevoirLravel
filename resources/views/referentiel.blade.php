<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Référentiel de formation</title>
        <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
        <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
        <link rel="stylesheet" href={{ asset('css/style.css') }}>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body >
                <div class="container mt-4 col-md-5" style="border:none; background-image: url(image/images.jfif);" >

                 <br>

                 
                        <ul><p class="text-center" style="font-weight:600; font-size:25px;">Choisir le référentiel de formation:</p></ul>

                            <br><br><br>
                    <div>
                        @foreach ($type->referentiels as $referentiel)
                                <div class="mt-4">
                                <ul><a style="margin-left:100px;" href="/referentiels/{{ $referentiel['id'] }}" class="btn btn-primary" style="width:200px;">{{ $referentiel['libelleReferentiel'] }}</a></ul>
                                    
                                </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="/js/sc.js"></script>
</html>

