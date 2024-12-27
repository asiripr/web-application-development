<x-app-layout>
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
@include('footer')
</x-app-layout>