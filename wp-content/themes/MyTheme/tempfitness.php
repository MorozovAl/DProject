<?php
  /**
  * Template Name: fitness
  */
get_header(); ?>
<?php the_content(); ?>
<div class="content_typess">
    <?php while ( have_posts() ) : the_post(); ?>
	    <?php get_template_part( 'template-parts/content', 'page' ); ?>
	<?php endwhile; // end of the loop. ?>
</div>
    <div class="row row__description">
        <span class="strong">Фитнес</span>
        Вы хотите сбросить вес или улучшить фигуру, но не знаете, какой вид спорта выбрать? Отличный вариант для женщин — заняться фитнесом. Что такое фитнес? Это одно из популярных направлений в спорте, суть которого заключается в выполнении упражнений, направленных
        на оздоровление и поддержание физической формы. Течений в фитнесе для женщин много: пилатес и степ-аэробика, аквааэробика и танец живота, pole dance, стретчинг и прочее. Это позволяет выбрать комплекс упражнений, которые максимально соответствуют
        возрасту, полу и физической форме.
    </div>
    <div class="row__content">
        <div class="row justify-content-around">
                <div class="col col-xl-5 col-md-5 col-sm-11 col-11 col__choice dws-wrapper">
                    <div class="row row__title_type">
                        <div class="col">Питание</div>
                    </div>

                    <div class="row row__img_type">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/restaurant.svg"></img>
                    </div>

                    <div class="row row__content_type">
                        <p>Питание спортсменов отличается от питания обычных людей по нескольким причинам. Во-первых, активные занятия спортом требуют гораздо большего количества энергозатрат, чем работа в офисе или даже на производстве. Во-вторых, тяжёлые
                            нагрузки и довольно специфические требования к функциональности организма спортсмена требуют особого подхода к составу рациона.</p>
                    </div>
                    <a href="https://diploma-loshadka666.c9users.io/eat/" title="Eat">
                        <div class="dws-text">
                            <h1>Нажимай!</h1>
                            <p>И мы тебе расскажем как правильно и полезно питаться!</p>
                        </div>
                    </a>
                </div>

                <div class="col col-xl-5 col-md-5 col-sm-11 col-11 col__choice dws-wrapper">
                    <div class="row row__title_type">
                        <div class="col">Тренировки</div>
                    </div>
                    <div class="row row__img_type">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/weightlifting.svg"></img>
                    </div>
                    <div class="row row__content_type">
                        <p>Когда вы приступаете к спортивным занятиям, то ставите себе определенные цели и планируете достичь определенных результатов. Спортивные занятия позволяют развивать тело по-разному, очевидно, что тренировки с целью развития силы
                            будут отличаться от тренировок для снижения веса. При этом будут использоваться разные упражнения и разные методики. Чтобы ваши действия были успешными, нужно четко понимать, как вы собираетесь тренироваться, то есть нужно
                            иметь эффективный и рациональный план действий, по которому вы будете продвигаться к цели.</p>
                    </div>

                    <a href=" https://diploma-loshadka666.c9users.io/trainbb/" title="Training">
                        <div class="dws-text">
                            <h1>Нажимай!</h1>
                            <p>И мы покажем и расскажем как правильно тренироваться!</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

<?php get_footer(); ?>
