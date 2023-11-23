<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<style>
* {box-sizing: border-box}

.container1 {
  width: 100%;
  background-color: #D3D3D3;
}


.skills {
  text-align: right;
  padding-top: 10px;
  padding-bottom: 10px;
  color: white;
}

.apple {width: {{fruit_dict['apple']}}%; background-color: #8B0000;}
.banana {width: {{fruit_dict['banana']}}%; background-color: #B8860B;}
.orange {width: {{fruit_dict['orange']}}%; background-color: #FF8C00;}
.fresh {width: {{rotten[0]}}%; background-color: #228B22;}
.rotten {width: {{rotten[1]}}%; background-color: #696969;}



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
</head>
<body style=" text-align: center; align:center; background-repeat: no-repeat; background-size: auto;">


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
														<a class="nav-link" href="#"  style="margin-left:78px;font-weight: bold;font-size:17px">Trang Chủ</a>
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
														<a class="nav-link" href="{{ url_for('home')}}" style="margin-left:15px;font-weight: bold;font-size:17px">Nhận Dạng <span class="sr-only">(current)</span></a>
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








<br>
<h1><span class="badge badge-secondary">Dự đoán đã kết thúc  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-award" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M9.669.864L8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193l-1.51-.229L8 1.126l-1.355.702-1.51.229-.684 1.365-1.086 1.072L3.614 6l-.25 1.506 1.087 1.072.684 1.365 1.51.229L8 10.874l1.356-.702 1.509-.229.684-1.365 1.086-1.072L12.387 6l.248-1.506-1.086-1.072-.684-1.365z"/>
  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
</svg></span></h1>
<br>

<h4 class="display-4">Dự đoán mô hình  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bar-chart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5h-2v12h2V2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z"/>
</svg></h4>

<hr>
<div class="container" style="background-color: white;">
<div class="row">
  <div class="col-sm">
    <ul>
      <h3>1. Phân loại trái cây <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-down-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path fill-rule="evenodd" d="M4.646 7.646a.5.5 0 0 1 .708 0L8 10.293l2.646-2.647a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 0-.708z"/>
  <path fill-rule="evenodd" d="M8 4.5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5z"/>
</svg></h3>
    </ul>
    <hr>
    <br>
  <h4 align='left'><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-percent" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg> Apple</h4>
  <div class="container1">
    <div class="skills apple">{{fruit_dict['apple']}} %</div>
  </div>
  <br>

  <h4 align='left'><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-percent" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg> Banana</h4>
  <div class="container1">
    <div class="skills banana">{{fruit_dict['banana']}} %</div>
  </div>
  <br>

  <h4 align='left'><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-percent" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg> Orange</h4>
  <div class="container1">
    <div class="skills orange">{{fruit_dict['orange']}} %</div>
  </div>
  <br>
  <ul>
    <h3>2. Phân loại chất lượng <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-down-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path fill-rule="evenodd" d="M4.646 7.646a.5.5 0 0 1 .708 0L8 10.293l2.646-2.647a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 0-.708z"/>
  <path fill-rule="evenodd" d="M8 4.5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5z"/>
</svg></h3>
  </ul>
  <hr>
  <br>
  <h4 align='left'><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-percent" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg> Tươi</h4>
  <div class="container1">
    <div class="skills fresh">{{rotten[0]}} %</div>
  </div>
  <br>

  <h4 align='left'> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-percent" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg>
Hư thối</h4>
  <div class="container1">
    <div class="skills rotten">{{rotten[1]}} %</div>
  </div>
<br>

  </div>
  <br>

 <div class="col-sm">
 <h3>Hình ảnh đã tải lên <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-arrow-up-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2 3a2 2 0 0 1 2-2h5.293a1 1 0 0 1 .707.293L13.707 5a1 1 0 0 1 .293.707V13a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3zm7 2V2l4 4h-3a1 1 0 0 1-1-1zM6.354 9.854a.5.5 0 0 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 8.707V12.5a.5.5 0 0 1-1 0V8.707L6.354 9.854z"/>
</svg></h3>

 <div class="container1">
  <img src="data:image/png;base64, {{plot_url}}" alt='Your uploaded image' height="70%" >
  </div>
<br>


   </div></div>
   <br><br>
</div>
<hr>

<br><br>


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
