<div id="sidebar">
    <!-- Search Box -->
    <section id="blog-main-search">
        <form method="GET" action="#">
            <input type="text" name="search" id="main-search" placeholder="Поиск..." />
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>
    </section>

    <!-- Menu -->
    <nav>
        <ul>
            <li><a href="/">Главная</a></li>
            <li>
                <h6 class="dropdown">Выпадающий список&nbsp;&nbsp;<i class="fas fa-angle-down"></i>
                </h6>
                <div class="hidden">
                    <ul>
                        <li><a href="#">Вложенное меню</a></li>
                        <li><a href="#">Вложенное меню</a></li>
                        <li><a href="#">Вложенное меню</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Не главная</a></li>
            @foreach($categories as $category)
                <li><a href="#">{{ $category->title }}</a></li>
            @endforeach
        </ul>
    </nav>

    <footer id="footer">
        <a href="mailto:smalvad@yandex.ru"><i class="fas fa-envelope"></i></a>
    </footer>

</div>
