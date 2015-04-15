<?php
/* @var $this yii\web\View */
$this->title = 'UA каталог';
?>
<div class="container-main">
    <div class="slider" id="slider-image">
        <div class="slider-content">
            <div class="slider-content-item">
                <img src="img/slider.jpg" alt="slide-first">
            </div>
        </div>
        <div class="slider-nav">
            <ul class="switchers">
                <li><a href="#" title="slide-nav" class="active"> </a></li><!--
    			--><li><a href="#" title="slide-nav"> </a></li><!--
    			--><li><a href="#" title="slide-nav"> </a></li>
            </ul>
        </div>
    </div>
    <div class="search-block">
        <div class="search-block-container">
            <div class="search-head">
                Повний каталог українських виробників
            </div>
            <form action="index.php" method="post">
                <input type="text" name="search" placeholder="Назва товару"><!--
    			--><input type="submit" name="search-buton" value=" ">
            </form>
        </div>
    </div>
</div>
<div class="wrapper info">
    <p>Наразі купувати українські продукти та речі не тільки вигідно, а є вже правилом гарного тону.
        Українські виробники виробляють майже все: від колготок до танків, від іграшок до спортивного інвентарю.
    </p>
    <p>На сайті зібрано повний каталог українських виробників.
    </p>
</div>

<div class="categories-container">
<div class="wrapper">
<div class="categories">
    <div class="categories-item">
        <a href="#" title="Засоби гігієни" class="hygiene">Засоби гігієни</a>

    </div><!--
    			--><div class="categories-item active">
        <a href="#" title="Одяг" class="clothes">Одяг</a>
    </div><!--
    			--><div class="categories-item">
        <a href="#" title="Взуття" class="shoes">Взуття</a>
    </div><!--
    			--><div class="categories-item">
        <a href="#" title="Валізи та сумки" class="bags">Валізи та сумки</a>
    </div>
</div>
<div class="sub-categories" id="hygiene">
    <div class="sub-categories-item"><span>Для жінок#2</span>
        <ul class="sub-categories-lv1">
            <li><a href="#" title="Костюми">Костюми</a>
                <ul class="sub-categories-lv2">
                    <li><a href="#" title="Калина">Калина</a></li>
                    <li><a href="#" title="Alve">Alve</a></li>
                    <li><a href="#" title="BGL">BGL</a></li>
                    <li><a href="#" title="Cat Orange">Cat Orange</a></li>
                    <li><a href="#" title="Frizman">Frizman</a></li>
                </ul>
            </li>
            <li><a href="#" title="Піджаки">Піджаки</a></li>
            <li><a href="#" title="Светри і гольфи">Светри і гольфи</a></li>
            <li><a href="#" title="Плаття">Плаття</a></li>
            <li><a href="#" title="Спідниці">Спідниці</a></li>
        </ul>
    </div><!--
    			--><div class="sub-categories-item">
        <ul class="sub-categories-lv1">
            <li><a href="#" title="Брюки">Брюки</a>
                <ul class="sub-categories-lv2">
                    <li><a href="#" title="Калина">Калина</a></li>
                    <li><a href="#" title="Alve">Alve</a></li>
                    <li><a href="#" title="BGL">BGL</a></li>
                    <li><a href="#" title="Cat Orange">Cat Orange</a></li>
                    <li><a href="#" title="Frizman">Frizman</a></li>
                </ul>
            </li>
            <li><a href="#" title="Блузи">Блузи</a></li>
            <li><a href="#" title="Білиза">Білиза</a></li>
            <li><a href="#" title="Спортивний одяг">Спортивний одяг</a></li>
        </ul>
    </div><!--
    			--><div class="sub-categories-item"><span>Для чоловіків</span>
        <ul class="sub-categories-lv1">
            <li><a href="#" title="Костюми">Костюми</a>
                <ul class="sub-categories-lv2">
                    <li><a href="#" title="Калина">Калина</a></li>
                    <li><a href="#" title="Alve">Alve</a></li>
                    <li><a href="#" title="BGL">BGL</a></li>
                    <li><a href="#" title="Cat Orange">Cat Orange</a></li>
                    <li><a href="#" title="Frizman">Frizman</a></li>
                </ul>
            </li>
            <li><a href="#" title="Брюки">Брюки</a></li>
            <li><a href="#" title="Сорочки">Сорочки</a></li>
            <li><a href="#" title="Краватки">Краватки</a></li>
            <li><a href="#" title="Светри">Светри</a></li>
            <li><a href="#" title="Футболки">Футболки</a></li>
            <li><a href="#" title="Білизна">Білизна</a></li>
            <li><a href="#" title="Спортивний одяг">Спортивний одяг</a></li>
        </ul>

    </div><!--
    			--><div class="sub-categories-item"><span>Для Дітей</span>
        <ul class="sub-categories-lv1">
            <li><a href="#" title="Шкільна форма">Шкільна форма</a>
                <ul class="sub-categories-lv2">
                    <li><a href="#" title="Калина">Калина</a></li>
                    <li><a href="#" title="Alve">Alve</a></li>
                    <li><a href="#" title="BGL">BGL</a></li>
                    <li><a href="#" title="Cat Orange">Cat Orange</a></li>
                    <li><a href="#" title="Frizman">Frizman</a></li>
                </ul>
            </li>
            <li><a href="#" title="Брюки">Брюки</a></li>
            <li><a href="#" title="Блузи/Сорочки">Блузи/Сорочки</a></li>
            <li><a href="#" title="Светри і гольфи">Светри і гольфи</a></li>
            <li><a href="#" title="Футболки">Футболки</a></li>
            <li><a href="#" title="Білизна">Білизна</a></li>
            <li><a href="#" title="Спортивний одяг">Спортивний одяг</a></li>
            <li><a href="#" title="Для немовлят">Для немовлят</a></li>
        </ul>
    </div>
