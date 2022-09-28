<nav class="main-sidebar ps-menu">

    <div class="sidebar-toggle action-toggle">
        <a href="#">
            <i class="fas fa-bars"></i>
        </a>
    </div>

    <div class="sidebar-opener action-toggle">
        <a href="#">
            <i class="ti-angle-right"></i>
        </a>
    </div>

    <div class="sidebar-header">
        <div class="text">Inventory</div>
        <div class="close-sidebar action-toggle">
            <i class="ti-close"></i>
        </div>
    </div>

    <div class="sidebar-content">

        <ul>

            <li class="@if (Request::routeIs('dashboard')) {{ 'active' }} @endif">
                <a href="{{ route('dashboard') }}" class="link">
                    <i class="ti-bar-chart"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            @can('admin_only')
            <li class="@if (Request::routeIs('users.index') ||
                Request::routeIs('users.create')    ||
                Request::routeIs('users.edit')      ||
                Request::routeIs('roles.index')     ||
                Request::routeIs('roles.create')    ||
                Request::routeIs('roles.edit')      ||
                Request::routeIs('users.search')    ||
                Request::routeIs('users.find')      ||
                Request::routeIs('users.show')      ||
                Request::routeIs('users.password')  ||
                Request::routeIs('audits.index')    ||
                Request::routeIs('audits.find')     ||
                Request::routeIs('audits.show'))    {{ 'active open' }} @endif">
                <a href="#" class="main-menu has-dropdown">
                    <i class="ti-settings"></i>
                    <span>Configurações</span>
                </a>
                <ul class="sub-menu @if (Request::routeIs('users.index') ||
                    Request::routeIs('users.create')    ||
                    Request::routeIs('users.edit')      ||
                    Request::routeIs('roles.index')     ||
                    Request::routeIs('roles.create')    ||
                    Request::routeIs('roles.edit')      ||
                    Request::routeIs('users.search')    ||
                    Request::routeIs('users.find')      ||
                    Request::routeIs('users.show')      ||
                    Request::routeIs('users.password')  ||
                    Request::routeIs('audits.index')    ||
                    Request::routeIs('audits.find')     ||
                    Request::routeIs('audits.show'))    {{ 'expand' }} @endif">
                    <li class="@if (Request::routeIs('users.index') || Request::routeIs('users.create') || Request::routeIs('users.edit')) {{ 'active' }} @endif">
                        <a href="{{ route('users.index') }}" class="link">
                            <span>Usuários</span>
                        </a>
                    </li>
                    <li class="@if (Request::routeIs('roles.index') || Request::routeIs('roles.create') || Request::routeIs('roles.edit')) {{ 'active' }} @endif">
                        <a href="{{ route('roles.index') }}" class="link">
                            <span>Funções</span>
                        </a>
                    </li>
                    <li class="@if (Request::routeIs('users.search') ||
                        Request::routeIs('users.find') ||
                        Request::routeIs('users.show') ||
                        Request::routeIs('users.password')) {{ 'active' }} @endif">
                        <a href="{{ route('users.search') }}" class="link">
                            <span>Senhas</span>
                        </a>
                    </li>
                    <li class="@if (Request::routeIs('audits.index') ||
                        Request::routeIs('audits.find') ||
                        Request::routeIs('audits.show')) {{ 'active' }} @endif">
                        <a href="{{ route('audits.index') }}" class="link">
                            <span>Auditoria</span>
                        </a>
                    </li>
                </ul>
            </li>
            @endcan

            @can('view', App\Models\Supplier::class)
            <li class="@if (Request::routeIs('suppliers.index')  ||
                            Request::routeIs('suppliers.create') ||
                            Request::routeIs('suppliers.edit')) {{ 'active' }} @endif">
                <a href="{{ route('suppliers.index') }}" class="link">
                    <i class="ti-truck"></i>
                    <span>Fornecedores</span>
                </a>
            </li>
            @endcan

            @can('view', App\Models\Customer::class)
            <li class="@if (Request::routeIs('customers.index') ||
                Request::routeIs('customers.create') ||
                Request::routeIs('customers.edit'))) {{ 'active open' }} @endif">
                <a href="#" class="main-menu has-dropdown">
                    <i class="ti-user"></i>
                    <span>Clientes</span>
                </a>
                <ul class="sub-menu @if (Request::routeIs('customers.index') ||
                    Request::routeIs('customers.create') ||
                    Request::routeIs('customers.edit'))) {{ 'expand' }} @endif">
                    <li class="@if (Request::routeIs('customers.index') || Request::routeIs('customers.create') || Request::routeIs('customers.edit')) {{ 'active' }} @endif">
                        <a href="{{ route('customers.index') }}" class="link">
                            <span>Clientes</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="" class="link">
                            <span>Compras</span>
                        </a>
                    </li>
                    <li class=""">
                        <a href="" class="link">
                            <span>Pagamentos</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="" class="link">
                            <span>Relatórios</span>
                        </a>
                    </li>
                </ul>
            </li>
            @endcan

            @can('view', App\Models\Unit::class)
            <li class="@if (Request::routeIs('units.index')  ||
                            Request::routeIs('units.create') ||
                            Request::routeIs('units.edit')) {{ 'active' }} @endif">
                <a href="{{ route('units.index') }}" class="link">
                    <i class="ti-ruler-pencil"></i>
                    <span>Unidades</span>
                </a>
            </li>
            @endcan

            @can('view', App\Models\Category::class)
            <li class="@if (Request::routeIs('categories.index')  ||
                            Request::routeIs('categories.create') ||
                            Request::routeIs('categories.edit')) {{ 'active' }} @endif">
                <a href="{{ route('categories.index') }}" class="link">
                    <i class="ti-pencil-alt"></i>
                    <span>Categorias</span>
                </a>
            </li>
            @endcan

            @can('view', App\Models\Product::class)
            <li class="@if (Request::routeIs('products.index')  ||
                            Request::routeIs('products.create') ||
                            Request::routeIs('products.edit')) {{ 'active' }} @endif">
                <a href="{{ route('products.index') }}" class="link">
                    <i class="ti-package"></i>
                    <span>Produtos</span>
                </a>
            </li>
            @endcan

            @can('view', App\Models\Purchase::class)
            <li class="@if (Request::routeIs('purchases.index')  ||
                            Request::routeIs('purchases.create') ||
                            Request::routeIs('purchases.edit')) {{ 'active' }} @endif">
                <a href="{{ route('purchases.index') }}" class="link">
                    <i class="ti-shopping-cart"></i>
                    <span>Compras</span>
                </a>
            </li>
            @endcan

        </ul>

    </div>

</nav>
