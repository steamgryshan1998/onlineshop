<template>
    <div style="width: 1095px">
        <ul class="nav " style=" padding-left: 47px; padding-right: 0px; padding-top: 42px">
            <div class="col-3"></div>
            <li class="col-4" style="padding-left: 20px; max-width: 303px; padding-top: 6px">
                <sidebar></sidebar>
            </li>
            <li class="col-5" style="padding-top: 5px">
                <ul class="nav " style=" padding-left: 0px; padding-right: 0px">
                    <li class="col-7" style="padding-left: 0px; ">
                        <h4 style="padding-bottom: 5px; padding-top: 4px; "> Our Location</h4>
                        <p style="line-height: 180%;">Office address <br>
                            124,Lorem Ipsum has been<br>
                        text ever since the 1500
                            <div style="line-height: 200%;"><i class="fas fa-phone-alt"></i>+91-9987-654-321</div></p>

                        <h5 style="padding-bottom: 13px; padding-top: 22px"> Careers </h5>
                        <h6 style="line-height: 180%;">dummy text ever since the 1500s,<br>
                            simply dummy text of the<br>
                            typesetting industry.</h6>
                        <a href="mailto:careers@yourdomain.com" target="_top" style="color: rgb(214, 142, 47)"><br><i class="fas fa-envelope"></i>  careers@yourdomain.com</a>

                        <h4 style="padding-bottom: 5px;padding-top: 60px">Say Hello </h4>
                        simply dummy text of the printing and typesetting industry.
                        <a href="mailto:careers@yourdomain.com" target="_top" style="color: rgb(214, 142, 47)"><br><i class="fas fa-envelope"></i>  info@yourdomailname.com</a>


                    </li>
                    <li class="col-3" style="padding-left: 0px">
                        <form action="#">

                            <fieldset style="padding-bottom: 20px; padding-left: 58px; padding-top: 4px;">
                                <input id="name"  placeholder="Name" style="width: 575px"><p style="padding: 10px 10px 5px 0px; height: 0px; "></p>
                                <input id="email" placeholder="Email"style="width: 575px"><p style="padding: 0px 10px 12px 0px"></p>
                                <input id="telephone" placeholder="Phone number"style="width: 575px"><p style="padding: 2px 10px 10px 0px"></p>
                                <input id="subject" placeholder="Subject"style="width: 575px; "><p style="padding: 0px 10px 14px 0px"></p>
                                <textarea id="comments" placeholder="Message" style="width: 575px;height: 143px; padding: 0px 10px 10px 0px"></textarea>
                                <p><button class="btn mt_30" type="submit" style="
     -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    box-sizing: border-box;
    margin: 0;
    font: inherit;
    overflow: visible;
    -webkit-appearance: button;
    font-family: inherit;
    display: inline-block;
    font-size: 14px;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    touch-action: manipulation;
    cursor: pointer;
    user-select: none;
    border: 1px solid transparent;
    margin-top: 10px;
    background: #424242 none repeat scroll 0 0;
    border-radius: 0;
    color: #fff;
    padding: 10px 20px;
    text-transform: uppercase;
    font-weight: 500;">Send Message</button></p>
                            </fieldset>



                        </form>

                    </li>
                </ul>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d85729.44003399092!2d35.03452191976823!3d47.81934544903659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dc5e2f4c081c77%3A0xcd696846a61d9cb6!2z0KXQvtGA0YLQuNGG0LA!5e0!3m2!1sru!2sua!4v1630497333991!5m2!1sru!2sua" width="800" height="450" style="border:0; margin-top: 20px; " allowfullscreen="" loading="lazy"></iframe>
            </li>
        </ul>
    </div>

</template>

<script>

import Sidebar from "./ Global_sidebar/Sidebar";


export default {
    name: "Contact",
    components: {Sidebar}
}
</script>
<style scoped>
body {
    background: rgb(215, 143, 47);
    background: -moz-linear-gradient(left, rgb(214, 142, 47) 0%, rgb(245, 141, 97) 50%, rgb(214, 142, 47) 100%);
    /*background: -webkit-gradient(left top, right top, color-stop(0%, rgb(213, 141, 47)), color-stop(50%, rgba(245,141,97,1)), color-stop(100%, rgb(213, 141, 47)));*/
    background: -webkit-linear-gradient(left, rgb(214, 142, 47) 0%, rgb(245, 141, 97) 50%, rgb(214, 142, 47) 100%);
    background: -o-linear-gradient(left, rgb(214, 142, 47) 0%, rgb(245, 141, 97) 50%, rgb(214, 142, 47) 100%);
    background: -ms-linear-gradient(left, rgb(214, 142, 47) 0%, rgb(245, 141, 97) 50%, rgb(214, 142, 47) 100%);
    background: linear-gradient(to right, rgb(214, 142, 47) 0%, rgb(245, 141, 97) 50%, rgb(214, 142, 47) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f4676e', endColorstr='#f4676e', GradientType=1 );
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.container {
    margin:50px auto;
    width:900px;

}

.fa-envelope {
    color: rgb(214, 142, 47);
}

.client {
    width:248px;
    height:220px;
    background-color: rgba(229, 134, 10, 0.66);
    text-align:center;
    float:left;
    font-family: 'Open Sans', sans-serif;
    letter-spacing:1px;
    -webkit-transition: all 0.1s;
    -moz-transition: all 0.1s;
    transition: all 0.1s;
    border-right:1px solid #d78f2f;
    border-bottom:1px solid #d78f2f;
    cursor:pointer;
}

.logo {
    display:block;
    width:110px;
    height:110px;
    -webkit-border-radius: 80%;
    -moz-border-radius: 80%;
    border-radius: 80%;
    border: 2px solid #eee;
    margin-bottom:20px;
    background-color:#eee;
    margin: 25px auto;
}

.client h3 {
    font-size:16px;
    color: #ff8e00;
    padding:0px;
    margin:0px;
}

.client h6 {
    color: #9b5719;
}

.client h3 {
    font-weight:100;
    margin-top:0px;
}


.client:hover .logo {
    background: rgb(215, 143, 47);
    background: -moz-linear-gradient(top, rgb(215, 143, 47) 0%, rgb(7, 5, 4) 100%);
    background: -webkit-linear-gradient(top, rgb(215, 143, 47) 0%, rgb(3, 3, 2) 100%);
    background: -o-linear-gradient(top,rgb(215, 143, 47) 0%, rgb(0, 0, 1) 100%);
    background: -ms-linear-gradient(top, rgb(215, 143, 47) 0%, rgb(19, 19, 19) 100%);
    background: linear-gradient(to bottom, rgb(215, 143, 47) 0%, rgb(19, 19, 19) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f4676e', endColorstr='#4d406f', GradientType=0 );
    border:5px solid #eee;
}

.wrapper {
    -webkit-box-shadow: 10px 10px 91px 0px rgb(215, 143, 47);
    -moz-box-shadow: 10px 10px 91px 0px rgb(215, 143, 47);
    box-shadow: 10px 10px 91px 0px rgb(215, 143, 47);
    z-index:0;
    font-family: 'Open Sans', sans-serif;
    color:#fff;
    padding:20px;
    width:707px;


    position:relative;
    top:0px;
    z-index:-1;
}

.wrapper h1 {
    font-weight:100;
    margin:0px;
    padding:0px;
}

input[type=text] { padding: 3px; }
input { width: 544px; height: 43px; }
textarea { width: 544px; height: 110px; }
textarea[type=text] { padding: 3px; }
</style>
