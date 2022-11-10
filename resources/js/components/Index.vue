<template>
    <div>
        <div class="d-flex justify-content-center mt-5">
            <div class="input-group input-group-sm mb-3 total-width">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm" @click="getBooks">Поиск</span>
                </div>
                <input v-model="search" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
        </div>

        <div class="d-flex justify-content-center">

            <div class="d-flex justify-content-center total-width">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Книга</th>
                            <th scope="col">Авторы</th>
                            <th scope="col">Количество</th>
                        </tr>
                    </thead>
                    <tbody v-for="(book, key) in books" :key="key">
                        <Book :book=book />

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</template>
<script>
import Book from '../components/Book.vue';

export default {
    components: {
        Book
    },
    data() {
        return {
            books: [],
            search: null
        }
    },
    watch: {
        search() {
            this.getBooks()
        }
    },
    created() {
        this.getBooks()
    },
    methods: {
        getBooks() {
            window.axios.get('/api/books', {
                params: {
                    search: this.search
                }
            })
                .then(response => {
                    if (response.data.success === true) {
                        this.books = response.data.books
                    }
                })

        }
    }
}

</script>
<style scoped>
.total-width {
    width: 50%;
}
</style>