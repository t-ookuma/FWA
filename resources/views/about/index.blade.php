<x-layout.layout>
    <!-- main -->
    <section>
        <x-layout.container>
            <div class="flex justify-center my-14 sp:my-8">
                <img class="w-[186px] h-[184px] sp:w-[93px] sp:h-[92px]" src="{{ asset('images/layout/logo_b.png') }}" alt="ロゴ">
            </div>
            <div class="flex justify-between py-10 sp:block sp:py-12">
                <!-- 協会概要・役員名簿 -->
                <div class="w-[50%] sp:w-full">
                    <div class="mb-24">
                        <h2 class="text-4xl font-black -translate-x-5 sp:-translate-x-0">協会概要</h2>
                        <dl class="pt-10">
                            <dt class="text-sm float-left font-black pb-8">名称</dt>
                            <dd class="text-sm pl-[20%] pb-8 sp:pl-[25%]">福岡県ウエイトリフティング協会</dd>
                            <dt class="text-sm float-left font-black pb-8">英語表記</dt>
                            <dd class="text-sm pl-[20%] pb-8 sp:pl-[25%]">Fukuoka Weightlifting Association</dd>
                            <dt class="text-sm float-left font-black pb-8">創立</dt>
                            <dd class="text-sm pl-[20%] pb-8 sp:pl-[25%]">1948（昭和23年）4月1日</dd>
                            <dt class="text-sm float-left font-black pb-8">所在地</dt>
                            <dd class="text-sm pl-[20%] sp:pl-[25%]">北九州市八幡西区元城町一番一号</dd>
                            <dd class="text-sm pl-[20%] pb-8 sp:pl-[25%]">福岡県立八幡中央高等学校</dd>
                            <dt class="text-sm float-left font-black pb-8">Mail</dt>
                            <dd class="text-sm pl-[20%] pb-8 sp:pl-[25%]">fukuokaweight@gmail.com</dd>
                            <dt class="text-sm float-left font-black pt-[10px] pb-8">定款</dt>
                            <dd class="pl-[35%] pb-8 sp:pl-[40%]"><a href=""><img class="w-[29px] h-[40px]" src="{{ asset('images/parts/pdf.png') }}" alt=""></a></dd>
                            <dt class="text-sm float-left font-black pt-[10px] pb-8">ガバナンスコード</dt>
                            <dd class="pl-[35%] pb-8 sp:pl-[40%]"><a href=""><img class="w-[29px] h-[40px]" src="{{ asset('images/parts/pdf.png') }}" alt=""></a></dd>
                        </dl>
                    </div>
                    <div>
                        <h2 class="text-4xl font-black -translate-x-5 sp:-translate-x-0">役員名簿</h2>
                        <dl class="pt-10">
                            <dt class="text-sm float-left font-black pb-8">会長</dt>
                            <dd class="text-sm pl-[20%] pb-8 sp:pl-[25%]">テキスト</dd>
                            <dt class="text-sm float-left font-black pb-8">理事長</dt>
                            <dd class="text-sm pl-[20%] pb-8 sp:pl-[25%]">テキスト</dd>
                            <dt class="text-sm float-left font-black pb-8">常務理事</dt>
                            <dd class="text-sm pl-[20%] pb-8 sp:pl-[25%]">テキスト</dd>
                            <dt class="text-sm float-left font-black pb-8">理事</dt>
                            <dd class="text-sm pl-[20%] pb-8 sp:pl-[25%]">テキスト</dd>
                            <dt class="text-sm float-left font-black pb-8">監事</dt>
                            <dd class="text-sm pl-[20%] pb-8 sp:pl-[25%]">テキスト</dd>
                        </dl>
                    </div>
                </div>
                <!-- キャラクター紹介 -->
                <div class="w-[50%] sp:w-full sp:mt-24">
                    <div>
                        <h2 class="text-4xl font-black -translate-x-5 sp:-translate-x-0">キャラクター紹介</h2>
                        <div class="text-center pt-16">
                            <h2 class="text-4xl font-black">ハシビロ公</h2>
                        </div>
                        <img src="{{ asset('images/parts/hashibiroko.png') }}" alt="ハシビロ公">
                    </div>
                    <div class="text-2xl pt-14 font-black sp:text-base">
                        <p>キャラクターの元になった動物ハシビロコウは跳べない鳥だ。普段はほとんど動かずじっとしている。しかし、獲物を捉えるときには、脅威の瞬発力を見せる。「いざという時には誰にも負けない強さ」をコンセプトに福岡県のアスリートたちが活躍することを願っている。
                            <br>
                            <br>
                            ※補足
                            <br>
                            実はこのハシビロ公、体に「FukuokaWeightliftingAssociation」の頭文字「FWA」が隠れているのだが未だ発見できたものはいないらしい。
                        </p>
                    </div>
                </div>
            </x-layout.container>
            </div>
    </section>
</x-layout.layout>
