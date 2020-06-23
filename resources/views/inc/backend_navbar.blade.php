<div class="container">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Dashboard</h5>
        @auth
            <nav class="my-2 my-md-0 mr-md-3">
                <span class="badge badge-secondary">Loged in as:  {{auth()->user()->name}}</span>
            </nav>
        @endauth
      </div>
</div>