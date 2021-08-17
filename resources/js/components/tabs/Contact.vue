<template>
<div class="row">
    <div class="col-6">
        <h5>Our Location</h5>
            <p>Office address
            124,Lorem Ipsum has been
            text ever since the 1500
                +91-9987-654-321</p>
        <h5>Careers</h5>
            <p>dummy text ever since the 1500s, simply dummy text of the typesetting industry.
                careers@yourdomain.com</p>
        <h5>Say Hello</h5>
            <p>simply dummy text of the printing and typesetting industry.
            info@yourdomailname.com</p>
    </div>
    <div class="col-6">
        <form>
            <div class="form-group">
                <input type="text" class="form-control" id="location" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="number" aria-describedby="emailHelp" placeholder="Phone number">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="website" placeholder="Subject">
            </div>
            <div class="input-group">
                <textarea class="form-control" aria-label="Education" placeholder="Message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
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
</style>
