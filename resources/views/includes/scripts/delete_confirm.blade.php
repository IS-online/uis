<script src="{{ asset('assets/js/bootbox.js') }}"></script>
<script>
    jQuery(function($) {

        $(".bootbox-confirm").on('click', function() {
            var $this = $(this);
            bootbox.confirm({
                title: "<div class='widget-header'><h4 class='smaller'><i class='ace-icon fa fa-exclamation-triangle red'></i> Izbriši potvrdu</h4></div>",
                message: "<div class='ui-dialog-content ui-widget-content' style='width: auto; min-height: 30px; max-height: none; height: auto;'><div class='alert alert-info bigger-110'>Ove stavke će biti trajno izbrisane i ne mogu se vratiti.</div>" +
                "<p class='bigger-110 bolder center grey'><i class='ace-icon fa fa-hand-o-right blue bigger-120'></i>Jesi li siguran?</p>",
                size: 'small',
                    buttons: {
                        confirm: {
                            label : "<i class='ace-icon fa fa-trash'></i> Da, Izbriši odmah!",
                            className: "btn-danger btn-sm",
                        },
                        cancel: {
                            label: "<i class='ace-icon fa fa-remove'></i> Otkaži",
                            className: "btn-primary btn-sm",
                        }
                    },
                    callback: function(result) {
                        if(result) {
                            location.href = $this.attr('href');
                        }
                    }
                }
            );
            return false;
        });

    });
</script>
