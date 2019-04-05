<!doctype html>

<html>
    <head>
       <title> 
           Sign Up
       </title>
        
        <link rel="stylesheet" type="text/css" href="MainStyle.css"/>
        
        <style>
            body 
            {
                background-color: beige;

            }
            @font-face
            {
                font-family: RAPSCALL;
                src:url(fonts/RAPSCALL.ttf);
            }

            #RegForm
            {
                background-image: url(images/back.png);
                width: 65%;
                height: 100%;
                font-family:RAPSCALL;
                font-weight: bold;
                font-size: 25px;
                border: 1px solid black;
            }
            
            #FormAtributes
            {
                position: relative;
                width: 300px;
                height: 60px;
                padding: 20px;
                margin: 20px;
                border: 1px dashed black;
            }
            #submit
            {
                width: 70px;
                height: 40px;
                border-radius:3px;
                font-size:15px;
                transition: all 0.4s ease;            
                box-shadow: 2px 2px darkgray; 
                border: 1px solid black;   
            }
            #submit:hover
            {
                cursor: pointer;
                background-color: background;     
                
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
        
    <center>
        <div id="RegDiv">
            
            <form id="RegForm" action="RegFormDB.php" method="post" > 
                <div id="FormAtributes"><center>NAME:</center>  <input type="text" name="NAME" size="30"  required/>  </div>
                <div id="FormAtributes">ADDRESS:<input type="text" name="ADDRESS" size="30"  /> </div>
                <div id="FormAtributes"><center>E-MAIL:</center><input type="text" name="E_MAIL" size="30"  required/></div>
                <div id="FormAtributes">MOBILE NO:<input type="text" name="MOBILE_NO" size="30"  required/> </div>
                <div id="FormAtributes">PASSWORD:<input type="text" name="PASSWORD" size="30"  required/> </div>
                <input type="submit" name="submit" id="submit" value="SUBMIT">             
            </form>
            
            
        </div>
    </center>
        
    </body>
</html>