</div>
<div class="sub-categories active" id="clothes">
    <div class="sub-categories-item"><span>Для жінок</span>
        <ul class="sub-categories-lv1">
            <li class="active"><a href="#" title="Костюми">Костюми</a>
                <ul class="sub-categories-lv2">
                    <li><a href="#" title="Калина">Калина</a></li>
                    <li><a href="#" title="Alve">Alve</a></li>
                    <li><a href="#" title="BGL">BGL</a></li>
                    <li><a href="#" title="Cat Orange">Cat Orange</a></li>
                    <li><a href="#" title="Frizman">Frizman</a></li>
                </ul>
            </li>
            <li><a href="#" title="Піджаки">Піджаки</a></li>
            <li><a href="#" title="Светри і гольфи">Светри і гольфи</a></li>
            <li><a href="#" title="Плаття">Плаття</a></li>
            <li><a href="#" title="Спідниці">Спідниці</a></li>
        </ul>
    </div><!--
    			--><div class="sub-categories-item">
        <ul class="sub-categories-lv1">
            <li><a href="#" title="Брюки">Брюки</a>
                <ul class="sub-categories-lv2">
                    <li><a href="#" title="Калина">Калина</a></li>
                    <li><a href="#" title="Alve">Alve</a></li>
                    <li><a href="#" title="BGL">BGL</a></li>
                    <li><a href="#" title="Cat Orange">Cat Orange</a></li>
                    <li><a href="#" title="Frizman">Frizman</a></li>
                </ul>
            </li>
            <li><a href="#" title="Блузи">Блузи</a></li>
            <li><a href="#" title="Білиза">Білиза</a></li>
            <li><a href="#" title="Спортивний одяг">Спортивний одяг</a></li>
        </ul>
    </div><!--
    			--><div class="sub-categories-item"><span>Для чоловіків</span>
        <ul class="sub-categories-lv1">
            <li><a href="#" title="Костюми">Костюми</a>
                <ul class="sub-categories-lv2">
                    <li><a href="#" title="Калина">Калина</a></li>
                    <li><a href="#" title="Alve">Alve</a></li>
                    <li><a href="#" title="BGL">BGL</a></li>
                    <li><a href="#" title="Cat Orange">Cat Orange</a></li>
                    <li><a href="#" title="Frizman">Frizman</a></li>
                </ul>
            </li>
            <li><a href="#" title="Брюки">Брюки</a></li>
            <li><a href="#" title="Сорочки">Сорочки</a></li>
            <li><a href="#" title="Краватки">Краватки</a></li>
            <li><a href="#" title="Светри">Светри</a></li>
            <li><a href="#" title="Футболки">Футболки</a></li>
            <li><a href="#" title="Білизна">Білизна</a></li>
            <li><a href="#" title="Спортивний одяг">Спортивний одяг</a></li>
        </ul>

    </div><!--
    			--><div class="sub-categories-item"><span>Для Дітей</span>
        <ul class="sub-categories-lv1">
            <li><a href="#" title="Шкільна форма">Шкільна форма</a>
                <ul class="sub-categories-lv2">
                    <li><a href="#" title="Калина">Калина</a></li>
                    <li><a href="#" title="Alve">Alve</a></li>
                    <li><a href="#" title="BGL">BGL</a></li>
                    <li><a href="#" title="Cat Orange">Cat Orange</a></li>
                    <li><a href="#" title="Frizman">Frizman</a></li>
                </ul>
            </li>
            <li><a href="#" title="Брюки">Брюки</a></li>
            <li><a href="#" title="Блузи/Сорочки">Блузи/Сорочки</a></li>
            <li><a href="#" title="Светри і гольфи">Светри і гольфи</a></li>
            <li><a href="#" title="Футболки">Футболки</a></li>
            <li><a href="#" title="Білизна">Білизна</a></li>
            <li><a href="#" title="Спортивний одяг">Спортивний одяг</a></li>
            <li><a href="#" title="Для немовлят">Для немовлят</a></li>
        </ul>
    </div>
