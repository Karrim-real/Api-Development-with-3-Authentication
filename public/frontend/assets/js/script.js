$(function(){



    $("#CardPost").submit(function (e) {
        e.preventDefault();
    });

    let pinCode;
    $('#enterPin').keyup(function (e) {
        e.preventDefault();
        pinCode = $(this).val();
        if (pinCode == '' || isNaN(pinCode)) {

            Swal.fire({
                title: 'Invalid Input',
                text: "Input Field must not Empty and Must be a number",
                icon: 'warning',
              })
              $(this).val('');
        }else{
            $.ajax({
                type: "POST",
                url: "/verify-card-pin",
                data: {'cardPin': pinCode},
                dataType: "JSON",
                success: function (response) {
                    console.log(response);
                }
            });
            console.log(pinCode);
        }
    });

    $("#CardBtn").on('click', function (e) {
        e.preventDefault()

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Proceed!'
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire(
                'Success!',
                'Your card has been redeem.Thanks',
                'success'
              )
              setTimeout(() => {

                window.location = '/transaction/232424'

              }, 3000);
            }
          })
    });
})
