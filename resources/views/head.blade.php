<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("assets/images/favicon.png")}}">
    <title>
        @if(isset($title))
            {{$title}}
        @else
            Staff Management
        @endif
    </title>
    <!-- Custom CSS -->
    <link href="{{asset("assets/libs/flot/css/float-chart.css")}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/extra-libs/multicheck/multicheck.css")}}">
    <link href="{{asset("assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css")}}" rel="stylesheet">
    <link href="{{asset("dist/css/style.min.css")}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/libs/select2/dist/css/select2.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/libs/jquery-minicolors/jquery.minicolors.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/libs/quill/dist/quill.snow.css")}}">

    <!-- Custom CSS -->
    <link href="{{asset("dist/css/style.min.css")}}" rel="stylesheet">
{{--    <link rel="stylesheet" href="{{asset("bootstrap/css/bootstrap.css")}}">--}}

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
