<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Synthetic Stone</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="/assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="/assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Synthetic Stone</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> 
<a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="" class="user-image img-responsive"/>
                </li>
                <li>
                    <a   href="/dep"><i class="fa fa-dashboard fa-3x"></i>Departments</a>
                    </li>
                    <li>
                        <a   href="/admin"><i class="fa fa-table fa-3x"></i> Admin</a>
                    </li>
                    <li>
                    <a   href="/emp"><i class="fa fa-table fa-3x"></i> Employees</a>
                </li>
                     <li>
                        <a  href="/part"><i class="fa fa-home fa-3x"></i> Partner</a>
                    </li>
                    <li>
                        <a class="active-menu" href="/mat"><i class="fa fa-qrcode fa-3x"></i> Materials</a>
                    </li>
                           <li  >
                        <a href="/type"><i class="fa fa-qrcode fa-3x"></i> TypeProduct</a>
                    </li>	
                      <li  >
                      <a  href="/Pro"><i class="fa fa-table fa-3x"></i> Products</a>
                    </li>
                    <li  >
                        <a  href="/comp"><i class="fa fa-edit fa-3x"></i> component </a>
                    </li>				               
                    <li>
                        <a  href="/comde"><i class="fa fa-sitemap fa-3x"></i> component detail</a>
                      </li>  
                    <li>
                        <a  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>	
                </ul>
               
            </div>
               
            </div> 
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Materials</h3><a href="/mat" class="btn btn-primary">back</a>
                                        <form role="form"  method="post" action="{{route('mat.update',[$mat->Material_Id])}}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            @method('put')
                                            <div class="form-group">
                                                <label>Material Name</label>
                                            <input class="form-control" type="text" name="Material_Name" value="{{$mat->Material_Name}}">
                                            <label>Material Amount</label>
                                            <input class="form-control" type="text" name="Material_Amount" value="{{$mat->Material_Amount}}">
                                            </div>
                                            @if ($mat->Material_Status == "Enable")
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="Material_Status" value="Enable" checked />Enable
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="Material_Status" value="Disable"  />Disable
                                                            </label>
                                                        </div>
                                                    @else
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="Material_Status" value="Enable"  />Enable
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="Material_Status" value="Disable" checked />Disable
                                                            </label>
                                                        </div>
                                                    @endif
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-warning btn-sm">edit</button>
                                            </div>
                                        </form>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
                </div>
            </div>
                      
                    </div>
                </div>
            </div>     <!-- /. ROW  -->           
    </div>
    </div>

</body>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="/assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="/assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="/assets/js/custom.js"></script>
    
   
</body>
</html>
