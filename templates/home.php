<?php
/*
Template Name: home
*/
get_header();
?>
<section class="description">  
    <div class="description__container _container">
        <div class="description__img"><img src="<?php the_field('description__img'); ?>" alt="description"></div>
        <div class="description__content">
            <div class="description__header">
                <h1 class="description__title"><?php the_field('description__title'); ?></h1> 
                <img src="<?php the_field('description__img-star'); ?>" alt="star"> 
            </div>               
            <p class="description__text text"><?php the_field('description__text'); ?></p>  
            <button class="description__btn"><?php the_field('description__btn'); ?></button>               
        </div>            
    </div>
</section>
<section class="welcome">
    <div class="welcome__container _container">
        <h2 class="welcome__title"><?php the_field('welcome__title'); ?></h2>
        <p class="welcome__text"><?php the_field('welcome__text'); ?></p>
        <p class="welcome__standua"><?php the_field('welcome__standua'); ?></p>
    </div>                
</section>
<section class="purpose">
    <div class="purpose__container _container">
        <div class="purpose__column purpose__img"><img src="<?php the_field('purpose__img'); ?>" alt="purpose"></div>
        <div class="purpose__column">
            <h2 class="purpose__title"><?php the_field('purpose__title'); ?></h2>
            <p class="purpose__text"><?php the_field('purpose__text-1'); ?></p>
            <p class="purpose__text"><?php the_field('purpose__text-2'); ?></p>
            <a href="#" class="purpose__button home__button"><?php the_field('purpose__button'); ?></a> 
        </div>
    </div>
</section>
<section class="customer">
    <div class="customer__box _container">
        <h2 class="customer__title"><?php the_field('customer__title'); ?></h2>
        <p class="customer__text"><?php the_field('customer__text'); ?></p>
        <div class="customer__container">
            <div class="customer__content">
                <p class="customer__name customer__color1"><?php the_field('customer__name-1'); ?></p>
                <p class="customer__name customer__color2"><?php the_field('customer__name-2'); ?></p>
                <p class="customer__name customer__color3"><?php the_field('customer__name-3'); ?></p>
                <p class="customer__name customer__color4"><?php the_field('customer__name-4'); ?></p>
            </div>
            <div class="customer__img"><img src="<?php the_field('customer__img'); ?>" alt="customer"></div>
        </div>
    </div>                
</section>
<?php get_footer(); ?>
