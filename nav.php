<header class="header">
        <div class="logo">
            <a href="index.php"><img src="img/logo.png" alt="Logo"></a>
        </div>

        <div class="clock">
            <i class="fa fa-clock-o fa-2x" aria-hidden="true"></i>
        </div>
        <h5 class="time">Режим работы: 
<br>с 11:00 до 24:00</h5>


        <img class="separator" src="img/separator.png" alt="separator">

        <div class="car">
            <i class="fa fa-truck fa-2x" aria-hidden="true"></i>
        </div>


        <h5 class="delivery">Доставка:<br>+79652787034</h5>




        <a class="btn-call" href="tel:+79932342397">
            <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
            <div class="call-text">
                <h4>Позвонить нам</h4></div>
        </a>

        <a class="btn-cart" href="">
            <img class="mycart" src="img/mycart.png">
        </a>


        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
                <span></span>
            </label>

            <ul class="menu__box">
                <li><a class="menu__item" href="#" style="color:black">Акции</a></li>
                <li><a class="menu__item" href="rolls.php">Роллы</a></li>
                <li><a class="menu__item" href="sushi.php">Суши</a></li>
                <li><a class="menu__item" href="#">Пицца</a></li>
                <li><a class="menu__item" href="sets.php">Сеты</a></li>
                <li><a class="menu__item" href="goryachie.php">Горячие Блюда</a></li>
                <li><a class="menu__item" href="fastfood.php">Фастфуд</a></li>
                <li><a class="menu__item" href="vok.php.php">Вок</a></li>
                <li><a class="menu__item" href="poke.php">Поке</a></li>
                <li><a class="menu__item" href="tayhan.php">Тяхан</a></li>
                <li><a class="menu__item" href="sope.php">Супы</a></li>
                <li><a class="menu__item" href="salats.php">Салаты</a></li>
                <li><a class="menu__item" href="drinks.php">Напитки</a></li>
                
            </ul>
        </div>

    </header>

    <main>



        <section class="baner">

        </section>
<!-- Меню боковое -->
        <section class="menu">
        <div class="conteiner-menu">    
            
            <a class="item_menu" href="rolls.php"><img class="roll" src="img/roll.png" alt="Роллы"> Роллы</a>
            <a class="item_menu" href="sushi.php"><img class="sushi" src="img/sushi.png" alt="Суши"> Суши</a>
            <a class="item_menu" href="sets.php"><img class="sets" src="img/sets.png" alt="Сеты"> Сеты</a>
            <a class="item_menu" href="#"><img class="pizza" src="img/pizza.png" alt="Пицца"> Пицца</a>
            <a class="item_menu" href="fastfood.php"><img class="fastfood"  src="img/burger.png" alt="Фастфуд"> Фастфуд</a>
            <a class="item_menu" href="salats.php"><img class="salats"  src="img/salats.png" alt="Салаты"> Салаты</a>
            <a class="item_menu" href="sope.php"><img class=" sope" src="img/sope.png" alt="Супы"> Супы</a>
            <a class="item_menu" href="goryachie.php"><img class="food"  src="img/food.png" alt="Горячие блюда"> Горячие блюда</a>
           <a class="item_menu" href="tyahan.php"><img class="tyahan"  src="img/tyahan.png" alt="Тяхан"> Тяхан</a>
            <a class="item_menu" href="vok.php"><img class="vok" src="img/vok.png" alt="Вок"> Вок</a>
            <a class="item_menu" href="poke.php"><img class="poke" src="img/poke.png" alt="Поке"> Поке</a>
           <a class="item_menu" href="drinks.php"><img class="drinks"  src="img/drinks.png" alt="Напитки"> Напитки</a>
           
           </div>

        </section>


         <!-- Виджет -->
         <a href="#openModal">
                <button class="pulse-button">



                    <span class="pulse-button__icon"></span>
                    <div class="pulse-btn">
                        <i class="fa fa-phone fa-4x" aria-hidden="true"></i></div>

                    <span class="pulse-button__rings"></span>
                    <span class="pulse-button__rings"></span>
                    <span class="pulse-button__rings"></span>

                </button>
            </a>





            <div id="openModal" class="modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Заголовок</h3>
                            <a href="#close" title="Close" class="close">×</a>
                        </div>
                        <div class="modal-body">
                            <ul>
                                <form action="send.php" method="post">
                                    <input type="text" name="fio" placeholder="Ваше имя" required>
                                    <input type="text" name="phone" placeholder="Ваш телефон" required>
                                    <input type="submit" value="Отправить">
                                </form>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>












            <link rel="stylesheet" href="smartbasket/css/smartbasket.min.css">

<div class="smart-basket__wrapper"></div>

<script src="./smartbasket/js/smartbasket.min.js"></script>


	<script>
		$(function () {
			$('.smart-basket__wrapper').smbasket({
				productElement: 'block',
				buttonAddToBasket: 'button',
				productPrice: 'product__price-number',
				productSize: 'product__size-element',
				
				productQuantityWrapper: 'product__quantity',
				smartBasketMinArea: 'btn-cart',
				countryCode: '+7',
				smartBasketCurrency: '₽',
				smartBasketMinIconPath: './smartbasket/img/shopping-basket-wight.svg',

				agreement: {
					isRequired: true,
					isChecked: true,
					isLink: 'https://artstranger.ru/privacy.html',
				},
				nameIsRequired: false,
			});
		});
	</script>           


</main>

