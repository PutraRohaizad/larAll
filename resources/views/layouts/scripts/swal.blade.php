@if (Session::has('success'))
<script>
    Swal.fire({
        title: "Success",
        text: "{{ Session::get('success') }}",
        icon: "success",
        buttonsStyling: false,
        confirmButtonText: "Okay!",
        customClass: {
            confirmButton: "btn btn-success",
        }
    });
</script>
{{ Session::forget('success') }}
@endif