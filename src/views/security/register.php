<?php include_once "../src/views/layout/header.php"; ?>

<div class="row">
    <div class="col-lg-4 offset-lg-4">

        <h2>Inscription</h2>


        <form action="<?= url('register', true) ?>" method="post" novalidate="novalidate">

            <!-- Token -->

            <!-- Firstname -->
            <div class="mb-3">
                <label for="firstname">Prénom</label>
                <input type="text" class="form-control <?= isInvalid("firstname") ?>" id="firstname" name="firstname" value="<?= $firstname ?>">
                <?= hasError("firstname") ?>
                
                <?php if ( isset( $_SESSION['errors']['firstname'] ) ): ?>
                <p class="invalid-feedback"><?= $_SESSION['errors']['firstname'] ?></p>
                <?php endif; ?>
            </div>

            <!-- Lastname -->
            <div class="mb-3">
                <label for="lastname">Nom</label>
                <input type="text" class="form-control" id="lastname" name="lastname" value="<?= $lastname ?>">
            </div>

            <!-- Birthday -->
            <div class="mb-3">
                <label for="birthday">Date de naissance</label>

                <div class="row">
                    <!-- jour -->
                    <div class="col-lg-4">
                        <select class="form-control" name="birth[day]" id="birthday">
                            <option value="">Jour</option>
                            <?php for ($i=1; $i<=31; $i++): ?>
                            <option <?= $i == $birth_day ? "selected":null ?> value="<?= $i ?>"><?= $i ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>

                    <!-- mois -->
                    <div class="col-lg-4">
                        <select class="form-control" name="birth[month]">
                            <option value="">Mois</option>
                            <?php for ($i=1; $i<=12; $i++): ?>
                            <option <?= $i == $birth_month ? "selected":null ?> value="<?= $i ?>"><?= $i ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>

                    <!-- années -->
                    <div class="col-lg-4">
                        <select class="form-control" name="birth[year]">
                            <option value="">Année</option>
                            <?php for ($i=$date_start; $i>=$date_end; $i--): ?>
                                <option <?= $i == $birth_year ? "selected":null ?> value="<?= $i ?>"><?= $i ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $email ?>">
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <!-- Password Confirm -->
            <div class="mb-3">
                <label for="confirm_password">Confirmation du mot de passe</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password">
            </div>

            <!-- Agree Terms -->
            <div class="mb-3">
                <input type="checkbox" id="agreeTerms" name="agreeTerms">
                <label for="agreeTerms">J'accepte le CGV</label>
            </div>

            <!-- Submit -->
            <button type="submit">Je m'inscris</button>

        </form>

    </div>
</div>

<?php include_once "../src/views/layout/footer.php"; ?>