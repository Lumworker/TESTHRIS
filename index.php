<!doctype html>
<html lang="en">
<head>
    <title>HRIS_RTAF</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="./Asset/Images/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./Asset/Css/index.css">
</head>

<body>
    <div id="login" align="center">
        <div id="left">
            <div id="picLogin">
                <img src="./Asset/Images/Login1.png" width="750px;" height="500px;">
            </div>
            <div id="hris">
                <img src="./Asset/Images/hris.png" alt="" width="300px;">
            </div>
        </div>
        <!-- left -->
        <div id="right">
            <div id="square"></div>
            <p id="txtLogin">เข้าสู่ระบบ</p>
            <br><br>
            <div id=loginForm>
                <form id="loginAjax" method="post">
                    <div class="form-group">
                        <label id="usernameForm">ชื่อผู้ใช้งาน: </label>
                        <input type="text" class="border form-control" id="username" aria-describedby="" placeholder="ชื่อผู้ใช้งาน">
                    </div>
                    <div class="form-group">
                        <label id="passwordForm">รหัสผ่าน: </label>
                        <input type="password" class="border form-control" id="password" placeholder="รหัสผ่าน">
                    </div>
                    <button type="submit" class="btn" onclick="login()">เข้าสู่ระบบ</button>
                </form>
            </div>
        </div>
        <!-- right -->
    </div>

    <script src="./Controllers/indexController.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</body>

</html>