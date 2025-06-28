<?php 
/*
* Template Name: Table Content Template
*/
get_header(); 
?>

<?php if (get_field('show_content_with_tables')) : ?>

    <section class="content-with-table content-with-table-standard">
        <div class="container">
            <div class="row">
                <?php 
                $raw_content = get_field('content_with_table_text');
                $headings = extract_h2_headings($raw_content);
                $content_with_ids = add_anchor_to_headings($raw_content);
                ?>
                <div class="rights content-rightside col-lg-8">
                    <?php echo $content_with_ids; ?>
                </div>
                <?php if (!empty($headings)) : ?>
                    <div class="lefts sidebar-leftside col-lg-4">
                        <div class="sticky-table">

                            <?php
                            $title = get_field('downside_title');
                            $desc = get_field('downside_desc');
                            $btn = get_field('downside_btn');
                            $url = get_field('downside_url');
                            ?>

                            <?php if ($title || $desc || ($btn && $url)) : ?>
                                <div class="downside">
                                    <?php if ($title): ?>
                                        <h3><?php echo esc_html($title); ?></h3>
                                    <?php endif; ?>

                                    <?php if ($desc): ?>
                                        <p><?php echo esc_html($desc); ?></p>
                                    <?php endif; ?>

                                    <?php if ($btn && $url): ?>
                                        <a href="<?php echo esc_url($url); ?>" class="btn"><?php echo esc_html($btn); ?></a>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <div class="upside">
                                <?php if ($table_title = get_field('table_title')): ?>
                                    <div class="title-box"><?php echo esc_html($table_title); ?></div>
                                <?php endif; ?>

                                <ul class="toc-list">
									<?php foreach ($headings as $index => $heading) : ?>
									<li>
										<a href="#heading-<?php echo $index + 1; ?>">
											<?php echo esc_html(strip_tags($heading)); ?>
										</a>
									</li>
									<?php endforeach; ?>
								</ul>
								
                            </div>

                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <style>
        .content-with-table-standard {
            margin-top: 30px;
        }
        .page-template-table-content-template {
            overflow: unset;
        }
        .content-with-table .rights h2 {
            font-weight: 500;
        }
        .content-with-table .rights, .content-with-table .rights p {
            font-weight: 300;
        }
        @media (max-width: 991.98px) {
            .sticky-table {
                display: flex;
                flex-direction: column-reverse;
            }
            .content-with-table .lefts .sticky-table .upside {
                margin-top: 20px;
            }
            .content-with-table .lefts .sticky-table .downside {
                margin-top: 40px;
            }
        }
    </style>
<?php endif; ?>

<?php include("includes/footer2.php");  ?>
