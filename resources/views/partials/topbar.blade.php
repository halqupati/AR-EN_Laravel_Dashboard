<header class="main-header">
    <!-- Logo -->
    <a href="{{ url('/admin/home') }}" class="logo"
       style="font-size: 16px;">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
           @lang('quickadmin.quickadmin_title')</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
           @lang('quickadmin.quickadmin_title')</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode=> $properties)
                    
                    @if (App::isLocale('ar'))
                    @if($localeCode='en')


    <a  class="logo"  rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" style="color:white;z-index:9999">
                        <span> English </span>
                    </a>
                    @break
                    @endif
                    @else
                    @if($localeCode='ar')
                    <a class="logo"  rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" style="color:white;z-index:0">
                    <span> عربي </span> </a>
                    @break
                    @endif
                    @endif
                    @endforeach

         

        

        

    </nav>
</header>



