$(function(){

    $("#CardPost").submit(function (e) {
        e.preventDefault();
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
