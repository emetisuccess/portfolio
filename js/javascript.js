$(document).ready(function () {
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

    $("form").on("click", ".send", function (e) {
        e.preventDefault();

        let name = $(".name").val();
        let email = $(".email").val();
        let subject = $(".subject").val();
        let message = $(".message").val();

        // console.log(name, email, subject, message);
        if (name == "" && email == "" && subject == "" && message == "") {
            let notice = "<p class='text-danger text-center'>All fields are Required</p>";
            $(".notice").html(notice);

        } else {
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
                error: function () {
                    $(".notice").html("<p class='text-success text-center'>Failed To Send Message.</p>");
                },
                success: function () {
                    $(".notice").html("<p class='text-success text-center'>Your Message Has Been Sent. Thanks</p>");
                    $(".form").trigger("reset");
                }
            });
        }
    });
})