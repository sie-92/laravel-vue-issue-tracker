<template>
  <form @submit.prevent="register">
    <input v-model="name" placeholder="Name" />
    <input v-model="email" type="email" placeholder="Email" />
    <input v-model="password" type="password" placeholder="Password" />
    <button type="submit">Register</button>
  </form>
</template>

<script setup>
import { ref } from 'vue';
import api from '../axios';
import { useRouter } from 'vue-router';

const name = ref('');
const email = ref('');
const password = ref('');
const router = useRouter();

const register = async () => {
  await api.get('/sanctum/csrf-cookie');
  await api.post('/register', { name: name.value, email: email.value, password: password.value });
  router.push('/dashboard');
};
</script>
