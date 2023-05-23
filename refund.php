<?php 
include("components/connection.php");
session_start();
if (isset($_SESSION['email1'])) {
   $email = $_SESSION['email1'];
} else {
   $email = '';
};
?>

<!doctype html><html class="no-js" lang="en" dir="ltr" >
  <head>
	<!-- Added by AVADA SEO Suite -->
	






<script>window.FPConfig = {};window.FPConfig.ignoreKeywords=["/cart","/account"]</script>




<script>
const lightJsExclude = [];
</script>





<script>
class LightJsLoader{constructor(e){this.jQs=[],this.listener=this.handleListener.bind(this,e),this.scripts=["default","defer","async"].reduce(((e,t)=>({...e,[t]:[]})),{});const t=this;e.forEach((e=>window.addEventListener(e,t.listener,{passive:!0})))}handleListener(e){const t=this;return e.forEach((e=>window.removeEventListener(e,t.listener))),"complete"===document.readyState?this.handleDOM():document.addEventListener("readystatechange",(e=>{if("complete"===e.target.readyState)return setTimeout(t.handleDOM.bind(t),1)}))}async handleDOM(){this.suspendEvent(),this.suspendJQuery(),this.findScripts(),this.preloadScripts();for(const e of Object.keys(this.scripts))await this.replaceScripts(this.scripts[e]);for(const e of["DOMContentLoaded","readystatechange"])await this.requestRepaint(),document.dispatchEvent(new Event("lightJS-"+e));document.lightJSonreadystatechange&&document.lightJSonreadystatechange();for(const e of["DOMContentLoaded","load"])await this.requestRepaint(),window.dispatchEvent(new Event("lightJS-"+e));await this.requestRepaint(),window.lightJSonload&&window.lightJSonload(),await this.requestRepaint(),this.jQs.forEach((e=>e(window).trigger("lightJS-jquery-load"))),window.dispatchEvent(new Event("lightJS-pageshow")),await this.requestRepaint(),window.lightJSonpageshow&&window.lightJSonpageshow()}async requestRepaint(){return new Promise((e=>requestAnimationFrame(e)))}findScripts(){document.querySelectorAll("script[type=lightJs]").forEach((e=>{e.hasAttribute("src")?e.hasAttribute("async")&&e.async?this.scripts.async.push(e):e.hasAttribute("defer")&&e.defer?this.scripts.defer.push(e):this.scripts.default.push(e):this.scripts.default.push(e)}))}preloadScripts(){const e=this,t=Object.keys(this.scripts).reduce(((t,n)=>[...t,...e.scripts[n]]),[]),n=document.createDocumentFragment();t.forEach((e=>{const t=e.getAttribute("src");if(!t)return;const s=document.createElement("link");s.href=t,s.rel="preload",s.as="script",n.appendChild(s)})),document.head.appendChild(n)}async replaceScripts(e){let t;for(;t=e.shift();)await this.requestRepaint(),new Promise((e=>{const n=document.createElement("script");[...t.attributes].forEach((e=>{"type"!==e.nodeName&&n.setAttribute(e.nodeName,e.nodeValue)})),t.hasAttribute("src")?(n.addEventListener("load",e),n.addEventListener("error",e)):(n.text=t.text,e()),t.parentNode.replaceChild(n,t)}))}suspendEvent(){const e={};[{obj:document,name:"DOMContentLoaded"},{obj:window,name:"DOMContentLoaded"},{obj:window,name:"load"},{obj:window,name:"pageshow"},{obj:document,name:"readystatechange"}].map((t=>function(t,n){function s(n){return e[t].list.indexOf(n)>=0?"lightJS-"+n:n}e[t]||(e[t]={list:[n],add:t.addEventListener,remove:t.removeEventListener},t.addEventListener=(...n)=>{n[0]=s(n[0]),e[t].add.apply(t,n)},t.removeEventListener=(...n)=>{n[0]=s(n[0]),e[t].remove.apply(t,n)})}(t.obj,t.name))),[{obj:document,name:"onreadystatechange"},{obj:window,name:"onpageshow"}].map((e=>function(e,t){let n=e[t];Object.defineProperty(e,t,{get:()=>n||function(){},set:s=>{e["lightJS"+t]=n=s}})}(e.obj,e.name)))}suspendJQuery(){const e=this;let t=window.jQuery;Object.defineProperty(window,"jQuery",{get:()=>t,set(n){if(!n||!n.fn||!e.jQs.includes(n))return void(t=n);n.fn.ready=n.fn.init.prototype.ready=e=>{e.bind(document)(n)};const s=n.fn.on;n.fn.on=n.fn.init.prototype.on=function(...e){if(window!==this[0])return s.apply(this,e),this;const t=e=>e.split(" ").map((e=>"load"===e||0===e.indexOf("load.")?"lightJS-jquery-load":e)).join(" ");return"string"==typeof e[0]||e[0]instanceof String?(e[0]=t(e[0]),s.apply(this,e),this):("object"==typeof e[0]&&Object.keys(e[0]).forEach((n=>{delete Object.assign(e[0],{[t(n)]:e[0][n]})[n]})),s.apply(this,e),this)},e.jQs.push(n),t=n}})}}new LightJsLoader(["keydown","mousemove","touchend","touchmove","touchstart","wheel"]);
</script>





	<!-- /Added by AVADA SEO Suite -->
<script>
window.KiwiSizing = window.KiwiSizing === undefined ? {} : window.KiwiSizing;
KiwiSizing.shop = "peachm.myshopify.com";


</script>
<script type="text/javascript">	var __wzrk_account_id = "44K-Z6K-6Z5Z";
	var __wzrk_region = "";
	var __wzrk_version = 2;
	var __wzrk_web_push_enabled = true;
	var __wzrk_webhook_enabled = "true";
	var __wzrk_variables = "shop_url,shop_domain,shop_email,shop_money_format,product_json,product_title,product_price,cart_json,cart_item_count,cart_total_price";
	var __wzrk_shop_url = "https://peachmode.com";
	var __wzrk_shop_domain = "peachmode.com";
	var __wzrk_shop_email = "contact@peachmode.com";
	var __wzrk_shop_money_format = '<span class="money">₹{{amount}}</span>';
	var __wzrk_shop_name ="Peachmode";
	var __wzrk_charged_currency = "INR";
	var __wzrk_customer_name = "";
	var __wzrk_customer_identity = "";
	var __wzrk_customer_email = "";
	var __wzrk_customer_phone = "";
	
	
	
window.clevertapApp = {
        config: {
          	currency: 'INR',
            meta : {
                title : 'Refund policy',
                template : '',
                url : 'https://peachmode.com/policies/refund-policy',
                type : 'policy',
            },
            routes: {
                customer: {
                    account: '/account',
                    login: '/account/login',
                    logout: '/account/logout',
                    register: '/account/register'
                },
                cart: {
                    list: '/cart',
                    add: '/cart/add',
                    clear: '/cart/clear',
                    update: '/cart/change',
                    change: '/cart/change',
                }    
            }
        }
    };

    

    clevertapApp.frame = {
        hide: function(){
            window.document.body.style.overflow = 'unset';
            window.document.getElementById('clevertap-frame').style.display = 'none';
        }
    };
if (localStorage) {
	localStorage.setItem("WZRK_SHOP_INFO", "{ \"acct_id\" : \"44K-Z6K-6Z5Z\" , \"region\" : \"\" , \"webPushEnabled\" : true , \"webhookEnabled\" : true}");
}</script><style>
  #clevertap-frame{
  	position: fixed;
    top: 0;
    left:0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    min-width: 100vw;
  }
</style>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, height=device-height, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="theme-color" content="#ffffff">

    <title>Refund policy</title><link rel="canonical" href="https://peachmode.com/policies/refund-policy"><link rel="shortcut icon" href="img/1.png"><link rel="preconnect" href="https://cdn.shopify.com">
    <link rel="dns-prefetch" href="https://productreviews.shopifycdn.com">
    <link rel="dns-prefetch" href="https://www.google-analytics.com"><link rel="preconnect" href="https://fonts.shopifycdn.com" crossorigin><link rel="preload" as="style" href="//cdn.shopify.com/s/files/1/0637/4834/1981/t/4/assets/theme.aio.min.css?v=41317135448036212481669276710">
    <link rel="preload" as="script" href="//cdn.shopify.com/s/files/1/0637/4834/1981/t/4/assets/vendor.aio.min.js?v=150683728779720575551669276710">
    <link rel="preload" as="script" href="//cdn.shopify.com/s/files/1/0637/4834/1981/t/4/assets/theme.aio.min.js?v=67881326845666540201669276710"><script>
// Google Tag Manager
window.dataLayer = window.dataLayer || [];
</script>
    
    <meta property="og:type" content="website">
  <meta property="og:title" content="Refund policy"><meta property="og:image" content="http://cdn.shopify.com/s/files/1/0637/4834/1981/files/Peachmode_Logo.png?v=1649671323">
  <meta property="og:image:secure_url" content="https://cdn.shopify.com/s/files/1/0637/4834/1981/files/Peachmode_Logo.png?v=1649671323">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="628"><meta property="og:url" content="https://peachmode.com/policies/refund-policy">
<meta property="og:site_name" content="Peachmode"><meta name="twitter:card" content="summary"><meta name="twitter:title" content="Refund policy">
  <meta name="twitter:description" content="Refund policy"><meta name="twitter:image" content="https://cdn.shopify.com/s/files/1/0637/4834/1981/files/Peachmode_Logo_1200x1200_crop_center.png?v=1649671323">
  <meta name="twitter:image:alt" content="peachmode.com">
    


  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
  "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "https://peachmode.com"
    }]
  }
  </script>

    <link rel="preload" href="https://fonts.shopifycdn.com/itc_caslon_no_224/itccaslonno224_n4.bcb2bf5af4b45921434d7417dc9de15d5a1006f6.woff2?h1=cGVhY2htb2RlLmNvbQ&h2=cGVhY2htLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=ccfeacb3060731732f311df105728be4bde3249bc094c9c02aaffeef765a9902" as="font" type="font/woff2" crossorigin><link rel="preload" href="https://fonts.shopifycdn.com/avenir_next/avenirnext_n4.7fd0287595be20cd5a683102bf49d073b6abf144.woff2?h1=cGVhY2htb2RlLmNvbQ&h2=cGVhY2htLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=203a94c54a698cfd1007aac09fc0ef1564055aab89d03a430e277d7242277594" as="font" type="font/woff2" crossorigin><style>
  /* Typography (heading) */
  @font-face {
  font-family: "ITC Caslon No 224";
  font-weight: 400;
  font-style: normal;
  font-display: swap;
  src: url("https://fonts.shopifycdn.com/itc_caslon_no_224/itccaslonno224_n4.bcb2bf5af4b45921434d7417dc9de15d5a1006f6.woff2?h1=cGVhY2htb2RlLmNvbQ&h2=cGVhY2htLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=ccfeacb3060731732f311df105728be4bde3249bc094c9c02aaffeef765a9902") format("woff2"),
       url("https://fonts.shopifycdn.com/itc_caslon_no_224/itccaslonno224_n4.405c142f0c9dca6af62eb394674784c2506ee02b.woff?h1=cGVhY2htb2RlLmNvbQ&h2=cGVhY2htLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=ab8db8a826fe3df3e007d943868d9411e149c73191ccdd9430a77fc35578d8d5") format("woff");
}

@font-face {
  font-family: "ITC Caslon No 224";
  font-weight: 400;
  font-style: italic;
  font-display: swap;
  src: url("https://fonts.shopifycdn.com/itc_caslon_no_224/itccaslonno224_i4.494d3b7e3dbb60dbc0e7c3ba158d53fa0b309bf1.woff2?h1=cGVhY2htb2RlLmNvbQ&h2=cGVhY2htLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=e5867e4c316ac410c185b2a159b32410fa72b0ac0b889831a67a8377c4152445") format("woff2"),
       url("https://fonts.shopifycdn.com/itc_caslon_no_224/itccaslonno224_i4.ab9256e1db8cfa6fae1765c06ac14b9d7ba299a1.woff?h1=cGVhY2htb2RlLmNvbQ&h2=cGVhY2htLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=ac1fe0d4f6f01d38b0eae6a03ab58e191d6f237628ebeb4eb4b33289a4476be8") format("woff");
}

/* Typography (body) */
  @font-face {
  font-family: "Avenir Next";
  font-weight: 400;
  font-style: normal;
  font-display: swap;
  src: url("https://fonts.shopifycdn.com/avenir_next/avenirnext_n4.7fd0287595be20cd5a683102bf49d073b6abf144.woff2?h1=cGVhY2htb2RlLmNvbQ&h2=cGVhY2htLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=203a94c54a698cfd1007aac09fc0ef1564055aab89d03a430e277d7242277594") format("woff2"),
       url("https://fonts.shopifycdn.com/avenir_next/avenirnext_n4.a26a334a0852627a5f36b195112385b0cd700077.woff?h1=cGVhY2htb2RlLmNvbQ&h2=cGVhY2htLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=7e0993e2c3c4353677bf8c982d450d5918894dd4123397e51e93d1c1ebc7abff") format("woff");
}

@font-face {
  font-family: "Avenir Next";
  font-weight: 400;
  font-style: italic;
  font-display: swap;
  src: url("https://fonts.shopifycdn.com/avenir_next/avenirnext_i4.f1583d9f457b68e44fbda187a48b4096d547d7f4.woff2?h1=cGVhY2htb2RlLmNvbQ&h2=cGVhY2htLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=025e85c77ec787bced3183150d4c7dfc4de058a68990b653ab2dc2660a972e6a") format("woff2"),
       url("https://fonts.shopifycdn.com/avenir_next/avenirnext_i4.67fb53a3e0351125941146246183577ae8d8bf23.woff?h1=cGVhY2htb2RlLmNvbQ&h2=cGVhY2htLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=8ee98c774ccf74c8f390fcc98273e3d31a6cb6dd275f9d5b60abf69fe0556f94") format("woff");
}

@font-face {
  font-family: "Avenir Next";
  font-weight: 600;
  font-style: normal;
  font-display: swap;
  src: url("https://fonts.shopifycdn.com/avenir_next/avenirnext_n6.08f6a09127d450aa39c74986de08fd8fa84e6a11.woff2?h1=cGVhY2htb2RlLmNvbQ&h2=cGVhY2htLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=87d62ef22b4eed0181d72e00c6f172b1e9ce66a15d197f8055000624ab16cef2") format("woff2"),
       url("https://fonts.shopifycdn.com/avenir_next/avenirnext_n6.bd2f76897d6f40c767db7c40226916ec7b6ffc65.woff?h1=cGVhY2htb2RlLmNvbQ&h2=cGVhY2htLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=6aaf392f5466f46410cfd7232cf2af9e48d6c9a64551648e1cd17819a022e79d") format("woff");
}

@font-face {
  font-family: "Avenir Next";
  font-weight: 600;
  font-style: italic;
  font-display: swap;
  src: url("https://fonts.shopifycdn.com/avenir_next/avenirnext_i6.449b8593f8987f1402fdf6d634f972f810c90c5c.woff2?h1=cGVhY2htb2RlLmNvbQ&h2=cGVhY2htLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=85940460570496b53db9fdafa6b6151a3cbdda4f36bec8e00093bc8db9e04136") format("woff2"),
       url("https://fonts.shopifycdn.com/avenir_next/avenirnext_i6.9c697a2eda486add54c668d1ec4ac662c8402e7c.woff?h1=cGVhY2htb2RlLmNvbQ&h2=cGVhY2htLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=cf01f88598cdc1fae92f37862322d0775181048d7e1fff0315a4db648fcbbb95") format("woff");
}

