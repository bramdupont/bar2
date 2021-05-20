import Dashboard from "./views/Dashboard";
import Saldo from "./views/Saldo";
import Account from "./views/Account";
import Settings from "./views/Settings";
import Login from "./views/auth/Login";
import Register from "./views/auth/Register";

export const routes = [
    { path: '/bestellen', component: Dashboard, name: 'Dashboard' },
    { path: '/', component: Login, name: 'Login' },
    { path: '/registreren', component: Register, name: 'Register' },
    { path: '/saldo', component: Saldo, name: 'Saldo' },
    { path: '/account', component: Account, name: 'Account' },
    { path: '/settings', component: Settings, name: 'Settings' }
];
