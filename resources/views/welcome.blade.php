<!DOCTYPE html>
<html lang="en" dir='rtl'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>البوصلة</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<style>
    nav{
        background:black
    }
    .cover-image{
        border-radius:12px;
        display:flex;
        justify-content:center;
        margin: 20px auto;
    }
    .main-title{
        text-align:center;
        padding: 150px 0;

    }
    .text{
        text-align:center;
        text-decoration:none;
        display:flex;
        margin: auto;
        justify-content:center;

    }
</style>
<body>
<img src="{{ asset('images/one.svg') }}" style="width:100%;" alt="Image description">

  <section>
    <div class="container">
        <h1 class="main-title">شاركنا معاً لتشارك في انتخابات 2024/2025</h1>
        <a  class="text" href="{{ url('public/answers') }}">البدء من هنا لمعرفة أكثر الاحزاب تقارب </a>

        <!-- <img src="{{ asset('images/flag.jpg') }}" style="width: 900px;" class="cover-image" alt="Image description">
    </div> -->
  </section>  
  <img src="{{ asset('images/two.svg') }}" style="width:100%;position:absolute;bottom: 0;" alt="Image description">
</body>
</html>
