<div class="topbar stick">
  <div class="logo">
  </div>
  <div class="top-area">
      <ul class="main-menu">

          {{-- Section for Student --}}
          @if(Auth::guard('student')->check())
              <li>
                <a href="{{ url('student/') }}" title>News Feed</a>
              </li>
              <li>
                <a href="#" title>Profile</a>
                <ul>
                    <li><a href="{{ url('student/myprofile') }}" title>View Profile</a></li>
                    <li><a href="{{ url('/student/settings') }}" title>Settings</a></li>
                </ul>
            </li>
            <li>
                <a href="#" title>Alumni</a>
                <ul>
                    <li><a href="{{ url('student/alumni') }}" title>List</a></li>
                    <li><a href="{{ url('student/availablementors') }}" title>Mentor Available</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ url('student/jobs') }}" title>Jobs</a>
            </li>
            <li>
                <a href="{{ url('student/events') }}" title>Events</a>
            </li>
            <li>
                <a href="{{ url('student/student-tasks') }}" title>Tasks</a>

            </li>
          {{-- Section for Alumni --}}
          @elseif(Auth::guard('alumni')->check())
              <li>
                <a href="{{ url('alumni/') }}" title>News Feed</a>
              </li>
              <li>
                <a href="#" title>Profile</a>
                <ul>
                    <li><a href="{{ url('alumni/myprofile') }}" title>View Profile</a></li>
                    <li><a href="{{ url('alumni/settings') }}" title>Settings</a></li>
                    <li><a href="{{ url('alumni/change-password') }}" title>Change Password</a></li>
                </ul>
              </li>
              <li>
                <a href="#" title>Alumni</a>
                <ul>
                    <li><a href="{{ url('alumni/alumni') }}" title>List</a></li>
                </ul>
              </li>
              <li>
                <a href="#" title>Students</a>
                <ul>
                    <li><a href="{{ url('alumni/students') }}" title>List</a></li>
                </ul>
              </li>
              <li>
                <a href="#" title>Jobs</a>
                <ul>
                    <li><a href="{{ url('alumni/jobs') }}" title>List</a></li>
                    <li><a href="{{ url('alumni/jobs/form') }}" title>Create</a></li>
                </ul>
              </li>
              <li>
                <a href="#" title>Events</a>
                <ul>
                    <li><a href="{{ url('alumni/events') }}" title>List</a></li>
                </ul>
              </li>
              <li>
                <a href="#" title>Tasks</a>
                <ul>
                    <li><a href="{{ url('alumni/tasks') }}" title>List</a></li>
                    <li><a href="{{ url('alumni/tasks/create') }}" title>Create</a></li>
                </ul>
              </li>
          {{-- Section for Admin --}}
          @elseif(Auth::guard('admin')->check())
                <li>
                    <a href="{{ url('admin/') }}" title>NewsFeed</a>
                </li>
                <li>
                  <a href="#" title>Alumni</a>
                  <ul>
                      <li><a href="{{ url('admin/alumni') }}" title>List</a></li>
                      <li><a href="{{ url('/admin/alumni/create') }}" title>Create</a></li>
                  </ul>
                </li>
                <li>
                    <a href="#" title>Students</a>
                    <ul>
                        <li><a href="{{ url('/admin/students') }}" title>List</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" title>Events</a>
                    <ul>
                        <li><a href="{{ url('admin/events') }}" title>List</a></li>
                        <li><a href="{{ url('admin/events/create') }}" title>Create</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" title>Jobs</a>
                    <ul>
                        <li><a href="{{ url('/admin/students') }}" title>List</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('admin/Reports/Post') }}" title>Reports</a>
                </li>
                <li>
                    <a href="{{ url('/admin/tasks') }}" title>All tasks</a>
                </li>
                <li>
                    <a href="{{ url('/admin/forgot-password-request') }}" title>Reset Password List</a>
                </li>
          @endif

      </ul>
      <ul class="setting-area"> 
          @if(Auth::guard('student')->check() || Auth::guard('alumni')->check() || Auth::guard('admin')->check())
              <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form> 
              </li>
          @endif
      </ul>
  </div>
</div>
