<template>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Billing record & AR status report!</h1>
                <div class="flex gap-4 p-4 sm:p-8 bg-white shadow sm:rounded-lg"> 
                    <div class="md:w-1/3 align-middle">
                        <label for="exampleFormControlInput1" class="form-label">Posting date</label> 
                    </div>
                    <div class="md:w-2/3">
                        <VueDatePicker v-model="date" range multi-calendars @closed="alertFn"/>
                    </div>
                </div> 
        </div>
    </div>
</template>

<script setup>
import VueDatePicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css'
import { ref, onMounted } from 'vue';

const date = ref();

onMounted(() => {
  const startDate = new Date();
  const endDate = new Date(new Date().setDate(startDate.getDate() + 7));
  date.value = [startDate, endDate];
})
const alertFn = () => {
  console.log(date.value[0]+'to'+date.value[1]);
}
</script>