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
        <div class="search--notification--profile">
            <div class="search">
                <input type="text" placeholder="Search Appointment">
                <button><i class="ri-search-2-line"></i></button>
            </div>
            <div class="notification--profile">
                <div class="picon lock">
                    <i class="ri-lock-line"></i>
                </div>
                <div class="picon bell">
                    <i class="ri-notification-2-line"></i>
                </div>
                <div class="picon chat">
                    <i class="ri-wechat-2-line"></i>
                </div>
                
            </div>
        </div>
    </section>
    <section class="main">
        <div class="sidebar">
            <ul class="sidebar--items">
                
                <li>
                    <a href="#">
                        <span class="icon icon-2"><i class="ri-calendar-2-line"></i></span>
                        <span class="sidebar--item">Appointments</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon icon-3"><i class="ri-profile-line"></i></span>
                        <span class="sidebar--item" style="white-space: nowrap;">Generate Report</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon icon-0"><i class="ri-money-cny-circle-line"></i></span>
                        <span class="sidebar--item">Revenue</span>
                    </a>
                </li>
                
                <li>
                    <a href="#">
                        <span class="icon icon-7"><i class="ri-medal-2-line"></i></span>
                        <span class="sidebar--item">Achievements</span>
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
                    <h2 class="section--title">Overview</h2>
                    <select name="date" id="date" class="dropdown">
                        <option value="today">Today</option>
                        <option value="lastweek">Last Week</option>
                        <option value="lastmonth">Last Month</option>
                        <option value="lastyear">Last Year</option>
                        <option value="alltime">All Time</option>
                    </select>
                </div>
                <div class="cards">
                    <div class="card card-1">
                        <div class="card--data">
                            <div class="card--content">
                                <h3 class="card--title">Total Employees</h3>
                                <h1>19</h1>
                            </div>
                            <i class="ri-user-2-line card--icon--lg"></i>
                        </div>
                        
                    </div>
                    <div class="card card-2">
                        <div class="card--data">
                            <div class="card--content">
                                <h3 class="card--title">Active Customers</h3>
                                <h1>25</h1>
                            </div>
                            <i class="ri-user-line card--icon--lg"></i>
                        </div>
                        
                    </div>
                    <div class="card card-3">
                        <div class="card--data">
                            <div class="card--content">
                                <h3 class="card--title">Appointments</h3>
                                <h1>127</h1>
                            </div>
                            <i class="ri-calendar-2-line card--icon--lg"></i>
                        </div>
                       
                    </div>
                   
                </div>
            </div>
            <div class="doctors">
                <div class="title">
                    <h2 class="section--title">Employees</h2>
                    <div class="doctors--right--btns">
                        <select name="date" id="date" class="dropdown doctor--filter">
                            <option >Filter</option>
                            <option value="free">Free</option>
                            <option value="scheduled">Scheduled</option>
                        </select>
                        
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
                    <h2 class="section--title">Upcoming Appointments</h2>
                    <button class="add"><i class="ri-add-line"></i>Assign Employee</button>
                </div>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Service</th>
                                <th>Time</th>
                                <th>Status</th>
                                <th>Settings</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Shane Williams</td>
                                <td>17/12/2022</td>
                                <td>Hair cut, Beard Set</td>
                                <td>5:30PM</td>
                                <td class="pending">pending</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>
                            <tr>
                                <td>John Michael</td>
                                <td>15/12/2022</td>
                                <td>Hair color, Facial</td>
                                <td>8:00PM</td>
                                <td class="confirmed">Confirmed</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>
                            
                            <tr>
                                <td>Milly Michael</td>
                                <td>15/12/2022</td>
                                <td>De-tan, Hair cut</td>
                                <td>8:00PM</td>
                                <td class="confirmed">Confirmed</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>
                            <tr>
                                <td>Jassie Richael</td>
                                <td>17/12/2022</td>
                                <td>Hair color</td>
                                <td>2:00PM</td>
                                <td class="confirmed">Confirmed</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>
                            
                            
                            <tr>
                                <td>Nick Paul</td>
                                <td>18/12/2022</td>
                                <td>Facial</td>
                                <td>4:00PM</td>
                                <td class="pending">Pending</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>                                                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script src="main.js"></script>
</body>

</html>