<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<style media="screen">
     .jumbotron{
			 margin-top: 20px;
			 background-image: url("../static/banner-con-frutas-jugosas-sobre-un-fondo-blanco-r0h772.jpg");
			 background-size: cover;
			 color: black;
			 opacity: 1;  filter: alpha(opacity=50);

		 }


		 /* Hiệu ứng tuyết rơi */
		 .snow-container{
		   position:fixed;
		   width:100%;
		   max-width:100%;
		   z-index:99999;
		   pointer-events:none;
		   overflow:hidden;
		   top:0;
		   height:100%
		 }
		 .snow{
		   display:block;
		   position:absolute;
		   z-index:2;
		   top:0;
		   right:0;
		   bottom:0;
		   left:0;
		   pointer-events:none;
		   -webkit-transform:translate3d(0,-100%,0);
		   transform:translate3d(0,-100%,0);
		   -webkit-animation:snow linear infinite;
		   animation:snow linear infinite
		 }
		 .snow.foreground{
		   background-image:url("https://dl6rt3mwcjzxg.cloudfront.net/assets/snow/snow-large-075d267ecbc42e3564c8ed43516dd557.png");
		   -webkit-animation-duration:15s;
		   animation-duration:10s
		 }
		 .snow.foreground.layered{
		   -webkit-animation-delay:7.5s;
		   animation-delay:7.5s
		 }
		 .snow.middleground{
		   background-image:url(https://dl6rt3mwcjzxg.cloudfront.net/assets/snow/snow-medium-0b8a5e0732315b68e1f54185be7a1ad9.png);
		   -webkit-animation-duration:20s;
		   animation-duration:15s
		 }
		 .snow.middleground.layered{
		   -webkit-animation-delay:10s;
		   animation-delay:10s
		 }
		 .snow.background{
		   background-image:url(https://dl6rt3mwcjzxg.cloudfront.net/assets/snow/snow-small-1ecd03b1fce08c24e064ff8c0a72c519.png);
		   -webkit-animation-duration:25s;
		   animation-duration:20s
		 }
		 .snow.background.layered{
		   -webkit-animation-delay:12.5s;
		   animation-delay:12.5s
		 }
		 @-webkit-keyframes snow{0%{-webkit-transform:translate3d(0,-100%,0);
		   transform:translate3d(0,-100%,0)}100%{-webkit-transform:translate3d(5%,100%,0);
			 transform:translate3d(5%,100%,0)}}
		 @keyframes snow{0%{-webkit-transform:translate3d(0,-100%,0);
		   transform:translate3d(0,-100%,0)}100%{-webkit-transform:translate3d(5%,100%,0);
			 transform:translate3d(5%,100%,0)
		   }}

		</style>
		<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


		<title></title>
	</head>


	<body style="background-image: linear-gradient(to right bottom, #d3d70e, #bbda2c, #a4db42, #8cdc56, #74dc69, #51d782, #2cd097, #00c8a8, #00b7ba, #00a5c4, #0090c4, #157ab9);
	 text-align: center; align:center; background-color:#FCDFFF; background-repeat:no-repeat; ">
	 <nav class="navbar navbar-expand-lg " style="height:40px;background-color:#3CB371;">
	 <ul class="horizontal-menu" style="width:2300px; " >
                            <i class="fa fa-envelope " href="" style="margin-top:19px;font-weight: bold; font-size: 16px; color:#fff;margin-left:-5%"> &nbsp;
                           Group06@student.ctu.edu.vn                             

                          </i>

                
                      <i href="#" style="font-weight: bold; font-size: 16px; color:#fff;font-style:normal;margin-left:3%;" >Miễn Phí Vận Chuyển</i>
			

					  <i href="#https://twitter.com/" style="font-weight: bold; font-size: 16px; color:#fff;margin-left:35%"><i class="fa fa-twitter" aria-hidden="true"></i></i>
                       <i href="#https://facebook.com/" style="font-weight: bold; font-size: 16px; color:#fff;margin-left:1%"><i class="fa fa-facebook" aria-hidden="true"></i></i>
                     <i href="#https://pinerest.com/"  style="font-weight: bold; font-size: 16px; color:#fff;margin-left:1%"><i class="fa fa-pinterest" aria-hidden="true"></i></i>
					 <i class="biolife-icon fa fa-user" aria-hidden="true" style="font-size: 22px; color:#fff;margin-left:4%"></i>
					 <i href="user_login.php" class="login-link" style="font-size: 16px; font-style:normal;color:#fff;margin-left:1%">Login</i>  
                    </ul>
                </div>


	 </nav> 

									 <nav class="navbar navbar-expand-lg navbar-light bg-light" style="height:90px;">
										      <img src="../static/logo.png" alt="Tag" width="135px" height="36px" style="margin-left:140px">
													<!-- <a class="navbar-brand" href="{{ url_for('home')}}">Fruit Classifier with quality_checker</a> -->
													<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
													<span class="navbar-toggler-icon"></span>
													</button>

													<div class="collapse navbar-collapse" id="navbarSupportedContent" >
													<ul class="navbar-nav mr-auto" style="width:1200px">
													<li class="nav-item active">
														<a class="nav-link" href="#"  style="margin-left:78px;font-weight: bold;font-size:17px">Trang Chủ </a>
													</li>

													<li class="nav-item active">
														<a class="nav-link" href="#"  style="margin-left:15px;font-weight: bold;font-size:17px">Sản Phẩm</a>
													</li>


													<li class="nav-item active">
														<a class="nav-link" href="#" style="margin-left:15px;font-weight: bold;font-size:17px">Về Chúng Tôi</a>
													</li>

													<li class="nav-item active">
														<a class="nav-link" href="#" style="margin-left:15px;font-weight: bold;font-size:17px">Liên Hệ</a>
													</li>
									
													<li class="nav-item active">
														<a class="nav-link" href="{{ url_for('home')}}" style="margin-left:15px;font-weight: bold;font-size:17px">Khôi Phục</a>
													</li>

													<div style="margin-left:27%;margin-top:10px">
													<span class="icon-qty-combine" >
                                    <i class="fa fa-lock biolife-icon" style="color:#333333;font-size: 24px; "></i>
                        			        </span>
                                <span class="title" style="font-weight: bold;font-size:15px;color:#333333">Giỏ Hàng : 0</span>
												</div>
													</ul>
													</div> 
													<div class="col-lg-9 col-md-8 padding-top-2px" style="margin-top:10px">

													</div>
											     </nav> 
			
    {% block content %}

		{% endblock %}


		<!-- Hiệu ứng tuyết rơi -->
		<div class='snow-container'>
			<div class='snow foreground'></div>
			<div class='snow foreground layered'></div>
			<div class='snow middleground'></div>
			<div class='snow middleground layered'></div>
			<div class='snow background'></div>
			<div class='snow background layered'></div>
			</div>

	</body>
</html>
