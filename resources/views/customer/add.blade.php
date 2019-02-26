@extends('index')

@section('title', 'Page Title')

@section('sidebar')
    @parent

   
@stop

@section('content')
<div class="row justify-content-center border border-info rounded">
     <h1 class="text-info justify-content-center">Add Customer</h1>
</div>
<form method="post" action="{{ url('saveCustomer') }}" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="row border border-info rounded">

 <div class="col-lg-6">
        <div class="form-group">
            <label for="exampleInputEmail1">First Name</label>
            <input type="text" class="form-control"  placeholder="Title" name="First_Name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Last Name</label>
            <input type="text" class="form-control"  placeholder="Location" name="Last_Name">
        </div> 
        <div class="form-group">
            <label for="exampleInputEmail1">DOB</label>
            <input type="date" class="form-control"  placeholder="Title" name="DOB">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Gender</label>
            
            <select class="form-control" name="Gender">
              <option value="M">Male</option>
              <option value="F">Female</option>
            </select>
        </div> 
         
 </div>
   <div class="col-lg-6">
 <div class="form-group">
 <label for="exampleInputEmail1">Phone Number</label>
    <input type="number" class="form-control" name="Phone Number">
   </div> 
   <div class="form-group">
            <label for="exampleInputEmail1">Email Address</label>
            <input type="mail" class="form-control"  placeholder="Email Address" name="Email">
        </div> 
        <div class="form-group">
            <label for="exampleInputEmail1">Company Name</label>
            <input type="text" class="form-control"  placeholder="Company Name" name="Company_Name">
        </div> 
 </div>
  
  <div class="col-lg-8">
  </div>
  <div class="col-lg-4">
    <button class="btn btn-success">Submit</button>
  </div>
  
</div>
</form>
@stop