<?php get_header(); ?>
  <main class="main">
    <div class="container">
      <div class="main__inner__first">
        <div class="main__grid__left">
          <div class="main__images-list">
            <div class="main__img-item main__1" style="background-image: url(<?php the_field('bg1') ?>);">
              <img class="main__img-img1" src="<?php bloginfo( 'template_url' ); ?>/assets/images/футболки.png" alt="Футболки">
            </div>
            <div class="main__img-item small main__2" style="background-image: url(<?php the_field('bg2') ?>);">
              <img class="main__img-img2" src="<?php bloginfo( 'template_url' ); ?>/assets/images/низ.png" alt="Низ">
            </div>
            <div class="main__img-item small main__3" style="background-image: url(<?php the_field('bg3') ?>);">
              <img class="main__img-img3" src="<?php bloginfo( 'template_url' ); ?>/assets/images/верх.png" alt="Верх">
            </div>
          </div>
        </div>
        <div class="main__grid__right">
          <div class="main__images-list2">
            <div class="main__img-item2 small main__4" style="background-image: url(<?php the_field('bg4') ?>);">
              <img class="main__img-img4" src="<?php bloginfo( 'template_url' ); ?>/assets/images/Костюмы.png" alt="Платья">
            </div>
            <div class="main__img-item2 small main__5" style="background-image: url(<?php the_field('bg5') ?>);">
              <img class="main__img-img5" src="<?php bloginfo( 'template_url' ); ?>/assets/images/платья.png" alt="Костюмы">
            </div>
            <div class="main__img-item2 main__6" style="background-image: url(<?php the_field('bg6') ?>);">
              <img class="main__img-img6" src="<?php bloginfo( 'template_url' ); ?>/assets/images/Худи.png" alt="Худи">
            </div>
          </div>
        </div>
      </div>
      <div class="main__inner__two">
        <div class="main__new__blok">
          <h1 class="main__title__new__h1">НОВИНКИ</h1>
          <h6 class="main__title__new__h6">НОВИНКИ</h6>
          <img class="main__new__blok__img" src="<?php bloginfo( 'template_url' ); ?>/assets/images/badline.png" alt="Новинки">
        </div>
      </div>
    </div>
    <div class="bez__containera">
      <div class="main__inner__three">
        <div class="main__models__images main__models__img1" style="background-image: url(<?php the_field('bg10') ?>);">
          <a href="#"><img class="main__models__img" src="<?php bloginfo( 'template_url' ); ?>/assets/images/like-love.png" alt="models"></a>
          <img class="line" src="<?php bloginfo( 'template_url' ); ?>/assets/images/Vector 220.png" alt="line"></img>
        </div>
        <div class="main__models__images main__models__img2" style="background-image: url(<?php the_field('bg11') ?>);">
          <a href="#"><img class="main__models__img" src="<?php bloginfo( 'template_url' ); ?>/assets/images/like-love.png" alt="models"></a>
          <img class="line" src="<?php bloginfo( 'template_url' ); ?>/assets/images/Vector 220.png" alt="line"></img>
        </div>
        <div class="main__models__images main__models__img3" style="background-image: url(<?php the_field('bg12') ?>);">
          <a href="#"><img class="main__models__img" src="<?php bloginfo( 'template_url' ); ?>/assets/images/like-love.png" alt="models"></a>
          <img class="line" src="<?php bloginfo( 'template_url' ); ?>/assets/images/Vector 220.png" alt="line"></img>
        </div>
        <div class="main__models__images main__models__img4" style="background-image: url(<?php the_field('bg13') ?>);">
          <a href="#"><img class="main__models__img" src="<?php bloginfo( 'template_url' ); ?>/assets/images/like-love.png" alt="models"></a>
          <img class="line" src="<?php bloginfo( 'template_url' ); ?>/assets/images/Vector 220.png" alt="line"></img>
        </div>
      </div>
      <div class="main__inner__three-text__price__big">
        <div class="main-item-text__price">
          <p class="text">
          <?php the_field('new_text1') ?>
          </p>
          <p class="price"><?php the_field('price1') ?></p>
        </div>
        <div class="main-item-text__price">
          <p class="text">
          <?php the_field('new_text2') ?>
          </p>
          <p class="price"><?php the_field('price2') ?></p>
        </div>
        <div class="main-item-text__price">
          <p class="text">
          <?php the_field('new_text3') ?>
          </p>
          <p class="price"><?php the_field('price3') ?></p>
        </div>
        <div class="main-item-text__price">
          <p class="text">
          <?php the_field('new_text4') ?>
          </p>
          <p class="price"><?php the_field('price4') ?></p>
        </div>
      </div>
      <button class="main__watch__all-btn" style="background-image: url(<?php the_field('bg20') ?>);">Cмотреть все</button>
    </div>
    <img class="main__baner" src="<?php bloginfo( 'template_url' ); ?>/assets/images/baner.jpg" alt="new collection">
    <div class="container">
      <div class="main__inner4">
        <h2 class="h2__title__main__map">
          <?php the_field('booriva__store') ?>
        </h2>
        <div class="right__info__main">
          <div class="shop__adres">
            <?php the_field('adress2') ?> 
          </div>
          <div class="shop__time"><?php the_field('schedule') ?></div>
        </div>
        <div class="main__block__three__images">
          <img class="main__block__img6" src="<?php bloginfo( 'template_url' ); ?>/assets/images/line3.png" alt="img">
          <img class="main__block__img7" src="<?php bloginfo( 'template_url' ); ?>/assets/images/Strelka__group.png" alt="img">
          <img class="main__block__img8" src="<?php bloginfo( 'template_url' ); ?>/assets/images/love.png" alt="img">
        </div>  
        <div class="btn__help">
          <img class="photo__main__shop" src="<?php bloginfo( 'template_url' ); ?>/assets/images/photo__shop.png" alt="shop">
          <button class="map__btn" style="background-image: url(<?php the_field('background_for_btn') ?>);"><?php the_field('text_for_btn') ?></button>
        </div>  
        <div class="main__block__five__images"> 
          <img class="main__block__img1" src="<?php bloginfo( 'template_url' ); ?>/assets/images/s.png" alt="img">
          <img class="main__block__img5" src="<?php bloginfo( 'template_url' ); ?>/assets/images/love.png" alt="img">
          <img class="main__block__img2" src="<?php bloginfo( 'template_url' ); ?>/assets/images/line.png" alt="img">
          <img class="main__block__img3" src="<?php bloginfo( 'template_url' ); ?>/assets/images/line2.png" alt="img">
          <img class="main__block__img4" src="<?php bloginfo( 'template_url' ); ?>/assets/images/badline.png" alt="img">
        </div>
        <div class="map__and__btn__and__text">
          <div class="shop__info__text">
          <?php the_field('info_about_shop') ?>
          </div>
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2539.5486997564244!2d30.512909740502902!3d50.468128078045616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce14da685c53%3A0x3828ade8a90a98aa!2z0YPQuy4g0J3QuNC20L3QuNC5INCS0LDQuywgMzcsINCa0LjQtdCyLCDQo9C60YDQsNC40L3QsCwgMDIwMDA!5e0!3m2!1sru!2sru!4v1632643825265!5m2!1sru!2sru" width="273" height="246" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </div>
    <Marquee class="Marquee__top" behavior="scroll" direction="right"><?php the_field('run_text') ?><div class="p">fgasdg</div><?php the_field('run_text') ?><div class="p">fgasdg</div><?php the_field('run_text') ?><div class="p">fgasdg</div><?php the_field('run_text') ?></Marquee>
    <div class="container">
      <div class="i__feel__inner">
        <div class="grid__images__right">
          <div class="grid__img1">
            <a href="#"><img class="main__models__img3434534534" src="<?php bloginfo( 'template_url' ); ?>/assets/images/Vector__for__ing__grid.png" alt="models"></a>
            <img class="main__grid__img1" src="<?php bloginfo( 'template_url' ); ?>/assets/images/gridimg1.png" alt="Бомбер">
            <img class="line2" src="<?php bloginfo( 'template_url' ); ?>/assets/images/Vector__238px.png" alt="line"></img>
            <div class="main-item-text__price2 main-item-text__price233">
              <p class="text"><?php the_field('name_100') ?></p>
              <p class="price price2"><?php the_field('price_1001') ?></p>
            </div>
          </div>
          <div class="grid__img2">
            <a href="#"></a><img class="main__models__img3434534534" src="<?php bloginfo( 'template_url' ); ?>/assets/images/like-love.png" alt="models"></a>
            <img class="main__grid__img2" src="<?php bloginfo( 'template_url' ); ?>/assets/images/gridimg2.png" alt="Платье-футболка">
            <img class="line2" src="<?php bloginfo( 'template_url' ); ?>/assets/images/Vector__238px.png" alt="line"></img>
            <div class="main-item-text__price2 main-item-text__price233">
              <p class="text">
                <?php the_field('name33') ?>
              </p>  
            <p class="price price2"><?php the_field('price_1011') ?></p>
            </div>
          </div>
        </div>
        <img class="i__feel__center-img" src="<?php bloginfo( 'template_url' ); ?>/assets/images/i__feel__center__img.jpg" alt="I feel">
        <button class="i__feel__center-btn" style="background-image: url(<?php the_field('bg_btn_red') ?>);"><?php the_field( 'text_red_btn' ); ?></button>
        <div class="left__img__i__feel">
          <a href="#"><img class="main__models__img33" src="<?php bloginfo( 'template_url' ); ?>/assets/images/like-love.png" alt="models"></a>
          <img class="left__i__feel__block__img" src="<?php bloginfo( 'template_url' ); ?>/assets/images/left__i__feel__block__img.png" alt="Платье">
          <img class="line3" src="<?php bloginfo( 'template_url' ); ?>/assets/images/Vector 220.png" alt="line"></img>
          <div class="main-item-text__price">
            <p class="text">
              <?php the_field('name102') ?>
            </p>
            <p class="price pice22"><?php the_field('price_1021') ?></p>
          </div>
        </div>
      </div>
      <div class="main__inner__two">
        <div class="main__new__blok main__new__blok2">
          <h1 class="main__title__new__h1"><?php the_field('costumes_big') ?></h1>
          <h6 class="main__title__new__h6"><?php the_field('costumes_smal') ?></h6>
          <img class="main__new__blok__img" src="<?php bloginfo( 'template_url' ); ?>/assets/images/badline.png" alt="КОСТЮМЫ">
        </div>
      </div>
    </div>
    <div class="bez__containera2">
      <div class="grid__images__photo__and__Price__customes">
        <div class="img1__grid__1" style="background-image: url(<?php the_field('bg111') ?>);">
          <img class="pric1899__1" src="<?php bloginfo( 'template_url' ); ?>/assets/images/price_1899.png" alt="1899">
          <img class="price899__1" src="<?php bloginfo( 'template_url' ); ?>/assets/images/price_899.png" alt="899">
        </div>
        <div class="img1__grid__2" style="background-image: url(<?php the_field('bg222') ?>);">
          <img class="pric1899__2" src="<?php bloginfo( 'template_url' ); ?>/assets/images/price_1899.png" alt="1899">
          <img class="price899__2" src="<?php bloginfo( 'template_url' ); ?>/assets/images/price_899.png" alt="899">
        </div>
        <div class="img1__grid__3" style="background-image: url(<?php the_field('bg333') ?>);">
          <img class="pric1899__3" src="<?php bloginfo( 'template_url' ); ?>/assets/images/price_1899.png" alt="1899">
          <img class="price899__3" src="<?php bloginfo( 'template_url' ); ?>/assets/images/price_899.png" alt="899">
        </div>
        <div class="img1__grid__4" style="background-image: url(<?php the_field('bg444') ?>);">
          <img class="price899__4" src="<?php bloginfo( 'template_url' ); ?>/assets/images/price_899.png" alt="899">
          <img class="pric1899__4" src="<?php bloginfo( 'template_url' ); ?>/assets/images/price_1899.png" alt="1899">
        </div>
      </div>
      <button class="main__watch__all-btn1" style="background-image: url(<?php the_field('bg_costumes_btn') ?>);"><?php the_field('btn__costumes_text') ?></button>
    </div>
    <div class="container">
      <div class="information__inner">
        <div class="information-item information-item1">
          <img class="information-item__img1 information-item__img" src="<?php bloginfo( 'template_url' ); ?>/assets/images/icon_отправка.png" alt="">
          <h3 class="information-item__title">Отправка<br>
            день в день</h3>
          <p class="information-item-text information-item-text1">При заказе до 18-00</p>
        </div>
        <div class="information-item information-item2">
          <img class="information-item__img2 information-item__img" src="<?php bloginfo( 'template_url' ); ?>/assets/images/icon_обмен.png" alt="">
          <h3 class="information-item__title">Легкий<br>
            возврат/обмен</h3>
          <p class="information-item-text information-item-text2">В течении 14 дней</p>
        </div>
        <div class="information-item information-item3">
          <img class="information-item__img3 information-item__img" src="<?php bloginfo( 'template_url' ); ?>/assets/images/Frame 125.png" alt="">
          <h3 class="information-item__title">Сделано<br>
            в Украине</h3>
          <p class="information-item-text information-item-text3">Прям в Киеве</p>
        </div>
      </div>
      <div class="instagram__inner">
        <div class="instagram-item">
          <h1 class="instagram__title">Instagram</h1>
          <p class="instagram__text">
            Мы в экстазе, когда ты нас отмечаешь)<br>Отмечай плз чаще
          </p>
          <div class="images__block__instagram">
            <img class="instagram-img1" src="<?php bloginfo( 'template_url' ); ?>/assets/images/instagram-img1.png" alt="instagram">
            <img class="instagram-img2" src="<?php bloginfo( 'template_url' ); ?>/assets/images/instagram-img2.png" alt="instagram">
          </div>
        </div>
        <div class="instagram-item">
          <img class="instagram-img3" src="<?php bloginfo( 'template_url' ); ?>/assets/images/instagram-img3.jpg" alt="instagram">
        </div>
        <div class="instagram-item">
          <div class="images__block__instagram2">
            <img class="instagram-img4" src="<?php bloginfo( 'template_url' ); ?>/assets/images/instagram-img4.png" alt="instagram">
            <img class="instagram-img5" src="<?php bloginfo( 'template_url' ); ?>/assets/images/instagram-img5.png" alt="instagram">
          </div>
          <h3 class="instagram__title2">#boorivagirls</h3>
          <p class="instagram__text2">
            Ставь тэг чтобы быть в нашей<br> тусовке.
          </p>
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>