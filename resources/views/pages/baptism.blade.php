@extends('layouts.main')
@section('title','KENT CITY | Baptism ')
@section('body')

@section('left-pane')
 <div class="col-md-6 left-pane4">
                    
 </div>
 @endsection



  <div> 
                   
       <form action="/addBap/{{$members->id}}" method="post">
        {{csrf_field()}}
           <div class="row form-layout">
               <div class="col-md-3"></div>
               <div class="col-md-6">
               <div>
                   <img src="{{url('/').'/images/logo.png'}}" alt="" width="70px" height="70px">  
                   <p style="color:royalblue; font-weight:bold">Family Worship Centre - Kent City</p>
                   <p style="margin-top:-20px">Membership Registration <a href="/view">View Members</a></p>
               </div>
               <!-- surname -->
                @if($members)
                     <div class="alert alert-info alert-dismissible fade show" role="alert">
                      <p>You are doing well <strong style="color: royalblue;">{{$members->firstname}},</strong> you have 1 more page to go!</p>
                    </div>
                    @endif
             <label style="margin-top: 20px; font-weight: bold">Baptismal Information</label>
                  
                   <div class="form-group" style="margin-top: -20px;">
                       <input type="text" class="form-control"  placeholder="Place of Baptism" name="bap_place">
                   </div>


                   <!-- method of baptism -->
                    <div class="form-group">
                            <select  id="baptismselection" class="form-control" name="method_bap">
                                <option value="1">Method of Baptism</option>
                                <option value="Immersion">Immersion</option>
                                <option value="Sprinkling">Sprinkling</option>
                                <option value="Washing">Washing</option>
                                <option value="">Other</option>
                            </select>
                        
                    </div>

                    <div class="form-group" style="margin-top: -30px;">
                       	<input type="text" class="form-control" id="otherBaptism" placeholder="Other Method of Baptism" name="other_bap">
                   	</div>
               


                   <!-- guardians -->
                   <label style="margin-top: 50px; font-weight: bold">Church Role</label>
                  <div class="form-group" style="margin-top: -30px;">
                            <select name="role" id="roleselection" class="form-control">
                                <option value="null">Role at church</option>
                                <option value="1">Pastor</option>
                                <option value="2">Elder</option>
                                <option value="3">Instrumentalist</option>
                                <option value="4">Vocalist</option>
                                <option value="5">Usher</option>
                                <option value="6">Technical & Media</option>
                                <option value="7">Help Ministry</option>
                                <option value="8">Member</option>
                                <option value="">Other</option>
                            </select>
                        
                    </div>

                    <div class="form-group" style="margin-top: 0px;">
                       <input type="text" class="form-control" id="other_role" placeholder="Other Role" name="other_role">
                   </div> 

               
                   <input type="submit" class="btn btn-success" value="Next">
               <div class="col-md-3">
                 <p><a href="/view">View Members</a></p>
               </div>
           </div>
       </form>
</div>

<script>
$(document).ready(function(){
    $('#baptismselection').on('change', function(){
    	var demovalue = $(this).val(); 
        $("#otherBaptism").hide();

        $("#otherBaptism"+demovalue).show();
    });


  $('#roleselection').on('change', function(){
    	var demovalue = $(this).val(); 
        $("#other_role").hide();

        $("#other_role"+demovalue).show();
    });

});
</script>
@endsection