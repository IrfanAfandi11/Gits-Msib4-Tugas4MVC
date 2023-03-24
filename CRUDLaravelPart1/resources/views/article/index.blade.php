@extends('layout.app')

@section('content')
<div class="mt-5">
<div class="d-flex justify-content-end">
  <a href="{{ url('/create') }}">
    <button class="btn btn-primary">
      Add Article
    </button>
  </a>
</div>
  <div class="card my-2">
      <div class="card-body">
        <h5>Articel 1</h5>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At eum, ut perspiciatis molestias maiores dolores nobis ab beatae blanditiis voluptatibus!
          </p>
      </div>
  </div>  
  <div class="card my-2">
    <div class="card-body">
      <h5>Articel 1</h5>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At eum, ut perspiciatis molestias maiores dolores nobis ab beatae blanditiis voluptatibus!
        </p>
    </div>
</div>    
<div class="card my-2">
  <div class="card-body">
    <h5>Articel 1</h5>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At eum, ut perspiciatis molestias maiores dolores nobis ab beatae blanditiis voluptatibus!
      </p>
  </div>
</div> 
</div>      
@endsection

