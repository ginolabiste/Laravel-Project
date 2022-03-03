<div class="sidebar" data-image="{{ asset('light-bootstrap/img/sidebar-5.jpg') }}">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="https://www.dorsu.edu.ph" class="simple-text" target="_blank">
                {{ __("DOrSU") }}
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item @if($activePage == 'dashboard') active @endif">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>{{ __("Dashboard") }}</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#semesters" @if($activeButton =='semesters') aria-expanded="true" @endif>
                    <i class="nc-icon nc-attach-87"></i>
                    <p>
                        {{ __('Semesters') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse @if($activeButton =='semesters') show @endif" id="semesters">
                    <hr>
                    <ul class="nav">
                        <li class="nav-item @if($activePage == 'manage-semester') active @endif">
                            <a class="nav-link" href="{{route('semesters.index')}}">
                                <i class="nc-icon nc-circle-09"></i>
                                <p>{{ __("Management") }}</p>
                            </a>
                        </li>
                        <li class="nav-item @if($activePage == 'add-semester') active @endif">
                            <a class="nav-link" href="{{route('semesters.create')}}">
                                <i class="nc-icon nc-single-02"></i>
                                <p>{{ __("Open Semester") }}</p>
                            </a>
                        </li>
                    </ul>
                    <hr>
                </div>
            </li>
            <li class="nav-item @if($activePage == 'students-list') active @endif">
                <a class="nav-link" href="{{route('page.index', 'students-list')}}">
                    <i class="nc-icon nc-notes"></i>
                    <p>{{ __("Students List") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'school-id') active @endif">
                <a class="nav-link" href="{{route('page.index', 'school-id')}}">
                    <i class="nc-icon nc-badge"></i>
                    <p>{{ __("Assign School ID") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'sync') active @endif">
                <a class="nav-link" href="{{route('page.index', 'sync')}}">
                    <i class="nc-icon nc-layers-3"></i>
                    <p>{{ __("Sync") }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
