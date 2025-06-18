<template>
  <form @submit.prevent="submit">
    <input v-model="title" placeholder="Title" />
    <textarea v-model="description" placeholder="Description"></textarea>
    <button type="submit">Submit</button>
  </form>
</template>

<script setup>
import { ref } from 'vue';
import api from '../axios';
const title = ref('');
const description = ref('');
const emit = defineEmits(['refresh']);

const submit = async () => {
  await api.post('/issues', { title: title.value, description: description.value });
  title.value = '';
  description.value = '';
  emit('refresh');
};
</script>
