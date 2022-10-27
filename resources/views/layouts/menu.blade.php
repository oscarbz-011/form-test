
<li class="nav-item {{ Request::is('encuestas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('encuestas.index') }}">
        <i class="fa-solid fa-table-list"></i>
        <p>Encuestas</p>
    </a>
</li>
<li class="nav-item {{ Request::is('encuestados*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('encuestados.index') }}">
        <i class="fa-solid fa-user"></i>
        <p>Encuestados</p>
    </a>
</li>

<li class="nav-item {{ Request::is('graficos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('graficos.index') }}">
        <i class="fa-solid fa-chart-pie"></i>
        <p>Graficos</p>
    </a>
</li>

