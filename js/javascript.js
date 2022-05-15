$(document).ready(function () {

    $(".send").click(function (e) {

        e.preventDefault();

        let name = $(".name").val();
        let email = $(".email").val();
        let subject = $(".subject").val();
        let message = $(".message").val();

        $.ajax({
            url: "mail.php",
            method: "POST",
            data: {
                "send": 1,
                "name": name,
                "email": email,
                "subject": subject,
                "message": message
            },
            success: function (data) {
                $(".notice").html(data);
                $(".form").trigger("reset");
            }
        });

    });

    $('a').on('click', function (event) {

        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 500, function () {
                window.location.hash = hash;
            });
        }
    });

})