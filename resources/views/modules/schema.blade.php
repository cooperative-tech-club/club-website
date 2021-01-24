<!-- Schema -->
<script type="application/ld+json">
  {
    "@context" : "http://schema.org",
    "@type" : "Organization",
    "name" : "@yield('pageTitle',  config('app.name'))",
    "alternateName" : "ækiti",
    "sponsor" : "æternity",
    "email" : "contact@aekiti.com",
    "address" : "Ekiti, Nigeria",
    "image" : "@yield('pageImage', config('app.url').'/assets/images/icons/icon-512x512.png')",
    "description" : "@yield('pageDescription', 'A community of techies utilizing æternity technologies')",
    "url" : "{{ url()->current() }}",
    "logo": {
      "@type": "ImageObject",
      "text": "ækiti",
      "url": "https://aekiti.com/assets/images/web/brand/logo.png",
      "sameAs" : "https://aekiti.com/assets/images/icons/icon-512x512.png",
      "about": "ækiti logo",
      "height": "1023",
      "width": "1112"
    },
    "sameAs" : "https://www.youtube.com/channel/UCISZ6H0Zb-ndRLSgcR1sH_g",
    "contactPoint" : [
      {
        "@type" : "ContactPoint",
        "contactType" : "Lead",
        "name" : "Emmanuel Joseph(JET)",
        "image" : "https://aekiti.com/assets/images/web/team/emmanuel_joseph_jet.png",
        "email" : "jet@aekiti.com",
        "availableLanguage" : ["English","Yoruba"],
        "sameAs" : "https://t.me/emmanueljet"
      },
      {
        "@type" : "ContactPoint",
        "contactType" : "Co-Lead",
        "name" : "Jesulonimi Akingbesote",
        "image" : "https://aekiti.com/assets/images/web/team/jesulonimi_akingbesote.png",
        "email" : "lonimi@aekiti.com",
        "availableLanguage" : ["English","Yoruba"],
        "sameAs" : "https://t.me/jesulonimi"
      }
    ]
  }
</script>
