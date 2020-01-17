$(document).ready(function(){
    $("sideMenuToggler").on("click", function() {
        $(".wrapper").toggleClass("active");
    });
});

$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});