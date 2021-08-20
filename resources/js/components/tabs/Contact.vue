<template>
<div class="container">
    <div class="row">
        <div class="col-4">
        <h5>Our Location</h5>
            <p>Office address<br>
            124,Lorem Ipsum has been<br>
            text ever since the 1500<br>
                <i class="fas fa-phone-alt"></i>   +91-9987-654-321</p>
        </div>
        <div class="col-4">
        <h5>Careers</h5>
            <p>dummy text ever since the 1500s,<br> simply dummy text of the<br> typesetting industry.<br>
                <i class="fas fa-envelope-open-text"></i>careers@yourdomain.com</p>
        </div>
        <div class="col-4">
        <h5>Say Hello</h5>
            <p>simply dummy text of the printing<br> and typesetting industry.<br>
                <i class="fas fa-envelope-open-text"></i>info@yourdomailname.com</p>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <input type="text" class="form-control" id="location" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <input type="number" class="form-control" id="number" aria-describedby="emailHelp" placeholder="Phone number">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="website" placeholder="Subject">
            </div>
        </div>
    </div>
    <div class="row down">
            <div class="input-group">
                <textarea class="form-control" aria-label="Education" placeholder="Message"></textarea>
            </div>
                <button style="width: 100%" type="button" class="btn btn-primary">Sent</button>
    </div>
</div>
</template>

<script>
export default {
    name: "Contact"
}
</script>

<style scoped>
h1{
    text-align: center;
}
.container{
    padding-top: 6rem;
}
.down{
    padding-left: 15px;
    padding-right: 15px;
}
.input-group{
    margin-bottom: 1rem;
}
</style>
