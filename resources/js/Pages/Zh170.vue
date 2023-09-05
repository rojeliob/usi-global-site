<!-- <template>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
      <h1
        class="block w-full text-center text-gray-800 text-2xl font-bold mb-6"
      >
        Billing record & AR status report!
      </h1>
      <div class="flex gap-4 p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <div class="md:w-1/3 align-middle">
          <label for="exampleFormControlInput1" class="form-label"
            >Posting date</label
          >
        </div>
        <div class="md:w-2/3">
          <VueDatePicker
            v-model="date"
            range
            multi-calendars
            @closed="alertFn"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import VueDatePicker from "@vuepic/vue-datepicker";
import "@vuepic/vue-datepicker/dist/main.css";
import { ref, onMounted } from "vue";

const date = ref();

onMounted(() => {
  const startDate = new Date();
  const endDate = new Date(new Date().setDate(startDate.getDate() + 7));
  date.value = [startDate, endDate];
});
const alertFn = () => {
  console.log(date.value[0] + "to" + date.value[1]);
};
</script> -->




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
    </ul>
  </nav>
  <!-- Sidenav -->
  <button
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
  </button>
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
      <form @submit.prevent="submit">
        <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <h1 class="block w-full text-gray-800 text-2xl font-bold mb-6">
              Billing record & AR status report!
            </h1>

            <div class="gap-4 p-4 sm:p-8 bg-white shadow sm:rounded-lg">
              <div class="flex">
                <div class="md:w-1/3 align-middle">
                  <label for="exampleFormControlInput1" class="form-label"
                    >Posting date</label
                  >
                </div>
                <div class="md:w-2/3">
                  <VueDatePicker
                    v-model="date"
                    range
                    multi-calendars
                    @closed="alertFn"
                  />
                </div>
              </div>
              <div class="flex">
                <div class="md:w-1/3 align-middle">
                  <label for="exampleFormControlInput1" class="form-label"
                    >Plant</label
                  >
                </div>
                <div class="flex md:w-2/3 gap-2">
                  <input
                    id="account-from"
                    type="text"
                    class="mt-1 block w-full"
                    autofocus
                    autocomplete="account-from"
                  />to:
                  <input
                    id="account-to"
                    type="text"
                    class="mt-1 block w-full"
                    autofocus
                    autocomplete="account-from"
                  />
                </div>
              </div>
              <div class="flex">
                <div class="md:w-1/3 align-middle">
                  <label for="exampleFormControlInput1" class="form-label"
                    >Storage location</label
                  >
                </div>
                <div class="flex md:w-2/3 gap-2">
                  <input
                    id="account-from"
                    type="text"
                    class="mt-1 block w-full"
                    autofocus
                    autocomplete="account-from"
                  />to:
                  <input
                    id="account-to"
                    type="text"
                    class="mt-1 block w-full"
                    autofocus
                    autocomplete="account-from"
                  />
                </div>
              </div>
              <div class="flex">
                <div class="md:w-1/3 align-middle">
                  <label for="exampleFormControlInput1" class="form-label"
                    >Material</label
                  >
                </div>
                <div class="flex md:w-2/3 gap-2">
                  <input
                    id="account-from"
                    type="text"
                    class="mt-1 block w-full"
                    autofocus
                    autocomplete="account-from"
                  />to:
                  <input
                    id="account-to"
                    type="text"
                    class="mt-1 block w-full"
                    autofocus
                    autocomplete="account-from"
                  />
                </div>
              </div>
              <div class="flex">
                <div class="md:w-1/3 align-middle">
                  <label for="exampleFormControlInput1" class="form-label"
                    >Profit center</label
                  >
                </div>
                <div class="flex md:w-2/3 gap-2">
                  <input
                    id="account-from"
                    type="text"
                    class="mt-1 block w-full"
                    autofocus
                    autocomplete="account-from"
                  />to:
                  <input
                    id="account-to"
                    type="text"
                    class="mt-1 block w-full"
                    autofocus
                    autocomplete="account-from"
                  />
                </div>
              </div>
              <div class="flex">
                <div class="md:w-1/3 align-middle">
                  <label for="exampleFormControlInput1" class="form-label"
                    >Payer Code</label
                  >
                </div>
                <div class="flex md:w-2/3 gap-2">
                  <input
                    id="account-from"
                    type="text"
                    class="mt-1 block w-full"
                    autofocus
                    autocomplete="account-from"
                  />to:
                  <input
                    id="account-to"
                    type="text"
                    class="mt-1 block w-full"
                    autofocus
                    autocomplete="account-from"
                  />
                </div>
              </div>
              <div class="flex">
                <div class="md:w-1/3 align-middle">
                  <label for="exampleFormControlInput1" class="form-label"
                    >Order Type</label
                  >
                </div>
                <div class="flex md:w-2/3 gap-2">
                  <input
                    id="account-from"
                    type="text"
                    class="mt-1 block w-full"
                    autofocus
                    autocomplete="account-from"
                  />to:
                  <input
                    id="account-to"
                    type="text"
                    class="mt-1 block w-full"
                    autofocus
                    autocomplete="account-from"
                  />
                </div>
              </div>
              <div class="flex">
                <div class="md:w-1/3 align-middle">
                  <label for="exampleFormControlInput1" class="form-label"
                    >Item</label
                  >
                </div>
                <div class="flex md:w-2/3 gap-2">
                  <input
                    id="account-from"
                    type="text"
                    class="mt-1 block w-full"
                    autofocus
                    autocomplete="account-from"
                  />to:
                  <input
                    id="account-to"
                    type="text"
                    class="mt-1 block w-full"
                    autofocus
                    autocomplete="account-from"
                  />
                </div>
              </div>
              <div class="flex">
                <div class="md:w-1/3 align-middle">
                  <label for="exampleFormControlInput1" class="form-label"
                    >Customer account</label
                  >
                </div>
                <div class="flex md:w-2/3 gap-2">
                  <input
                    id="account-from"
                    type="text"
                    class="mt-1 block w-full"
                    autofocus
                    autocomplete="account-from"
                  />to:
                  <input
                    id="account-to"
                    type="text"
                    class="mt-1 block w-full"
                    autofocus
                    autocomplete="account-from"
                  />
                </div>
              </div>
              <div class="flex">
                <div class="md:w-1/3 align-middle">
                  <label for="exampleFormControlInput1" class="form-label"
                    >Customer account</label
                  >
                </div>
                <div class="flex md:w-2/3 gap-2">
                  <input
                    id="account-from"
                    type="text"
                    class="mt-1 block w-full"
                    autofocus
                    autocomplete="account-from"
                  />to:
                  <input
                    id="account-to"
                    type="text"
                    class="mt-1 block w-full"
                    autofocus
                    autocomplete="account-from"
                  />
                </div>
              </div>
              <div class="flex">
                <div class="md:w-1/3 align-middle">
                  <label for="exampleFormControlInput1" class="form-label"
                    >Customer account</label
                  >
                </div>
                <div class="flex md:w-2/3 gap-2">
                  <input
                    id="account-from"
                    type="text"
                    class="mt-1 block w-full"
                    autofocus
                    autocomplete="account-from"
                  />to:
                  <input
                    id="account-to"
                    type="text"
                    class="mt-1 block w-full"
                    autofocus
                    autocomplete="account-from"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="my-2 max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="gap-4 p-4 sm:p-8 bg-white shadow sm:rounded-lg">
              AR Status
              <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                <input
                  class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:border-neutral-600 dark:checked:border-primary dark:checked:after:border-primary dark:checked:after:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:border-primary dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                  type="radio"
                  name="flexRadioDefault"
                  id="radioDefault01"
                />
                <label
                  class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                  for="radioDefault01"
                >
                  All
                </label>
              </div>
              <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                <input
                  class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:border-neutral-600 dark:checked:border-primary dark:checked:after:border-primary dark:checked:after:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:border-primary dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                  type="radio"
                  name="flexRadioDefault"
                  id="radioDefault02"
                  checked
                />
                <label
                  class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                  for="radioDefault02"
                >
                  Open
                </label>
              </div>
              <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                <input
                  class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:border-neutral-600 dark:checked:border-primary dark:checked:after:border-primary dark:checked:after:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:border-primary dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                  type="radio"
                  name="flexRadioDefault"
                  id="radioDefault02"
                  checked
                />
                <label
                  class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                  for="radioDefault02"
                >
                  Clear
                </label>
              </div>
            </div>
          </div>
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="flex md:w-3/3 gap-2 justify-end py-4">
              <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
              >
                Make report
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>
  <script setup>
import VueDatePicker from "@vuepic/vue-datepicker";
import "@vuepic/vue-datepicker/dist/main.css";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { ref, reactive, onMounted } from "vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const date = ref();
onMounted(() => {
  const startDate = new Date();
  const endDate = new Date(new Date().setDate(startDate.getDate() + 7));
  date.value = [startDate, endDate];
});
const form = useForm({
  // inputTextX: "",
});

const submit = () => {
  // const startDate = new Date();
  // const endDate = new Date(new Date().setDate(startDate.getDate() + 7));
  console.log(date.value[0] + date.value[1]);
  console.log(form.post(route("api-test"), {}));
};
const alertFn = () => {
  console.log(date.value[0] + "to" + date.value[1]);
};
</script>
  
