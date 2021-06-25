import TodosProdutos from './components/TodosProdutos.vue';
import CriarProduto from './components/CriarProduto.vue';
import EditarProduto from './components/EditarProduto.vue';

import AllBooks from './components/AllBooks.vue';
import AddBook from './components/AddBook.vue';
import EditLivro  from './components/EditLivro.vue';


export const routes = [

    {
        name: 'home',
        path: '/',
        component: AllBooks
    },

    {
        name: 'add',
        path: '/add',
        component: AddBook
    },

    {
        name: 'edit',
        path: '/edit/:id',
        component: EditLivro
    }
];
