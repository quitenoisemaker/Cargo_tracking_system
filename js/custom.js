$(document).on('submit', '#cart', function(ev) {
    ev.preventDefault();
    let mee = $(this);
    let add_cart = mee.find('[name=add_cart]').val();
    let size = mee.find('[name=size]').val();
    let color = mee.find('[name=color]').val();
    $.ajax({
        url: 'config/data?action=add_cart',
        type: 'POST',
        // dataType: 'json',
        data: { add_cart: add_cart, size: size, color: color },
        cache: false,

        success: function(data) {
            // alert(data)
            if (data == true) {
                // alert(res)


                let old_bal = Number($(document).find('.cart_update').text().replace(",", ""));
                $(document).find('.cart_update').text(Number(old_bal + Number(1)).toLocaleString());
                Swal.fire({
                    type: 'success',
                    title: 'Product has been added to cart',

                    // allowOutsideClick: false,
                    // showCancelButton: true,
                    // confirmButtonColor: '#3085D6',
                    // cancelButtonColor: '#d33',
                    // allowOutsideClick: false,
                    // confirmButtonText: 'Continue shopping'
                })
            } else {

                Swal.fire({
                    type: 'warning',
                    title: 'Product already in cart',

                    // allowOutsideClick: false,
                    // showCancelButton: true,
                    // confirmButtonColor: '#3085D6',
                    // cancelButtonColor: '#d33',
                    // allowOutsideClick: false,
                    // confirmButtonText: 'Continue shopping'
                })
            }
        },
        error: function(error_msg) {
            console.log(error_msg);
        }

    })

})



$('.quantity').on('change', function() {
    let value = $(this).val();
    let product_id = $(this).attr('name');
    $.ajax({
        url: 'config/data?action=update_cart',
        type: 'POST',
        // dataType: 'json',
        data: { value: value, product_id: product_id },
        cache: false,
        success: function(data) {
            // alert(data)
            if (data == true) {

                Swal.fire({
                    type: 'success',
                    title: 'Item quantity has been updated',
                }).then((result) => {

                    if (result.value) {
                        Swal.fire({
                            title: 'Please Wait!',
                            text: 'Processing...',
                            timer: false,
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                            onOpen: () => {
                                swal.showLoading()
                            }
                        })
                        window.location = 'cart';
                    }
                });
            }
        },
        error: function(error_msg) {
            console.log(error_msg);
        }

    })
})

$(document).on('click', '.remove', function(ev) {
    let mee = $(this);
    let mee_form = $(this).attr('id');
    let utype = $(this).attr('utype');
    let subTotal = $(this).attr('subTotal');
    let totalPrice= $(this).attr('totalPrice');
    
       

    Swal.fire({
        icon: 'warning',
        title: 'Are you sure?',
        text: "You are about to remove " + utype + " !",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        allowOutsideClick: false,
        confirmButtonText: 'Yes, I Know'
    }).then((result) => {
        if (result.value) {
            mee.find('.default-load').attr('hidden', true);
            mee.find('.let-load').removeAttr('hidden');
            mee.attr('disabled', true);

            $.ajax({
                url: 'config/data?action=delete_product',
                type: 'POST',
                dataType: 'json',
                data: { product: mee_form },
                cache: false,
                success: function(res) {
                    // alert(res)
                    if (res.success) {
                        $('#user-' + mee_form).animate({ "opacity": "0" }, 2500, function() { $('#user-' + mee_form).remove(); });

                        let old_bal = Number($(document).find('.cart_update').text().replace(",", ""));
                        $(document).find('.cart_update').text(Number(old_bal - Number(1)).toLocaleString());


                        Swal.fire({
                            title: 'Please Wait!',
                            text: 'Processing...',
                            timer: false,
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                            onOpen: () => {
                                swal.showLoading()
                            }
                        })
                        window.location = 'cart';

                        
                        // let old_bal2 = Number(totalPrice.replace(",", ""));
                        // $(document).find('.subTotal').text(Number(old_bal2 -Number(subTotal)).toLocaleString());
                        // alert(old_bal2)
                    }
                }
            })
        }
    })
})

$(document).on('submit', '#checkout', function(ev) {
    ev.preventDefault();
    let mee = $(this);
    let mee_form = $(this).serialize();
    $('.default-load').attr('hidden', true);
    $('.let-load').removeAttr('hidden');
    $('input').attr('readonly', true);
    $('#checkout').find('button').attr('disabled', true);
    
    $.ajax({
        url: 'config/data?action=checkout',
        type: 'POST',
        // dataType: 'json',
        data: mee_form,
        success: function(data) {
            alert(data)
            if (data == true) {
                window.location = 'pay';
            }
        },
        error: function(error_msg) {
            console.log(error_msg);
        }

    })

})

