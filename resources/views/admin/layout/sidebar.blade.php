<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title" key="t-menu">Menu</li>

        <li>
            <a href="{{route('home')}}" class="has-arrow waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-dashboards">Dashboards</span>
            </a>

        </li>

        <li>
            <a href="{{route('dashboard.contact.index')}}" class="has-arrow waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-dashboards">contact</span>
            </a>

        </li>



        {{-- <li>
            <a href="chat.html" class="waves-effect">
                <i class="bx bx-chat"></i>
                <span key="t-chat">Chat</span>
            </a>
        </li> --}}

        <li>
            <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2"><i class="bx bx-user-voice"></i>user pages</a>

            <ul class="sub-menu" aria-expanded="true">
                <li><a href="/user/index" key="t-level-2-1">index</a></li>
                <li><a href="{{route('dashboard.user.create')}}" key="t-level-2-1">create</a></li>
                {{-- <li><a href="{{route('dashboard.user.view',$id)}}" key="t-level-2-1">view</a></li> --}}
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2"><i class="bx bx-comment-dots"></i>User_Role pages</a>

            <ul class="sub-menu" aria-expanded="true">
                <li><a href="/user_role/index" key="t-level-2-1">index</a></li>
                <li><a href="{{route('dashboard.user_role.create')}}" key="t-level-2-1">create</a></li>
                {{-- <li><a href="{{route('dashboard.user_role.view')}}" key="t-level-2-1">view</a></li> --}}
            </ul>
        </li>

        {{-- <li>
            <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2"><i class="bx bx-comment-dots"></i>User permission</a>

            <ul class="sub-menu" aria-expanded="true">
                <li><a href="{{route('dashboard.user_permission.user_id')}}" key="t-level-2-1">index</a></li>
                <li><a href="{{route('dashboard.user_role.create')}}" key="t-level-2-1">create</a></li>
                {{-- <li><a href="{{route('dashboard.user_role.view')}}" key="t-level-2-1">view</a></li> --}}
            {{-- </ul>
        </li> --}}


                <li>
                    <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2"><i class="bx bx-comment-dots"></i> common pages</a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{route('dashboard.common.index')}}" key="t-level-2-1">index</a></li>
                        <li><a href="{{route('dashboard.common.create')}}" key="t-level-2-1">create</a></li>
                        <li><a href="{{route('dashboard.common.view')}}" key="t-level-2-1">view</a></li>
                    </ul>
                </li>



                <li>
                    <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2"><i class="bx bx-comment-dots"></i> Students</a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{route('dashboard.students.index')}}" key="t-level-2-1">index</a></li>
                        <li><a href="{{route('dashboard.students.create')}}" key="t-level-2-1">create</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2"><i class="bx bx-comment-dots"></i> Department</a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{route('dashboard.department.index')}}" key="t-level-2-1">index</a></li>
                        <li><a href="{{route('dashboard.department.create')}}" key="t-level-2-1">create</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2"><i class="bx bx-comment-dots"></i> Crud</a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{route('dashboard.crud.index')}}" key="t-level-2-1">index</a></li>
                        <li><a href="{{route('dashboard.department.create')}}" key="t-level-2-1">create</a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2"><i class="bx bx-comment-dots"></i> CrudBook</a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{route('dashboard.crudbook.index')}}" key="t-level-2-1">index</a></li>
                        <li><a href="{{route('dashboard.crudbook.create')}}" key="t-level-2-1">create</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2"><i class="bx bx-comment-dots"></i> Fruites crud</a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{route('dashboard.fruite.create')}}" key="t-level-2-1">create</a></li>
                        <li><a href="{{route('dashboard.fruite.index')}}" key="t-level-2-1">index</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2"><i class="bx bx-comment-dots"></i> Shop crud</a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{route('dashboard.shop.create')}}" key="t-level-2-1">create</a></li>
                        <li><a href="{{route('dashboard.shop.index')}}" key="t-level-2-1">index</a></li>
                    </ul>
                </li>
                
            </ul>
        </li>
    </ul>
</div>
