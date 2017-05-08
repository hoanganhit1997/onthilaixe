<!--Link bootstrap: http://www.layoutit.com/-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- <link href="http://www.layoutit.com/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">-->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#">Trang chủ</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Thông tin<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Đề ngẫu nhiên</a>
								</li>
								<li>
									<a href="#">Bộ đề</a>
								</li>
								<li>
									<a href="#">Thư viện đề</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Lí thuyết</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Thông tin trang</a>
								</li>
							</ul>
							<li>
							<a href="#">Hướng dẫn</a>
							</li>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control">
						</div> 
						<button type="submit" class="btn btn-default">
							Tìm kiếm
						</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Đăng nhập</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hồ sơ<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Lịch sử thi</a>
								</li>
								<li>
									<a href="#">Cài đặt thông tin</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Đăng xuất</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				
			</nav>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			 <h2>
				Đề thi ngẫu nhiên
				</h2>
		</div>
	</div>
<form  action="" method="POST" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">
      <br>
		<div class="carousel slide" id="carousel-1" data-interval="9999999">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-1">
					</li>
					<li data-slide-to="1" data-target="#carousel-1">
					</li>
					<li data-slide-to="2" data-target="#carousel-1">
					</li>
                    <li data-slide-to="3" data-target="#carousel-1">
					</li>
                    <li data-slide-to="4" data-target="#carousel-1">
					</li>
                    <li data-slide-to="5" data-target="#carousel-1">
					</li>
                    <li data-slide-to="6" data-target="#carousel-1">
					</li>
                    <li data-slide-to="7" data-target="#carousel-1">
					</li>
                    <li data-slide-to="8" data-target="#carousel-1">
					</li>
                    <li data-slide-to="9" data-target="#carousel-1">
					</li>
                    
				</ol>
				<div class="carousel-inner">

					<div class="item active">
                    <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-10">
                                @yield('Ques0')
                            </div>
                         </div>
                         
						<br>
						<div class="row">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-9">
                                 <input type="checkbox" name="cb[]" value="01" /> 
                                  @yield('answ01')
                                  <br><br>
                            </div>
                         </div>
                         
                        	 <br>
						<div class="row">
                            <div class="col-md-3">
                            </div>
							<div class="col-md-9">
                                <input type="checkbox" name="cb[]" value="02" /> 
                                 @yield('answ02')
                                 <br><br>
                            </div>
                         </div>
                         
                         		<br>
						 <div class="row">
                            <div class="col-md-3">
                            </div>
							<div class="col-md-9">
                                 <input type="checkbox" name="cb[]" value="03" /> 
                                 @yield('answ03')
                                 <br><br>
                            </div>
                         </div>
					</div>
                    
					<div class="item">
                    <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-10">
                                @yield('Ques1')
                            </div>
                         </div>
                         
						<br>
								<div class="row">
                                	<div class="col-md-3">
                                    </div>
									<div class="col-md-9">
                                            <input type="checkbox" name="cb[]" value="11" /> 
                                            @yield('answ11')
                                            <br><br>
                                    </div>
                                </div>
                                
                                <br>
								<div class="row">
                                	<div class="col-md-3">
                                    </div>
									<div class="col-md-9">
                                            <input type="checkbox" name="cb[]" value="12" /> 
                                            @yield('answ12')
                                            <br><br>
                                    </div>
                                </div>
                                
                                <br>
								<div class="row">
                                	<div class="col-md-3">
                                    </div>
									<div class="col-md-9">
                                            <input type="checkbox" name="cb[]" value="13" /> 
                                            @yield('answ13')
                                            <br><br>
                                    </div>
                                </div>
					</div>
                    
					<div class="item">
                    <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-10">
                                @yield('Ques2')
                            </div>
                         </div>
                         
						<br>
						<div class="row">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-9">
                                 <input type="checkbox" name="cb[]" value="21" /> 
                                  @yield('answ21')
                                  <br><br>
                            </div>
                         </div>
                         
                        	 <br>
						<div class="row">
                            <div class="col-md-3">
                            </div>
							<div class="col-md-9">
                                <input type="checkbox" name="cb[]" value="22" /> 
                                 @yield('answ22')
                                 <br><br>
                            </div>
                         </div>
                         
                         		<br>
						 <div class="row">
                            <div class="col-md-3">
                            </div>
							<div class="col-md-9">
                                 <input type="checkbox" name="cb[]" value="23" /> 
                                 @yield('answ23')
                                 <br><br>
                            </div>
                         </div>
					</div>

					<div class="item">
                    <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-10">
                                @yield('Ques3')
                            </div>
                         </div>
                         
						<br>
								<div class="row">
                                	<div class="col-md-3">
                                    </div>
									<div class="col-md-9">
                                            <input type="checkbox" name="cb[]" value="31" /> 
                                            @yield('answ31')
                                            <br><br>
                                    </div>
                                </div>
                                
                                <br>
								<div class="row">
                                	<div class="col-md-3">
                                    </div>
									<div class="col-md-9">
                                            <input type="checkbox" name="cb[]" value="32" /> 
                                            @yield('answ32')
                                            <br><br>
                                    </div>
                                </div>
                                
                                <br>
								<div class="row">
                                	<div class="col-md-3">
                                    </div>
									<div class="col-md-9">
                                            <input type="checkbox" name="cb[]" value="33" /> 
                                            @yield('answ33')
                                            <br><br>
                                    </div>
                                </div>
					</div>
                    
					<div class="item">
                    <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-10">
                                @yield('Ques4')
                            </div>
                         </div>
                         
						<br>
						<div class="row">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-9">
                                 <input type="checkbox" name="cb[]" value="41" /> 
                                  @yield('answ41')
                                  <br><br>
                            </div>
                         </div>
                         
                        	 <br>
						<div class="row">
                            <div class="col-md-3">
                            </div>
							<div class="col-md-9">
                                <input type="checkbox" name="cb[]" value="42" /> 
                                 @yield('answ42')
                                 <br><br>
                            </div>
                         </div>
                         
                         		<br>
						 <div class="row">
                            <div class="col-md-3">
                            </div>
							<div class="col-md-9">
                                 <input type="checkbox" name="cb[]" value="43" /> 
                                 @yield('answ43')
                                 <br><br>
                            </div>
                         </div>
					</div>

					<div class="item">
                    <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-10">
                                @yield('Ques5')
                            </div>
                         </div>
                         
						<br>
								<div class="row">
                                	<div class="col-md-3">
                                    </div>
									<div class="col-md-9">
                                            <input type="checkbox" name="cb[]" value="51" /> 
                                            @yield('answ51')
                                            <br><br>
                                    </div>
                                </div>
                                
                                <br>
								<div class="row">
                                	<div class="col-md-3">
                                    </div>
									<div class="col-md-9">
                                            <input type="checkbox" name="cb[]" value="52" /> 
                                            @yield('answ52')
                                            <br><br>
                                    </div>
                                </div>
                                
                                <br>
								<div class="row">
                                	<div class="col-md-3">
                                    </div>
									<div class="col-md-9">
                                            <input type="checkbox" name="cb[]" value="53" /> 
                                            @yield('answ53')
                                            <br><br>
                                    </div>
                                </div>
					</div>
                    
					<div class="item">
                    <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-10">
                                @yield('Ques6')
                            </div>
                         </div>
                         
						<br>
						<div class="row">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-9">
                                 <input type="checkbox" name="cb[]" value="61" /> 
                                  @yield('answ61')
                                  <br><br>
                            </div>
                         </div>
                         
                        	 <br>
						<div class="row">
                            <div class="col-md-3">
                            </div>
							<div class="col-md-9">
                                <input type="checkbox" name="cb[]" value="62" /> 
                                 @yield('answ62')
                                 <br><br>
                            </div>
                         </div>
                         
                         		<br>
						 <div class="row">
                            <div class="col-md-3">
                            </div>
							<div class="col-md-9">
                                 <input type="checkbox" name="cb[]" value="63" /> 
                                 @yield('answ63')
                                 <br><br>
                            </div>
                         </div>
					</div>

					<div class="item">
                    <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-10">
                                @yield('Ques7')
                            </div>
                         </div>
                         
						<br>
								<div class="row">
                                	<div class="col-md-3">
                                    </div>
									<div class="col-md-9">
                                            <input type="checkbox" name="cb[]" value="71" /> 
                                            @yield('answ71')
                                            <br><br>
                                    </div>
                                </div>
                                
                                <br>
								<div class="row">
                                	<div class="col-md-3">
                                    </div>
									<div class="col-md-9">
                                            <input type="checkbox" name="cb[]" value="72" /> 
                                            @yield('answ72')
                                            <br><br>
                                    </div>
                                </div>
                                
                                <br>
								<div class="row">
                                	<div class="col-md-3">
                                    </div>
									<div class="col-md-9">
                                            <input type="checkbox" name="cb[]" value="73" /> 
                                            @yield('answ73')
                                            <br><br>
                                    </div>
                                </div>
					</div>
                                        
					<div class="item">
                    <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-10">
                                @yield('Ques8')
                            </div>
                         </div>
                         
						<br>
						<div class="row">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-9">
                                 <input type="checkbox" name="cb[]" value="81" /> 
                                  @yield('answ81')
                                  <br><br>
                            </div>
                         </div>
                         
                        	 <br>
						<div class="row">
                            <div class="col-md-3">
                            </div>
							<div class="col-md-9">
                                <input type="checkbox" name="cb[]" value="82" /> 
                                 @yield('answ82')
                                 <br><br>
                            </div>
                         </div>
                         
                         		<br>
						 <div class="row">
                            <div class="col-md-3">
                            </div>
							<div class="col-md-9">
                                 <input type="checkbox" name="cb[]" value="83" /> 
                                 @yield('answ83')
                                 <br><br>
                            </div>
                         </div>
					</div>

					<div class="item">
                    <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-10">
                                @yield('Ques9')
                            </div>
                         </div>
                         
						<br>
								<div class="row">
                                	<div class="col-md-3">
                                    </div>
									<div class="col-md-9">
                                            <input type="checkbox" name="cb[]" value="91" /> 
                                            @yield('answ91')
                                            <br><br>
                                    </div>
                                </div>
                                
                                <br>
								<div class="row">
                                	<div class="col-md-3">
                                    </div>
									<div class="col-md-9">
                                            <input type="checkbox" name="cb[]" value="92" /> 
                                            @yield('answ92')
                                            <br><br>
                                    </div>
                                </div>
                                
                                <br>
								<div class="row">
                                	<div class="col-md-3">
                                    </div>
									<div class="col-md-9">
                                            <input type="checkbox" name="cb[]" value="93" /> 
                                            @yield('answ93')
                                            <br><br>
                                    </div>
                                </div>
					</div>
				</div> 
    <a class="left carousel-control" href="#carousel-1" data-slide="prev">
    	span class="glyphicon glyphicon-chevron-left"></span></a> 
    <a class="right carousel-control" href="#carousel-1" data-slide="next">
    	<span class="glyphicon glyphicon-chevron-right"></span></a>
                
  		</div>
                     <div class="row">
                    	<div class="col-md-5">
                    	</div>
						<div class="col-md-7">
                    	 <input type="submit" name="submit-form" value="Finish"/>
                    	</div>
                    </div>
 </form>  

<!--
    <script src="http://www.layoutit.com/js/jquery.min.js"></script>
    <script src="http://www.layoutit.com/js/bootstrap.min.js"></script>
    <script src="http://www.layoutit.com/js/scripts.js"></script>-->
</html>
