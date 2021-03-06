<html>
    <head>
        <meta charset="utf-8"><!-- character encoding -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/sideBar.css') }}"  rel="stylesheet">
        <link href="{{ asset('css/ToDo_Notif.css') }}"  rel="stylesheet">
        <link href="{{ asset('css/addClass.css') }}" rel="stylesheet">
        <link href="{{ asset('css/editClass.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        
        <link href="https://fonts.googleapis.com/css?family=Ubuntu|Bree+Serif" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>

    </head>
    <body>
        <!-- NAVIGATION BAR -->
            <nav>
                <div >
                    <i class="fa fa-bars fa-lg" onclick="toggleSidebar()" class="active"></i>
                </div>
                <a href="#"><img src="\images\logogray2.png"></a>

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
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logoutIcon').submit();">
                                <i class="fa fa-sign-out fa_icons"></i>
                            </a>
                            <form id="logoutIcon" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>

                            <img src="https://cdn.iconscout.com/public/images/icon/free/png-512/avatar-user-teacher-312a499a08079a12-512x512.png">                          
                            <a id="editPic" href="/editPicture">Edit Picture</a> 
                            <div class="info"> 
								<!-- BEFORE: Auth::user()->'name' and BEFORE: Auth::user()->'IDnum'-->
                                <p>{{ Auth::user()['name'] }}</p>
                                <p>{{ Auth::user()['IDnum'] }}</p>
                            </div>
                        </div>
                    <!-- USER INFO -->
                    <!-- NAVIGATION -->
                        <div class="details">
                            <ul>
                                <!-- CALENDAR BUTTON -->
                                <li class="hvr-underline-from-center"><a href="/calendar">Calendar</a></li>
                                <!-- CLASSES BUTTON -->
                                <li id="theClasses" class="hvr-underline-from-center">
                                        <i id="plus_icon" class="fa fa-plus" onclick="toggleSubject()"></i>
                                        <a href="#">Classes</a>
                                        <i id="ellipsis_icon" class="fa fa-ellipsis-h" onclick="toggleWork()"></i>

                                    <div id="classDropDown">
                                        <ul id="subjectID">
                                            <div>
                                                @if(count($classes) > 0)
                                                    @foreach($classes as $class)
                                                        <li class="hvr-underline-from-center">
                                                            @if (Auth::user()['userType'] =='t')
                                                                <a id="thisClass" onclick="currentClass(this)" onclick="viewGrades(this)" href="/viewGrades/{{ $class->id }}">{{ $class->name }}</a>
                                                                <input type="hidden" value="{{ $class->id }}" class="classID">
                                                                <input type="hidden" value="{{ $class->name }}" class="className_">
                                                                 <a id="editIcon" href="#editClass" class="modal-open" onclick="profEditModal(this)"><i id="wrench" class="fa fa-wrench fa-xs" ></i></a>
                                                            @else                                                                   
                                                                <a id="thisClass" href="/timeline/{{ $class->id }}">{{ $class->name }}</a>
                                                                <input type="hidden" value="{{ $class->id }}" class="classID">                                                                    <input type="hidden" value="{{ $class->name }}" class="className_">
                                                                <a id="editIcon" href="#editClass" class="modal-open" onclick="dropModal(this)"><i id="wrench" class="fa fa-times fa-xs" ></i></a>
                                                            @endif
                                                        </li>                                                
                                                    @endforeach                                               
                                                @else
                                                    <li>No Class</li>
                                                @endif
                                            </div>                                             
                                            <li id="newClass"><a href="#addClass" class="modal-open">+ Add Class</a></li>                                                                             
                                        </ul>
                                        <ul id="workID">                                        
                                        
                            
        										<!-- BEFORE: Auth::user()->'userType'-->
                                                @if (Auth::user()['userType'] =='s')                                           
                                                    <li class="hvr-underline-from-center"><a href="#">Study Set</a></li>
                                                @elseif (Auth::user()['userType'] =='t')
                                                    <li class="hvr-underline-from-center"><a href="/viewGrades">Record Grades</a></li>


                                                    <li class="hvr-underline-from-center">
                                                        <form method="POST" action="/studentList">
                                                            @csrf
                                                            <input type="hidden" name="classID" value="1"> <!-- edit this to classID -->
                                                            <button type="submit" class="ClassBtn">Students</button>
                                                        </form>

                                                    </li>

                                                @endif          
                                                                             
                                        </ul>                           
                                    </div>
                                </li>
                                <!-- <div id="student_space"> -->

                                <li id="viewGrades" class="hvr-underline-from-center"><a href="/viewGrades">Grades</a></li>
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
               
            </div>
        <!-- TO DO BAR -->
        
        <!-- BODY / RIGHT SIDE PANEL -->
            @if (Auth::user()->userType=='s')
                <!-- STUDENT ADD CLASS MODAL -->
                <div class="modalBody" id="addClass">
                    <div class="addModal_content">
                        <a href="#" class="closeModal">&times;</a>
                        <h2 class="addModalHeading">Add Class</h2>
                         <form method="POST" action="/home">
                            {{ csrf_field() }}
                            <label>Please enter 5 digit code.</label>
                            <input class="modalInput" required placeholder="Enter Class Code" pattern="[A-Za-z0-9]{5}" type="text" name="classCode"><br><br>
                            <input type="hidden" value="{{ Auth::user()['IDnum'] }}"> 
                            <button class="submit" type="submit" value="Submit">Submit</button>
                        </form>
                    </div>
                </div>
                <!-- /STUDENT ADD CLASS MODAL -->

                <!-- STUDENT DROP CLASS MODAL -->
                <div class="modalBody" id="editClass">
                    <div class="editModal_content">
                        <a href="#" class="closeModal">&times;</a>
                        <h2 class="addModalHeading">Are you sure you want to drop class?</h2>
                        <form class="dropForm" method="POST" id="dropClass">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <input type="hidden" id="dropClassID"> 
                            <button class="drop" type="submit">YES</button>
                            </form>
                        <button class="no"><a href="#">Cancel</a></button>                        
                    </div>
                </div>
                <!-- /STUDENT DROP CLASS MODAL -->
            @elseif (Auth::user()->userType=='t')
                <!-- PROF ADD CLASS MODAL -->
                <div class="modalBody" id="addClass">
                    <div class="addModal_content">
                        <a href="#" class="closeModal">&times;</a>
                        <h2 class="addModalHeading">Add Class</h2>
                        <form method="POST" action="/store">
                            {{ csrf_field() }}
                            <input class="modalInput" required placeholder="Enter Class Name" type="text" name="className">
                            <input class="modalInput" required placeholder="Enter Class Code" type="text" name="classCode">
                            <!-- <p>Code: dhu1ia</p> -->
                            <button class="submit" type="submit" >Submit</button>
                        </form>
                    </div>
                </div>
                <!-- /PROF ADD CLASS MODAL -->
                <!-- PROF DROP CLASS MODAL -->
                <div class="modalBody" id="editClass">
					<div class="editModal_content">
						<a href="#" class="closeModal">&times;</a>
						<h2 class="editModalHeading2">Edit Class</h2>
						<form method="POST" id="editClassForm">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <input class="modalInput" id="classEdit" placeholder="Edit Class Name" type="text" name="className"><br><br>
                            <input type="hidden" name="classEditID_name" id="classEditID">                            
                            <button class="cancel"><a href="#">Cancel</a></button>
                            <button class="save" type="submit">Save</button>
                        </form> 
                        <form class="delForm" method="POST" id="delClass">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <input type="hidden" name="delClassID">
                            <button class="drop" onclick="deleteClass(this)" type="submit">Drop</button>
                        </form>                                            
					</div>
                </div>
                <!-- /PROF DROP CLASS MODAL --> 
            @endif
        <!-- BODY / RIGHT SIDE PANEL -->
    </body>
    <script src="{{asset('js/main.js')}}" ></script>
</html>
