@extends('layout.app')

@section('content')
    <div class="mt-5">
        <div class="card">
             <div class="card-body">
                <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Body</label>
                     <textarea class="from-control" name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
             </div>
        </div>
    </div>
@endsection