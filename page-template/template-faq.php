<?php
/*
*	Template Name: Faq Page Template
*/
get_header();?>
<?php while ( have_posts() ) : the_post(); ?>
<?php $fields = get_fields(); //print_R($fields);?>
<div class="main-mid-section faq-page" data="section">
        <div class="container">
            <div class="text-center">
                <h2><?php the_title(); ?></h2> 
			</div>
            
            <div class="faq-cover">
                <div class="panel-group" id="accordion">
				<?php $x=1; foreach( $fields['faqs_section'] as $keys ): ?>
					<?php if( $x == 1 ): ?>
					 <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $x; ?>"><?php echo $keys['faq_question']; ?>
                              
                                <span class="plus-mins"></span>
                              
                              </a>
                          </h4>
                        </div>
                        <div id="collapse<?php echo $x; ?>" class="panel-collapse collapse in">
                          <div class="panel-body"><?php echo $keys['faq_answer']; ?></div>
                        </div>
                      </div>
					  <?php else: ?>
					   <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $x; ?>" class="collapsed">
                                <?php echo $keys['faq_question']; ?>
                                <span class="plus-mins"></span>
                              
                              </a>
                          </h4>
                        </div>
                        <div id="collapse<?php echo $x; ?>" class="panel-collapse collapse">
                          <div class="panel-body"><?php echo $keys['faq_answer']; ?></div>
                        </div>
                      </div>
					  
					  <?php endif; ?>
					  
					  
				<?php $x++; endforeach; ?>
				
                </div>
            </div>            
        </div>
    </div>
    
<?php endwhile; ?>
<?php get_footer(); ?>