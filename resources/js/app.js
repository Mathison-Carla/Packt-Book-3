
import './bootstrap';
import { createApp } from 'vue';



const app = createApp('#app');

import ExampleComponent from './components/ExampleComponent.vue';
import Alabama from 'resources/js/components/Alabama.vue';
app.component('example-component', ExampleComponent);
app.component('alabama', Alabama);

app.mount('#app');
