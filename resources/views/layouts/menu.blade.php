<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">PERSONAL</li>
                <li>
                    <a class="has-arrow" href="{!! url('/home') !!}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
                </li>
                @can('edit')
                <li>
                    <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-sitemap"></i><span class="hide-menu">Sections</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{!! url('/homeportal_edit/1') !!}">Home</a></li>
                        <li><a href="{!! url('/feedbacks') !!}">Reviews</a></li>
                        {{-- <li><a href="{!! url('/homeportal_edit/1') !!}">Room Search</a></li>
                        <li><a href="{!! url('/homeportal_edit/1') !!}">News</a></li> --}}
                        <li><a href="{!! url('/edit_instutional/1') !!}">About</a></li>
                        <li><a href="{!! url('/edit_terms/1') !!}">Terms</a></li>
                        <li><a href="{!! url('/contacts_edit/1') !!}">Contact</a></li>
                        {{-- <li><a href="{!! url('/form_novo_role') !!}">Users Types</a></li>
                        <li><a href="{!! url('/form_novo_permissao') !!}">Permissions</a></li> --}}
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Landlord Section</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{!! url('/reasons') !!}">Reasons</a></li>
                        <li><a href="{!! url('/prices') !!}">Plans</a></li>
                        <li><a href="{!! url('/processes') !!}">Steps</a></li>
                    </ul>
                </li>
                @endcan
                  @can('Admin')
                <li>
                    <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Users</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{!! url('/listar_usuarios') !!}">List Users</a></li>
                        <li><a href="{!! url('/form_novo_role') !!}">Users Types</a></li>
                        <!-- <li><a href="{!! url('/form_novo_permissao') !!}">Permissions</a></li> -->
                    </ul>
                </li>
                @endcan
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>