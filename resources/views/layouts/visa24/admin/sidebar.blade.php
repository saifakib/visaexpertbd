<div class="list-group">
    @if(Request::is('admin*'))
        <a href="{{ route('admin.createVisaCategory') }}" class="{{ Request::is('admin/create-visa-category') ? 'active' : '' }} list-group-item list-group-item-action list-group-item-success link">Create Visa</a>
        <a href="{{ route('admin.visaCategories') }}" class="{{ Request::is('admin/visa-categories') ? 'active' : '' }} list-group-item list-group-item-action list-group-item-success link">Visa Category</a>
        <a href="{{ route('admin.agents') }}" class="{{ Request::is('admin/agents') ? 'active' : '' }} list-group-item list-group-item-action list-group-item-success link">View Agent</a>
        <a href="{{ route('admin.candidates') }}" class="{{ Request::is('admin/candidates') ? 'active' : '' }} list-group-item list-group-item-action list-group-item-success link">View Candidate</a>

    @endif
</div>
