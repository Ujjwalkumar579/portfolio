<!DOCTYPE html>
<html>
    <title></title>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie-edge">

        <link href="./bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="./styles.css" rel="stylesheet">
        
    </head>
    <?php
    error_reporting(0);
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Subject=$_POST['subject'];
    $Feedback=$_POST['feedback'];

    if($Name==NULL){
        echo "<script>window.location='index.html'</script>";
        //header('index.html');
    }
    ?>

    <body>
        <div class="container-fluid bg-dark p-0">
            <div class="container bg-dark">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                            
                            <a class="navbar-brand"><b> BRAND NAME </b></a>
                            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                              <div class="collapse navbar-collapse" id="nav">
                                   <ul class="navbar-nav">
                                      <li class="nav-item"><a class="nav-link active">Home</a></li>
                                      <li class="nav-item"><a class="nav-link">About</a></li>
                                      <li class="nav-item"><a class="nav-link">Skill</a></li>
                                      <li class="nav-item"><a class="nav-link">Work</a></li>
                                      <li class="nav-item"><a class="nav-link">Contact</a></li>
                                   </ul>   
    
                                  <ul class="icons">
                                    <li><i class="fab fa-facebook text-light pt-3"></i></li>
                                    <li><i class="fab fa-twitter text-light"></i></li>
                                    <li> <i class="fab fa-instagram text-light"></i> </li>  
                                </ul>
                              </div>
                              
                      </nav>   
                    </div>
    
                    
                </div>
            </div>
    
    
    
            <div class="parallax">
               <div class="container">
                   <div class="row" style="padding-top:150px;">
                       <div class="col-12 intro">
                        <p class="text-center"><span>I am </span> Ujjwal Kumar</p>
                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-6 ">
                        <div class="quali text-center ">
                            <h5 class="">WEB DEVELOPER &amp; GRAPHICS DESIGNER</h5>
                        </div>
                    </div>
                    <div class="col-3"></div>
                    </div>
                    
                       </div>
                   </div>
                    
               </div>
            </div>
    
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="fw-lighter pt-4 pb-4 text-center">Form Submitted</h2>
                </div>
            </div>

            <div class="row p-5">
                <div class="col-12">
                    <h5 class="">Your Name :- <?php echo $Name; ?> </h5> 
                </div>

                <div class="col-12 pt-3">
                    <h5 class=""> Your Email Id :- <?php echo $Email; ?> </h5>
                </div>

                <div class="col-12 pt-3">
                    <h5 class="">Subject :- <?php echo $Subject; ?> </h5>
                </div>

                <div class="col-12 pt-3">
                    <h5 class="">Your Feedback :- <?php echo $Feedback; ?> </h5>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-warning p-5">
            <h2 class="fw-lighter text-center">What an Outstanding Project</h2>
            <p class="fw-lighter fs-5 text-center">Just send me a message!</p>
        </div>
    </body>
</html>