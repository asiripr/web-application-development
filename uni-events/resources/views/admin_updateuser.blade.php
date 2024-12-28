<x-app-layout>
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
    @include('footer')   
</x-app-layout>

