<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
<table class="table mt-5">
   <thead class="bg-danger text-white fw-bold">
   <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Reg no</th>
    <th>Batch no</th>
   </thead> 
   <tbody>
    @foreach($sinfo as $item)
    <tr>
        <td>{{$item['sid']}} </td>
        <td>{{$item['sname']}} </td>
        <td>{{$item['semail']}} </td>
        <td>{{$item['sreg']}} </td>
        <td>{{$item['sbatch']}} </td>

    </tr>
   </tbody>
   @endforeach
</table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js
"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>