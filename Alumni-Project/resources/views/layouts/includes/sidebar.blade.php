<div class="col-lg-3">
    <aside class="sidebar static">
        <div class="widget">
            <h4 class="widget-title">Shortcuts</h4>      
            <ul class="naves">
                {{-- Check if the user is a student --}}
                @if(Auth::guard('student')->check())
                    <li><a href="{{ url('student/') }}" title>News Feed</a></li>
                    <li><a href="{{ url('student/myprofile') }}" title>View Profile</a></li>
                    <li><a href="{{ url('/student/settings') }}" title>Settings</a></li>
                    <li><a href="{{ url('student/alumni') }}" title>Alumni List</a></li>
                    <li><a href="{{ url('student/availablementors') }}" title>Mentor Available</a></li>
                    <li><a href="{{ url('student/jobs') }}" title>Jobs List</a></li>
                    <li><a href="{{ url('student/events') }}" title>Events List</a></li>
                    <li><a href="{{ url('student/student-tasks') }}" title>Tasks List</a></li>
                {{-- Check if the user is an alumni --}}
                @elseif(Auth::guard('alumni')->check())
                    <li><a href="{{ url('alumni/') }}" title>News Feed</a></li>
                    <li><a href="{{ url('alumni/myprofile') }}" title>View Profile</a></li>
                    <li><a href="{{ url('alumni/settings') }}" title>Settings</a></li>
                    <li><a href="{{ url('alumni/change-password') }}" title>Change Password</a></li>
                    <li><a href="{{ url('alumni/alumni') }}" title>Alumni List</a></li>
                    <li><a href="{{ url('alumni/students') }}" title>Student List</a></li>
                    <li><a href="{{ url('alumni/jobs') }}" title>Job List</a></li>
                    <li><a href="{{ url('alumni/jobs/form') }}" title>Create Job</a></li>
                    <li><a href="{{ url('alumni/events') }}" title>Event List</a></li>
                    <li><a href="{{ url('alumni/tasks') }}" title>Tasks List</a></li>
                    <li><a href="{{ url('alumni/tasks/create') }}" title>Create Tasks</a></li>
                
                {{-- Check if the user is an admin --}}
                @elseif(Auth::guard('admin')->check())
                    <li><a href="{{ url('admin/') }}" title>NewsFeed</a></li>
                    
                    <li><a href="{{ url('admin/alumni') }}" title>Alumni List</a></li>
                    <li><a href="{{ url('/admin/alumni/create') }}" title>Create Alumni</a></li>
                    <li><a href="{{ url('/admin/students') }}" title>Student List</a></li>
                    <li><a href="{{ url('admin/events') }}" title>Event List</a></li>
                    <li><a href="{{ url('admin/events/create') }}" title>Create Event</a></li>
                    <li><a href="{{ url('/admin/students') }}" title>Job List</a></li>
                    <li><a href="{{ url('admin/Reports/Post') }}" title>Post Reports</a></li>
                    <li><a href="{{ url('/admin/forgot-password-request') }}" title>Reset Password List</a></li>
                    
                @endif

                {{-- Logout Button --}}
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>      
            </ul>
        </div>
    </aside>
</div>