@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="top">
        <main>
            <div id="eyecatch">
                <p>人生、損してない？</p>
                <h3>Saverは「節税」であなたの生活を「救います」</h3>
                <div class="eyecatch-btn">
                    <div class="eyecatch-button">
                        <a href="#">新規会員登録</a>
                    </div>
                    <div class="eyecatch-button">
                        <a href="#">ログイン</a>
                    </div>
                </div>
            </div>
            <div id="about">
                <h2 class="section-title">about</h2>
                <div class="about-wrap">
                    <div class="about-left">
                        <img src="{{asset('./../img/headerPic2.jpg', true)}}" alt="logo" />
                    </div>
                    <div class="about-right">
                        <h3>Saver</h3>
                        <p>
                            あなたが行っている節税の取組を可視化・記録するサービスです
                        </p>
                        <ol>
                            <li>＊節税（save money）</li>
                            <li>＊救命（save a life）</li>
                        </ol>
                    </div>
                </div>
            </div>
    
            <div id="service">
                <h2 class="section-title">service</h2>
                <div class="service-wrap">
                    <div class="service-img">
                        <img src="../assets/img/headerPic2.jpg" alt="">
                    </div>
                    <div class="service-cont pos">
                        <h3>節税の記録</h3>
                        <p>あなたが達成している節税の取組をプロフィールに記録しよう。取組の達成度を見ることができるので、あなたがまだ利用してなかった節税が見つかるかもしれません。</p>
                        <div class="service-button">
                            <a href="#">サービス詳細</a>
                        </div>
                    </div>
                </div>
                <div class="service-wrap">
                    <div class="service-img">
                        <img src="../assets/img/headerPic2.jpg" alt="">
                    </div>
                    <div class="service-cont pos">
                        <h3>ランキング機能</h3>
                        <p>仲間と節税の達成度を競い合おう。達成度が上がっていくたびに仲間よりやりくり上手に！今すぐ無料会員登録ボタンをクリックして、節税ライフをスタートさせよう。</p>
                        <div class="service-button">
                            <a href="#">サービス詳細</a>
                        </div>
                    </div>
                </div>
                <div class="service-wrap">
                    <div class="service-img">
                        <img src="../assets/img/headerPic2.jpg" alt="">
                    </div>
                    <div class="service-cont pos">
                        <h3>ホーム</h3>
                        <p>節税の取組を仲間と取り組もう。あなたが知らなかった取組を知れたり、あなたの取組を投稿して仲間に教えてあげよう</p>
                        <div class="service-button">
                            <a href="#">サービス詳細</a>
                        </div>
                    </div>
                </div>
            </div>
    
    
            <div id="business">
                <h2 class="section-title">他にもこんな機能が</h2>
                <div class="business-wrap">
                    <div class="business-cat">
                        <img src="..//img/headerPic2.jpg" alt="" />
                        <h3>コメント</h3>
                        <p>
                            投稿に対してコメントを残すことができます
                        </p>
                    </div>
                    <div class="business-cat">
                        <img src="../assets/img/headerPic2.jpg" alt="" />
                        <h3>いいね</h3>
                        <p>
                            投稿に対して「いいね」を残すことができます
                        </p>
                    </div>
                </div>
            </div>
            <div id="footer">
                <div class="footer-wrap">
                    <h2 class="section-title">Let's start !</h2>
                    <h2 class="section-title">Saver</h2>
                    <p>登録に必要な時間は１分程度です</p>
                </div>
                <div class="footer-btn">
                    <div class="footer-button">
                        <a href="#">新規会員登録</a>
                    </div>
                    <div class="footer-button">
                        <a href="#">ログイン</a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

@endsection

<style scoped>
#eyecatch {
height: 500px;
background-color: #2176bd;
background: url("./../img/headerPic2.jpg") no-repeat;
background-size: cover;
background-position: center;
}
/*変えてね*/
#eyecatch h3 {
font-size: 25px;
color:#fff;
}

#eyecatch p {
display: inline-block;
margin: 150px 0 100px;
font-size: 65px;
font-style: italic;
font-weight: bold;
color:#fff;
line-height: 1;
}
.eyecatch-btn {
display: flex;
justify-content: center;
}

.eyecatch-button {
text-align: right;
margin: 20px;
}

.eyecatch-button a {
font-size: 20px;
background: rgba(0, 0, 0, 0);
color: #fff;
text-decoration: none;
cursor: pointer;
padding: 10px 30px;
border: 1px solid #fff;
display: inline-block;
}

#about {
width: 80%;
margin: 0 auto 50px;
}

#about .section-title {
font-size: 30px;
font-weight: bold;
margin: 30px 0;
text-align: center;
}

.about-wrap{
display: flex;
align-items: center;
justify-content: space-around;
}

.about-right p {
margin-bottom: 15px;
}

.about-left,
.about-right {
width: 45%;
}

.about-right ol {
list-style-type: none;
}

.about-left img{
display: block;
width: 100%;
}

#service {
background: #cccccc;

}

#service .section-title {
font-size: 30px;
font-weight: bold;
text-align: center;
color: #333333;
padding: 10px 0;
margin: 0;
}

.service-wrap {
position: relative;
height: 550px;
}

.service-cont {
background: #fff;
width: 550px;
padding: 60px;
font-size: 14px;
}



.service-cont h4 {
font-weight: normal;
padding: 20px 0;
}

.service-cont p {
font-size: 14px;
line-height: 20px;
margin-bottom: 10px;
}

.service-button {
text-align: right;
}

.service-button a {
font-size: 20px;
background: rgba(0, 0, 0, 0);
color: #000;
text-decoration: none;
cursor: pointer;
padding: 10px 30px;
border: 1px solid #000;
display: inline-block;
}

.service-img {
text-align: left;
}

.service-img img {
width: 50%;
height: 450px;
}

.pos {
position: absolute;
top: 20%;
left: 40%;
}

#business {
background: url() no-repeat;
background-size: cover;
}

#business .section-title {
font-size: 30px;
font-weight: bold;
text-align: center;
padding: 40px 0;
margin: 0;
}

.business-wrap {
text-align: center;
display: flex;
justify-content: space-around;
align-items: center;
}

.business-cat {
width: 28%;
background-color: rgba(51, 51, 51, 0.5);
padding: 20px 35px 30px;
box-sizing: border-box;
margin-bottom: 50px;
}

.business-cat h3 {
font-size: 18px;
font-weight: bold;
margin-bottom: 10px;
color: #fff;
}

.business-cat p {
color: #fff;
}

.business-cat img {
width: 100px;
height: auto;
margin: 0 auto 10px;
}

#footer {
margin-top: 150px;
background-image: url("./../img/headerPic2.jpg");
background-size: cover;
color: #fff;
text-align: center;
}

.footer-wrap {
padding-top: 120px;
}

.footer-wrap .section-title {
font-size: 30px;
font-weight: bold;
padding: 40px 0 15px;
margin: 0;
}

.footer-wrap p {
text-align: center;
}
.footer-btn {
display: flex;
justify-content: center;
}
.footer-button a {
font-size: 14px;
text-decoration: none;
cursor: pointer;
padding: 10px 30px;
display: inline-block;
color: #fff;
border: 1px solid #fff;
margin: 30px;
}

@media screen and (max-width: 768px){
.about-wrap{
flex-wrap: wrap;
}

.about-left,
.about-right {
width: 80%;
}

.business-wrap{
flex-wrap: wrap;
}

.business-cat {
width: 80%;
margin: 0 auto;
}

}
</style>