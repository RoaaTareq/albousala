<!DOCTYPE html>
<html dir='rtl'>
<head>
    <title>Thank You</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    ul {
        list-style-type: none;
        text-align: center;
    }
</style>
<body>
    <h1 class='text-center'>شكرا للمشاركة</h1>

    @if(session('total_score') !== null)
        <h2 class='text-center'>تقارب الاحزاب:</h2>
        <ul class='text-center'>
            @foreach($parties as $party)
                @php
                    $differenceFrom100 = 100 - $party->total_score;
                    $differenceFromUser = abs($differenceFrom100 - session('total_score'));
                    $similarity = 100 - $differenceFromUser;
                @endphp
                <li>{{ $party->name_parties }}: نسبة تقاربك مع الحزب {{ $similarity }} %</li>
            @endforeach
        </ul>
    @endif
</body>
</html>
