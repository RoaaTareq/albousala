<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>Galileo Design</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    <div
      class="relative flex size-full min-h-screen flex-col bg-slate-50 group/design-root overflow-x-hidden"
      style="--radio-dot-svg: url('data:image/svg+xml,%3csvg viewBox=%270 0 16 16%27 fill=%27rgb(25,128,230)%27 xmlns=%27http://www.w3.org/2000/svg%27%3e%3ccircle cx=%278%27 cy=%278%27 r=%273%27/%3e%3c/svg%3e'); font-family: Inter, &quot;Noto Sans&quot;, sans-serif;"
    >
      <div class="layout-container flex h-full grow flex-col">
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e7edf3] px-10 py-3">
          <div class="flex items-center gap-4 text-[#0e141b]">
            <div class="size-4">
              <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M36.7273 44C33.9891 44 31.6043 39.8386 30.3636 33.69C29.123 39.8386 26.7382 44 24 44C21.2618 44 18.877 39.8386 17.6364 33.69C16.3957 39.8386 14.0109 44 11.2727 44C7.25611 44 4 35.0457 4 24C4 12.9543 7.25611 4 11.2727 4C14.0109 4 16.3957 8.16144 17.6364 14.31C18.877 8.16144 21.2618 4 24 4C26.7382 4 29.123 8.16144 30.3636 14.31C31.6043 8.16144 33.9891 4 36.7273 4C40.7439 4 44 12.9543 44 24C44 35.0457 40.7439 44 36.7273 44Z"
                  fill="currentColor"
                ></path>
              </svg>
            </div>
            <h2 class="text-[#0e141b] text-lg font-bold leading-tight tracking-[-0.015em]">Patriot Match</h2>
          </div>
        </header>
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col w-[512px] max-w-[512px] py-5 max-w-[960px] flex-1">
            <div class="flex flex-col gap-3 p-4">
              <div class="flex gap-6 justify-between"><p class="text-[#0e141b] text-base font-medium leading-normal">Question 3 of 7</p></div>
              <div class="rounded bg-[#d0dbe7]"><div class="h-2 rounded bg-[#1980e6]" style="width: 45%;"></div></div>
              <p class="text-[#4e7397] text-sm font-normal leading-normal">45% complete</p>
            </div>
            <h2 class="text-[#0e141b] text-lg font-bold leading-tight tracking-[-0.015em] px-4 text-left pb-2 pt-4">
              What do you think about the government's role in the economy?
            </h2>
            <div class="flex flex-col gap-3 p-4">
              <label class="flex items-center gap-4 rounded-xl border border-solid border-[#d0dbe7] p-[15px]">
                <input
                  type="radio"
                  class="h-5 w-5 border-2 border-[#d0dbe7] bg-transparent text-transparent checked:border-[#1980e6] checked:bg-[image:--radio-dot-svg] focus:outline-none focus:ring-0 focus:ring-offset-0 checked:focus:border-[#1980e6]"
                  name="dadbafa7-26a8-4e98-abcf-41acb1a2477d"
                  checked=""
                />
                <div class="flex grow flex-col"><p class="text-[#0e141b] text-sm font-medium leading-normal">The government should have a minimal role in the economy</p></div>
              </label>
              <label class="flex items-center gap-4 rounded-xl border border-solid border-[#d0dbe7] p-[15px]">
                <input
                  type="radio"
                  class="h-5 w-5 border-2 border-[#d0dbe7] bg-transparent text-transparent checked:border-[#1980e6] checked:bg-[image:--radio-dot-svg] focus:outline-none focus:ring-0 focus:ring-offset-0 checked:focus:border-[#1980e6]"
                  name="dadbafa7-26a8-4e98-abcf-41acb1a2477d"
                />
                <div class="flex grow flex-col"><p class="text-[#0e141b] text-sm font-medium leading-normal">The government should have a moderate role in the economy</p></div>
              </label>
              <label class="flex items-center gap-4 rounded-xl border border-solid border-[#d0dbe7] p-[15px]">
                <input
                  type="radio"
                  class="h-5 w-5 border-2 border-[#d0dbe7] bg-transparent text-transparent checked:border-[#1980e6] checked:bg-[image:--radio-dot-svg] focus:outline-none focus:ring-0 focus:ring-offset-0 checked:focus:border-[#1980e6]"
                  name="dadbafa7-26a8-4e98-abcf-41acb1a2477d"
                />
                <div class="flex grow flex-col"><p class="text-[#0e141b] text-sm font-medium leading-normal">The government should have a significant role in the economy</p></div>
              </label>
            </div>
            <div class="flex px-4 py-3 justify-end">
              <button
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#1980e6] text-slate-50 text-sm font-bold leading-normal tracking-[0.015em]"
              >
                <span class="truncate">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
