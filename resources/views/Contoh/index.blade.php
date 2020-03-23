<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

    <title>Latihan - {{$page}}</title>
</head>
<body>

@foreach ($semua as $row)
    <h1>{{$row->nama}}</h1>    
@endforeach

<h1>CARI : {{$cari->nama}}</h1>



<script src="{{asset('assets/js/jquery-4.3.1.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
</body>
</html>