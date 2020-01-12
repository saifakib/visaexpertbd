<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
	<meta name="author" content="Super User" />
	<meta name="keywords" content="" >
    <meta name="description" content="" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{ asset('assets/img/companyInfo/favicon.png') }}" rel="shortcut icon" type="image/x-icon"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')  {{ config('app.name', 'VisaExpert BD') }}</title>


    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">
    
    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">    
	

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet">
    
    <!-- Bootstrap CSS File -->
    <link href="{{ asset('assets/lib/bootstrap/css/bootstrap.css') }}" rel="stylesheet">    
  
    <!-- Libraries CSS Files -->
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">
	<script src="{{ asset('assets/js/jqueryV1.min.js') }}"></script>
    
    <!-- Main Stylesheet File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/lib/bootstrap/css/bootstrap-override.css') }}" rel="stylesheet"/>
		
	@stack('css')

</head>