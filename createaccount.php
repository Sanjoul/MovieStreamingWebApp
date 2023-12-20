<?php
session_start();

 ?>


 <!DOCTYPE html>
 <head>
   <meta charset="utf-8">
   <title>Registration</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />  
    <link rel="stylesheet" href="style/style.css"> 
    <style>
    label{
        color: white !important ;
        margin-right: 5px;
        background-color: rgba(51,51,51,255);
      }
      select {
        width: 55px;
        padding: 5px;
        
    }
      </style>
  
 </head>
 <body>
   

   <body>


    <div class="upper">
        <div class="logo">
            <a href="index2.php">
                <img src="img/logo_transparent.png" class="img-logo"/>
            </a>
        </div>
        <div class="login-div">
            <form method="POST" action="user.php" class="login">
                <h1>Sign Up</h1>
                
                
                <div class="input-text">
                
                    <input  type="text" name="fname" placeholder="First Name" value="" required/>
    
                </div>
                <br>

                <div class="input-text">
                  
                    <input  type="text" name="lname" placeholder="Last Name" value="" required/>
                    
                </div>
                <br>

                <div class="input-text">
                    <input  type="text" name="phn" placeholder="Mobile Number" value="" required/>
                    
                </div>
                <br>
                <div class="input-text">
                    <input  type="email" name="mail" placeholder="Email" value=""  required/>
                    
                </div>
                <br>

                <div class="input-text">
                    <input  type="password" name="pass" placeholder="Password" value="" required/>
                    
                </div>
                <br>
                <div class="input-text" >
  
               <div class="row" style="background-color:rgba(51,51,51,255) ; border:rgba(51,51,51,255) ;">
                <label for="DOB">Date of Birth</label>
                 <!-- <div class="col"> -->
                   <select class="form-control" name='date' required>
                     <option selected>Date..</option>
                     <option value='1'>1</option>
                     <option value='2'>2</option>
                     <option value='3'>3</option>
                     <option value='4'>4</option>
                     <option value='5'>5</option>
                     <option value='6'>6</option>
                     <option value='7'>7</option>
                     <option value='8'>8</option>
                     <option value='9'>9</option>
                     <option value='10'>10</option>
                     <option value='11'>11</option>
                     <option value='12'>12</option>
                     <option value='13'>13</option>
                     <option value='14'>14</option>
                     <option value='15'>15</option>
                     <option value='16'>16</option>
                     <option value='17'>17</option>
                     <option value='18'>18</option>
                     <option value='19'>19</option>
                     <option value='20'>20</option>
                     <option value='21'>21</option>
                     <option value='22'>22</option>
                     <option value='23'>23</option>
                     <option value='24'>24</option>
                     <option value='25'>25</option>
                     <option value='26'>26</option>
                     <option value='27'>27</option>
                     <option value='28'>28</option>
                     <option value='29'>29</option>
                     <option value='30'>30</option>
                     <option value='31'>31</option>

                 </select>
             
                     <select class="form-control" name='month'>
                       <option selected>month...</option>


                       <option value='01'>Jan</option>
                       <option value='02'>Feb</option>
                       <option value='03'>Mar</option>
                       <option value='04'>Apr</option>
                       <option value='05'>May</option>
                       <option value='06'>Jun</option>
                       <option value='07'>Jul</option>
                       <option value='08'>Aug</option>
                       <option value='09'>Sep</option>
                       <option value='10'>Oct</option>
                       <option value='11'>Nov</option>
                       <option value='12'>Dec</option>

                     </select>
                 
                   <select class="form-control" name='year'>
                     <option selected>year...</option>
                     <option value='1980'>1980</option>
                     <option value='1981'>1981</option>
                     <option value='1982'>1982</option>
                     <option value='1983'>1983</option>
                     <option value='1984'>1984</option>
                     <option value='1985'>1985</option>
                     <option value='1986'>1986</option>
                     <option value='1987'>1987</option>
                     <option value='1988'>1988</option>
                     <option value='1989'>1989</option>
                     <option value='1990'>1990</option>
                     <option value='1991'>1991</option>
                     <option value='1992'>1992</option>
                     <option value='1993'>1993</option>
                     <option value='1994'>1994</option>
                     <option value='1995'>1995</option>
                     <option value='1996'>1996</option>
                     <option value='1997'>1997</option>
                     <option value='1998'>1998</option>
                     <option value='1999'>1999</option>
                     <option value='2000'>2000</option>
                     <option value='2001'>2001</option>
                     <option value='2002'>2002</option>
                     <option value='2003'>2003</option>
                     <option value='2004'>2004</option>
                     <option value='2005'>2005</option>
                     <option value='2006'>2006</option>
                     <option value='2007'>2007</option>
                     <option value='2008'>2008</option>
                     <option value='2009'>2009</option>
                     <option value='2010'>2010</option>
                     <option value='2011'>2011</option>
                     <option value='2012'>2012</option>


                     </select>
                 <!-- </div> -->

                   </div>

                 </div>
                
                <div>
                    <button name="SignUp" value="SignUp" class="signin-button">Sign Up</button>
                </div>
                <div class="remember-flex">
                    <div>
                        <input type="checkbox">
                        <label class="color_text">Remember me</label>
                    </div>
                    <div class="help">
                        <a class="color_text" href="#">Need help?</a>
                    </div>
                </div>
               
                
            </form>
        </div>
    </div>
    <div class="bottom">
        <div class="bottom-width">
            Questions? Call <a href="tel:1-844-542-4813" class="tel-link">1-844-542-4813</a>
            <div>
                <ul class="bottom-flex">
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            FAQ
                        </a>
                    </li>
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            Help Center
                        </a>
                    </li>
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            Terms of Use
                        </a>
                    </li>
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            Privacy
                        </a>
                    </li>
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            Cookie Preferences
                        </a>
                    </li>
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            Corporate information
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <select class="fa select-language">
                    <option> &#xf0ac; &nbsp;&nbsp;&nbsp;English</option>
                    <option> &#xf0ac; &nbsp;&nbsp;&nbsp;Fran&ccedil;ais</option>
                </select>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
 </html>
