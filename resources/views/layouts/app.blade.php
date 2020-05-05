<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <title>The Trendy Home Collective</title>
    <link href="{{url('bootstrap-4.1.3-dist/css/bootstrap.css')}}" type="text/css" rel="stylesheet">
    <link href="{{url('/css/style.css')}}" type="text/css" rel="stylesheet">
    <link href="{{url('/css/contact.css')}}" type="text/css" rel="stylesheet">
    <link href="{{url('/css/team.css')}}" type="text/css" rel="stylesheet">
    <link href="{{url('/css/projects.css')}}" type="text/css" rel="stylesheet">
    <link href="{{url('/css/fixed.css')}}" type="text/css" rel="stylesheet">
    <link href="{{url('/css/responsive.css')}}" type="text/css" rel="stylesheet">
    <link href="{{url('/slick/slick.css')}}" type="text/css" rel="stylesheet">
    <link href="{{url('/slick/slick-theme.css')}}" type="text/css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbarResponsive">

@include('includes.home')
@include('includes.about')
@include('includes.projects')
@include('includes.clients')
@include('includes.contact')
@include('includes.socialIcons')
@include('includes.footer')

<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="{{ asset('js/image-slider.js')}}"></script>
<script src="{{ asset('slick/slick.min.js')}}"></script>
<script src="{{ asset('js/slick.js')}}"></script>
<script src="{{ asset('js/main.js')}}"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>

</body>
</html>
