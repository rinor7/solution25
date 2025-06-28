<?php 
/*
* Template Name: Xentral
*/
get_header(); 
?>
<div class="page-xentral" >
            
<div class="banner-wrapper-up-shopify banner-wrapper-up-shopware">
    <div class="container">
        <div class="row">
            <div class="opside-content col-lg-9">
                <div class="content-left">
                    <h1><p>Die <strong>Power-Kombination</strong> für Ihren Erfolg: <strong>xentral ERP</strong> und solution25 - Maximale Leistung für Ihr Business!</p></h1>
                    <div class="ecommerce-banner-info banner-info-xentral"> 
                    <ul>
                        <li><span></span>Nahtlose Anbindung auf alle Plattformen</li>
                        <li><span></span>Kontinuierlicher Support</li>
                        <li><span></span>Optimierte Geschäftsprozesse</li>
                    </ul>        
                    </div>

                    <div class="banner-btn"> 
                        <div class="migrate-btn">
                        <a href="#anchor-cf">Erstberatung kostenlos</a>                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="downside col-lg-3">
            <div class="imgbronze"><div class="circle"></div><img src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/xentra-servicepartner.png" alt="xentra-servicepartner"></div>
            </div>
        </div>

        <div class="slider-partners">
                    <div class="swiper mySwiper mySwiperone">
                        <?php
                        if( have_rows('partners', 1660) ): 
                        while ( have_rows('partners', 1660 ) ) : the_row(); 
                        if( have_rows('partners_repeater', 1660 ) ): 
                        ?>
                        <div class="swiper-wrapper">
                            <?php 
                                while( have_rows('partners_repeater', 1660 ) ): the_row(); 
                            ?>
                                <div class="swiper-slide">
                                    <?php 
                                        $url = get_sub_field('image');
                                        $imageID = attachment_url_to_postid($url);
                                    ?>
                                    <img src="<?php the_sub_field('image'); ?>" alt="<?= get_post_meta( $imageID, '_wp_attachment_image_alt', true);?>">
                                </div>
                            <?php 
                                endwhile;
                            ?>
                        </div>
                        <?php 
                        endif; 
                        endwhile; 
                        endif;
                        ?>
                    </div>
                </div>
    </div>
</div>




<div class="ecommerce-banner prod-analyze-banner prod-xentral">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 leftside">
                <div class="ecommerce-banner-content">
                    <h2><strong>solution25</strong> – Ihr zuverlässiger <strong>Xentral Partner</strong></h2>
                    <div class="ecommerce-banner-info">
                        <ul>
                            <li>Expertise und Erfahrung<span>Als erfahrene Agentur verfügen wir über das Fachwissen und die Kompetenz, um eine reibungslose Integration mit xentral zu gewährleisten.</span></li>
                            <li>Maßgeschneiderte Lösungen<span>Wir entwickeln individuelle Integrationen, die speziell auf die Anforderungen Ihres Unternehmens zugeschnitten sind.</span></li>
                            <li>Ressourceneinsparungen<span>Durch die Zusammenarbeit mit uns sparen Sie wertvolle Zeit und Ressourcen, da wir uns um den gesamten Integrationsprozess kümmern.</span></li>
                            <li>Support<span>Wir bieten eine kontinuierliche Betreuung und Unterstützung während und nach der Integration.</span></li>
                            <li>Strategische Beratung<span>Neben der reinen technischen Integration gewähren wir Ihnen auch strategische Beratung, um das volle Potenzial von xentral auszuschöp</span></li>
                            <li>Vereinfachte Prozesse<span>Durch unsere Integration werden Ihre Geschäftsabläufe nahtlos in xentral eingebunden, was die Effizienz Ihres Unternehmens fördert.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 rightside">
                <div class="banner-home-contact"> 
                <img src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/sol25-xent.png" alt="sol25-xent">
                </div>
            </div>
        </div>
    </div>
</div>



<div class="xentral-fastconnect">

