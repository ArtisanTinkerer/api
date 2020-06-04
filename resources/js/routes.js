import Read from './components/Read';
import Write from './components/Write';
import NotFound from './components/NotFound';
import Stats from './components/Stats';
import Todos from "./components/Todos";

export default {
    mode: 'history',
    linkActiveClass: 'font-bold',
    routes: [
        {
            path: '*',
            component: NotFound


        },
        {
            path: '/read',
            component: Read
        },
        {
            path: '/write',
            component: Write

        },
        {
            path: '/stats',
            component: Stats

        },
        {
            path: '/todos',
            component: Todos

        }
    ]

}