:root {--heading-color: 26, 26, 26;
    --text-color: 34, 34, 34;
    --background: 255, 255, 255;
    --secondary-background: 245, 241, 236;
    --border-color: 222, 222, 222;
    --border-color-darker: 167, 167, 167;
    --success-color: 46, 158, 123;
    --success-background: 213, 236, 229;
    --error-color: 222, 42, 42;
    --error-background: 253, 240, 240;
    --primary-button-background: 241, 63, 98;
    --primary-button-text-color: 255, 255, 255;
    --secondary-button-background: 247, 174, 166;
    --secondary-button-text-color: 255, 255, 255;
    --product-star-rating: 246, 164, 41;
    --product-on-sale-accent: 238, 61, 99;
    --product-sold-out-accent: 111, 113, 155;
    --product-custom-label-background: 64, 93, 230;
    --product-custom-label-text-color: 255, 255, 255;
    --product-custom-label-2-background: 243, 229, 182;
    --product-custom-label-2-text-color: 0, 0, 0;
    --product-low-stock-text-color: 222, 42, 42;
    --product-in-stock-text-color: 46, 158, 123;
    --loading-bar-background: 34, 34, 34;

    /* We duplicate some "base" colors as root colors, which is useful to use on drawer elements or popover without. Those should not be overridden to avoid issues */
    --root-heading-color: 26, 26, 26;
    --root-text-color: 34, 34, 34;
    --root-background: 255, 255, 255;
    --root-border-color: 222, 222, 222;
    --root-primary-button-background: 241, 63, 98;
    --root-primary-button-text-color: 255, 255, 255;

    --base-font-size: 15px;
    --heading-font-family: "ITC Caslon No 224", serif;
    --heading-font-weight: 400;
    --heading-font-style: normal;
    --heading-text-transform: normal;
    --text-font-family: "Avenir Next", sans-serif;
    --text-font-weight: 400;
    --text-font-style: normal;
    --text-font-bold-weight: 600;

    /* Typography (font size) */
    --heading-xxsmall-font-size: 11px;
    --heading-xsmall-font-size: 11px;
    --heading-small-font-size: 12px;
    --heading-large-font-size: 36px;
    --heading-h1-font-size: 36px;
    --heading-h2-font-size: 30px;
    --heading-h3-font-size: 26px;
    --heading-h4-font-size: 24px;
    --heading-h5-font-size: 20px;
    --heading-h6-font-size: 16px;

    /* Control the look and feel of the theme by changing radius of various elements */
    --button-border-radius: 4px;
    --block-border-radius: 8px;
    --block-border-radius-reduced: 4px;
    --color-swatch-border-radius: 100%;

    /* Button size */
    --button-height: 48px;
    --button-small-height: 40px;

    /* Form related */
    --form-input-field-height: 48px;
    --form-input-gap: 16px;
    --form-submit-margin: 24px;

    /* Product listing related variables */
    --product-list-block-spacing: 32px;

    /* Video related */
    --play-button-background: 255, 255, 255;
    --play-button-arrow: 34, 34, 34;

    /* RTL support */
    --transform-logical-flip: 1;
    --transform-origin-start: left;
    --transform-origin-end: right;

    /* Other */
    --zoom-cursor-svg-url: url(//cdn.shopify.com/s/files/1/0637/4834/1981/t/4/assets/zoom-cursor.svg?v=168007976863815382111650260039);
    --arrow-right-svg-url: url(//cdn.shopify.com/s/files/1/0637/4834/1981/t/4/assets/arrow-right.svg?v=2151866357717726961650260039);
    --arrow-left-svg-url: url(//cdn.shopify.com/s/files/1/0637/4834/1981/t/4/assets/arrow-left.svg?v=28017100529542663401650260039);

    /* Some useful variables that we can reuse in our CSS. Some explanation are needed for some of them:
       - container-max-width-minus-gutters: represents the container max width without the edge gutters
       - container-outer-width: considering the screen width, represent all the space outside the container
       - container-outer-margin: same as container-outer-width but get set to 0 inside a container
       - container-inner-width: the effective space inside the container (minus gutters)
       - grid-column-width: represents the width of a single column of the grid
       - vertical-breather: this is a variable that defines the global "spacing" between sections, and inside the section
                            to create some "breath" and minimum spacing
     */
    --container-max-width: 1600px;
    --container-gutter: 24px;
    --container-max-width-minus-gutters: calc(var(--container-max-width) - (var(--container-gutter)) * 2);
    --container-outer-width: max(calc((100vw - var(--container-max-width-minus-gutters)) / 2), var(--container-gutter));
    --container-outer-margin: var(--container-outer-width);
    --container-inner-width: calc(100vw - var(--container-outer-width) * 2);

    --grid-column-count: 10;
    --grid-gap: 24px;
    --grid-column-width: calc((100vw - var(--container-outer-width) * 2 - var(--grid-gap) * (var(--grid-column-count) - 1)) / var(--grid-column-count));

    --vertical-breather: 28px;
    --vertical-breather-tight: 28px;

    /* Shopify related variables */
    --payment-terms-background-color: #ffffff;
  }

  @media screen and (min-width: 741px) {
    :root {
      --container-gutter: 40px;
      --grid-column-count: 20;
      --vertical-breather: 40px;
      --vertical-breather-tight: 40px;

      /* Typography (font size) */
      --heading-xsmall-font-size: 12px;
      --heading-small-font-size: 13px;
      --heading-large-font-size: 52px;
      --heading-h1-font-size: 48px;
      --heading-h2-font-size: 38px;
      --heading-h3-font-size: 32px;
      --heading-h4-font-size: 24px;
      --heading-h5-font-size: 20px;
      --heading-h6-font-size: 18px;

      /* Form related */
      --form-input-field-height: 52px;
      --form-submit-margin: 32px;

      /* Button size */
      --button-height: 52px;
      --button-small-height: 44px;
    }
  }

  @media screen and (min-width: 1200px) {
    :root {
      --vertical-breather: 48px;
      --vertical-breather-tight: 48px;
      --product-list-block-spacing: 5px;
      
      /* Typography */
      --heading-large-font-size: 64px;
      --heading-h1-font-size: 56px;
      --heading-h2-font-size: 48px;
      --heading-h3-font-size: 36px;
      --heading-h4-font-size: 30px;
      --heading-h5-font-size: 24px;
      --heading-h6-font-size: 18px;
    }
  }

  @media screen and (min-width: 1600px) {
    :root {
      --vertical-breather: 48px;
      --vertical-breather-tight: 48px;
    }
    }
  @media screen and (max-width: 740px) {  
      :root {
        --container-gutter: 15px;
      }  
  }
</style>
    <script>
  // This allows to expose several variables to the global scope, to be used in scripts
  window.themeVariables = {
    settings: {
      direction: "ltr",
      pageType: "policy",
      cartCount: 1,
      moneyFormat: "\u003cspan class=\"money\"\u003e₹{{amount}}\u003c\/span\u003e",
      moneyWithCurrencyFormat: "\u003cspan class=\"money\"\u003e₹{{amount}}\u003c\/span\u003e",
      showVendor: false,
      discountMode: "percentage",
      currencyCodeEnabled: false,
      searchMode: "product",
      searchUnavailableProducts: "last",
      cartType: "drawer",
      cartCurrency: "INR",
      mobileZoomFactor: 2.5
    },

    routes: {
      host: "peachmode.com",
      rootUrl: "\/",
      rootUrlWithoutSlash: '',
      cartUrl: "\/cart",
      cartAddUrl: "\/cart\/add",
      cartChangeUrl: "\/cart\/change",
      searchUrl: "\/search",
      predictiveSearchUrl: "\/search\/suggest",
      productRecommendationsUrl: "\/recommendations\/products"
    },

    strings: {
      accessibilityDelete: "Delete",
      accessibilityClose: "Close",
      collectionSoldOut: "Sold out",
      collectionDiscount: "Save @savings@",
      productSalePrice: "Sale price",
      productRegularPrice: "Regular price",
      productFormUnavailable: "Unavailable",
      productFormSoldOut: "Sold out",
      productFormPreOrder: "Pre-order",
      productFormAddToCart: "Add to cart",
      searchNoResults: "No results could be found.",
      searchNewSearch: "New search",
      searchProducts: "Products",
      searchArticles: "Journal",
      searchPages: "Pages",
      searchCollections: "Collections",
      cartViewCart: "View cart",
      cartItemAdded: "Item added to your cart!",
      cartItemAddedShort: "Added to your cart!",
      cartAddOrderNote: "Add order note",
      cartEditOrderNote: "Edit order note",
      shippingEstimatorNoResults: "Sorry, we do not ship to your address.",
      shippingEstimatorOneResult: "There is one shipping rate for your address:",
      shippingEstimatorMultipleResults: "There are several shipping rates for your address:",
      shippingEstimatorError: "One or more error occurred while retrieving shipping rates:"
    },

    libs: {
      flickity: "\/\/cdn.shopify.com\/s\/files\/1\/0637\/4834\/1981\/t\/4\/assets\/flickity.aio.min.js?v=52974065055626885651669276710",
      photoswipe: "\/\/cdn.shopify.com\/s\/files\/1\/0637\/4834\/1981\/t\/4\/assets\/photoswipe.aio.min.js?v=131347994699802193951669276710",
      qrCode: "\/\/cdn.shopify.com\/shopifycloud\/shopify\/assets\/themes_support\/vendor\/qrcode-ea937aa4cd73ad2566540626d466019ba1e2e0c445711833fb8918ad7589ecf2.js"
    },

    breakpoints: {
      phone: 'screen and (max-width: 740px)',
      tablet: 'screen and (min-width: 741px) and (max-width: 999px)',
      tabletAndUp: 'screen and (min-width: 741px)',
      pocket: 'screen and (max-width: 999px)',
      lap: 'screen and (min-width: 1000px) and (max-width: 1199px)',
      lapAndUp: 'screen and (min-width: 1000px)',
      desktop: 'screen and (min-width: 1200px)',
      wide: 'screen and (min-width: 1400px)'
    }
  };

  window.addEventListener('pageshow', async () => {
    const cartContent = await (await fetch(`${window.themeVariables.routes.cartUrl}.js`, {cache: 'reload'})).json();
    document.documentElement.dispatchEvent(new CustomEvent('cart:refresh', {detail: {cart: cartContent}}));
  });

  if ('noModule' in HTMLScriptElement.prototype) {
    // Old browsers (like IE) that does not support module will be considered as if not executing JS at all
    document.documentElement.className = document.documentElement.className.replace('no-js', 'js');

    requestAnimationFrame(() => {
      const viewportHeight = (window.visualViewport ? window.visualViewport.height : document.documentElement.clientHeight);
      document.documentElement.style.setProperty('--window-height',viewportHeight + 'px');
    });
  }document.addEventListener('DOMContentLoaded', () => {
      document.querySelector('.shopify-policy__title').classList.add('page-header__text-wrapper');
      document.querySelector('.shopify-policy__title h1').classList.add('heading', 'h2');
    });</script>

    <link rel="stylesheet" href="//cdn.shopify.com/s/files/1/0637/4834/1981/t/4/assets/theme.css?v=179782170850921857211660968963">
    <link rel="stylesheet" href="//cdn.shopify.com/s/files/1/0637/4834/1981/t/4/assets/custom.aio.min.css?v=13877014798859137141669276710">

    <script src="//cdn.shopify.com/s/files/1/0637/4834/1981/t/4/assets/vendor.js?v=31715688253868339281649670564" defer></script>
    <script src="//cdn.shopify.com/s/files/1/0637/4834/1981/t/4/assets/theme.js?v=176847002945199770411657523293" defer></script>
    <script src="//cdn.shopify.com/s/files/1/0637/4834/1981/t/4/assets/custom.aio.min.js?v=41133906798395419041669276710" defer></script>

    <img alt="website" width="99999" height="99999" style="pointer-events: none; position: absolute; top: 0; left: 0; width: 99vw; height: 99vh; max-width: 99vw; max-height: 99vh;" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5OTk5OSIgaGVpZ2h0PSI5OTk5OSIgdmlld0JveD0iMCAwIDk5OTk5IDk5OTk5IiAvPg==" /><script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script><link rel="stylesheet" media="all" integrity="sha256-PkqjwHo6YXgNFrxLgo0v754aIKRKrjbgKae5jl7lpNA=" crossorigin="anonymous" href="//cdn.shopify.com/shopifycloud/shopify/assets/storefront/policy-3e4aa3c07a3a61780d16bc4b828d2fef9e1a20a44aae36e029a7b98e5ee5a4d0.css">
<meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/63748341981/digital_wallets/dialog">
<meta id="in-context-paypal-metadata" data-shop-id="63748341981" data-venmo-supported="false" data-environment="production" data-locale="en_US" data-paypal-v4="true" data-currency="INR">
<script>
  (function() {
    var scripts = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/runtime.latest.en.8645d252f07ec25fdbc6.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/checkout-web-packages~Information~NoAddressLocation~Payment~PostPurchase~Review~Shipping~ShopPay~Sho~cf13f96e.latest.en.04837ae4ff5a8e949953.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information~Payment~ShopPay.latest.en.84ff9c0024faf7f72c14.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information.latest.en.900911b3d82c82309ebf.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/checkout-web-ui~app.latest.en.86cd9328cdcd6cd3a58f.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/vendors~app.latest.en.b4546f9bffad10b3673b.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/checkout-web-packages~app.latest.en.f5154093d2604596d084.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.latest.en.931851b1b02f1bcae42a.js"];
    var styles = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/checkout-web-ui~app.latest.en.9f2a5e9ec696775e2217.css", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/vendors~app.latest.en.e788719f193b49c039a3.css", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.latest.en.6b4c79ead7042980b29d.css", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information~Payment~ShopPay.latest.en.da9f06164a980bf8e7ea.css", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information.latest.en.9a0274ab07be120c1902.css"];

    function prefetch(url, as, callback) {
      var link = document.createElement('link');
      if (link.relList.supports('prefetch')) {
        link.rel = 'prefetch';
        link.fetchPriority = 'low';
        link.as = as;
        link.href = url;
        link.onload = link.onerror = callback;
        document.head.appendChild(link);
      } else {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);
        xhr.onloadend = callback;
        xhr.send();
      }
    }

    function prefetchAssets() {
      var resources = [].concat(
        scripts.map(function(url) { return [url, 'script']; }),
        styles.map(function(url) { return [url, 'style']; })
      );
      var index = 0;
      (function next() {
        var res = resources[index++];
        if (res) prefetch(res[0], res[1], next);
      })();
    }

    addEventListener('load', prefetchAssets);
   })();
</script>
<script id="shopify-features" type="application/json">{"accessToken":"624de472c678fb3b99635fb7da9e76fb","betas":["rich-media-storefront-analytics"],"domain":"peachmode.com","predictiveSearch":true,"shopId":63748341981,"smart_payment_buttons_url":"https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js?v=2","dynamic_checkout_cart_url":"https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js?v=2","locale":"en","optimusEnabled":false}</script>
<script>var Shopify = Shopify || {};
Shopify.shop = "peachm.myshopify.com";
Shopify.locale = "en";
Shopify.currency = {"active":"INR","rate":"1.0"};
Shopify.country = "IN";
Shopify.theme = {"name":"Focal","id":131960242397,"theme_store_id":714,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};
Shopify.cdnHost = "cdn.shopify.com";
Shopify.routes = Shopify.routes || {};
Shopify.routes.root = "/";</script>
<script type="module">!function(o){(o.Shopify=o.Shopify||{}).modules=!0}(window);</script>
<script>!function(o){function n(){var o=[];function n(){o.push(Array.prototype.slice.apply(arguments))}return n.q=o,n}var t=o.Shopify=o.Shopify||{};t.loadFeatures=n(),t.autoloadFeatures=n()}(window);</script>
<script>(function() {
  function asyncLoad() {
    var urls = ["https:\/\/loox.io\/widget\/N1gBr7V_Ih\/loox.1652507684332.js?shop=peachm.myshopify.com","https:\/\/geolocation-recommendations.shopifyapps.com\/locale_bar\/script.js?shop=peachm.myshopify.com","https:\/\/seo.apps.avada.io\/scripttag\/avada-seo-installed.js?shop=peachm.myshopify.com","https:\/\/cdn1.avada.io\/flying-pages\/module.js?shop=peachm.myshopify.com"];
    for (var i = 0; i < urls.length; i++) {
      var s = document.createElement('script');
      if (lightJsExclude.indexOf(urls[i]) === -1) s.type = 'lightJs'; else s.type = 'text/javascript';
      s.async = true;
      s.src = urls[i];
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
    }
  };
  if(window.attachEvent) {
    window.attachEvent('onload', asyncLoad);
  } else {
    window.addEventListener('load', asyncLoad, false);
  }
})();</script>
<script id="__st">var __st={"a":63748341981,"offset":19800,"reqid":"6fd826a3-7b6a-47e4-b0e3-bbc65af28085","pageurl":"peachmode.com\/policies\/refund-policy","t":"prospect","u":"b7bdf58cb607"};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>!function(o){o.addEventListener("DOMContentLoaded",function(){window.Shopify=window.Shopify||{},window.Shopify.recaptchaV3=window.Shopify.recaptchaV3||{siteKey:"6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9"};var t=['form[action*="/contact"] input[name="form_type"][value="contact"]','form[action*="/comments"] input[name="form_type"][value="new_comment"]','form[action*="/account"] input[name="form_type"][value="customer_login"]','form[action*="/account"] input[name="form_type"][value="recover_customer_password"]','form[action*="/account"] input[name="form_type"][value="create_customer"]','form[action*="/contact"] input[name="form_type"][value="customer"]'].join(",");function n(e){e=e.target;null==e||null!=(e=function e(t,n){if(null==t.parentElement)return null;if("FORM"!=t.parentElement.tagName)return e(t.parentElement,n);for(var o=t.parentElement.action,r=0;r<n.length;r++)if(-1!==o.indexOf(n[r]))return t.parentElement;return null}(e,["/contact","/comments","/account"]))&&null!=e.querySelector(t)&&((e=o.createElement("script")).setAttribute("src","https://cdn.shopify.com/shopifycloud/storefront-recaptcha-v3/v0.6/index.js"),o.body.appendChild(e),o.removeEventListener("focus",n,!0),o.removeEventListener("change",n,!0),o.removeEventListener("click",n,!0))}o.addEventListener("click",n,!0),o.addEventListener("change",n,!0),o.addEventListener("focus",n,!0)})}(document);</script>
<script integrity="sha256-4VRZk5nmuLKdyxECzHbrGZ+jOgmvT6eNFej4VE7mT80=" data-source-attribution="shopify.loadfeatures" defer="defer" src="//cdn.shopify.com/shopifycloud/shopify/assets/storefront/load_feature-e154599399e6b8b29dcb1102cc76eb199fa33a09af4fa78d15e8f8544ee64fcd.js" crossorigin="anonymous"></script>
<script integrity="sha256-h+g5mYiIAULyxidxudjy/2wpCz/3Rd1CbrDf4NudHa4=" data-source-attribution="shopify.dynamic-checkout" defer="defer" src="//cdn.shopify.com/shopifycloud/shopify/assets/storefront/features-87e8399988880142f2c62771b9d8f2ff6c290b3ff745dd426eb0dfe0db9d1dae.js" crossorigin="anonymous"></script>


<script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>
  
	<script>var loox_global_hash = '1681118583974';</script><style>.loox-reviews-default { max-width: 1200px; margin: 0 auto; }.loox-rating .loox-icon { color:#fed264; }</style><script>var loox_rating_icons_enabled = true;</script>
    
     
<style type='text/css'>
  .baCountry{width:30px;height:20px;display:inline-block;vertical-align:middle;margin-right:6px;background-size:30px!important;border-radius:4px;background-repeat:no-repeat}
  .baCountry-traditional .baCountry{background-image:url(https://cdn.shopify.com/s/files/1/0194/1736/6592/t/1/assets/ba-flags.png?=14261939516959647149);height:19px!important}
  .baCountry-modern .baCountry{background-image:url(https://cdn.shopify.com/s/files/1/0194/1736/6592/t/1/assets/ba-flags.png?=14261939516959647149)}
  .baCountry-NO-FLAG{background-position:0 0}.baCountry-AD{background-position:0 -20px}.baCountry-AED{background-position:0 -40px}.baCountry-AFN{background-position:0 -60px}.baCountry-AG{background-position:0 -80px}.baCountry-AI{background-position:0 -100px}.baCountry-ALL{background-position:0 -120px}.baCountry-AMD{background-position:0 -140px}.baCountry-AOA{background-position:0 -160px}.baCountry-ARS{background-position:0 -180px}.baCountry-AS{background-position:0 -200px}.baCountry-AT{background-position:0 -220px}.baCountry-AUD{background-position:0 -240px}.baCountry-AWG{background-position:0 -260px}.baCountry-AZN{background-position:0 -280px}.baCountry-BAM{background-position:0 -300px}.baCountry-BBD{background-position:0 -320px}.baCountry-BDT{background-position:0 -340px}.baCountry-BE{background-position:0 -360px}.baCountry-BF{background-position:0 -380px}.baCountry-BGN{background-position:0 -400px}.baCountry-BHD{background-position:0 -420px}.baCountry-BIF{background-position:0 -440px}.baCountry-BJ{background-position:0 -460px}.baCountry-BMD{background-position:0 -480px}.baCountry-BND{background-position:0 -500px}.baCountry-BOB{background-position:0 -520px}.baCountry-BRL{background-position:0 -540px}.baCountry-BSD{background-position:0 -560px}.baCountry-BTN{background-position:0 -580px}.baCountry-BWP{background-position:0 -600px}.baCountry-BYN{background-position:0 -620px}.baCountry-BZD{background-position:0 -640px}.baCountry-CAD{background-position:0 -660px}.baCountry-CC{background-position:0 -680px}.baCountry-CDF{background-position:0 -700px}.baCountry-CG{background-position:0 -720px}.baCountry-CHF{background-position:0 -740px}.baCountry-CI{background-position:0 -760px}.baCountry-CK{background-position:0 -780px}.baCountry-CLP{background-position:0 -800px}.baCountry-CM{background-position:0 -820px}.baCountry-CNY{background-position:0 -840px}.baCountry-COP{background-position:0 -860px}.baCountry-CRC{background-position:0 -880px}.baCountry-CU{background-position:0 -900px}.baCountry-CX{background-position:0 -920px}.baCountry-CY{background-position:0 -940px}.baCountry-CZK{background-position:0 -960px}.baCountry-DE{background-position:0 -980px}.baCountry-DJF{background-position:0 -1000px}.baCountry-DKK{background-position:0 -1020px}.baCountry-DM{background-position:0 -1040px}.baCountry-DOP{background-position:0 -1060px}.baCountry-DZD{background-position:0 -1080px}.baCountry-EC{background-position:0 -1100px}.baCountry-EE{background-position:0 -1120px}.baCountry-EGP{background-position:0 -1140px}.baCountry-ER{background-position:0 -1160px}.baCountry-ES{background-position:0 -1180px}.baCountry-ETB{background-position:0 -1200px}.baCountry-EUR{background-position:0 -1220px}.baCountry-FI{background-position:0 -1240px}.baCountry-FJD{background-position:0 -1260px}.baCountry-FKP{background-position:0 -1280px}.baCountry-FO{background-position:0 -1300px}.baCountry-FR{background-position:0 -1320px}.baCountry-GA{background-position:0 -1340px}.baCountry-GBP{background-position:0 -1360px}.baCountry-GD{background-position:0 -1380px}.baCountry-GEL{background-position:0 -1400px}.baCountry-GHS{background-position:0 -1420px}.baCountry-GIP{background-position:0 -1440px}.baCountry-GL{background-position:0 -1460px}.baCountry-GMD{background-position:0 -1480px}.baCountry-GNF{background-position:0 -1500px}.baCountry-GQ{background-position:0 -1520px}.baCountry-GR{background-position:0 -1540px}.baCountry-GTQ{background-position:0 -1560px}.baCountry-GU{background-position:0 -1580px}.baCountry-GW{background-position:0 -1600px}.baCountry-HKD{background-position:0 -1620px}.baCountry-HNL{background-position:0 -1640px}.baCountry-HRK{background-position:0 -1660px}.baCountry-HTG{background-position:0 -1680px}.baCountry-HUF{background-position:0 -1700px}.baCountry-IDR{background-position:0 -1720px}.baCountry-IE{background-position:0 -1740px}.baCountry-ILS{background-position:0 -1760px}.baCountry-INR{background-position:0 -1780px}.baCountry-IO{background-position:0 -1800px}.baCountry-IQD{background-position:0 -1820px}.baCountry-IRR{background-position:0 -1840px}.baCountry-ISK{background-position:0 -1860px}.baCountry-IT{background-position:0 -1880px}.baCountry-JMD{background-position:0 -1900px}.baCountry-JOD{background-position:0 -1920px}.baCountry-JPY{background-position:0 -1940px}.baCountry-KES{background-position:0 -1960px}.baCountry-KGS{background-position:0 -1980px}.baCountry-KHR{background-position:0 -2000px}.baCountry-KI{background-position:0 -2020px}.baCountry-KMF{background-position:0 -2040px}.baCountry-KN{background-position:0 -2060px}.baCountry-KP{background-position:0 -2080px}.baCountry-KRW{background-position:0 -2100px}.baCountry-KWD{background-position:0 -2120px}.baCountry-KYD{background-position:0 -2140px}.baCountry-KZT{background-position:0 -2160px}.baCountry-LBP{background-position:0 -2180px}.baCountry-LI{background-position:0 -2200px}.baCountry-LKR{background-position:0 -2220px}.baCountry-LRD{background-position:0 -2240px}.baCountry-LSL{background-position:0 -2260px}.baCountry-LT{background-position:0 -2280px}.baCountry-LU{background-position:0 -2300px}.baCountry-LV{background-position:0 -2320px}.baCountry-LYD{background-position:0 -2340px}.baCountry-MAD{background-position:0 -2360px}.baCountry-MC{background-position:0 -2380px}.baCountry-MDL{background-position:0 -2400px}.baCountry-ME{background-position:0 -2420px}.baCountry-MGA{background-position:0 -2440px}.baCountry-MKD{background-position:0 -2460px}.baCountry-ML{background-position:0 -2480px}.baCountry-MMK{background-position:0 -2500px}.baCountry-MN{background-position:0 -2520px}.baCountry-MOP{background-position:0 -2540px}.baCountry-MQ{background-position:0 -2560px}.baCountry-MR{background-position:0 -2580px}.baCountry-MS{background-position:0 -2600px}.baCountry-MT{background-position:0 -2620px}.baCountry-MUR{background-position:0 -2640px}.baCountry-MVR{background-position:0 -2660px}.baCountry-MWK{background-position:0 -2680px}.baCountry-MXN{background-position:0 -2700px}.baCountry-MYR{background-position:0 -2720px}.baCountry-MZN{background-position:0 -2740px}.baCountry-NAD{background-position:0 -2760px}.baCountry-NE{background-position:0 -2780px}.baCountry-NF{background-position:0 -2800px}.baCountry-NG{background-position:0 -2820px}.baCountry-NIO{background-position:0 -2840px}.baCountry-NL{background-position:0 -2860px}.baCountry-NOK{background-position:0 -2880px}.baCountry-NPR{background-position:0 -2900px}.baCountry-NR{background-position:0 -2920px}.baCountry-NU{background-position:0 -2940px}.baCountry-NZD{background-position:0 -2960px}.baCountry-OMR{background-position:0 -2980px}.baCountry-PAB{background-position:0 -3000px}.baCountry-PEN{background-position:0 -3020px}.baCountry-PGK{background-position:0 -3040px}.baCountry-PHP{background-position:0 -3060px}.baCountry-PKR{background-position:0 -3080px}.baCountry-PLN{background-position:0 -3100px}.baCountry-PR{background-position:0 -3120px}.baCountry-PS{background-position:0 -3140px}.baCountry-PT{background-position:0 -3160px}.baCountry-PW{background-position:0 -3180px}.baCountry-QAR{background-position:0 -3200px}.baCountry-RON{background-position:0 -3220px}.baCountry-RSD{background-position:0 -3240px}.baCountry-RUB{background-position:0 -3260px}.baCountry-RWF{background-position:0 -3280px}.baCountry-SAR{background-position:0 -3300px}.baCountry-SBD{background-position:0 -3320px}.baCountry-SCR{background-position:0 -3340px}.baCountry-SDG{background-position:0 -3360px}.baCountry-SEK{background-position:0 -3380px}.baCountry-SGD{background-position:0 -3400px}.baCountry-SI{background-position:0 -3420px}.baCountry-SK{background-position:0 -3440px}.baCountry-SLL{background-position:0 -3460px}.baCountry-SM{background-position:0 -3480px}.baCountry-SN{background-position:0 -3500px}.baCountry-SO{background-position:0 -3520px}.baCountry-SRD{background-position:0 -3540px}.baCountry-SSP{background-position:0 -3560px}.baCountry-STD{background-position:0 -3580px}.baCountry-SV{background-position:0 -3600px}.baCountry-SYP{background-position:0 -3620px}.baCountry-SZL{background-position:0 -3640px}.baCountry-TC{background-position:0 -3660px}.baCountry-TD{background-position:0 -3680px}.baCountry-TG{background-position:0 -3700px}.baCountry-THB{background-position:0 -3720px}.baCountry-TJS{background-position:0 -3740px}.baCountry-TK{background-position:0 -3760px}.baCountry-TMT{background-position:0 -3780px}.baCountry-TND{background-position:0 -3800px}.baCountry-TOP{background-position:0 -3820px}.baCountry-TRY{background-position:0 -3840px}.baCountry-TTD{background-position:0 -3860px}.baCountry-TWD{background-position:0 -3880px}.baCountry-TZS{background-position:0 -3900px}.baCountry-UAH{background-position:0 -3920px}.baCountry-UGX{background-position:0 -3940px}.baCountry-USD{background-position:0 -3960px}.baCountry-UYU{background-position:0 -3980px}.baCountry-UZS{background-position:0 -4000px}.baCountry-VEF{background-position:0 -4020px}.baCountry-VG{background-position:0 -4040px}.baCountry-VI{background-position:0 -4060px}.baCountry-VND{background-position:0 -4080px}.baCountry-VUV{background-position:0 -4100px}.baCountry-WST{background-position:0 -4120px}.baCountry-XAF{background-position:0 -4140px}.baCountry-XPF{background-position:0 -4160px}.baCountry-YER{background-position:0 -4180px}.baCountry-ZAR{background-position:0 -4200px}.baCountry-ZM{background-position:0 -4220px}.baCountry-ZW{background-position:0 -4240px}
  .bacurr-checkoutNotice{margin: 3px 10px 0 10px;left: 0;right: 0;text-align: center;}
  @media (min-width:750px) {.bacurr-checkoutNotice{position: absolute;}}
</style>

<script>
    window.baCurr = window.baCurr || {};
    window.baCurr.config = {}; window.baCurr.rePeat = function () {};
    Object.assign(window.baCurr.config, {
      "enabled":true,
      "manual_placement":"",
      "night_time":false,
      "round_by_default":false,
      "display_position":"bottom_left",
      "display_position_type":"floating",
      "custom_code":{"css":""},
      "flag_type":"countryandmoney",
      "flag_design":"modern",
      "round_style":"none",
      "round_dec":"0.99",
      "chosen_cur":[{"USD":"US Dollar (USD)"},{"EUR":"Euro (EUR)"},{"GBP":"British Pound (GBP)"},{"CAD":"Canadian Dollar (CAD)"},{"AED":"United Arab Emirates Dirham (AED)"},{"ALL":"Albanian Lek (ALL)"},{"AFN":"Afghan Afghani (AFN)"},{"AMD":"Armenian Dram (AMD)"},{"AOA":"Angolan Kwanza (AOA)"},{"ARS":"Argentine Peso (ARS)"},{"AUD":"Australian Dollar (AUD)"},{"AWG":"Aruban Florin (AWG)"},{"AZN":"Azerbaijani Manat (AZN)"},{"BIF":"Burundian Franc (BIF)"},{"BBD":"Barbadian Dollar (BBD)"},{"BDT":"Bangladeshi Taka (BDT)"},{"BSD":"Bahamian Dollar (BSD)"},{"BHD":"Bahraini Dinar (BHD)"},{"BMD":"Bermudan Dollar (BMD)"},{"BYN":"Belarusian Ruble (BYN)"},{"BZD":"Belize Dollar (BZD)"},{"BTN":"Bhutanese Ngultrum (BTN)"},{"BAM":"Bosnia-Herzegovina Convertible Mark (BAM)"},{"BRL":"Brazilian Real (BRL)"},{"BOB":"Bolivian Boliviano (BOB)"},{"BWP":"Botswanan Pula (BWP)"},{"BND":"Brunei Dollar (BND)"},{"BGN":"Bulgarian Lev (BGN)"},{"CDF":"Congolese Franc (CDF)"},{"CHF":"Swiss Franc (CHF)"},{"CLP":"Chilean Peso (CLP)"},{"CNY":"Chinese Yuan (CNY)"},{"COP":"Colombian Peso (COP)"},{"CRC":"Costa Rican Colon (CRC)"},{"CZK":"Czech Republic Koruna (CZK)"},{"DJF":"Djiboutian Franc (DJF)"},{"DKK":"Danish Krone (DKK)"},{"DOP":"Dominican Peso (DOP)"},{"DZD":"Algerian Dinar (DZD)"},{"EGP":"Egyptian Pound (EGP)"},{"ETB":"Ethiopian Birr (ETB)"},{"FJD":"Fijian Dollar (FJD)"},{"FKP":"Falkland Islands Pound (FKP)"},{"GIP":"Gibraltar Pound (GIP)"},{"GHS":"Ghanaian Cedi (GHS)"},{"GMD":"Gambian Dalasi (GMD)"},{"GNF":"Guinean Franc (GNF)"},{"GTQ":"Guatemalan Quetzal (GTQ)"},{"GEL":"Georgian Lari (GEL)"},{"HRK":"Croatian Kuna (HRK)"},{"HNL":"Honduran Lempira (HNL)"},{"HKD":"Hong Kong Dollar (HKD)"},{"HTG":"Haitian Gourde (HTG)"},{"HUF":"Hungarian Forint (HUF)"},{"IDR":"Indonesian Rupiah (IDR)"},{"ILS":"Israeli New Shekel (ILS)"},{"ISK":"Icelandic Krona (ISK)"},{"INR":"Indian Rupee (INR)"},{"IQD":"Iraqi Dinar (IQD)"},{"IRR":"Iranian Rial (IRR)"},{"JMD":"Jamaican Dollar (JMD)"},{"JPY":"Japanese Yen (JPY)"},{"JOD":"Jordanian Dinar (JOD)"},{"KES":"Kenyan Shilling (KES)"},{"KGS":"Kyrgystani Som (KGS)"},{"KHR":"Cambodian Riel (KHR)"},{"KMF":"Comorian Franc (KMF)"},{"KRW":"South Korean Won (KRW)"},{"KWD":"Kuwaiti Dinar (KWD)"},{"KYD":"Cayman Islands Dollar (KYD)"},{"KZT":"Kazakhstani Tenge (KZT)"},{"LBP":"Lebanese Pound (LBP)"},{"LKR":"Sri Lankan Rupee (LKR)"},{"LRD":"Liberian Dollar (LRD)"},{"LSL":"Lesotho Loti (LSL)"},{"LYD":"Libyan Dinar (LYD)"},{"MAD":"Moroccan Dirham (MAD)"},{"MDL":"Moldovan Leu (MDL)"},{"MGA":"Malagasy Ariary (MGA)"},{"MMK":"Myanmar Kyat (MMK)"},{"MKD":"Macedonian Denar (MKD)"},{"MOP":"Macanese Pataca (MOP)"},{"MUR":"Mauritian Rupee (MUR)"},{"MVR":"Maldivian Rufiyaa (MVR)"},{"MWK":"Malawian Kwacha (MWK)"},{"MXN":"Mexican Peso (MXN)"},{"MYR":"Malaysian Ringgit (MYR)"},{"MZN":"Mozambican Metical (MZN)"},{"NAD":"Namibian Dollar (NAD)"},{"NPR":"Nepalese Rupee (NPR)"},{"NZD":"New Zealand Dollar (NZD)"},{"NIO":"Nicaraguan Cordoba (NIO)"},{"NOK":"Norwegian Krone (NOK)"},{"OMR":"Omani Rial (OMR)"},{"PAB":"Panamanian Balboa (PAB)"},{"PKR":"Pakistani Rupee (PKR)"},{"PGK":"Papua New Guinean Kina (PGK)"},{"PEN":"Peruvian Nuevo Sol (PEN)"},{"PHP":"Philippine Peso (PHP)"},{"PLN":"Polish Zloty (PLN)"},{"QAR":"Qatari Rial (QAR)"},{"RON":"Romanian Leu (RON)"},{"RUB":"Russian Ruble (RUB)"},{"RWF":"Rwandan Franc (RWF)"},{"SAR":"Saudi Riyal (SAR)"},{"STD":"Sao Tome and Principe Dobra (STD)"},{"RSD":"Serbian Dinar (RSD)"},{"SCR":"Seychellois Rupee (SCR)"},{"SGD":"Singapore Dollar (SGD)"},{"SYP":"Syrian Pound (SYP)"},{"SEK":"Swedish Krona (SEK)"},{"TWD":"New Taiwan Dollar (TWD)"},{"THB":"Thai Baht (THB)"},{"TZS":"Tanzanian Shilling (TZS)"},{"TTD":"Trinidad and Tobago Dollar (TTD)"},{"TND":"Tunisian Dinar (TND)"},{"TRY":"Turkish Lira (TRY)"},{"SBD":"Solomon Islands Dollar (SBD)"},{"SDG":"Sudanese Pound (SDG)"},{"SLL":"Sierra Leonean Leone (SLL)"},{"SRD":"Surinamese Dollar (SRD)"},{"SZL":"Swazi Lilangeni (SZL)"},{"TJS":"Tajikistani Somoni (TJS)"},{"TOP":"Tongan Paʻanga (TOP)"},{"TMT":"Turkmenistani Manat (TMT)"},{"UAH":"Ukrainian Hryvnia (UAH)"},{"UGX":"Ugandan Shilling (UGX)"},{"UYU":"Uruguayan Peso (UYU)"},{"UZS":"Uzbekistan Som (UZS)"},{"VEF":"Venezuelan Bolivar (VEF)"},{"VND":"Vietnamese Dong (VND)"},{"VUV":"Vanuatu Vatu (VUV)"},{"WST":"Samoan Tala (WST)"},{"XAF":"Central African CFA Franc (XAF)"},{"XPF":"CFP Franc (XPF)"},{"YER":"Yemeni Rial (YER)"},{"ZAR":"South African Rand (ZAR)"}],
      "desktop_visible":true,
      "mob_visible":true,
      "money_mouse_show":false,
      "textColor":"#1e1e1e",
      "flag_theme":"default",
      "selector_hover_hex":"#ffffff",
      "lightning":true,
      "mob_manual_placement":"",
      "mob_placement":"bottom_left",
      "mob_placement_type":"floating",
      "moneyWithCurrencyFormat":false,
      "ui_style":"default",
      "user_curr":"",
      "auto_loc":true,
      "auto_pref":false,
      "selector_bg_hex":"#ffffff",
      "selector_border_type":"boxShadow",
      "cart_alert_bg_hex":"#fbf5f5",
      "cart_alert_note":"All orders are processed in [checkout_currency], using the latest exchange rates.",
      "cart_alert_state":true,
      "cart_alert_font_hex":"#1e1e1e"
    },{
      money_format: "\u003cspan class=\"money\"\u003e₹{{amount}}\u003c\/span\u003e",
      money_with_currency_format: "\u003cspan class=\"money\"\u003e₹{{amount}}\u003c\/span\u003e",
      user_curr: "INR"
    });
    window.baCurr.config.multi_curr = [];
    
    window.baCurr.config.final_currency = "INR" || '';
    window.baCurr.config.multi_curr = "INR".split(',') || '';

    (function(window, document) {"use strict";
      function onload(){
        function insertPopupMessageJs(){
          var head = document.getElementsByTagName('head')[0];
          var script = document.createElement('script');
          script.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'currency.boosterapps.com/preview_curr.js';
          script.type = 'text/javascript';
          head.appendChild(script);
        }

        if(document.location.search.indexOf("preview_cur=1") > -1){
          setTimeout(function(){
            window.currency_preview_result = document.getElementById("baCurrSelector").length > 0 ? 'success' : 'error';
            insertPopupMessageJs();
          }, 1000);
        }
      }

      var head = document.getElementsByTagName('head')[0];
      var script = document.createElement('script');
      script.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + "";
      script.type = 'text/javascript';
      script.onload = script.onreadystatechange = function() {
      if (script.readyState) {
        if (script.readyState === 'complete' || script.readyState === 'loaded') {
          script.onreadystatechange = null;
            onload();
          }
        }
        else {
          onload();
        }
      };
      head.appendChild(script);

    }(window, document));
</script>

<script>
	// FaceBook Pixel
         !function(f,b,e,v,n,t,s)
         {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
         n.callMethod.apply(n,arguments):n.queue.push(arguments)};
         if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
         n.queue=[];t=b.createElement(e);t.async=!0;
         t.src=v;s=b.getElementsByTagName(e)[0];
         s.parentNode.insertBefore(t,s)}(window, document,'script',
         'https://connect.facebook.net/en_US/fbevents.js');  
  
   
   fbq('init', '795748567170435');
    

    fbq('track', 'PageView');
  
</script>

    <script>

//code to store UTM params into the cookie

function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}

function getUrlParam(parameter, defaultvalue){
    var urlparameter = defaultvalue;
    if(window.location.href.indexOf(parameter) > -1){
        urlparameter = getUrlVars()[parameter];
        }
    return urlparameter;
}

// create UTM cookie
function createUtmCookie(){
    var utm_source = getUrlParam('utm_source','null');
    var utm_medium = getUrlParam('utm_medium','null');
    var utm_campaign = getUrlParam('utm_campaign','null');
    var utms = "utm_source="+utm_source +"&utm_medium=" + utm_medium +"&utm_campaign="+ utm_campaign;
    localStorage.setItem('utm_params', utms);
}


if (window.location.search.indexOf('utm_source') > 0 || window.location.search.indexOf('utm_medium') > 0 || window.location.search.indexOf('utm_campaign') > 0) {
    createUtmCookie();
}

</script>

  
  <script src="https://cdn.shopify.com/extensions/cece2cc8-741a-4309-94ee-04a78984c575/1.59.0/assets/ws-currencyconverter.js" type="text/javascript" defer="defer"></script>
<link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
<script>(function(){if ("sendBeacon" in navigator && "performance" in window) {var session_token = document.cookie.match(/_shopify_s=([^;]*)/);function handle_abandonment_event(e) {var entries = performance.getEntries().filter(function(entry) {return /monorail-edge.shopifysvc.com/.test(entry.name);});if (!window.abandonment_tracked && entries.length === 0) {window.abandonment_tracked = true;var currentMs = Date.now();var navigation_start = performance.timing.navigationStart;var payload = {shop_id: 63748341981,url: window.location.href,navigation_start,duration: currentMs - navigation_start,session_token: session_token && session_token.length === 2 ? session_token[1] : "",page_type: "policy"};window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({schema_id: "online_store_buyer_site_abandonment/1.1",payload: payload,metadata: {event_created_at_ms: currentMs,event_sent_at_ms: currentMs}}));}}window.addEventListener('pagehide', handle_abandonment_event);}}());</script>
<script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'INR';
var meta = {"page":{}};
for (var attr in meta) {
  window.ShopifyAnalytics.meta[attr] = meta[attr];
}</script>
<script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
  
};
</script>
<script class="analytics">(function () {
  var customDocumentWrite = function(content) {
    var jquery = null;

    if (window.jQuery) {
      jquery = window.jQuery;
    } else if (window.Checkout && window.Checkout.$) {
      jquery = window.Checkout.$;
    }

    if (jquery) {
      jquery('body').append(content);
    }
  };

  var hasLoggedConversion = function(token) {
    if (token) {
      return document.cookie.indexOf('loggedConversion=' + token) !== -1;
    }
    return false;
  }

  var setCookieIfConversion = function(token) {
    if (token) {
      var twoMonthsFromNow = new Date(Date.now());
      twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

      document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
    }
  }

  var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
  if (trekkie.integrations) {
    return;
  }
  trekkie.methods = [
    'identify',
    'page',
    'ready',
    'track',
    'trackForm',
    'trackLink'
  ];
  trekkie.factory = function(method) {
    return function() {
      var args = Array.prototype.slice.call(arguments);
      args.unshift(method);
      trekkie.push(args);
      return trekkie;
    };
  };
  for (var i = 0; i < trekkie.methods.length; i++) {
    var key = trekkie.methods[i];
    trekkie[key] = trekkie.factory(key);
  }
  trekkie.load = function(config) {
    trekkie.config = config || {};
    trekkie.config.initialDocumentCookie = document.cookie;
    var first = document.getElementsByTagName('script')[0];
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.onerror = function(e) {
      var scriptFallback = document.createElement('script');
      scriptFallback.type = 'text/javascript';
      scriptFallback.onerror = function(error) {
              var Monorail = {
      produce: function produce(monorailDomain, schemaId, payload) {
        var currentMs = new Date().getTime();
        var event = {
          schema_id: schemaId,
          payload: payload,
          metadata: {
            event_created_at_ms: currentMs,
            event_sent_at_ms: currentMs
          }
        };
        return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
      },
      sendRequest: function sendRequest(endpointUrl, payload) {
        // Try the sendBeacon API
        if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
          var blobData = new window.Blob([payload], {
            type: 'text/plain'
          });
    
          if (window.navigator.sendBeacon(endpointUrl, blobData)) {
            return true;
          } // sendBeacon was not successful
    
        } // XHR beacon   
    
        var xhr = new XMLHttpRequest();
    
        try {
          xhr.open('POST', endpointUrl);
          xhr.setRequestHeader('Content-Type', 'text/plain');
          xhr.send(payload);
        } catch (e) {
          console.log(e);
        }
    
        return false;
      },
      isIos12: function isIos12() {
        return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
      }
    };
    Monorail.produce('monorail-edge.shopifysvc.com',
      'trekkie_storefront_load_errors/1.1',
      {shop_id: 63748341981,
      theme_id: 131960242397,
      app_name: "storefront",
      context_url: window.location.href,
      source_url: "https://cdn.shopify.com/s/trekkie.storefront.ff16095366b6f10320cdce1a0d6f696f3f3d4af4.min.js"});

      };
      scriptFallback.async = true;
      scriptFallback.src = 'https://cdn.shopify.com/s/trekkie.storefront.ff16095366b6f10320cdce1a0d6f696f3f3d4af4.min.js';
      first.parentNode.insertBefore(scriptFallback, first);
    };
    script.async = true;
    script.src = 'https://cdn.shopify.com/s/trekkie.storefront.ff16095366b6f10320cdce1a0d6f696f3f3d4af4.min.js';
    first.parentNode.insertBefore(script, first);
  };
  trekkie.load(
    {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":63748341981,"isMerchantRequest":null,"themeId":131960242397,"themeCityHash":"5501724287074316170","contentLanguage":"en","currency":"INR"},"isServerSideCookieWritingEnabled":true,"monorailRegion":"shop_domain"},"Session Attribution":{},"S2S":{"facebookCapiEnabled":false,"source":"trekkie-storefront-renderer"}}
  );

  var loaded = false;
  trekkie.ready(function() {
    if (loaded) return;
    loaded = true;

    window.ShopifyAnalytics.lib = window.trekkie;
    

    var originalDocumentWrite = document.write;
    document.write = customDocumentWrite;
    try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
    document.write = originalDocumentWrite;

    window.ShopifyAnalytics.lib.page(null,{});

    var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
    var token = match? match[1]: undefined;
    if (!hasLoggedConversion(token)) {
      setCookieIfConversion(token);
      
    }
  });

  
      var eventsListenerScript = document.createElement('script');
      eventsListenerScript.async = true;
      eventsListenerScript.src = "//cdn.shopify.com/shopifycloud/shopify/assets/shop_events_listener-65cd0ba3fcd81a1df33f2510ec5bcf8c0e0958653b50e3965ec972dd638ee13f.js";
      document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);
    
})();</script>
<script class="boomerang">
(function () {
  if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
    return;
  }
  window.BOOMR = window.BOOMR || {};
  window.BOOMR.snippetStart = new Date().getTime();
  window.BOOMR.snippetExecuted = true;
  window.BOOMR.snippetVersion = 12;
  window.BOOMR.application = "storefront-renderer";
  window.BOOMR.themeName = "Focal";
  window.BOOMR.themeVersion = "8.8.1";
  window.BOOMR.shopId = 63748341981;
  window.BOOMR.themeId = 131960242397;
  window.BOOMR.renderRegion = "gcp-us-east1";
  window.BOOMR.url =
    "https://cdn.shopify.com/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
  var where = document.currentScript || document.getElementsByTagName("script")[0];
  var parentNode = where.parentNode;
  var promoted = false;
  var LOADER_TIMEOUT = 3000;
  function promote() {
    if (promoted) {
      return;
    }
    var script = document.createElement("script");
    script.id = "boomr-scr-as";
    script.src = window.BOOMR.url;
    script.async = true;
    parentNode.appendChild(script);
    promoted = true;
  }
  function iframeLoader(wasFallback) {
    promoted = true;
    var dom, bootstrap, iframe, iframeStyle;
    var doc = document;
    var win = window;
    window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
    bootstrap = function(parent, scriptId) {
      var script = doc.createElement("script");
      script.id = scriptId || "boomr-if-as";
      script.src = window.BOOMR.url;
      BOOMR_lstart = new Date().getTime();
      parent = parent || doc.body;
      parent.appendChild(script);
    };
    if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
      window.BOOMR.snippetMethod = "s";
      bootstrap(parentNode, "boomr-async");
      return;
    }
    iframe = document.createElement("IFRAME");
    iframe.src = "about:blank";
    iframe.title = "";
    iframe.role = "presentation";
    iframe.loading = "eager";
    iframeStyle = (iframe.frameElement || iframe).style;
    iframeStyle.width = 0;
    iframeStyle.height = 0;
    iframeStyle.border = 0;
    iframeStyle.display = "none";
    parentNode.appendChild(iframe);
    try {
      win = iframe.contentWindow;
      doc = win.document.open();
    } catch (e) {
      dom = document.domain;
      iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
      win = iframe.contentWindow;
      doc = win.document.open();
    }
    if (dom) {
      doc._boomrl = function() {
        this.domain = dom;
        bootstrap();
      };
      doc.write("<body onload='document._boomrl();'>");
    } else {
      win._boomrl = function() {
        bootstrap();
      };
      if (win.addEventListener) {
        win.addEventListener("load", win._boomrl, false);
      } else if (win.attachEvent) {
        win.attachEvent("onload", win._boomrl);
      }
    }
    doc.close();
  }
  var link = document.createElement("link");
  if (link.relList &&
    typeof link.relList.supports === "function" &&
    link.relList.supports("preload") &&
    ("as" in link)) {
    window.BOOMR.snippetMethod = "p";
    link.href = window.BOOMR.url;
    link.rel = "preload";
    link.as = "script";
    link.addEventListener("load", promote);
    link.addEventListener("error", function() {
      iframeLoader(true);
    });
    setTimeout(function() {
      if (!promoted) {
        iframeLoader(true);
      }
    }, LOADER_TIMEOUT);
    BOOMR_lstart = new Date().getTime();
    parentNode.appendChild(link);
  } else {
    iframeLoader(false);
  }
  function boomerangSaveLoadTime(e) {
    window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
  }
  if (window.addEventListener) {
    window.addEventListener("load", boomerangSaveLoadTime, false);
  } else if (window.attachEvent) {
    window.attachEvent("onload", boomerangSaveLoadTime);
  }
  if (document.addEventListener) {
    document.addEventListener("onBoomerangLoaded", function(e) {
      e.detail.BOOMR.init({
        ResourceTiming: {
          enabled: true,
          trackedResourceTypes: ["script", "img", "css"]
        },
      });
      e.detail.BOOMR.t_end = new Date().getTime();
    });
  } else if (document.attachEvent) {
    document.attachEvent("onpropertychange", function(e) {
      if (!e) e=event;
      if (e.propertyName === "onBoomerangLoaded") {
        e.detail.BOOMR.init({
          ResourceTiming: {
            enabled: true,
            trackedResourceTypes: ["script", "img", "css"]
          },
        });
        e.detail.BOOMR.t_end = new Date().getTime();
      }
    });
  }
})();</script>
<script id="web-pixels-manager-setup">(function e(e,n,a,o,t,r){var i=null!==e;i&&(window.Shopify=window.Shopify||{},window.Shopify.analytics=window.Shopify.analytics||{},window.Shopify.analytics.replayQueue=[],window.Shopify.analytics.publish=function(e,n,a){window.Shopify.analytics.replayQueue.push([e,n,a])});var s=function(){var e="legacy",n="unknown",a=null,o=navigator.userAgent.match(/(Firefox|Chrome)\/(\d+)/i),t=navigator.userAgent.match(/(Edg)\/(\d+)/i),r=navigator.userAgent.match(/(Version)\/(\d+)(.+)(Safari)\/(\d+)/i);r?(n="safari",a=parseInt(r[2],10)):t?(n="edge",a=parseInt(t[2],10)):o&&(n=o[1].toLocaleLowerCase(),a=parseInt(o[2],10));var i={chrome:60,firefox:55,safari:11,edge:80}[n];return void 0!==i&&null!==a&&i<=a&&(e="modern"),e}().substring(0,1),l=o.substring(0,1);if(i)try{self.performance.mark("wpm:start")}catch(e){}var d,c,u,p,f,h,w,y,g=a+"/"+l+r+s+".js";d={src:g,async:!0,onload:function(){if(e){var a=window.webPixelsManager.init(e);n(a),window.Shopify.analytics.replayQueue.forEach((function(e){a.publishCustomEvent(e[0],e[1],e[2])})),window.Shopify.analytics.replayQueue=[],window.Shopify.analytics.publish=a.publishCustomEvent}},onerror:function(){var n=(e.storefrontBaseUrl?e.storefrontBaseUrl.replace(/\/$/,""):self.location.origin)+"/.well-known/shopify/monorail/unstable/produce_batch",a=JSON.stringify({metadata:{event_sent_at_ms:(new Date).getTime()},events:[{schema_id:"web_pixels_manager_load/2.0",payload:{version:t||"latest",page_url:self.location.href,status:"failed",error_msg:g+" has failed to load"},metadata:{event_created_at_ms:(new Date).getTime()}}]});try{if(self.navigator.sendBeacon.bind(self.navigator)(n,a))return!0}catch(e){}const o=new XMLHttpRequest;try{return o.open("POST",n,!0),o.setRequestHeader("Content-Type","text/plain"),o.send(a),!0}catch(e){console&&console.warn&&console.warn("[Web Pixels Manager] Got an unhandled error while logging a load error.")}return!1}},c=document.createElement("script"),u=d.src,p=d.async||!0,f=d.onload,h=d.onerror,w=document.head,y=document.body,c.async=p,c.src=u,f&&c.addEventListener("load",f),h&&c.addEventListener("error",h),w?w.appendChild(c):y?y.appendChild(c):console.error("Did not find a head or body element to append the script")})({shopId: 63748341981,storefrontBaseUrl: "https://peachmode.com",cdnBaseUrl: "https://cdn.shopify.com",surface: "storefront-renderer",enabledBetaFlags: ["web_pixels_use_shop_domain_monorail_endpoint","web_pixels_shopify_pixel_validation","web_pixels_prefetch_assets"],webPixelExtensionBaseUrl: "https://cdn.shopify.com",webPixelsConfigList: [{"id":"shopify-app-pixel","configuration":"{}","eventPayloadVersion":"v1","runtimeContext":"STRICT","scriptVersion":"0530","apiClientId":"shopify-pixel","type":"APP"},{"id":"shopify-custom-pixel","eventPayloadVersion":"v1","runtimeContext":"LAX","scriptVersion":"0530","apiClientId":"shopify-pixel","type":"CUSTOM"}],initData: {"cart":{"cost":{"totalAmount":{"amount":849.0,"currencyCode":"INR"}},"id":"9042bee05b223e0365a249bf46651c1e","lines":[{"cost":{"totalAmount":{"amount":849.0,"currencyCode":"INR"}},"merchandise":{"id":"43795228786909","image":{"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0637\/4834\/1981\/products\/file_002c2ee4-d534-43d2-af31-83230b46dc6c.jpg?v=1680870105"},"price":{"amount":849.0,"currencyCode":"INR"},"product":{"id":"8045530808541","title":"Pink Printed Georgette Saree With Tassels","vendor":"Peachmode","type":"Saree"},"sku":"LTFAB-KSHVIBRKHA2-2960","title":"Default Title"},"quantity":1}],"totalQuantity":1},"checkout":null,"customer":null,"productVariants":[]},},function pageEvents(webPixelsManagerAPI) {webPixelsManagerAPI.publish("page_viewed");},"https://cdn.shopify.com","browser","0.0.279","518c152fw00918cf1pc7ca055am99284242");</script></head><body class="no-focus-outline  features--image-zoom template- " data-instant-allow-query-string>
     <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W42Q78"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) --><svg class="visually-hidden">
      <linearGradient id="rating-star-gradient-half">
        <stop offset="50%" stop-color="rgb(var(--product-star-rating))" />
        <stop offset="50%" stop-color="rgb(var(--product-star-rating))" stop-opacity="0.4" />
      </linearGradient>
    </svg>

    <a href="#main" class="visually-hidden skip-to-content">Skip to content</a>
    <loading-bar class="loading-bar"></loading-bar><div id="shopify-section-announcement-bar" class="shopify-section shopify-section--announcement-bar"><style>
  :root {
    --enable-sticky-announcement-bar: 0;
  }

  #shopify-section-announcement-bar {
    --heading-color: 86, 17, 42;
    --text-color: 86, 17, 42;
    --primary-button-background: 86, 17, 42;
    --primary-button-text-color: 255, 255, 255;
    --section-background: 247, 174, 166;
    z-index: 5; /* Make sure it goes over header */position: relative;top: 0;
  }

  @media screen and (min-width: 741px) {
    :root {
      --enable-sticky-announcement-bar: 0;
    }

    #shopify-section-announcement-bar {position: relative;}
  }
