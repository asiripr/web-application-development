<x-app-layout>
  <main style="max-width: 600px; margin: 50px auto; padding: 20px; background-color: #f4f4f4; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif;">
      <form action="{{url('/updateauser',$data->id)}}" method="post" enctype="multipart/form-data" style="display: flex; flex-direction: column; gap: 20px;">
          @csrf
          <div>
              <label style="display: block; font-size: 16px; font-weight: bold; margin-bottom: 8px; color: #333;">Name</label>
              <input type="text" name="name" value="{{$data->name}}" style="width: 100%; padding: 10px; font-size: 14px; border: 1px solid #ccc; border-radius: 5px; color: #555;">
          </div>
          <div>
              <label style="display: block; font-size: 16px; font-weight: bold; margin-bottom: 8px; color: #333;">Email</label>
              <input type="text" name="email" value="{{$data->email}}" style="width: 100%; padding: 10px; font-size: 14px; border: 1px solid #ccc; border-radius: 5px; color: #555;">
          </div>
          <div>
              <input type="submit" value="Update User" style="padding: 12px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; font-weight: bold; transition: background-color 0.3s ease;">
          </div>
      </form>
  </main>
  @include('footer')   
</x-app-layout>
