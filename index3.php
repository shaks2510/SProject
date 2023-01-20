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
                    <a href="#">
                        <span class="icon icon-2"><i class="ri-money-dollar-circle-line"></i></span>
                        <span class="sidebar--item">Salary Slip</span>
                    </a>
                </li>
                <li>
                    <a href="index2.php">
                        <span class="icon icon-3"><i class="ri-user-2-line"></i></span>
                        <span class="sidebar--item" style="white-space: nowrap;">Apply Leave</span>
                    </a>
                </li>
                <li>
                    <a href="index3.php">
                        <span class="icon icon-4"><i class="ri-user-line"></i></span>
                        <span class="sidebar--item">Tickets</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon icon-6"><i class="ri-customer-service-line"></i></span>
                        <span class="sidebar--item">Support</span>
                    </a>
                </li>
            </ul>
            <ul class="sidebar--bottom-items">
                <li>
                    <a href="#">
                        <span class="icon icon-7"><i class="ri-settings-3-line"></i></span>
                        <span class="sidebar--item">Change Password</span>
                    </a>
                </li>
                <li>
                    <a href="index1.php">
                        <span class="icon icon-8"><i class="ri-logout-box-r-line"></i></span>
                        <span class="sidebar--item">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main--content">
            <div class="overview">
                <div class="title">
                    <h2 class="section--title">Attendance Report</h2>
                    <select name="date" id="date" class="dropdown">
                        <option value="January">January</option>
                        <option value="Febraury">Febraury</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>
                </div>
                <div class="cards">
                    <div class="card card-1">
                        <div class="card--data">
                            <div class="card--content">
                                <h3 class="card--title">Working Days</h3>
                                <h1>31</h1>
                            </div>
                            <i class="ri-calendar-2-line card--icon--lg"></i>
                        </div>
                        
                    </div>
                    <div class="card card-2">
                        <div class="card--data">
                            <div class="card--content">
                                <h3 class="card--title">Present</h3>
                                <h1>28</h1>
                            </div>
                            <i class="ri-user-line card--icon--lg"></i>
                        </div>
                        
                    </div>
                    <div class="card card-3">
                        <div class="card--data">
                            <div class="card--content">
                                <h3 class="card--title">Absent</h3>
                                <h1>2</h1>
                            </div>
                            <i class="ri-user-line card--icon--lg"></i>
                        </div>
                        
                    </div>
                   
                </div>
            </div>
            <div class="doctors">
                <div class="title">
                    <h2 class="section--title">Team LooksifyMe</h2>
                    <div class="doctors--right--btns">
                        
                        
                    </div>
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
            <div class="recent--patients">
                <div class="title">
                    <h2 class="section--title">Recent Leaves</h2>
                    
                </div>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                
                                <th>Date</th>
                                <th>Day</th>
                                <th>Duration</th>
                                <th>Type</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                <td>17/11/2022</td>
                                <td>Saturday</td>
                                <td>Half-Day</td>
                                <td>Casual Leave</td>
                                
                            </tr>
                            <tr>
                                
                                <td>25/11/2022</td>
                                <td>Wednesday</td>
                                <td>Full-Day</td>
                                <td> Earned Leave</td>
                                
                            </tr>
                            
                            <tr>
                                
                                <td>29/11/2022</td>
                                <td>Sunday</td>
                                <td>Half-Day</td>
                                <td> Sick Leave</td>
                                
                            </tr>
                            
                            
                                                        
                            
                       </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script src="main.js"></script>
</body>

</html>