<template>
    <div>
        <button v-on:click.prevent="AddToCart()" tabindex="0"
            class="focus:outline-none text-xs rounded-sm text-white text-gray-600 px-2 bg-indigo-600 py-1">
            Ajouter au panier
        </button>
    </div>
</template>

<script setup>
const AddToCart = () => {
    console.log('AddToCart button clicked');
}
</script>
