
@extends('backend.layout')
@section('content')


    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
          <h2>Tambah Sesi</h2><br/>

          @include ('common.alert')
          @include ('common.form_error')


       <form method="POST" action="{{ route('user.register.post') }}">
        @csrf
         <div class="form-group row">
          
           <label for="inputName" class="col-sm-2 col-form-label">Name</label>
           <div class="col-sm-10">
             <input name="name" type="name" class="form-control" id="name" placeholder="Name" 
              value="{{ old('name')}}">
           </div>
         </div>
         <div class="form-group row">
           <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
           <div class="col-sm-10">
             <input name="email" type="email" class="form-control" id="email" placeholder="Email"
              value="{{ old('email')}}">
           </div>
         </div>
           <div class="form-group row">
           <label for="inputICNo" class="col-sm-2 col-form-label">IC No</label>
           <div class="col-sm-10">
             <input name="ic" type="ic" class="form-control" id="ic" placeholder="IC No without dash (-)" 
             value="{{ old('ic')}}">
           </div>
         </div>
          <div class="form-group row">
           <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
           <div class="col-sm-10">
             <input name="password" type="password" class="form-control" id="password" placeholder="Password">
           </div>
         </div>
         <div class="form-group row">
           <div class="col-sm-10">
             <button type="submit" class="btn btn-primary">Register</button>
           </div>
         </div>
       </form>
      </div>
    </section>
    
@endsection

 