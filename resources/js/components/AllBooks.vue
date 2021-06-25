<template>
    <div>
        <h3 class="text-center">Lista de books</h3><br/>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Autor</th>
                    <th>Criado em</th>
                    <th>Atualizado em</th>
                    <th>Ação</th>
                </tr>
            </thead>

            <tbody>
                <tr v-for="book in books" :key="book.id">
                    <td>{{book.id}}</td>
                    <td>{{book.name}}</td>
                    <td>{{book.author}}</td>
                    <td>{{book.created_at}}</td>
                    <td>{{book.updated_at}}</td>

                    <td>
                        <div class="btn-group" role="group">
                            <router-link :to="{name:'edit', params: {id:book.id}}" class="btn btn-primary">Editar</router-link>
                            <button class="btn btn-danger" @click="deletarbook(book.id)">Deletar</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default{
        data(){
            return{
                books:[]
            }
        },

        created(){
            this.axios
                .get('http://localhost:8000/api/books')
                .then(response => {
                    this.books = response.data;
                });
        },

        methods: {
            deletarbook(id){
                this.axios
                    .delete('http://localhost:8000/api/book/delete/${id}')
                    .then(response => {
                        let i = this.books.map(item.id).indexOf(id);
                        this.books.splice(i ,1);
                    });
            }
        }
    }
</script>
