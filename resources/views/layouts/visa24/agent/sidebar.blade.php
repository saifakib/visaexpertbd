
<div class="list-group">
    <a href="{{ route('profile') }}" class="{{ Request::is('profile') ? 'active' : '' }} list-group-item list-group-item-action list-group-item-success link">Profile</a>
    <a href="{{ route('agent.viewVisa',Auth::user()->agent->agent_id) }}" class="{{ Request::is('agent/view-visa/*') ? 'active' : '' }} list-group-item list-group-item-action list-group-item-success link">View Visa</a>
    <a href="{{ route('agent.viewApplicant',Auth::user()->agent->agent_id) }}" class="{{ Request::is('agent/view-applicant/*') ? 'active' : '' }} list-group-item list-group-item-action list-group-item-success link">View Applicant</a>

</div>