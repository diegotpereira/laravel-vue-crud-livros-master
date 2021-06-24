import TodosProdutos from './components/TodosProdutos.vue';
import CriarProduto from './components/CriarProduto.vue';
import EditarProduto from './components/EditarProduto.vue';


export const routes = [
    {
        name: 'home',
        path: '/',
        component: TodosProdutos
    },

    {
        name: 'criar',
        path: '/criar',
        component: CriarProduto
    },

    {
        name: 'edit',
        path: '/edit/:id',
        component: EditarProduto
    }
];