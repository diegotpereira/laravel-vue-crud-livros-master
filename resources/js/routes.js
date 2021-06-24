import TodosProdutos from './components/TodosProdutos.vue';
import CriarProduto from './components/CriarProduto.vue';
import EditarProduto from './components/EditarProduto.vue';

import TodosLivros from './components/TodosLivros.vue';
import AddLivro from './components/AddLivro.vue';
import EditLivro  from './components/EditLivro.vue';


export const routes = [
   /* {
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
    }*/

    {
        name: 'home',
        path: '/',
        component: TodosLivros
    },

    {
        name: 'add',
        path: '/add',
        component: AddLivro
    },

    {
        name: 'edit',
        path: '/edit/:id',
        component: EditLivro
    }
];