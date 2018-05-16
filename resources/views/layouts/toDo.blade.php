@foreach($toDos as $toDo)             
    <!-- INDIVIDUAL NOTIF -->
        <a href=""> <!-- LINK TO POST -->
            <input type="hidden" value="true" id="isRead">
            @if($toDo->viewed == 0) <!-- if user already viewed this notif-->
                <div class="notif viewed">
            @else
                <div class="notif unviewed">
            @endif
            
                <!-- IMAGE -->
                    @if($toDo->isDone == 0)
                        <i class="fa fa-check-circle fa-4x" aria-hidden="true" ></i>
                    @else
                        <i class="fa fa-check-circle fa-4x" aria-hidden="true" style="color: #33cccc"></i>
                    @endif
                <!-- DESCRIPTION -->
                    <div class="deadline">
                        @if($toDo->activityClass->deadline != null)
                            DUE {{ date_create($toDo->activityClass->deadline )->format('F d, Y')}}
                        @else
                            NO DUE DATE
                        @endif
                    </div>

                    <div class="title"> 
                        {{ $toDo->activityClass->name }}
                    </div>

                    <div class="subject">
                        {{ $toDo->activityClass->classModel->name }}
                    </div>

            </div>
        </a>
     <!-- /INDIVIDUAL NOTIF -->
@endforeach