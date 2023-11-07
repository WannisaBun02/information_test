<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    {{-- CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- css -->
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container py-2">
        <h2>แก้ไขข้อมูล</h2>
        <form action="{{ route('update', $user_names->id) }}" method="POST">
            @csrf
            <div class="box_insert">
                <div>
                    <div class="" style="">
                        <label for="name">ชื่อ</label>
                        <input type="text" name="name" class="form-control" value="{{ $user_names->name }}">
                    </div>&nbsp;
                    <div class="container_f">
                        <div class="" style="">
                            <label for="age">อายุ</label>
                            <input type="text" name="age" class="form-control" value="{{ $user_names->age }}">
                        </div>&nbsp;
                        <div class="" style="">
                            <label for="gender">เพศ</label>
                            <select class="form-select" aria-label="Default select example" name="gender">
                                <option selected>เลือกเพศ</option>
                                <option value="M" @if ($user_names->gender == 'M') selected @endif>ชาย</option>
                                <option value="F" @if ($user_names->gender == 'F') selected @endif>หญิง</option>
                            </select>
                        </div>&nbsp;
                    </div>

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
            </div><br>
            <a href="/index" class="btn" style="background-color: #000000; color: #F6F1F1;">กลับไปหน้าแรก</a> 
            <input type="submit" class="btn" style="background-color: #146C94; color: #F6F1F1;"value="อัปเดต">
        </form><br>
    </div>
</body>

</html>
