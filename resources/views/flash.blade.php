@if (Session::has('sweet_flash.flash'))
    <script>
        @if (Session::has('sweet_flash.callback'))
            swal({!! Session::get('sweet_flash.flash') !!}, {!! Session::get('sweet_flash.callback') !!});
        @else
            swal({!! Session::get('sweet_flash.flash') !!});
        @endif
    </script>
@endif