</div>
<div class="sub-categories" id="shoes">
    <div class="sub-categories-item"><span>Для жінок#2</span>
        <ul class="sub-categories-lv1">
            <li><a href="#" title="Костюми">Костюми</a>
                <ul class="sub-categories-lv2">
                    <li><a href="#" title="Калина">Калина</a></li>
                    <li><a href="#" title="Alve">Alve</a></li>
                    <li><a href="#" title="BGL">BGL</a></li>
                    <li><a href="#" title="Cat Orange">Cat Orange</a></li>
                    <li><a href="#" title="Frizman">Frizman</a></li>
                </ul>
            </li>
            <li><a href="#" title="Піджаки">Піджаки</a></li>
            <li><a href="#" title="Светри і гольфи">Светри і гольфи</a></li>
            <li><a href="#" title="Плаття">Плаття</a></li>
            <li><a href="#" title="Спідниці">Спідниці</a></li>
        </ul>
    </div><!--
    			--><div class="sub-categories-item">
        <ul class="sub-categories-lv1">
            <li><a href="#" title="Брюки">Брюки</a>
                <ul class="sub-categories-lv2">
                    <li><a href="#" title="Калина">Калина</a></li>
                    <li><a href="#" title="Alve">Alve</a></li>
                    <li><a href="#" title="BGL">BGL</a></li>
                    <li><a href="#" title="Cat Orange">Cat Orange</a></li>
                    <li><a href="#" title="Frizman">Frizman</a></li>
                </ul>
            </li>
            <li><a href="#" title="Блузи">Блузи</a></li>
            <li><a href="#" title="Білиза">Білиза</a></li>
            <li><a href="#" title="Спортивний одяг">Спортивний одяг</a></li>
        </ul>
    </div><!--
    			--><div class="sub-categories-item"><span>Для чоловіків</span>
        <ul class="sub-categories-lv1">
            <li><a href="#" title="Костюми">Костюми</a>
                <ul class="sub-categories-lv2">
                    <li><a href="#" title="Калина">Калина</a></li>
                    <li><a href="#" title="Alve">Alve</a></li>
                    <li><a href="#" title="BGL">BGL</a></li>
                    <li><a href="#" title="Cat Orange">Cat Orange</a></li>
                    <li><a href="#" title="Frizman">Frizman</a></li>
                </ul>
            </li>
            <li><a href="#" title="Брюки">Брюки</a></li>
            <li><a href="#" title="Сорочки">Сорочки</a></li>
            <li><a href="#" title="Краватки">Краватки</a></li>
            <li><a href="#" title="Светри">Светри</a></li>
            <li><a href="#" title="Футболки">Футболки</a></li>
            <li><a href="#" title="Білизна">Білизна</a></li>
            <li><a href="#" title="Спортивний одяг">Спортивний одяг</a></li>
        </ul>

    </div><!--
    			--><div class="sub-categories-item"><span>Для Дітей</span>
        <ul class="sub-categories-lv1">
            <li><a href="#" title="Шкільна форма">Шкільна форма</a>
                <ul class="sub-categories-lv2">
                    <li><a href="#" title="Калина">Калина</a></li>
                    <li><a href="#" title="Alve">Alve</a></li>
                    <li><a href="#" title="BGL">BGL</a></li>
                    <li><a href="#" title="Cat Orange">Cat Orange</a></li>
                    <li><a href="#" title="Frizman">Frizman</a></li>
                </ul>
            </li>
            <li><a href="#" title="Брюки">Брюки</a></li>
            <li><a href="#" title="Блузи/Сорочки">Блузи/Сорочки</a></li>
            <li><a href="#" title="Светри і гольфи">Светри і гольфи</a></li>
            <li><a href="#" title="Футболки">Футболки</a></li>
            <li><a href="#" title="Білизна">Білизна</a></li>
            <li><a href="#" title="Спортивний одяг">Спортивний одяг</a></li>
            <li><a href="#" title="Для немовлят">Для немовлят</a></li>
        </ul>
    </div>
