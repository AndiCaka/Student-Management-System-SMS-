<!DOCTYPE html>
<html lang="en">
<?php
require "config.php";
?>
<!-- Mirrored from preschool.dreamguystech.com/php-template/student-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:49 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Student Details</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left">
                <a href="index.php" class="logo">
                    <img src="assets/img/logo.png" alt="Logo">
                </a>
                <a href="index.php" class="logo logo-small">
                    <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
                </a>
            </div>

            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fas fa-align-left"></i>
            </a>

            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>


            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>


            <ul class="nav user-menu">

                <li class="nav-item dropdown noti-dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="far fa-bell"></i> <span class="badge badge-pill">3</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-11.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">International Software Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-17.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone XR</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-13.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Mercury Software Inc</span> added a new product <span class="noti-title">Apple MacBook Pro</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="#">View all Notifications</a>
                        </div>
                    </div>
                </li>


                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor"></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>Ryan Taylor</h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="profile.php">My Profile</a>
                        <a class="dropdown-item" href="inbox.php">Inbox</a>
                        <a class="dropdown-item" href="log_out.php">Logout</a>
                    </div>
                </li>

            </ul>

        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Main Menu</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-user-graduate"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="index.php">Admin Dashboard</a></li>
                                <li><a href="teacher-dashboard.php">Teacher Dashboard</a></li>
                                <li><a href="student-dashboard.php">Student Dashboard</a></li>
                            </ul>
                        </li>
                        <li class="submenu active">
                            <a href="#"><i class="fas fa-user-graduate"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="students.php">Student List</a></li>
                                <li><a href="student-details.php" class="active">Student View</a></li>
                                <li><a href="add-student.php">Student Add</a></li>

                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="teachers.php">Teacher List</a></li>
                                <li><a href="teacher-details.php">Teacher View</a></li>
                                <li><a href="add-teacher.php">Teacher Add</a></li>
                                <li><a href="edit-teacher.php">Teacher Edit</a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="subjects.php">Subject List</a></li>
                                <li><a href="add-subject.php">Subject Add</a></li>
                                <li><a href="edit-subject.php">Subject Edit</a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="register.php">Register</a></li>
                                <li><a href="forgot-password.php">Forgot Password</a></li>
                                <li><a href="error-404.php">Error Page</a></li>
                            </ul>
                        </li>

                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Student Details</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="students.php">Student</a></li>
                                <li class="breadcrumb-item active">Student Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="about-info">
                                    <h4>About Me</h4>
                                    <div class="media mt-3">
                                        <img src="assets/img/user.jpg" class="mr-3" alt="...">
                                        <div class="media-body">
                                            <ul>
                                                <li>
                                                    <span class="title-span">Full Name : </span>
                                                    <span class="info-span">Daisy Parks</span>
                                                </li>
                                                <li>
                                                    <span class="title-span">Department : </span>
                                                    <span class="info-span">Computer Science</span>
                                                </li>
                                                <li>
                                                    <span class="title-span">Mobile : </span>
                                                    <span class="info-span">+91 89657 48512</span>
                                                </li>
                                                <li>
                                                    <span class="title-span">Email : </span>
                                                    <span class="info-span"><a href="https://preschool.dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7216131b010b32151f131b1e5c111d1f">[email&#160;protected]</a></span>
                                                </li>
                                                <li>
                                                    <span class="title-span">Gender : </span>
                                                    <span class="info-span">Male</span>
                                                </li>
                                                <li>
                                                    <span class="title-span">DOB : </span>
                                                    <span class="info-span">22 Apr 1995</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <p>Hello I am Daisy Parks. Lorem Ipsum is simply dummy text of the printing and typesetting industry, simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </div>
                                    <div class="row follow-sec">
                                        <div class="col-md-4 mb-3">
                                            <div class="blue-box">
                                                <h3>2850</h3>
                                                <p>Followers</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="blue-box">
                                                <h3>2050</h3>
                                                <p>Following</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="blue-box">
                                                <h3>2950</h3>
                                                <p>Friends</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <h5>Permanent Address</h5>
                                            <p>480, Estern Avenue, Courtage area, New York</p>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <h5>Present Address</h5>
                                            <p>480, Estern Avenue, Courtage area, New York</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="skill-info">
                                    <h4>Skills</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, simply dummy text of the printing and typesetting industry</p>
                                    <ul>
                                        <li>
                                            <label>Lorem Ipsum is simply</label>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <label>Lorem Ipsum is simply</label>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100" style="width: 69%"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <label>Lorem Ipsum is simply</label>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <label>Lorem Ipsum is simply</label>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <h5>Education</h5>
                                            <p class="mt-3">Secondary Schooling at xyz school of secondary education, Mumbai.</p>
                                            <p>Higher Secondary Schooling at xyz school of higher secondary education, Mumbai.</p>
                                            <p>Bachelor of Science at Abc College of Art and Science, Chennai.</p>
                                            <p>Master of Science at Cdm College of Engineering and Technology, Pune.</p>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <h5>Certificates</h5>
                                            <p class="mt-3">1st Prise in Running Competition.</p>
                                            <p>Lorem Ipsum is simply dummy text.</p>
                                            <p>Won overall star student in higher secondary education.</p>
                                            <p>Lorem Ipsum is simply dummy text.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="skill-info">
                                    <h4>Settings</h4>
                                    <form>
                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <label>Current Password</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <label>New Password</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <p>Copyright © 2020 Dreamguys.</p>
            </footer>

        </div>

    </div>


    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/php-template/student-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->

</html>