<div class="container">
    <div class="consulation-wrapper consulation-wrapper-custom-home consulation-wrapper-custom-xentral">
        <div class="row">
            <div class="col-lg-7 lefts">
                <h3>Sie möchten sich austauschen?</h3>
                <h4>Sie benötigen Hilfe bei Ihrem Projekt? Kontaktieren Sie mich jetzt kostenlos auf Whatsapp für einen ersten Austausch.</h4>
            </div> 
            <div class="col-lg-5 rights">
                
                <?php
                $currentlang = get_bloginfo('language');
                if ($currentlang == "en-GB") :
                    ?>
                    <a href="#anchor-cf">Free Consultation</a>
                    <?php
                elseif ($currentlang == "de-DE") :
                    ?>
                    <a href="#anchor-cf">Erstberatung kostenlos</a>
                    <?php
                endif;
                ?>
            </div>
        </div>
    </div>
</div>

</div>




<div class="connect-crm">
    <div class="container">
        <div class="title">
            <h1>Wir integrieren Xentral in diversen <strong>CRM Systemen</strong></h1>
        </div>
        <div class="content">
            <div class="logos"><div class="icon"><img src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/shopware5new.png" alt="sol25-xent"></div></div>
            <div class="logos"><div class="icon"><img src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/shopware6new.png" alt="sol25-xent"></div></div>
            <div class="logos"><div class="icon"><img src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/shopifynew.png" alt="sol25-xent"></div></div>
            <div class="logos"><div class="icon"><img src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/magento1.png" alt="sol25-xent"></div></div>
            <div class="logos"><div class="icon"><img src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/magento2.png" alt="sol25-xent"></div></div>
            <div class="logos"><div class="icon"><img src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/oxid.png" alt="sol25-xent"></div></div>
            <div class="logos"><div class="icon"><img src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/woocomm-wordpress.png" alt="sol25-xent"></div></div>
        </div>
    </div>
</div>




<div class="efficient-smart">
    <div class="container">
        <div class="title">
            <h1>Unser <strong>Integrationsprozess</strong> in drei Schritten</h1>
        </div>

        <div class="content">
        <div class="row">
        <div class="box col-lg-3">
            <div class="transparent-inner">
            <span>1</span>
            <h1>Analyse und Planung</h1>
            <h3>Wir beginnen mit einer gründlichen Analyse Ihrer Anforderungen und Geschäftsprozesse, um eine maßgeschneiderte Integrationsstrategie für Ihre xentral-Anbindung zu entwickeln. Gemeinsam definieren wir die Ziele, den Umfang und den Zeitplan des Projekts.</h3>
        </div></div>

        <div class="box col-lg-3">
            <div class="transparent-inner">
            <span>2</span>
            <h1>Umsetzung und Integration</h1>
            <h3>Unser erfahrenes Team führt die technische Umsetzung der Integration durch. Wir stellen sicher, dass Ihre Systeme reibungslos mit xentral kommunizieren und Daten nahtlos ausgetauscht werden.</h3>
        </div></div>

        <div class="box col-lg-3">
            <div class="transparent-inner">
            <span>3</span>
            <h1>Testing und Schulung</h1>
            <h3>Bevor die Integration live geschaltet wird, führen wir gründliche Tests durch. Zudem bieten wir Schulungen und Unterstützung für Ihr Team, um sicherzustellen, dass Sie die neuen Funktionen effektiv nutzen können.</h3>
        </div></div>

        <div class="box col-lg-3">
            <div class="black-inner">
                <h2>Bereit <strong>durchzustarten</strong>?</h2>
                    <div class="banner-btn"> 
                        <div class="migrate-btn">
                        <a href="#anchor-cf">Erstberatung kostenlos</a>                      
                        </div>
                    </div>
            </div>
        </div>
        </div>
        </div>

    </div>
</div>




<div class="premium-support">
    <div class="container">
        <div class="title">
            <h1>Unser <strong>Premium Support</strong> - Maximale Unterstützung für Ihren Erfolg</h1>
        </div>

        <div class="content">
            <div class="row">
            <div class="logos col-lg-3"><div class="img"><img src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/premium4.svg" alt="sol25-xent"></div><h1>Schnelle Reaktionszeiten</h1></div>
            <div class="logos col-lg-3"><div class="img"><img src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/premium3.svg" alt="sol25-xent"></div><h1>Expertenwissen</h1></div>
            <div class="logos col-lg-3"><div class="img"><img src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/premium2.svg" alt="sol25-xent"></div><h1>Priorisierter Support</h1></div>
            <div class="logos col-lg-3"><div class="img"><img src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/premium1.svg" alt="sol25-xent"></div><h1>Proaktive Problembehebung</h1></div>
            </div>
        </div>

        <div class="banner-btn"> 
            <div class="migrate-btn">
            <a href="#anchor-cf">Erstberatung kostenlos</a>                           
            </div>
        </div>

    </div>
