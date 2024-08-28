<!DOCTYPE html>
<html dir='rtl'>
<head>
    <title>Thank You</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<style>
    ul{
        list-style-type: none;
        text-align:center;
    }
    </style>
<body>
    
    <h1 class='text-center'>شكرا    للمشاركة</h1>

    <!-- @if(session('success'))
        <p class='text-center'>{{ session('success') }}</p>
    @endif -->

    @if(session('total_score') !== null)
        <!-- <p class='text-center'> نتيجتك:  {{ session('total_score') }} % </p> -->
        <!-- <ul>
            <li>مجموعك: {{ $differencess }}</li>
        </ul> -->
    @endif

    <h2 class='text-center'>تقارب الاحزاب:</h2>
    <ul class='text-center'>
        @foreach($parties as $party)
            <li>{{ $party->name_parties }}: {{ $party->total_score }}</li>
            <li>{{ $party->name_parties }}</li>
            @php
                $difference = abs(100 - $party->total_score);
                $differenceFrom100 = 100 - $party->total_score;
                $differenceFrom1001 = abs($differenceFrom100 - $differencess);
                $x=abs($differenceFrom1001-100)
            @endphp
            <li>Difference from Party Score: {{ $difference }}</li> 
            <li>Difference from 100: {{ $differenceFrom100 }}</li>
             <li>تففف {{ $differenceFrom1001 }}</li>
            <li> نسبة تقاربك مع الحزب{{ $x }} %</li>
        @endforeach
    </ul>
</body>
</html>
