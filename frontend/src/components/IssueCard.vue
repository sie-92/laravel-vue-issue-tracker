<template>
  <div>
    <h3>{{ issue.title }}</h3>
    <p>{{ issue.description }}</p>
    <p>Status: {{ issue.status }}</p>
    <button @click="remove">Delete</button>
  </div>
</template>

<script setup>
import api from '../axios';
const props = defineProps(['issue']);
const emit = defineEmits(['refresh']);

const remove = async () => {
  await api.delete(`/issues/${props.issue.id}`);
  emit('refresh');
};
</script>
