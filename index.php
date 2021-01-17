<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BMI Calculator</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script type="text/javascript">              
     function computeBMI() {
          //Obtain user inputs
         var height = Number(document.getElementById("height").value);
         //var heightunits = document.getElementById("heightunits").value;
         var weight = Number(document.getElementById("weight").value);
         //var weightunits = document.getElementById("weightunits").value;


         //Convert all units to metric
         //if (heightunits == "inches") height /= 39.3700787;
         //if (weightunits == "lb") weight /= 2.20462;

         //Perform calculation
         var BMI = weight / Math.pow(height, 2);
         //Display result of calculation
    document.getElementById("output").innerHTML = Math.round(BMI * 100)/100;
         if (BMI < 18.5) document.getElementById("comment").innerHTML = "Underweight";
         if (BMI >= 18.5 && BMI <= 25) document.getElementById("comment").innerHTML = "Normal";
         if (BMI >= 25 && BMI <= 30) document.getElementById("comment").innerHTML = "Obese";
         if (BMI > 30) document.getElementById("comment").innerHTML = "Overweight";            
     }
       
        </script>
        <style>
            .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 100%;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .container_t {
            padding: 2px 16px;
        }
        .bord{
            background-color: black; color:white;
            -webkit-border-radius: 15px;
            border-radius: 15px;
            padding-top: 1px;
            padding-left: 20px;
            padding-right: 20px;
        }
        
        </style>
    </head>
    <body>
        <div class="container">
         <h1 style="text-align: center;">Body Mass Index Calculator</h1>   
        <div class="card" style="width: 500px; margin-left: auto;margin-right: auto;">
        
        <div class="container_t">
           <p style="padding-top: 10px;">Enter your height:
            <input type="text" id="height" placeholder=" metres"/>
            
        </p>
        <p>Enter your weight:
            <input type="text" id="weight" placeholder=" kilograms"/>
           
        </p>
        <input type="button" class="btn btn-primary" value="computeBMI" onclick="computeBMI()"/>
         <br><hr>
        <h3>Your BMI is: <span id="output">?</span></h3>

        <h3>This means you are: <span class="bord" id='comment'>?</span> </h3>  
        </div>
         
        </div>
    </div>
          
    </body>
</html>