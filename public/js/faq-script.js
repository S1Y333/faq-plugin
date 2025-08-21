jQuery(document).ready(function($){
    $(".faq-question-container").on("click", function(){
        $(this).next(".faq-answer").slideToggle();
    });
});
