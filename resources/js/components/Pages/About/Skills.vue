<template>
    <div>

        <h2>SKILLS</h2>
        <hr>
        <!-- Индикатор выполнения с темой success -->
        <div class="progress" style="width: 520px; height: 30px; background-color: white;">
            <div class="progress-bar bg-success" role="progressbar" style=" text-align: left; padding-left: 10px;width: 60%; font-weight:bold" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" >HTML / HTML5</div>
            <div class="progress-bar bg-white" role="progressbar" style="text-align: left; padding-left: 10px;width: 20%; font-weight:bold; color: #1d2124" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" ></div>
            <div class="progress-bar bg-white" role="progressbar" style="width: 20%; font-weight:bold; color: #1d2124" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" >60%</div>
        </div>
        <br>
        <div class="progress" style="width: 520px; height: 30px; background-color: white;">
            <div class="progress-bar bg-info" role="progressbar" style="text-align: left; padding-left: 10px;width: 40%; font-weight:bold" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" >ASP.Net</div>
            <div class="progress-bar bg-white" role="progressbar" style="text-align: left; padding-left: 10px;width: 40%; font-weight:bold; color: #1d2124" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" ></div>
            <div class="progress-bar bg-white" role="progressbar" style="width: 20%; font-weight:bold; color: #1d2124" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" >40%</div>
        </div>
        <br>
        <div class="progress" style="width: 520px; height: 30px; background-color: white;">
            <div class="progress-bar " role="progressbar" style=" text-align: left; padding-left: 10px; background-color: orange; width: 20%; font-weight:bold" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" >Java</div>
            <div class="progress-bar bg-white" role="progressbar" style="width: 60%; font-weight:bold; color: #1d2124" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" ></div>
            <div class="progress-bar bg-white" role="progressbar" style="width: 20%; font-weight:bold; color: #1d2124" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" >60%</div>
        </div>
        <br>
        <div class="progress" style="width: 520px; height: 30px; background-color: white;">
            <div class="progress-bar bg-danger" role="progressbar" style="text-align: left; padding-left: 10px;width: 60%; font-weight:bold" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" >JavaScript / jQuery</div>
            <div class="progress-bar bg-white" role="progressbar" style="text-align: left; padding-left: 10px;width: 20%; font-weight:bold; color: #1d2124" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" ></div>
            <div class="progress-bar bg-white" role="progressbar" style="width: 20%; font-weight:bold; color: #1d2124" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" >60%</div>
        </div>
        <br>
        <div class="progress" style="width: 520px; height: 30px; background-color: white;">
            <div class="progress-bar " role="progressbar" style="text-align: left; padding-left: 10px;width: 80%;background-color: orchid; font-weight:bold" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" >CSS / CSS3</div>
            <div class="progress-bar bg-white" role="progressbar" style="width: 20%; font-weight:bold; color: #1d2124" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> 80%</div>
        </div>


        </li>

    </div>


</template>


<script>

export default {
    name: "Skills_about"
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
