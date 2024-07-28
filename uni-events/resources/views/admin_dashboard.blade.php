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
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>johndoe@example.com</td>
                        <td>
                            <button class="btn-update">Update</button>
                            <button class="btn-delete">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>janesmith@example.com</td>
                        <td>
                            <button class="btn-update">Update</button>
                            <button class="btn-delete">Delete</button>
                        </td>
                    </tr>
                    <!-- Add more user rows as needed -->
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>