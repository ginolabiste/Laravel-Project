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
            <!--li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#laravelExamples" @if($activeButton =='laravel') aria-expanded="true" @endif>
                    <i>
                        <img src="{{ asset('light-bootstrap/img/laravel.svg') }}" style="width:25px">
                    </i>
                    <p>
                        {{ __('Laravel example') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse @if($activeButton =='laravel') show @endif" id="laravelExamples">
                    <ul class="nav">
                        <li class="nav-item @if($activePage == 'user') active @endif">
                            <a class="nav-link" href="{{route('profile.edit')}}">
                                <i class="nc-icon nc-single-02"></i>
                                <p>{{ __("User Profile") }}</p>
                            </a>
                        </li>
                        <li class="nav-item @if($activePage == 'user-management') active @endif">
                            <a class="nav-link" href="{{route('user.index')}}">
                                <i class="nc-icon nc-circle-09"></i>
                                <p>{{ __("User Management") }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li-->
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
