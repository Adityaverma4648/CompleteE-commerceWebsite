<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>

    <!-- bootstrap cdn -->

                   <!-- Latest compiled and minified CSS -->
                           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

                           <!-- Latest compiled JavaScript -->
                           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>      

    <!-- ---------- -->
<!-- SASS -->
  <link rel="stylesheet" href="style.css">
<!--  -->
<!-- Fontawsome -->
          <script src="https://kit.fontawesome.com/8dc03a4776.js" crossorigin="anonymous"></script>
<!--  google fonts  -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&family=Roboto&display=swap" rel="stylesheet">

<!--  -->

</head>
<body>
            <?php include 'navbar.php' ?>
    <section class="d-flex align-items-center justify-content-center d-none">
        <div id="loginOnHover" class="bg-white px-2 py-3 mt-5" >
            <div class= "hoverComp sign-up d-flex border-bottom border-black-50 py-2">
                <a class="text-decoration-none text-black">
                    New Customer?
                </a>
                <span class="small text-green">
                    SignUP
                 </span>
            </div >
            <div class= "hoverComp sign-up d-flex  border-bottom border-black-50 py-2">
              <a class="text-decoration-none text-black">
                  New Customer?
              </a>
              <span class="small text-green">
                  SignUP
               </span>
          </div >
          <div class= "hoverComp sign-up d-flex  border-bottom border-black-50 py-2">
              <a class="text-decoration-none text-black">
                  New Customer?
              </a>
              <span class="small text-green">
                  SignUP
               </span>
          </div >
          <div class= "hoverComp sign-up d-flex  border-bottom border-black-50 py-2">
              <a class="text-decoration-none text-black">
                  New Customer?
              </a>
              <span class="small text-green">
                  SignUP
               </span>
          </div >
          <div class= "hoverComp sign-up d-flex">
              <a class="text-decoration-none text-black">
                  New Customer?
              </a>
              <span class="small text-green">
                  SignUP
               </span>
          </div >

      </div>
    </section>
    <section id="categories">
          <div class="row d-flex align-items-center justify-content-center py-2 border-bottom border-black-50">
               <div class="col-sm-1 mx-1 d-flex flex-column align-items-center justify-content-center p-1">
                           <div class="d-flex align-items-center justify-content-center">
                            <img src="./img/shopping-cart.png" alt="">
                           </div>
                            <div>
                                     <a href="#" class="btn hover-links">Electronics</a>                     
                             </div>
               </div>
               <div class="col-sm-1  mx-1  d-flex flex-column align-items-center justify-content-center p-1">
                           <div class="d-flex align-items-center justify-content-center">
                            <img src="./img/shopping-cart.png" alt="">
                           </div>
                            <div>
                                     <a href="#" class="btn hover-links">Electronics</a>                      
                            </div>
            </div>
            <div class="col-sm-1  mx-1  d-flex flex-column align-items-center justify-content-center p-1">
                          <div class="d-flex align-items-center justify-content-center">
                            <img src="./img/shopping-cart.png" alt="">
                          </div>
                          <div>
                                     <a href="#" class="btn hover-links">Electronics</a>                          
                           </div>
            </div>
            <div class="col-sm-1  mx-1  d-flex flex-column align-items-center justify-content-center p-1">
                           <div class="d-flex align-items-center justify-content-center">
                            <img src="./img/shopping-cart.png" alt="">
                           </div>
                            <div>
                                <a href="#" class="btn hover-links">Electronics</a>
                            </div>

            </div>
            <div class="col-sm-1  mx-1  d-flex flex-column align-items-center justify-content-center p-1">
                           <div class="d-flex align-items-center justify-content-center">
                            <img src="./img/shopping-cart.png" alt="">
                           </div>
                            <div>
                                 <a href="#" class="btn hover-links">Electronics</a>                          
                            </div>
            </div>
            <div class="col-sm-1  mx-1 d-flex flex-column align-items-center justify-content-center  p-1">
                           <div class="d-flex align-items-center justify-content-center">
                            <img src="./img/shopping-cart.png" alt="">
                           </div>
                            <div>
                                <a href="#" class="btn hover-links">Electronics</a>                         
                           </div>
            </div>
            <div class="col-sm-1  mx-1  d-flex flex-column align-items-center justify-content-center p-1">
                   <div class="d-flex align-items-center justify-content-center">
                    <img src="./img/shopping-cart.png" alt="">
                   </div>
                   <div>
                          <a href="#" class="btn hover-links">Electronics</a>                
                    </div>
            </div>       
            <div class="col-sm-1  mx-1 d-flex flex-column align-items-center justify-content-center  p-1">
                   <div class="d-flex align-items-center justify-content-center">
                    <img src="./img/shopping-cart.png" alt="">
                   </div>
                    <div>
                        <a href="#" class="btn hover-links">Electronics</a>         
                    </div>
          </div>
    </section>
    <section id="body-content py-2">
            <div class="container py-2">
                