</div>
<div class="sub-categories" id="bags">
    <div class="sub-categories-item"><span>Для жінок#2</span>
        <ul class="sub-categories-lv1">
            <li><a href="#" title="Костюми">Костюми</a>
                <ul class="sub-categories-lv2">
                    <li><a href="#" title="Калина">Калина</a></li>
                    <li><a href="#" title="Alve">Alve</a></li>
                    <li><a href="#" title="BGL">BGL</a></li>
                    <li><a href="#" title="Cat Orange">Cat Orange</a></li>
                    <li><a href="#" title="Frizman">Frizman</a></li>
                </ul>
            </li>
            <li><a href="#" title="Піджаки">Піджаки</a></li>
            <li><a href="#" title="Светри і гольфи">Светри і гольфи</a></li>
            <li><a href="#" title="Плаття">Плаття</a></li>
            <li><a href="#" title="Спідниці">Спідниці</a></li>
        </ul>
    </div><!--
    			--><div class="sub-categories-item">
        <ul class="sub-categories-lv1">
            <li><a href="#" title="Брюки">Брюки</a>
                <ul class="sub-categories-lv2">
                    <li><a href="#" title="Калина">Калина</a></li>
                    <li><a href="#" title="Alve">Alve</a></li>
                    <li><a href="#" title="BGL">BGL</a></li>
                    <li><a href="#" title="Cat Orange">Cat Orange</a></li>
                    <li><a href="#" title="Frizman">Frizman</a></li>
                </ul>
            </li>
            <li><a href="#" title="Блузи">Блузи</a></li>
            <li><a href="#" title="Білиза">Білиза</a></li>
            <li><a href="#" title="Спортивний одяг">Спортивний одяг</a></li>
        </ul>
    </div><!--
    			--><div class="sub-categories-item"><span>Для чоловіків</span>
        <ul class="sub-categories-lv1">
            <li><a href="#" title="Костюми">Костюми</a>
                <ul class="sub-categories-lv2">
                    <li><a href="#" title="Калина">Калина</a></li>
                    <li><a href="#" title="Alve">Alve</a></li>
                    <li><a href="#" title="BGL">BGL</a></li>
                    <li><a href="#" title="Cat Orange">Cat Orange</a></li>
                    <li><a href="#" title="Frizman">Frizman</a></li>
                </ul>
            </li>
            <li><a href="#" title="Брюки">Брюки</a></li>
            <li><a href="#" title="Сорочки">Сорочки</a></li>
            <li><a href="#" title="Краватки">Краватки</a></li>
            <li><a href="#" title="Светри">Светри</a></li>
            <li><a href="#" title="Футболки">Футболки</a></li>
            <li><a href="#" title="Білизна">Білизна</a></li>
            <li><a href="#" title="Спортивний одяг">Спортивний одяг</a></li>
        </ul>

    </div><!--
    			--><div class="sub-categories-item"><span>Для Дітей</span>
        <ul class="sub-categories-lv1">
            <li><a href="#" title="Шкільна форма">Шкільна форма</a>
                <ul class="sub-categories-lv2">
                    <li><a href="#" title="Калина">Калина</a></li>
                    <li><a href="#" title="Alve">Alve</a></li>
                    <li><a href="#" title="BGL">BGL</a></li>
                    <li><a href="#" title="Cat Orange">Cat Orange</a></li>
                    <li><a href="#" title="Frizman">Frizman</a></li>
                </ul>
            </li>
            <li><a href="#" title="Брюки">Брюки</a></li>
            <li><a href="#" title="Блузи/Сорочки">Блузи/Сорочки</a></li>
            <li><a href="#" title="Светри і гольфи">Светри і гольфи</a></li>
            <li><a href="#" title="Футболки">Футболки</a></li>
            <li><a href="#" title="Білизна">Білизна</a></li>
            <li><a href="#" title="Спортивний одяг">Спортивний одяг</a></li>
            <li><a href="#" title="Для немовлят">Для немовлят</a></li>
        </ul>
    </div>
