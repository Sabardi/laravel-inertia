import './bootstrap';
import '../css/app.css';
import Layout from './Layouts/Layout.vue';
import { createApp, h } from 'vue'
import { createInertiaApp, Head, Link } from '@inertiajs/vue3'

createInertiaApp({
    title: title => `My App ${title}`,
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })

        let page = pages[`./Pages/${name}.vue`];
        page.default.layout = page.default.layout || Layout;
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use('Head', Head)
            .use('Link', Link)
            .mount(el)
    },

    progress: {
        // The color of the progress bar...
        color: '#4B5563',

        // Whether to include the default NProgress styles...
        includeCSS: true,

        // Whether the NProgress spinner will be shown...
        showSpinner: true,
      },
      // ...
})
