@extends('Template/header')
@section('page')
	
	<div class="row">
		<div class="col-md-10">
			 <h2>
				Đề thi ngẫu nhiên
				</h2>
		</div>
<script language="JavaScript">
                
                 
</script>
<form name= "checkform" action="" method="POST" >
<input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class = "col-md-2">
        	 <h2><span class="label label-warning" id="clock" ></span></h2>
        </div>
	</div>

      <br>
<!-- ////////////////////////////////////////////////////// -->      
		<div class="carousel slide" id="carousel-1"  data-interval="9999999">
				
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
                                 <input type="checkbox" name="cb[]" value="1" /> 
                                  @yield('answ01')
                                  <br><br>
                            </div>
                         </div>
                         
                        	 <br>
						<div class="row">
                            <div class="col-md-3">
                            </div>
							<div class="col-md-9">
                                <input type="checkbox" name="cb[]" value="2" /> 
                                 @yield('answ02')
                                 <br><br>
                            </div>
                         </div>
                         
                         		<br>
						 <div class="row">
                            <div class="col-md-3">
                            </div>
							<div class="col-md-9">
                                 <input type="checkbox" name="cb[]" value="3" /> 
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
                                            <input type="checkbox" name="cb[]" value="4" /> 
                                            @yield('answ11')
                                            <br><br>
                                    </div>
                                </div>
                                
                                <br>
								<div class="row">
                                	<div class="col-md-3">
                                    </div>
									<div class="col-md-9">
                                            <input type="checkbox" name="cb[]" value="5" /> 
                                            @yield('answ12')
                                            <br><br>
                                    </div>
                                </div>
                                
                                <br>
								<div class="row">
                                	<div class="col-md-3">
                                    </div>
									<div class="col-md-9">
                                            <input type="checkbox" name="cb[]" value="6" /> 
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
                                 <input type="checkbox" name="cb[]" value="7" /> 
                                  @yield('answ21')
                                  <br><br>
                            </div>
                         </div>
                         
                        	 <br>
						<div class="row">
                            <div class="col-md-3">
                            </div>
							<div class="col-md-9">
                                <input type="checkbox" name="cb[]" value="8" /> 
                                 @yield('answ22')
                                 <br><br>
                            </div>
                         </div>
                         
                         		<br>
						 <div class="row">
                            <div class="col-md-3">
                            </div>
							<div class="col-md-9">
                                 <input type="checkbox" name="cb[]" value="9" /> 
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
                                            <input type="checkbox" name="cb[]" value="10" /> 
                                            @yield('answ31')
                                            <br><br>
                                    </div>
                                </div>
                                
                                <br>
								<div class="row">
                                	<div class="col-md-3">
                                    </div>
									<div class="col-md-9">
                                            <input type="checkbox" name="cb[]" value="11" /> 
                                            @yield('answ32')
                                            <br><br>
                                    </div>
                                </div>
                                
                                <br>
								<div class="row">
                                	<div class="col-md-3">
                                    </div>
									<div class="col-md-9">
                                            <input type="checkbox" name="cb[]" value="12" /> 
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
                                 <input type="checkbox" name="cb[]" value="13" /> 
                                  @yield('answ41')
                                  <br><br>
                            </div>
                         </div>
                         
                        	 <br>
						<div class="row">
                            <div class="col-md-3">
                            </div>
							<div class="col-md-9">
                                <input type="checkbox" name="cb[]" value="14" /> 
                                 @yield('answ42')
                                 <br><br>
                            </div>
                         </div>
                         
                         		<br>
						 <div class="row">
                            <div class="col-md-3">
                            </div>
							<div class="col-md-9">
                                 <input type="checkbox" name="cb[]" value="15" /> 
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
                                            <input type="checkbox" name="cb[]" value="16" /> 
                                            @yield('answ51')
                                            <br><br>
                                    </div>
                                </div>
                                
                                <br>
								<div class="row">
                                	<div class="col-md-3">
                                    </div>
									<div class="col-md-9">
                                            <input type="checkbox" name="cb[]" value="17" /> 
                                            @yield('answ52')
                                            <br><br>
                                    </div>
                                </div>
                                
                                <br>
								<div class="row">
                                	<div class="col-md-3">
                                    </div>
									<div class="col-md-9">
                                            <input type="checkbox" name="cb[]" value="18" /> 
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
                                 <input type="checkbox" name="cb[]" value="19" /> 
                                  @yield('answ61')
                                  <br><br>
                            </div>
                         </div>
                         
                        	 <br>
						<div class="row">
                            <div class="col-md-3">
                            </div>
							<div class="col-md-9">
                                <input type="checkbox" name="cb[]" value="20" /> 
                                 @yield('answ62')
                                 <br><br>
                            </div>
                         </div>
                         
                         		<br>
						 <div class="row">
                            <div class="col-md-3">
                            </div>
							<div class="col-md-9">
                                 <input type="checkbox" name="cb[]" value="21" /> 
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
                                            <input type="checkbox" name="cb[]" value="22" /> 
                                            @yield('answ71')
                                            <br><br>
                                    </div>
                                </div>
                                
                                <br>
								<div class="row">
                                	<div class="col-md-3">
                                    </div>
									<div class="col-md-9">
                                            <input type="checkbox" name="cb[]" value="23" /> 
                                            @yield('answ72')
                                            <br><br>
                                    </div>
                                </div>
                                
                                <br>
								<div class="row">
                                	<div class="col-md-3">
                                    </div>
									<div class="col-md-9">
                                            <input type="checkbox" name="cb[]" value="24" /> 
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
                                 <input type="checkbox" name="cb[]" value="25" /> 
                                  @yield('answ81')
                                  <br><br>
                            </div>
                         </div>
                         
                        	 <br>
						<div class="row">
                            <div class="col-md-3">
                            </div>
							<div class="col-md-9">
                                <input type="checkbox" name="cb[]" value="26" /> 
                                 @yield('answ82')
                                 <br><br>
                            </div>
                         </div>
                         
                         		<br>
						 <div class="row">
                            <div class="col-md-3">
                            </div>
							<div class="col-md-9">
                                 <input type="checkbox" name="cb[]" value="27" /> 
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
                                            <input type="checkbox" name="cb[]" value="28" /> 
                                            @yield('answ91')
                                            <br><br>
                                    </div>
                                </div>
                                
                                <br>
								<div class="row">
                                	<div class="col-md-3">
                                    </div>
									<div class="col-md-9">
                                            <input type="checkbox" name="cb[]" value="29" /> 
                                            @yield('answ92')
                                            <br><br>
                                    </div>
                                </div>
                                
                                <br>
								<div class="row">
                                	<div class="col-md-3">
                                    </div>
									<div class="col-md-9">
                                            <input type="checkbox" name="cb[]" value="30" /> 
                                            @yield('answ93')
                                            <br><br>
                                    </div>
                                </div>
					</div>
				</div> 
  <a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  </a>
  <a class="right carousel-control" href="#carousel-1" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  </a>
  	</div>	
   </div> 
   
   
      <div class = "row">
		<div class="container-fluid,carousel-indicators">
                <center>
                <ul class="pagination pagination-lg">
                    <li data-slide-to="0" data-target="#carousel-1">
                        <a>1</a>
                    </li>
                    <li data-slide-to="1" data-target="#carousel-1">
                        <a>2</a>
                    </li>
                    <li data-slide-to="2" data-target="#carousel-1">
                        <a>3</a>
                    </li>
                    <li data-slide-to="3" data-target="#carousel-1">
                        <a>4</a>
                    </li>
                    <li data-slide-to="4" data-target="#carousel-1">
                        <a>5</a>
                    </li>
                    <li data-slide-to="5" data-target="#carousel-1">
                        <a>6</a>
                    </li>
                    <li data-slide-to="6" data-target="#carousel-1">
                        <a>7</a>
                    </li>
                    <li data-slide-to="7" data-target="#carousel-1">
                        <a>8</a>
                    </li>
                    <li data-slide-to="8" data-target="#carousel-1">
                        <a>9</a>
                    </li>
                    <li data-slide-to="9" data-target="#carousel-1">
                        <a>10</a>
                    </li>
                </ul>
                </center>
		  </div>
		</div>
                     <div class="row">	
                    	 <center><input id = "sumbit" type="submit" name="submit-form" value="Finish" /></center>
                    </div>
 </form>  

    <script src="/onthilaixe/counttime.js"></script>
</html>
@stop