<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    {{-- {{dd($students)}} --}}
    <div class="container">
        <table class="table table-hover">
            <thead>
                <th>Tên</th>
                <th>Chiều cao</th>
                <th>Cân nặng</th>
                <th>Giới tính</th>
                <th>Tuổi</th>
                <th>Lớp</th>
                <th>MSV</th>
                <th>Avatar</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                
                @if ($user['id'] == 1)
                
                <tr>
                    <td>{{$user['name']}}</td>
                    <td>{{$user['height']}}</td>
                    <td>{{$user['weight']}}</td>
                    <td>{{$user['gender']}}</td>
                    <td>{{$user['age']}}</td>
                    <td>{{$user['class']}}</td>
                    <td>{{$user['id']}}</td>
                    <td><img height="200" src="{{$user['avatar']}}" alt=""></td>
                </tr>
                @endif
                @endforeach
                {{-- <tr>
                    <td>Trọng Anh</td>
                    <td>27</td>
                    <td>Web16201</td>
                    <td>PH13025</td>
                    <td><img height="200" src="https://scontent.fhan14-1.fna.fbcdn.net/v/t1.18169-9/20621089_275426592861427_3539016159873848006_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=Ixto_utcgyIAX8sGHtp&tn=K6KRstWemgGUiiGB&_nc_ht=scontent.fhan14-1.fna&oh=00_AT96k225f2JHdFJS22uW3QNYnJG6Ja4DFB5levOWS0l3Lg&oe=624D7487" alt=""></td>
                </tr> --}}
            </tbody>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>