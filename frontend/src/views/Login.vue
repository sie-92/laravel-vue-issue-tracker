<template>
  <form @submit.prevent="login">
    <input v-model="email" type="email" placeholder="Email" />
    <input v-model="password" type="password" placeholder="Password" />
    <button type="submit">Login</button>
  </form>
</template>

<script setup>
import { ref } from 'vue';
import api from '../axios';
import { useRouter } from 'vue-router';

const email = ref('');
const password = ref('');
const router = useRouter();

const login = async () => {
  await api.get('/sanctum/csrf-cookie');
  await api.post('/login', { email: email.value, password: password.value });
  router.push('/dashboard');
};
</script>
