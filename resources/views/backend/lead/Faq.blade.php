<!Doctype html>
<html>
<head>

<link rel="stylesheet"  href="{{'../bootsrap/jquery.js'}}">
</head>
<body>
    <div class="schema-faq-code" itemscope="" itemtype="https://schema.org/FAQPage">
    <div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question" class="faq-question">
        <h3 itemprop="name" class="faq-q">Can anyone join this club?</h3>
        <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
             <p itemprop="text" class="faq-a">Yes, the club is not restricted to only IT and CS students</p>
        </div>
    </div>

    <div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question" class="faq-question">
        <h3 itemprop="name" class="faq-q">What are the prerequisites of taking part in a projects.</h3>
        <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
             <p itemprop="text" class="faq-a">The will to learn and dedication</p>
        </div>
    </div>

    <div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question" class="faq-question">
        <h3 itemprop="name" class="faq-q">Can I invite someone?</h3>
        <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
             <p itemprop="text" class="faq-a">We sure love that</p>
        </div>
    </div>

    <div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question" class="faq-question">
        <h3 itemprop="name" class="faq-q">Will there be hackathons?</h3>
        <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
             <p itemprop="text" class="faq-a">Of course.</p>
        </div>
    </div>

    <div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question" class="faq-question">
        <h3 itemprop="name" class="faq-q">Which field should I take take part in.</h3>
        <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
             <p itemprop="text" class="faq-a">You can join several learning teams to find out more and settle for one you are passionate about</p>
        </div>
    </div>
</div>





<style>
.schema-faq-code {
border: 1px solid #000080;
border-radius: 10px;
background-color:#f09040;
  overflow:hidden;
}
.schema-faq-code .faq-q {
font-size: 14px;
font-weight: bold;
margin: 0;
padding: 12px 56px 12px 12px;
line-height: 1.4;
cursor: pointer;
position: relative;
border-bottom: 1px solid #dedee0;
-webkit-touch-callout: none; 
-webkit-user-select: none;
-khtml-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none; 
}
.faq-q:after {
    content: "+";
    position: absolute;
    top: 50%;
    right: 0;
    width: 56px;
    text-align: center;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    font-weight: bold;
    color: #000;
    font-size: 20px;
}
.faq-q.faq-q-open:after {
    content: "-";	
}
.faq-a {
margin: 0;
padding: 12px;
background-color:#fff;
font-size: 14px;
line-height: 1.4;
  border-bottom: 1px solid #dedee0;
  display: none;
}
.schema-faq-code .faq-question:last-child .faq-a {
  border-bottom:0px;
}

</style>

<script>
Query('.faq-q').click(function(){
	if (jQuery(this).siblings().find('.faq-a').is(':visible')) {
		jQuery(this).removeClass('faq-q-open');
		jQuery(this).siblings().find('.faq-a').removeClass('faq-a-open').slideUp();
} 
else {
	jQuery(this).addClass('faq-q-open');
	jQuery(this).siblings().find('.faq-a').addClass('faq-a-open').slideDown();
	}
})
</script>
</html>