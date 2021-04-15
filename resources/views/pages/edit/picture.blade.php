@extends('layouts.main')
@section('title','KENT CITY | Picture ')
@section('body')

@section('left-pane')
 <div class="col-md-6 left-pane5">
                    
 </div>
 @endsection

 <div> 
                   
       <form action="/editPicture/{{$members->id}}" method="post" enctype="multipart/form-data">
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
            	<label style="margin-top: 20px; font-weight: bold">Choose your image</label>
          

             <div>
				<label>Image</label>
				<input type="file" name="inpFile" id="inpFile">
				<?php if($members->image == ''){ ?>
					<div class="image-preview" id="imagePreview">
					<img src="" id="blah" alt="Your Image" class="image-preview__image" style="display: none">
					<span class="image-preview__default-text">Image Preview</span>
				</div>
				<?php }else { ?>
				<div class="image-preview" id="imagePreview">
					<img src="{{asset('storage/imagesProfile/'.$members->image)}}" id="blah" alt="Your Image" class="image-preview__image">
					<span class="image-preview__default-text"></span>
				</div>
			<?php } ?>
				
			</div>


			<div style="margin-top: 30px">
				<input type="submit" class="btn btn-success" value="Finish">
			</div>             
                   
               <div class="col-md-3"></div>
           </div>
       </form>
</div>


<script>
	const inpFile = document.getElementById("inpFile");
	const previewContainer = document.getElementById("imagePreview");
	const previewImage = previewContainer.querySelector(".image-preview__image");
	const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");

	inpFile.addEventListener("change", function(){
		const file = this.files[0];

		if (file) {
			const reader = new FileReader();

			previewDefaultText.style.display = "none";
			previewImage.style.display = "block";


			reader.addEventListener("load", function(){
				previewImage.setAttribute("src", this.result);
			});


			reader.readAsDataURL(file);
		}else {
			previewDefaultText.style.display = null;
			previewImage.style.display = null;

			previewImage.setAttribute("src", "");
		}
	});


</script>

@endsection