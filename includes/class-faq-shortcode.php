<?php
class FAQ_Shortcode {
    public static function render() {
        $args = [
            'post_type' => 'faq',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'ASC'
        ];
        $faqs = new WP_Query($args);

        if ($faqs->have_posts()) {
            $output = '<div class="faq-list">';
            while ($faqs->have_posts()) {
                $faqs->the_post();
                $output .= '<div class="faq-item">';
                $output .= '
                   <div class="d-flex justify-content-between align-items-center faq-question-container">
                   <h3 class="faq-question">' . get_the_title() . 
                   '</h3>
                   <span class="icon-wrapper">
                        <i class="fa-solid fa-plus toggle-icon plus cursor-pointer"></i>
                        <i class="fa-solid fa-minus toggle-icon minus cursor-pointer"></i>
                   </span>
                   </div>';
                $output .= '<div class="faq-answer" style="display:none;">' . get_the_content() . '</div>';
                $output .= '</div>';
            }
            $output .= '</div>';
            wp_reset_postdata();
        } else {
            $output = '<p>No FAQs found.</p>';
        }

        return $output;

        //   if ($faqs->have_posts()) {
        //     $output = '<div class="accordion" id="faqAccordion">';
        //     $count = 0;

        //     while ($faqs->have_posts()) { 
        //         $faqs->the_post(); 
        //         $count++; 
        //         $output .= ' 
        //         <div class="accordion-item"> 
        //             <h2 class="accordion-header" id="heading'.$count.'"> 
        //                 <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapse'.$count.'" aria-expanded="false" aria-controls="collapse'.$count.'"> 
        //                     '.esc_html(get_the_title()).' 
        //                 </button> 
        //             </h2> 
        //             <div id="collapse'.$count.'" class="accordion-collapse collapse" aria-labelledby="heading'.$count.'" data-bs-parent="#faqAccordion"> 
        //               <div class="accordion-body"> 
        //             '.apply_filters("the_content", get_the_content()).' 
        //             </div> 
        //         </div> 
        //         </div>'; } 
        //         $output .= '</div>'; wp_reset_postdata(); }
        //     else {
        //     $output = '<p>No FAQs found.</p>';
        // }

        // return $output;
    }
}
