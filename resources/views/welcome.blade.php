<html dir="rtl">
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Public+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>البوصلة</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body >
    <div class="relative flex size-full min-h-screen flex-col bg-slate-50 group/design-root overflow-x-hidden" style='font-family: "Public Sans", "Noto Sans", sans-serif;'>
      <div >
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e7eef4] px-10 py-3">
          <div class="flex items-center gap-4 text-[#0d151c]">
            <div class="size-4">
              
            </div>
            <h2 class="text-[#0d151c] text-lg font-bold leading-tight tracking-[-0.015em]">البوصلة</h2>
          </div>
          <!-- <div class="flex flex-1 justify-end gap-8">
            <div class="flex items-center gap-9">
              <a class="text-[#0d151c] text-sm font-medium leading-normal" href="#">Quiz</a>
              <a class="text-[#0d151c] text-sm font-medium leading-normal" href="#">Parties</a>
              <a class="text-[#0d151c] text-sm font-medium leading-normal" href="#">Candidates</a>
              <a class="text-[#0d151c] text-sm font-medium leading-normal" href="#">About Us</a>
            </div> -->
            <!-- <div class="flex gap-2">
              <button
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#2090f3] text-slate-50 text-sm font-bold leading-normal tracking-[0.015em]"
              >
                <span class="truncate">Log In</span>
              </button>
              <button
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#e7eef4] text-[#0d151c] text-sm font-bold leading-normal tracking-[0.015em]"
              >
                <span class="truncate">Sign Up</span>
              </button>
            </div> -->
          </div>
        </header>
        <div class="px-40 flex flex-1 justify-center py-5" style="padding :120px">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-wrap justify-between gap-3 p-4">
              <div class="flex min-w-72 flex-col gap-3">
                <p  style="text-align:center "class=" text-main text-[#0d151c] text-4xl font-black leading-tight tracking-[-0.033em]">لمعرفة مدى تقاربك مع الأحزاب السياسية أبدأ باستخدام البوصلة </p>
                <!-- <p class="text-[#49769c] text-base font-normal leading-normal">
                  Answer a few questions and we'll match you with the top 3 political parties that align with your views. This quiz is for educational purposes only.
                </p> -->
              </div>
            </div>
            <div class="flex justify-center">
              <div class="flex flex-1 gap-3 flex-wrap px-4 py-3 max-w-[480px] justify-center">
              
                <a  class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#e9980a] text-slate-50 text-sm font-bold leading-normal tracking-[0.015em] grow text" href="{{ url('public/answers') }}">البدء من هنا لمعرفة أكثر الاحزاب تقارب </a>
               
             
              </div>
            </div>
            <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
              <div class="flex flex-col gap-3 pb-3">
                <!-- <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("data:image/png;base64,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");'
                ></div> -->
               
              </div>
              <!-- <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROjjB70MFC-77wtZVLwoFG3SY2iaovztXGfQ&s");'
                ></div> -->
               
              </div>
              <!-- <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("data:image/jpeg;base64,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");'
                ></div>
                
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
