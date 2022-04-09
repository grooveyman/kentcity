@extends('layouts.main')
@section('title','KENT CITY | Education ')
@section('body')

@section('left-pane')
 <div class="col-md-6 left-pane3">
                    
 </div>
 @endsection

 <div> 
                   
       <form action="/editEdu/{{$members->id}}" method="post">
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
                    @if($members)
                     <div class="alert alert-info alert-dismissible fade show" role="alert">
                      <p>You are halfway through <strong style="color: royalblue;">{{$members->firstname}},</strong> you have 2 more pages to go!</p>
                    </div>
                    @endif
                    <div class="form-group">
                            <select  id="myselection" class="form-control" name="education_level">
                                <option value="1">Educational Level</option>
                                <option value="Primary School">Primary School</option>
                                <option value="Junior High School">Junior High School</option>
                                <option value="Senior High School">Senior High School</option>
                                <option value="Technical School">Technical School</option>
                                <option value="University">University</option>
                                <option value="Graduate Degree">Graduate Degree</option>
                                <option value="">Other</option>
                            </select>
                        
                    </div>
                    <!-- other education level -->
                   
                   <div class="form-group" id="other">
                       <input type="text" class="form-control"  placeholder="Other Educational Level" name="other_education" value="{{$members->other_edu_level}}">
                   </div>


                   <!-- profession address -->
                   <div class="form-group">
                       <input type="text" class="form-control" placeholder="Profession" name="profession" value="{{$members->profession}}">
                   </div>
               


                   <!-- guardians -->
                   <label style="margin-top: 20px; font-weight: bold">Parents Information</label>
                   <div class="row" style="margin-top: -20px">
                   		<div class="col-md-6">
                   			 <div class="form-group">
                       			<input type="text" class="form-control" placeholder="Father's Name" name="father_name" value="{{$members->father_name}}">
                   			</div>
                   		</div>
                   		<div class="col-md-6">
                   			 <div class="form-group">
                       			<select  id="guard_status" class="form-control" name="father_status">
                                <option value="" selected>Alive</option>
                                <option value="1">Deceased</option>
                            </select>
                   			</div>
                   		</div>
                   </div>

                    <div class="form-group" style="margin-top: -30px;">
                       <input type="text" class="form-control" id="father_contact" placeholder="Father's Contact" name="father_phone" value="{{$members->father_contact}}">
                   </div> 


                   <!-- mother -->
                     <div class="row" style="margin-top: -20px">
                      <div class="col-md-6">
                         <div class="form-group">
                            <input type="text" class="form-control" placeholder="Mother's Name" name="mother_name" value="{{$members->mother_name}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                         <div class="form-group">
                            <select  id="guard_mum" class="form-control" name="mother_status">
                                <option value="" selected>Alive</option>
                                <option value="1">Deceased</option>
                                
                            </select>
                        </div>
                      </div>
                   </div>

                    <div class="form-group" style="margin-top: -10px;">
                       <input type="text" class="form-control" id="mother_contact" placeholder="Mother's Contact" name="mother_phone" value="{{$members->mother_contact}}">
                   </div> 
                  

               
                   <input type="submit" class="btn btn-success" value="Finish">
               <div class="col-md-3"></div>
           </div>
       </form>
</div>


<script>
$(document).ready(function(){
    $('#myselection').on('change', function(){
    	var demovalue = $(this).val(); 
        $("#other").hide();

        $("#other"+demovalue).show();
    });




     $('#guard_status').on('change', function(){
    	var demovalue = $(this).val(); 
        $("#father_contact").hide();

        $("#father_contact"+demovalue).show();
    });


       $('#guard_mum').on('change', function(){
      var demovalue = $(this).val(); 
        $("#mother_contact").hide();

        $("#mother_contact"+demovalue).show();
    });
});
</script>
 @endsection