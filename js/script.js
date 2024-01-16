$(document).ready(function () {
    var currentUrl = window.location.href;
    if (currentUrl.includes('service_sec1')) {
        $("#pills-Reiki-tab").click();
    }
    else if(currentUrl.includes('service_sec2')){
        $("#pills-Pranic-tab").click();
    }
    else if(currentUrl.includes('service_sec3')){
        $("#pills-Access-tab").click();
    }
    else if(currentUrl.includes('stress_management1')){
        $("#pills-StressManagement-tab").click();
    }
   

    function attachDropdownFunction() {
        if ($(window).width() <= 1000) {
            $('.dropdown-submenu').on("click", function (e) {
                var $subMenu = $(this).next('ul');

                if ($subMenu.is(':visible')) {
                    // If submenu is visible, let the link work as default
                    return true;
                } else {
                    // If submenu is hidden, toggle it and prevent the default link behavior
                    $subMenu.toggle();
                    e.stopPropagation();
                }
            });
        } else {
            // If the window width is less than 1000px, unbind the click event
            $('.dropdown-submenu').off("click");
        }
    }
    // Initial execution based on window width
    attachDropdownFunction();

    // Re-evaluate on window resize
    $(window).on('resize', function () {
        attachDropdownFunction();
    });
});
