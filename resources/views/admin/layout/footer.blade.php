<!-- partial:partials/_footer.html -->
<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
    <p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="https://www.nobleui.com" target="_blank">NobleUI</a>.</p>
    <p class="text-muted">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
</footer>
<!-- partial -->

</div>
</div>

<!-- core:js -->
<script src="{{asset('backend')}}/vendors/core/core.js"></script>
<!-- endinject -->

<!-- Plugin js for this page -->
<script src="{{asset('backend')}}/vendors/flatpickr/flatpickr.min.js"></script>
<script src="{{asset('backend')}}/vendors/apexcharts/apexcharts.min.js"></script>
<!-- End plugin js for this page -->

<!-- inject:js -->
<script src="{{asset('backend')}}/vendors/feather-icons/feather.min.js"></script>
<script src="{{asset('backend')}}/js/template.js"></script>
<!-- endinject -->

<!-- Custom js for this page -->
<script src="{{asset('backend')}}/js/dashboard-dark.js"></script>
<!-- End custom js for this page -->

<!-- DataTables JS -->
<script src="{{asset('backend')}}/js/data-table.js"></script>
<script src="{{asset('backend')}}/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="{{asset('backend')}}/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>

<!-- toaster -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch (type) {
        case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

        case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

        case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

        case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
    }
    @endif
</script>


</body>

</html>