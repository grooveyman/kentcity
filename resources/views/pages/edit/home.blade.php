@extends('layouts.main')
@section('title','KENT CITY | Register ')
@section('body')

@section('left-pane')
 <div class="col-md-6 left-pane1">
                    
 </div>
 @endsection

<div> 
                   
       <form action="/edit/first/{{$members->id}}" method="post">
        {{csrf_field()}}
           <div class="row form-layout">
               <div class="col-md-3"></div>
               <div class="col-md-6">
               <div>
                   <img src="{{url('/').'/images/logo.png'}}" alt="" width="70px" height="70px">  
                   <p style="color:royalblue; font-weight:bold">Family Worship Centre - Kent City</p>
                   <p style="margin-top:-20px">Membership Registration</p>
               </div>
               <!-- surname -->
                   <div class="form-group">
                       <input type="text" class="form-control" placeholder="Surname" name="surname" style="text-transform:uppercase" required value="{{$members->surname}}">
                   </div>

                   <!-- firstname -->
                   <div class="form-group">
                       <input type="text" class="form-control" placeholder="Firstname" name="firstname" value="{{$members->firstname}}">
                   </div>

                   <!-- othernames -->
                   <div class="form-group">
                       <input type="text" class="form-control" placeholder="Othernames" name="oname" value="{{$members->othernames}}">
                   </div>

                   <!-- gender -->
                   <div class="form-group gender">
                       <div class="form-check-inline" style="background-color:rgb(243, 216, 182);">
                           <label class="form-check-label" for="radio1">
                               <input type="radio" class="form-check-input" id="radio1" name="gender" value="M">MALE
                           </label>
                       </div>
                       <div class="form-check-inline" style="background-color:rgb(196, 202, 255)">
                           <label class="form-check-label" for="radio2">
                               <input type="radio" class="form-check-input" id="radio2" name="gender" value="F">FEMALE
                           </label>
                       </div>
                      
                       <!-- birthday -->
                       <div>
                           <label style="margin-top:20px">Date of Birth</label>

                           <div class="row" style="margin-top:-30px">
                               <div class="col-md-3">
                                   <div class="form-group">
                                       <!-- <label>Day</label> -->
                                       <select class="form-control" name="bday">
                                           <?php 
                                           for($i=1; $i<=31; $i++){
                                               echo "<option value=" .$i. ">".$i."</option>";
                                           }
                                           ?>
                                       </select>
                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <!-- <label>Month</label> -->
                                       <select class="form-control" name="bmonth">
                                           <option>January</option>
                                           <option>February</option>
                                           <option>March</option>
                                           <option>April</option>
                                           <option>May</option>
                                           <option>June</option>
                                           <option>July</option>
                                           <option>August</option>
                                           <option>September</option>
                                           <option>October</option>
                                           <option>november</option>
                                           <option>December</option>
                                       </select>
                                   </div>
                               </div>
                               <div class="col-md-3">
                                   <div class="form-group">
                                       <!-- <label>Year</label> -->
                                       <select class="form-control" name="byear">
                                           <?php 
                                           for($i=1920; $i<=2020; $i++){
                                               echo "<option value=" .$i. ">".$i."</option>";
                                           }
                                           ?>
                                       </select>
                                   </div>
                               </div>
                           </div>
                       </div>

                   </div>
                   <input type="submit" class="btn btn-success" value="Finish">
               <div class="col-md-3"></div>
           </div>
       </form>
   </div>

@endsection