</div>





<div class="prod-xentral-comprehensive">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 leftside">
                    <div class="ecommerce-banner-content">
                    <h2>Xentral - Die umfassende ERP-Lösung für Ihr Unternehmen</h2>
                    <h3>Mit xentral haben Sie eine zentrale Plattform für die Verwaltung von Beständen, Aufträgen, Buchhaltung und mehr, um Ihr Unternehmen erfolgreich zu führen.</h3>
                    <div class="ecommerce-banner-info banner-info-xentral"> 
                    <ul>
                        <li><span></span>Ganzheitliche Integration aller Geschäftsprozesse</li>
                        <li><span></span>Optimierung der Bestandsverwaltung und Lagerhaltung</li>
                        <li><span></span>Nahtlose Anbindung von Verkaufskanälen und Marktplätzen</li>
                    </ul>        
                    </div>
                    <div class="banner-btn"> 
                    <div class="migrate-btn">
                    <a href="#anchor-cf">Erstberatung kostenlos</a>                           
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-6 rightside">
                <div class="banner-home-contact"> 
                <img src="<?php echo get_bloginfo('template_directory'); ?>/dist/img/erp-illustration.png" alt="sol25-xent">
                </div>
            </div>
        </div>
    </div>
</div>





<div class="testimonial-wrapper testimonial-wrapper-pagespeed testimonial-wrapper-xentral">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <h2 class="title-testimonials"><?php echo ( get_field('testimonials', 1660)['title'] );?></h2>
                        <h3 class="subtitle-testimonials"><?php echo ( get_field('testimonials', 1660)['subtitle'] );?></h3>
                    </div>
                    <div class="col-lg-7">
                    <div class="swiper mySwiper mySwiperfour">
                        <?php
                        if( have_rows('testimonials', 1660) ): 
                        while ( have_rows('testimonials', 1660) ) : the_row(); 
                        ?>
                        <div class="swiper-wrapper">
                            <?php
                            if( have_rows('testimonials_repeater', 1660) ): 
                            ?>
                            <?php 
                            while( have_rows('testimonials_repeater', 1660) ): the_row(); 
                            ?>
                            <div class="swiper-slide">
                                <div class="slide-box">
                                <h3>
                                    <span>"</span>
                                    <?php the_sub_field('text', 1660); ?>
                                    <span>"</span>
                                </h3>
                                <div class="author">
                                    <div class="leftside">
                                    <pre class="author-name"><?php the_sub_field('author_name', 1660); ?></pre>
                                    <pre class="author-company"><?php the_sub_field('author_company', 1660); ?></pre>    
                                    </div>
                                    <div class="rightside">
                                    <?php the_sub_field('title', 1660); ?>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                            </div>
                            <?php 
                            endwhile;
                            ?>
                            <?php 
                            endif;
                            ?>
                            </div>
                            <?php 
                            endwhile; 
                            endif;
                            ?>
                            <div class="testimonials-arrow">
                            <div class="swiper-button-prevv"><i class="feather-chevron-left"></i></div>
                            <div class="swiper-button-nextt"><i class="feather-chevron-right"></i></div>
                            </div>
                            </div>
                </div>
                </div>
            </div>
        </div>




