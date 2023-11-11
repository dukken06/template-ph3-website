<x-app-layout>
  <x-slot name="header">
    <div class="flex justify-between items-center">
      <div class="">
        <img src="{{ asset('images/logo.svg') }}" alt="POSSE">
      </div>
      <button class="" id="js-headerButton">
      </button>
      <div class="flex gap-[32px] items-center">
        <nav class="">
          <ul class="flex gap-[32px]">
            <li class="">
              <a href="" class="text-[#666] font-bold">POSSEとは</a>
            </li>
            <li class="">
              <a href="../quiz/quiz.html" class="text-[#666] font-bold" >クイズ</a>
            </li>
          </ul>
        </nav>
        <div class="hidden">
          <a href="https://line.me/R/ti/p/@651htnqp?from=page" target="_blank" rel="noopener noreferrer" class="">
            <img src="{{ asset('images/icon/icon-line.svg') }}" alt="" class="">
            <span class="">
              POSSE公式LINEを追加
            </span>
            <img src="{{ asset('images/icon/icon-link-light.svg') }}" alt="" class="">
          </a>
        </div>
        <ul class="flex gap-[16px]">
          <li class="border-[1px] border-[#eee] rounded-full justify-center inline-flex items-center h-[50px] w-[50px]">
            <a href="https://twitter.com/posse_program" target="_blank" rel="noopener noreferrer" class="">
              <img src="{{ asset('images/icon/icon-twitter.svg') }}" alt="twitter">
            </a>
          </li>
          <li class="border-[1px] border-[#eee] rounded-full justify-center inline-flex items-center h-[50px] w-[50px]">
            <a href="https://www.instagram.com/posse_programming/" target="_blank" rel="noopener noreferrer" class="">
              <img src="{{ asset('images/icon/icon-instagram.svg') }}" alt="instagram">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </x-slot>
  <!--ヒーロー画像-->
  <section class="">
    <div class="flex relative">
      <div class="rounded-[24px] px-[62px] py-[50px] bg-[#eff2f5] inline-block h-[298.766px] self-center w-[502px] z-20 ml-[10%]">
        <h1 class="text-[16px] text-[#0071bc] font-bold w-[502px]">
          学生プログラミングコミュニティ POSSE(ポッセ)
        </h1>
        <span class="text-[60px] inline-block mt-[10px] font-bold w-[502px]">
          自分史上最高
          <br>
          を仲間と。
        </span>
      </div>
      <picture class="rounded-l-[80px] ml-[-125px] mr-[calc(50% - 50vw)] overflow-hidden z-10">
        <img src="{{ asset('images/img-hero.jpg') }}" alt="" class="block h-full object-cover w-full">
      </picture>
      <div class="absolute left-[32px] bottom-[24px] text-[14px] gap-[6px] before:bg-[#ccc] before:rounded-[8px] before:content-[''] before:inline-block before:h-[8px] before:w-[8px] inline-flex items-center ml-[9%]">
        Scroll Down
      </div>
    </div>
  </section>
  <!--ヒーロー画像ここまで-->
  <div class="my-[60px]">
    <!--POSSEとは-->
    <h2 class="text-[36px] font-bold text-center my-[20px]">
      POSSEとは
      <span class="text-[16px] font-bold text-center block my-[10px] text-[#0171BB]" lang="en" aria-hidden="true">
        About POSSE
      </span>
    </h2>
    <div class="flex mx-[10%] my-[40px] gap-[40px] items-center">
      <picture class="rounded-[10px]">
        <img src="{{ asset('images/img-about.jpg') }}" alt="POSSEメンバー集合写真" class="rounded-[10px]">
      </picture>
      <div class="px-[30px]">
        <p>
          学生プログラミングコミュニティ「POSSE(ポッセ)」は、人格とプログラミング、二つの面での成長をスローガンに活動しており、大学生だけが集まって学びを深めるコミュニティです。
          <br>
          プログラミングだけではありません。オフラインでのイベントや、旅行など様々な企画を行っています！
          <br>
          それらを通じて、夏休みの大半をPOSSEで出来た仲間と過ごす人もたくさんいるほどメンバーとの仲が深まります。
        </p>
      </div>
    </div>
  </div>
  <!--公式LINE-->
  <div class="mx-[20%] my-[100px] bg-[#1F79BD] rounded-[30px]">
    <div class="pt-[60px]">
      <div class="pb-[40px]">
        <div class="">
          <h2 class="flex justify-center items-center gap-[20px] text-[#FFFFFF] font-bold text-[40px] mb-[20px]">
            <img src="{{ asset('images/icon/icon-line.svg') }}" alt="公式LINE" class="h-[40px]">
            POSSE 公式LINE
          </h2>
          <div class="text-center">
            <p class="text-[#FFFFFF] mb-[40px]">
              公式LINEにてご質問を随時受け付けております。<br>
              詳細やPOSSE最新情報につきましては、公式LINEにてお知らせ致しますので<br>
              下記ボタンより友達追加をお願いします！
            </p>
            <div class="text-center bg-[#FFFFFF] inline-block w-[40%] py-[12px] rounded-[21px] font-bold relative">
              <a href="https://line.me/R/ti/p/@651htnqp?from=page" target="_blank" rel="noopener noreferrer" class="text-[18px]">
                LINE追加
                <img src="{{ asset('images/icon/icon-link-gray-dark.svg') }}" alt="" class="absolute top-[15px] right-[20px] h-[18px]">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--フッター-->
  <footer class="my-[80px]">
    <div class="border-y-[#eee] border-y-[1px] py-[80px]">
      <div class="text-center pb-[30px]">
        <img src="{{ asset('images/logo.svg') }}" alt="POSSE" class="block m-auto mb-[20px]">
        <a href="https://posse-ap.com/" target="_blank" rel="noopener noferrer" class="">
          POSSE公式サイト
        </a>
      </div>
      <div class="">
        <ul class="flex justify-center my-[15px] gap-[30px]">
          <li class="border-[#eee] border-[1px] rounded-full h-[50px] w-[50px] justify-center items-center inline-flex">
            <a href="https://twitter.com/posse_program" target="_blank" rel="noopener noreferrer" class="" aria-label="Twitter">
              <img src="{{ asset('images/icon/icon-twitter.svg') }}" alt="Twitter">
            </a>
          </li>
          <li class="border-[#eee] border-[1px] rounded-full h-[50px] w-[50px] justify-center items-center inline-flex">
            <a href="https://www.instagram.com/posse_programming/" target="_blank" rel="noopener noreferrer" class="" aria-label="instagram">
              <img src="{{ asset('images/icon/icon-instagram.svg') }}" alt="instagram">
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="text-center pt-[50px]">
      <small lang="en">
        ©2022 POSSE
      </small>
    </div>
  </footer>
</x-app-layout>