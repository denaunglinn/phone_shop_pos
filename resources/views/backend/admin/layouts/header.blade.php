<style>
.modal-content {
    margin-top:30px !important;
    position: relative !important;
}
.modal{
    margin-top: 30px;  
}
.modal-backdrop{
    position: relative !important;

}
    
</style>
<div class="app-header header-shadow bg-grow-early header-text-light">
    <div class="app-header__logo">
        <div class="text-white"><h4>Shop Panel</h4></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="app-header__menu">
        @include('menu_search.menu_search_button')
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="app-header-left">
        <ul class="header-megamenu nav">
            <li class="btn-group nav-item">
                @include('menu_search.menu_search_button')
            </li>
        </ul>
    </div>

@include('menu_search.menu_search_modal')
    <div class="app-header__content">
        <a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        @if(App()->isLocale('en'))
        <img src="{{asset('images/en.png')}}" width="10%"> English
        @elseif(App()->isLocale('mm_uni'))
        <img src="{{asset('images/mm.png')}}"  width="10%"> မြန်မာ (Unicode)
        @else
        <img src="{{asset('images/en.png')}}"  width="10%"> English
        @endif
    </a>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a href="{{url('locale/en')}}" id="en"
            class="dropdown-item locale en @if(App()->isLocale('en')) active @endif" data-lang="en"><img
                src="{{asset('images/en.png')}}"  width="5%"> English</a>
        <a href="{{url('locale/mm_uni')}}" id="mm_uni"
            class="dropdown-item locale mm_uni @if(App()->isLocale('mm_uni')) active @endif"
            data-lang="mm_uni"><img src="{{asset('images/mm.png')}}"  width="5%"> မြန်မာ (Unicode)</a>
    </div>
                              
        <div class="app-header-left">

        </div>
        <div class="app-header-right">
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                      
                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                    <img width="42" class="rounded-circle"
                                        src="{{ asset('images/avatars/avatar.png') }}" alt="">
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true"
                                    class="dropdown-menu dropdown-menu-right">
                                    <h6 tabindex="-1" class="dropdown-header">Account Settings</h6>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Log Out</button>

                                    {{-- Log Out Form --}}
                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>                                
                            </div>
                        </div>
                        <div class="widget-content-left  ml-3 header-user-info">
                         
                            <div class="widget-heading">
                                @auth
                                {{ auth()->guard('admin')->user()->name }}
                                @endauth
                            </div>
                            <div class="widget-subheading">
                                @auth
                                {{ join(', ', auth()->guard('admin')->user()->getRoleNames()->toArray()) }}
                                @endauth
                            </div>

                            
                        </div>
                        <div class="widget-content-right header-user-info ml-3">
                            <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
