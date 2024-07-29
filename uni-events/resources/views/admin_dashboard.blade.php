<!DOCTYPE html>
<html lang="en">

<head>
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
            <table class="user-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>
                                <button class="btn-update"><a href="{{url('/updateuser', $data->id) }}">Update</a></button>
                                
                                @if ($data->usertype=="student")
                                    <button class="btn-delete"><a href="{{url('/deleteuser',$data->id)}}">Delete</a></button>   
                                @else
                                    <button class="btn-delete">Delete</button>   
                                @endif 
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
    </div>
</body>

</html>
