<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Fido Ate What?</title>
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/style.css"> </head>

    <body>
        <!--Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-nav fixed-top" role="navigation">
            <div class="container"> <a class="navbar-brand" href="index.html">Fido Ate What?</a>
                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar"> &#9776; </button>
                <div class="collapse navbar-collapse" id="exCollapsingNavbar">
                    <ul class="nav navbar-nav">
                        <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="uxdata.php" class="nav-link">Toxicity Database</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Chocolate Calculator </a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Find a Vet</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
                    </ul>
                    <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                        <li class="dropdown order-1">
                            <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Login <span class="caret"></span></button>
                            <ul class="dropdown-menu dropdown-menu-right mt-1">
                                <li class="p-3">
                                    <form class="form" role="form">
                                        <div class="form-group">
                                            <input id="emailInput" placeholder="Email" class="form-control form-control-sm" type="text" required=""> </div>
                                        <div class="form-group">
                                            <input id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="text" required=""> </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                        <div class="form-group text-xs-center"> <small><a href="#">Forgot password?</a></small> <small><a href="#myRegModal" data-toggle="modal">Register</a></small> </div>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>





        <!--Footer-->
        <footer id="footer-home" class="bg-footer text-center p-4 mt-5">
        
         <div class="container">
            
            <div class="row">
                
                <div class="col">
                    
                    <p>
                       <i class="fa fa-copyright fa-lg" aria-hidden="true"></i> Glozzum 2017
                        
                    </p>
                    
                    
                    </div>
                
                </div>
        
            </div>
        
         </footer>


        <!--  Modals  -->

        <!--Sign Up Form Modal-->
                    
<div id="myRegModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body">                            
                    
                       <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Register Now!</h3>
                            <p>Registering will allow you to share your expiriences in the Fido Ate What? database.</p>
                        </div>
                        <div class="card-block">
                            <form class="form" role="form" autocomplete="off">
                                <div class="form-group">
                                    
                                    <input type="text" class="form-control" id="inputName" name="name" placeholder="Full name">
                                </div>
                                <div class="form-group">
                                  
                                    <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" required="">
                                </div>
                                <div class="form-group">
                               
                                    <input type="password" class="form-control" name="password1" id="inputPassword3" placeholder="Password" required="">
                                </div>
                                <div class="form-group">
                                  
                                    <input type="password" class="form-control" name="password2" id="inputVerify3" placeholder="Password (again)" required="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg float-right">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
    </div>
        </div>
                   
                    <!-- /form card register -->


        <!--required order_Personal js file is last-->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/index.js"></script>
    </body>

    </html>