</style><section>
    <announcement-bar auto-play cycle-speed="5" class="announcement-bar announcement-bar--multiple" style="background-color:#ffda02"><button data-action="prev" class="tap-area tap-area--large">
          <span class="visually-hidden">Previous</span>
          <svg fill="none" focusable="false" width="12" height="10" class="icon icon--nav-arrow-left-small  icon--direction-aware " viewBox="0 0 12 10">
        <path d="M12 5L2.25 5M2.25 5L6.15 9.16M2.25 5L6.15 0.840001" stroke="currentColor" stroke-width="2"></path>
      </svg>
        </button><div class="announcement-bar__list"><announcement-bar-item   class="announcement-bar__item" ><div class="announcement-bar__message text--xsmall"><p>Extra 20% off on Sale Items. Use Code SALE20</p></div></announcement-bar-item><announcement-bar-item hidden  class="announcement-bar__item" ><div class="announcement-bar__message text--xsmall"><p>All products will be dispatched within 24-48 hrs.</p></div></announcement-bar-item><announcement-bar-item hidden  class="announcement-bar__item" ><div class="announcement-bar__message text--xsmall"><p>7 Day no questions asked return policy.</p></div></announcement-bar-item><announcement-bar-item hidden  class="announcement-bar__item" ><div class="announcement-bar__message text--xsmall"><p>Free Shipping in India. COD Available.</p></div></announcement-bar-item></div><button data-action="next" class="tap-area tap-area--large">
          <span class="visually-hidden">Next</span>
          <svg fill="none" focusable="false" width="12" height="10" class="icon icon--nav-arrow-right-small  icon--direction-aware " viewBox="0 0 12 10">
        <path d="M-3.63679e-07 5L9.75 5M9.75 5L5.85 9.16M9.75 5L5.85 0.840001" stroke="currentColor" stroke-width="2"></path>
      </svg>
        </button></announcement-bar>
  </section>

  <script>
    document.documentElement.style.setProperty('--announcement-bar-height', document.getElementById('shopify-section-announcement-bar').clientHeight + 'px');
  </script></div><div id="shopify-section-popup" class="shopify-section shopify-section--popup"><style>
    [aria-controls="newsletter-popup"] {
      display: none; /* Allows to hide the toggle icon in the header if the section is disabled */
    }
  </style></div><div id="shopify-section-header" class="shopify-section shopify-section--header"><style>
  :root {
    --enable-sticky-header: 1;
    --enable-transparent-header: 0;
    --loading-bar-background: 40, 44, 63; /* Prevent the loading bar to be invisible */
  }

  #shopify-section-header {--header-background: 255, 255, 255;
    --header-text-color: 40, 44, 63;
    --header-border-color: 223, 223, 226;
    --reduce-header-padding: 0;position: -webkit-sticky;
      position: sticky;top: calc(var(--enable-sticky-announcement-bar) * var(--announcement-bar-height, 0px));
    z-index: 4;
  }#shopify-section-header .header__logo-image {
    max-width: 140px;
  }

  @media screen and (min-width: 741px) {
    #shopify-section-header .header__logo-image {
      max-width: 195px;
    }
  }

  @media screen and (min-width: 1200px) {/* For this navigation we have to move the logo and make sure the navigation takes the whole width */
      .header__logo {
        order: -1;
        flex: 1 1 0;
      }

      .header__inline-navigation {
        flex: 1 1 auto;
        justify-content: center;
        max-width: max-content;
        margin-inline: 48px;
      }}</style>

