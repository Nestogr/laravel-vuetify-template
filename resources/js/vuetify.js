import 'vuetify/styles'
import '@mdi/font/css/materialdesignicons.css'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import {md3} from 'vuetify/blueprints';

const vuetify = createVuetify({
    blueprints: md3,
    components,
    directives,
})

export default vuetify;
