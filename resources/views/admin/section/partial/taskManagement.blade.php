@can('view_task_list')
    <li class="nav-item {{ request()->routeIs('admin.tasks.*')  ? 'active' : '' }}">
        <a
            href="{{ route('admin.tasks.index') }}"
            data-href="{{ route('admin.tasks.index') }}"
            class="nav-link">
            <i class="link-icon" data-feather="table"></i>
            <span class="link-title">Manajemen Tugas</span>
        </a>
    </li>
@endcan

