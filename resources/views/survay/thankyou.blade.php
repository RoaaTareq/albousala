<!DOCTYPE html>
<html dir='rtl'>
<head>
    <title>Results</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h2 class="text-center">نتائج الاستطلاع</h2>
    <ul class="text-center">
        @foreach($parties as $party)
            <li>{{ $party->name_parties }}</li>
            <li>نسبة تقاربك مع الحزب: {{ $party->difference }} %</li>
        @endforeach
    </ul>
</body>
</html>
