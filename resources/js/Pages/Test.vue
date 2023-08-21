<template>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg"> 
                    <label for="exampleFormControlInput1" class="form-label">Posting date</label> 
                    <VueDatePicker v-model="date" range multi-calendars />
                        <table class="table-auto">
                            <thead>
                                <tr>
                                <th>Song</th>
                                <th>Artist</th>
                                <th>Year</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                                <td>Malcolm Lockyer</td>
                                <td>1961</td>
                                </tr>
                                <tr>
                                <td>Witchy Woman</td>
                                <td>The Eagles</td>
                                <td>1972</td>
                                </tr>
                                <tr>
                                <td>Shining Star</td>
                                <td>Earth, Wind, and Fire</td>
                                <td>1975</td>
                                </tr>
                            </tbody>
                    </table>
                    {{ $data }}
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
</script>