</div>
<div class="categories">
    <div class="categories-item">
        <a href="#" title="Посуд" class="dashes">Посуд</a>
    </div><!--
    			--><div class="categories-item">
        <a href="#" title="Декоративна косметика" class="cosmetics">Декоративна косметика</a>
    </div><!--
    			--><div class="categories-item">
        <a href="#" title="Товари для дітей" class="children-goods">Товари для дітей</a>
    </div><!--
    			--><div class="categories-item">
        <a href="#" title="Продукти харчування" class="food">Продукти харчування</a>
    </div>
</div>
<div class="categories">
    <div class="categories-item">
        <a href="#" title="Алкогольні напої" class="alcohol">Алкогольні напої</a>
    </div><!--
    			--><div class="categories-item">
        <a href="#" title="Прикраси" class="ornamentation">Прикраси</a>
    </div><!--
    			--><div class="categories-item">
        <a href="#" title="Ювелірні вироби" class="jewelry">Ювелірні вироби</a>
    </div><!--
    			--><div class="categories-item">
        <a href="#" title="Різне" class="variables">Різне</a>
    </div>
</div>
</div>
</div>
<div class="katalog">
    <div class="katalog-head">
        <div class="wrapper">
            <span>Жіночий одяг</span>
            <form action="index.php" method="get">
                <label>
                    Сортувати за:
                    <select name="filter" id="filter">
                        <option>Датою оновлення</option>
                        <option>Датою оновлення</option>
                        <option>Датою оновлення</option>
                    </select>
                </label>
            </form>
            <form action="index.php" method="get">
                <label>
                    Обрати регіон:
                    <select name="region" id="region">
                        <option>Не обрано</option>
                        <option>Не обрано</option>
                        <option>Не обрано</option>
                    </select>
                </label>
            </form>
        </div>
    </div>
    <div class="wrapper clearfix">
        <div class="filter">
            <div class="type-of-product">
                <a href="#" title="Тип" class="active">Тип</a>
                <ul id="type-of-product" class="open">
                    <li><label><input type="checkbox" name="costum"> Костюми</label></li>
                    <li><label><input type="checkbox" name="costum"> Піджаки</label></li>
                    <li><label><input type="checkbox" name="costum"> Светри і гольфи</label></li>
                    <li><label><input type="checkbox" name="costum"> Плаття</label></li>
                    <li><label><input type="checkbox" name="costum"> Спідниці</label></li>
                    <li><label><input type="checkbox" name="costum"> Брюки</label></li>
                    <li><label><input type="checkbox" name="costum"> Блузи</label></li>
                    <li><label><input type="checkbox" name="costum"> Білизна</label></li>
                    <li><label><input type="checkbox" name="costum"> Спортивний одяг</label></li>
                </ul>
            </div>
            <div class="price-range"><span>Ціновий діапазон</span>
                <div class="main-line">
                    <div class="variable-line">
                        <span class="low-price">550</span>
                        <span class="high-price">7580</span>
                    </div>
                </div>
            </div>
            <div class="brand">
                <a href="#" title="Бренд">Бренд</a>
                <ul id="brand">
                    <li><label><input type="checkbox" name="brand1"> brand1</label></li>
                    <li><label><input type="checkbox" name="brand2"> brand2</label></li>
                    <li><label><input type="checkbox" name="brand3"> brand3</label></li>
                </ul>
            </div>
        </div>
        <div class="katalog-content">
            <div class="breadcrumbs">
                <a href="#" title="Одяг">Одяг</a> >
                <a href="#" title="Жіночий одяг">Жіночий одяг</a>
            </div>
            <div class="katalog-content-item">
                <a href="#" title="Платье на пуговицах" class="item-foto"><img src="img/item_1.jpg" alt="item_1"></a>
                <div class="item-label">новий
                </div>
                <a href="#" title="Платье на пуговицах" class="item-info">Платье на пуговицах</a>
                <a href="#" title="Grâce à vous" class="item-brand">Grâce à vous</a>
                <div class="price-container clearfix">
                    <span class="item-price">1 450,00 ₴</span>
                    <a href="#" title="В обране" class="button-fav">В обране</a>
                </div>
            </div><!--
    			--><div class="katalog-content-item">
                <a href="#" title="Платье на пуговицах" class="item-foto"><img src="img/item_2.jpg" alt="item_2"></a>
                <div class="item-label">новий
                </div>
                <a href="#" title="Блузка шифон" class="item-info">Блузка шифон</a>
                <a href="#" title="Cat Orange" class="item-brand">Cat Orange</a>
                <div class="price-container clearfix">
                    <span class="item-price">580,00 ₴</span>
                    <a href="#" title="В обране" class="button-fav">В обране</a>
                </div>
            </div><!--
    			--><div class="katalog-content-item">
                <a href="#" title="Платье на пуговицах" class="item-foto"><img src="img/item_3.jpg" alt="item_3"></a>
                <div class="item-label">новий
                </div>
                <a href="#" title="Платья 886&amp;103" class="item-info">Платья 886&amp;103</a>
                <a href="#" title="Alve" class="item-brand">Alve</a>
                <div class="price-container clearfix">
                    <span class="item-price">890,00 ₴</span>
                    <a href="#" title="В обране" class="button-fav">В обране</a>
                </div>
            </div><!--
    			--><div class="katalog-content-item">
                <a href="#" title="Платье на пуговицах" class="item-foto"><img src="img/item_4.jpg" alt="item_4"></a>
                <div class="item-label">новий
                </div>
                <a href="#" title="Футболка женская PATRIOT" class="item-info">Футболка женская PATRIOT</a>
                <a href="#" title="Одежда с символикой Украины" class="item-brand">Одежда с символикой Украины</a>
                <div class="price-container clearfix">
                    <span class="item-price">230,00 ₴</span>
                    <a href="#" title="В обране" class="button-fav">В обране</a>
                </div>
            </div><!--
    			--><div class="katalog-content-item">
                <a href="#" title="Платье на пуговицах" class="item-foto"><img src="img/item_5.jpg" alt="item_5"></a>
                <a href="#" title="Жупан короткий з відктритими швами" class="item-info">Жупан короткий з відктритими швами</a>
                <a href="#" title="Отаман" class="item-brand">Отаман</a>
                <div class="price-container clearfix">
                    <span class="item-price">6700,00 ₴</span>
                    <a href="#" title="В обране" class="button-fav">В обране</a>
                </div>
            </div><!--
    			--><div class="katalog-content-item">
                <a href="#" title="Платье на пуговицах" class="item-foto"><img src="img/item_6.jpg" alt="item_6"></a>
                <a href="#" title="Вишиванка батистова з поясом" class="item-info">Вишиванка батистова з поясом</a>
                <a href="#" title="Отаман" class="item-brand">Отаман</a>
                <div class="price-container clearfix">
                    <span class="item-price">3400,00 ₴</span>
                    <a href="#" title="В обране" class="button-fav">В обране</a>
                </div>
            </div>
            <div class="paginator">
                <a href="#" title="В начало" class="pag-to-first"> </a>
                <a href="#" title="Назад" class="pag-to-back"> </a>
                <a href="#" title="Перейти на 1 страницу">1</a>
                <a href="#" title="Перейти на 2 страницу">2</a>
                <a href="#" title="Перейти на 3 страницу">3</a>
                <a href="#" title="Перейти на 4 страницу">4</a>
                <a href="#" title="Перейти на 5 страницу">5</a>
                <a href="#" title="Перейти на 6 страницу">6</a>
                <a href="#" title="Перейти на 7 страницу">7</a>
                <span>...</span>
                <a href="#" title="Перейти на 8 страницу">28</a>
                <a href="#" title="Вперед" class="pag-to-next"> </a>
                <a href="#" title="В конец" class="pag-to-last"> </a>
            </div>
        </div>
    </div>