<?php include "components/header.php" ?>
<mobile-navigation append-body id="mobile-menu-drawer" class="drawer drawer--from-left">
  <span class="drawer__overlay"></span>

  <div class="drawer__header drawer__header--shadowed">
    <button type="button" class="drawer__close-button drawer__close-button--block tap-area" data-action="close" title="Close"><svg focusable="false" width="14" height="14" class="icon icon--close   " viewBox="0 0 14 14">
        <path d="M13 13L1 1M13 1L1 13" stroke="currentColor" stroke-width="2" fill="none"></path>
      </svg></button>
  </div>

  <div class="drawer__content">
    <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="1"><button is="toggle-button" class="mobile-nav__link heading h5" aria-controls="mobile-menu-1" aria-expanded="false">Collections<span class="animated-plus"></span>
            </button>
          <a href="/collections">Collections</a>

            <collapsible-content id="mobile-menu-1" class="collapsible"><ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="2"><a href="/collections/new-arrival" class="mobile-nav__link">New Arrivals</a></li><li class="mobile-nav__item" data-level="2"><a href="/collections/handbags" class="mobile-nav__link">Handbags</a></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-1-3" aria-expanded="false">Jewellery<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/jewellery">Jewellery</a>
                        <collapsible-content id="mobile-menu-1-3" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/earrings" class="mobile-nav__link">Earrings</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/necklace" class="mobile-nav__link">Necklace</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/rings" class="mobile-nav__link">Rings</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/bracelet" class="mobile-nav__link">Bracelet</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/maang-tika" class="mobile-nav__link">Maang Tika</a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><a href="/collections/bedsheet" class="mobile-nav__link">Bedsheets</a></li><li class="mobile-nav__item" data-level="2"><a href="/collections/aariya-designs" class="mobile-nav__link">Exclusive</a></li><li class="mobile-nav__item" data-level="2"><a href="/collections/combo-packs" class="mobile-nav__link">Combo Packs</a></li><li class="mobile-nav__item" data-level="2"><a href="/collections/mens-kurta-pyjama" class="mobile-nav__link">Mens Kurta Pyjama</a></li></ul></collapsible-content></li><li class="mobile-nav__item" data-level="1"><button is="toggle-button" class="mobile-nav__link heading h5" aria-controls="mobile-menu-2" aria-expanded="false">Sarees<span class="animated-plus"></span>
            </button>
          <a href="/collections/sarees">Sarees</a>

            <collapsible-content id="mobile-menu-2" class="collapsible"><ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-2-1" aria-expanded="false">Fabric<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/sarees">Fabric</a>
                        <collapsible-content id="mobile-menu-2-1" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/cotton-sarees" class="mobile-nav__link">Cotton Sarees</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/art-silk-saree" class="mobile-nav__link">Art Silk Sarees</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/chiffon-sarees" class="mobile-nav__link">Chiffon Sarees</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/georgette-saree" class="mobile-nav__link">Georgette Sarees</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/crepe-sarees" class="mobile-nav__link">Crepe Sarees</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/organza-saree" class="mobile-nav__link">Organza Sarees</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/chanderi" class="mobile-nav__link">Chanderi Silk</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/bhagalpuri-silk" class="mobile-nav__link">Bhagalpuri Silk</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/satin-saree" class="mobile-nav__link">Satin Sarees</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/linen-sarees" class="mobile-nav__link">Linen Sarees</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/net-sarees" class="mobile-nav__link">Net Sarees</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/kanjivaram-silk-saree" class="mobile-nav__link">Kanjivaram</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/banarasi-silk" class="mobile-nav__link">Banarasi Silk</a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-2-2" aria-expanded="false">Print/Pattern<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/sarees">Print/Pattern</a>
                        <collapsible-content id="mobile-menu-2-2" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/floral-sarees" class="mobile-nav__link">Floral Print</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/bandhani-saree" class="mobile-nav__link">Bandhani Sarees</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/embroidered-saree" class="mobile-nav__link">Embroidered</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/paithani-saree" class="mobile-nav__link">Paithani</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/lucknowi-chickankari-sarees" class="mobile-nav__link">Lucknowi / Chickankari</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/patola-saree" class="mobile-nav__link">Patola</a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-2-3" aria-expanded="false">Collection<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/sarees">Collection</a>
                        <collapsible-content id="mobile-menu-2-3" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/half-half-saree" class="mobile-nav__link">Half N Half Saree</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/authentic-drapes-sarees" class="mobile-nav__link">Authentic Drapes</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/bollywood" class="mobile-nav__link">Bollywood</a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-2-4" aria-expanded="false">Price<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/sarees">Price</a>
                        <collapsible-content id="mobile-menu-2-4" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/saree?filter.v.price.gte=&filter.v.price.lte=999" class="mobile-nav__link">0-999</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/sarees?filter.v.price.gte=1000&filter.v.price.lte=1999" class="mobile-nav__link">1000-1999</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/sarees?filter.v.price.gte=2000&filter.v.price.lte=2999" class="mobile-nav__link">2000-2999</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/sarees?filter.v.price.gte=3000&filter.v.price.lte=3999" class="mobile-nav__link">3000-3999</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/sarees?filter.v.price.gte=4000&filter.v.price.lte=4999" class="mobile-nav__link">4000-4999</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/sarees?filter.v.price.gte=5000&filter.v.price.lte=" class="mobile-nav__link">5000 & above</a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-2-5" aria-expanded="false">Occasion<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/sarees">Occasion</a>
                        <collapsible-content id="mobile-menu-2-5" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/bridal-saree" class="mobile-nav__link">Bridal</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/casual-sarees" class="mobile-nav__link">Casual / Daily</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/engagement-sarees" class="mobile-nav__link">Engagement</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/festive-wear-sarees" class="mobile-nav__link">Festive</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/haldi-sarees" class="mobile-nav__link">Haldi</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/mehendi-sarees" class="mobile-nav__link">Mehendi</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/office-wear-sarees" class="mobile-nav__link">Office wear</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/partywear-sarees" class="mobile-nav__link">Party </a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/reception-sarees" class="mobile-nav__link">Reception</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/sangeet-sarees" class="mobile-nav__link">Sangeet</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/wedding-wear-saree" class="mobile-nav__link">Wedding </a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-2-6" aria-expanded="false">Color<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/sarees">Color</a>
                        <collapsible-content id="mobile-menu-2-6" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/red-saree" class="mobile-nav__link">Red</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/pink-saree" class="mobile-nav__link">Pink</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/white-saree" class="mobile-nav__link">White</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/black-saree" class="mobile-nav__link">Black</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/orange-saree" class="mobile-nav__link">Orange</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/blue-saree" class="mobile-nav__link">Blue</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/purple-saree" class="mobile-nav__link">Purple</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/yellow-saree" class="mobile-nav__link">Yellow</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/brown-saree" class="mobile-nav__link">Brown</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/grey-saree" class="mobile-nav__link">Grey</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/green-saree" class="mobile-nav__link">Green</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/multicolor-saree" class="mobile-nav__link">Multicolor</a>
                              </li></ul>
                        </collapsible-content></li></ul><div class="mobile-nav__images-wrapper  hide-scrollbar">
                  <div class="mobile-nav__images-scroller"><div class="mobile-nav__image-push"><img loading="lazy" class="mobile-nav__image" sizes="270px" height="459" width="277" alt="" src="//cdn.shopify.com/s/files/1/0637/4834/1981/files/Banner-10.jpg?v=1651132381" "></div></div>
                </div></collapsible-content></li><li class="mobile-nav__item" data-level="1"><button is="toggle-button" class="mobile-nav__link heading h5" aria-controls="mobile-menu-3" aria-expanded="false">Salwar Suits<span class="animated-plus"></span>
            </button>
          <a href="/collections/suits">Salwar Suits</a>

            <collapsible-content id="mobile-menu-3" class="collapsible"><ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-3-1" aria-expanded="false">Fabric<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/suits">Fabric</a>
                        <collapsible-content id="mobile-menu-3-1" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/rayon-suits" class="mobile-nav__link">Rayon</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/cotton-salwar-suit" class="mobile-nav__link">Cotton</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/georgette-suits" class="mobile-nav__link">Georgette</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/crepe-suits" class="mobile-nav__link">Crepe</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/chiffon-suits" class="mobile-nav__link">Chiffon</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/organza-suits" class="mobile-nav__link">Organza</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/bhagalpuri-silk-suits" class="mobile-nav__link">Bhagalpuri Silk</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/banarasi-suits" class="mobile-nav__link">Banarasi</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/chanderi-silk-salwar-suit" class="mobile-nav__link">Chanderi</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/jacquard-suits" class="mobile-nav__link">Jacquard</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/tapetta-silk-suits" class="mobile-nav__link">Tapetta Silk</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/tussar-silk-suits" class="mobile-nav__link">Tussar Silk</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/net-suits" class="mobile-nav__link">Net</a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-3-2" aria-expanded="false">Style<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/suits">Style</a>
                        <collapsible-content id="mobile-menu-3-2" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/sharara-suits" class="mobile-nav__link">Sharara Suits</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/anarkali-suit" class="mobile-nav__link">Anarkali Suits</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/palazzo-suits" class="mobile-nav__link">Palazzo Suits</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/patiala-suits" class="mobile-nav__link">Patiala Suits</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/pakistani-suits" class="mobile-nav__link">Pakistani Suits</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/straight-cut-suits" class="mobile-nav__link">Straight Cut Suits</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/indo-western" class="mobile-nav__link">Indo western</a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-3-3" aria-expanded="false">Stitch Type<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/suits">Stitch Type</a>
                        <collapsible-content id="mobile-menu-3-3" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/unstitched-salwar-suits" class="mobile-nav__link">Unstitched Salwar suits</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/readymade-salwar-suits" class="mobile-nav__link">Readymade Salwar suits</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/semi-stitched-suits" class="mobile-nav__link">Semi Stitched</a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-3-4" aria-expanded="false">Price<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/suits">Price</a>
                        <collapsible-content id="mobile-menu-3-4" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/suits?filter.v.price.gte=&filter.v.price.lte=999" class="mobile-nav__link">0-999</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/suits?filter.v.price.gte=1000&filter.v.price.lte=1999" class="mobile-nav__link">1000-1999</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/suits?filter.v.price.gte=2000&filter.v.price.lte=2999" class="mobile-nav__link">2000-2999</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/suits?filter.v.price.gte=3000&filter.v.price.lte=" class="mobile-nav__link">3000 & above</a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-3-5" aria-expanded="false">Occasion<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/suits">Occasion</a>
                        <collapsible-content id="mobile-menu-3-5" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/bridal-suits" class="mobile-nav__link">Bridal</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/casual-suits-dress-material" class="mobile-nav__link">Casual / Daily</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/engagement-suits" class="mobile-nav__link">Engagement</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/festive-suits" class="mobile-nav__link">Festive</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/haldi-suits" class="mobile-nav__link">Haldi</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/mehendi-suits" class="mobile-nav__link">Mehendi</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/office-wear-suits" class="mobile-nav__link">Office wear</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/party-wear-suits" class="mobile-nav__link">Party </a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/reception-suits" class="mobile-nav__link">Reception</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/sangeet-suits" class="mobile-nav__link">Sangeet</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/wedding-suits" class="mobile-nav__link">Wedding </a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-3-6" aria-expanded="false">Color<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/suits">Color</a>
                        <collapsible-content id="mobile-menu-3-6" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/red-salwar-suit" class="mobile-nav__link">Red</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/pink-suits" class="mobile-nav__link">Pink</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/white-suits" class="mobile-nav__link">White</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/black-suits" class="mobile-nav__link">Black</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/orange-suits" class="mobile-nav__link">Orange</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/blue-suits" class="mobile-nav__link">Blue</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/purple-suits" class="mobile-nav__link">Purple</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/yellow-suits" class="mobile-nav__link">Yellow</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/brown-suits" class="mobile-nav__link">Brown</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/grey-suits" class="mobile-nav__link">Grey</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/green-suits" class="mobile-nav__link">Green</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/multicolor-suits" class="mobile-nav__link">Multicolor</a>
                              </li></ul>
                        </collapsible-content></li></ul><div class="mobile-nav__images-wrapper  hide-scrollbar">
                  <div class="mobile-nav__images-scroller"><div class="mobile-nav__image-push"><img loading="lazy" class="mobile-nav__image" sizes="270px" height="646" width="380" alt="" src="//cdn.shopify.com/s/files/1/0637/4834/1981/files/Banner-6.jpg?v=1651132202" "></div></div>
                </div></collapsible-content></li><li class="mobile-nav__item" data-level="1"><button is="toggle-button" class="mobile-nav__link heading h5" aria-controls="mobile-menu-4" aria-expanded="false">Kurtis<span class="animated-plus"></span>
            </button>
          <a href="/collections/kurti">Kurtis</a>

            <collapsible-content id="mobile-menu-4" class="collapsible"><ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-4-1" aria-expanded="false">Fabric<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/cotton-kurties">Fabric</a>
                        <collapsible-content id="mobile-menu-4-1" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/silk-kurti" class="mobile-nav__link">Silk</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/rayon-kurti" class="mobile-nav__link">Rayon</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/cotton-kurti" class="mobile-nav__link">Cotton</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/georgette-kurti" class="mobile-nav__link">Georgette</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/crepe-kurti" class="mobile-nav__link">Crepe</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/chiffon-kurti" class="mobile-nav__link">Chiffon</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/chanderi-cotton-kurtis" class="mobile-nav__link">Chanderi Cotton</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/jacquard-kurti" class="mobile-nav__link">Jacquard</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/linen-kurti" class="mobile-nav__link">Linen</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/muslin-kurtis" class="mobile-nav__link">Muslin</a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-4-2" aria-expanded="false">Print/Pattern<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/cotton-kurties">Print/Pattern</a>
                        <collapsible-content id="mobile-menu-4-2" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/floral-print-kurti" class="mobile-nav__link">Floral print</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/solid-kurti" class="mobile-nav__link">Solid</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/bandhani-kurti" class="mobile-nav__link">Bandhani</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/printed-kurtis" class="mobile-nav__link">Printed</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/embroidered-kurtis" class="mobile-nav__link">Embroidered</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/anarkali-kurtis" class="mobile-nav__link">Anarkali</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/a-line-kurtis" class="mobile-nav__link">A-Line</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/straight-kurtis" class="mobile-nav__link">Straight</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/short-kurtis" class="mobile-nav__link">Short </a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/long-kurtis" class="mobile-nav__link">Long</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/high-low-kurtis" class="mobile-nav__link">High Low</a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-4-3" aria-expanded="false">Product Type<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/cotton-kurties">Product Type</a>
                        <collapsible-content id="mobile-menu-4-3" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/kurti-pant-sets" class="mobile-nav__link">Kurti Pant Set</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/kurti-palazzo-sets" class="mobile-nav__link">Kurti Palazzo Set</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/kurti-dhoti-set" class="mobile-nav__link">Kurti Dhoti Set</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/kurti-skirt-set" class="mobile-nav__link">Kurti Skirt Set</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/palazzo-suit" class="mobile-nav__link">Palazzo Suit</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/top-bottom-set" class="mobile-nav__link">Top Bottom Set</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/kurti" class="mobile-nav__link">Kurti</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/kaftan" class="mobile-nav__link">Kaftan</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/kaftan-set" class="mobile-nav__link">Kaftan Set</a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-4-4" aria-expanded="false">Occasion<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/cotton-kurties">Occasion</a>
                        <collapsible-content id="mobile-menu-4-4" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/casual-kurtis" class="mobile-nav__link">Casual / Daily</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/festive-kurtis" class="mobile-nav__link">Festive</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/office-wear-kurtis" class="mobile-nav__link">Office wear</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/party-kurtis" class="mobile-nav__link">Party </a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-4-5" aria-expanded="false">Price<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/cotton-kurties">Price</a>
                        <collapsible-content id="mobile-menu-4-5" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/cotton-kurties?filter.v.price.gte=&filter.v.price.lte=999" class="mobile-nav__link">0-999</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/cotton-kurties?filter.v.price.gte=1000&filter.v.price.lte=1999" class="mobile-nav__link">1000-1999</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/cotton-kurties?filter.v.price.gte=2000&filter.v.price.lte=" class="mobile-nav__link">2000 & above</a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-4-6" aria-expanded="false">Color<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/cotton-kurties">Color</a>
                        <collapsible-content id="mobile-menu-4-6" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/red-kurti" class="mobile-nav__link">Red</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/pink-kurti" class="mobile-nav__link">Pink</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/white-kurti" class="mobile-nav__link">White</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/black-kurti" class="mobile-nav__link">Black</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/orange-kurti" class="mobile-nav__link">Orange</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/blue-kurti" class="mobile-nav__link">Blue</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/purple-kurti" class="mobile-nav__link">Purple</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/yellow-kurti" class="mobile-nav__link">Yellow</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/brown-kurti" class="mobile-nav__link">Brown</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/grey-kurti" class="mobile-nav__link">Grey</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/green-kurti" class="mobile-nav__link">Green</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/multicolor-kurti" class="mobile-nav__link">Multicolor</a>
                              </li></ul>
                        </collapsible-content></li></ul><div class="mobile-nav__images-wrapper  hide-scrollbar">
                  <div class="mobile-nav__images-scroller"><div class="mobile-nav__image-push"><img loading="lazy" class="mobile-nav__image" sizes="270px" height="459" width="277" alt="" src="//cdn.shopify.com/s/files/1/0637/4834/1981/files/Banner-9.jpg?v=1651132362" "></div></div>
                </div></collapsible-content></li><li class="mobile-nav__item" data-level="1"><button is="toggle-button" class="mobile-nav__link heading h5" aria-controls="mobile-menu-5" aria-expanded="false">Lehengas<span class="animated-plus"></span>
            </button>
          <a href="/collections/lehengas">Lehengas</a>

            <collapsible-content id="mobile-menu-5" class="collapsible"><ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-5-1" aria-expanded="false">Fabric<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/lehengas">Fabric</a>
                        <collapsible-content id="mobile-menu-5-1" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/art-silk-lehenga" class="mobile-nav__link">Art Silk</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/banarasi-silk-lehenga" class="mobile-nav__link">Banarasi Silk</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/cotton-lehenga" class="mobile-nav__link">Cotton</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/georgette-lehenga" class="mobile-nav__link">Georgette</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/jacquard-lehenga" class="mobile-nav__link">Jacquard</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/organza-lehengas" class="mobile-nav__link">Organza</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/satin-lehengas" class="mobile-nav__link">Satin</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/silk-lehenga" class="mobile-nav__link">Silk</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/velvet-lehenga" class="mobile-nav__link">Velvet</a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-5-2" aria-expanded="false">Pattern<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/lehengas">Pattern</a>
                        <collapsible-content id="mobile-menu-5-2" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/designer-lehenga" class="mobile-nav__link">Designer</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/digital-lehengas" class="mobile-nav__link">Digital</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/floral-lehenga" class="mobile-nav__link">Floral</a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-5-3" aria-expanded="false">Price<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/lehengas">Price</a>
                        <collapsible-content id="mobile-menu-5-3" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/lehenga?filter.v.price.gte=&filter.v.price.lte=999" class="mobile-nav__link">0-999</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/lehenga?filter.v.price.gte=1000&filter.v.price.lte=1999" class="mobile-nav__link">1000-1999</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/lehenga?filter.v.price.gte=2000&filter.v.price.lte=2999" class="mobile-nav__link">2000-2999</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/lehenga?filter.v.price.gte=3000&filter.v.price.lte=3999" class="mobile-nav__link">3000-3999</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/lehenga?filter.v.price.gte=4000&filter.v.price.lte=4999" class="mobile-nav__link">4000-4999</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/lehenga?filter.v.price.gte=5000&filter.v.price.lte=" class="mobile-nav__link">5000 & above</a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-5-4" aria-expanded="false">Occasion<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/lehengas">Occasion</a>
                        <collapsible-content id="mobile-menu-5-4" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/bridal-lehengas" class="mobile-nav__link">Bridal</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/engagement-lehengas" class="mobile-nav__link">Engagement</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/festive-lehenga" class="mobile-nav__link">Festive</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/haldi-lehengas" class="mobile-nav__link">Haldi</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/mehendi-lehengas" class="mobile-nav__link">Mehendi</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/party-lehengas" class="mobile-nav__link">Party </a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/reception-lehengas" class="mobile-nav__link">Reception</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/sangeet-lehengas" class="mobile-nav__link">Sangeet</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/wedding-lehenga" class="mobile-nav__link">Wedding </a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-5-5" aria-expanded="false">Color<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/lehengas">Color</a>
                        <collapsible-content id="mobile-menu-5-5" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/red-lehenga" class="mobile-nav__link">Red</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/pink-lehenga" class="mobile-nav__link">Pink</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/white-lehenga" class="mobile-nav__link">White</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/black-lehenga" class="mobile-nav__link">Black</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/orange-lehenga" class="mobile-nav__link">Orange</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/blue-lehenga" class="mobile-nav__link">Blue</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/purple-lehenga" class="mobile-nav__link">Purple</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/yellow-lehenga" class="mobile-nav__link">Yellow</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/gold-lehenga" class="mobile-nav__link">Gold</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/grey-lehenga" class="mobile-nav__link">Grey</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/green-lehenga" class="mobile-nav__link">Green</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/multicolor-lehenga" class="mobile-nav__link">Multicolor</a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-5-6" aria-expanded="false">Style<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/lehengas">Style</a>
                        <collapsible-content id="mobile-menu-5-6" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/ready-to-wear-lehengas" class="mobile-nav__link">Ready to wear</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/unstiched-lehengas" class="mobile-nav__link">Unstiched</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/semi-stitched-lehengas" class="mobile-nav__link">Semi stitched</a>
                              </li></ul>
                        </collapsible-content></li></ul><div class="mobile-nav__images-wrapper  hide-scrollbar">
                  <div class="mobile-nav__images-scroller"><div class="mobile-nav__image-push"><img loading="lazy" class="mobile-nav__image" sizes="270px" height="459" width="277" alt="" src="//cdn.shopify.com/s/files/1/0637/4834/1981/files/Banner-11.jpg?v=1651132400" "></div></div>
                </div></collapsible-content></li><li class="mobile-nav__item" data-level="1"><button is="toggle-button" class="mobile-nav__link heading h5" aria-controls="mobile-menu-6" aria-expanded="false">Gowns<span class="animated-plus"></span>
            </button>
          <a href="/collections/gowns">Gowns</a>

            <collapsible-content id="mobile-menu-6" class="collapsible"><ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-6-1" aria-expanded="false">Fabric<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/gowns">Fabric</a>
                        <collapsible-content id="mobile-menu-6-1" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/cotton-gowns" class="mobile-nav__link">Cotton</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/satin-gowns" class="mobile-nav__link">Satin</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/chanderi-gowns" class="mobile-nav__link">Chanderi</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/georgette-gowns" class="mobile-nav__link">Georgette</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/jacquard-gowns" class="mobile-nav__link">Jacquard</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/net-gowns" class="mobile-nav__link">Net</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/rayon-gowns" class="mobile-nav__link">Rayon</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/silk-gowns" class="mobile-nav__link">Silk</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/tapetta-silk-gowns" class="mobile-nav__link">Tapetta Silk</a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-6-2" aria-expanded="false">Occasion<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/gowns">Occasion</a>
                        <collapsible-content id="mobile-menu-6-2" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/bridal-gowns" class="mobile-nav__link">Bridal</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/engagement-gowns" class="mobile-nav__link">Engagement</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/festive-gowns" class="mobile-nav__link">Festive</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/haldi-gowns" class="mobile-nav__link">Haldi</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/mehendi-gowns" class="mobile-nav__link">Mehendi</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/party-gowns" class="mobile-nav__link">Party </a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/reception-gowns" class="mobile-nav__link">Reception</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/sangeet-gowns" class="mobile-nav__link">Sangeet</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/wedding-gowns" class="mobile-nav__link">Wedding </a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-6-3" aria-expanded="false">Price<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/gowns">Price</a>
                        <collapsible-content id="mobile-menu-6-3" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/gowns?filter.v.price.gte=&filter.v.price.lte=999" class="mobile-nav__link">0-999</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/gowns?filter.v.price.gte=1000&filter.v.price.lte=1999" class="mobile-nav__link">1000-1999</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/gowns?filter.v.price.gte=2000&filter.v.price.lte=2999" class="mobile-nav__link">2000-2999</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/gowns?filter.v.price.gte=3000&filter.v.price.lte=3999" class="mobile-nav__link">3000-3999</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/gowns?filter.v.price.gte=4000&filter.v.price.lte=4999" class="mobile-nav__link">4000-4999</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/gowns?filter.v.price.gte=5000&filter.v.price.lte=" class="mobile-nav__link">5000 & above</a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-6-4" aria-expanded="false">Color<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/gowns">Color</a>
                        <collapsible-content id="mobile-menu-6-4" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/red-gowns" class="mobile-nav__link">Red</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/pink-gowns" class="mobile-nav__link">Pink</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/black-gowns" class="mobile-nav__link">Black</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/orange-gowns" class="mobile-nav__link">Orange</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/blue-gowns" class="mobile-nav__link">Blue</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/purple-gowns" class="mobile-nav__link">Purple</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/yellow-gowns" class="mobile-nav__link">Yellow</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/brown-gowns" class="mobile-nav__link">Brown</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/grey-gowns" class="mobile-nav__link">Grey</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/green-gowns" class="mobile-nav__link">Green</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/multicolor-gowns" class="mobile-nav__link">Multicolor</a>
                              </li></ul>
                        </collapsible-content></li></ul></collapsible-content></li><li class="mobile-nav__item" data-level="1"><button is="toggle-button" class="mobile-nav__link heading h5" aria-controls="mobile-menu-7" aria-expanded="false">Western<span class="animated-plus"></span>
            </button>
          <a href="/collections/western">Western</a>

            <collapsible-content id="mobile-menu-7" class="collapsible"><ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-7-1" aria-expanded="false">Fabric<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/western">Fabric</a>
                        <collapsible-content id="mobile-menu-7-1" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/rayon-western" class="mobile-nav__link">Rayon</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/cotton-western" class="mobile-nav__link">Cotton</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/georgette-western" class="mobile-nav__link">Georgette</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/chiffon-western" class="mobile-nav__link">Chiffon</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/crepe-western" class="mobile-nav__link">Crepe</a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-7-2" aria-expanded="false">Type<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/western">Type</a>
                        <collapsible-content id="mobile-menu-7-2" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/tops" class="mobile-nav__link">Tops</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/tunics" class="mobile-nav__link">Tunics</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/dresses" class="mobile-nav__link">Dresses</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/jumpsuit" class="mobile-nav__link">Jumpsuit</a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-7-3" aria-expanded="false">Occasion<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/western">Occasion</a>
                        <collapsible-content id="mobile-menu-7-3" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/casual-daily-western" class="mobile-nav__link">Casual / Daily</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/festive-western" class="mobile-nav__link">Festive</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/office-wear-western" class="mobile-nav__link">Office wear</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/party-western" class="mobile-nav__link">Party </a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-7-4" aria-expanded="false">Price<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/western">Price</a>
                        <collapsible-content id="mobile-menu-7-4" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/western?filter.v.price.gte=&filter.v.price.lte=999" class="mobile-nav__link">0-999</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/western?filter.v.price.gte=1000&filter.v.price.lte=1999" class="mobile-nav__link">1000-1999</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/western?filter.v.price.gte=2000&filter.v.price.lte=" class="mobile-nav__link">2000 & above</a>
                              </li></ul>
                        </collapsible-content></li><li class="mobile-nav__item" data-level="2"><button is="toggle-button" class="mobile-nav__link" aria-controls="mobile-menu-7-5" aria-expanded="false">Color<span class="animated-plus"></span>
                        </button>
                          <a href="/collections/western">Color</a>
                        <collapsible-content id="mobile-menu-7-5" class="collapsible">
                          <ul class="mobile-nav list--unstyled" role="list"><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/red-western" class="mobile-nav__link">Red</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/pink-western" class="mobile-nav__link">Pink</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/white-western" class="mobile-nav__link">White</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/black-western" class="mobile-nav__link">Black</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/orange-western" class="mobile-nav__link">Orange</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/blue-western" class="mobile-nav__link">Blue</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/purple-western" class="mobile-nav__link">Purple</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/yellow-western" class="mobile-nav__link">Yellow</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/brown-western" class="mobile-nav__link">Brown</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/grey-western" class="mobile-nav__link">Grey</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/green-western" class="mobile-nav__link">Green</a>
                              </li><li class="mobile-nav__item" data-level="3">
                                <a href="/collections/multicolor-western" class="mobile-nav__link">Multicolor</a>
                              </li></ul>
                        </collapsible-content></li></ul></collapsible-content></li><li class="mobile-nav__item" data-level="1"><a href="/pages/streams" class="mobile-nav__link heading h5">Live</a></li><li class="mobile-nav__item" data-level="1"><a href="/collections/sale" class="mobile-nav__link heading h5">Sale</a></li><li class="mobile-nav__item" >
                     <a class="mobile-nav__link heading h5" href="/blogs/peachmode" >Blog</a>
                  </li><li class="mobile-nav__item" >
                     <a class="mobile-nav__link heading h5" href="/pages/franchise" >Franchise</a>
                  </li><li class="mobile-nav__item" >
                     <a class="mobile-nav__link heading h5" href="/pages/store-locations" >Store Locator</a>
                  </li><li class="mobile-nav__item" >
                     <a class="mobile-nav__link heading h5" href="/pages/track-your-order" >Track Order</a>
                  </li><li class="mobile-nav__item" >
                     <a class="mobile-nav__link heading h5" href="/pages/contact" >Contact Us</a>
                  </li></ul>
  </div><div class="drawer__footer drawer__footer--tight drawer__footer--bordered">
      <div class="mobile-nav__footer"><a class="icon-text" href="/account/login"><svg focusable="false" width="18" height="17" class="icon icon--header-customer   " viewBox="0 0 18 17">
        <circle cx="9" cy="5" r="4" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="round"></circle>
        <path d="M1 17v0a4 4 0 014-4h8a4 4 0 014 4v0" fill="none" stroke="currentColor" stroke-width="2"></path>
      </svg>Account</a></div>
    </div></mobile-navigation><predictive-search-drawer append-body reverse-breakpoint="screen and (min-width: 1200px)" id="search-drawer" initial-focus-selector="#search-drawer [name='q']" class="predictive-search drawer drawer--large drawer--from-left">
  <span class="drawer__overlay"></span>

  <header class="drawer__header">
    <form id="predictive-search-form" action="/search" method="get" class="predictive-search__form"><svg focusable="false" width="18" height="18" class="icon icon--header-search   " viewBox="0 0 18 18">
        <path d="M12.336 12.336c2.634-2.635 2.682-6.859.106-9.435-2.576-2.576-6.8-2.528-9.435.106C.373 5.642.325 9.866 2.901 12.442c2.576 2.576 6.8 2.528 9.435-.106zm0 0L17 17" fill="none" stroke="currentColor" stroke-width="2"></path>
      </svg><input type="hidden" name="type" value="product">
      <input type="hidden" name="options[prefix]" value="last">
      <input type="hidden" form="predictive-search-form" name="options[unavailable_products]" value="last">
      <input class="predictive-search__input" type="text" name="q" autocomplete="off" autocorrect="off" aria-label="Search" placeholder="What are you looking for?">
    </form>

    <button type="button" class="drawer__close-button tap-area" data-action="close" title="Close"><svg focusable="false" width="14" height="14" class="icon icon--close   " viewBox="0 0 14 14">
        <path d="M13 13L1 1M13 1L1 13" stroke="currentColor" stroke-width="2" fill="none"></path>
      </svg></button>
  </header>

  <div class="drawer__content">
    <div class="predictive-search__content-wrapper">
      <div hidden class="predictive-search__loading-state">
        <div class="spinner"><svg focusable="false" width="50" height="50" class="icon icon--spinner   " viewBox="25 25 50 50">
        <circle cx="50" cy="50" r="20" fill="none" stroke="#222222" stroke-width="4"></circle>
      </svg></div>
      </div>

      <div hidden class="predictive-search__results" aria-live="polite"></div></div>
  </div>

  <footer hidden class="drawer__footer drawer__footer--no-top-padding">
    <button type="submit" form="predictive-search-form" class="button button--primary button--full">View all results</button>
  </footer>
