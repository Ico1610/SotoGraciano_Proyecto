<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.22/dist/sweetalert2.all.min.js" ></script>

<?php if ($entrar=="admin") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: '¡B I E N V E N I D O!',
                    text:'al sistema ... <?php echo $_SESSION['user'] ?>',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='menu.php';
                    });
    }
    mensaje();
</script>

<?php } elseif ($entrar=="estandar") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: '¡B I E N V E N I D O!',
                    text:'al sistema ... <?php echo $_SESSION['user'] ?>',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='administrar.php';
                    });
    }
    mensaje();
</script>

<?php } elseif ($entrar=="error1") { ?>
<script>
    function mensaje()
    {
        Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Usuario y contraseña incorrectas ',
                    text:'por favor verifique ...',
                    showConfirmButton: false,
                    timer: 2000
                    }).then(function(){
                        location.href='login.php';
                    });
    }
    mensaje();
</script>
<?php } ?>