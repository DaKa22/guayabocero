// jQuery(document).ready(function(){
// 		$(function() {

// 			// Get the form.
// 			let form = $('#contact-form');

// 			// Get the messages div.
// 			let formMessages = $('.form-message');

// 			// Set up an event listener for the contact form.
// 			$(form).submit(function(e) {
// 				// Stop the browser from submitting the form.
// 				e.preventDefault();
//                 grecaptcha.ready(function() {
//                     grecaptcha.execute('6LcpiV4gAAAAANUEST1-hCe9YZFuXRFdNRp1RR9h', {action: 'store'}).then(function(token) {
//                         console.log(token)
//                         form.prepend('<input type="hidden" name="token" value="' + token + '">');
//                         form.prepend('<input type="hidden" name="action" value="store">');
//                         // Serialize the form data.
//                         var formData = $(form).serialize();

//                         // Submit the form using AJAX.
//                         // $.ajax({
//                         //     type: 'POST',
//                         //     url: $(form).attr('action'),
//                         //     data: formData
//                         // })
//                         // .done(function(response) {
//                         //     $(formMessages).addClass('success');
//                         //     $(formMessages).text(response);
//                         //     $(formMessages).show(1500);

//                         //     // Clear the form.
//                         //     $('#contact-form input,#contact-form textarea').val('');
//                         //     $('input[name="_token"]').val($('meta[name="csrf_token"]').attr('content'));
//                         //     $('input[name="token"]').val(token);
//                         //     $('input[name="action"]').val('store');

//                         //     setTimeout(function() {
//                         //         $(formMessages).hide(100);
//                         //         $(formMessages).removeClass('success');
//                         //     },4000);

//                         // })
//                         // .fail(function(data) {
//                         //     // Make sure that the formMessages div has the 'error' class.
//                         //     $(formMessages).addClass('error');
//                         //     $(formMessages).text('Error al enviar correos');
//                         //     $(formMessages).show(1500);

//                         //     // Clear the form.
//                         //     $('#contact-form input,#contact-form textarea').val('');
//                         //     $('input[name="_token"]').val($('meta[name="csrf_token"]').attr('content'));
//                         //     $('input[name="token"]').val(token);
//                         //     $('input[name="action"]').val('store');

//                         //     setTimeout(function() {
//                         //         $(formMessages).hide(100);
//                         //         $(formMessages).removeClass('error');
//                         //     },4000);
//                         // });
//                             });
//                         });

// 			});

// 		});
// }); // end document ready function

// window.onload = (event) => {
//     /* validacion de formulario */
//     const form = document.getElementById('contact_form');
//     let divMsg = document.getElementById('form-message');

// }

// let msg = document.getElementById('form-message');

function getForm(event){
    const csrf = document.querySelector('meta[name="csrf_token"]').getAttribute('content');
    console.log(event)
    grecaptcha.ready(() => {
        grecaptcha.execute('6LcpiV4gAAAAANUEST1-hCe9YZFuXRFdNRp1RR9h', {action: 'store'}).then((token) => {
            console.log(token);
            // event.prepend('<input type="hidden" name="token" value="' + token + '">');
            // event.prepend('<input type="hidden" name="action" value="store">');

            const data = {
                name: event['name'].value,
                phone: event['phone'].value,
                star: event['star'].value,
                review: event['review'].value,
                token: token,
                action: 'store'
            }

            const formData = new FormData();
            formData.append('name', event['name'].value)
            formData.append('phone', event['phone'].value)
            formData.append('star', event['star'].value)
            formData.append('review', event['review'].value)
            formData.append('token', token)
            formData.append('action', 'store')

            console.log(data);
            // return false
            // const data = Object.assign(...Array.from(formData, ([x,y]) => ({[x]:y})));

            fetch(event.getAttribute('action'), {
                headers: {'X-CSRF-Token': csrf},
                method: 'POST',
                body: formData
            }).then(res => res.json()).then(response => {
                console.log(response);

                // msg.innerText(response)
                // msg.style.display = 'block';

                    // $(formMessages).addClass('success');
                    // $(formMessages).text(response);
                    // $(formMessages).show(1500);
                    // // Clear the form.
                    // $('#contact-form input,#contact-form textarea').val('');
                    // $('input[name="_token"]').val($('meta[name="csrf_token"]').attr('content'));
                    // $('input[name="token"]').val(token);
                    // $('input[name="action"]').val('store');
                    // setTimeout(function() {
                    //     $(formMessages).hide(100);
                    //     $(formMessages).removeClass('success');
                    // },4000);
            }).catch(err => {
                console.log(err);
                msg.innerText(err)
                msg.style.display = 'block';
                // Make sure that the formMessages div has the 'error' class.
                $(formMessages).addClass('error');
                $(formMessages).text('Error al enviar correos');
                $(formMessages).show(1500);
                // Clear the form.
                $('#contact-form input,#contact-form textarea').val('');
                $('input[name="_token"]').val($('meta[name="csrf_token"]').attr('content'));
                $('input[name="token"]').val(token);
                $('input[name="action"]').val('store');
                setTimeout(function() {
                    $(formMessages).hide(100);
                    $(formMessages).removeClass('error');
                },4000);
            });
        })
    })
    return false;
}
