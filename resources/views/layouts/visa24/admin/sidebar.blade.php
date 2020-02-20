<div class="list-group">
    @if(Request::is('admin*'))
        <a href="{{ route('admin.createVisaCategory') }}" class="{{ Request::is('admin/create-visa-category') ? 'active' : '' }} list-group-item list-group-item-action list-group-item-success link">Create Visa Category</a>
        <a href="{{ route('admin.createVisa') }}" class="{{ Request::is('admin/post-visa') ? 'active' : '' }} list-group-item list-group-item-action list-group-item-success link">Post A Visa</a>
        <a href="{{ route('admin.visaCategories') }}" class="{{ Request::is('admin/visa-categories') ? 'active' : '' }} list-group-item list-group-item-action list-group-item-success link">Visa Category</a>
        <a href="{{ route('admin.viewVisa') }}" class="{{ Request::is('admin/view-visa') ? 'active' : '' }} list-group-item list-group-item-action list-group-item-success link">View Visa</a>
        <a href="{{ route('admin.agents') }}" class="{{ Request::is('admin/agents') ? 'active' : '' }} list-group-item list-group-item-action list-group-item-success link">View Agent</a>
        <a href="{{ route('admin.candidates') }}" class="{{ Request::is('admin/candidates') ? 'active' : '' }} list-group-item list-group-item-action list-group-item-success link">View Candidate</a>
        <a href="{{ route('admin.contacts') }}" class="{{ Request::is('admin/contacts') ? 'active' : '' }} list-group-item list-group-item-action list-group-item-success link">View Contacts</a>
        <a href="{{ route('admin.media') }}" class="{{ Request::is('admin/medias') ? 'active' : '' }} list-group-item list-group-item-action list-group-item-success link">Social Media</a>

    @endif
</div>
