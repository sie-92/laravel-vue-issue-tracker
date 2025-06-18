import { reactive } from 'vue';

const auth = reactive({
  user: null,
  setUser(userData) {
    auth.user = userData;
  },
  logout() {
    auth.user = null;
  },
});

export default auth;
