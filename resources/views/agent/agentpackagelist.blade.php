<x-app-layout>
    @include('agent.agentheader')
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
            <button class="btn btn-dark" id="menu-toggle"><i class="bi bi-list"></i></button>
        </nav>
        
        @include('agent.agentpackages')
    </div>
    @include('agent.agentfooter')
</x-app-layout>