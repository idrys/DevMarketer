<div class="side-menu  m-t-5">
    <aside class="menu m-t-20 m-l-20">
        <p class="menu-label">
            General
        </p>
        <ul class="menu-list">
            <li><a href="{{route('manage.dashboard')}}">Dashboard</a></li>
        </ul>
        <p class="menu-label">
            Administrator
        </p>
        <ul class="menu-list">
            <li><a href="{{route('users.index')}}">Manage User</a></li>
            <li><a href="{{route('permissions.index')}}">Roles &amp; Permissions</a>
            <ul>
                <li><a href="{{route('roles.index')}}">Roles</a></li>
                <li><a href="{{route('permissions.index')}}">Permissions</a></li>
            </ul>
            </li>

        </ul>
    </aside>
</div>