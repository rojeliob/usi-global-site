<template>
  <!-- Sidenav -->
  <nav
    id="sidenav-2"
    class="fixed left-0 top-0 z-[1035] h-screen w-60 -translate-x-full overflow-hidden bg-white shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] data-[te-sidenav-hidden='false']:translate-x-0 dark:bg-zinc-800"
    data-te-sidenav-init
    data-te-sidenav-hidden="false"
    data-te-sidenav-mode="side"
    data-te-sidenav-content="#content"
  >
    <ul class="relative m-0 list-none px-[0.2rem]" data-te-sidenav-menu-ref>
      <li class="relative">
        <a href="/fbl5n">
          <!-- <span
            class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300"
          > -->
          <!-- <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="h-4 w-4"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z"
              />
            </svg> -->
          <!-- </span> -->
          <svg
            id="logo-32"
            width="220"
            height="57"
            viewBox="0 0 150 57"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M30.5702 28.9046C30.5702 26.8237 31.8126 25.3741 33.7113 25.3741C35.61 25.3741 36.8523 26.8237 36.8523 28.9046C36.8523 30.9622 35.61 32.4351 33.7113 32.4351C31.8126 32.4351 30.5702 30.9622 30.5702 28.9046Z"
              class="ccustom"
              fill="#152C4F"
            ></path>
            <path
              d="M46.6278 25.2806C44.8229 25.2806 43.604 26.6834 43.604 28.6007C43.604 30.5413 44.8463 31.9909 46.6278 31.9909C48.5968 31.9909 49.9095 30.5179 49.9095 28.6007C49.9095 26.7068 48.5968 25.2806 46.6278 25.2806Z"
              class="ccustom"
              fill="#152C4F"
            ></path>
            <path
              d="M57.0911 28.9046C57.0911 26.8237 58.3335 25.3741 60.2322 25.3741C62.1309 25.3741 63.3732 26.8237 63.3732 28.9046C63.3732 30.9622 62.1309 32.4351 60.2322 32.4351C58.3335 32.4351 57.0911 30.9622 57.0911 28.9046Z"
              class="ccustom"
              fill="#152C4F"
            ></path>
            <path
              d="M76.1933 28.928C76.1933 26.8471 77.4591 25.3975 79.4515 25.3975C81.444 25.3975 82.6394 26.8705 82.6394 28.928C82.6394 30.9855 81.444 32.4351 79.4515 32.4351C77.4591 32.4351 76.1933 31.0089 76.1933 28.928Z"
              class="ccustom"
              fill="#152C4F"
            ></path>
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M75 53.3654C114.828 53.3654 147.115 42.0649 147.115 28.125C147.115 14.1851 114.828 2.88464 75 2.88464C35.1718 2.88464 2.88462 14.1851 2.88462 28.125C2.88462 42.0649 35.1718 53.3654 75 53.3654ZM25.9367 34.7031V17.3077H23.0769V34.7031H25.9367ZM27.687 28.9046C27.687 32.4585 30.078 34.9837 33.7113 34.9837C37.3446 34.9837 39.7355 32.4585 39.7355 28.9046C39.7355 25.3507 37.3446 22.8256 33.7113 22.8256C30.078 22.8256 27.687 25.3507 27.687 28.9046ZM46.1356 34.4693C42.8773 34.4693 40.6973 32.0377 40.6973 28.6708C40.6973 25.2806 42.9242 22.7788 46.2293 22.7788C47.9405 22.7788 49.3938 23.5037 50.097 24.7195L50.2611 23.1529H52.7927V34.1186C52.7927 37.9297 50.4018 40.3846 46.6513 40.3846C43.4633 40.3846 41.1427 38.4207 40.7677 35.4045H43.6509C43.8149 36.9243 45.0339 37.7894 46.8153 37.7894C48.8078 37.7894 50.0033 36.5268 50.0033 34.6329V32.669C49.2766 33.7912 47.8233 34.4693 46.1356 34.4693ZM54.2079 28.9046C54.2079 32.4585 56.5989 34.9837 60.2322 34.9837C63.8655 34.9837 66.2564 32.4585 66.2564 28.9046C66.2564 25.3507 63.8655 22.8256 60.2322 22.8256C56.5989 22.8256 54.2079 25.3507 54.2079 28.9046ZM71.0625 19.0847C71.0625 20.0433 70.289 20.7915 69.3513 20.7915C68.3903 20.7915 67.6636 20.0433 67.6636 19.0847C67.6636 18.1494 68.3903 17.4012 69.3513 17.4012C70.289 17.4012 71.0625 18.1494 71.0625 19.0847ZM70.7812 23.1529V34.7031H67.9215V23.1529H70.7812ZM73.2866 40.0573H76.0761V33.1132C76.8027 34.3056 78.3732 35.007 80.1079 35.007C83.5302 35.007 85.5695 32.3884 85.5226 28.7877C85.4523 25.1637 83.3661 22.8022 80.0844 22.8022C78.3264 22.8022 76.7324 23.5738 76.0292 24.9065L75.8651 23.1529H73.2866V40.0573ZM90.89 35.007C88.124 35.007 86.3425 33.534 86.2488 31.2427H88.8507C88.8507 32.2481 89.5773 32.8326 90.8431 32.8326C91.898 32.8326 92.7653 32.4118 92.7653 31.4999C92.7653 30.8452 92.2964 30.4945 91.5463 30.2841L89.5305 29.7697C87.3036 29.1852 86.4363 27.946 86.4363 26.4496C86.4363 24.2518 88.2881 22.8022 90.7728 22.8022C93.2809 22.8022 94.9921 24.2518 95.0859 26.5432H92.484C92.484 25.5378 91.7807 24.9299 90.7025 24.9299C89.6711 24.9299 89.0382 25.491 89.0382 26.286C89.0382 27.0342 89.6242 27.3381 90.4915 27.5719L92.5309 28.0629C94.4296 28.5305 95.4609 29.6528 95.4609 31.3129C95.4609 33.5574 93.6091 35.007 90.89 35.007ZM101.393 35.007C102.963 35.007 104.463 34.2822 105.143 33.2067L105.331 34.7031H108.003V23.1529H105.143V29.2086C105.143 31.2895 104.346 32.4585 102.471 32.4585C101.018 32.4585 100.01 31.7571 100.01 29.3723V23.1529H97.1499V30.3776C97.1499 33.1366 98.6501 35.007 101.393 35.007ZM113.387 28.0629V34.7031H110.527V23.1529H113.152L113.293 24.4623C113.973 23.4335 115.192 22.8022 116.551 22.8022C118.473 22.8022 119.739 23.6439 120.372 25C120.935 23.6439 122.318 22.8022 124.076 22.8022C126.889 22.8022 128.365 24.4857 128.365 27.1511V34.7031H125.599V27.8057C125.599 26.1691 124.709 25.304 123.326 25.304C121.966 25.304 120.888 26.1925 120.888 28.0863V34.7031H118.098V27.8057C118.098 26.1691 117.208 25.304 115.848 25.304C114.489 25.304 113.387 26.1925 113.387 28.0629Z"
              class="ccustom"
              fill="#152C4F"
            ></path>
          </svg>
        </a>
      </li>
      <li class="relative">
        <a
          class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
          href="/fbl5n"
        >
          <span
            class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="h-4 w-4"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z"
              />
            </svg>
          </span>
          <span>fbl5n</span>
        </a>
      </li>
      <li class="relative">
        <a
          class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
          href="/zh170"
        >
          <span
            class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="h-4 w-4"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z"
              />
            </svg>
          </span>
          <span>zh170</span>
        </a>
      </li>
      <li class="relative">
        <a
          class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
          href="/upload"
        >
          <span
            class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="h-4 w-4"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z"
              />
            </svg>
          </span>
          <span>Upload xls</span>
        </a>
      </li>
      <!-- <li class="relative">
          <a
            class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
            data-te-sidenav-link-ref
          >
            <span
              class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="h-4 w-4"
              >
                <path
                  fill-rule="evenodd"
                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-2.625 6c-.54 0-.828.419-.936.634a1.96 1.96 0 00-.189.866c0 .298.059.605.189.866.108.215.395.634.936.634.54 0 .828-.419.936-.634.13-.26.189-.568.189-.866 0-.298-.059-.605-.189-.866-.108-.215-.395-.634-.936-.634zm4.314.634c.108-.215.395-.634.936-.634.54 0 .828.419.936.634.13.26.189.568.189.866 0 .298-.059.605-.189.866-.108.215-.395.634-.936.634-.54 0-.828-.419-.936-.634a1.96 1.96 0 01-.189-.866c0-.298.059-.605.189-.866zm2.023 6.828a.75.75 0 10-1.06-1.06 3.75 3.75 0 01-5.304 0 .75.75 0 00-1.06 1.06 5.25 5.25 0 007.424 0z"
                  clip-rule="evenodd"
                />
              </svg>
            </span>
            <span>fbl5n</span>
            <span
              class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none [&>svg]:text-gray-600 dark:[&>svg]:text-gray-300"
              data-te-sidenav-rotate-icon-ref
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
                class="h-5 w-5"
              >
                <path
                  fill-rule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                  clip-rule="evenodd"
                />
              </svg>
            </span>
          </a>
          <ul
            class="!visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block"
            data-te-sidenav-collapse-ref
          >
            <li class="relative">
              <a
                class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                data-te-sidenav-link-ref
                >Link 2</a
              >
            </li>
            <li class="relative">
              <a
                class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                data-te-sidenav-link-ref
                >Link 3</a
              >
            </li>
          </ul>
        </li>
        <li class="relative">
          <a
            class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
            data-te-sidenav-link-ref
          >
            <span
              class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="h-4 w-4"
              >
                <path
                  fill-rule="evenodd"
                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-2.625 6c-.54 0-.828.419-.936.634a1.96 1.96 0 00-.189.866c0 .298.059.605.189.866.108.215.395.634.936.634.54 0 .828-.419.936-.634.13-.26.189-.568.189-.866 0-.298-.059-.605-.189-.866-.108-.215-.395-.634-.936-.634zm4.314.634c.108-.215.395-.634.936-.634.54 0 .828.419.936.634.13.26.189.568.189.866 0 .298-.059.605-.189.866-.108.215-.395.634-.936.634-.54 0-.828-.419-.936-.634a1.96 1.96 0 01-.189-.866c0-.298.059-.605.189-.866zm2.023 6.828a.75.75 0 10-1.06-1.06 3.75 3.75 0 01-5.304 0 .75.75 0 00-1.06 1.06 5.25 5.25 0 007.424 0z"
                  clip-rule="evenodd"
                />
              </svg>
            </span>
            <span>zh170</span>
            <span
              class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none [&>svg]:text-gray-600 dark:[&>svg]:text-gray-300"
              data-te-sidenav-rotate-icon-ref
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
                class="h-5 w-5"
              >
                <path
                  fill-rule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                  clip-rule="evenodd"
                />
              </svg>
            </span>
          </a>
          <ul
            class="show !visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block"
            data-te-sidenav-collapse-ref
          >
            <li class="relative">
              <a
                class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                data-te-sidenav-link-ref
                >Link 4</a
              >
            </li>
            <li class="relative">
              <a
                class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                data-te-sidenav-link-ref
                >Link 5</a
              >
            </li>
          </ul>
        </li> -->
    </ul>
  </nav>
  <!-- Sidenav -->
  <!-- <button
    class="mt-10 inline-block rounded bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
    data-te-sidenav-toggle-ref
    data-te-target="#sidenav-2"
    aria-controls="#sidenav-2"
    aria-haspopup="true"
  >
    <span class="block [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-white">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
        fill="currentColor"
        class="h-5 w-5"
      >
        <path
          fill-rule="evenodd"
          d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
          clip-rule="evenodd"
        />
      </svg>
    </span>
  </button> -->
  <!-- Toggler -->
  <!-- <div class="my-5 flex text-start">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc magna massa,
    ornare quis interdum a, cursus in quam. Quisque risus libero, cursus eget
    eros vitae, aliquam placerat velit. Vivamus luctus eros id sagittis luctus.
    Pellentesque felis nulla, rhoncus viverra nunc vitae, viverra aliquam ante.
    Ut feugiat mattis tempor.
  </div> -->
  <div class="p-5 !pl-[260px]" id="content">
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <h1 class="block w-full text-gray-800 text-2xl font-bold mb-6">
          Customer line item display
        </h1>
        <form @submit.prevent="submit">
          <div class="flex gap-4 p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="md:w-1/3 align-middle">
              <label for="exampleFormControlInput1" class="form-label"
                >XLS file</label
              >
            </div>
            <div class="flex md:w-2/3 gap-2">
              <label
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                for="file_input"
                >XLS file</label
              >
              <input
                class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                id="default_size"
                type="file"
              />
            </div>
          </div>
          <div class="flex md:w-3/3 gap-2 justify-end py-4">
            <button
              class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
            >
              Subir
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>
<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { reactive } from "vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const form = useForm({
  accountFrom: "",
  accountTo: "",
});

const submit = () => {
  console.log(form.post(route("api-test"), {}));
};
</script>