</predictive-search-drawer><script>
  (() => {
    const headerElement = document.getElementById('shopify-section-header'),
      headerHeight = headerElement.clientHeight,
      headerHeightWithoutBottomNav = headerElement.querySelector('.header__wrapper').clientHeight;

    document.documentElement.style.setProperty('--header-height', headerHeight + 'px');
    document.documentElement.style.setProperty('--header-height-without-bottom-nav', headerHeightWithoutBottomNav + 'px');
  })();
</script>

<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Peachmode",
    
      
      "logo": "https:\/\/cdn.shopify.com\/s\/files\/1\/0637\/4834\/1981\/files\/280x80_d20e9ddd-ae15-43c9-9dc7-142b6b7c30e1_280x.png?v=1676437272",
    
    "url": "https:\/\/peachmode.com"
  }
</script></div><div id="shopify-section-mini-cart" class="shopify-section shopify-section--mini-cart"><cart-drawer section="mini-cart" id="mini-cart" class="mini-cart drawer drawer--large">
  <span class="drawer__overlay"></span>

  <header class="drawer__header">
    <p class="drawer__title heading h6"><svg focusable="false" width="21" height="20" class="icon icon--header-shopping-cart   " viewBox="0 0 21 20">
        <path d="M0 1H4L5 11H17L19 4H8" fill="none" stroke="currentColor" stroke-width="2"></path>
        <circle cx="6" cy="17" r="2" fill="none" stroke="currentColor" stroke-width="2"></circle>
        <circle cx="16" cy="17" r="2" fill="none" stroke="currentColor" stroke-width="2"></circle>
      </svg>1 item</p>

    <button type="button" class="drawer__close-button tap-area" data-action="close" title="Close"><svg focusable="false" width="14" height="14" class="icon icon--close   " viewBox="0 0 14 14">
        <path d="M13 13L1 1M13 1L1 13" stroke="currentColor" stroke-width="2" fill="none"></path>
      </svg></button>
  </header><div class="drawer__content"><form id="mini-cart-form" action="/cart" novalidate method="post">
        <input type="hidden" name="checkout"><line-item class="line-item">
            <div class="line-item__content-wrapper">
              <a href="/products/pink-printed-georgette-saree-with-tassels-3?variant=43795228786909" class="line-item__image-wrapper" tabindex="-1" aria-hidden="true">
                <span class="line-item__loader" hidden>
                  <span class="line-item__loader-spinner spinner" hidden><svg focusable="false" width="16" height="16" class="icon icon--spinner   " viewBox="25 25 50 50">
        <circle cx="50" cy="50" r="20" fill="none" stroke="#222222" stroke-width="6"></circle>
      </svg></span>
                  <span class="line-item__loader-mark" hidden><svg focusable="false" width="20" height="20" class="icon icon--check   " viewBox="0 0 32 32">
        <path d="M24.59 8L12.9885 20.6731L7.31806 15.1819L6 16.6956L12.3755 22.8792L13.0805 23.5556L13.7395 22.8309L26 9.43318L24.59 8Z" stroke="currentColor"></path>
      </svg></span>
                </span>

                <img loading="lazy" class="line-item__image" sizes="(max-width: 740px) 80px, 92px" height="2000" width="2000" alt="" src="//cdn.shopify.com/s/files/1/0637/4834/1981/products/file_002c2ee4-d534-43d2-af31-83230b46dc6c.jpg?v=1680870105" ">
              </a><div class="line-item__info">
                <div class="product-item-meta"><a href="/products/pink-printed-georgette-saree-with-tassels-3?variant=43795228786909" class="product-item-meta__title text--small">Pink Printed Georgette Saree With Tassels</a><div class="product-item-meta__price-list-container text--small">
                    <div class="price-list hidden-tablet-and-up"><span class="price price--highlight">
                  <span class="visually-hidden">Sale price</span><span class="money">₹849.00</span></span><span class="price price--compare">
                    <span class="visually-hidden">Regular price</span><span class="money">₹1,699.00</span></span></div></div>
                </div><line-item-quantity class="line-item__quantity">
                  <div class="quantity-selector quantity-selector--small">
                    <a href="/cart/change?quantity=0&line=1" class="quantity-selector__button" aria-label="Decrease quantity" data-no-instant><svg focusable="false" width="8" height="2" class="icon icon--minus   " viewBox="0 0 8 2">
        <path fill="currentColor" d="M0 0h8v2H0z"></path>
      </svg></a>

                    <input is="input-number" class="quantity-selector__input text--xsmall" autocomplete="off" type="text" inputmode="numeric" name="updates[]" data-line="1" value="1"  size="2" aria-label="Change quantity"><a href="/cart/change?quantity=2&line=1" class="quantity-selector__button" aria-label="Increase quantity" data-no-instant><svg focusable="false" width="8" height="8" class="icon icon--plus   " viewBox="0 0 8 8">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M3 5v3h2V5h3V3H5V0H3v3H0v2h3z" fill="currentColor"></path>
      </svg></a></div>

                  <a href="/cart/change?id=43795228786909:0c2f4531b1458e2dcd020de0d869e405&quantity=0" class="line-item__remove-button link text--subdued text--xxsmall" data-no-instant>Remove</a>
                </line-item-quantity>
              </div>

              <div class="line-item__price-list-container text--small hidden-phone"><div class="price-list price-list--stack"><span class="price price--highlight">
                  <span class="visually-hidden">Sale price</span><span class="money">₹849.00</span></span><span class="price price--compare">
                    <span class="visually-hidden">Regular price</span><span class="money">₹1,699.00</span></span></div>
              </div>
            </div>
          </line-item></form><cart-drawer-recommendations section-id="mini-cart" product-id="8045530808541" class="mini-cart__recommendations"><div class="mini-cart__recommendations-inner">
              <div class="spinner"><svg focusable="false" width="40" height="40" class="icon icon--spinner   " viewBox="25 25 50 50">
        <circle cx="50" cy="50" r="20" fill="none" stroke="#222222" stroke-width="3"></circle>
      </svg></div>
            </div></cart-drawer-recommendations></div>

    <footer class="mini-cart__drawer-footer drawer__footer drawer__footer--tight drawer__footer--bordered"><div class="mini-cart__actions text--subdued text--xsmall"><button type="button" is="toggle-button" id="order-note-toggle" class="link" data-action="toggle-order-note" aria-controls="mini-cart-note" aria-expanded="false">Add order note</button><span>Shipping &amp; taxes calculated at checkout</span></div><button is="loader-button" form="mini-cart-form" type="submit" class="checkout-button button button--primary button--full" name="checkout">
          <span class="checkout-button__lock"><svg focusable="false" width="17" height="17" class="icon icon--lock   " viewBox="0 0 17 17">
        <path d="M2.5 7V15H14.5V7H2.5Z" stroke="currentColor" stroke-width="1.5" fill="none"></path>
        <path d="M5.5 4C5.5 2.34315 6.84315 1 8.5 1V1C10.1569 1 11.5 2.34315 11.5 4V7H5.5V4Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"></path>
        <circle cx="8.5" cy="11" r="0.5" stroke="currentColor"></circle>
      </svg></span>

          <!--Checkout-->
          BUY NOW
          <span class="square-separator"></span><span class="money">₹849.00</span></button></footer><openable-element id="mini-cart-note" class="mini-cart__order-note">
      <span class="openable__overlay"></span>
      <label for="cart[note]" class="mini-cart__order-note-title heading heading--xsmall">Add order note</label>
      <textarea is="cart-note" name="note" id="cart[note]" rows="3" aria-owns="order-note-toggle" class="input__field input__field--textarea" placeholder="How can we help you?"></textarea>
      <button type="button" data-action="close" class="form__submit form__submit--closer button button--secondary">Save</button>
    </openable-element></cart-drawer>

