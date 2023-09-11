<div class="nk-sidebar">           
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Posts</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('posts.create')}}">Add new post</a></li>
                    <li><a href="{{route('posts.index')}}">All posts</a></li>
                    <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                </ul>
            </li>
            {{-- <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Categories</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('categories.create')}}">Add new Category</a></li>
                    <li><a href="{{route('categories.index')}}">All categories</a></li>
                </ul>
            </li> --}}
        </ul>
    </div>
</div>