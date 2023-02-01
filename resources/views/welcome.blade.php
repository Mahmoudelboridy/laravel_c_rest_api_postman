@extends('bootstrap')
@section('title','rest_api')
@section('content')
<h1 class="text-center my-3">rest api by laravel</h1>

<table class="table text-center my-5">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">password</th>
        <th scope="col">update</th>
        <th scope="col">delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user )
      <tr>
        <th scope="row">{{ $n++ }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->password }}</td>
        <td><form action="{{ route('delete',$user->id ) }}" method="POST">
          @csrf
          <button class="btn btn-primary" name="delete">delete</button>
        </form></td>
        <td><a href="update/{{ $user->id }}"><button class="btn btn-primary">update</button></a>
        </td>
      </tr>
      @endforeach  
    </tbody>
  </table>
 
</div>
    <div class="container-fluid my-3">
        <h2 class="text-center">add</h2>
        <div class="row mt-5 d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="{{ route('create') }}"  method="POST">
                  @csrf 
                  <div class="form-outline mb-4">
                        <label class="mb-1"> name</label> <input type="text" class="form-control"
                            placeholder="name"  
                            name="name" />
                    </div>
                    <div class="form-outline mb-4">
                      <label class="mb-1">password</label> <input type="password" class="form-control"
                           name="password" />
                  </div>
                    <div class="text-center">
                        <button class="bg-info mb-3 py-2 px-3 border-0" name="save">save</button>                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
@endsection
