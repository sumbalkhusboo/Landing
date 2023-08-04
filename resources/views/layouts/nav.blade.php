<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <center>
    <div class="sidebar-header">
        <div>
            <img src="assets/images/logo-icon1.png" class="logo-icon" alt="logo icon" style="
    margin-left: 4rem;
    width: 90px;
">
        </div>

        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    </center>
    <!--navigation-->
    <ul class="metismenu" id="menu">

     
        @if (Session::get('role_id') == 1)
        <li>
            <a href="{{ url('dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
       
        
        
<li>
    <a class="has-arrow" href="javascript:;">
        <div class="parent-icon"><i class="bx bx-money"></i>
        </div>
        <div class="menu-title">Projects</div>
    </a>
    <ul>
        <li> <a href="{{url('create-project-form')}}"><i class="bx bx-right-arrow-alt"></i> Add project</a>
        </li>
            <li> <a href="{{url('list-project')}}" ><i class="bx bx-right-arrow-alt"></i>View projects</a>
      

        </li>
    </ul>
</li>









       
<li>
    <a class="has-arrow" href="javascript:;">
        <div class="parent-icon"><i class="lni lni-network"></i>
        </div>
        <div class="menu-title">Team</div>
    </a>
    <ul>
        <li> <a href="{{ url('create-employee-form') }}" ><i class="bx bx-right-arrow-alt"></i>Add Employees</a>
        </li>
            <li> <a href="{{ url('list-employee') }}" ><i class="bx bx-right-arrow-alt"></i>View Team</a>
      

        </li>
    </ul>
</li>
       
<li>
    <a class="has-arrow" href="javascript:;">
        <div class="parent-icon"><i class="lni lni-network"></i>
        </div>
        <div class="menu-title">FAQ</div>
    </a>
    <ul>
        <li> <a href="{{ url('create-faq-form') }}" ><i class="bx bx-right-arrow-alt"></i>Add FAQ</a>
        </li>
            <li> <a href="{{ url('list-faq') }}" ><i class="bx bx-right-arrow-alt"></i>View QUESTION</a>
      

        </li>
    </ul>
</li>




<li>
    <a class="has-arrow" href="javascript:;">
        <div class="parent-icon"><i class="lni lni-network"></i>
        </div>
        <div class="menu-title">JOBS</div>
    </a>
    <ul>
        <li> <a href="{{ url('create-job-form') }}" ><i class="bx bx-right-arrow-alt"></i>Add Jobs</a>
        </li>
            <li> <a href="{{ url('list-job') }}" ><i class="bx bx-right-arrow-alt"></i>View JOBS</a>
      

        </li>
    </ul>
</li>


<li>
    <a class="has-arrow" href="javascript:;">
        <div class="parent-icon"><i class="lni lni-network"></i>
        </div>
        <div class="menu-title">folder</div>
    </a>
    <ul>
        <li> <a href="{{ url('add_folder') }}" ><i class="bx bx-right-arrow-alt"></i>Add Folder</a>
        </li>
            <li> <a href="{{ url('list_folder') }}" ><i class="bx bx-right-arrow-alt"></i>View folder</a>
      

        </li>
    </ul>
</li>





<li>
    <a class="has-arrow" href="javascript:;">
        <div class="parent-icon"><i class="lni lni-network"></i>
        </div>
        <div class="menu-title">Gallery</div>
    </a>
    <ul>
        <li> <a href="{{ url('create-gallery') }}" ><i class="bx bx-right-arrow-alt"></i>Add images</a>
        </li>
            <li> <a href="{{ url('list-gallery') }}" ><i class="bx bx-right-arrow-alt"></i>View images</a>
      

        </li>
    </ul>
</li>

       
        {{-- <li class="menu-label"></li> --}}

        {{-- -------------------------------------------Admin Routes----------------------------------------------------- --}}
     
        <li>
            <a href="{{ url('create-history-form') }}">
                <div class="parent-icon"><i class='bx bx-group'></i>
                </div>
                <div class="menu-title">Clients history</div>
            </a>
        </li>


             <li>
                <a href="{{route('list-contact')}}">
                <div class="parent-icon"><i class='bx bx-group'></i>
                </div>
                <div class="menu-title">Support Tickets</div>
            </a>
        </li>

          
            <br>
            <br>
            <br>
            <br>


            <li>
                <a  href="logout">
                    <div class="parent-icon"><i class="bx bx-money"></i>
                    </div>
                    <div class="menu-title" id="dis_comission" style="color: red;">LOG OUT</div>
                </a>
            </li>
        

            @endif
        
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->
