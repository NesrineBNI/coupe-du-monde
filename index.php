<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QATAR World Cup 2022</title>
    <link rel="stylesheet" href="style.css">
     <!-- BOOTSTRAP -->        
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
     <!--// BOOTSTRAP //--> 
</head>
<body>
    <section id="hero">
        <header class="header">
            <div class="container">
                <nav class="navigation">
                    <a href="index.html" class="logo">
                        <img src="images/logo.svg" alt="Logo" class="logo-img">
                    </a>
                    <div class="mobile-menu-icon">
                        <ion-icon name="menu-outline" class="menu_icon"></ion-icon>
                    </div>
                    <ul class="nav_menu">
                        <li class="nav_list">
                            <a href="#" class="nav_link active">Home</a>
                        </li>
                        <li class="nav_list btn-nav">
                            <a href="#qatar" class="btn-outline">
                                <span>Start your journey</span>
                                <ion-icon name="compass-outline"></ion-icon>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="hero-main-container">
            <div class="container">
                <div class="hero-container">
                    <div class="hero-content">
                        <h1 class="section-heading">
                            Our football dream <br> start here!
                        </h1>
                        <p class="paragraph">
                            Come for World Cup matches & explore all over Qatar.
                        </p>
                        <a href="#qatar" class="btn-primary">
                            <span>Get the ticket</span>
                            <ion-icon name="log-out-outline"></ion-icon>
                        </a>
                    </div>
                    <div class="hero-image">
                        <img src="images/logo.png" height="400" alt="hero-img" class="hero-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="points">
         <!-- QATAR WORD -->
    <div class="d-flex justify-content-center" style="margin-top: 30px; text-align: center;">
        <img src="images/qatar-word.png" alt="" id="qatar" style="width: 400px">
    </div>
    <!--// QATAR WORD //-->
    </section>
    <section class="container1">
    <section class="col1">
    <div>
        <!-- TITLE ROW -->
        <div class="row">
            <h2>ALL MATCHES</h2>
            <hr>
        </div>
        <!--// TITLE ROW //-->
        <!-- MATCHES ROW -->
        <form action="index.php" method="post">
        <div class="row" id="matches">
            <!-- MATCH COL -->
            <div class="col-sm-12">
                <div class="card shadow rounded-pill" style="overflow: hidden;">
                    <div class="card-body p-0">
                        <div class="row" style="height: 95px;">
                            <!-- FIRST TEAM COL -->
                            <div 
                                class="col-sm-3 bg-primary1 d-flex flex-direction-column justify-content-center align-itmes-center"
                                style="border-right: solid 5px #5b0d25; "
                            >
                                <div class="d-flex align-items-center justify-content-center" >
                                    <!-- IMAGE AND TEAM NAME DIV -->
                                    <div>
                                        <div class="flag">
                                            <img 
                                                style="width: 40px; height: 40px"
                                                class="rounded-circle"
                                                src="images/maroc.jpg" alt="image"
                                            >
                                        </div>
                                        <h5 style="margin: auto 4px">
                                            <b>Maroc</b>
                                        </h5>
                                    </div>
                                    <!--// IMAGE AND TEAM NAME DIV// -->
                                </div>
                            </div>
                            <!--// FIRST TEAM COL //-->
                            <!-- MATCH INFO COL -->
                            <div class="col-sm-6" style="text-align: center; margin-top: 12px;">
                                <input type="number" id="" name="equipe1-matche1"
                                    min="0" max="100" value="<?php if (isset($_POST['equipe1-matche1'])) echo $_POST['equipe1-matche1']; ?>">
                                
                                <h2>X</h2>
                                
                                <input type="number" id="" name="equipe2-matche1"
                                    min="0" max="100" value="<?php if (isset($_POST['equipe2-matche1'])) echo $_POST['equipe2-matche1']; ?>">
                            </div>
                            <!--// MATCH INFO COL //-->
                            <!-- SECOND TEAM COL -->
                            <div 
                                class="col-sm-3 bg-primary1 d-flex flex-direction-column justify-content-center align-itmes-center"
                                style="border-left: solid 5px #5b0d25; "
                            >
                                <div class="d-flex align-items-center justify-content-center" >
                                    <!-- IMAGE AND TEAM NAME DIV -->
                                    <div>
                                        <div class="flag">
                                            <img 
                                                style="width: 40px; height: 40px"
                                                class="rounded-circle"
                                                src="images/Croatia.svg" alt="image"
                                            >
                                        </div>
                                        <h5 style="margin: auto 4px">
                                            <b>Croatia</b>
                                        </h5>
                                    </div>
                                    <!--// IMAGE AND TEAM NAME DIV// -->
                                </div>
                            </div>
                            <!--// SECOND TEAM COL //-->
                        </div>
                    </div>
                </div>
            </div>
            <!--// MATCH COL //-->
        </div>
        <!-- ///////////////////////////////////////// -->
        <div>
            <!-- TITLE ROW -->
            <div class="row">
                <hr>
            </div>
            <!--// TITLE ROW //-->
            <!-- MATCHES ROW -->
            <div class="row" id="matches">
                <!-- MATCH COL -->
                <div class="col-sm-12">
                    <div class="card shadow rounded-pill" style="overflow: hidden;">
                        <div class="card-body p-0">
                            <div class="row" style="height: 95px;">
                                <!-- FIRST TEAM COL -->
                                <div 
                                    class="col-sm-3 bg-primary1 d-flex flex-direction-column justify-content-center align-itmes-center"
                                    style="border-right: solid 5px #5b0d25; "
                                >
                                    <div class="d-flex align-items-center justify-content-center" >
                                        <!-- IMAGE AND TEAM NAME DIV -->
                                        <div>
                                            <div class="flag">
                                                <img 
                                                    style="width: 40px; height: 40px"
                                                    class="rounded-circle"
                                                    src="images/belgique.svg.png" alt="image"
                                                >
                                            </div>
                                            <h5 style="margin: auto 4px">
                                                <b>Belgique</b>
                                            </h5>
                                        </div>
                                        <!--// IMAGE AND TEAM NAME DIV// -->
                                    </div>
                                </div>
                                <!--// FIRST TEAM COL //-->
                                <!-- MATCH INFO COL -->
                                <div class="col-sm-6" style="text-align: center; margin-top: 12px;">
                                    <input type="number" id="" name="equipe3-matche1"
                                        min="0" max="100" value="<?php if (isset($_POST['equipe3-matche1'])) echo $_POST['equipe3-matche1']; ?>"> 
                                    
                                    <h2>X</h2>
                                    
                                    <input type="number" id="" name="equipe4-matche1"
                                        min="0" max="100" value="<?php if (isset($_POST['equipe4-matche1'])) echo $_POST['equipe4-matche1']; ?>">
                                </div>
                                <!--// MATCH INFO COL //-->
                                <!-- SECOND TEAM COL -->
                                <div 
                                    class="col-sm-3 bg-primary1 d-flex flex-direction-column justify-content-center align-itmes-center"
                                    style="border-left: solid 5px #5b0d25; "
                                >
                                    <div class="d-flex align-items-center justify-content-center" >
                                        <!-- IMAGE AND TEAM NAME DIV -->
                                        <div>
                                            <div class="flag">
                                                <img 
                                                    style="width: 40px; height: 40px"
                                                    class="rounded-circle"
                                                    src="images/Canada.svg.png" alt="image"
                                                >
                                            </div>
                                            <h5 style="margin: auto 4px">
                                                <b>Canada</b>
                                            </h5>
                                        </div>
                                        <!--// IMAGE AND TEAM NAME DIV// -->
                                    </div>
                                </div>
                                <!--// SECOND TEAM COL //-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--// MATCH COL //-->
            </div>
            <!-- ///////////////////////////////////////////// -->
             <!-- TITLE ROW -->
             <div class="row">
                <hr>
            </div>
            <!--// TITLE ROW //-->
            <!-- MATCHES ROW -->
            <div class="row" id="matches">
                <!-- MATCH COL -->
                <div class="col-sm-12">
                    <div class="card shadow rounded-pill" style="overflow: hidden;">
                        <div class="card-body p-0">
                            <div class="row" style="height: 95px;">
                                <!-- FIRST TEAM COL -->
                                <div 
                                    class="col-sm-3 bg-primary1 d-flex flex-direction-column justify-content-center align-itmes-center"
                                    style="border-right: solid 5px #5b0d25; "
                                >
                                    <div class="d-flex align-items-center justify-content-center" >
                                        <!-- IMAGE AND TEAM NAME DIV -->
                                        <div>
                                            <div class="flag">
                                                <img 
                                                    style="width: 40px; height: 40px"
                                                    class="rounded-circle"
                                                    src="images/Canada.svg.png" alt="image"
                                                >
                                            </div>
                                            <h5 style="margin: auto 4px">
                                                <b>Canada</b>
                                            </h5>
                                        </div>
                                        <!--// IMAGE AND TEAM NAME DIV// -->
                                    </div>
                                </div>
                                <!--// FIRST TEAM COL //-->
                                <!-- MATCH INFO COL -->
                                <div class="col-sm-6" style="text-align: center; margin-top: 12px;">
                                    <input type="number" id="" name="equipe4-matche2"
                                        min="0" max="100" value="<?php if (isset($_POST['equipe4-matche2'])) echo $_POST['equipe4-matche2']; ?>"> 
                                    
                                    <h2>X</h2>
                                    
                                    <input type="number" id="" name="equipe1-matche2"
                                        min="0" max="100" value="<?php if (isset($_POST['equipe1-matche2'])) echo $_POST['equipe1-matche2']; ?>">
                                </div>
                                <!--// MATCH INFO COL //-->
                                <!-- SECOND TEAM COL -->
                                <div 
                                    class="col-sm-3 bg-primary1 d-flex flex-direction-column justify-content-center align-itmes-center"
                                    style="border-left: solid 5px #5b0d25; "
                                >
                                    <div class="d-flex align-items-center justify-content-center" >
                                        <!-- IMAGE AND TEAM NAME DIV -->
                                        <div>
                                            <div class="flag">
                                                <img 
                                                    style="width: 40px; height: 40px"
                                                    class="rounded-circle"
                                                    src="images/maroc.jpg" alt="image"
                                                >
                                            </div>
                                            <h5 style="margin: auto 4px">
                                                <b>Maroc</b>
                                            </h5>
                                        </div>
                                        <!--// IMAGE AND TEAM NAME DIV// -->
                                    </div>
                                </div>
                                <!--// SECOND TEAM COL //-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--// MATCH COL //-->
            </div>
            <!-- //////////////////////////////////////////// -->
             <!-- TITLE ROW -->
             <div class="row">
                <hr>
            </div>
            <!--// TITLE ROW //-->
            <!-- MATCHES ROW -->
            <div class="row" id="matches">
                <!-- MATCH COL -->
                <div class="col-sm-12">
                    <div class="card shadow rounded-pill" style="overflow: hidden;">
                        <div class="card-body p-0">
                            <div class="row" style="height: 95px;">
                                <!-- FIRST TEAM COL -->
                                <div 
                                    class="col-sm-3 bg-primary1 d-flex flex-direction-column justify-content-center align-itmes-center"
                                    style="border-right: solid 5px #5b0d25; "
                                >
                                    <div class="d-flex align-items-center justify-content-center" >
                                        <!-- IMAGE AND TEAM NAME DIV -->
                                        <div>
                                            <div class="flag">
                                                <img 
                                                    style="width: 40px; height: 40px"
                                                    class="rounded-circle"
                                                    src="images/belgique.svg.png" alt="image"
                                                >
                                            </div>
                                            <h5 style="margin: auto 4px">
                                                <b>Belgique</b>
                                            </h5>
                                        </div>
                                        <!--// IMAGE AND TEAM NAME DIV// -->
                                    </div>
                                </div>
                                <!--// FIRST TEAM COL //-->
                                <!-- MATCH INFO COL -->
                                <div class="col-sm-6" style="text-align: center; margin-top: 12px;">
                                    <input type="number" id="" name="equipe3-matche2"
                                        min="0" max="100" value="<?php if (isset($_POST['equipe3-matche2'])) echo $_POST['equipe3-matche2']; ?>"> 
                                    
                                    <h2>X</h2>
                                   
                                    <input type="number" id="" name="equipe2-matche2"
                                        min="0" max="100" value="<?php if (isset($_POST['equipe2-matche2'])) echo $_POST['equipe2-matche2']; ?>">
                                </div>
                                <!--// MATCH INFO COL //-->
                                <!-- SECOND TEAM COL -->
                                <div 
                                    class="col-sm-3 bg-primary1 d-flex flex-direction-column justify-content-center align-itmes-center"
                                    style="border-left: solid 5px #5b0d25; "
                                >
                                    <div class="d-flex align-items-center justify-content-center" >
                                        <!-- IMAGE AND TEAM NAME DIV -->
                                        <div>
                                            <div class="flag">
                                                <img 
                                                    style="width: 40px; height: 40px"
                                                    class="rounded-circle"
                                                    src="images/Croatia.svg" alt="image"
                                                >
                                            </div>
                                            <h5 style="margin: auto 4px">
                                                <b>Croatia</b>
                                            </h5>
                                        </div>
                                        <!--// IMAGE AND TEAM NAME DIV// -->
                                    </div>
                                </div>
                                <!--// SECOND TEAM COL //-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--// MATCH COL //-->
                <!-- ///////////////////////////////////////// -->
        <div>
            <!-- TITLE ROW -->
            <div class="row">
                <hr>
            </div>
            <!--// TITLE ROW //-->
            <!-- MATCHES ROW -->
            <div class="row" id="matches">
                <!-- MATCH COL -->
                <div class="col-sm-12">
                    <div class="card shadow rounded-pill" style="overflow: hidden;">
                        <div class="card-body p-0">
                            <div class="row" style="height: 95px;">
                                <!-- FIRST TEAM COL -->
                                <div 
                                    class="col-sm-3 bg-primary1 d-flex flex-direction-column justify-content-center align-itmes-center"
                                    style="border-right: solid 5px #5b0d25; "
                                >
                                    <div class="d-flex align-items-center justify-content-center" >
                                        <!-- IMAGE AND TEAM NAME DIV -->
                                        <div>
                                            <div class="flag">
                                                <img 
                                                    style="width: 40px; height: 40px"
                                                    class="rounded-circle"
                                                    src="images/maroc.jpg" alt="image"
                                                >
                                            </div>
                                            <h5 style="margin: auto 4px">
                                                <b>Maroc</b>
                                            </h5>
                                        </div>
                                        <!--// IMAGE AND TEAM NAME DIV// -->
                                    </div>
                                </div>
                                <!--// FIRST TEAM COL //-->
                                <!-- MATCH INFO COL -->
                                <div class="col-sm-6" style="text-align: center; margin-top: 12px;">
                                    <input type="number" id="" name="equipe1-matche3"
                                        min="0" max="100" value="<?php if (isset($_POST['equipe1-matche3'])) echo $_POST['equipe1-matche3']; ?>"> 
                                    
                                    <h2>X</h2>
                                   
                                    <input type="number" id="" name="equipe3-matche3"
                                        min="0" max="100" value="<?php if (isset($_POST['equipe3-matche3'])) echo $_POST['equipe3-matche3']; ?>">
                                </div>
                                <!--// MATCH INFO COL //-->
                                <!-- SECOND TEAM COL -->
                                <div 
                                    class="col-sm-3 bg-primary1 d-flex flex-direction-column justify-content-center align-itmes-center"
                                    style="border-left: solid 5px #5b0d25; "
                                >
                                    <div class="d-flex align-items-center justify-content-center" >
                                        <!-- IMAGE AND TEAM NAME DIV -->
                                        <div>
                                            <div class="flag">
                                                <img 
                                                    style="width: 40px; height: 40px"
                                                    class="rounded-circle"
                                                    src="images/belgique.svg.png" alt="image"
                                                >
                                            </div>
                                            <h5 style="margin: auto 4px">
                                                <b>Belgique</b>
                                            </h5>
                                        </div>
                                        <!--// IMAGE AND TEAM NAME DIV// -->
                                    </div>
                                </div>
                                <!--// SECOND TEAM COL //-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--// MATCH COL //-->
            </div>
            <!-- ///////////////////////////////////////////// -->
            <div>
            <!-- TITLE ROW -->
            <div class="row">
                <hr>
            </div>
            <!--// TITLE ROW //-->
            <!-- MATCHES ROW -->
            <div class="row" id="matches">
                <!-- MATCH COL -->
                <div class="col-sm-12">
                    <div class="card shadow rounded-pill" style="overflow: hidden;">
                        <div class="card-body p-0">
                            <div class="row" style="height: 95px;">
                                <!-- FIRST TEAM COL -->
                                <div 
                                    class="col-sm-3 bg-primary1 d-flex flex-direction-column justify-content-center align-itmes-center"
                                    style="border-right: solid 5px #5b0d25; "
                                >
                                    <div class="d-flex align-items-center justify-content-center" >
                                        <!-- IMAGE AND TEAM NAME DIV -->
                                        <div>
                                            <div class="flag">
                                                <img 
                                                    style="width: 40px; height: 40px"
                                                    class="rounded-circle"
                                                    src="images/Croatia.svg" alt="image"
                                                >
                                            </div>
                                            <h5 style="margin: auto 4px">
                                                <b>Croatia</b>
                                            </h5>
                                        </div>
                                        <!--// IMAGE AND TEAM NAME DIV// -->
                                    </div>
                                </div>
                                <!--// FIRST TEAM COL  //-->
                                <!-- MATCH INFO COL -->
                                <div class="col-sm-6" style="text-align: center; margin-top: 12px;">
                                    <input type="number" id="" name="equipe2-matche3"
                                        min="0" max="100" value="<?php if (isset($_POST['equipe2-matche3'])) echo $_POST['equipe2-matche3']; ?>"> 
                                   
                                    <h2>X</h2>
                
                                    <input type="number" id="" name="equipe4-matche3"
                                        min="0" max="100" value="<?php if (isset($_POST['equipe4-matche3'])) echo $_POST['equipe4-matche3']; ?>">
                                </div>
                                <!--// MATCH INFO COL //-->
                                <!-- SECOND TEAM COL -->
                                <div 
                                    class="col-sm-3 bg-primary1 d-flex flex-direction-column justify-content-center align-itmes-center"
                                    style="border-left: solid 5px #5b0d25; "
                                >
                                    <div class="d-flex align-items-center justify-content-center" >
                                        <!-- IMAGE AND TEAM NAME DIV -->
                                        <div>
                                            <div class="flag">
                                                <img 
                                                    style="width: 40px; height: 40px"
                                                    class="rounded-circle"
                                                    src="images/Canada.svg.png" alt="image"
                                                >
                                            </div>
                                            <h5 style="margin: auto 4px">
                                                <b>Canada</b>
                                            </h5>
                                        </div>
                                        <!--// IMAGE AND TEAM NAME DIV// -->
                                    </div>
                                </div>
                                <!--// SECOND TEAM COL //-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--// MATCH COL //-->
            </div>
            <input type="submit" class="btn btn-danger" value="Sumuler" name="submit" style="margin-top: 20px"> 
        </form>
        </section>
        <section class="col2">
            <h2>CLASSIFICATION</h2>
            <hr>
            <table class="table bg-primary1 table-hover" style="color: white;">
                <thead>
                  <tr>
                    <th>Equipes</th>
                    <th>pts</th>
                    <th>MJ</th>
                    <th>MG</th>
                    <th>Null</th>
                    <th>MP</th>
                    <th>BM</th>
                    <th>BE</th>
                    <th>dif</th>
                  </tr>
                </thead>
               <tbody>
               <?php
                    if(isset($_POST['submit'])){
                        $equipes = ["equipe1"=>["nom"=>"Maroc","point"=>0,"MJ"=>0,"MG"=>0,"null"=>0,"MP"=>0,"BM"=>0,"BE"=>0,"dif"=>0],
                        "equipe2"=>["nom"=>"Croatia","point"=>0,"MJ"=>0,"MG"=>0,"null"=>0,"MP"=>0,"BM"=>0,"BE"=>0,"dif"=>0],
                        "equipe3"=>["nom"=>"Belgique","point"=>0,"MJ"=>0,"MG"=>0,"null"=>0,"MP"=>0,"BM"=>0,"BE"=>0,"dif"=>0],
                        "equipe4"=>["nom"=>"Canada","point"=>0,"MJ"=>0,"MG"=>0,"null"=>0,"MP"=>0,"BM"=>0,"BE"=>0,"dif"=>0]];
                            // MATCHE1
                            if($_POST['equipe1-matche1'] =='' and $_POST['equipe2-matche1']==''){
                                $equipes["equipe1"]["point"]+=0;
                                $equipes["equipe2"]["point"]+=0;
                            }elseif($_POST['equipe1-matche1'] > $_POST['equipe2-matche1']){
                                $equipes["equipe1"]["point"]+=3;
                                $equipes["equipe1"]["MJ"]+=1;
                                $equipes["equipe2"]["MJ"]+=1;
                                $equipes["equipe1"]["MG"]+=1;
                                $equipes["equipe1"]["MP"]+=1;
                                $equipes["equipe1"]["BM"]+=$_POST['equipe1-matche1'];
                                $equipes["equipe2"]["BE"]+=$_POST['equipe1-matche1'];
                            }elseif($_POST['equipe1-matche1'] < $_POST['equipe2-matche1']){
                                $equipes["equipe2"]["point"]+=3;
                                $equipes["equipe1"]["MJ"]+=1;
                                $equipes["equipe2"]["MJ"]+=1;
                                $equipes["equipe2"]["MG"]+=1;
                                $equipes["equipe2"]["BM"]+=$_POST['equipe2-matche1'];
                                $equipes["equipe1"]["BE"]+=$_POST['equipe2-matche1'];
                            }elseif($_POST['equipe1-matche1'] == $_POST['equipe2-matche1']){
                                $equipes["equipe1"]["point"]+=1;
                                $equipes["equipe2"]["point"]+=1;
                                $equipes["equipe1"]["MJ"]+=1;
                                $equipes["equipe2"]["MJ"]+=1;
                                $equipes["equipe1"]["null"]+=1;
                                $equipes["equipe2"]["null"]+=1;
                            }
                                // MATCHE2
                            if($_POST['equipe3-matche1'] ==''and $_POST['equipe4-matche1']==''){
                                $equipes["equipe3"]["point"]+=0;
                                $equipes["equipe4"]["point"]+=0;
                            }elseif($_POST['equipe3-matche1'] > $_POST['equipe4-matche1']){
                                $equipes["equipe3"]["point"]+=3;
                                $equipes["equipe3"]["MJ"]+=1;
                                $equipes["equipe4"]["MJ"]+=1;
                                $equipes["equipe3"]["MG"]+=1;
                                $equipes["equipe3"]["BM"]+=$_POST['equipe3-matche1'];
                                $equipes["equipe4"]["BE"]+=$_POST['equipe3-matche1'];
                            }elseif($_POST['equipe3-matche1'] < $_POST['equipe4-matche1']){
                                $equipes["equipe4"]["point"]+=3;
                                $equipes["equipe3"]["MJ"]+=1;
                                $equipes["equipe4"]["MJ"]+=1;
                                $equipes["equipe4"]["MG"]+=1;
                                $equipes["equipe4"]["BM"]+=$_POST['equipe4-matche1'];
                                $equipes["equipe3"]["BE"]+=$_POST['equipe4-matche1'];
                            }elseif($_POST['equipe3-matche1'] == $_POST['equipe4-matche1']){
                                $equipes["equipe3"]["point"]+=1;
                                $equipes["equipe4"]["point"]+=1;
                                $equipes["equipe3"]["MJ"]+=1;
                                $equipes["equipe4"]["MJ"]+=1;
                                $equipes["equipe3"]["null"]+=1;
                                $equipes["equipe4"]["null"]+=1;
                            }
                             //  MATCHE3
                            if($_POST['equipe1-matche2'] ==''and $_POST['equipe4-matche2']==''){
                                $equipes["equipe1"]["point"]+=0;
                                $equipes["equipe4"]["point"]+=0;
                            }elseif($_POST['equipe1-matche2'] > $_POST['equipe4-matche2']){
                                $equipes["equipe1"]["point"]+=3;
                                $equipes["equipe1"]["MJ"]+=1;
                                $equipes["equipe4"]["MJ"]+=1;
                                $equipes["equipe1"]["MG"]+=1;
                                $equipes["equipe1"]["BM"]+=$_POST['equipe1-matche2'];
                                $equipes["equipe4"]["BE"]+=$_POST['equipe1-matche2'];
                            }elseif($_POST['equipe1-matche2'] < $_POST['equipe4-matche2']){
                                $equipes["equipe4"]["point"]+=3;
                                $equipes["equipe1"]["MJ"]+=1;
                                $equipes["equipe4"]["MJ"]+=1;
                                $equipes["equipe4"]["MG"]+=1;
                                $equipes["equipe4"]["BM"]+=$_POST['equipe4-matche2'];
                                $equipes["equipe1"]["BE"]+=$_POST['equipe4-matche2'];
                            }elseif($_POST['equipe1-matche2'] == $_POST['equipe4-matche2']){
                                $equipes["equipe1"]["point"]+=1;
                                $equipes["equipe4"]["point"]+=1;
                                $equipes["equipe1"]["MJ"]+=1;
                                $equipes["equipe4"]["MJ"]+=1;
                                $equipes["equipe3"]["null"]+=1;
                                $equipes["equipe4"]["null"]+=1;
                            }
                         //  MATCHE4
                            if($_POST['equipe2-matche2'] ==''and $_POST['equipe3-matche2']==''){
                                $equipes["equipe2"]["point"]+=0;
                                $equipes["equipe3"]["point"]+=0;
                            }elseif($_POST['equipe2-matche2'] > $_POST['equipe3-matche2']){
                                $equipes["equipe2"]["point"]+=3;
                                $equipes["equipe2"]["MJ"]+=1;
                                $equipes["equipe3"]["MJ"]+=1;
                                $equipes["equipe2"]["MG"]+=1;
                                $equipes["equipe2"]["BM"]+=$_POST['equipe2-matche2'];
                                $equipes["equipe3"]["BE"]+=$_POST['equipe2-matche2'];
                            }elseif($_POST['equipe2-matche2'] < $_POST['equipe3-matche2']){
                                $equipes["equipe3"]["point"]+=3;
                                $equipes["equipe2"]["MJ"]+=1;
                                $equipes["equipe3"]["MJ"]+=1;
                                $equipes["equipe3"]["MG"]+=1;
                                $equipes["equipe3"]["BM"]+=$_POST['equipe3-matche2'];
                                $equipes["equipe2"]["BE"]+=$_POST['equipe3-matche2'];
                            }elseif($_POST['equipe2-matche2'] == $_POST['equipe3-matche2']){
                                $equipes["equipe2"]["point"]+=1;
                                $equipes["equipe3"]["point"]+=1;
                                $equipes["equipe2"]["MJ"]+=1;
                                $equipes["equipe3"]["MJ"]+=1;
                                $equipes["equipe3"]["null"]+=1;
                                $equipes["equipe4"]["null"]+=1;
                            } 
                          //  MATCHE5
                            if($_POST['equipe1-matche3'] ==''and $_POST['equipe3-matche3']==''){
                                $equipes["equipe1"]["point"]+=0;
                                $equipes["equipe3"]["point"]+=0;
                            }elseif($_POST['equipe1-matche3'] > $_POST['equipe3-matche3']){
                                $equipes["equipe1"]["point"]+=3;
                                $equipes["equipe1"]["MJ"]+=1;
                                $equipes["equipe3"]["MJ"]+=1;
                                $equipes["equipe1"]["MG"]+=1;
                                $equipes["equipe4"]["null"]+=1;
                                $equipes["equipe1"]["BM"]+=$_POST['equipe1-matche3'];
                                $equipes["equipe3"]["BE"]+=$_POST['equipe1-matche3'];
                            }elseif($_POST['equipe1-matche3'] < $_POST['equipe3-matche3']){
                                $equipes["equipe3"]["point"]+=3; 
                                $equipes["equipe1"]["MJ"]+=1;
                                $equipes["equipe3"]["MJ"]+=1;
                                $equipes["equipe3"]["MG"]+=1;
                                $equipes["equipe3"]["BM"]+=$_POST['equipe3-matche3'];
                                $equipes["equipe1"]["BE"]+=$_POST['equipe3-matche3'];
                            }elseif($_POST['equipe1-matche3'] == $_POST['equipe3-matche3']){
                                $equipes["equipe1"]["point"]+=1;
                                $equipes["equipe3"]["point"]+=1;
                                $equipes["equipe1"]["MJ"]+=1;
                                $equipes["equipe3"]["MJ"]+=1;
                                $equipes["equipe3"]["null"]+=1;  
                                $equipes["equipe1"]["null"]+=1;  
                            }
                         //  MATCHE6
                            if($_POST['equipe2-matche3'] ==''and $_POST['equipe4-matche3']==''){
                                $equipes["equipe2"]["point"]+=0;
                                $equipes["equipe4"]["point"]+=0;
                            }elseif($_POST['equipe2-matche3'] > $_POST['equipe4-matche3']){
                                $equipes["equipe2"]["point"]+=3;
                                $equipes["equipe2"]["MJ"]+=1;
                                $equipes["equipe4"]["MJ"]+=1;
                                $equipes["equipe2"]["MG"]+=1;
                                $equipes["equipe2"]["BM"]+=$_POST['equipe2-matche3'];
                                $equipes["equipe4"]["BE"]+=$_POST['equipe2-matche3'];
                            }elseif($_POST['equipe2-matche3'] < $_POST['equipe4-matche3']){
                                $equipes["equipe4"]["point"]+=3;
                                $equipes["equipe2"]["MJ"]+=1;
                                $equipes["equipe4"]["MJ"]+=1;
                                $equipes["equipe4"]["MG"]+=1;
                                $equipes["equipe4"]["null"]+=1;
                                $equipes["equipe4"]["BM"]+=$_POST['equipe4-matche3'];
                                $equipes["equipe2"]["BE"]+=$_POST['equipe4-matche3'];
                            }elseif($_POST['equipe2-matche3'] == $_POST['equipe4-matche3']){
                                $equipes["equipe2"]["point"]+=1;
                                $equipes["equipe4"]["point"]+=1;
                                $equipes["equipe2"]["MJ"]+=1;
                                $equipes["equipe2"]["null"]+=1;
                                $equipes["equipe4"]["null"]+=1;
                                
                            }
                            // ----- Sort ------
                            $columns = array_column($equipes, 'point');
                            array_multisort($columns, SORT_DESC, $equipes);
                            // ------ html -------
                foreach($equipes as $equipe){
                    
                    echo "<tr>
                    <td>".$equipe["nom"]."</td>
                    <td>".$equipe["point"]."</td>
                    <td>".$equipe["MJ"]."</td>
                    <td>".$equipe["MG"]."</td>
                    <td>".$equipe["null"]."</td>
                    <td>".$equipe["MP"]."</td>
                    <td>".$equipe["BM"]."</td>
                    <td>".$equipe["BE"]."</td>
                    <td>".$equipe["dif"]=$equipe["BM"]-$equipe["BE"]."</td>
                    </tr>
                    ";
                }
            }
               ?>
               </tbody>
              </table>
            
        </section>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>
</body>
</html>