$(document).on('submit', '#update', function(ev) {
    ev.preventDefault();
    let mee = $(this);
    let mee_form = $(this).serialize();
    $('.default-load').attr('hidden', true);
    $('.let-load').removeAttr('hidden');
    $('input').attr('readonly', true);
    $('#update').find('button').attr('disabled', true);
    
    $.ajax({
        url: 'config/data?action=update',
        type: 'POST',
        // dataType: 'json',
        data: mee_form,
        success: function(data) {
            
            if (data === 'updated') {
                Swal.fire({
                    type: 'success',
                    title: "Edited Successfully !",
                    
                    AllowEscapeKey: false,
                    AllowOutsideClick: false,
                    AllowConfirmButton: true
                }).then(function() {
                    Swal.fire({
                        title: 'Please Wait!',
                        text: 'Refreshing page ...',
                        timer: false,
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        onOpen: () => {
                            swal.showLoading()
                        }
                    })
                    window.location = 'my_account';
                });
            }
        },
        error: function(error_msg) {
            console.log(error_msg);
        }

    })

})

$(document).on('submit', '#change_password', function(ev) {
    ev.preventDefault();
    let mee = $(this);
    let mee_form = $(this).serialize();
   
    
    $.ajax({
        url: 'config/data?action=change_password',
        type: 'POST',
        // dataType: 'json',
        data: mee_form,
        success: function(data) {
            
            if (data === 'success') {
                Swal.fire({
                    type: 'success',
                    title: "Updated Successfully !",
                    
                    AllowEscapeKey: false,
                    AllowOutsideClick: false,
                    AllowConfirmButton: true
                }).then(function() {
                    Swal.fire({
                        title: 'Please Wait!',
                        text: 'Refreshing page ...',
                        timer: false,
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        onOpen: () => {
                            swal.showLoading()
                        }
                    })
                    window.location = 'logout';
                });
            }else if (data === 'wrong') {
                Swal.fire({
                    type: 'warning',
                    title: 'Current Password wrong'
                })
            }else if (data === 'no_match') {
                Swal.fire({
                    type: 'warning',
                    title: 'New Password does not match'              
                })
            }
        },
        error: function(error_msg) {
            console.log(error_msg);
        }

    })

})

$(document).on('submit', '#login', function(ev) {
    ev.preventDefault();
    let mee = $(this);
    let mee_form = $(this).serialize();
    // $('.default-load').attr('hidden', true);
    // $('.let-load').removeAttr('hidden');
    // $('input').attr('readonly', true);
    // $('#checkout').find('button').attr('disabled', true);

    $.ajax({
        url: 'config/data?action=login',
        type: 'POST',
        // dataType: 'json',
        data: mee_form,
        success: function(data) {
            // alert(data)
            if (data == true) {

                $('.default-load').attr('hidden', true);
                $('.let-load').removeAttr('hidden');
                $('input').attr('readonly', true);
                $('#login').find('button').attr('disabled', true);
                window.location = 'pay';
            } else {
                Swal.fire({
                    type: 'error',
                    title: 'Email or password incorrect',
                })
            }
        },
        error: function(error_msg) {
            console.log(error_msg);
        }

    })

})




$(document).on('submit', '#register', function(ev) {
    ev.preventDefault();
    let mee = $(this);
    let mee_form = $(this).serialize();
    $('.default-load').attr('hidden', true);
    $('.let-load').removeAttr('hidden');
    $('input').attr('readonly', true);
    $('#register').find('button').attr('disabled', true);

    $.ajax({
        url: 'config/data?action=register',
        type: 'POST',
        // dataType: 'json',
        data: mee_form,
        success: function(data) {
            // alert(data)
            if (data == true) {
                Swal.fire({
                    type: 'success',
                    title: "Registration Successful !",
                    
                    AllowEscapeKey: false,
                    AllowOutsideClick: false,
                    AllowConfirmButton: true,
                    confirmButtonText: 'Continue shopping'
                }).then(function() {
                    Swal.fire({
                        title: 'Please Wait!',
                        text: 'Refreshing page ...',
                        timer: false,
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        onOpen: () => {
                            swal.showLoading()
                        }
                    })
                    window.location = '/';
                });
            }
        },
        error: function(error_msg) {
            console.log(error_msg);
        }

    })

})

$(document).on('submit', '#form', function(ev) {
    ev.preventDefault();
    let mee = $(this);
    let mee_form = $(this).serialize();
    $('.default-load').attr('hidden', true);
    $('.let-load').removeAttr('hidden');
    $('input').attr('readonly', true);
    $('#form').find('button').attr('disabled', true);

    $.ajax({
        url: 'config/data?action=form',
        type: 'POST',
        // dataType: 'json',
        data: mee_form,
        success: function(data) {
            // alert(data)
            if (data == true) {
                Swal.fire({
                    type: 'success',
                    title: "Message Sent !",
                    
                    AllowEscapeKey: false,
                    AllowOutsideClick: false,
                    AllowConfirmButton: true
                }).then(function() {
                    
                    window.location = '/';
                });
            }else{
                Swal.fire({
                    type: 'warning',
                    title: "Opps! Error sending message",
                    
                    AllowEscapeKey: false,
                    AllowOutsideClick: false,
                    AllowConfirmButton: true
                })
            }
        },
        error: function(error_msg) {
            console.log(error_msg);
        }

    })

})