</div><div id="main" role="main" class="anchor"><div class="shopify-policy__container">
  <div class="shopify-policy__title">
    <h1>Refund policy</h1>
  </div>

  <div class="shopify-policy__body">
    <div class="rte">
        <p align="justify">We believe in satisfying and delighting our customers. The product which we sell we belive that is the best customer can get at the price. Our return policy is made keeping our valuable customers in mind and hence we have easy transparent procedure for it. However we wish that you do not need to use the policy as far as possible but we do understand that under unforeseen conditions it is necessary to replace/return the product. Items which have reduced selling price are considered as sale items and which are sold at full price are considered non-sale (fresh) items. <br></p>
<h3></h3>
<h3 align="justify">Item Received in Damaged Condition / Manufacturing Defect / Wrong Item Delivered: <br>
</h3>
<ul>
<li>
<p align="justify">If you have received damaged product or the wrong item, please mail us at<span> </span><a class="contact-info" href="mailto:returns@kalaajee.com">returns@kalaajee.com</a><span> </span>with your order number and couple of pictures of the material within 7 Days of delivery. </p>
</li>
<li>
<p>We will try and replace the product as soon as possible or refund the amount if you need.</p>
</li>
<li>
<p align="justify">At Kalaajee each product is quality checked, verified and then shipped to the customer but we understand that manual errors can happen and hence we offer to exchange the product or ship a new piece.</p>
</li>
<li align="justify"><b>Sale of clearance sale items as defined are final and will not be exchanged. </b></li>
</ul>
<h3></h3>
<h3>Do not like the product / Product not as per the picture shown: <br>
</h3>
<ul>
<li>
<p align="justify">We understand that in some cases that you may not like the product which you have received or you feel that the product is different from what was shown. There might be several reasons for that. However we do have a flat 7 Day exchange / return policy in such cases. It is applicable in case of non clearance sale items. </p>
</li>
<li>
<p align="justify">Please mail at<span> </span><a class="contact-info" href="mailto:returns@kalaajee.com">returns@kalaajee.com</a><span> </span>with order number and reason for return.</p>
</li>
<li>
<p align="justify">We will get back to you with return packing slip and pickup arrangements in 48-72 hours. (if the pickup is not available at your pincode then please send the package back to us and we will reimburse upto INR 100/- as the courier charges)</p>
</li>
<li>
<p align="justify">As soon as we receive the product in our warehouse you will get store credit / gift card which can be used to purchase anything else from the website.</p>
</li>
<li>
<p align="justify">Store credit is valid for lifetime. There is no expiry. </p>
</li>
<li>
<p align="justify">We do add almost 100+ designs daily so we are sure that you will be able to find a suitable item from our ever increasing collection.</p>
</li>
<li>
<p align="justify">Cash refund will not be given.</p>
</li>
<li>
<p align="justify">Sale of clearance sale items are final and will not be exchanged. </p>
</li>
</ul>
<h3></h3>
<h3 align="justify">Stitching Problems for International Customers: <br>
</h3>
<ul>
<li>
<p align="justify">We at Kalaajee work with our tailoring team closely to provide you the best fitted product. Although as you understand under normal circumstances with your private tailor after many alterations only perfect fit is possible.</p>
</li>
<li>
<p align="justify">We do recommend you to get the product stitched with your private tailor for the best fit, however we understand in certain international locations stitching is not possible or it is very closely. Hence we provide this service at nominal cost.</p>
</li>
<li>
<p align="justify">We recommend that when you select standard size you also put the detailed sizing for the order in comments section which is taken from your tailor. Standard sizing may not fit all and in most cases alterations are required.</p>
</li>
<li>
<p align="justify">We can alter the product for you free of cost but you will have to send the product at your own expense and we will alter it and send it back to you. One side shipping charge company will bear.</p>
</li>
<li>
<p align="justify">Please mail the details along with alterations needed on<span> </span><a class="contact-info" href="mailto:returns@kalaajee.com">returns@kalaajee.com.</a></p>
</li>
<li>
<p align="justify">In any case stitched product won't be taken back and money will not be refunded.  </p>
</li>
</ul>
<h3>Beads and Sequences coming off: <br>
</h3>
<ul>
<li>
<p align="justify">We hope that people who buy product with beads and sequences understand that it has tendency to come off. Even with good handling and shipping this cannot be avoided. Most of such problems can be avoided during stitching. Tailor can hide the part which has less sequences or he can fix it all together. Before returning the product please ask your tailor if it can be adjusted. Even if we replace such items there are high chances that you will receive similar product again.</p>
</li>
</ul>
    </div>
  </div>
</div>

<div id="shopify-section-static-newsletter" class="shopify-section shopify-section--newsletter"></div><div id="shopify-section-static-text-with-icons" class="shopify-section shopify-section--text-with-icons"><style>
    #shopify-section-static-text-with-icons {--heading-color: 255, 255, 255;
      --text-color: 255, 255, 255;
      --section-background: 245, 127, 127;
      --vertical-breather: 40px; /* Inner spacing is smaller on this section */
    }
  </style>

  <?php include "components/footer.php" ?>
  </div>
  </div>

