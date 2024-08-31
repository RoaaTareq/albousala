<!DOCTYPE html>
<html dir='rtl'>
<head>
    <title>Thank You</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    ul{
        list-style-type:none;
    }
    </style>
<body>
    <h1 class="text-center">شكرا للمشاركة</h1>

    <h2 class="text-center">تقارب الاحزاب:</h2>
    <ul class="text-center">
        @foreach($parties as $index => $party)
            <li>{{ $party->name_parties }}</li>
            <li>نسبة تقاربك مع الحزب: {{ abs($differences[$index]) }} %</li>
        @endforeach
    </ul>
</body>
</html>