<div class="accordion__section accordion__section-xentrale">
    <div class="container">
        <div class="title">
            <h1>Häufig gestellte Fragen</h1>
        </div>
        <div class="accordion">
        <div class="accordion-item">
                <div class="accordion-header">Welche Vorteile bietet die Integration von Xentral für mein Unternehmen?</div>
                <div class="accordion-content">
                    <p>Die Integration von Xentral bietet eine Vielzahl von Vorteilen, darunter effiziente Prozessautomatisierung, Echtzeit-Daten für fundierte Entscheidungen, optimierte Bestandsverwaltung, verbesserte Auftragsabwicklung und vieles mehr. Durch die Nutzung der umfassenden Funktionen von Xentral können Sie Ihr Unternehmen erfolgreich führen und das Wachstum fördern.</p>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">Ist Xentral skalierbar und für Unternehmen unterschiedlicher Größen geeignet?</div>
                <div class="accordion-content">
                    <p>Ja, Xentral ist eine skalierbare Lösung, die sich für Unternehmen jeglicher Größe eignet. Egal, ob Sie ein kleines Unternehmen sind, das gerade erst startet, oder ein etabliertes Unternehmen mit hohem Transaktionsvolumen - Xentral bietet flexible Anpassungsmöglichkeiten, um Ihren spezifischen Anforderungen gerecht zu werden und mit Ihrem Unternehmen zu wachsen.</p>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">Kann Xentral mit anderen Systemen und Plattformen integriert werden?</div>
                <div class="accordion-content">
                    <p>Ja, Xentral bietet zahlreiche Integrationsoptionen und kann nahtlos mit anderen Systemen und Plattformen verbunden werden. Von Verkaufskanälen und Marktplätzen bis hin zu Buchhaltungs- und CRM-Systemen - xentral ermöglicht die reibungslose Integration, um einen effizienten Datenaustausch und eine umfassende Prozessoptimierung zu gewährleisten.</p>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">Kann xentral in meine bestehende IT-Infrastruktur integriert werden?</div>
                <div class="accordion-content">
                    <p>Ja, xentral kann nahtlos in Ihre bestehende IT-Infrastruktur integriert werden. Es bietet verschiedene Integrationsmöglichkeiten wie API, Webhooks und Plugins, um eine reibungslose Verbindung mit Ihren vorhandenen Systemen und Anwendungen zu gewährleisten. Dadurch können Sie von den umfassenden Funktionen von xentral profitieren, ohne Ihre bestehende IT-Infrastruktur vollständig umgestalten zu müssen.</p>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="cf-custom-xentral">
        <div class="container container-custom" id="anchor-cf">
            <div class="cf-banner cf-banner-footer cf-banner-marketing">
                <div class="roww">

                        <div class="leftside">
                        <h2><?php the_field('contact-form-leftside', 11171); ?></h2>
                        <div class="logos-clients-xentral desktop-only">
                        <?php
                            if( have_rows('partners' , 5) ): 
                            while ( have_rows('partners' , 5) ) : the_row(); 
                            if( have_rows('partners_repeater') ): 
                            ?>
                                <?php 
                                    while( have_rows('partners_repeater') ): the_row(); 
                                ?>
                                    <div class="logo">
                                    <img class="imgbox" src="<?php the_sub_field('image'); ?>" alt="Alt text">
                                    </div>

                                <?php 
                                    endwhile;
                                ?>
                            <?php 
                            endif; 
                            endwhile; 
                            endif;
                            ?>
                        </div>
                        <div class="oval-shape"></div>
                        </div>

                        <div class="rightside">
                            <?php dynamic_sidebar('widget-4'); ?>

                        <div class="logos-clients-xentral mobile-only">
                        <?php
                            if( have_rows('partners' , 1660) ): 
                            while ( have_rows('partners' , 1660) ) : the_row(); 
                            if( have_rows('partners_repeater') ): 
                            ?>
                                <?php 
                                    while( have_rows('partners_repeater') ): the_row(); 
                                ?>
                                    <div class="logo">
                                    <img class="imgbox" src="<?php the_sub_field('image'); ?>" alt="Alt text">
                                    </div>

                                <?php 
                                    endwhile;
                                ?>
                            <?php 
                            endif; 
                            endwhile; 
                            endif;
                            ?>
                        </div>
                        </div>

                </div> 
            </div>
        </div>
    </div>




    <script>
            jQuery(document).ready(function($) {
        // Hide all accordion items except the first one
        $('.accordion-content').not(':first').hide();

        // Add active class to the first accordion header
        $('.accordion-header:first').addClass('active');

        // Show the content of the first accordion
        $('.accordion-content:first').show();

        // Accordion click event
        $('.accordion-header').click(function() {
            // Close previously opened accordions
            $('.accordion-header.active').not(this).removeClass('active');
            $('.accordion-content').not($(this).next()).slideUp();

            // Toggle current accordion
            $(this).toggleClass('active');
            $(this).next('.accordion-content').slideToggle();
        });
        });
    </script>
</div>
<?php get_footer(); ?>