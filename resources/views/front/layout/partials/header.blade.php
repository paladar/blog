<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">{{__('app.front.title')}}</a>
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            {!! linkTag(route('home'),__('app.front.home'),'nav-link') !!}
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            {!! linkTag('/',__('app.front.login'),'nav-link') !!}
        </li>
        <li class="nav-item">
            {!! linkTag('/',__('app.front.register'),'nav-link') !!}
        </li>
    </ul>
</nav>