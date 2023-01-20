<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles4.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>
    <section class="header">
        <div class="logo">
            <i class="ri-menu-line icon icon-0 menu"></i>
            <h2>Looksify<span>Me</span></h2>
        </div>

    </section>
    <section class="main">
        <div class="sidebar">
            <ul class="sidebar--items">
                
                
                <li>
                    <a href="login1.php">
                        <span class="icon icon-3"><i class="ri-user-5-line"></i></span>
                        <span class="sidebar--item" style="white-space: nowrap;">Customer</span>
                    </a>
                </li>
                <li>
                    <a href="login2.php">
                        <span class="icon icon-4"><i class="ri-user-line"></i></span>
                        <span class="sidebar--item">Employee</span>
                    </a>
                </li>
                <li>
                    <a href="login3.php">
                        <span class="icon icon-6"><i class="ri-user-2-line"></i></span>
                        <span class="sidebar--item">Owner</span>
                    </a>
                </li>
            </ul>
            <ul class="sidebar--bottom-items">
                
                <li>
                    <a href="login.php">
                        <span class="icon icon-8"><i class="ri-logout-box-r-line"></i></span>
                        <span class="sidebar--item">Return</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main--content">
            <div class="Amenities">
                <div class="title">
                    <h2 class="section--title">Amenities</h2>
                    
                </div>
                <div class="cards">
                    <div class="card card-4">
                        <div class="card--data">
                            <div class="card--content">
                                <h4 class="card--title">Total Capacity</h4><br>
                                <h1>50</h1>
                            </div>
                            <i class="ri-user-3-line card--icon--lg"></i>
                        </div>
                        
                    </div>
                    <div class="card card-2">
                        <div class="card--data">
                            <div class="card--content">
                                <h4 class="card--title">Ratings</h4><br>
                                <h1>* * * * *</h1>
                            </div>
                            <i class="ri-user-5-line card--icon--lg"></i>
                        </div>
                        <div class="card--stats">
                            
                            
                        </div>
                    </div>
                    <div class="card card-3">
                        <div class="card--data">
                            <div class="card--content">
                                <h4 class="card--title">Assistance</h4><br>
                                <h1>24/7</h1>
                            </div>
                            <i class="ri-customer-service-2-line card--icon--lg"></i>
                        </div>
                        
                    </div>
                   
                </div>
            </div>
            <div class="employees">
                <div class="title">
                    <h2 class="section--title">Employees</h2>
                    
                </div>
                <div class="doctors--cards">
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="employee1.jpg" alt="">
                            </div>
                        </div>
                        <p class="free">Jenny</p>
                    </a>
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="employee2.jpg" alt="">
                            </div>
                        </div>
                        <p class="scheduled">Nick</p>
                    </a>
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="employee3.jpg" alt="">
                            </div>
                        </div>
                        <p class="free">Joseph</p>
                    </a>
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="employee4.jpg" alt="">
                            </div>
                        </div>
                        <p class="scheduled">Rick</p>
                    </a>
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="employee5.jpg" alt="">
                            </div>
                        </div>
                        <p class="free">Suzen</p>
                    </a>
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="employee6.jpg" alt="">
                            </div>
                        </div>
                        <p class="scheduled">Jonas</p>
                    </a>
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="employee7.jpg" alt="">
                            </div>
                        </div>
                        <p class="free">Nancy</p>
                    </a>
                </div>
            </div>
            
        </div>
    </section>
    <script src="main.js"></script>
</body>

</html>