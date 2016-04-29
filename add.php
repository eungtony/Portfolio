<?php require('inc/header.php');
$cats = App::getDb()->query('SELECT * from categories');
/*if (!empty($_POST['titre'])) {
  $titre = $_POST['titre'];
  var_dump($titre);
}*/
if (!empty($_POST['titre']) && !empty($_FILES['projet']) && empty($_POST['projet'])) {
  $titre = $_POST['titre'];
  $contenu = $_POST['contenu'];
  $categorie = $_POST['categorie'];
  $thumb = $_FILES['thumb'];
  $thumb_tmp_name = $thumb['tmp_name'];
  $thumb_name = $thumb['name'];
  $projet = $_FILES['projet'];
  $projet_tmp_name = $projet['tmp_name'];
  $projet_name = $projet['name'];
  $date = $_POST['date'];
  App::getDb()->query_prepare('INSERT INTO travaux
    SET titre_travaux = ?, contenu_travaux = ?, thumb_travaux = ?, lien_travaux = ?, id_categorie_ = ?, date_travaux = ?',
    [$titre, $contenu, $thumb_name, $projet_name, $categorie, $date]);
}

if (!empty($_POST['titre']) && !empty($_POST['projet'])) {
  $titre = $_POST['titre'];
  $contenu = $_POST['contenu'];
  $categorie = $_POST['categorie'];
  $thumb = $_FILES['thumb'];
  $thumb_tmp_name = $thumb['tmp_name'];
  $thumb_name = $thumb['name'];
  $projet_name = $_POST['projet'];
  $date = $_POST['date'];
  App::getDb()->query_prepare('INSERT INTO travaux
    SET titre_travaux = ?, contenu_travaux = ?, thumb_travaux = ?, lien_travaux = ?, id_categorie_ = ?, date_travaux = ?',
    [$titre, $contenu, $thumb_name, $projet_name, $categorie, $date]);
}

?>

<div class="container" style="margin-top:50px;">
  <div class="col-md-8 col-md-offset-2">
    <form class="" action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="">Titre</label>
        <input type="text" name="titre" class="form-control" value="">
      </div>
      <div class="form-group">
        <label>Contenu</label>
        <textarea name="contenu" rows="8" cols="40" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label class="control-label">Thumb</label>
        <input type="file" class="form-control" name="thumb">
      </div>
      <div class="form-group">
        <label>Travaux</label>
        <input type="file" name="projet" class="form-control">
        <input type="text" class="form-control" name="projet" value="">
      </div>
      <div class="form-group">
        <select class="form-control" name="categorie">
          <?php foreach ($cats as $key => $cat): ?>
            <option value="<?= $cat['id_categorie'] ?>"><?= $cat['titre_categorie'] ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="form-group">
        <label >Date</label>
          <input type="text" class="form-control datepicker" id="date" name="date" required>
      </div>
      <div class="form-group">
        <button type="submit" name="button" class="btn btn-success">Ajouter</button>
      </div>
    </form>
  </div>
</div>

<?php require('inc/footer.php') ?>
