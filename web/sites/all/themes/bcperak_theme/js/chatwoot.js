      (function(d,t) {
        var BASE_URL="https://cw.bcperak.net";
        var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=BASE_URL+"/packs/js/sdk.js";
        g.defer = true;
        g.async = true;
        s.parentNode.insertBefore(g,s);
        g.onload=function(){
          window.chatwootSDK.run({
            websiteToken: 'R5x4AWFY5oYNrddMMNj77UCS',
            baseUrl: BASE_URL
          })
        }
      })(document,"script");
