<template>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
      <h1
        class="block w-full text-center text-gray-800 text-2xl font-bold mb-6"
      >
        Customer line item display
      </h1>
      <form @submit.prevent="handleSubmit">
        <div class="flex gap-4 p-4 sm:p-8 bg-white shadow sm:rounded-lg">
          <div class="md:w-1/3 align-middle">
            <label for="exampleFormControlInput1" class="form-label"
              >Customer account from - to</label
            >
          </div>
          <div class="flex md:w-2/3 gap-2">
            <input
              v-model="accountFrom"
              id="account-from"
              type="text"
              class="mt-1 block w-full"
              required
              autofocus
              autocomplete="account-from"
            />to:<input
              v-model="aacountTo"
              id="account-to"
              type="text"
              class="mt-1 block w-full"
              required
              autofocus
              autocomplete="account-to"
            />
          </div>
        </div>
        <div class="flex md:w-2/3 gap-2">
          <button
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
          >
            Button
          </button>
        </div>
      </form>
    </div>
  </div>
</template>
  <script>
// import TextInput from "@/Components/TextInput.vue";
import { ref, onMounted } from "vue";
// import { router } from "@inertiajs/vue3";
// import VueDatePicker from "@vuepic/vue-datepicker";
import "@vuepic/vue-datepicker/dist/main.css";
import { ref, onMounted } from "vue";
import { router } from "@inertiajs/vue3";

export default {
  setup() {
    const accountFrom = ref("");
    const accountTo = ref("");

    const handleSubmit = () => {
      console.log("Input 1 value:", accountFrom.value);
      console.log("Input 2 value:", accountTo.value);
      this.$inertia.post("/api-test", { data: accountFrom.value });
    };

    const resetInputs = () => {
      accountFrom.value = "";
      accountTo.value = "";
    };

    return {
      accountFrom,
      accountTo,
      handleSubmit,
      resetInputs,
    };
  },
};
</script>
  