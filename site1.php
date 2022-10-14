<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       <!-- Styles -->
</head>

   
<body class="antialiased">    
     <style>
        .logo_caixa{
            width: 100%;
            height: 40px;
            background-color: blue;
        }
        .logo_texto{
            text-align: center;
            color: white;
        }
        .logo_caixa1{
            width: 100%;
            height: 20px;
            background-color: white;
        } .logo_caixa2{
            width: 100%;
            height: 10px;
            background-color: lightblue;
        }

        #searchbar{
            color: blue;
            margin-left: 5%;
            padding:5px;
            border-radius: 10px;
            }

        input[type=text] {
            width: 30%;
            -webkit-transition: width 0.15s ease-in-out;
            transition: width 0.15s ease-in-out;
            }


        input[type=text]:focus {
            width: 70%;
            }

        #list{
            font-size:  1.5em;
            margin-left: 90px;
            }

        .student{
            display: list-item;    
            } 

        .barra{
            width: 100%;
            height: 40px;
            background-color: lightblue;
            }

        .bt {
           border:1px solid blue;
           border-radius:5px;
           display:inline-block;
           color: white;
           font-weight:bold;
           font-size:5px;
           padding:5px 10px;
           position: relative;
           top: 6px;
           left: 360px;
           }

           
        .bt1 {
           border:1px solid blue;
           border-radius:5px;
           display:inline-block;
           color: white;
           font-weight:bold;
           font-size:5px;
           padding:5px 10px;
           top: 6px;
           left: 400px;
           }

        .bt_texto {
            color:blue;
            font-weight:bold;
        }

     


    </style>
                
                <div class="logo_caixa">
                    <div class="logo_texto">
                        <h1>PUC-CAMPINAS</h1>
                            </div>
                </div>
                <div class="logo_caixa1"></div>
                <div class="logo_caixa2">
                <div class="bt">
                    <div class="bt_texto">
                    <h1>HOME</h1>
                    </div>
                </div>
                </div>
                

                
                

<!-- input tag -->
<div class="barra">
<input id="searchbar" background-color="blue" onkeyup="search_student()" type="text"
    name="search" placeholder="Pesquisa..">
</div> 


  
<!-- ordered list -->
<ol id='list'>
    <li class="student">Beatriz</li>
    <li class="student">Daniela</li>
    <li class="student">Flavia</li>
    <li class="student">Giovana</li>
    <li class="student">Luana</li>
    
</ol>
  
<!-- linking javascript -->
<script src=".student.js">
 function search_student() {
let input = document.getElementById('searchbar').value
input=input.toLowerCase();
let x = document.getElementsByClassName('student');
  
for (i = 0; i < x.length; i++) { 
    if (!x[i].innerHTML.toLowerCase().includes(input)) {
        x[i].style.display="none";
    }
    else {
        x[i].style.display="list-item";                 
    }
  }
}

</script>

</html>
