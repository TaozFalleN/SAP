
<script>

    document.addEventListener("DOMContentLoaded", function(){
        $('.datetimepicker').datetimepicker({
            format: 'DD-MM-YYYY',
            locale: 'es',
            icons: {
                date: "tim-icons icon-calendar-60",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: 'tim-icons icon-minimal-left',
                next: 'tim-icons icon-minimal-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove'
            }
        });
    })

</script>
