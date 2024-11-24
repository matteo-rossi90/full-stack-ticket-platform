<aside class="aside-body">
    <div class="my-4 d-flex flex-column align-self-center">
        <ul class="mx-3 justify-self-center">
            <li>
                <a href="{{route('admin.home')}}" class="d-flex gap-3 mx-4">
                    <i class="bi bi-speedometer2"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{route('admin.tickets.index')}}" class="d-flex gap-3 mx-4">
                    <i class="bi bi-ticket-perforated"></i>
                    Ticket
                </a>
            </li>
            <li>
                <a href="{{route('admin.tickets.create')}}" class="d-flex gap-3 mx-4">
                    <i class="bi bi-plus-circle"></i>
                    Aggiungi
                </a>
            </li>
            <li>
                <a href="{{route('admin.operators.index')}}" class="d-flex gap-3 mx-4">
                    <i class="bi bi-people"></i>
                    Operatori
                </a>
            </li>
            <li>
                <a href="{{route('admin.categories.index')}}" class="d-flex gap-3 mx-4">
                    <i class="bi bi-bookmarks"></i>
                    Categorie
                </a>
            </li>
        </ul>
    </div>
</aside>
