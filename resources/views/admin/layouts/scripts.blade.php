<!-- General JS Scripts -->
<script src="{{ asset('assets/dashboard/assets/modules/jquery.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/assets/modules/popper.js') }}"></script>
<script src="{{ asset('assets/dashboard/assets/modules/tooltip.js') }}"></script>
<script src="{{ asset('assets/dashboard/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/assets/modules/moment.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/assets/js/stisla.js') }}"></script>

<!-- JS Libraies -->
<script src="{{ asset('assets/dashboard/assets/modules/simple-weather/jquery.simpleWeather.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/assets/modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('assets/dashboard/assets/modules/summernote/summernote-bs4.js') }}"></script>
<script src="{{ asset('assets/dashboard/assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

<script src="{{ asset('assets/dashboard/assets/modules/datatables/datatables.min.js') }}"></script>
<script
    src="{{ asset('assets/dashboard/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}">
</script>
<script src="{{ asset('assets/dashboard/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js') }}">
</script>
<script src="{{ asset('assets/dashboard/assets/modules/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/assets/js/page/modules-datatables.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('assets/dashboard/assets/js/page/index-0.js') }}"></script>

<!-- Template JS File -->
<script src="{{ asset('assets/dashboard/assets/js/scripts.js') }}"></script>
<script src="{{ asset('assets/dashboard/assets/js/custom.js') }}"></script>

{{-- Sweet Alert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@stack('js')


<script>
    // add csrf token in ajax requestand there is an csrf in meta in head
    $.ajaxSetup({
        headers: {
            'X_CSRF_TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Toast Notification popup
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });

    // delete popup   should add this class delete-item in btn
    $(document).ready(function() {
        $('.delete-item').on('click', function(e) {
            e.preventDefault();
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to Delete this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    let url = $(this).attr("href");
                    console.log(url);
                    $.ajax({
                        method: "DELETE",
                        url: url,
                        success: function(data) {
                            if (data.status === 'success') {
                                Swal.fire(
                                    'Deleted!',
                                    data.message,
                                    'success',
                                );
                                window.location.reload();
                            } else if (data.status === 'error') {
                                Swal.fire(
                                    'Error!',
                                    data.message,
                                    'error',
                                );
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                }
            });
        });
    })
</script>
