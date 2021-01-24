@if (auth()->user()->isLead())
  @include('dashboard.lead.layouts.nav.navbar')
@elseif(auth()->user()->isFacilitator())
  @include('dashboard.facilitator.layouts.nav.navbar')
@else
  @include('dashboard.member.layouts.nav.navbar')
@endif