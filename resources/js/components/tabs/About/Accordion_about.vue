<template>
    <div>

        <h2>WHAT WE DO?</h2>
        <hr>

        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" style="color: black" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            1. What is HTML?
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        HTML is a computer language devised to can then b the Internet. It is relatively easy to learn, with the basics being accessible.                           </div>
                </div>
            </div><br>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" style="color: black" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2. What is Bootstrap?
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        Bootstrap is the most popular HTML, CSS, and JS frameen I discovered Bootstrap a few was still gaining in popularity, addition to HTML, CSS and JS. </div>
                </div>
            </div><br>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" style="color: black; " type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3. What is CSS?
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        Cascading Style Sheets, fondly referred to as CSS, is a simple design language intended to simplify the procrt of a web page. Using CSS. </div>
                </div>
            </div>
        </div>
    </div>


</template>


<script>

export default {
    name: "Accordion_about"
}

</script>


<style scoped>

.card-body{
    color: #696969;
}
body {
    background: rgb(215, 143, 47);
    background: -moz-linear-gradient(left, rgb(214, 142, 47) 0%, rgb(245, 141, 97) 50%, rgb(214, 142, 47) 100%);
    /*background: -webkit-gradient(left top, right top, color-stop(0%, rgb(213, 141, 47)), color-stop(50%, rgba(245,141,97,1)), color-stop(100%, rgb(213, 141, 47)));*/
    background: -webkit-linear-gradient(left, rgb(214, 142, 47) 0%, rgb(245, 141, 97) 50%, rgb(214, 142, 47) 100%);
    background: -o-linear-gradient(left, rgb(214, 142, 47) 0%, rgb(245, 141, 97) 50%, rgb(214, 142, 47) 100%);
    background: -ms-linear-gradient(left, rgb(214, 142, 47) 0%, rgb(245, 141, 97) 50%, rgb(214, 142, 47) 100%);
    background: linear-gradient(to right, rgb(214, 142, 47) 0%, rgb(245, 141, 97) 50%, rgb(214, 142, 47) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f4676e', endColorstr='#f4676e', GradientType=1);
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.container {
    margin: 50px auto;
    width: 900px;

}

button:hover{
    background-color: #b49543;
}

.client h3 {
    font-size: 16px;
    color: #ff8e00;
    padding: 0px;
    margin: 0px;
}

.client h6 {
    color: #9b5719;
}

.client h3 {
    font-weight: 100;
    margin-top: 0px;
}



.client:hover .logo {
    background: rgb(215, 143, 47);
    background: -moz-linear-gradient(top, rgb(215, 143, 47) 0%, rgb(7, 5, 4) 100%);
    background: -webkit-linear-gradient(top, rgb(215, 143, 47) 0%, rgb(3, 3, 2) 100%);
    background: -o-linear-gradient(top, rgb(215, 143, 47) 0%, rgb(0, 0, 1) 100%);
    background: -ms-linear-gradient(top, rgb(215, 143, 47) 0%, rgb(19, 19, 19) 100%);
    background: linear-gradient(to bottom, rgb(215, 143, 47) 0%, rgb(19, 19, 19) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f4676e', endColorstr='#4d406f', GradientType=0);
    border: 5px solid #eee;
}


.wrapper h1 {
    font-weight: 100;
    margin: 0px;
    padding: 0px;
}
</style>
