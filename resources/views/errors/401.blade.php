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
                                    <i class="ace-icon fa fa-certificate"></i>
                                </span>
                                Neovlaštena licenca
                            </h1>
                            <hr />
                            <h2>{{ $exception->getMessage() }}:</h2>
                            <hr class="hr-2" />
                                <ul class="list-unstyled spaced inline bigger-110 margin-15">
                                    <li>
                                        <i class="ace-icon fa fa-hand-o-right blue"></i>
                                        Kod više nije važeći
                                    </li>
                                    <li>
                                        <i class="ace-icon fa fa-hand-o-right blue"></i>
                                        Redovna licenca je istekla
                                    </li>

                                    <li>
                                        <i class="ace-icon fa fa-hand-o-right blue"></i>
                                        Podrška je istekla
                                    </li>
                                </ul>

                            <hr class="hr-2" />
                            <h2>Solution:</h2>
                            <hr class="hr-2" />
                            <ul class="list-unstyled spaced inline bigger-110 margin-15">
                                <li>
                                    <i class="ace-icon fa fa-hand-o-right blue"></i>
                                    Unesite ispravan kod kupovine na .env varijablu PURCHASE_CODE
                                </li>
                                <li>
                                    <i class="ace-icon fa fa-hand-o-right blue"></i>
                                    <a href="https://codecanyon.net/item/unlimited-edu-firm-school-college-information-management-system/21850988" target="_blank">Buy New License</a>
                                </li>

                                <li>
                                    <i class="ace-icon fa fa-hand-o-right blue"></i>
                                    <a href="http://unlimitededufirm.com/support" target="_blank">Kontaktirajte programera za podršku.</a>
                                    <p>
                                        Kontakt:Meho.Solutions<br>
                                        Viber:+38761206599
                                    </p>
                                </li>
                            </ul>
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
