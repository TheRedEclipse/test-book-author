<template>
    <tr>
        <th scope="row">{{ book.id }}</th>
        <td>{{ book.name }}</td>
        <td>{{ book.authors }}</td>
        <td>{{ book.count_authors }}</td>
    </tr>
</template>
<script>
export default {
    props: {
        book: null
    }
}
</script>