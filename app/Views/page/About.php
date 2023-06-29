<?= $this->extend('Template/template'); ?>

<?= $this->section('content'); ?>
<h1><?= $title; ?></h1>
<hr>
<p><?= $content; ?></p>

<?= $this->endsection(); ?>