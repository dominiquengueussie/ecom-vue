import './bootstrap';
import { createApp } from 'vue';
import AddToCart from './components/AddToCart.vue';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

export default {
  components: {
    'add-to-cart': AddToCart,
  },
};
createApp(AddToCart).mount("#app")
