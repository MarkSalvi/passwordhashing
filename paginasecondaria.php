
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center">Password Hashing</h1>
        </div>
    </div>
    <hr>
    <form method="post" action="#">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <h3 class="card-title text-center my-2">Password</h3>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <input type="password" class="form-control" name="password" placeholder="<?=$password?>" disabled>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <button type="submit" class="form-control btn btn-warning">Resetta Password</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="row">
        <div class="col">
            <h1 class="text-center">Cifro la parola inserita</h1>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <a>Utilizzo la funzione di Hash <code class="text-danger">password_hash(password,algoritmocrittgrafico)</code>per cifrare la parola inserita </a>
                            <input type="password" class="form-control"  placeholder="<?php $password_criptata = password_hash($password, PASSWORD_BCRYPT); echo $password_criptata; ?>" disabled>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>

    <div class="row">
        <div class="col">
            <h1 class="text-center">Controllo Corrispondenza</h1>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <a>Utilizzo la funzione <code class="text-danger">password_verify(password,hash)</code>per valutare la corrsispondenza tra la password e l'hash ottenuto </a>
                        </div>
                        <?php
                if(password_verify($password,$password_criptata)){
                            ?>
                        <div class="col">
                            <a class="text-success">Corrispondenza avvenuta </a>
                        </div>
                        <?php
                        }else{
                        ?>


                        <div class="col">
                            <a class="text-danger">Corrispondenza non avvenuta </a>
                        </div>
                    </div>

                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>


