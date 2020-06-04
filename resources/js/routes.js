import Read from './components/Read';
import Write from './components/Write';
import NotFound from './components/NotFound';
import Stats from './components/Stats';
import Counter from "./components/Counter";

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
            path: '/counter',
            component: Counter

        }
    ]

}
