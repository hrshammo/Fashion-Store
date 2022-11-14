
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="admin/style.css">

    <link rel="shortcut icon" href="img/fab.png" type="image/x-icon">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
<script type="text/javascript" src="https://res.cloudinary.com/veseylab/raw/upload/v1636192990/magicmouse/magic_mouse-1.2.1.cdn.min.js"></script>
<script src="js/js_own.js"></script>
<link rel="stylesheet" href="style.css">

<title>HRX | Admin</title>
 </head>
 <body>
<div class="manu_admin">
        <a href="#" >Dashboard</a>
        <a href="#" class="active">Add Products</a>
        <a href="#">Order</a>
        <a href="#">Profile</a>
</div>



<section class="vh-100 bg-image addproduct" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Add Products</h2>

                <form action="../backend/user_reg.php" method="post">

                  <div class="form-outline mb-3">
                    <input type="text" id="name" placeholder="Products Name" name="name" class="form-control form-control-lg" />

                  </div>
                  <div class="form-outline mb-3">
                    <input type="text" id="details" placeholder="details" name="details" class="form-control form-control-lg" />
                   </div>


                  <div class="form-outline mb-3">
                    <input type="price" placeholder="price" id="price" name="price" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-3">
                    <input type="quantity" placeholder="Products quantity" id="quantity" name="quantity" class="form-control form-control-lg" />
                    
                    <div class="col-md-6 mb-4 form-outline ">
                    <select class="select">
                      <option value="1">Colour</option>
                      <option value="2">Blue</option>
                      <option value="3">Red</option>
                      <option value="4">Black</option>
                      <option value="5">Maroon</option>
                      <option value="6">Yellow</option>
                      <option value="7">White</option>
                      <option value="8">Green</option>
                    </select>
                    </div>

                    <div class="col-md-6 mb-4 form-outline ">
                    <select class="select">
                      <option value="1">C_Tag</option>
                      <option value="2">Men</option>
                      <option value="3">Woman</option>
                      <option value="4">Kid</option>
                      <option value="5">Beauty</option>
                      <option value="6">Accessories</option>                     
                    </select>
                    </div>

                

                    <div class="col-md-6 mb-4 form-outline ">
                    <select class="select">
                      <option value="1">Sub_C_Tag</option>
                      <option value="2">Topwear</option>
                      <option value="3">Bottomwear</option>
                      <option value="4">Sports & Active wear</option>
                      <option value="5">Festive wear</option>
                      <option value="6">Footwear</option>  
                    
                    </select>
                    </div>





                  </div>
                  <div class="form-outline mb-3">
                    <input type="text" placeholder="Search keyword " id="" name="keyword" class="form-control form-control-lg" />

                  </div>
                  <div class="form-outline mb-3">
                  <div class="col-md-9 pe-5">

                <input class="form-control form-control-lg" id="formFileLg" type="file" />
                  </div></div>

                  <div class="form-outline mb-3">
                  <div class="col-md-9 pe-5">

                <input class="form-control form-control-lg" id="formFileLg" type="file" />
                  </div></div>

                  <div class="form-outline mb-3">
                  <div class="col-md-9 pe-5">

                <input class="form-control form-control-lg" id="formFileLg" type="file" />
                  </div></div>

                  <div class="form-outline mb-3">
                  <div class="col-md-9 pe-5">

                <input class="form-control form-control-lg" id="formFileLg" type="file" />
                  </div></div>

                  <div class="d-flex justify-content-end pt-3">
                  <button type="button" class="btn btn-light btn-lg">Reset all</button>
                  <button type="button" class="btn btn-warning btn-lg ms-2">Submit form</button>
                </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 </body>
 </html>