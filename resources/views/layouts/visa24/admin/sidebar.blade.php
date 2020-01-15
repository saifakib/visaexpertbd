<div class="list-group">
    @if(Request::is('admin*'))
        <a href="{{ route('admin.createVisaCategory') }}" class="{{ Request::is('admin/create-visa-category') ? 'active' : '' }} list-group-item list-group-item-action list-group-item-success link">Create Visa</a>
        <a href="{{ route('admin.visaCategories') }}" class="{{ Request::is('admin/visa-categories') ? 'active' : '' }} list-group-item list-group-item-action list-group-item-success link">Visa Category</a>
        <a href="#" class="list-group-item list-group-item-action list-group-item-success link">Other</a>
    @endif
</div>