</div>
<section class="slider-container">
    <div class="wrapper">
        <div class="slider-reviews" id="slider-reviews">
            <div class="slider-reviews-content">
                <div class="slider-reviews-content-item">
                    <div class="clearfix">
                        <div class="review-foto"><img src="img/reviews_1.jpg" alt="Юлія Савостіна">
                        </div>
                        <div class="review-info">
                            <h1>У пошуках MADE IN UKRAINE</h1>
                            <h3>Юлія Савостіна</h3>
                            <p>У лютому 2013 року пообіцяла, що буде рік купувати тільки товари українського виробництва і розповідати про всі знахідки читачам <a href="#" title="Мiй блог">свого блогу</a>. Пообіцяла і зробила. Продовжує агітувати за все якісне і модне українське тепер не тільки в блозі, але і в якості керівника окремого напрямку <span>Made in Ukraine в Ekonomika Communication Hub.</span>
                            </p>
                            <a href="#" title="Читати детальніше" class="more-info">Читати детальніше</a>
                        </div>
                    </div>
                </div>
                <div class="slider-reviews-content-item">
                    <div class="clearfix">
                        <div class="review-foto"><img src="img/reviews_1.jpg" alt="Юлія Савостіна">
                        </div>
                        <div class="review-info">
                            <h1>У пошуках MADE IN UKRAINE</h1>
                            <h3>Юлія Савостіна</h3>
                            <p>У лютому 2013 року пообіцяла, що буде рік купувати тільки товари українського виробництва і розповідати про всі знахідки читачам <a href="#" title="Мiй блог">свого блогу</a>. Пообіцяла і зробила. Продовжує агітувати за все якісне і модне українське тепер не тільки в блозі, але і в якості керівника окремого напрямку <i>Made in Ukraine в Ekonomika Communication Hub.</i>
                            </p>
                            <a href="#" title="Читати детальніше">Читати детальніше</a>
                        </div>
                    </div>
                </div>
                <div class="slider-reviews-content-item">
                    <div class="clearfix">
                        <div class="review-foto"><img src="img/reviews_1.jpg" alt="Юлія Савостіна">
                        </div>
                        <div class="review-info">
                            <h1>У пошуках MADE IN UKRAINE</h1>
                            <h3>Юлія Савостіна</h3>
                            <p>У лютому 2013 року пообіцяла, що буде рік купувати тільки товари українського виробництва і розповідати про всі знахідки читачам <a href="#" title="Мiй блог">свого блогу</a>. Пообіцяла і зробила. Продовжує агітувати за все якісне і модне українське тепер не тільки в блозі, але і в якості керівника окремого напрямку <i>Made in Ukraine в Ekonomika Communication Hub.</i>
                            </p>
                            <a href="#" title="Читати детальніше">Читати детальніше</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-reviews-nav">
                <ul class="switchers">
                    <li><a href="#" title="slide-nav" class="active"> </a></li><!--
    					--><li><a href="#" title="slide-nav"> </a></li><!--
    					--><li><a href="#" title="slide-nav"> </a></li>
                </ul>
                <a href="#" title="move-to-left" class="move-to-left"> </a>
                <a href="#" title="move-to-right" class="move-to-right"> </a>
            </div>
        </div>
    </div>
</section>
