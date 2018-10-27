<?php 
if( $_SESSION['idRole'] == 0) ) {
print(
'<div class="app-body">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="main.html"><i class="icon-speedometer"></i> Home</a>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-bag"></i> Empleados</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-bag"></i> Agregar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-wallet"></i> Informes</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="i#"><i class="icon-wallet"></i> Fertilidad de Reproductores</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-notebook"></i> Fertilidad de Reproductoras</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-notebook"></i> Reproducción</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-basket"></i> Instalaciones</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="i#"><i class="icon-basket-loaded"></i> Agregar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i> Medicamentos</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="i#"><i class="icon-user"></i> En existencia</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-user-following"></i> Nuevos</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-user-following"></i> Aplicar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-pie-chart"></i> Reproductoras</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="i#"><i class="icon-chart"></i> Partos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-chart"></i> Periodos de gestación</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-chart"></i> Periodos de celo</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-title">
                        Artículos
                    </li>
                    <li class="nav-title">
                        Examenes
                    </li>
                    <li class="nav-title">
                        Porcinos
                    </li>
                    <li class="nav-title">
                        Razas
                    </li>
                </ul>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>
');
} else if($_SESSION['idRole'] == 10) {	
print('
<div class="app-body">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="main.html"><i class="icon-speedometer"></i> Home</a>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-bag"></i> Articulos</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-bag"></i> Agregar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-wallet"></i> Reproducción</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="i#"><i class="icon-wallet"></i> Reproductoras</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-notebook"></i> Reproductores</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-basket"></i> Examenes</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="i#"><i class="icon-basket-loaded"></i> Aplicar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i> Instalación</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="i#"><i class="icon-user"></i> Agregar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-pie-chart"></i> Medicamentos</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="i#"><i class="icon-chart"></i> Inventario</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-pie-chart"></i> Porcinos</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="i#"><i class="icon-chart"></i>Agregar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-pie-chart"></i> Razas</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="i#"><i class="icon-chart"></i> Agregar</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>
');
} else if ($_SESSION['idRole'] == 11){
print('
    <div class="app-body">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="main.html"><i class="icon-speedometer"></i> Home</a>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-bag"></i> Alarma</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-bag"></i> Agregar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-title">
                        Porcinos
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-wallet"></i> Reproducción</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="i#"><i class="icon-wallet"></i> Reproductores</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-notebook"></i> Reprodcutoras</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>

');	
}