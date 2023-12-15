<template>
    <div>
        <button
            @click.prevent="AddToCart()"
            tabindex="0"
            class="focus:outline-none text-xs rounded-sm text-white text-gray-600 px-2 bg-indigo-600 py-1"
        >
            Ajouter au panier
        </button>
    </div>
</template>

<script setup>
import axios from "axios";
import { onMounted, ref } from "vue";
//import router from "../../router/index.js";

const AddToCart = () => {
    console.log("AddToCart button clicked");
};

onMounted(async () => {
    getProducts();
    AddToCart();
});

const getProducts = async () => {
    try {
        let response = await axios.get(`/api/show_invoice/${props.id}`);
        if (response.data.invoice) {
            form.value = response.data.invoice;
            console.log(response.data.invoice);
        } else {
            console.log("Aucune facture trouvée");
        }
    } catch (error) {
        console.error("Erreur lors de la récupération de la facture:", error);
    }
};
</script>
