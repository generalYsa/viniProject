<html>
    <head>
        <meta name="_token" content="{!! csrf_token() !!}" />
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
                <span class="notifCircle" id="notifCircle"></span>

                <!-- TO DO BUTTON -->
                <i class="fa fa-check-square fa_icons" id="toDoBtn" aria-hidden="true"></i>
                <span class="notifCircle" id="toDoCircle"></span>
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
                                        <a href="#">{{ $className or 'Classes' }}</a>
                                        <i id="ellipsis_icon" class="fa fa-ellipsis-h" onclick="toggleWork()"></i>

                                    <div id="classDropDown">
                                        <ul id="subjectID">
                                            <div>
                                                @if(count($classes) > 0)
                                                    @foreach($classes as $class)

                                                        <!-- LINKS FOR CLASSES -->
                                                            <form method='POST' ACTION='/timeline' id='classlistForm'>
                                                                @csrf
                                                                <li class="hvr-underline-from-center">
                                                                    <input type='hidden' name='classID' value='{{ $class->id }}'> 
                                                                    <input type='hidden' name='className' value='{{ $class->name }}'> 
                                                                    <button class='ClassBtn'>{{ $class->name }}</button>
                                                                    <a href="#editClass" class="modal-open"><i class="fa fa-wrench fa-xs" onclick="editClass(this)"></i></a>
                                                                </li>
                                                            </form>  
                                                        <!-- LINKS FOR CLASSES  -->
                                                    @endforeach                                               
                                                @else
                                                    <li>No Class</li>
                                                @endif
                                            </div>                                             
                                            <li id="newClass"><a href="#addClass" class="modal-open">+ Add Class</a></li>                                                                             
                                        </ul>
                                        <ul id="workID">                                        
                                        @if (Auth::user()->userType=='s')
                                        <!-- [NOTE] this should be edited according to the type of user-->
										@endif
                                        <ul id="workID">
                                        
										<!-- BEFORE: Auth::user()->'userType'-->
                                        @if (Auth::user()['userType'] =='s')
                                            <li class="hvr-underline-from-center"><a href="">Grades</a></li>
                                            <li class="hvr-underline-from-center"><a href="#">Study Set</a></li>
                                        @elseif (Auth::user()['userType'] =='t')
                                            <li class="hvr-underline-from-center"><a href="#">Record Grades</a></li>
                                            <li class="hvr-underline-from-center"><a href="/studentList">Students</a></li>                                              
                                        @endif                                           
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
               
            </div>
        <!-- TO DO BAR -->


        <!-- BODY / RIGHT SIDE PANEL -->
            @if (Auth::user()->userType=='s')
                <!-- STUDENT ADD CLASS MODAL -->
                <div class="modalBody" id="addClass">
                    <div class="addModal_content">
                        <a href="#" class="closeModal">&times;</a>
                        <h2 class="addModalHeading">Add Class</h2>
                        <form action="#">
                            <input class="modalInput" placeholder="Enter Class Code" type="text" name="classCode"><br><br>
                            <button class="submit" type="submit" value="Submit">Submit</button>
                        </form>
                    </div>
                </div>
                <!-- /STUDENT ADD CLASS MODAL -->

                <!-- STUDENT DROP CLASS MODAL -->
                <div class="modalBody" id="editClass">
                    <div class="editModal_content">
                        <a href="#" class="closeModal">&times;</a>
                        <h2 class="addModalHeading">Are you sure you want to remove class?</h2>
                        <form action="#">                           
                            <button class="yes" type="submit" value="Submit">YES</button>
                            <button class="no" type="submit" value="Submit">NO</button>
                        </form>
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
                            <input class="modalInput" placeholder="Enter Class Name" type="text" name="className">
                            <input class="modalInput" placeholder="Enter Class Code" type="text" name="classCode">
                            <!-- <p>Code: dhu1ia</p> -->
                            <button class="submit" type="submit" value="Submit">Submit</button>
                        </form>
                    </div>
                </div>
                <!-- /PROF ADD CLASS MODAL -->
                <!-- PROF DROP CLASS MODAL -->
                <div class="modalBody" id="editClass">
					<div class="editModal_content">
						<a href="#" class="closeModal">&times;</a>
						<h2 class="editModalHeading2">Edit Class</h2>
						<form method="POST" action="/update">
							{{ method_field('PUT') }}
							{{ csrf_field() }}
							<input class = "modalInput" placeholder="Edit Class Name" type="text" name="className"><br><br>
							<!-- <input type="hidden" name="className" value="name"> -->
							<!-- <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"> -->
							<!-- <button class="drop" type="submit">Drop</button> -->
							<button class="cancel" type="reset">Cancel</button>
							<button class="save" type="submit">Save</button>
						</form>                     
					</div>
                </div>
                <!-- /PROF DROP CLASS MODAL --> 
            @endif
        <!-- BODY / RIGHT SIDE PANEL -->
    </body>
    <script src="{{asset('js/main.js')}}" ></script>
    <script src="{{asset('js/toDoAjax.js')}}" ></script>
</html>
