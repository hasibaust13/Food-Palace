<!doctype html>

<html>
    <head>
       <title> 
            FOOD PALACE 
       </title>
        
       <link rel="stylesheet" type="text/css" href="MainStyle.css"/>
       <!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

       <style>
        body
            {
                background-color: beige;

            }

   
        #LogIn
            {
                
                width: 24%;
                height: 17%;
                max-width: 24%;
                max-height: 17%;
                font-family:BOYCOTT;
                font-weight: bold;
                font-size: 20px;
                color: tomato;
                position: absolute;
                top: 98px;
                left:1000px;
                background-color: activecaption;
                border: 1px solid black;
                padding:10px;
            }
        #LogInButton
            {
                position: absolute;
                height:20px; 
                width:80px;
                border-radius:5px;
                font-size:15px;
                color:black;
                cursor: pointer;
                transition: all 0.4s ease;            
                box-shadow: 1px 1px black; 
                border: 1px solid mintcream;
                margin-left: 250px;
                top: 135px;
            }
            #email
            {
                height: 25px;
            }
            #WelcomeText
            {
                position: relative;
                font-family:umbrage2;
                font-weight: 100;
                font-size: 20px;
                color: lightslategrey;
                -webkit-animation-name: WelcomeTextAnimation;
                -webkit-animation-duration: 4s;
                -webkit-animation-timing-function: ease-in;
                -webkit-animation-count:1;
                
                -moz-animation-name: WelcomeTextAnimation;
                -moz-animation-duration: 4s;
                -moz-animation-timing-function: ease-in;
                -moz-animation-count:1;
                
            }
            @-webkit-keyframes WelcomeTextAnimation
            {
                from{right:600px;} to{right:  0px;}
               
            }
            @-moz-keyframes WelcomeTextAnimation
            {
                from{right:600px;} to{right:  0px;}
               
            }
            #WelcomeText a:hover
            {
                color: black;
                font-size: 25px;
                
            }
             


       </style>
       


       
    </head>
    
    
    
    <body>
        <div class="TitleBar">
              
                <img src="images/HeaderBurger.png" id="HeaderBurger"> 
                <img src="images/HeaderIceCream.png" id="HeaderBurger"> 
                <right>              
                    <img src="images/HeaderPizza.png" id="HeaderPizza">
                    <img src="images/HeaderSandwich.png" id="HeaderPizza">
                </right>


               
                <center><div id="TitleBarLOGO"><center id="TitleBarLOGOText"> FOOD PALACE</center></div></center>  
        </div>      
        
        <div >

            <p id="WelcomeText">
                Welcome to FOOD PALACE . The best place for ONLINE FOOD ORDERING.<br></br>
                Sign in to find the best food for you. <br></br>
                If you have not registered yet,  
                <a href="RegistrationForm.php"> CLICK HERE TO CREATE AN ACCOUNT!</a>
            </p>
            
            <form id="LogIn" action="UserMain.php" method="post"> 
                E-MAIL:  <input type="text" name="E_MAIL" size="30" id="email" required=""/> <br></br>
                PASSWORD:<input type="text" name="PASSWORD" size="25" id="email" required=""/><br></br>
                <input type="submit" name="submit" id="LogInButton" value="LOG IN"> 
            </form>
        </div>
        
        <div class="FoodPicBack" >
             <!-- Start WOWSlider.com BODY section -->
        <div id="wowslider-container1">
        <div class="ws_images"><ul>
		<li><img src="data1/images/food1.jpg" alt="Welcome to FOOD PALACE !" title="Welcome to FOOD PALACE !" id="wows1_0"/></li>
		<li><img src="data1/images/food2.jpg" alt="Find the best food for you !" title="Find the best food for you !" id="wows1_1"/></li>
		<li><img src="data1/images/food3.jpg" alt="We believe in BEST SERVICE !" title="We believe in BEST SERVICE !" id="wows1_2"/></li>
		<li><a href="http://wowslider.com"><img src="data1/images/food4.jpg" alt="bootstrap slider" title="We offer easy online food ordering !" id="wows1_3"/></a></li>
		<li><img src="data1/images/food5.jpg" alt="Order now and happy eating !" title="Order now and happy eating !" id="wows1_4"/></li>
	</ul></div>
        <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">jquery image slider</a> by WOWSlider.com v8.2</div>
        <div class="ws_shadow"></div>
        </div>	
        <script type="text/javascript" src="engine1/wowslider.js"></script>
        <script type="text/javascript" src="engine1/script.js"></script>
        <!-- End WOWSlider.com BODY section -->
            
        </div>
   
        
        
    </body>
</html>
