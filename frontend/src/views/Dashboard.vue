<template>
  <div>
    <IssueForm @refresh="loadIssues" />
    <IssueCard v-for="issue in issues" :key="issue.id" :issue="issue" @refresh="loadIssues" />
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import api from '../axios';
import IssueForm from '../views/IssueForm.vue';
import IssueCard from '../components/IssueCard.vue';

const issues = ref([]);
const loadIssues = async () => {
  const res = await api.get('/issues');
  issues.value = res.data;
};

onMounted(loadIssues);
</script>
