$(function () {
    $(
        "#contactForm input,#contactForm textarea,#contactForm button"
    ).jqBootstrapValidation({
        preventSubmit: true,
        submitError: function ($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function ($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            Swal.fire({
              title: "gönderiliyor...",
              text: "lütfen bekleyiniz..",
              showConfirmButton: false,
              allowOutsideClick: false
            });
            var name = $("input#name").val();
            var email = $("input#email").val();
            var phone = $("input#phone").val();
            var message = $("textarea#message").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(" ") >= 0) {
                firstName = name.split(" ").slice(0, -1).join(" ");
            }
            $this = $("#sendMessageButton");
            $this.prop("disabled", true); // Disable submit button until AJAX call is complete to prevent duplicate messages
            
            
            
            $.ajax({
                url: "/assets/mail/contact_me.php",
                type: "POST",
                data: {
                    name: name,
                    phone: phone,
                    email: email,
                    message: message,
                },
                cache: false,
                success: function () {
                    // Success message

                    Swal.fire({
          title: 'Harika, Mesajın Gönderildi',
          type: 'success',
          text: 'Teşekkürler',
          confirmButtonText: 'Tamam'
          });
                    //clear all fields
                    $("#contactForm").trigger("reset");
                },
                error: function () {
                    // Fail message
                    Swal.fire({
          title: 'Hay Aksi, Mesajın Gönderilemedi, Sorun Sizde Değil Bizde',
          type: 'error',
          text: 'Hata',
          confirmButtonText: 'Tamam'
          });
                    //clear all fields
                    $("#contactForm").trigger("reset");
                },
                complete: function () {
                    setTimeout(function () {
                        $this.prop("disabled", false); // Re-enable submit button when AJAX call is complete
                    }, 1000);
                },
            });
        },
        filter: function () {
            return $(this).is(":visible");
        },
    });

    $('a[data-toggle="tab"]').click(function (e) {
        e.preventDefault();
        $(this).tab("show");
    });
});

/*When clicking on Full hide fail/success boxes */
$("#name").focus(function () {
    $("#success").html("");
});
