<li class="nav-item {{ Request::is('departamentos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('departamentos.index') }}">
        <i class="fa fa-list"></i>
        <p>Departamentos</p>
    </a>
</li>

<li class="nav-item {{ Request::is('ciudads*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('ciudads.index') }}">
        <i class="fa fa-solid fa-building"></i>
        <p>Ciudades</p>
    </a>
</li>


<li class="nav-item {{ Request::is('rubros*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('rubros.index') }}">
        <i class="fa fa-shopping-bag"></i>
        <p>Rubros</p>
    </a>

</li>


<li class="nav-item {{ Request::is('encuestas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('encuestas.index') }}">
       <i class="fa fa-list" ></i>
        <p>Encuestas</p>
    </a>
</li>
<li class="nav-item {{ Request::is('resultados*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('resultados.index') }}">
       <i class="fa fa-list" ></i>
        <p>Resultados</p>
    </a>
</li>


