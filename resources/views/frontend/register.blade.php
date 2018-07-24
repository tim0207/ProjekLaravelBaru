
@extends('frontend.layout')

@section('content')

<header><h2 class="col-sm-10">Register New User</h2></header>
    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
       <form>
         <div class="form-group row">
          
           <label for="inputName" class="col-sm-2 col-form-label">Name</label>
           <div class="col-sm-10">
             <input name="register_name" type="name" class="form-control" id="Registername" placeholder="Name">
           </div>
         </div>
         <div class="form-group row">
           <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
           <div class="col-sm-10">
             <input name="register_email" type="email" class="form-control" id="RegisterEmail" placeholder="Email">
           </div>
         </div>
           <div class="form-group row">
           <label for="inputICNo" class="col-sm-2 col-form-label">IC No</label>
           <div class="col-sm-10">
             <input name="register_icno" type="icno" class="form-control" id="RegisterICNo" placeholder="IC No without dash (-)">
           </div>
         </div>
          <div class="form-group row">
           <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
           <div class="col-sm-10">
             <input name="register_password" type="password" class="form-control" id="RegisterPassword" placeholder="Password">
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

 