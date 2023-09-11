<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{asset('adminassets/images/user.png')}}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::guard('admin')->user()->name }}</div>
                    <div class="email">{{ Auth::guard('admin')->user()->email }}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{url('admin/candidate')}}"><i class="material-icons">group</i>Candidate</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a class="dropdown-item" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="{{url('/admin/home')}}">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>                    
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">person</i>
                            <span>Candidate</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('admin/candidate')}}">Candidate List</a>
                            </li>
                            <li>
                                <a href="{{url('admin/addcandidate')}}">Add Candidate</a>
                            </li>
                        </ul>
                    </li>                 
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">monochrome_photos</i>
                            <span>Banner</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('admin/homebanner')}}">Home Banner</a>
                            </li>
                            <li>
                                <a href="{{url('admin/pagebanner')}}">Page Banner</a>
                            </li>
                        </ul>
                    </li>  
                    <li>
                        <a href="{{url('admin/aboutus')}}">
                            <i class="material-icons">text_fields</i>
                            <span>About Us</span>
                        </a>
                    </li>               
                    <li>
                        <a href="{{url('admin/team')}}" >
                            <i class="material-icons">group_add</i>
                            <span>Team</span>
                        </a>
                    </li>          
                    <li>
                        <a href="{{url('admin/service')}}">
                            <i class="material-icons">featured_video</i>
                            <span>Service</span>
                        </a>
                        
                    </li>             
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">perm_media</i>
                            <span>Gallery</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('admin/gallery')}}">Gallery List</a>
                            </li>
                            <li>
                                <a href="{{url('admin/gallerycategory')}}">Gallery Category</a>
                            </li>
                        </ul>
                    </li>            
                    <li>
                        <a href="{{url('admin/support')}}">
                            <i class="material-icons">assignment_ind</i>
                            <span>Pillars of Support</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('admin/notice')}}">
                            <i class="material-icons">layers</i>
                            <span>Notice</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('admin/stories')}}">
                            <i class="material-icons">import_contacts</i>
                            <span>Success Stories</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('admin/contact')}}">
                            <i class="material-icons">contact_phone</i>
                            <span>Contact</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('admin/contactlist')}}">
                            <i class="material-icons">assignment</i>
                            <span>Contact List</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('admin/sociallink')}}">
                            <i class="material-icons">link</i>
                            <span>Social Link</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2022 <a href="javascript:void(0);">Skylark</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>