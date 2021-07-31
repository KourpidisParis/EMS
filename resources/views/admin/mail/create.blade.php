@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
    <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Register employee
                    
                </li>
              </ol>
            </nav>
<form action="{{route('mails.store')}}" method="post" enctype="multipart/form-data">@csrf

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">General Information</div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Select</label>
                        <select id='purpose' class="form-control">
                        <option value="0">Mail to all staff</option>
                        <option value="1">Choose Department</option>
                        <option value="2">Choose Person</option>
                    </select>
                    <div id="department" class="mt-3">
                        <label for="business">Department Name</label>
                        <select name="department" class="form-control">
                            <option value="">select</option>
                            @foreach(App\Models\Department::all() as $department)
                                <option value="{{$department->id}}">{{$department->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div id="person">

                        <select name="person" class="form-control">
                            <option value="">select</option>
                            @foreach(App\Models\User::all() as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>

                    </div>
                        
                    </div>
                    <input type="file" name="file" class="mt-3 form-control @error('file') is-invalid @enderror ">
                      @error('file')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <div class="form-group">
                        <textarea name="body" class="form-control @error('body') is-invalid @enderror"></textarea>
                         @error('body')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
            <br>
            <div class="form-group">
                <button class="btn btn-primary " type="submit">Submit</button>
            </div>
        </div>
      
    </div>
</form>
</div>


<script type="text/javascript">
              $('#mail').on('change',function(){

                if(this.value==="1"){
                    $('#department').show()
                }else{
                    $('#department').hide()
                }
                if(this.value==="2"){
                    $('#person').show()
                }else{
                    $('#person').hide()
                }

              })
          </script>

@endsection
