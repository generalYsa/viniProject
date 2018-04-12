<html>
    <head>
        <meta charset="utf-8"><!-- character encoding -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/sideBar.css') }}"  rel="stylesheet">
        <link href="{{ asset('css/ToDo_Notif.css') }}"  rel="stylesheet">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- <link href="https://fonts.googleapis.com/css?family=Ubuntu|Bree+Serif" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <!-- NAVIGATION BAR -->
            <nav>
                <div >
                    <i class="fa fa-bars fa-lg" onclick="toggleSidebar()" class="active"></i>
                </div>
                <a href="#"><img src="images\logogray2.png"></a>

                <!-- NOTIFICATION BUTTON -->
                <i class="fa fa-bell fa-lg fa_icons" onclick="toggleNotif()" class="active"></i>

                <!-- TO DO BUTTON -->
                <i class="fa fa-check-square fa_icons" onclick="toggleToDo()" aria-hidden="true"></i>
            </nav>
        <!-- /NAVIGATION BAR -->

        <!-- SIDEBAR NAVIGATION -->
            <div id="sidebar">
                    <!-- USER INFO -->
                        <div class="user">
                            <i class="fa fa-sign-out"></i>      
                            <img src="https://cdn.iconscout.com/public/images/icon/free/png-512/avatar-user-teacher-312a499a08079a12-512x512.png">  
                            <a href="editPicture.html">Edit Picture</a> 
                            <div class="info">                  
                                <p>Teacher Ganda</p>
                                <p>20xx-xxxxx</p>
                            </div>
                        </div>
                    <!-- USER INFO -->
                    <!-- NAVIGATION -->
                        <div class="details">
                            <ul>
                                <!-- CALENDAR BUTTON -->
                                <li class="hvr-underline-from-center"><a href="#">Calendar</a></li>
                                <!-- CLASSES BUTTON -->
                                <li id="theClasses" class="hvr-underline-from-center"><i id="plus_icon" class="fa fa-plus"></i><a href="#">Classes</a><i id="ellipsis_icon" class="fa fa-ellipsis-h"></i>
                                    <div id="chenes">
                                        <ul id="subjectID">
                                            <div>
                                            <li class="hvr-underline-from-center"><a href="#">CMSC 129</a><a href="#unmodal" class="modal-open"><i class="fa fa-wrench fa-xs"></i></a></li>
                                            <li class="hvr-underline-from-center"><a href="#">CMSC 126</a><a href="#unmodal" class="modal-open"><i class="fa fa-wrench fa-xs"></i></a></li>
                                            <li class="hvr-underline-from-center"><a href="#">CMSC 126</a><a href="#unmodal" class="modal-open"><i class="fa fa-wrench fa-xs"></i></a></li>
                                            <li class="hvr-underline-from-center"><a href="#">CMSC 126</a><a href="#unmodal" class="modal-open"><i class="fa fa-wrench fa-xs"></i></a></li>
                                            <li class="hvr-underline-from-center"><a href="#">CMSC 129</a><a href="#unmodal" class="modal-open"><i class="fa fa-wrench fa-xs"></i></a></li>
                                            <li class="hvr-underline-from-center"><a href="#">CMSC 126</a><a href="#unmodal" class="modal-open"><i class="fa fa-wrench fa-xs"></i></a></li>
                                            <li class="hvr-underline-from-center"><a href="#">CMSC 126</a><a href="#unmodal" class="modal-open"><i class="fa fa-wrench fa-xs"></i></a></li>
                                            <li class="hvr-underline-from-center"><a href="#">CMSC 126</a><a href="#unmodal" class="modal-open"><i class="fa fa-wrench fa-xs"></i></a></li>
                                            <li class="hvr-underline-from-center"><a href="#">CMSC 129</a><a href="#unmodal" class="modal-open"><i class="fa fa-wrench fa-xs"></i></a></li>
                                            <li class="hvr-underline-from-center"><a href="#">CMSC 126</a><a href="#unmodal" class="modal-open"><i class="fa fa-wrench fa-xs"></i></a></li>
                                            <li class="hvr-underline-from-center"><a href="#">CMSC 126</a><a href="#unmodal" class="modal-open"><i class="fa fa-wrench fa-xs"></i></a></li>
                                            <li class="hvr-underline-from-center"><a href="#">CMSC 126</a><a href="#unmodal" class="modal-open"><i class="fa fa-wrench fa-xs"></i></a></li>
                                            </div>
                                            <li id="newClass"><a href="#modal" class="modal-open">+ Add Class</a></li>                                      
                                        </ul>
                                        <!-- [NOTE] this should be editied according to the type of user-->
                                        <ul id="workID">
                                            <li class="hvr-underline-from-center"><a href="#">Record Grades</a></li>
                                            <li class="hvr-underline-from-center"><a href="student_list.html">Students</a></li>
                                        </ul>                           
                                    </div>
                                </li>
                                <!-- <div id="student_space"> -->
                                <li class="hvr-underline-from-center"><a href="/chat">Messages</a></li>
                            </ul>
                        </div>
                    <!-- NAVIGATION -->
            </div>
        <!-- /SIDEBAR NAVIAGTION -->

        <!-- NOTIFICATION BAR -->
            <div id="notifBar" class="navDrpDwn">               
                <!-- INDIVIDUAL NOTIF -->
                    <a href=""> <!-- LINK TO POST -->
                        <input type="hidden" value="true" id="isRead">
                        <div class="notif">
                            <!-- IMAGE -->
                                <div class="avatar">
                                    <img src="https://cdn.iconscout.com/public/images/icon/free/png-512/avatar-user-teacher-312a499a08079a12-512x512.png"></img>
                                </div>
                            <!-- DESCRIPTION -->
                                <div class="description"> 
                                    Kemerlin posted an event in CMSC 129.
                                </div>
                            <!-- DATE -->
                                <div class="date">
                                    5 hours ago
                                </div>
                        </div>
                    </a>
                <!-- /INDIVIDUAL NOTIF -->

                <!-- NOTIF IF NOTF HAS BEEN OPENED -->
                    <a href=""> <!-- LINK TO POST -->
                        <input type="hidden" value="true" id="isRead">
                        <div class="notif" style="filter: grayscale(80%)">
                            <!-- IMAGE -->
                                <div class="avatar">
                                    <img src="https://cdn.iconscout.com/public/images/icon/free/png-512/avatar-user-teacher-312a499a08079a12-512x512.png"></img>
                                </div>
                            <!-- DESCRIPTION -->
                                <div class="description"> 
                                    Kemerlin Chemerutskineshy posted an event in CMSC 129.
                                </div>
                            <!-- DATE -->
                                <div class="date">
                                    5 hours ago
                                </div>
                        </div>
                    </a>
                <!-- /NOTIF IF NOTF HAS BEEN OPENED -->
            </div>
        <!-- NOTIFICATION BAR -->

        <!-- TO DO BAR -->
            <div id="toDoBar" class="navDrpDwn">                
                <!-- INDIVIDUAL NOTIF -->
                    <a href=""> <!-- LINK TO POST -->
                        <input type="hidden" value="true" id="isRead">
                        <div class="notif">
                            <!-- IMAGE -->
                                <i class="fa fa-check-circle fa-4x" aria-hidden="true" ></i>
                            <!-- DESCRIPTION -->
                                <div class="deadline">
                                    DUE TOMMORROW
                                </div>

                                <div class="title"> 
                                    Lab 3: Kemerlin
                                </div>

                                <div class="subject">
                                    CMSC 124
                                </div>

                        </div>
                    </a>
                <!-- /INDIVIDUAL NOTIF -->

                <a href=""> <!-- LINK TO POST -->
                        <input type="hidden" value="true" id="isRead">
                        <div class="notif">
                            <!-- IMAGE -->
                                <i class="fa fa-check-circle fa-4x" aria-hidden="true" style="color: #33cccc"></i>
                            
                            <!-- DESCRIPTION -->
                                
                                <div class="deadline">
                                    DUE Feb 13, 2018
                                </div>


                                <div class="title"> 
                                    Lab 76: Pak Ganern Ganern
                                </div>

                                <div class="subject">
                                    CMSC 124
                                </div>

                        </div>
                    </a>
            </div>
        <!-- TO DO BAR -->
    </body>
    <script src= "{{asset('js/main.js')}}" ></script>
</html>
