<header class="header">
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#73AE98">
    <div class="container ">
        <a class="navbar-brand text-black-50 text-uppercase" href="/">Do Logosy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  flex-row-reverse" id="navbarNav">
            <ul class="navbar-nav ">
                <li id="navMain" class="nav-item">
                    <a  class="nav-link text-dark" href="/">Головна</a>
                </li>
                <li id="navPosts" class="nav-item">
                    <a  class="nav-link text-dark" href="/posts">Новини</a>
                </li>
                <li id="navQuestions" class="nav-item">
                    <a  class="nav-link text-dark" href="/questions">Запитання</a>
                </li>
                @if(auth()->check())
                <li id="navUser" class="nav-item">
                    <a class="nav-link text-dark" href="/cabinet">{{auth()->user()->name}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/logout">Вихід</a>
                </li>
                @else
                <li id="navLogin" class="nav-item">
                    <a class="nav-link text-dark" href="/login">Авторизація</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
</header>
