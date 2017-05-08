<!--Link bootstrap: http://www.layoutit.com/-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </head>
  <body>
	
	<nav class="navbar navbar-default navbar-static-top" role="navigation">
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
									<a href="#">Thư viện câu hỏi</a>
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
						</li>
						<li>
							<a href="#">Hướng dẫn</a>
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
	
    <div class="container-fluid">
    <div class="row">
    	<h1 class="text-center">
			Kết quả bài thi
		</h1>
    </div>
    
	<div class="row">
		<div class="col-md-8">
        <h2 class="text-center">
				@yield('pass')
			</h2>
		</div>
		<div class="col-md-4">
			<h3 class="text-center">
				Tổng số
			</h3>
            <div class="row">
            	<h4 class="text-center text-danger">
					@yield('total')/10
				</h4>
            </div>
		</div>
	</div>
	
    
	<div class="row">
    	<div class="col-md-1">
        </div>
		<div class="col-md-2">
			<h3 class="text-center">
				Câu 1
			</h3>
            @yield('q1')
		</div>
		<div class="col-md-2">
			<h3 class="text-center">
				Câu 2
			</h3>
            @yield('q2')
		</div>
        
		<div class="col-md-2">
			<h3 class="text-center">
				Câu 3
			</h3>
            @yield('q3')
		</div>
        
		<div class="col-md-2">
			<h3 class="text-center">
				Câu 4
			</h3>
            @yield('q4')
		</div>
        
		<div class="col-md-2">
			<h3 class="text-center">
				Câu 5
			</h3>
            @yield('q5')
        </div>
        
		<div class="col-md-1">
        </div>
	</div>
    
<div class="row">
    	<div class="col-md-1">
        </div>
		<div class="col-md-2">
			<h3 class="text-center">
				Câu 6
			</h3>
            @yield('q6')
		</div>
        
		<div class="col-md-2">
			<h3 class="text-center">
				Câu 7
			</h3>
            @yield('q7')
		</div>
        
		<div class="col-md-2">
			<h3 class="text-center">
				Câu 8
			</h3>
            @yield('q8')
		</div>
        
		<div class="col-md-2">
			<h3 class="text-center">
				Câu 9
			</h3>
            @yield('q9')
		</div>
        
		<div class="col-md-2">
			<h3 class="text-center">
				Câu 10
			</h3>
            @yield('q10')
         </div>
		<div class="col-md-1">
        </div>
	</div>
  </body>
</html>