<div class="col-lg-3">
    <aside class="sidebar static">
        <div class="widget">
            <h4 class="widget-title">Shortcuts</h4>      
            <ul class="naves">
                <li>
                    <i class="ti-clipboard"></i>
                    <a href="newsfeed.html" title>News feed</a>
                </li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>      
            </ul>
        </div>
    </aside>
</div>