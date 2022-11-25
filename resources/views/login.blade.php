<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        @include('layouts.head')
      </head>
<style type="text/css">
    .btn-login {
    background-color: #ce152b; 
    color: white;
    border: none;
    padding: 15px 40px;
    width: auto;
    min-width: 100px;
    border-radius: 0px;
    text-align: center;
    box-shadow: 0px 2px 6px -1px rgb(0 0 0 / 13%);
    margin-top: 42px;}
    .my-form{
      font-size: 16px;
    padding: 20px 0px;
    height: 56px;
    border: none;
    border-bottom: solid 1px rgba(0, 0, 0, 0.1);
    
    }
    .card-login{
    display: block;
    margin-left: auto;
    margin-right: auto;
    
    max-width: 600px;
    margin-top: 50px;
    margin-bottom: 30px;
    border: none;
    border-radius: 0px;
    box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);
    background-color: white;
    }
    @media screen and (max-width: 900px) {
  .img-web {
    display:none;
  }
}
</style>
<body>
  
    <div class="container py-5 h-100 card-login">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6 img-web">
          <img src="assets/img/login-illust.png"
            class="img-fluid" alt="Phone image">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
         
            <a href="index.html" class="logo">
              <img src="assets/img/logo.png" alt="">
              
            </a>
     
          <form>
            <!-- Email input -->
            <div class="form-outline mb-4"> 
              
              <input type="email" id="form1Example13" class="form-control my-form" placeholder="Nom utilisateur"/>
              
            </div>
  
            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="form1Example23" class="form-control my-form" placeholder="Mot de passe"/>
              
            </div>
  
          
  
            <!-- Submit button -->
            <button type="submit" class="btn btn-login">Sign in</button>
  
            
  
          </form>
        </div>
      </div>
    </div>


  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  @include('layouts.scripts')

</body>

</html>