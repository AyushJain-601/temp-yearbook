<!DOCTYPE html>
<html lang="en">
  <head>

	    <!-- ==============================================
		Title and Meta Tags
		=============================================== -->
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Trending</title>
	    <meta name="description" content="" />
	    <meta name="keywords" content="" />
	    <meta property="og:title" content="" />
	    <meta property="og:url" content="" />
	    <meta property="og:description" content="" />  
	    <meta name="csrf-token" content="{{ csrf_token() }}">		
		
		<!-- ==============================================
		Favicons
		=============================================== --> 
		<link rel="stylesheet" type="text/css" href="css/autocomplete.css">
	    <link rel="icon" href="img/logo.jpg">
	    <link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.png">
	    <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
	    <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		
	    <!-- ==============================================
		CSS
		=============================================== -->
        <link type="text/css" href="css/demos/photo.css" rel="stylesheet" />
				
		<!-- ==============================================
		Feauture Detection
		=============================================== -->
		<script src="js/jquery.min.js"></script>
    	<script src="js/autocomplete.js"></script>
    	<script src="js/modernizr-custom.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>-->
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<!--[endif]-->	
		<script  src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>


  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="css/autocomplete.css">
  <script src="js/autocomplete.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.7.0/introjs.css">



		<style>

.tablink {
    background-color: #fff;
    color: #000;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 50%;
}

.tablink:hover {
    background-color: #777;
    color:white;
}

.tablink:active {
    color:white;
}

.tabcontent {
    
    display: none;
    padding: 100px 20px;
    height: 100%;
}

.cover-img{
	background-image: url('img/bg/1.jpeg');
	height:30vw;
}

</style>
  </head>

