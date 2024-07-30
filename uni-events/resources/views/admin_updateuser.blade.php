<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/adminstyle.css">
    <link rel="stylesheet" href="assets/css/styleshome.css">
    <title>Document</title>
</head>

<body>
    <div class="dashboard-container">
        <header class="header">
            @include('navbar')
            <br>
            <h1>Admin Dashboard</h1>
        </header>
        <main class="main-content">
            <form action="{{url('/updateauser',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                  <label>Name</label>
                  <input style="color: grey" type="text" name="name" value="{{$data->name}}">
                </div>
                <div>
                  <label>Email</label>
                  <input style="color: grey" type="text" name="email" value="{{$data->email}}">
                </div>
                <div>
                    <input type="submit" value="Update User">
                </div>
              </form>
        </main>
    </div>
    @include('footer')
</body>

</html>
