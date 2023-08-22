<template>
    <div>
        <h1>My Todo List</h1>
        <ul>
            <li v-for="task in tasks" :key="task.id">{{ task.name }}</li>
        </ul>
    </div>
    <div class="">
        <button @click="onClick" class="custom-button">{{ label }}</button>
    </div>
</template>

<script>
import { ref } from 'vue';

export default {
    setup() {
        const tasks = ref([
            { id: 1, name: 'Task 1' },
            { id: 2, name: 'Task 2' },
            { id: 3, name: 'Task 3' },
        ]);

        return { tasks };
    },
};
</script>

<style scoped lang="scss"></style>