<cookie-bar section="footer" hidden class="cookie-bar text--xsmall"><p class="heading heading--xsmall">Cookie policy</p><p>I agree to the processing of my data in accordance with the conditions set out in the policy of Privacy.</p><div class="cookie-bar__actions">
      <button class="button button--text button--primary button--small text--xsmall" data-action="accept-policy">Accept</button>
      <button class="button button--text button--ternary button--small text--xsmall" data-action="decline-policy">Decline</button>
    </div>
  </cookie-bar></div><script async src="https://loox.io/widget/N1gBr7V_Ih/loox.1652507684332.js?shop=peachm.myshopify.com"></script>
    
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    

  <script src="//cdn.codeblackbelt.com/js/modules/also-bought/main.min.js?shop=peachm.myshopify.com" defer></script>

  

  

  
 
<script>
  
  $(".product-form__add-button,.shopify-payment-button button").on("click",function(){
    setTimeout(function(){
      
       let proTitle = $(".product-meta__title a").html();
      
      let productName = proTitle +" - "+ $(".block-swatch__radio:checked").val();
      let productPrice =   $(".product-meta__price-list-container .price.price--highlight .money").html();
      let variantID = $('[name="id"]').val();
      let currency = localStorage.getItem("wscc-currency")??"INR";
      fbq('track', 'AddToCart', {
        content_name: productName,       
        content_ids: productSKU,
        content_type: 'product',
        value: (productPrice.replace(",","").match(/(\d+)/)[0]),
        currency: currency
      }); 
      console.log({
        content_name: productName,       
        content_ids: productSKU,
        content_type: 'product',
        value: (productPrice.replace(",","").match(/(\d+)/)[0]),
        currency: currency
      });
     },500);
});  
</script>


<script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W42Q78');
    
    </script><div id="shopify-section-searchtap" class="shopify-section">
<link rel="stylesheet" href="//cdn.shopify.com/s/files/1/0637/4834/1981/t/4/assets/st.aio.min.css?v=6571519147001539231669276710">
<script src="//cdn.shopify.com/s/files/1/0637/4834/1981/t/4/assets/st.aio.min.js?v=90017031462102016991669276710" defer></script>

<div id="searchModalContainer" class="" v-cloak>
         <div class="container" id="searchModal" style="display: none" v-show="isOpen">
             <div id="stOverlay">
                 <div class="resultLoading" v-show="loader">
                     <div class="st-loader"></div>
                 </div>
                 <div class="noResult" v-show="totalHits===0 && !someError">
                     <div>No Search Result <span v-if="query"> for '${ query }$'</span></div>
                     <h3>
                         <span>Please try with different query <span v-if="filterCount > 0">or try <span class="high-light text-main" v-on:click="clearFilters()">clearing </span>Filters.</span><span v-else>.</span></span>
                     </h3>
                     <div class="st-explore-more">Explore Our Other Collections</div>
                     <ul class="st-row">
                         <li class="st-col-md-3 st-col-sm-3 st-col-xs-6">
                             <!-- Collection image -->
                             <a href="/collections/indo-western">
                                 <div class="image">
                                     <div class="inner">
                                         <img loading="lazy" src="//cdn.shopify.com/s/files/1/0637/4834/1981/files/Banner-9_79b539fb-024e-453e-b19a-e057da36b7bb.jpg?v=1655475150"
                                              alt=""
                                             
                                              srcset="//cdn.shopify.com/s/files/1/0637/4834/1981/files/Banner-9_79b539fb-024e-453e-b19a-e057da36b7bb.jpg?v=1655475150"
                                              sizes="auto"/>
                                     </div>
<!--                                     <div class="brand-spacing">
                                         <div class="brand-txt">Fabrics</div>
                                     </div>-->

                                 </div>
                             </a>
                         </li>
                         <li class="st-col-md-3 st-col-sm-3 st-col-xs-6">
                             <!-- Collection image -->
                             <a href="/collections/floral-lehenga">
                                 <div class="image">
                                     <div class="inner">
                                         <img loading="lazy"
                                                 src="//cdn.shopify.com/s/files/1/0637/4834/1981/files/Banner-10_c457bafa-bf88-4572-b74d-9246026000db.jpg?v=1655475179"
                                                 alt=""
                                                 srcset="//cdn.shopify.com/s/files/1/0637/4834/1981/files/Banner-10_c457bafa-bf88-4572-b74d-9246026000db.jpg?v=1655475179"
                                                 sizes="auto"/>
                                     </div>
<!--                                     <div class="brand-spacing">
                                         <div class="brand-txt">Dupattas</div>
                                     </div>-->

                                 </div>
                             </a>
                         </li>
                         <li class="st-col-md-3 st-col-sm-3 st-col-xs-6">
                             <!-- Collection image -->
                             <a href="/collections/satin-saree">
                                 <div class="image">
                                     <div class="inner">
                                         <img loading="lazy" src="//cdn.shopify.com/s/files/1/0637/4834/1981/files/Banner-11_eca3e973-2ea4-4d48-8601-889ab3c6be96.jpg?v=1655475195"
                                              alt=""
                                              srcset="//cdn.shopify.com/s/files/1/0637/4834/1981/files/Banner-11_eca3e973-2ea4-4d48-8601-889ab3c6be96.jpg?v=1655475195"
                                              sizes="auto"/>
                                     </div>
<!--                                     <div class="brand-spacing">
                                         <div class="brand-txt">Stoles</div>
                                     </div>-->

                                 </div>
                             </a>
                         </li>
                         <li class="st-col-md-3 st-col-sm-3 st-col-xs-6">
                             <!-- Collection image -->
                             <a href="/collections/casual-suits-dress-material">
                                 <div class="image">
                                     <div class="inner">
                                         <img loading="lazy" src="//cdn.shopify.com/s/files/1/0637/4834/1981/files/Banner-12_12da5dda-1508-43e4-915a-11f64d740b2d.jpg?v=1655475211"
                                              alt=""
                                             
                                              srcset="//cdn.shopify.com/s/files/1/0637/4834/1981/files/Banner-12_12da5dda-1508-43e4-915a-11f64d740b2d.jpg?v=1655475211"
                                              sizes="auto"/>
                                     </div>
<!--                                     <div class="brand-spacing">
                                         <div class="brand-txt">Sarees</div>
                                     </div>-->

                                 </div>
                             </a>
                         </li>
                     </ul>
                 </div>
                 <div class="somethingWentWrong" v-show="someError">
                     <div>Oops !!! Something Went Wrong.</div>
                     <h3><span>Please try <span class="high-light text-main" onclick="window.location.reload()">again</span>
                   or visit our
                  <a class="high-light text-main" v-bind:href="base_url">Home Page.</a></span>
                     </h3>
                 </div>
             </div>

             <div id="stMainContent" v-show="!loader && totalHits && !someError">

                 <div class="st-row">
                     <div id="left" class="st-hidden-sm st-col-md-3 st-hidden-xs scrollbar">
                         <div class="filter-inner">
                             <div class="filter-top-head">
                                 <span class="top-head-title">Filters</span>
                                 <span class="reset" v-show="filterCount > 0" v-on:click="clearFilters()">Reset All</span>
<!--                                 <span class="desktop-filter-cross" @click="showDesktopFilters = false"><svg focusable="false" width="14" height="14" viewBox="0 0 14 14">
        <path d="M13 13L1 1M13 1L1 13" stroke="currentColor" stroke-width="2" fill="none"></path>
      </svg></span>-->
                             </div>

                             <div class="filter-bottom-body scrollbar">
                                 <div id="selected-filter-desktop">
                                     <div class="st-filter-tags">
                                         <div class="st-filter-inner" v-show="filterCount>0">
                                             <div class="selected-tags">
                                                 <div class="tag-item" v-for="i in selectedFilterValues" :key="i">
                                                     <div class="tag-close" @click="removeFilterValue(i.filter_val)">✕</div>
                                                     <div class="tag-content">${i.filter_val}$</div>
                                                 </div>
                                             </div>
                                             <!--                                        <div class="tag-item st-last-clear-tag" style="margin-right: 0px !important;">
                                                                                         <div class="tag-content" style="max-width: 100% !important; color: rgb(255, 255, 255) !important;" @click="clearFilters()">Clear All</div>
                                                                                     </div>-->
                                         </div>
                                     </div>
                                 </div>

                                 <div class="filter-wrapper" v-for="f in filters" v-show="(f.values.length>0 || f.selected.length>0 || f.field==='excludeOutOfStock') && !f.onTop">

                                     <span class="clear" v-show="f.selected.length > 0" v-on:click="clearFilters(f.field)">Clear</span>
                                     <div class="filter-head" v-on:click="f.isOpen = !f.isOpen">
                                         <span class="st-filter-title">${ f.title }$</span>
                                         <span class="arrow down-arrow" v-show="!f.isOpen"><svg viewBox="0 0 12 8" class="icon icon--chevron icon--inline  " height="8" width="12" focusable="false">
        <path fill="none" d="M1 1l5 5 5-5" stroke="currentColor" stroke-width="2"></path>
      </svg></span>
                                         <span class="arrow up-arrow" v-show="f.isOpen"><svg viewBox="0 0 12 8" class="icon icon--chevron icon--inline st-icon--arrow-up " height="8" width="12" focusable="false">
        <path fill="none" d="M1 1l5 5 5-5" stroke="currentColor" stroke-width="2"></path>
      </svg></span>
                                     </div>
                                     <div class="filter-body" v-show="f.isOpen">
                                         <div class="filter-list scrollTop scrollbar" v-if="f.type==='multiple' && f.title!=='Price' && f.title!=='Discount' && f.title !=='Customer Ratings'">
                                             <div class="filter-item selected" v-for="i in f.selected" v-bind:key="i">
                                                 <label>
                                                     <input type="checkbox" v-bind:value="i" v-model="f.selected" v-on:change="pushFilter(), goToTop()"/>
                                                     <span class="checkbox"><svg focusable="false" width="12px" viewBox="0 0 24 24" role="presentation" class="icon st-icon--check"><path fill="currentColor" d="M9 20l-7-7 3-3 4 4L19 4l3 3z"></path></svg></span>
                                                     <span class="filter-label">${ i }$ (${ getSelectedCount(i, f.field) }$)</span>
                                                     <span class="filter-count">[${ getSelectedCount(i, f.field) }$]</span>
                                                 </label>
                                             </div>
                                             <div class="filter-item" v-for="i in getNotSelectedFilters(f.field)" v-bind:key="i.name">
                                                 <label>
                                                     <input type="checkbox" v-bind:value="i.name" v-model="f.selected"
                                                            v-on:change="pushFilter(),filterAnalytics('left',f.title,i.name), goToTop()"/>
                                                     <span class="checkbox"></span>
                                                     <span class="filter-label">${ i.name }$ (${ i.count }$)</span>
                                                     <span class="filter-count">[${ i.count }$]</span>
                                                 </label>
                                             </div>
                                         </div>

                                         <div class="filter-list scrollTop scrollbar" v-if="f.title==='Price' || f.title==='Discount' || f.title==='Customer Ratings'">
                                             <div class="filter-item selected" v-for="i in f.selected" v-bind:key="i[0]">
                                                 <label>
                                                     <input type="checkbox" v-bind:value="i" v-model="f.selected" v-on:change="pushFilter(), goToTop()"/>
                                                     <span class="checkbox"><svg focusable="false" width="12px" viewBox="0 0 24 24" role="presentation" class="icon st-icon--check"><path fill="currentColor" d="M9 20l-7-7 3-3 4 4L19 4l3 3z"></path></svg></span>
                                                     <span class="filter-label" v-if="f.title==='Discount'" v-bind:title="i[0] + '% - ' + i[1] + '%'">${ i[0] }$% - ${ i[1] }$% (${ getSelectedCount(i, f.field) }$)</span>
                                                     <span class="filter-label" v-if="f.title==='Price'"><span class="st-money">${ currency }$ ${ numberWithComa(i[0]) }$</span> - <span class="st-money">${
                                                             currency }$ ${ numberWithComa(i[1]) }$</span></span>
                                                     <span class="filter-label" v-if="f.title==='Customer Ratings'"  v-bind:title="i[0] + '+ Rating'">
                                                                              <span class="full-star" v-for="a in i[0]">
                                                                                <i class="fa fa-star"></i> </span
                                                                              ><span>${ i[0] }$+ Rating</span>
                                                                            </span>
                                                     <span class="filter-count">[${ getSelectedCount(i, f.field) }$]</span>
                                                 </label>
                                             </div>

                                             <div
                                                     class="filter-item" v-for="i in getNotSelectedFilters(f.field)" v-bind:key="i.min">
                                                 <label>
                                                     <input type="checkbox" v-bind:value="[i.min,i.max]" v-model="f.selected" v-on:change="pushFilter(),filterAnalytics('left',f.title,[i.min,i.max]), goToTop()"/>
                                                     <span class="checkbox"></span>
                                                     <span class="filter-label" v-if="f.title==='Discount'" v-bind:title="i.min + '% -' +i.max + '%'">${ i.min }$% - ${ i.max }$% (${ i.count }$)</span>
                                                     <span class="filter-label" v-if="f.title==='Price'"><span class="st-money">${ currency }$ ${ numberWithComa(i.min) }$</span> - <span class="st-money">${
                                                             currency }$ ${ numberWithComa(i.max) }$</span></span>
                                                     <span class="filter-label" v-if="f.title==='Customer Ratings'"  v-bind:title="i.min + '+ Rating'">
                                                                              <span class="full-star" v-for="a in i.min">
                                                                                <i class="fa fa-star"></i> </span
                                                                              ><span>${ i.min }$+ Rating</span>
                                                                            </span>
                                                     <span class="filter-count">[${ i.count }$]</span>
                                                 </label>
                                             </div>
                                         </div>
                                         <div
                                                 class="filter-list scrollTop scrollbar" v-if="f.type==='single'">
                                             <div class="filter-item" v-for="i in f.values" v-bind:key="i" v-bind:class="{'selected':f.selected.length > 0}">
                                                 <label>
                                                     <input type="checkbox" v-bind:value="i" v-model="f.selected" v-on:change="pushFilter(), goToTop()"/>
                                                     <span class="checkbox"><svg focusable="false" width="12px" viewBox="0 0 24 24" role="presentation" class="icon st-icon--check"><path fill="currentColor" d="M9 20l-7-7 3-3 4 4L19 4l3 3z"></path></svg></span>
                                                     <span class="filter-label">${ i }$</span>
                                                 </label>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
<!--                             <div class="filter-bottom-apply" @click="showDesktopFilters = false">
                                 <span class="desktop-apply-btn">View Results</span>
                             </div>-->
                         </div>
                     </div>
                     <div id="right" class="st-col-xs-12 st-col-sm-12 st-col-md-9">

                         <div class="st-row st-hidden-md st-hidden-lg" id="mobile-filter-sort">
                             <div class="st-col-xs-6" v-on:click="showMobileFilter= true">
                                 <div class="st-filter-tab tab position-relative">
                                    <span>
                                        <svg focusable="false" width="14px" class="icon icon--filter" viewBox="0 0 19 20" role="presentation">
      <path d="M17.0288086 4.01391602L11 9v7.0072021l-4 2.008545V9L1.01306152 4.01391602V1H17.0288086z" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="square"></path>
    </svg>
                                    </span>
                                     <span class="filter-tab-label">Filter By<span v-show="filterCount > 0"> (${filterCount}$)</span></span>
                                     <!--                                      <span class="filter-cue cue" v-show="filterCount > 0"></span>-->
                                 </div>
                             </div>
                             <div class="st-col-xs-6 mobile-filter-sort-open">
                                 <div class="sort-tab tab" @click="sortDisplay=true">
                                    <span>
                                        <svg version="1.1" id="Layer_1" width="14px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 460.088 460.088" style="enable-background:new 0 0 460.088 460.088;" xml:space="preserve"><g><g><g><path d="M25.555,139.872h257.526V88.761H25.555C11.442,88.761,0,100.203,0,114.316C0,128.429,11.442,139.872,25.555,139.872z"/>
			<path d="M25.555,242.429h257.526v-51.111H25.555C11.442,191.318,0,202.76,0,216.874C0,230.988,11.442,242.429,25.555,242.429z"/>
			<path d="M25.555,293.874v0.001C11.442,293.875,0,305.316,0,319.43s11.442,25.555,25.555,25.555h178.91
				c-2.021-6.224-3.088-12.789-3.088-19.523c0-11.277,2.957-22.094,8.48-31.588H25.555z"/>
			<path d="M450.623,302.611c-12.62-12.621-33.083-12.621-45.704,0l-26.535,26.535V52.926c0-17.849-14.469-32.317-32.318-32.317
				s-32.318,14.469-32.318,32.317v276.22l-26.535-26.535c-12.621-12.62-33.083-12.621-45.704,0
				c-12.621,12.621-12.621,33.083,0,45.704l81.7,81.699c12.596,12.6,33.084,12.643,45.714,0l81.7-81.699
				C463.243,335.694,463.244,315.232,450.623,302.611z"/>
		</g>
	</g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
</svg>
                                    </span>
                                     <span class="sort-tab-label">Sort By</span>
                                     <span class="sort-cue cue" v-show="sortLabel !== 'Relevance'"></span>
                                 </div>
                             </div>
                         </div>

                         <div id="result-info-brand-sort" class="st-row">
                             <div class="st-col-xs-12 st-col-md-7">
                                 <span class="result-info">
<!--                                     <span class="">Showing </span>-->
                                     ${ totalHits }$
                                     <span v-show="totalHits !== 1"> products</span>
                                     <span v-show="totalHits === 1"> product</span>
                                     <span class="st-hidden-xs st-hidden-sm" v-if="query">
                                         for
                                         <span class="text-main">'${ query | truncate(15) }$'</span>
                                     </span>
                                 </span>
                                 <span class="separator st-hidden-xs st-hidden-sm"></span>
                                 <span class="brand">
                      <a href="https://www.searchtap.io?utm_source=peachmode&utm_medium=website" target="_blank" class="st-brand-link">
                        <span>Powered by SearchTap</span>
                        <img loading="lazy" src="https://www.searchtap.io/img/st-gray-icon.svg" alt="grey-logo" class="st-logo grey-logo lazyautosizes lazyload"/>
                        <img loading="lazy" src="https://www.searchtap.io/img/st-icon.svg" alt="green-logo" class="st-logo green-logo lazyautosizes lazyload"/>
                      </a>
                    </span>
                             </div>
                             <div class="st-hidden-xs st-hidden-sm st-col-md-5 st-col-lg-5">
                                 <div class="st-sort-desktop xx">
                                     <span class="sort-text">Sort By:</span>
                                     <div class="sort-wrapper"
                                          @click="sortDesktopDisplay = !sortDesktopDisplay">
                                         <div class="sort-tab">
                                             <span class="st-sort-title">${ sortLabel }$</span>
                                             <span class="st-down-arrow">
                                                <svg focusable="false" width="14px" class="icon st-icon--arrow-bottom" viewBox="0 0 12 8" role="presentation">
      <path stroke="currentColor" stroke-width="2" d="M10 2L6 6 2 2" fill="none" stroke-linecap="square"></path>
    </svg>
                                            </span>
                                         </div>

                                         <div class="sort-body" v-show="sortDesktopDisplay">
                                             <div class="sort-list">
                                                 <div class="sort-item" v-bind:class="{'selected':sortLabel === sort.label}"
                                                      v-for="sort in sorts" v-bind:key="sort.label" v-on:click="sorting(sort.label), goToTop()">
                                                     <span>${ sort.label }$</span>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="st-row" id="products-listing">
                             <div class="st-product st-col-xs-6 st-col-sm-3 st-col-md-3" v-bind:key="item.id" v-for="item in results">
                                 <!-- <Products inline-template v-bind:item="item"> -->

                                 <div class="product-inner" :class="`product_${item.id}`">
                                     <!--                                      <a :href="getUrl(item.handle)" @click="prodUrl(item.title)">-->

                                     <div class="product-top">
                                         <div class="product-tags" :class="{ 'sale': item.discount > 0 }">
                                             <!--                                                    <span class="tag new" v-show="item.tags.indexOf('new')> -1">New</span>-->
                                             <span class="tag sold-out" v-show="!item.isActive">Sold Out</span>
                                             <span class="tag sale" v-show="item.isActive && item.discount > 0">SAVE ${item.discount}$%</span>
                                             <!--                                                    <span class="tag sale_banner" v-show="item.product_type">${item.product_type}$</span>-->
                                         </div>
                                         <a :href="getUrl(item.handle)" @click="prodUrl(item.title)">
                                             <div class="product-images" :id="`img_id_${item.id}`">
                                                 <!--                                                <div class="hover-effect"></div>-->
                                                 <img loading="lazy" class="img main-img lazyautosizes lazyload" :src="imgResizer(item.image ,'_large')"/>
                                                 <img loading="lazy" v-if="item.images[1]" class="img hover-img lazyautosizes lazyload" :src="imgResizer(item.images[1], '_large')"/>
                                                 <img loading="lazy" v-else class="img hover-img lazyautosizes lazyload" :src="imgResizer(item.image ,'_large')"/>
                                             </div>
                                         </a>
                                     </div>
                                     <div class="product-bottom">
                                         <div class="product-title">
                                             <a :href="getUrl(item.handle)" @click="prodUrl(item.title)">
                                                 <span>${ item.title }$</span>
                                             </a>
                                         </div>
                                         <div class="st-product-prices">
                                             <div class="product-prices" v-show="item.discount > 0">
                                                 <span class="multiple-prices" v-if="item.hasMultiplePrice">From </span>
                                                 <span class="discounted_price st-money">${currency }$${ numberWithComa(item.activeDiscountedPrice) }$</span>
                                                 <span class="price st-money">${ currency }$${numberWithComa(item.activePrice) }$</span>
                                                 <!--                                                  <span class="discount">(Save ${ item.discount }$%)</span>-->
                                             </div>

                                             <div class="product-prices no-sale" v-show="item.discount <= 0">
                                                 <!--                                                        <span class="multiple-prices" v-if="item.hasMultiplePrice">from </span>-->
                                                 <span class="price.no_sale st-money">${currency }$${ numberWithComa(item.activeDiscountedPrice) }$</span>
                                             </div>
                                             <div class="st-instock-quant">${getTotalQuantity(item.variants)}$ in Stock</div>
                                         </div>
                                         <!--                                        </a>-->
                                         <!--                                            </div>-->
                                         <!--                                        </a>-->
                                     </div>
                                     <!--                                      </a>-->
                                 </div>
                                 <!-- </Products> -->
                             </div>
                         </div>

                         <div class="st-results-end" id="products-footer">${setCurrency()}$
                             <div class="st-results-loader">
                                 <!--                                        <div class="result-load-more" v-show="!resultsEnd" @click="loadMore">
                                                                             <span>Show More</span>
                                                                         </div>-->
                                 <div class="result-loading" v-show="!resultsEnd">
                                    <span class="st-spinner">
                                        <svg version="1.1" id="L5" width="90px" height="60px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
  <circle fill="#ee3d63" stroke="none" cx="6" cy="50" r="6">
    <animateTransform
            attributeName="transform"
            dur="1s"
            type="translate"
            values="0 15 ; 0 -15; 0 15"
            repeatCount="indefinite"
            begin="0.1"/>
  </circle>
  <circle fill="#ee3d63" stroke="none" cx="30" cy="50" r="6">
    <animateTransform
            attributeName="transform"
            dur="1s"
            type="translate"
            values="0 10 ; 0 -10; 0 10"
            repeatCount="indefinite"
            begin="0.2"/>
  </circle>
  <circle fill="#ee3d63" stroke="none" cx="54" cy="50" r="6">
    <animateTransform
            attributeName="transform"
            dur="1s"
            type="translate"
            values="0 5 ; 0 -5; 0 5"
            repeatCount="indefinite"
            begin="0.3"/>
  </circle>
