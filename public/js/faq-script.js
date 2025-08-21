jQuery(document).ready(function($) {
    $(".faq-question-container").on("click", function() {
        let $icon = $(this).find("i");
        let $answer = $(this).next(".faq-answer");

        // Toggle answer visibility
        $answer.slideToggle();

        // Switch icon
        if ($icon.hasClass("fa-plus")) {
            $icon.removeClass("fa-plus").addClass("fa-minus");
        } else {
            $icon.removeClass("fa-minus").addClass("fa-plus");
        }
    });
});

document.querySelectorAll('.faq-question-container').forEach(container => {
  container.addEventListener('click', () => {
    container.querySelector('.icon-wrapper').classList.toggle('open');
  });
});
