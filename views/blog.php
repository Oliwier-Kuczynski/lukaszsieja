<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require_once("assets/head.php");
    ?>
</head>
<body class="blog">
    <?php
    require_once("assets/nav.php");
    ?>
    <main class="section-mt container grid gap-xxl">
        <div class="flex wrap gap-lg jc-sb">
            <div class="flex ai-c gap-md">
                <button class="slide-btn grid pc-c" data-slider-btn="left">
                    <img src="../img/left-arrow.svg" alt="strzałka w lewo">
                </button>

                <div class="slider" data-slider="">
                    <div class="slider__content flex gap-md" data-slider-content="">
                        <button class="category-btn">Prawo Karne</button>
                        <button class="category-btn">Prawo Cywilne</button>
                        <button class="category-btn">Prawo Gospodarcze</button>
                        <button class="category-btn">Prawo Rodzinne</button>
                    </div>
                </div>
            
                <button class="slide-btn grid pc-c" data-slider-btn="rigth">
                    <img src="../img/rigth-arrow.svg" alt="strzałka w lewo">
                </button>
            </div>
            <div class="search flex gap-md">
                <button class="filter-btn">
                    <img src="../img/filter.svg" alt="filter">
                </button>
                <div class="search-input flex gap-sm">
                    <input type="text">
                    <button>
                        <img src="../img/search.svg" alt="szukaj">
                    </button>
                </div>
            </div>
        </div>

        <div class="cards grid gap-xl">
            <?php
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, "http://localhost:2000/api/blog-posts?populate=*");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json'
            ]);

            $res = curl_exec($curl);

            $blog_posts = json_decode($res, true);

            foreach ($blog_posts['data'] as $blog_post) {
                $title = $blog_post['attributes']['Title'];
                $description = $blog_post['attributes']['Description'];
                $thumbnail = $blog_post['attributes']['Thumbnail']['data']['attributes']['formats']['thumbnail']['url'];
                $date = new DateTime($blog_post['attributes']['publishedAt']);
                $date = $date->format('H:i d/m/y');

                echo <<<END
                <article class="blog__card grid gap-xl">
                    <h3 class="blog__card__title">{$title}</h3>
                    <div class="grid gap-md blog__card__content">
                        <img src="../dashboard/public{$thumbnail}" alt="zdjęcie z bloga" class="blog__card__img">
                        <p>{$description}</p>
                    </div>
                    <div class="flex jc-sb ai-c">
                        <button class="btn blog__card__btn">Czytaj więcej</button>
                        <time datetime="{$date}" class="bold">{$date}</time>
                    </div>
                </article>
                END;
            }

            curl_close($curl);
            ?>     
        </div>
    </main>
</body>
</html>