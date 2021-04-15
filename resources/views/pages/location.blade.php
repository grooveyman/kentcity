@extends('layouts.main')
@section('title','KENT CITY | Location ')
@section('body')

@section('left-pane')
 <div class="col-md-6 left-pane2">
                    
 </div>
 @endsection

<div> 
                  
       <form action="/addLocation/{{$members->id}}" method="post">
        {{csrf_field()}}
           <div class="row form-layout">
               <div class="col-md-3"></div>
               <div class="col-md-6">
               <div>
                   <img src="{{url('/').'/images/logo.png'}}" alt="" width="70px" height="70px">  
                   <p style="color:royalblue; font-weight:bold">Family Worship Centre - Kent City</p>
                   <p style="margin-top:-20px">Membership Registration <a href="/view">View Members</a></p>
                    @if($members)
                     <div class="alert alert-info alert-dismissible fade show" role="alert">
                      <p>Thank you <strong style="color: royalblue;">{{$members->firstname}},</strong> you have 3 more pages to go!</p>
                    </div>
                    @endif
               </div>
               <!-- surname -->
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Hometown" name="home_name" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <select name="home_region" id="" class="form-control">
                                <option value="">Hometown Region</option>
                                <option value="1">Oti Region (Dambai)</option>
                                <option value="2">Bono East Region (Techiman)</option>
                                <option value="3">Ahafo Region (Goaso)</option>
                                <option value="4">Bono Region (Sunyani)</option>
                                <option value="5">North East Region (Nalerigu)</option>
                                <option value="6">Savannah Region (Damango)</option>
                                <option value="7">Western North Region (Sefwi Wiawso)</option>
                                <option value="8">Western Region (Sekondi)</option>
                                <option value="9">Volta Region (Ho)</option>
                                <option value="10">Greater Accra Region (Accra)</option>
                                <option value="11">Eastern Region (Koforidua)</option>
                                <option value="12">Ashanti Region (Kumasi)</option>
                                <option value="13">Northern Region (Tamale)</option>
                                <option value="14">Upper East Region (Bolgatanga)</option>
                                <option value="15">Upper West Region (WA)</option>
                                <option value="16">Central Region (Cape Coast)</option>
                                
                            </select>
                        </div>
                    </div>
               </div>
                   

                   <!-- residential address -->
                   <div class="form-group">
                       <input type="text" class="form-control" placeholder="Residential Address/ Digital Address" name="residence">
                   </div>

                   <!-- contact -->
                   <div class="form-group">
                       <input type="text" class="form-control" placeholder="Contact/Phone/Mobile Number" name="phone" required>
                   </div>

                   <!-- gender -->
                   <div class="form-group gender">
                       <p>Marital Status</p>
                       <div class="form-check-inline" style="background-color:rgb(243, 216, 182);">
                           <label class="form-check-label" for="radio1">
                               <input type="radio" class="form-check-input" id="married" name="marital" value="M" onclick="showSpouse()">MARRIED
                           </label>
                       </div>
                       <div class="form-check-inline" style="background-color:rgb(196, 202, 255)">
                           <label class="form-check-label" for="radio2">
                               <input type="radio" class="form-check-input" id="single" name="marital" value="S" onclick="hideSpouse()">SINGLE
                           </label>
                       </div>
                      
                       <!-- hidden name of spouse -->
                    <div class="form-group" id="spouse-name">
                        <input type="text" placeholder="Name of Spouse" class="form-control" name="spouse_name">
                    </div>

                   </div>
                   <input type="submit" class="btn btn-success" value="Next">
               <div class="col-md-3"></div>
           </div>
       </form>
       
</div>


   <script>
       function showSpouse(){
           document.getElementById("spouse-name").style.display = 'block';
       }

       function hideSpouse(){
        document.getElementById("spouse-name").style.display = 'none';
        
       }
   </script>

   

@endsection