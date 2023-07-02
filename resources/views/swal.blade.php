<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Swal Example</title>
  <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"> -->
  @include('cdn')
  <style>
    
  </style>
</head>
<body>
  <button onclick="showAlert()">Show Alert</button>
  <a href="adminDeleteProduct.php?id=<?=$row['productID'];?>" class="dltbtn"><img src="delete.png" width="20px" height ="20px"></a> 
  
  <script>
    // function showAlert() {
    //   const swalWithBootstrapButtons = Swal.mixin({
    //     customClass: {
    //       confirmButton: 'btn btn-success',
    //       cancelButton: 'btn btn-danger'
    //     },
    //     buttonsStyling: false
    //   });

    //   swalWithBootstrapButtons.fire({
    //     title: 'Are you sure?',
    //     text: "You won't be able to revert this!",
    //     icon: 'warning',
    //     showCancelButton: true,
    //     confirmButtonText: 'Yes, delete it!',
    //     cancelButtonText: 'No, cancel!',
    //     reverseButtons: true
    //   }).then((result) => {
    //     if (result.isConfirmed) {
    //       swalWithBootstrapButtons.fire(
    //         'Deleted!',
    //         'Your file has been deleted.',
    //         'success'
    //       );
    //     } else if (result.dismiss === Swal.DismissReason.cancel) {
    //       swalWithBootstrapButtons.fire(
    //         'Cancelled',
    //         'Your imaginary file is safe :)',
    //         'error'
    //       );
    //     }
    //   });
    // }
    </script>

2nd swal
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $('.sideBar-btn').click(function(){
            $(this).toggleClass("click");
            $('.wrapper').toggleClass("collapse");
        }); 

        // sweet alert function to show record has been updated
        const newdata = $('.new-data').data('newdata')
        if(newdata){
            swal.fire({
                type : 'success',
                title : 'Record Updated',
                text : 'Product has been updated'
            })
        };

        // sweet alert function to ask for confirmation on delete from admin
        $('.dltbtn').click(function(e){
            e.preventDefault(); //to prevent the deleteProuct.php from running directly when the icon is being clicked
            const href = $(this).attr('href');

            Swal.fire({
                title: 'Are you sure to delete?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        location.href = href;
                    }
                })
        });

        const flashdata = $('.flash-data').data('flashdata')
        if(flashdata){
            swal.fire({
                type : 'success',
                title : 'Record Deleted',
                text : 'Record has been deleted'
            })
        };

</body>
</html>