<body>

     <!-- ==============================================
     Navigation Section
     =============================================== -->  
     <header class="tr-header">
      <nav class="navbar navbar-default">
       <div class="container-fluid">
	    <div class="navbar-header">
		 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
		  <span class="sr-only">Toggle navigation</span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		 </button>
		 <a class="navbar-brand" href="index.html"><img src="img/navbar/SACLogo.png" width="150px" height="75px" style="margin-top:-23px;" /></a>
		</div><!-- /.navbar-header -->
		<div class="navbar-left">
		 <div class="collapse navbar-collapse" id="navbar-collapse">
		  <ul class="nav navbar-nav">
		  </ul>
		 </div>
		</div><!-- /.navbar-left -->


		<div class="navbar-right">                          
     <ul class="nav navbar-nav">
       <li>
         <div class="search-dashboard">
          <form action="search/" method="POST" class="form-inline">
            {{ csrf_field() }}
            <input placeholder=" Search Your Friend Here..." type="text" name="search" required="required" id="search" style="background: none; border: none; top:2.4px; left: 22px; line-height: 40px; cursor: text; font-size: 14px;">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
        <li class="active">
            <a class="text-uppercase text-expanded" href="/homenew">Home
              <span class="sr-only">(current)</span>
            </a>
        </li>

        <li class="">
            <a class="text-uppercase text-expanded" href="trendingnew"  data-step="5" data-intro="<center> See the most popular photos of Kgpians </center> ">Trending</a>
         </li>              
       </li>
       <li class="dropdown notification-list">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="notification" role="button" aria-haspopup="false" aria-expanded="false">
          @if(count($notifications))
          <i class="fa fa-bell noti-icon"></i>
          <span class="badge badge-danger badge-pill noti-icon-badge">{{count($notifications)}}</span>
          @else
          <i class="fa fa-bell noti-icon"></i>
          @endif
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-lg" aria-labelledby="notification">

         <div class="dropdown-item noti-title">
          <h6 class="m-0">
           <span class="pull-right">
            <a href="/readall" class="text-dark">
              <small>Clear All</small>
            </a> 
          </span><span style="color: #000;">Notifications({{count($notifications)}})</span> 
        </h6>
      </div>

      <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 416.983px;">
        <div class="slimscroll" style="max-height: 230px; overflow: hidden; width: auto; height: 416.983px;">
         <div id="Slim">
          @if(count($notifications))
          @foreach($notifications as $notification)
          <a href="/read/{{$notification['id']}}" class="dropdown-item notify-item">
            @php
            $pic = App\User::where('name',$notification['user'])->pluck('pro_pic');
            @endphp
            <div class="notify-icon">
              <img src="../{{$pic[0]}}" class="img-responsive img-circle">
            </div>
            <p class="notify-details" style="font-family: Verdana"><strong>{{$notification['user']}}</strong> wrote :<br>
              <span>&nbsp"{{$notification['views']}}"</span>
              <small class="text-muted">{{$notification['created_at']}}</small></p>
            </a><!--/ dropdown-item-->
            @endforeach
            
            @else
            <div class="notify-details" align="center">No New Notifications!</div>
            @endif
          </div><!--/ .Slim-->
          <div class="slimScrollBar" style="background: rgb(158, 165, 171) none repeat scroll 0% 0%; width: 8px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
          <div class="slimScrollRail" style="width: 8px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div>
        </div><!--/ .slimscroll-->
      </div><!--/ .slimScrollDiv-->
      <a href="/profile_index" class="dropdown-item text-center notify-all">
        View all <i class="fa fa-arrow-right"></i>
      </a><!-- All-->
    </div><!--/ dropdown-menu-->
  </li>
          <li class="dropdown notification-list">
		    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="photo_profile.html#" role="button" aria-haspopup="false" aria-expanded="false">
              <i class="fa fa-cog"></i>
			</a>
			<div class="dropdown-menu dropdown-menu-right dropdown-lg" style="width: 100px; height:100.983px; left:-160px;">
             
				<div class="dropdown-item noti-title">
				  <h6 class="m-0">
				   <span class="pull-right">
				    <a href="photo_profile.html" class="text-dark"></a> 
				   </span>Settings
				  </h6>
				 </div>

				<div >
		   	    	<a class="dropdown-item " href="/details"><p style="font-family: 'Abhaya Libre', serif;">Edit Details</p></a>
			    </div>
			    <div >
                	<a class="dropdown-item " href="/logout"><p style="font-family: 'Abhaya Libre', serif;">Logout</p> </a>
			    </div>

            </div><!--/ dropdown-menu-->
		   </li>
		  
		 <li class="dropdown mega-avatar">
		  <a href="photo_profile.html#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		   <span class="avatar w-32">
          				@if(!empty(Auth::user()->pro_pic))
          				<img class="img-fluid img-circle" src="{{Auth::user()->pro_pic}}" style="width: 40px; height: 40px;" alt="Image">
          				@endif
          		</span>
		   <!-- hidden-xs hides the username on small devices so only the image appears. -->
		   <span class="hidden-xs" style="">
			&nbsp{{Auth::user()->name}}
		   </span>
		  </a>
		  <div class="dropdown-menu w dropdown-menu-scale pull-right">
		   <a class="dropdown-item" href="photo_profile.html#"><span>New Story</span></a> 
		   <a class="dropdown-item" href="photo_profile.html#"><span>Become a Member</span></a> 
		   <div class="dropdown-divider"></div>
		   <a class="dropdown-item" href="photo_profile.html#"><span>Profile</span></a> 
		   <a class="dropdown-item" href="photo_profile.html#"><span>Settings</span></a> 
		   <a class="dropdown-item" href="photo_profile.html#">Need help?</a> 
		   <div class="dropdown-divider"></div>
		   <a class="dropdown-item" href="photo_profile.html#">Sign out</a>
		  </div>
		 </li><!-- /navbar-item -->	
		 
		 </ul><!-- /.sign-in -->   
		</div><!-- /.nav-right -->
       </div><!-- /.container -->
      </nav><!-- /.navbar -->
     </header><!-- Page Header --> 
  
  
	 <!-- ==============================================
	 News Feed Section
	 =============================================== --> 
	 <section class="profile">
	  <div class="container-fluid cover-img">

	  </div><!--/ container -->
	 </section><!--/ profile -->
	 <!-- ==============================================
	 User Profile Section
	 =============================================== --> 
	 <section class="user-profile">
	  <div class="container-fluid">
	   <div class="row">
	   
	    <div class="col-lg-12">
		   <div class="post-content">
		    	<div class="author-post text-center">
		    		<div>
          				@if(!empty(Auth::user()->pro_pic))
          				<img class="img-fluid img-circle" src="{{Auth::user()->pro_pic}}" alt="Image"  data-toggle="modal" data-target="#modal2" data-step="1" data-intro="<center> Upload your profile picture and write a caption here </center> "  >
          
          				@endif
          				

          			</div>
		    	</div><!-- /author -->
		   </div><!-- /.post-content -->		
		</div><!-- /col-sm-12 -->
		
       </div><!--/ row-->	
	  </div><!--/ container -->
	 </section><!--/ profile -->
  <div id="modal2" class="modal fade" role="dialog">

      <div class="modal-dialog">



        <!-- Modal content-->

        <div class="modal-content" style="text-align: center;">

          <div class="modal-header">



            <h4 class="modal-title" style="color: white;">Upload Picture and Caption</h4>

            <button type="button" class="close" data-dismiss="modal">&times;</button>

          </div>

          <div class="modal-body">

            <form action="/upload_pic_moto" method="post" enctype="multipart/form-data">

              {{csrf_field()}}

              @if (count($errors) > 0)

              <script type="text/javascript">

                alert('<?php foreach($errors->all() as $error) { echo "$error"; } ?>');

              </script>

              @endif

              <input type="file" name="fileToUpload" id="fileToUpload" style="display: none;" onchange="readURL(this);">

              <img src="<?php if (!empty(Auth::user()->pro_pic)){echo Auth::user()->pro_pic; } else { echo 'ind/shot.jpg';}?>" alt="" class="intro-img img-fluid mb-3 mb-lg-0 rounded" id="OpenImgUpload" style="cursor: pointer;width: 180px;height: 180px;">

              <div class="input-field col sm-12 lg-12 md-12">

                <div class="form-group">

                  <label for="comment">Caption (Max 50 characters)</label>
                  @if(!empty(Auth::user()->view_self))
                  <textarea name="motto" id="icon_prefix2" class="form-control" placeholder="Enter Your Caption Here (Max 50 characters)" style="text-align: center;color: black;" maxlength="50" rows="2" id="comment">{{Auth::user()->view_self}}</textarea>
                  @else
                  <textarea name="motto" id="icon_prefix2" class="form-control" placeholder="Enter Your Caption Here (Max 50 characters)" style="text-align: center;color: black;" maxlength="50" rows="2" id="comment"></textarea>
                  @endif


                </div>



              </div>

              <input type="submit" name="save" value="Save" class="waves-effect waves-light btn" style="width: 150px;" id="imgsave">

            </form>

          </div>

        </div>



      </div>

    </div>




	 <!-- ==============================================
	 User Profile Section
	 =============================================== --> 
	 <section class="details">
	  <div class="container">
	   <div class="row">
	    <div class="col-lg-12">
		 
          <div class="details-box row">
           <div class="content-box">
           	<center>
		     <h4>{{Auth::user()->name}} <i class="fa fa-check"></i></h4>
             @if(!empty(Auth::user()->view_self))
             <p class="mb-3">"{{Auth::user()->view_self}}"</p>
             @else
             <p class="mb-3">"Your Caption Here!"</p>
             @endif
             </center>
           </div><!--/ media -->
		   
          </div><!--/ details-box -->
		  
		</div>
	   </div>
	  </div><!--/ container -->
	 </section><!--/ profile -->

	<div id="modal3" class="modal fade" role="dialog">

      <div class="modal-dialog">



        <!-- Modal content-->

        <div class="modal-content" style="text-align: center;">

          <div class="modal-header">



            <h4 class="modal-title" style="color: white;">Upload Picture and Caption</h4>

            <button type="button" class="close" data-dismiss="modal">&times;</button>

          </div>

          <div class="modal-body">

            <form action="/upload_pic_moto" method="post" enctype="multipart/form-data">

              {{csrf_field()}}

              @if (count($errors) > 0)

              <script type="text/javascript">

                alert('<?php foreach($errors->all() as $error) { echo "$error"; } ?>');

              </script>

              @endif

              <input type="file" name="fileToUpload" id="fileToUpload" style="display: none;" onchange="readURL(this);">

              <img src="<?php echo 'ind/shot.jpg';?>" alt="" class="intro-img img-fluid mb-3 mb-lg-0 rounded" id="OpenImgUpload" style="cursor: pointer;width: 180px;height: 180px;">

              <div class="input-field col sm-12 lg-12 md-12">

                <div class="form-group">

                  <label for="comment">Caption (Max 50 characters)</label>
                  <textarea name="motto" id="icon_prefix2" class="form-control" placeholder="Enter Your Caption Here (Max 50 characters)" style="text-align: center;color: black;" maxlength="50" rows="2" id="comment"></textarea>
                  


                </div>



              </div>

              <input type="submit" name="save" value="Save" class="waves-effect waves-light btn" style="width: 150px;" id="imgsave">

            </form>

          </div>

        </div>



      </div>

    </div>







	 <!-- ==============================================
	 News Feed Section
	 =============================================== --> 
	 <section class="newsfeed">
	  
		    <div class="tab_bar" style="margin-left: 26%;align-items: center;
		    	margin-right: 26%">
		  	<button class="tablink kafe-btn" onclick="openPage('Home', this, '#0fc19e','white')">Testimonials</button>
			<button class="tablink kafe-btn" onclick="openPage('News', this, '#0fc19e','white')" id="defaultOpen">Photos</button>
			</div>
		<div class="container">
			<div id="Home" class="tabcontent">
			<div class="row">
			    <div class="col-lg-12">  
				
			     <div class="box">
				  <form>
				   <textarea class="form-control no-border" rows="3" placeholder="Your caption here"></textarea>

				  </form>
				  <div class="box-footer clearfix">
				   <button class="kafe-btn kafe-btn-mint-small pull-right btn-sm" data-toggle="modal" data-target="#modal2" data-step="1">Upload</button>
				  </div>
				 </div>	
		 
				</div>
			   </div>
  			<h3>Articles</h3>
  			<p>Home is where the heart is..</p>
			</div>
		<div id="News" class="tabcontent">
		
			<div class="row">
	    <div class="col-lg-12">  
		
	     <div class="box">
		  <form id="upload-image-form" action="/upload" method="post" enctype="multipart/form-data">
           <input id="signup-token" type="hidden" name="_token" value="{{ csrf_token() }}">
		   
		   <div class="form-group">
                <label for="classifiers">Select Category: (Max size: 5MB)</label>
                <select class="form-control" name="classifier" >
                  <option value="dep">DEPARTMENT PHOTOS</option>
                  <option value="hall">HALL PHOTOS</option>
                  <option value="fest">FEST PHOTOS</option>
                  <option value="misc">OTHER MOMENTS AT KGP</option>
                </select>
              </div>
		  </form>
		  <div id="cropp-image-div">
                <img id="crop-image" src="" style="display: none;" class="img-thumbnail">
                <div class="form-group">
                  <label for="caption">Caption:</label>
                  <textarea class="form-control no-border" rows="2" cols="15" placeholder="Type something..." name="caption" id="caption" required="required"></textarea>
                </div> 
          </div>
		  <div class="box-footer clearfix">
		   <button class="kafe-btn kafe-btn-mint-small pull-right btn-sm" data-toggle="modal" data-target="#modal3" id="upload-button" type="submit" disabled data-step="1">Upload</button>
		   <ul class="nav nav-pills nav-sm">
			<li class="nav-item">
				<div class="image-upload">
				    <label for="image">
				        <a class="nav-link" ><i class="fa fa-camera text-muted"></i></a>
				    </label>

				    <input style="display: none;" type="file" name="image" id="image" accept="image/*" required/>
				</div>
			</li>
		   </ul>
		  </div>
		 </div>	
		 
		</div>
	   </div>

	   <div class="container">
		    <div class="row">

				@if(count($images)>0)
			    @php
			    $count= 0;
			    @endphp

			    @foreach($images as $image)
			    @if(file_exists($image['url']))
			    <section class="page-section">
			      
			             
			  		    <div class="col-lg-4">
						 <div class="explorebox" style="border-radius: 10px;">
				                  <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{$image['url']}}" id="{{$image['id']}}"  data-toggle="tooltip" data-placement="top" title="Click the image!" style="cursor: pointer;width: 360px;height: 400px;border-radius: 10px;" >
						  <div class="explore-top" style="position: relative;top:-400px; ">
						   <div class="explore-like"><i class="fa fa-heart"></i> <span>14,100</span></div>
				          </div>		  
						 </div>
			            </div>
			    
			  	</section>
   			    @endif
			    @endforeach

			  
			    @else

			  <section class="page-section cta" style="background-color: rgba(76,71,97,0.55);">
			    <div class="container">
			      <div class="row">
			        <div class="col-xl-9 mx-auto">
			          <div class="cta-inner text-center rounded">
			            <h2 class="section-heading mb-4">
			              <span class="section-heading-upper"></span>
			              <span class="section-heading-lower">Nothing to show yet</span>
			            </h2>
			            
			            <br>
			            
			          </div>
			        </div>
			      </div>

			    </div>
			  </section>
			  
			  @endif
				</div>	
		</div>
	   
	 </section><!--/ newsfeed -->
	   
	  </div><!--/ container -->
	 
	 </section><!--/ newsfeed -->
  
	 <!-- ==============================================
	 Modal Section
	 =============================================== -->
     <div id="myModal" class="modal fade">
      <div class="modal-dialog">
       <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
           <span aria-hidden="true">×</span>
           <span class="sr-only">Close</span>
         </button>
         <div class="row">
     
          <div class="col-md-8 modal-image">
           <img class="img-responsive enlargeImageModalSource" alt="Image"/>
          </div><!--/ col-md-8 -->
          <div class="col-md-4 modal-meta">
           <div class="modal-meta-top">
            <div class="img-poster clearfix">
             <a href="photo_home.html"><img class="img-responsive img-circle" src="{{Auth::user()->pro_pic}}" alt="Image"/></a>
             <strong><a href="photo_home.html">{{Auth::user()->name}}</a></strong>
             <span>12 minutes ago</span><br/>
            </div><!--/ img-poster -->
            <div id="comments"> 
            </div>
        
          <div class="modal-meta-bottom">     
            <span class="thumb-xs">
            <img class="img-responsive img-circle" src="{{Auth::user()->pro_pic}}" alt="Image">
          </span>
          <div class="comment-body">
            <form class="form" id="form-comment" action="/comment" method="post">
              {{csrf_field()}}
              <input id="comment-token" type="hidden" name="_token" value="{{ csrf_token() }}">
              <textarea name="comment" id="textarea" class="form-control input-sm" rows="2" type="text" placeholder="Write your comment..." required></textarea>
              <div align="right">
               <button class="btn" id="submit" style="margin-top: 10px;"><span>Comment</span></button>
             </div>
           </form>
         </div><!--/ comment-body -->        
       </div><!--/ modal-meta-bottom -->

     </div><!--/ modal-meta-top -->
          </div><!--/ col-md-4 -->
      
         </div><!--/ row -->
        </div><!--/ modal-body -->
    
       </div><!--/ modal-content -->
      </div><!--/ modal-dialog -->
     </div><!--/ modal --> 
	   
     <!-- ==============================================
	 Scripts
	 =============================================== -->
	<script>
