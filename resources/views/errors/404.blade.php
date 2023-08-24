@extends('layouts.master')

@section('css')
@endsection

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->

                    <div class="error-container">
                        <div class="well">
                            <h1 class="grey lighter smaller">
                                <span class="blue bigger-125">
                                    <i class="ace-icon fa fa-sitemap"></i>
                                    404
                                </span>
                                Stranica nije pronađena
                            </h1>
                            <hr />
                            <h2>{{ $exception->getMessage() }}</h2>
                            <hr />
                            <h3 class="lighter smaller">Svuda smo tražili, ali nismo mogli da ga nađemo!</h3>

                            <div>
                                <form class="form-search" method="get" action="http://www.google.com/search">
                                    <span class="input-icon align-middle">
                                        <i class="ace-icon fa fa-search"></i>

                                        <input name="q" type="text" class="search-query" placeholder="Give it a search..." value="404 Page Not Found" />
                                    </span>
                                    <button class="btn btn-sm" type="submit">Idi!</button>
                                </form>

                                <div class="space"></div>
                                <h4 class="smaller">Pokušajte nešto od sljedećeg:</h4>

                                <ul class="list-unstyled spaced inline bigger-110 margin-15">
                                    <li>
                                        <i class="ace-icon fa fa-hand-o-right blue"></i>
                                        Ponovo provjerite url za greške u kucanju
                                    </li>

                                    <li>
                                        <i class="ace-icon fa fa-hand-o-right blue"></i>
                                        pročitajte FAQ
                                    </li>

                                    <li>
                                        <i class="ace-icon fa fa-hand-o-right blue"></i>
                                        Javite nam
                                    </li>
                                </ul>
                            </div>

                            <hr />
                            <div class="space"></div>

                            <div class="center">
                                <a href="javascript:history.back()" class="btn btn-grey">
                                    <i class="ace-icon fa fa-arrow-left"></i>
                                    Nazad
                                </a>

                                <a href="{{ route('home') }}" class="btn btn-primary">
                                    <i class="ace-icon fa fa-tachometer"></i>
                                    Kontrolna ploča
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div><!-- /.main-content -->
@endsection


@section('js')
@endsection
{{--

<!DOCTYPE html>
<html>

<head>
    <title>404</title>
    <link href = "https://fonts.googleapis.com/css?family=Lato:100" rel = "stylesheet"
          type = "text/css">

    <style>
        html, body {
            height: 100%;
        }
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }
        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }
        .content {
            text-align: center;
            display: inline-block;
        }
        .title {
            font-size: 72px;
            margin-bottom: 40px;
        }
    </style>

</head>
<body>

<div class = "container">
    <div class = "content">
        <div class = "title">404 Error</div>
    </div>
</div>

</body>
</html>
--}}
