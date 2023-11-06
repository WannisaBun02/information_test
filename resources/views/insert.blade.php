<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body style="background-color: #D6CC99; ">
    <div class="container py-2">
        <h2 style="color: #001524;">เพิ่มข้อมูล</h2>
        <form action="insertt" method="POST">
            @csrf
            <div class="container h-100 d-flex justify-content-center">
                <div class="form-group" style="width:60%;">
                    <label for="name">ชื่อ</label>
                    <input type="text" name="name" class="form-control">
                </div>&nbsp;
                <div class="form-group" style="width:30%;">
                    <label for="age">อายุ</label>
                    <input type="text" name="age" class="form-control">
                </div>&nbsp;
                <div class="form-group" style="width:30%;">
                    <label for="gender">เพศ</label>
                    <select class="form-select" aria-label="Default select example" name="gender">
                        <option selected>เลือกเพศ</option>
                        <option value="M">ชาย</option>
                        <option value="F">หญิง</option>
                    </select>
                </div>&nbsp;
            </div><br>
            @error('name')
                <div class="my-2">
                    <span class="text text-danger">{{ $message }}</span>
                </div>
            @enderror
            @error('age')
                <div class="my-2">
                    <span class="text text-danger">{{ $message }}</span>
                </div>
            @enderror
            @error('gender')
                <div class="my-2">
                    <span class="text text-danger">{{ $message }}</span>
                </div>
            @enderror
            <a href="/" class="btn" style="background-color: #001524; color: #D6CC99;">กลับไปหน้าแรก</a>
            <input type="submit" class="btn" style="background-color: #445D48; color: #D6CC99;" value="บันทีก">
        </form><br>

    </div>

</body>

</html>
