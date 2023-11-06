<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body style="background-color: #D6CC99; ">
<nav class="navbar " style="background-color: #445D48; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);">
  <div class="container-fluid">
    <h1 style="color: #001524;">Information</h1>
    <form class="d-flex" >
      <a href="insert" class="btn" style="background-color: #001524; color: #D6CC99;">เพิ่มข้อมูล</a>
    </form>
  </div>
</nav>
    <div class="container py-3">
        <h2 style="color: #001524;">รายชื่อ</h2>
        <div>
            <table style="width:100%;" class="table table-bordered ">
                <tr class="table-dark text-center" >
                    <th>ชื่อ</th>
                    <th>อายุ</th>
                    <th>เพศ</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>
               @foreach ($user_names as $item)
                <tr class="table-group-divider">
                    <td>{{$item->name}}</td>
                    <td>{{$item->age}}</td>
                    <td>{{$item->gender}}</td>
                    <td><a href="#" name="edit_in" id="edit_in" class="btn" style="background-color: #445D48; color: #D6CC99;">แก้ไข</a></td>
                    <td><a href="{{route('delete',$item->id)}}" name="de_in" id="de_in" class="btn" style="background-color: #001524; color: #D6CC99;" onclick="return confirm('คุณต้องการลบชื่อ {{$item->name}} หรือไม่ ?')">ลบ</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>