$(document).ready(function () {
    $('.accord-title').click(function (e) {
        e.preventDefault();
        let $this = $(this);
        if ($this.next().hasClass('show')) {
            $this.next().removeClass('show');
            $this.next().slideUp(350);
        } else {
            $this.parent().parent().find('.accord-contant').removeClass('show');
            $this.parent().parent().find('.accord-contant').slideUp(350);
            $this.next().toggleClass('show');
            $this.next().slideToggle(350);
        }
    });
});
$(document).ready(function () {
    $(".tablinks").on("click", function () {
        var tabName = $(this).data("tab");
        var tabContent = $("#" + tabName);
        var allTabContent = $(".tabcontent");
        var allTabButtons = $(".tablinks");

        allTabContent.hide();

        allTabButtons.removeClass("b-active");

        tabContent.show();
        $(this).addClass("b-active");
    });

    $(".tablinks:first").click();
});
