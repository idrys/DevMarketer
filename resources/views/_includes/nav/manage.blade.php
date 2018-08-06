<div class="side-menu  m-t-5">
    <aside class="menu m-t-20 m-l-20">
        <p class="menu-label">
            General
        </p>
        <ul class="menu-list">
        <li>
            <a href="{{route('manage.dashboard')}}" class="{{ Nav::isRoute('manage.dashboard') }}">Dashboard</a>
        </li>
        </ul>
        <p class="menu-label">
            Administrator
        </p>
        <ul class="menu-list">
        <li><a href="{{route('users.index')}}" class="{{ Nav::isResource('users')}}">Manage User</a></li>
        <li><a class="has-submenu {{Nav::hasSegment(['roles', 'permissions'], 2)}}">Roles &amp; Permissions</a>
            <ul class="submenu">
                <li><a href="{{route('roles.index')}}" class="{{ Nav::isResource('roles')}}">Roles</a></li>
                <li><a href="{{route('permissions.index')}}" class="{{ Nav::isResource('permissions')}}">Permissions</a></li>
            </ul>
            </li>
            <li><a class="has-submenu">Example 1</a>
                <ul class="submenu">
                    <li><a href="{{route('roles.index')}}">Roles</a></li>
                    <li><a href="{{route('permissions.index')}}">Permissions</a></li>
                </ul>
            </li>
            <li><a class="has-submenu">Example 2</a>
                <ul class="submenu">
                    <li><a href="{{route('roles.index')}}">Roles</a></li>
                    <li><a href="{{route('permissions.index')}}">Permissions</a></li>
                </ul>
            </li>
        </ul>
        
    </aside>
</div>