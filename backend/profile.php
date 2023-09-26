<?php

include "./backend_inc/header.php";

?>

<div class="container-fluid">
    <h2>Profile Page</h2>

    <div class="row">

    <div class="col-lg-8">
        <form action="">
            <div class="row">
                <div class="col-lg-4">

                    <label for="profile_img" style="width : 100%;"></label><img style="width: 200px; height: 200px; object-fit: cover" class="profile_image" src="https://api.dicebear.com/7.x/initials/svg?seed=<?= $_SESSION['auth']['fname'] ?>&backgroundColor=000080" alt="">
                    <input type="file" id="profile_img" class="profile_pic_selector">

                </div>
                <div class="col-lg-8">

                    <input value="<?= $_SESSION['auth']['fname'] ?>" class="form-control my-2" type="text" placeholder="First Name">
                    <input value="<?= $_SESSION['auth']['lname'] ?>" class="form-control my-2" type="text" placeholder="Last Name">
                    <input value="<?= $_SESSION['auth']['email'] ?>" class="form-control my-2" type="text" placeholder="Email Address">
                    <button class="btn btn-primary">Update</button>

                </div>
            </div>
        </form>
    </div>
    <div class="col-lg-4">

        <div class="card shadow p-3 rounded">

            <form action="">
                        
                <input type="password" class="form-control my-3" placeholder="Old Password">
                <input type="password" class="form-control my-3" placeholder="New Password">
                <input type="password" class="form-control my-3" placeholder="Confirm Password">
                <button class="btn testBtn btn-primary w-100">Update</button>

            </form>
        </div>

    </div>

</div>

</div>

<?php

include "./backend_inc/footer.php";

?>

<script>

    let profileInput = document.querySelector('.profile_pic_selector')
    let profileImage =document.querySelector('.profile_image')

    function updateImage(event) {
        let url = URL.createObjectURL(event.target.files[0])
        profileImage.src = url
        console.log(url)
    }
    profileInput.addEventListener('change', updateImage)
</script>