<?php
session_start();
if (isset($_SESSION['id'])&& isset($_SESSION['user'])){

?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!-- <link rel = 'stylesheet' type = 'text/css' href="style.css"> -->
    <style>
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
  body, html {
           height: 100%;
        }
.collapsible {
  background-color: #f1f1f1;
  /* color: white; */
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  opacity: .9;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}    
.first{
    position:absolute;
    top:100px;
    color: #428af5;
    left:900px;
}
.second{
    position: absolute;
    top:300px;
    left:500px;
}
button.b1{
  
 float: right;
  position:relative;
  /* left: 100px; */
  right: 100px;
  top:50px;
  border-style: solid;
  border-color:#FFFFFF;
  border-width:1px;
  background-color: transparent;
  text-decoration: none;
  color:#FFFFFF;
  font-size:30px;
}
button.b1:hover{
opacity: .8;   
}
</style>
</head>
<body>
      <!-- GUIDE LIST -->
  <div class="container-fluid bg" ">
    <div class="container first">
        <h1 class="display-3">hey  <?php echo $_SESSION['user'];?></h1>
        <p class="lead">Please go through the tasks.</p>
    </div>
    <div>
    <a href = 'logout.php'><button class="b1" type="button">Logut</button></a>
    </div>
    <div class="container second">
        <ul class="collapsible z-depth-0 guides">
        <li>
            <button type="button" class="collapsible">Task 1:</button>
            <div class="content"><p>In this competition, you're challenged to use the Speech Commands Dataset to build an algorithm that understands simple spoken commands. 
                By improving the recognition accuracy of open-sourced voice interface tools, 
                we can improve product effectiveness and their accessibility.</p></div>
            
        </li>
        </br>
         <li>
            <button type="button" class="collapsible">Task 2</button>
            <div class="content"><p>Use this dataset  to train a CNN. 
                Use no other data source or pretrained networks,
                and explain your design choices during preprocessing, model building and training. 
                Also, cite the sources you used to borrow techniques. A test set will be provided later to judge the performance of your classifier. 
                Please save your model checkpoints.</p></div>
        </li>
        </br>
        <li>
  
            <button type="button" class="collapsible">Task 3: NLP</button>
            <div class="content"><p>Use a given dataset to build a model to predict the category using description. Write code in python. Using Jupyter notebook is encouraged. 
                    1.Show how you would clean and process the data
                    2.Show how you would visualize this data
                    3.Show how you would measure the accuracy of the model
                    4.What ideas do you have to improve the accuracy of the model? 
                    What other algorithms would you try?</p></div>
        </li>
        </br>
        <li>

            <button type="button" class="collapsible">Task 4: Web App Development</button>
            <div class="content"><p>You are allowed to use any tech stack for this task, 
                the final product should be a working web-app with a login system and hosted on any platform</p></div>
        </li>
        </ul>
    </div>
</div>

 
  <script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>




<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>



</body>

</html>
<?php
}else{
    header('Location: index.php');
    exit();
}
?>