</svg>
                                    </span>
                                 </div>
                             </div>

                             <div class="result-ends" v-show="resultsEnd">
                                 <span>Result Ends Here</span>
                             </div>
                         </div>
                     </div>

                 </div>

<!--                 <div class="st-row">
                    <div id="pagination" class="st-col-xs-12 st-col-sm-12 st-col-md-12 st-pagination" v-if="!loader && results.length > 0">
                     &lt;!&ndash;                          <span class="pagination-text">Showing items ${ currOffset + 1 }$ - ${ currOffset + results.length }$ of ${ totalHits }$.</span>&ndash;&gt;
                     <Paginate :page-count="pageCount" :page-range="1" v-model="currPage"
                               prev-text="Load Previous" next-text="Load More"
                               :container-class="'pagination-custom text-center'"
                               :page-class="'page-item st-hide-page'" :next-class="'page-item st-next'"
                               :prev-class="'page-item st-prev'" :click-handler="loadMore" :hide-prev-next="false"
                               :break-view-class="'st-break-view'" v-show="pageCount>1">
                     </Paginate>

                 </div>
                 </div>-->


                 <div class="st-hidden-md st-hidden-lg" id="mobile-filter-container">
                     <div class="filter-wrapper" v-show="showMobileFilter">
                         <div class="filter-head align-items-center position-absolute st-row">
                             <div class="st-col-xs-5 st-text-left">
                                 <span class="filter-head-label">Filter By</span>
                             </div>
                             <div class="st-col-xs-7 st-text-right">
                                 <span class="clear-all" v-on:click="clearFilters()" v-show="filterCount > 0">Reset All</span>
                                 <span class="filter-close" v-on:click="showMobileFilter =false">Close</span>
                                 <span class="filter-head-cross" v-on:click="showMobileFilter =false">
                                          <svg height="10px" style="enable-background: new 0 0 512.001 512.001" viewBox="0 0 512.001 512.001" width="10px" x="0px" xml:space="preserve" y="0px">
                                            <path
                                                    class="active-path"
                                                    d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285    L284.286,256.002z"
                                                    data-old_color="#000000"
                                                    data-original="#000000"
                                                    fill="#4E3830"
                                            />
                                          </svg>
                                        </span>
                             </div>
                         </div>
                         <div class="filter-content">
                             <div class="filter-titles">
                                 <div class="filter-items" v-bind:key="f.title" v-for="f in filters" :class="{'active' : filterValue === f.title}" v-show="(f.values.length>0 || f.selected.length>0 || f.field==='excludeOutOfStock') && !f.onTop">
                                     <div class="filter-item-head" @click="filterValue = f.title">
                                    <span class="filter-item-head-label"
                                          v-on:click="f.isMobileOpen = !f.isMobileOpen">${ f.title }$</span>
                                         <span class="filter-clear"
                                               v-on:click="clearFilters(f.field)"
                                               v-show="f.selected.length > 0">Clear</span>
                                         <span class="filter-arrows arrows"
                                               v-show="!f.isMobileOpen" v-on:click="f.isMobileOpen = !f.isMobileOpen"><i aria-hidden="true" class="fa fa-chevron-down"></i></span>
                                         <span class="filter-arrows arrows" v-show="f.isMobileOpen" v-on:click="f.isMobileOpen = !f.isMobileOpen"><i aria-hidden="true" class="fa fa-chevron-up"></i></span>
                                     </div>
                                 </div>
                             </div>

                             <div class="mobile-filter-body">
                                 <div class="filter-item-body" v-bind:key="f.title" v-for="f in filters" v-show="f.title === filterValue">
<!--                                     <div class="filter-search" v-if="f.hasSearchBox">
                                         <input type="text" :placeholder="`Search ${f.title}...`"
                                                v-model.trim="f.searchProp"
                                                @keyup="filterSearch(f)">
                                     </div>-->
                                     <div class="filter-values-list scrollTop scrollbar">
                                         <div v-if="f.textType==='text'">
                                             <div class="filter-item selected" v-bind:key="i"
                                                  v-for="i in f.selected">
                                                 <label>
                                                     <input type="checkbox"
                                                            v-bind:value="i"
                                                            v-model="f.selected"
                                                            v-on:change="pushFilter(), goToTop()"/>
                                                     <span class="checkbox"> <svg focusable="false" class="icon st-icon--check" width="12px" viewBox="0 0 24 24" role="presentation">
      <path fill="currentColor" d="M9 20l-7-7 3-3 4 4L19 4l3 3z"></path>
    </svg></span>
                                                     <span class="filter-label">${ i }$</span>
                                                     <span class="filter-count">(${ getSelectedCount(i, f.field) }$)</span>
                                                 </label>
                                             </div>
                                             <div
                                                     class="filter-item"
                                                     v-bind:key="i.name"
                                                     v-for="i in getNotSelectedFilters(f.field)"
                                             >
                                                 <label>
                                                     <input
                                                             type="checkbox"
                                                             v-bind:value="i.name"
                                                             v-model="f.selected"
                                                             v-on:change="pushFilter(),filterAnalytics('left',f.title,i.name), goToTop()"
                                                     />
                                                     <span class="checkbox"
                                                     ><i aria-hidden="true" class="fa fa-check"></i
                                                     ></span>
                                                     <span class="filter-label">${ i.name }$</span>
                                                     <span class="filter-count">(${ i.count }$)</span>
                                                 </label>
                                             </div>
                                         </div>
                                         <div v-if="f.textType==='numeric'">
                                             <div class="filter-item selected" v-bind:key="i" v-for="i in f.selected">
                                                 <label>
                                                     <input type="checkbox"
                                                            v-bind:value="i"
                                                            v-model="f.selected"
                                                            v-on:change="pushFilter(), goToTop()"/>
                                                     <span class="checkbox"> <svg focusable="false" class="icon st-icon--check" width="12px" viewBox="0 0 24 24" role="presentation">
      <path fill="currentColor" d="M9 20l-7-7 3-3 4 4L19 4l3 3z"></path>
    </svg></span>
                                                     <span class="filter-label" v-if="f.title==='Discount'">${ i[0] }$% & Above</span>
                                                     <span class="filter-label" v-if="f.title==='Customer Ratings'">
                                                  <span class="full-star" v-for="a in i[0]">
                                                    <i class="fa fa-star"></i> </span
                                                  ><span>${i[0]}$+ Rating</span>
                                                </span>
<!--                                                     <span class="filter-label" v-if="f.title==='Price' && i[1] === 10000000">${ currency }$${ numberWithComa(i[0]) }$ - Above</span>-->
                                                     <span class="filter-label" v-if="f.title==='Price'"><span class="st-money">${ currency }$ ${ numberWithComa(i[0]) }$</span> - <span class="st-money">${
                                                             currency }$ ${ numberWithComa(i[1]) }$</span></span>

                                                     <span class="filter-count">(${ getSelectedCount(i, f.field) }$)</span>
                                                 </label>
                                             </div>
                                             <div class="filter-item" v-bind:key="i.min" v-for="i in getNotSelectedFilters(f.field)">
                                                 <label>
                                                     <input type="checkbox"
                                                            v-bind:value="[i.min,i.max]"
                                                            v-model="f.selected"
                                                            v-on:change="pushFilter(),filterAnalytics('left',f.title,[i.min,i.max]), goToTop()"/>
                                                     <span class="checkbox"><i aria-hidden="true" class="fa fa-check"></i></span>
                                                     <span class="filter-label" v-if="f.title==='Discount'">${ i.min }$% & Above</span>

                                                     <span class="filter-label" v-if="f.title==='Customer Ratings'">
                                                  <span class="full-star" v-for="a in i.min">
                                                    <i class="fa fa-star"></i> </span><span>${i.min}$+ Rating</span>
                                                </span>
<!--                                                     <span class="filter-label money"  v-if="f.title==='Price' && i.max === 10000000">${ currency }$${ numberWithComa(i.min) }$ - Above</span>-->
                                                     <span class="filter-label"  v-if="f.title==='Price'"><span class="st-money">${ currency }$ ${ numberWithComa(i.min) }$</span> - <span class="st-money">${
                                                             currency }$ ${ numberWithComa(i.max) }$</span></span>

                                                     <span class="filter-count">(${ i.count }$)</span>
                                                 </label>
                                             </div>
                                         </div>
                                         <div v-if="f.type==='single'">
                                             <div
                                                     class="filter-item"
                                                     v-bind:class="{'selected':f.selected.length > 0}"
                                                     v-bind:key="i"
                                                     v-for="i in f.values"
                                             >
                                                 <label>
                                                     <input
                                                             type="checkbox"
                                                             v-bind:value="i"
                                                             v-model="f.selected"
                                                             v-on:change="pushFilter(), goToTop()"
                                                     />
                                                     <span class="checkbox"> <svg focusable="false" class="icon st-icon--check" width="12px" viewBox="0 0 24 24" role="presentation">
      <path fill="currentColor" d="M9 20l-7-7 3-3 4 4L19 4l3 3z"></path>
    </svg></span>
                                                     <span class="filter-label">${ i }$</span>
                                                 </label>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                             </div>

                         </div>
                         <span class="filter-apply" v-on:click="showMobileFilter =false"
                         >Apply Filter</span
                         >
                     </div>
                 </div>

                 <div class="st-hidden-md st-hidden-lg" id="mobile-sort-container">
                     <div
                             class="sort-wrapper"
                             v-show="sortDisplay"
                             @click="sortDisplay = !sortDisplay"
                     >
                         <div class="sort-inner">
                             <div class="sort-head">
                    <span
                    >Sort By: <span class="text-main">${ sortLabel }$</span
                    ><span class="st-sort-cross"
                    ><svg
                          height="15px"
                          viewBox="0 0 512.001 512.001"
                          width="15px"
                          x="0px"
                          xml:space="preserve"
                          y="0px"
                        >
                          <path
                                  d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285    L284.286,256.002z"
                                  data-old_color="#000000"
                                  data-original="#000000"
                                  fill="#4E3830"
                                  class="active-path"
                          ></path></svg></span
                    ></span>
                             </div>
                             <div class="sort-items">
                                 <div
                                         class="sort-item"
                                         v-bind:key="sort.label"
                                         v-for="sort in sorts"
                                         v-on:click="sorting(sort.label), goToTop()"
                                 >
                      <span :class="{'selected' : sort.label === sortLabel}"
                      >${ sort.label }$</span
                      >
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <span id="scroll-to-top" v-show="backToTop" @click="goToTop()">
                 <svg focusable="false" width="14px" class="icon st-icon--arrow-up" viewBox="0 0 12 8" role="presentation">
      <path stroke="currentColor" stroke-width="2" d="M10 2L6 6 2 2" fill="none" stroke-linecap="square"></path>
    </svg>
            </span>
         </div>
     </div>





</div>
    <div id="st-trending-search" style="display: none" v-cloak>
         <div class="autocomplete-body" v-show="!mobile_loader && trending_results.length">
             <div class="autocomplete-head">
                 <div id="trend_left">
                     <svg viewBox="0 0 500 500" width="18" height="18" fill="#f57f7f" class="st-icon">
                         <svg xmlns="http://www.w3.org/2000/svg" height="500" viewBox="0 0 48 48" width="500">
                             <path d="M32 12l4.59 4.59-9.76 9.75-8-8-14.83 14.83 2.83 2.83 12-12 8 8 12.58-12.59 4.59 4.59v-12z"></path>
                         </svg>
                     </svg>
                     <span>Trending Searches</span>
                 </div>
             </div>
             <div class="st-autocomplete-content">
                 <ul class="st-trending-elements">
                     <li v-for="item in trending_results" :key="item.id">
                         <a class="st-element" :href="redirectPage(item)" v-if="item.showInSuggestion">
                             <svg viewBox="0 0 500 500" width="16" height="16" fill="#393939" class="st-icon">
                                 <svg xmlns="http://www.w3.org/2000/svg" height="500" viewBox="0 0 48 48" width="500">
                                     <path d="M32 12l4.59 4.59-9.76 9.75-8-8-14.83 14.83 2.83 2.83 12-12 8 8 12.58-12.59 4.59 4.59v-12z"></path>
                                 </svg>
                             </svg>
                             <span>${ item.displayLabel }$</span>
                         </a>
                     </li>
                 </ul>
             </div>
         </div>
     </div>


          
<!-- ADMITAD CODE START -->

  <script src="https://www.artfut.com/static/tagtag.min.js?campaign_code=70d1213226" async onerror='var self =this;window.ADMITAD=window.ADMITAD||{},ADMITAD.Helpers=ADMITAD.Helpers||{},ADMITAD.Helpers.generateDomains=function(){for(var e=new Date,n=Math.floor(new Date(2020,e.getMonth(),e.getDate()).setUTCHours(0,0,0,0)/1e3),t=parseInt(1e12*(Math.sin(n)+1)).toString(30),i=["de"],o=[],a=0;a<i.length;++a)o.push({domain:t+"."+i[a],name:t});return o},ADMITAD.Helpers.findTodaysDomain=function(e){function n(){var o=newXMLHttpRequest,a=i[t].domain,D="https://"+a+"/";o.open("HEAD",D,!0),o.onload=function(){setTimeout(e,0,i[t])},o.onerror=function(){++t<i.length?setTimeout(n,0):setTimeout(e,0,void 0)},o.send()}var t=0,i=ADMITAD.Helpers.generateDomains();n()},window.ADMITAD=window.ADMITAD||{},ADMITAD.Helpers.findTodaysDomain(function(e){if(window.ADMITAD.dynamic=e,window.ADMITAD.dynamic){var n=function(){return function(){return self.src?self:""}}(),t=n(),i=(/campaign_code=([^&]+)/.exec(t.src)||[])[1]||"";t.parentNode.removeChild(t);var o=document.getElementsByTagName("head")[0],a=document.createElement("script");a.src="https://www."+window.ADMITAD.dynamic.domain+"/static/"+window.ADMITAD.dynamic.name.slice(1)+window.ADMITAD.dynamic.name.slice(0,1)+".min.js?campaign_code="+i,o.appendChild(a)}});'></script>


<script type="text/javascript">
// name of the cookie that stores the source
// change if you have another name
var cookie_name = 'deduplication_cookie';
// cookie lifetime
var days_to_store = 30;
// expected deduplication_cookie value for Admitad
var deduplication_cookie_value = 'admitad';
// name of GET parameter for deduplication
// change if you have another name
var channel_name = 'utm_source';
// a function to get the source from the GET parameter
getSourceParamFromUri = function () {
  var pattern = channel_name + '=([^&]+)';
  var re = new RegExp(pattern);
  return (re.exec(document.location.search) || [])[1] || '';
};

// a function to get the source from the cookie named cookie_name
getSourceCookie = function () {
  var matches = document.cookie.match(new RegExp(
    '(?:^|; )' + cookie_name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + '=([^;]*)'
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
};
// a function to set the source in the cookie named cookie_name
setSourceCookie = function () {
  var param = getSourceParamFromUri();
  var params = (new URL(document.location)).searchParams;
  if (!params.get(channel_name) && params.get('gclid')) { param = 'google' }
  else if (!params.get(channel_name) && params.get('fbclid')) { param = 'facebook' }
  else if (!params.get(channel_name) && params.get('cjevent')) { param = 'cj' }
  else if (!param) { return; }
  var period = days_to_store * 60 * 60 * 24 * 1000; // in seconds
  var expiresDate = new Date((period) + +new Date);
  var cookieString = cookie_name + '=' + param + '; path=/; expires=' + expiresDate.toGMTString();
  document.cookie = cookieString;
  document.cookie = cookieString + '; domain=.' + location.host;
};
// set cookie
setSourceCookie();
</script>

          
          <!-- END -->

<div id="shopify-block-6048552914641687618" class="shopify-block shopify-app-block">

<script>
  var wsShop = "peachm.myshopify.com" 
  window.wscc_markets = [];
  
    window.wscc_markets = [];
    
      window.wscc_markets.push({
        country_code:"AU",
        country:"Australia",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"AT",
        country:"Austria",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"BE",
        country:"Belgium",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"CA",
        country:"Canada",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"CZ",
        country:"Czechia",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"DK",
        country:"Denmark",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"FJ",
        country:"Fiji",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"FI",
        country:"Finland",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"FR",
        country:"France",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"DE",
        country:"Germany",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"HK",
        country:"Hong Kong SAR",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"IN",
        country:"India",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"IE",
        country:"Ireland",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"IL",
        country:"Israel",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"IT",
        country:"Italy",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"JP",
        country:"Japan",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"KW",
        country:"Kuwait",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"MY",
        country:"Malaysia",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"MU",
        country:"Mauritius",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"NL",
        country:"Netherlands",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"NZ",
        country:"New Zealand",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"NO",
        country:"Norway",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"PL",
        country:"Poland",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"PT",
        country:"Portugal",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"SA",
        country:"Saudi Arabia",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"SG",
        country:"Singapore",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"ZA",
        country:"South Africa",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"KR",
        country:"South Korea",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"ES",
        country:"Spain",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"LK",
        country:"Sri Lanka",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"SE",
        country:"Sweden",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"CH",
        country:"Switzerland",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"AE",
        country:"United Arab Emirates",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"GB",
        country:"United Kingdom",
        currency_code:"INR",
        symbol:"₹"
      });
    
      window.wscc_markets.push({
        country_code:"US",
        country:"United States",
        currency_code:"INR",
        symbol:"₹"
      });
    
  
 </script></div></body>
</html>