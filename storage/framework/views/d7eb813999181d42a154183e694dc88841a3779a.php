<!-- Schema -->
<script type="application/ld+json">
  {
    "@context" : "http://schema.org",
    "@type" : "Organization",
    "name" : "<?php echo $__env->yieldContent('pageTitle',  config('app.name')); ?>",
    "alternateName" : "ækiti",
    "sponsor" : "æternity",
    "email" : "contact@aekiti.com",
    "address" : "Ekiti, Nigeria",
    "image" : "<?php echo $__env->yieldContent('pageImage', config('app.url').'/assets/images/icons/icon-512x512.png'); ?>",
    "description" : "<?php echo $__env->yieldContent('pageDescription', 'A community of techies utilizing æternity technologies'); ?>",
    "url" : "<?php echo e(url()->current()); ?>",
    "logo": {
      "@type": "ImageObject",
      "text": "ækiti",
      "url": "https://aekiti.com/assets/images/web/brand/logo.png",
      "sameAs" : "https://aekiti.com/assets/images/icons/icon-512x512.png",
      "about": "ækiti logo",
      "height": "1023",
      "width": "1112"
    },
    "sameAs" : "https://www.youtube.com/channel/",
    "contactPoint" : [
      {
        "@type" : "ContactPoint",
        "contactType" : "Lead",
        "name" : "jeremih",
        "image" : "https://aekiti.com/assets/images/web/team/emmanuel_joseph_jet.png",
        "email" : "jet@aekiti.com",
        "availableLanguage" : ["English",],
        "sameAs" : "https://t.me/"
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
<?php /**PATH C:\Users\mihz\Desktop\aekiti\resources\views/modules/schema.blade.php ENDPATH**/ ?>