<html>
    <head>
        <title>Library</title>
        <style>
            body{
                margin:0;
                padding:0;
                background-color:white;
                font-family: sans-serif;
            }
            .container{
                display: flex;
                align-items: center;
                justify-content: center;

            }
            .head-container{
                height: 80px;
                background-color:#01b4df;
                color:ghostwhite;
            }
            ul{
                list-style-type: none;
            }
            li{
                float: right;
                padding: 30px;
            }
            li a {
                display: block;
                text-decoration: none;
                color:ghostwhite;
            }
            li a:hover{
                color:white;
            }
            .slider{
                display:flex;
                align-content: center;
                align-items: center;
                justify-content: center;
            }
            table{
                margin-left: 40px;
            }
            td{
                padding-top:10px;
            }
            #logoDesign{
                float: left;
                padding-left:50px;
                padding-top:10px;
                width: 60px;
                
            }
            .boxContainer{
                margin:10px;
                width:350px;
                height: 450px;
                border: 2px solid;
                border-color:#01b4df;
                display: inline-block;

            }
            .centerContainer{
                display: flex;
                align-items:center;
                justify-content:center;
                align-content: center;
            }
            .headerText{
                text-align: center;
            }
            .scrollOver{
                width:320px;
                height: 280px;
                overflow: scroll;
                text-align: justify;
            }
            .searchResults{
                width: 320px;
                height: 100px;
                overflow:scroll;
                text-align: justify;
                margin-left:3%;
            }
            .borderLine td{
                border-bottom:1px solid;
                border-color:#1fc4a4;
            }
        </style>
    </head>
    <body>
        <div class="head-container">
            <div>
                <image src="./logo_era.png" alt="eraLogo" id="logoDesign" />
            </div>
            <div>
                <ul>
                    <li>
                        <a href="#aboutUs">About Us</a>
                    </li>
                    <li>
                        <a href="#home">Home</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="slider">
            <img src="./era.jpg" alt="European Regional Educational Academy" width="105%">
        </div>


            <h1 style="margin-left:40%; text-align:center; border-bottom:2px solid; border-color:#01b4df; width:250px;">
                WELCOME
            </h1>

        <div class="centerContainer">
            <div class="boxContainer">
                <p class="headerText">Student Info</p>
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                    <table>
                        <tr>
                            <td>
                                <p>First name:</p>
                            </td>
                            <td>
                                <input type="text" name="firstName" placeholder="First name" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Last name:</p>
                            </td>
                            <td>
                                <input type="text" name="sureName" placeholder="Last name" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Birthday:</p>
                            </td>
                            <td>
                                <input type="date" name="birthDay" placeholder="Birthday" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Gender:</p>
                            </td>
                            <td colspan="2">
                                Male
                                <input type="radio" name="gender" value="male" />
                                Female
                                <input type="radio" name="gender" value="female" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Mark:</p>
                            </td>
                            <td>
                                <input type="number" name="mark" placeholder="Enter mark" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>passing grade:</p>
                            </td>
                            <td>
                                <input type="number" name="passGrade" placeholder="Passing grade" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" value="submit" name="submit" />
                            </td>
                        </tr>
                    </table>
                </form>
                <div>
                    <?php
                        function AlerShow(){
                            include('index.php');
                        }
                        if(isset($_POST['submit'])){
                            AlerShow();
                        }
                    ?>
                </div>
            </div>


            <div class="boxContainer">
                <p class="headerText">Find Student</p>
                <form action="<?php echo($_SERVER['PHP_SELF']) ?>" method="post">
                    <table>
                        <tr>
                            <td>
                                <p>First name:</p>
                            </td>
                            <td>
                                <input type="text" name="firstName" placeholder="First name" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Last name:</p>
                            </td>
                            <td>
                                <input type="text" name="sureName" placeholder="Last name"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Birthday:</p>
                            </td>
                            <td>
                                <input type="date" name="birthDay" placeholder="Birthday" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Gender:</p>
                            </td>
                            <td colspan="2">
                                Male
                                <input type="radio" name="gender" value="male" />
                                Female
                                <input type="radio" name="gender" value="female" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Mark:</p>
                            </td>
                            <td>
                                <input type="number" name="mark" placeholder="Enter mark" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>passing grade:</p>
                            </td>
                            <td>
                                <input type="number" name="passGrade" placeholder="Passing grade" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" value="Check" name="Check" />
                            </td>
                        </tr>
                    </table>
                </form>
                <div class="searchResults borderLine">
                    <?php
                    function renderDATA(){
                     include('eligibility.php');
                    }
                    if(isset($_POST['Check'])){
                        renderDATA();
                    }
                    ?>
                </div>
            </div>



            <div class="boxContainer ">
                <p class="headerText">List of accepted students</p>
                <div class="scrollOver borderLine">
                    <?php
                        include('eligibleStudent.php');
                    ?>
                </div>
            </div>




        </div>




<br><br>


        <footer>
            <div id="aboutUs">
                <p style="margin-left:3%; border-bottom:2px solid; width:90px; border-color:#01b4df; ">
                    Contact Us
                </p>
                <p style="margin-left:4%;">
                    Tel: 00374 55 1234 15
                    <br><br>
                    Email: paymanghazvini@yahoo.com
                </p>
                <p class="headerText" style="background-color:#01b4df; color:white; height:40px; align-items:center; justify-content:center; align-content:center; padding-top:2%;">
                    2017 PEYMAN GHAZVINI ALL RIGHTS RESERVED
                </p>
            </div>
        </footer>
        




    </body>
</html>