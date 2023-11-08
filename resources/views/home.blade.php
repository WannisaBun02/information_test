<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- css -->
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="navbar " style="background-color: #F6F1F1; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.034);">
        <div class="container-fluid">
            <h1>Information</h1>
            <form class="d-flex">
                <a href="login" class="btn" style="background-color: #000000; color: #F6F1F1;">เข้าสู่ระบบ</a>
            </form>
        </div>
    </nav>
    <div class="container py-3">
        @if (count($user_names) > 0)
            <h2>รายชื่อ</h2>
            <div class="container_f">
                @foreach ($user_names as $item)
                    <div class="box_user">
                        ชื่อ : {{ $item->name }}<br>
                        อายุ : {{ $item->age }}<br>
                    </div>
                @endforeach
            </div><br>
            {{ $user_names->links() }}
        @else
            <h2>ไม่พบรายชื่อ</h2>
        @endif
    </div>
</body>

</html>
