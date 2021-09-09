<template>
    <div>
        <h3>TOP CATEGORY</h3>
        <hr>
        <a class="learnMore" style="font-weight:bold">
            Office & School Supplies</a>
        <hr class='dotted'/>
        <a class="learnMore" style="font-weight:bold">
            Office Furniture & Lighting</a>
        <hr class='dotted'/>
        <a class="learnMore" style="font-weight:bold">
            Kitchen & Dining</a>
        <hr class='dotted'/>
        <a class="learnMore" style="font-weight:bold">
            Cell Phone Accessories</a>
        <hr class='dotted'/>
        <a class="learnMore" style="font-weight:bold">
            Computers & Accessories</a>
        <hr class='dotted'/>
        <a class="learnMore" style="font-weight:bold">
            Gardening Pots </a>
        <hr class='dotted'/>
        <a class="learnMore" style="font-weight:bold">
            Planters & Accessories</a>
        <hr class='dotted'/>
        <a class="learnMore" style="font-weight:bold">
            Lighting & Ceiling Fans </a>
        <hr class='dotted'/>
        <a class="learnMore" style="font-weight:bold">
            Home Office Furniture </a>
        <hr class='dotted'/>
        <a class="learnMore" style="font-weight:bold">
            Home & Kitchen </a>
        <hr class='dotted'/>
        <a class="learnMore" style="font-weight:bold">
            Office Products </a>
        <hr class='dotted'/>
        <a class="learnMore" style="font-weight:bold">
            Electronics</a>
        <hr class='dotted'/>
        <a class="learnMore" style="font-weight:bold">
            Clothing, Shoes & Jewelry</a>
        <hr class='dotted'/>
        <a class="learnMore" style="font-weight:bold">
            Sports & Outdoors</a>
    </div>
</template>


<script>

export default {
    name: "Sidebar"
}
</script>


<style scoped>
.dotted {
    border: 1px dotted #ff0000;
    border-style: none none dotted;
    color: #fff;
    background-color: #fff;
}

.learnMore {
    background-color: none;
    color: white;
}

.learnMore:hover {
    /*background-color:purple;*/
    color: #fa880b;
    text-decoration: none;
}
</style>
