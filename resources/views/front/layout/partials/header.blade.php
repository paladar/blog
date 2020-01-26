<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('home')}}">{{__('app.front.title')}}</a>
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            {!! linkTag(route('home'),__('app.front.pages.home'),'nav-link') !!}
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            {!! linkTag(route('loginShow'),__('app.front.pages.login'),'nav-link') !!}
        </li>
        <li class="nav-item">
            {!! linkTag(route('registerShow'),__('app.front.pages.register'),'nav-link') !!}
        </li>
    </ul>
</nav>