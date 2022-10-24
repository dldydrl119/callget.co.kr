<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"/>
    <title>KakaoLink v2 Demo(Default / Feed) - Kakao JavaScript SDK</title>
    <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>

  </head>
  <body>
      <img src="//developers.kakao.com/assets/img/about/logos/kakaolink/kakaolink_btn_small.png"  onclick="sendLink()"/>
      <script type='text/javascript'>
      //<![CDATA[
        // // 사용할 앱의 JavaScript 키를 설정해 주세요.
        Kakao.init('ca2c2e371f3d4a6408aeec6c82410275');
        // // 카카오링크 버튼을 생성합니다. 처음 한번만 호출하면 됩니다.
        function sendLink() {
          Kakao.Link.sendDefault({
            objectType: 'feed',
            content: {
              title: '뉴턴트리',
              description: '웹 사이트',
              imageUrl: 'http://callget.cafe24.com/assets/uploads/a47d94e2ee3fdbe6261c00b51b29681d',
              link: {
                mobileWebUrl: 'http://callget.cafe24.com/admin',
                webUrl: 'http://callget.cafe24.com/admin'
              }
            }
          });
        }
    </script>

    <script>
      function share() {
        var url = encodeURI(encodeURIComponent(myform.url.value));
        var title = encodeURI(myform.title.value);
        var shareURL = "https://share.naver.com/web/shareView.nhn?url=" + url + "&title=" + title;
        document.location = shareURL;
      }
    </script>

    <img src = "<?=SURL?>/assets/img/naver_square.png"  onclick="share()">
    <iframe id="player" type="text/html" width="640" height="360" src="http://www.youtube.com/embed/QslJYDX3o8s" frameborder="0"></iframe>

    <form id="myform">
      <input type="hidden" id="url" value="https://newturntreead.com/"><br/>
      <input type="hidden" id="title" value="뉴턴트리"><br/>
    </form>

  </body>
</html>