function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
document.getElementById("defaultOpen").click();
</script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/base.js"></script>
	<script src="plugins/slimscroll/jquery.slimscroll.js"></script>
	<script>
	$('#Slim,#Slim2').slimScroll({
	        height:"auto",
			position: 'right',
			railVisible: true,
			alwaysVisible: true,
			size:"8px",
		});		
	</script>
<script type="text/javascript">

            /*

              This script is used to check if the profile pic and caption is uplaoded or not

              If not then triggers the modal to upload the pic and caption

              */

              var back = "<?php if (!empty(Auth::user()->view_self)) echo 1;else echo 0; ?>" ;

              var back2 = "<?php echo Auth::user()->pro_pic; ?>" ;

              $(document).ready(function() {

                $('#modal2').modal('hide');

                if ( (!back)||!(back2) ) {

                  $("#modal2").modal('show');

                } else {

                }



              });
              $('#photo').click(function(){

                $('#photo').submit();

              });

              



              $('#OpenImgUpload').click(function(){ $('#fileToUpload').trigger('click'); });

              function readURL(input) {



                if (input.files && input.files[0]) {

                  var reader = new FileReader();



                  reader.onload = function (e) {

                    $('#OpenImgUpload')

                    .attr('src', e.target.result)

                  };



                  reader.readAsDataURL(input.files[0]);

                }

              }

            </script>


  <script>
    $('#like').click('#like', function() {
      var formData = {
      	'pic_id' : $('.enlargeImageModalSource').attr('id'),
        '_token' : $('#comment-token').val()
      }

      $.ajax({
        url: "/likeadd",
        type: "POST",
        data: formData,

        success: function(response)
        {

         document.getElementById("like").innerHTML = response;
       },
       error: function(data)
       {

       }
     });
    });
    $('#comment_btn').click('#comment_btn', function() {
      var formData = {
        'comments' : $('textarea[name=comment]').val(),
      	'pic_id' : $('.enlargeImageModalSource').attr('id'),
        '_token' : $('#comment-token').val()
      }
      $.ajax({
        url: "/commentadd",
        type: "POST",
        data: formData,

        success: function(response)
        {

          document.getElementById("comments").innerHTML = response;
        },
        error: function(data)
        {

        }
      });
    });
    $(function() {
      $('.product-item-img').on('click', function() {
        $('.enlargeImageModalSource').attr('src', $(this).attr('src'));
        $('.enlargeImageModalSource').attr('id', $(this).attr('id'));
        $('#myModal').modal('show');
        var formData = {
          'comments' : $('textarea[name=comment]').val(),
      	  'pic_id' : $('.enlargeImageModalSource').attr('id'),
          '_token' : $('#comment-token').val()
        }
        $.ajax({
          url: "/commentadd",
          type: "POST",
          data: formData,

          success: function(response)
          {

            document.getElementById("comments").innerHTML = response;
          },
          error: function(data)
          {

          }
        });
      });
    });
    
    $(document).ready(function (e) {
      $('form#form-comment').on('submit', function(e) {
       e.preventDefault();
       var formData = {
        'comments' : $('textarea[name=comment]').val(),
      	'pic_id' : $('.enlargeImageModalSource').attr('id'),
        '_token' : $('#comment-token').val()
      }
      // console.log(formData);

      $.ajax({
        url: "/comment",
        type: "POST",
        data: formData,

        success: function(response)
        {
          console.log('Added Comments');
          document.getElementById("textarea").value="";
          document.getElementById("comments").innerHTML = response;
        },
        error: function(data)
        {
          console.log('Error in comment');  
        }
      });
    });
    });
  </script>
  <script>
      var user = <?php echo $user;?>;
      // console.log(user[0].name);
      var names = [];
      for (var i = 0; i < user.length; i++) {
        names[i] = user[i].name;
      }
      // console.log('names',names);

      $(document).ready(function() {
        $('#search').autocomplete({
          source: [names]
        });   
      });
      $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
  </script>
  <script type="text/javascript">
    $(document).ready(function () {
        var formData = {
      	  'pic_id' : $('.enlargeImageModalSource').attr('id'),
          '_token': '{!! csrf_token() !!}',
        }
        $.ajax({
          url: "/likes",
          type: "POST",
          data: formData,

          success: function(response)
          {

            document.getElementById("like").innerHTML = response;

          },
          error: function(data)
          {

          }
        });
    });
  </script>
            </html>
            


  </body>
</html>
