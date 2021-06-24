<template>
    <div>
        <h3 class="text-center">Lista de Livros</h3><br/>

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
                <tr v-for="livro in livros" :key="livro.id">
                    <td>{{livro.id}}</td>
                    <td>{{livro.nome}}</td>
                    <td>{{livro.autor}}</td>
                    <td>{{livro.created_at}}</td>
                    <td>{{livro.updated_at}}</td>

                    <td>
                        <div class="btn-group" role="group">
                            <router-link :to="name='edit', params: {id:livro.id}}" class="btn btn-primary">Editar</router-link>
                            <button class="btn btn-danger" @click="deletarLivro(livro.id)">Deletar</button>
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
                livros:[]
            }
        },

        created(){
            this.axios
                .get('http://localhost:8000/api/livros')
                .then(response => {
                    this.livros = response.data;
                });
        },

        methods: {
            deletarLivro(id){
                this.axios
                    .dekete('http://localhost:8000/api/livro/delete/${id}')
                    .then(response => {
                        let i = this.livros.map(item.id).indexOf(id);
                        this.livros.splice(i ,1);
                    });
            }
        }
    }
</script>