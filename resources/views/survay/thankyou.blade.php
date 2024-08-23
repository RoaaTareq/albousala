<!DOCTYPE html>
<html dir='rtl'>
<head>
    <title>Thank You</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body{
        padding: 120px;
    }
    ul{
        list-style-type: none;
        text-align: center;
    }
    .cont{
        margin: 12px ;
        justify-content:center;
        flex-direction:column

    }
    .con2{
        border: 4px solid orange;
    border-radius: 12px;
    margin: 12px 0;
    }
</style>
<body>
    <h1 class='text-center'>شكرا للمشاركة</h1>

    @if(session('total_score') !== null)
        <!-- Optional: Show total score if needed -->
    @endif

    <h2 class='text-center'>تقارب الاحزاب:</h2>
    <div class='text-center d-flex cont'>
        @foreach($parties->take(3) as $party)
        <div class="con2">
        <p>{{ $party->name_parties }}</p>
            @php
                $difference = abs(100 - $party->total_score);
                $differenceFrom100 = 100 - $party->total_score;
                $differenceFrom1001 = abs($differenceFrom100 - $differencess);
                $x = abs($differenceFrom1001 - 100);
            @endphp
            <p>نسبة تقاربك مع الحزب: {{ $x }} %</p>
        </div>
          
        @endforeach
</div>


</body>
</html>
