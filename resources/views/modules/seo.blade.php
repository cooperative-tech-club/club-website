<meta name="google-site-verification" content="8GzDQXvdjjclPdOuclBYeUykFzK04HLaGpu_MFQyFXI" />
<meta name="author" content="Emmanuel Joseph(JET)"/>
<meta name="publicKey" content="ak_2vJ9zrUWCsZNVd2Q6cYxhmBoEZ1ewTSAhoQ81L9pnTyh2tJBeJ">
<meta name="aens" content="aeternityekiti.chain">
<meta name="title" content="@yield('pageTitle', config('app.name'))">
<meta name="keywords" content="aekiti, aternity ekiti, {{ config('app.name') }}, {{ config('app.nick') }}, aeternity developers, aekiti developers, ækiti developers, devstudyjæm, devstudyjam, developer study jæm, developer study jam, ekiti state, ekiti, ondo, ondo state, techhub eksu, techhub, students, technology, nigeria, emmanueljet, emmanuel joseph, jet, emmanuel joseph(jet), jesulonimi akingbesote, #devstudyjaem"/>
<meta name="description" content="@yield('pageDescription', 'A community of techies utilizing æternity technologies')">
<link rel="canonical" href="{{ config('app.url') }}" />

@include('modules.schema')

<!-- Facebook -->
<meta property="fb:page_id" content="370238310268309" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:title" content="@yield('pageTitle', config('app.name'))" />
<meta property="og:description" content="@yield('pageDescription', 'A community of techies utilizing æternity technologies')" />
<meta property="og:image" content="@yield('pageImage', config('app.url').'/assets/images/icons/icon-512x512.png')" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image:alt" content="{{ config('app.nick') }}" />

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ url()->current() }}">
<meta name="twitter:site" content="@AeternityEkiti">
<meta name="twitter:creator" content="@emmanuelJet_">
<meta name="twitter:title" content="@yield('pageTitle', config('app.name'))">
<meta name="twitter:description" content="@yield('pageDescription', 'A community of techies utilizing æternity technologies')">
<meta name="twitter:image:src" content="@yield('pageImage', config('app.url').'/assets/images/icons/icon-512x512.png')">
<meta name="twitter:image:alt" content="{{ config('app.nick') }}">