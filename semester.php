<html>
    <head>
        <title>Materials</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style1.css">

        <style>
            ul{
                padding-bottom: 4%;
                position: relative;

                list-style: none;
                background-color: #f2f2f2;
            }
            ul li{
                display: inline;
                position: relative;
                line-height: 30px;
                border-bottom: #04AA6D ;

                text-align: left;
            }
            ul li a{
                display: block;
                padding: 5px ;
                color: #333;
                text-decoration: none;
            }
            ul li a:hover{
                color: #fff;
                background: #939393;
                display: block;
            }
            ul li ul.dropdown{
                min-width: 100%; /* Set width of the dropdown */
                background: #f2f2f2;
                display: none;
                position: absolute;
                z-index: 999;
                left: 0;
            }
            ul li:hover ul.dropdown{
                display: block;	/* Display the dropdown */
            }
            ul li ul.dropdown li{
                display: block;
            }
        </style>
    </head>
    <body class="sem" id="sem">
        <div><img src="pics/5.jpg" width="100%" height="15%" style="display: none;"></div>
        <?php include 'menubar.php'; ?>
        <h1>BCA [Bachelor of Computer Application]</h1>
       
        <ul>
            <li>  <a href="semester.php">Semester 1 &#9662;</a> 
                <ul class="dropdown">
                    <li><a href="english_sem1.php" title="English">US01ABCA51 </a></li>
                    <li>   <a href="cdetail.php" title="C programming">US01CBCA51</a></li>
                    <li><a href="htmldetail.php" title="HTML - I">US01CBCA52</a></li>
                    <li><a href="fondetail.php" title="FON">US01CBCA53 </a></li>
                    <li> <a href="Practicals_sem1.php" title="Practicals">US01CBCA54</a></li>
                    <li><a href="enviorntment.php" title=" Environmental Studies">US01SBCA51</a></li>
                    <!-- subject names
                                      <li><a href="unit1.php">US01ABCA51 - Lab-Communication Skills in English-I</a></li>
                                   <li>   <a href="unit1.php">US01CBCA51 - Programming Fundamentals Using C</a></li>
                                   <li><a>US01CBCA52 - Web Application Development-I</a></li>
                                   <li><a>US01CBCA53 - Fundamentals of Computer Organization</a></li>
                                   <li> <a>US01CBCA54 - Practicals</a></li>
                                   <li><a>US01SBCA51 - Environmental Studies</a></li>-->
                </ul>
            </li>
            <li><a href="#">Semester 2</a></li>
            <li>
                <a href="#">Semester 3 &#9662;</a>
                <ul class="dropdown">
                     <li><a href="english_sem1.php">US01ABCA51 </a></li>
                    <li>   <a href="unit1.php">US01CBCA51</a></li>
                    <li><a>US01CBCA52</a></li>
                    <li><a>US01CBCA53 </a></li>
                    <li> <a>US01CBCA54</a></li>
                    <li><a>US01SBCA51</a></li>
                </ul>
            </li>
            <li><a href="#">Semester 4</a></li>
        </ul>

    </body>
</html>