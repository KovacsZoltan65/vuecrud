<script setup>
    import { useForm } from '@inertiajs/vue3';
    import { router } from '@inertiajs/vue3';

    defineProps({
        errors: Object
    });

    const form = useForm({
        name: null,
        email: null,
        phone: null,
    });
    function submit(){
        router.post('/customers/store', form);
    }
</script>

<template>
    <div class="card col-6 offset-3">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <form @submit.prevent="submit">

                <!-- NAME -->
                <div class="mb-3">
                    <label for="name" 
                           class="form-label">Name</label>
                    <input type="text" 
                           class="form-control" 
                           id="name" 
                           placeholder="name" 
                           v-model="form.name"
                           aria-describedby="nameHelp">
                    <div id="nameHelp" class="text-danger text-xs" v-if="errors.name">{{ errors.name }}</div>
                </div>

                <!-- EMAIL -->
                <div class="mb-3">
                    <label for="email" 
                           class="form-label">Email</label>
                    <input type="email" 
                           id="email" 
                           v-model="form.email"
                           class="form-control" 
                           aria-describedby="emailHelp">
                    <div id="emailHelp" class="text-danger text-xs" v-if="errors.email">{{ errors.email }}</div>
                </div>

                <!-- PHONE -->
                <div class="mb-3">
                    <label for="phone" 
                           class="form-label">Phone</label>
                    <input type="number" 
                           id="phone" 
                           v-model="form.phone"
                           class="form-control" 
                           aria-describedby="phoneHelp">
                    <div id="phoneHelp" class="text-danger text-xs" v-if="errors.phone">{{ errors.phone }}</div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</template>