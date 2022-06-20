import './bootstrap';

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

InertiaProgress.init()

/* import specific icons */
import { faUserSecret } from '@fortawesome/free-solid-svg-icons'
import { faAdn} from "@fortawesome/free-brands-svg-icons";

/* add icons to the library */
library.add(
    faUserSecret,
    faAdn
)

createInertiaApp({
    id: 'app',
    resolve: name => import(`./modules/${name}`),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .component('font-awesome-icon', FontAwesomeIcon)
            .mount(el)
    },
})
