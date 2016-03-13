            <!-- <article class="media-item printable">

              <span class="icon-news"></span>

              <h4>Facebook <br/>Feed</h4>

              <div class="facebook"><div class="fb-like-box" data-href="https://www.facebook.com/pages/Rainbow-Bay-Resort/110232285696450" data-width="100%" data-height="355" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false"></div></div>

            </article>--><!--media-item-->

    <!--FB-->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '492097247594870',
          xfbml      : true,
          version    : 'v2.2'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
    <!--endFB-->