import Dashboard from "./views/Dashboard";
import Saldo from "./views/Saldo";
import Account from "./views/Account";
import Settings from "./views/Settings";
import Login from "./views/auth/Login";

export const routes = [
    { path: '/', component: Dashboard, name: 'Dashboard' },
    { path: '/login', component: Login, name: 'Login' },
    { path: '/saldo', component: Saldo, name: 'Saldo' },
    { path: '/account', component: Account, name: 'Account' },
    { path: '/settings', component: Settings, name: 'Settings' }
];
