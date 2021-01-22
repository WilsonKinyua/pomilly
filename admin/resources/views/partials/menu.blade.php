<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('company_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/mission-and-visions*") ? "c-show" : "" }} {{ request()->is("admin/core-values*") ? "c-show" : "" }} {{ request()->is("admin/mottoes*") ? "c-show" : "" }} {{ request()->is("admin/our-histories*") ? "c-show" : "" }} {{ request()->is("admin/what-is-food-recylings*") ? "c-show" : "" }} {{ request()->is("admin/what-we-dos*") ? "c-show" : "" }} {{ request()->is("admin/deposit-foods*") ? "c-show" : "" }} {{ request()->is("admin/volunteers*") ? "c-show" : "" }} {{ request()->is("admin/donates*") ? "c-show" : "" }} {{ request()->is("admin/whats-news*") ? "c-show" : "" }} {{ request()->is("admin/career-pages*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-building c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.company.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('mission_and_vision_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.mission-and-visions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/mission-and-visions") || request()->is("admin/mission-and-visions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-spa c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.missionAndVision.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('core_value_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.core-values.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/core-values") || request()->is("admin/core-values/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-check c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.coreValue.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('motto_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.mottoes.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/mottoes") || request()->is("admin/mottoes/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-pen-square c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.motto.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('our_history_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.our-histories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/our-histories") || request()->is("admin/our-histories/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-align-center c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.ourHistory.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('what_is_food_recyling_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.what-is-food-recylings.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/what-is-food-recylings") || request()->is("admin/what-is-food-recylings/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-utensils c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.whatIsFoodRecyling.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('what_we_do_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.what-we-dos.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/what-we-dos") || request()->is("admin/what-we-dos/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-double-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.whatWeDo.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('deposit_food_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.deposit-foods.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/deposit-foods") || request()->is("admin/deposit-foods/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-utensils c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.depositFood.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('volunteer_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.volunteers.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/volunteers") || request()->is("admin/volunteers/*") ? "c-active" : "" }}">
                                <i class="fa-fw fab fa-app-store c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.volunteer.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('donate_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.donates.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/donates") || request()->is("admin/donates/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-hand-holding-usd c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.donate.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('whats_new_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.whats-news.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/whats-news") || request()->is("admin/whats-news/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-plus c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.whatsNew.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('career_page_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.career-pages.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/career-pages") || request()->is("admin/career-pages/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-caret-square-down c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.careerPage.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('team_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.teams.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/teams") || request()->is("admin/teams/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-user-friends c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.team.title') }}
                </a>
            </li>
        @endcan
        @can('our_goal_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.our-goals.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/our-goals") || request()->is("admin/our-goals/*") ? "c-active" : "" }}">
                    <i class="fa-fw fab fa-google-wallet c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.ourGoal.title') }}
                </a>
            </li>
        @endcan
        @can('service_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.services.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/services") || request()->is("admin/services/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-list-alt c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.service.title') }}
                </a>
            </li>
        @endcan
        @can('blog_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.blogs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/blogs") || request()->is("admin/blogs/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-pen c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.blog.title') }}
                </a>
            </li>
        @endcan
        @can('contact_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.contacts.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/contacts") || request()->is("admin/contacts/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-phone c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.contact.title') }}
                </a>
            </li>
        @endcan
        @can('social_media_link_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.social-media-links.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/social-media-links") || request()->is("admin/social-media-links/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-share-square c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.socialMediaLink.title') }}
                </a>
            </li>
        @endcan
        @can('task_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/task-statuses*") ? "c-show" : "" }} {{ request()->is("admin/task-tags*") ? "c-show" : "" }} {{ request()->is("admin/tasks*") ? "c-show" : "" }} {{ request()->is("admin/tasks-calendars*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-list c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.taskManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('task_status_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.task-statuses.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/task-statuses") || request()->is("admin/task-statuses/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-server c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.taskStatus.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('task_tag_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.task-tags.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/task-tags") || request()->is("admin/task-tags/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-server c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.taskTag.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('task_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.tasks.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/tasks") || request()->is("admin/tasks/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.task.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('tasks_calendar_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.tasks-calendars.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/tasks-calendars") || request()->is("admin/tasks-calendars/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-calendar c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.tasksCalendar.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @php($unread = \App\QaTopic::unreadCount())
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.messenger.index") }}" class="{{ request()->is("admin/messenger") || request()->is("admin/messenger/*") ? "c-active" : "" }} c-sidebar-nav-link">
                    <i class="c-sidebar-nav-icon fa-fw fa fa-envelope">

                    </i>
                    <span>{{ trans('global.messages') }}</span>
                    @if($unread > 0)
                        <strong>( {{ $unread }} )</strong>
                    @endif

                </a>
            </li>
            @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                @can('profile_password_edit')
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                            <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                            </i>
                            {{ trans('global.change_password') }}
                        </a>
                    </li>
                @endcan
            @endif
            <li class="c-sidebar-nav-item">
                <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
    </ul>

</div>