<!DOCTYPE html>
 <?php
    // connect to database
    include('connection.php');


?> 


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>Home page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <style>
        .row div{padding: 20px 10px;}
        .image:hover img{
          transform-origin:left-top;
          animation: scale 2000ms ease-in-out;
        }
        body, html {
           height: 100%;
        }
        @keyframes scale{
          from{transform :scale(0.9)}
          to{transform :scale(1)}
        }
        #anime{
          animation:  scale linear 5s infinite alternate;
        }
        
        #anime{
          z-index:1;
          transform: translateX(-20%);
        }
        .bg{
  /* The image used */
         background-image: url("background-image.jpeg");
  /* Full height */
        height: 100%;
  /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
  *{
    box-sizing: border-box;
  }
  .column{
    float: left;
    width: 50%;
    padding: 5px;
  }
  .row::after{
    content: "";
    display: table;
    clear: both;
  }

  .main{
    position: relative;
    left: 200px;
    top:100px;
  }
  .second{
    position: relative;
    left:10px;
    top: 100px;
  }

.text{
  position: absolute;
  color: aliceblue;
  top: 200px;
  right: 250px;
  left: 190px;
  font-family:sans-serif;
  font-style: Rubik;

}
button{
  

    position:absolute;
    left: 100px;
    border-style: solid;
    border-color:#FFFFFF;
    border-width:1px;
    background-color: transparent;
    text-decoration: none;color:#FFFFFF;
    font-size:30px;
}
button:hover{
 opacity: .8;   
}
.logo{
  position: absolute;
  top: 30px;
  left: 20px;

}
.midas{
  font-family:sans-serif;
  font-style: Rubik;
  position: absolute;
  color: aliceblue;
  top: 50px;
  left: 102px;
}



    </style>
  </head>
  <body >
      <div  class="container-fluid bg">
      <div class="logo">
            <img id = 'img' class = 'image-fluid' src='logo.jfif'>
      </div>
      <div>
      <h1 class="midas">Midas@IIITD</h1>
      </div>
        <div class="row">
          <div class="column">
            <div class="container p-3 main ">
              <div id="carouselExampleIndicators" class="carousel carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" ></li>
                </ol>
              <div class="carousel-inner">
                <div class="carousel-item active ">
                  <img src="pexels-budgeron-bach-6532566.jpg" class="d-block w-100" style="border-radius: 20%;">
                </div>
                <div class="carousel-item ">
                  <img src="pexels-kampus-production-5940708.jpg" class="d-block w-100" style="border-radius: 20%;">
                </div>
                <div class="carousel-item ">
                  <img src="pexels-william-fortunato-6141084.jpg" class="d-block w-100" style="border-radius: 20%;">
                </div>
              </div>
            </div>
          </div>
        </div>

      <div class="column">  
        <div class = 'container second '>
          <div id='anime'>
            <img id = 'image' class = 'image-fluid' src='gradient-figure.png'>
          </div>
          <div class='text'>
              <h1 class="display-1">Web App task</h1>
              <P class='para'>Lorem ipsum dolor sit amet consectetur adipisicing elit</br> 
                Aliquam quis aliquid sint.
              </P>
              <a href = 'form.php' class="ca" ><button type="button">Login</button> </a>
          </div>
        </div>
      </div> 
    </div>
  </div>




        <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </body>
</html>