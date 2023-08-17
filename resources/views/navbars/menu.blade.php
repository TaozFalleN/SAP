<div class="sidebar" data="{{ $perfil->usu_color_menu }}">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="javascript:void(0)" class="simple-text logo-mini">
            </a>
            <a href="javascript:void(0)" class="simple-text logo-normal pt-3">
                Los Angeles
            </a>
        </div>
        <ul class="nav">
            <li class="{{ Route::current()->getName() == 'inicio' ? 'active' : '' }}">
                <a href="{{ url('inicio') }}">
                <i class="fas fa-home fa-lg"></i>
                <p style="font-size: 12px;">Inicio</p>
                </a>
            </li>
            @foreach($menus as $index => $menu)
                @if(count($menu->itemsMenu) > 0) 
                @php
                    $temp = array_search(Route::current()->getName(), array_column($menu->itemsMenu->toArray(), 'ite_ruta')) !== false ? true : false;
                @endphp
                <li id="men_{{$index}}" class="{{  $temp ? 'active active-text' : '' }}">
                    <a data-toggle="collapse" href="#menu_{{$index}}">
                        <i class="{{ $menu->men_font_icon }}"></i>
                        <p style="font-size: 12px;">
                            <b>{{ $menu->men_nombre }}</b>
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="menu_{{$index}}">
                        <ul class="nav">
                            @foreach($menu->itemsMenu as $item)
                            <li>
                                <a href="{{ url($item->ite_ruta) }}">
                                    <span class="sidebar-mini-icon">P</span>
                                    <span class="sidebar-normal"> {{ $item->ite_nombre }} </span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
               @endif 
            @endforeach
        </ul>
    </div>
</div>

               