@if (auth()->user()->isLead())
  @include('dashboard.lead.layouts.nav.sidebar')
@elseif(auth()->user()->isFacilitator())
  @include('dashboard.facilitator.layouts.nav.sidebar')
@else
  @include('dashboard.member.layouts.nav.sidebar')
@endif