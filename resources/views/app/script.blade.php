
<script>
    $(document).ready(function() {
        $().ready(function() {
            $sidebar = $('.sidebar');
            $navbar = $('.navbar');
            $main_panel = $('.main-panel');
            $full_page = $('.full-page'); 

            $sidebar_responsive = $('body > .navbar-collapse');
            sidebar_mini_active = {{ $perfil->usu_menu_min}};
            tema_oscuro = {{ $perfil->usu_modo_oscuro }};

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

            $('.fixed-plugin a').click(function(event) {
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            inicializarForm('{{ $perfil->usu_color_menu }}');

            $('.fixed-plugin .background-color span').click(function() {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data', new_color);
                }

                if ($main_panel.length != 0) {
                    $main_panel.attr('data', new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data', new_color);
                }

                inicializarForm(new_color);
                actualizarPreferencias('actualizarColor', new_color);
            });

            $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                var $btn = $(this);

                if (sidebar_mini_active == 1) {
                    $('body').removeClass('sidebar-mini');
                    sidebar_mini_active = 0;
                    actualizarPreferencias('actualizarMenu', sidebar_mini_active);
                } else {
                    $('body').addClass('sidebar-mini');
                    sidebar_mini_active = 1;
                    actualizarPreferencias('actualizarMenu', sidebar_mini_active);
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function() {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function() {
                    clearInterval(simulateWindowResize);
                }, 1000);
            });

            $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                var $btn = $(this);
                if (tema_oscuro == 0) {
                    tema_oscuro = 1;
                    $('body').addClass('change-background');
                    setTimeout(function() {
                    $('body').removeClass('change-background');
                    $('body').removeClass('white-content');
                    }, 900);
                    $('.modal').addClass('modal-black');
                    actualizarPreferencias('actualizarTema', tema_oscuro);
                } else {
                    tema_oscuro = 0; 
                    $('body').addClass('change-background');
                    setTimeout(function() {
                    $('body').removeClass('change-background');
                    $('body').addClass('white-content');
                    }, 900);
                    $('.modal').removeClass('modal-black');
                    actualizarPreferencias('actualizarTema', tema_oscuro); 
                }
            });

            $('.light-badge').click(function() {
                $('body').addClass('white-content');
            });

            $('.dark-badge').click(function() {
                $('body').removeClass('white-content');
            });
        });
    });

    function inicializarForm(new_color){
        $form_control = $('.form-control');
        $checkbox = $('.form-check');
        $modal = $('.modal-content');
        $folder_tag = $('.folder-tag');
        $card_hover = $('.card-hover');
        $tabla = $('.table-themed');
        $card = $('.card-themed');

        if ($form_control.length != 0) {
            $form_control.attr('data', new_color);
        }

        if ($checkbox.length != 0) {
            $checkbox.attr('data', new_color);
        }

        if ($modal.length != 0) {
            $modal.attr('data', new_color);
        }

        if ($folder_tag.length != 0) {
            $folder_tag.attr('data', new_color);
        }

        if ($card_hover.length != 0) {
            $card_hover.attr('data', new_color);
        }

        if ($tabla.length != 0) {
            $tabla.attr('data', new_color);
        }

        if ($card.length != 0) {
            $card.attr('data', new_color);
        }
    }

    
</script>
