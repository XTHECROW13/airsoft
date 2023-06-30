<header class="bg-dark text-white py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="mb-0">Страйкбольний клуб</h1>
            </div>
            <nav class="col-auto">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Головна</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="themesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Тематики
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="themesDropdown">
                            <?php
                            $categories = get_categories();
                            foreach ($categories as $category) {
                                echo '<li><a class="dropdown-item" href="' . esc_url(get_category_link($category->term_id)) . '">' . $category->name . '</a></li>';
                            }
                            ?>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>