<!-- Carousel landing-->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"><span class="d-none">1</span></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"><span class="d-none">1</span></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"><span class="d-none">1</span></button>
    </div>
    
    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./img/s1.jpg" alt="Los Angeles" class="d-block">
      </div>
      <div class="carousel-item">
        <img src="./img/s2.jpg" alt="Chicago" class="d-block" >
      </div>
      <div class="carousel-item">
        <img src="./img/s3.jpg" alt="New York" class="d-block" >  
      </div>
    </div>
    
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bg-warning py-5 px-2"><span class="d-none">1</span></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon bg-warning py-5 px-2"><span class="d-none">1</span></span>
    </button>
            </div>
            </div>
<!-- deal of the day -->
            <div class="container Itemlist py-2 mt-2">
                <div class="toast show">
                    <div class="toast-header border-bottom border-black-50">
                      <div class="me-auto h4">
                        Deal of the Day! 
                      </div>
                      <div>
                      <a href="dealofday.php" class="btn btn-primary">View All</a>
                      </div>
                      </div>

    <div class="toast-body">
             <div class="container">
                <div id="demo1" class="carousel slide" data-interval="false">
                  
                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                                     <div class="row">
                                        <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                        </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          
                                     </div>
                    </div>
                      <div class="carousel-item">
                                     <div class="row">
                                        <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                        </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          
                                     </div>
                    </div>
                      <div class="carousel-item">
                                     <div class="row">
                                        <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                        </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          
                                     </div>
                    </div>
                    </div>
                  
                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo1" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon bg-danger py-5 px-2">
                        <span class="d-none">
                            1
                        </span>
                      </span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo1" data-bs-slide="next">
                      <span class="carousel-control-next-icon bg-danger py-5 px-2">
                        <span class="d-none">
                            1
                        </span>
                      </span>
                    </button>
                  </div>
                      
             </div>
    </div>

                    </div>
                  </div>
            </div>

            <!-- trending -->
            <div class="container Itemlist py-2 mx-2 ">
                <div class="toast show">
                    <div class="toast-header border-bottom border-black-50">
                      <div class="me-auto h4">Trending !
                      </div>
                      <a href="#" class="btn btn-primary">View All</a>
                      </div>

    <div class="toast-body">
             <div class="container">
                <div id="demo2" class="carousel slide" data-interval="false">
                  
                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                                     <div class="row">
                                        <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                        </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          
                                     </div>
                    </div>
                      <div class="carousel-item">
                                     <div class="row">
                                        <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                        </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          
                                     </div>
                    </div>
                      <div class="carousel-item">
                                     <div class="row">
                                        <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                        </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          <div class="col-sm-1"> 
                                            <img src="./img/shopping-cart.png" alt="items">
                                            <span class="text-green">special order</span>
                                            <span class="text-secondary">ItemName</span>
                                          </div>
                                          
                                     </div>
                    </div>
                    </div>
                  
                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo2" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon bg-danger py-5 px-2">
                        <span class="d-none">
                            1
                        </span>
                      </span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo2" data-bs-slide="next">
                      <span class="carousel-control-next-icon bg-danger py-5 px-2">
                        <span class="d-none">
                            1
                        </span>
                      </span>
                    </button>
                  </div>
                      
             </div>
    </div>

                    </div>
                  </div>
            </div>
        </div>            
    </section>
    <?php  
            include 'footer.php';
    ?>


    <script src="index.js"></script>
</body>
</html>