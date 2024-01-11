@extends('layouts.header-' . (Agent::isMobile() ? 'phone' : 'pc'))

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>知識箱</title>

</head>

<body>
    <div class="container" style="padding-top: 100px;">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button"
                    role="tab" aria-controls="tab1" aria-selected="true">調理器具</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button"
                    role="tab" aria-controls="tab2" aria-selected="false">調味料</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button"
                    role="tab" aria-controls="tab3" aria-selected="false">切り方</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab"
                style="padding-top: 10px;">
                <!-- 調理器具 -->
                <div class="row">
                    <!-- Tab 1のコンテンツを3x3のグリッドで配置 -->
                    <div class="col-4 mb-3">
                        <div class="card">
                            <div class="card-header">
                                包丁
                            </div>
                            <div class="card-body">
                                <a href="{{ route('kitchenknife') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/kitchenknife.jpg') }}"
                                            class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    食物の調理に使う薄くて平たい刃物。<br>　
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="card">
                            <div class="card-header">
                                フライパン
                            </div>
                            <div class="card-body">
                                <a href="{{ route('skillet') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/skillet.jpg') }}"
                                            class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    炒めもの・フライ料理などに使う、柄がついて底が浅くて平たいなべ。
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="card">
                            <div class="card-header">
                                まな板
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/cuttingboard.jpg') }}"
                                            class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    まな板は、調理で食材を切る際に台として用いる道具。
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 mb-3">
                        <div class="card">
                            <div class="card-header">
                                おたま
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/ladle.jpg') }}"
                                            class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    食物を掬うための調理器具。<br>　
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="card">
                            <div class="card-header">
                                計量カップ
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/measuringcup.jpg') }}"
                                            class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    調理の際に体積の計量に用いられる、目盛りがついたカップ。
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="card">
                            <div class="card-header">
                                菜箸
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/chopsticks.jpg') }}"
                                            class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    おかずを各自の皿に取り分け、または料理を作るのに使う箸。
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 mb-3">
                        <div class="card">
                            <div class="card-header">
                                トング
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/tongu.jpg') }}"
                                            class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    角砂糖や調理中のスパゲッティなど、食品をはさむＶ字型の金属製道具。
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="card">
                            <div class="card-header">
                                なべ
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/pot.jpg') }}"
                                            class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    食物等を煮るための容器。<br>　
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="card">
                            <div class="card-header">
                                ボウル
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/bowl.jpg') }}"
                                            class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    料理の下ごしらえに使う道具。 <br>　
                            </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>


            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                <!-- 調味料 -->
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                塩
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/salt.jpg') }}" class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    料理に塩味を追加する調味料。<br>　
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                醤油
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/soysauce.jpg') }}" class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    料理に塩味を追加する調味料。<br>　
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                砂糖
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/suger.jpg') }}" class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    料理に甘味を追加する調味料。<br>　
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                みりん
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/salt.jpg') }}" class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    料理に甘みやコクを追加する調味料。<br>　
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                酒
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/salt.jpg') }}" class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    料理にコクや風味を追加し、魚や肉の臭みを消す調味料。<br>　
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                ココアパウダー
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/salt.jpg') }}" class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    料理に甘みを追加する調味料。<br>　
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                お酢
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/salt.jpg') }}" class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    料理に酸味を追加する調味料。<br>　
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                味噌
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/salt.jpg') }}" class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    料理に塩味を追加する調味料。<br>　
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                こしょう
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/salt.jpg') }}" class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    料理に塩味を追加する調味料。<br>　
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                <!-- 切り方 -->
                <div class="row">
                    <div class="col-4">
                    <div class="card">
                            <div class="card-header">
                                輪切り
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/salt.jpg') }}" class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    端から切り口が円形になるように切る切り方。料理内容により厚さを変える。<br>　
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card">
                            <div class="card-header">
                                半月切り
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/salt.jpg') }}" class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    輪切りを二等分した切り方。輪切りでは大きすぎるときに使う。<br>　
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card">
                            <div class="card-header">
                                いちょう切り
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/salt.jpg') }}" class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    輪切りを四等分した切り方。短時間で火が通りやすい。<br>　
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card">
                            <div class="card-header">
                                小口切り
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/salt.jpg') }}" class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    細長い食材を直角に薄くに切る切り方。薬味などに使う。<br>　
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card">
                            <div class="card-header">
                                薄切り
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/salt.jpg') }}" class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    端から薄く切っていく切り方。円形または半円のものを指すことが多い。<br>　
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card">
                            <div class="card-header">
                                拍子切り・短冊切り。
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/salt.jpg') }}" class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    四角柱の形に切る切り方。暑さが厚いものを拍子切り、薄いものを短冊切りと呼称される。<br>　
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card">
                            <div class="card-header">
                            細切り・千切り
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/salt.jpg') }}" class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    薄くスライスした食材を細くカットする切り方。より細かいものは千切りと呼称される。<br>　
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card">
                            <div class="card-header">
                                ささがき
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/salt.jpg') }}" class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    笹の葉の形のように切る切り方。細長いものを切るときに使い、柔らかな口当たりが特徴<br>　
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card">
                            <div class="card-header">
                                みじん切り
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/salt.jpg') }}" class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    料理にコクや風味を追加し、魚や肉の臭みを消す調味料。<br>　
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card">
                            <div class="card-header">
                                くし切り
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/salt.jpg') }}" class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    料理にコクや風味を追加し、魚や肉の臭みを消す調味料。<br>　
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card">
                            <div class="card-header">
                                ザク切り
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/salt.jpg') }}" class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    料理にコクや風味を追加し、魚や肉の臭みを消す調味料。<br>　
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card">
                            <div class="card-header">
                                乱切り
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/salt.jpg') }}" class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    料理にコクや風味を追加し、魚や肉の臭みを消す調味料。<br>　
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card">
                            <div class="card-header">
                                そぎ切り
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/salt.jpg') }}" class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    料理にコクや風味を追加し、魚や肉の臭みを消す調味料。<br>　
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card">
                            <div class="card-header">
                                シャトー切り
                            </div>
                            <div class="card-body">
                                <a href="{{ route('ComingSoon') }}" class="no-underline text-dark">
                                    <div class="custom-image-size">
                                        <img src="{{ asset('image/knowledge/salt.jpg') }}" class="card-img-top custom-image-size d-flex justify-content-center">
                                    </div>
                                    料理にコクや風味を追加し、魚や肉の臭みを消す調味料。<br>　
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<style>
    /* カスタムの画像サイズを定義するクラス */
    @media(max-width:750px) {
        .custom-image-size {

            width: 100%;
            height: auto;
        }
    }

    @media(min-width:751px) {
        .custom-image-size {

            width: 100%;
            height: auto;
        }
    }
</style>

</html>


@extends('layouts.footer')